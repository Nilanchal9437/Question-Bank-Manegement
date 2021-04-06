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
        height: 11.5cm;
        border: 1px solid #dacbcb; 
        border-radius: 5px;
      }
     
    </style>
    <title>MCQ Bank</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand text-capitalize"><b>MCQ Bank</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="../Student_View.php">Home</a>
                </li>
              </ul>
            </div>
       </nav>
    </header>
    
    <?php

      session_start();

      if(isset($_SESSION['user_id'])){

          if(isset($_GET['subject'])){

            $subject = $_GET['subject'];

            if($subject == "chash"){
              $subject="C#";
            }
            else if($subject == "cpp"){
              $subject="C++";
            }
            else{
              $subjectc=$subject;
            }

            echo '<div class="container-fluid my-2">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10 col-12 pt-3">
                            <div class="bg-info text-left text-white p-2"  id="mcq_head">
                                <h2>'.$subject.'
                                <form style="display:inline-flex; float:right;" action="" method="POST">
                                  <input class="form-control mr-sm-2" type="text" name="mcq_question_search" placeholder="MCQ Search" aria-label="Search">
                                  <button class="btn btn-primary mx-1" type="submit" name="mcq_search"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form></h2>
                            </div>
                            <div id="scroll_question" class="mb-2">
                            <table class="table">
                                <tbody>';
            $conn = new mysqli("localhost", "root","","question_bank_db");

            if($conn->connect_error){
                die("Your connection is not working properly");
            }

            if(isset($_POST['mcq_search'])){

              $search = $_POST['mcq_question_search'];

              $sql = "SELECT * FROM mcq_question WHERE m_subject='$subject' AND m_question='$search' OR explantion='$search'";

              $key = 0;

              $result = $conn->query($sql);

              if($result->num_rows > 0){

                  while($row = $result->fetch_assoc()){
                      $key += 1;
                      echo '
                              <tr>
                                  <th scope="col" colspan="2">('.$key.') '.$row['m_question'].'</th>
                              </tr>
                              <tr>
                                  <td scope="col">1. '.$row['op1'].'</td>
                                  <td scope="col">2. '.$row['op2'].'</td>
                              </tr>
                              <tr>
                                  <td scope="col">3. '.$row['op3'].'</td>
                                  <td scope="col">4. '.$row['op4'].'</td>
                              </tr>
                              <tr><td scope="col" colspan="2">
                              <p class="text-center">
                                  <a class="btn btn-light" data-toggle="collapse" href="#collapseExample'.$key.'" role="button" aria-expanded="false" aria-controls="collapseExample'.$key.'">
                                    VIEW ANSWER
                                  </a>
                              </p>';

                          if($row['correct_option'] == 1){
                              echo '<div class="collapse" id="collapseExample'.$key.'">
                                      <div class="card card-body mb-3">
                                          <h3>1. '.$row['op1'].'</h3>
                                          <h6>'.$row['explantion'].'</h6>
                                      </div>
                                      </div>';
                          }   
                          else if($row['correct_option'] == 2){
                              echo '<div class="collapse" id="collapseExample'.$key.'">
                                          <div class="card card-body mb-3">
                                              <h3>2. '.$row['op2'].'</h3>
                                              <h6>'.$row['explantion'].'</h6>
                                          </div>
                                      </div>';
                          }
                          else if($row['correct_option'] == 3){
                              echo '<div class="collapse" id="collapseExample'.$key.'">
                                          <div class="card card-body mb-3">
                                              <h3>3. '.$row['op3'].'</h3>
                                              <h6>'.$row['explantion'].'</h6>
                                          </div>
                                      </div>';
                          }
                          else{
                              echo '<div class="collapse" id="collapseExample'.$key.'">
                                          <div class="card card-body mb-3">
                                              <h3>4. '.$row['op4'].'</h3>
                                              <h6>'.$row['explantion'].'</h6>
                                          </div>
                                      </div>';
                          }
                          echo '</td></tr>';
                    }
                  }
                  else{
                    echo '
                          <tr>
                              <th scope="col" colspan="2">('.$key.') None </th>
                          </tr>
                          <tr>
                              <td scope="col">1. None</td>
                              <td scope="col">2. None</td>
                          </tr>
                          <tr>
                              <td scope="col">3. None</td>
                              <td scope="col">4. None</td>
                          </tr>
                          <tr><td scope="col" colspan="2">
                              <p class="text-center">
                                  <a class="btn btn-light" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample'.$key.'">
                                    VIEW ANSWER
                                  </a>
                              </p>
                      
                              <div class="collapse" id="collapseExample">
                                  <div class="card card-body mb-3">
                                      <h3>None</h3>
                                      <h6>None</h6>
                                  </div>
                              </div>
                          </td></tr>';
                }
           }
           else{

            $sql = "SELECT * FROM mcq_question WHERE m_subject='$subject' ORDER BY m_id DESC";

            $key = 0;

            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $key += 1;
                    echo '
                            <tr>
                                <th scope="col" colspan="2">('.$key.') '.$row['m_question'].'</th>
                            </tr>
                            <tr>
                                <td scope="col">1. '.$row['op1'].'</td>
                                <td scope="col">2. '.$row['op2'].'</td>
                            </tr>
                            <tr>
                                <td scope="col">3. '.$row['op3'].'</td>
                                <td scope="col">4. '.$row['op4'].'</td>
                            </tr>
                            <tr><td scope="col" colspan="2">
                            <p class="text-center">
                                <a class="btn btn-light" data-toggle="collapse" href="#collapseExample'.$key.'" role="button" aria-expanded="false" aria-controls="collapseExample'.$key.'">
                                  VIEW ANSWER
                                </a>
                            </p>';

                        if($row['correct_option'] == 1){
                            echo '<div class="collapse" id="collapseExample'.$key.'">
                                    <div class="card card-body mb-3">
                                        <h3>1. '.$row['op1'].'</h3>
                                        <h6>'.$row['explantion'].'</h6>
                                    </div>
                                    </div>';
                        }   
                        else if($row['correct_option'] == 2){
                            echo '<div class="collapse" id="collapseExample'.$key.'">
                                        <div class="card card-body mb-3">
                                            <h3>2. '.$row['op2'].'</h3>
                                            <h6>'.$row['explantion'].'</h6>
                                        </div>
                                    </div>';
                        }
                        else if($row['correct_option'] == 3){
                            echo '<div class="collapse" id="collapseExample'.$key.'">
                                        <div class="card card-body mb-3">
                                            <h3>3. '.$row['op3'].'</h3>
                                            <h6>'.$row['explantion'].'</h6>
                                        </div>
                                    </div>';
                        }
                        else{
                            echo '<div class="collapse" id="collapseExample'.$key.'">
                                        <div class="card card-body mb-3">
                                            <h3>4. '.$row['op4'].'</h3>
                                            <h6>'.$row['explantion'].'</h6>
                                        </div>
                                    </div>';
                        }
                        echo '</td></tr>';
               }
             }
           }            
                            echo '</tbody>
                            </table>
                            </div>
                            </div>
                    </div>
                </div>';
        }
      }
      else{
        header("location:../teacher_login.html");
      }

    ?>

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
</body>
</html>