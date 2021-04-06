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
        height: 8cm;
        width:100%;
        border: 1px solid #dacbcb; 
        border-radius: 5px;
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
    <?php

    session_start();

    if(isset($_SESSION['user_id'])){

        $con = new mysqli("localhost", "root", "", "question_bank_db");

        if($con->connect_error){
            die("Your connection is not working properly check your connection");
        }
    }
    else{
        header("location:../teacher_login.html");
    }
    $msg="";

    $sql="SELECT DISTINCT c_subject FROM course ORDER BY c_subject";
    
    $courses=$con->query($sql);

    if (isset($_POST['add'])){
        $subject = $_POST['subject'];
        $question=$_POST['question'];
        $option1=$_POST['option1'];
        $option2=$_POST['option2'];
        $option3=$_POST['option3'];
        $option4=$_POST['option4'];
        $correct_option=$_POST['correct_option'];
        $explanation=$_POST['explanation'];

        $question = str_replace("'", "''", $question);
        $option1 = str_replace("'", "''", $option1);
        $option2 = str_replace("'", "''", $option2);
        $option3 = str_replace("'", "''", $option3);
        $option4 = str_replace("'", "''", $option4);
        $explanation = str_replace("'","''", $explanation);

        $user_id = $_SESSION['user_id'];
        
        $sql = "SELECT t_id FROM teacher WHERE email = '$user_id'";
        
        $result = $con->query($sql);

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();

            $teacher_id = $row['t_id'];

            $qry="";

            for($i=0;$i<count($question);$i++){
                $qry.="INSERT INTO mcq_question VALUES(0,'$subject','$question[$i]','$option1[$i]','$option2[$i]','$option3[$i]','$option4[$i]','$correct_option[$i]','$explanation[$i]','$teacher_id');";
            }
            if($con->multi_query($qry)){
                header("location:../Teacher_Login.php");
                exit();
            }
            else{
                $msg=$con->error;
                echo "$msg";
            }
        }  
    }
    
?>

    <div class="container my-2" id="s_register">
        <form action="" method="post"> 
            <div class="row text-center">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card mt-2">
                        <div class="card-header">
                            <h1>NEW MCQ</h1>
                        </div>
                        <div class="col-lg-6 my-2 mx-auto">          
                            <select name="subject" class="form-control" required>
                                <option value="">Subject</option>
                                <?php
                                    if($courses->num_rows >0){
                                        while($c=$courses->fetch_assoc()){
                                            echo "<option value='$c[c_subject]'>$c[c_subject]</option>";
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
                       
            <div class="row mx-auto" id="scroll_question">        
                <div class="card-body">
                    <div id="questions">
                        <div class="row mt-1 question_row">
                            <div class="col-lg-2">
                                <input type="text" name="question[]" class="form-control" placeholder="Question" required>
                            </div>
                            <div class="col-lg-2">
                            
                                <input type="text" name="option1[]" class="form-control" placeholder="Option One" required>
                            </div>
                            <div class="col-lg-2">
                                
                                <input type="text" name="option2[]" class="form-control" placeholder="Option Two" required>
                            </div>
                            <div class="col-lg-2">
                                
                                <input type="text" name="option3[]" class="form-control" placeholder="Option Three" required>
                            </div>
                            <div class="col-lg-2">
                            
                                <input type="text" name="option4[]" class="form-control" placeholder="Option Four" required>
                            </div>
                            <div class="col-lg-2">
                
                                <select name="correct_option[]" class="form-control" required>
                                    <option value="">Correct Option</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <div class="col-lg-12 my-2">
                                <input type = "text" name="explanation[]" class="form-control" placeholder="Enter your explanation" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-12 col-md-12 col-12 justify-content-center my-2">
                    <button class="btn btn-dark mr-2" onclick="return addRow()">Add More</button>
                    <input type="submit" class="btn btn-primary" name="add" Value="Submit">
                </div>
            </div>
        </form> 
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
    function addRow() {
       
        var element = document.querySelector('.question_row');
        var question = document.querySelector('#questions');

        var clone = element.cloneNode(true);

        var x = clone.getElementsByTagName("input");
        for(let i=0;i<x.length;i++){
            x[i].value='';
        }
        
        question.appendChild(clone);
        return false;
    }
</script>
</body>
</html>