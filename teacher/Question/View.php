<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../logo/n.png">
    <link rel="stylesheet" href="../../style/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../design/style.css">
    <style>
      #scroll_question{
        overflow-y: scroll;
        height: 11cm;
      }
     
    </style>
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
                  <a class="nav-link" href="../Teacher_Login.php">Home</a>
                </li>
              </ul>
            </div>
       </nav>
    </header>
    <section>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12" id="s_register">
                <div class="my-3 w-100 text-center">
                    <h1><i class="fa fa-university" aria-hidden="true"></i> University Question Detail</h1>
                </div>
                <div id=scroll_question class="mb-4">
                <table class="table table-striped">
                    <thead class="bg-info text-white text-center">
                        <tr>
                            <th scope="col">Sl NO</th>
                            <th scope="col">University Name</th>
                            <th scope="col">Branch</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Year</th>
                            <th scope="col">Question</th>
                        </tr>
                    </thead>
                    <tbody>

<?php
    session_start();

    if(isset($_SESSION['user_id'])){

        $conn = new mysqli("localhost", "root", "", "question_bank_db");

        if($conn->connect_error){
            die("Your connection is not working properly Please check your connection");
        }

        $user_id = $_SESSION['user_id'];

        $sql = "SELECT * FROM teacher WHERE email='$user_id'";

        $result = $conn->query($sql);

        $id = "";
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $id = $row['t_id'];
        }

        $sql = "SELECT * FROM university_questions WHERE uploaded_by ='$id'";

        $question = $conn->query($sql);

        $key = 0;
        if($question->num_rows > 0){
            while($row = $question->fetch_assoc()){
                $key += 1;
                echo '<tr>
                        <th scope="row" class="text-center" >'.$key.'</th>
                        <td class="w-25">'.$row["uni_name"].'</td>
                        <td>'.$row["branch"].'</td>
                        <td class="w-25">'.$row["subject"].'</td>
                        <td class="text-center">'.$row["year"].'</td>
                        <td class="text-center"> 
                            <a type="button" class="btn btn-success" href="./question_edit/'.$row['file_location'].'" target="_blank"><i class="fa fa-eye fa-1x" aria-hidden="true"></i></a>                        
                            <a type="button" class="btn btn-warning" href="./question_edit/Update.php?id='.$row['q_id'].'"><i class="fa fa-pencil fa-1x" aria-hidden="true"></i></a>
                            <a type="button" onclick="return check()" class="btn btn-danger"  href="./question_edit/Delete.php?id='.$row['q_id'].'"><i class="fa fa-trash fa-1x" aria-hidden="true"></i></a>
                        </td>
                      </tr>';
            }
        }
    }
    else{
        header("location:../teacher_login.html");
    }
?>
                     </tbody>
                  </table>
                  </div>
                </div>
            </div>
        </div>
    </section>

    <section >
      <div class="container-fluid bg-secondary mt-4" style="font-size:40px;" id="footer1">
        <div class="row justify-content-lg-center" >
          <div class="col-lg-8 col-md-10 col-12 text-center">
            <i class="fa fa-facebook-square" aria-hidden="true"></i>
            <i class="fa fa-whatsapp" aria-hidden="true"></i>
            <i class="fa fa-youtube-square" aria-hidden="true"></i>
            <i class="fa fa-twitter-square" aria-hidden="true"></i>
            <i class="fa fa-linkedin-square" aria-hidden="true"></i>
            <i class="fa fa-envelope" aria-hidden="true"></i>
          </div>
         </div>
      </div>
  </section>
  <section>
      <div class="container-fluid bg-dark" id="footer2">
        <div class="row justify-content-lg-center">
          <div class="col-lg-6 col-md-6 col-12 text-center">
            <h1 class="text-center">AppStone.in</h1>
              <a class="text-light">@ 2012 next stack web design University</a>
          </div>
        </div>
      </div>
 </section> 
    <script type="text/javascript" src="../../style/jquary.js"></script>
    <script type="text/javascript" src="../../style/bootstrap.min.js"></script>
    <script>
       function check(){
           var data = confirm("Are you sure you want to Delete the university question");
           if(data){
               return true;
           }
           else{
               return false;
           }
       }
   </script>
</body>
</html>