<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../../logo/n.png">
    <link rel="stylesheet" href="../../../style/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style.css">
    <title>Question Bank</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand text-capitalize"><b>Question Bank</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="../MCQ_View.php">Home</a>
                </li>
              </ul>
            </div>
       </nav>
    </header>
<?php

  
session_start();

if(isset($_SESSION['user_pass'])){

    if(isset($_GET['subject_id'])){

        $m_id = $_GET['subject_id'];

        $conn = new mysqli("localhost","root","","question_bank_db");

        $sql = "SELECT * FROM mcq_question WHERE  m_id = $m_id";

        $result1 = $conn->query($sql);

        if($result1->num_rows > 0){
            $row = $result1->fetch_assoc();
                
                echo '<div class="container my-4">
                        <div class="row justify-content-center" >
                            <div class="col-lg-8 col-md-10 col-12 pt-3" id = "s_register">
                                <table class="table" id="s_register">
                                    <thead>
                                        <tr class="bg-info text-center text-white">
                                            <th scope="col" colspan="2"><h2 class="mb-0">'.$row['m_subject'].'</h2></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="col" colspan="2">(Q) '.$row['m_question'].'</th>
                                        </tr>
                                        <tr>
                                            <td scope="col">1. '.$row['op1'].'</td>
                                            <td scope="col">2. '.$row['op2'].'</td>
                                        </tr>
                                        <tr>
                                            <td scope="col">3. '.$row['op3'].'</td>
                                            <td scope="col">4. '.$row['op4'].'</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="text-center" id="s_register">
                                    <a class="btn btn-light" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        VIEW ANSWER
                                    </a>
                                </p>';

                        if($row['correct_option'] == 1){
                            echo '<div class="collapse" id="collapseExample">
                                    <div class="card card-body mb-3">
                                        <h3>1. '.$row['op1'].'</h3>
                                        <h6>'.$row['explantion'].'</h6>
                                    </div>
                                  </div>';
                        }   
                        else if($row['correct_option'] == 2){
                            echo '<div class="collapse" id="collapseExample">
                                        <div class="card card-body mb-3">
                                            <h3>2. '.$row['op2'].'</h3>
                                            <h6>'.$row['explantion'].'</h6>
                                        </div>
                                  </div>';
                        }
                        else if($row['correct_option'] == 3){
                            echo '<div class="collapse" id="collapseExample">
                                        <div class="card card-body mb-3">
                                            <h3>3. '.$row['op3'].'</h3>
                                            <h6>'.$row['explantion'].'</h6>
                                        </div>
                                  </div>';
                        }
                        else{
                            echo '<div class="collapse" id="collapseExample">
                                        <div class="card card-body mb-3">
                                            <h3>4. '.$row['op4'].'</h3>
                                            <h6>'.$row['explantion'].'</h6>
                                        </div>
                                  </div>';
                        }
                   echo '</div>
                    </div>
                </div>';
                                
            }
        
    }

}
else{
    header("location:../../teacher_login.html");
}


?>

    <script type="text/javascript" src="../../../style/jquary.js"></script>
    <script type="text/javascript" src="../../../style/bootstrap.min.js"></script>
</body>
</html>