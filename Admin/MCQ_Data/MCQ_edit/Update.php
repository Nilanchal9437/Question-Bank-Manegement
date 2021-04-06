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
    <style>
      #scroll_question{
        overflow-y: scroll;
        height: 11cm;
        width: 97%;
      }
     
    </style>
    <title>UPDATE Question</title>
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
                $conn = new mysqli("localhost", "root", "", "question_bank_db");
                if($conn->connect_error)
                {
                    die("Your connection is not working properly");
                }
                if(isset($_GET['subject_id'])){
                    $m_id = $_GET['subject_id'];
                    $sql = "SELECT * FROM mcq_question WHERE m_id=$m_id";

                    $_SESSION['m_id'] = $m_id;
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                        $row = $result->fetch_assoc();

                        echo '<section>
                                <div class="container my-4" >
                                    <form action="Update_MCQ.php" method="post"> 
                                        <div class="row justify-content-center mx-auto" id="s_register">
                                            <div class= \'col-lg-8 col-md-8 col-12\'>
                                                <div class="text-center">
                                                    <h1>UPDATE MCQ</h1>
                                                </div>
                                            </div>            
                                            <div class="col-12">          
                                                <select name="subject" class="form-control" required>
                                                    <option value="'.$row['m_subject'].'">'.$row['m_subject'].'</option>';

                                                        $sql="SELECT DISTINCT c_subject FROM course ORDER BY c_subject";

                                                        $courses=$conn->query($sql);
                                                    
                                                        if($courses->num_rows >0){
                                                            while($c=$courses->fetch_assoc()){
                                                                echo "<option value='$c[c_subject]'>$c[c_subject]</option>";
                                                            }
                                                        }
                            
                                                echo '</select>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-2 pt-2">
                                                <label for="question">(Q)</label> 
                                            </div>
                                            <div class="col-lg-11 col-md-10 col-10 pl-0 pt-2">
                                                <input type="text" name="question" class="form-control" value="'.$row['m_question'].'" required>
                                            </div>

                                            <div class="col-lg-1 col-md-2 col-2 pt-2">
                                                <label for="option1">1. </label> 
                                            </div>
                                            <div class="col-lg-5 col-md-10 col-10 pl-0 pt-2">   
                                                <input type="text" name="option1" class="form-control" value="'.$row['op1'].'" required>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-2 pt-2">
                                                <label for="option2">2. </label> 
                                            </div>
                                            <div class="col-lg-5 col-md-10 col-10 pl-0 pt-2">
                                                <input type="text" name="option2" class="form-control" value="'.$row['op2'].'" required>
                                            </div>

                                            <div class="col-lg-1 col-md-2 col-2 pt-2">
                                                <label for="option3">3. </label> 
                                            </div>
                                            <div class="col-lg-5 col-md-10 col-10 pl-0 pt-2">
                                                <input type="text" name="option3" class="form-control" value="'.$row['op3'].'" required>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-2 pt-2">
                                                <label for="option4">4. </label> 
                                            </div>
                                            <div class="col-lg-5 col-md-10 col-10 pl-0 pt-2">
                                                <input type="text" name="option4" class="form-control" value="'.$row['op4'].'" required>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-3 pt-2">
                                                <label for="correct_option">Correct Option</label> 
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-9 pl-0 pt-2">
                                                <select name="correct_option" class="form-control" required>
                                                    <option value="'.$row['correct_option'].'">Correct option is '.$row['correct_option'].'</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>

                                            <div class="col-lg-12 my-2">
                                                <input type = "text" name="explanation" class="form-control" value="'.$row['explantion'].'" required>
                                            </div>
                                        
                                            <div class="col-lg-12 col-md-12 col-12 text-center mb-2">
                                                <a href="../MCQ_View.php"><button type="button" class="btn btn-dark">Back</button></a>            
                                                <input type="submit" class="btn btn-warning" name="add" Value="UPDATE">
                                            </div>
                                        </div>
                                    </form>    
                                </div>
                            </section>';
                    }
                }
            }
            else{
                header("location:../../teacher_login.html");
              }
        ?>
        <!-- Footer start -->
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
    <!-- Footer End -->
    <script type="text/javascript" src="../../../style/jquary.js"></script>
    <script type="text/javascript" src="../../../style/bootstrap.min.js"></script>
</body>
</html>