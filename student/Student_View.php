<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo/n.png">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./design/style.css">
    <title>Student</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand text-capitalize"><b><i class="fa fa-question-circle" aria-hidden="true"></i> Question Bank</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
              <?php
                    session_start();

                    if(isset($_SESSION['user_id'])){

                      $user_id = $_SESSION['user_id'];

                      $conn = new mysqli("localhost", "root", "", "question_bank_db");

                      if($conn->connect_error){
                          die("Your connection is not working properly Please check your connection");
                      }

                      $sql = "SELECT * FROM student WHERE email='$user_id'";

                      $result = $conn->query($sql);

                      if($result->num_rows > 0){
                          $row = $result->fetch_assoc();

                          $user = $row['s_name'];

                          echo '<li class="nav-item active">
                                  <a class="nav-link"> WELCOME '.$user.'</a>
                                </li>';
                      }
                    }
                    else{
                        header("location:./student_login.html");
                    }
                ?>
                <li class="nav-item">
                  <a class="nav-link" href="../index.html"><i class="fa fa-home" aria-hidden="true"></i> HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./Logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>LOGOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./Profile/Profile_Update.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> PROFILE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.html">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a type="button" class="nav-link" data-toggle="modal" data-target="#staticBackdrop">
                    <i class="fa fa-comments-o" aria-hidden="true"></i>FEEDBACK
                    </a>

                  <!-- Modal -->
                  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">FeedBack</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="../Admin/FeedBack/Student_Insert.php" method="POST" >
                        <div class="form-row my-2">
                            <div class="col-lg-2">
                                <label>Email</label>
                            </div>
                            <div class="col-lg-10">
                                <input class="form-control" type="email" name="f_email"  placeholder="Enter you email" required>
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-lg-2">
                                <label>Rate</label>
                            </div>
                            <div class="col-lg-5 ">
                                <i class="fa fa-star text-success" aria-hidden="true"></i>
                                <i class="fa fa-star text-success" aria-hidden="true"></i>
                                <i class="fa fa-star text-success" aria-hidden="true"></i>
                                <i class="fa fa-star text-success" aria-hidden="true"></i>
                                <i class="fa fa-star text-success" aria-hidden="true"></i><br />
                                <i class="fa fa-star text-primary" aria-hidden="true"></i>
                                <i class="fa fa-star text-primary" aria-hidden="true"></i>
                                <i class="fa fa-star text-primary" aria-hidden="true"></i>
                                <i class="fa fa-star text-primary" aria-hidden="true"></i><br />
                                <i class="fa fa-star text-info" aria-hidden="true"></i>
                                <i class="fa fa-star text-info" aria-hidden="true"></i>
                                <i class="fa fa-star text-info" aria-hidden="true"></i><br />
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i><br />
                                <i class="fa fa-star text-danger" aria-hidden="true"></i><br />
                            </div>
                            <div class="col-lg-5">
                                <input type="radio" name="rate" value="5" required /> Outstanding <br />
                                
                                <input type="radio" name="rate" value="4" required /> Excellent <br />
                                
                                <input type="radio" name="rate" value="3" required /> Very Good <br />
                                
                                <input type="radio" name="rate" value="2" required /> Good <br />
                                
                                <input type="radio" name="rate" value="1" required /> Not Bad <br />
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-lg-2">
                                <label>Massage</label>
                            </div>
                            <div class="col-lg-10">
                                <textarea class="form-control" name="massage" required></textarea>
                            </div>
                        </div>         
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" name="give">Submit</button>    
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
       </nav>
    </header>
    
    <section>
        <div class="container-fluid pb-2">
          <div class="row justify-content-center">
            <div class="col-lg-3 col-md-12 col-12 mt-2">
              <nav class="navbar" style="background-color:#7b7b7b;">
                <ul class="navbar-nav">
                  <li class="nav-item mx-auto">
                  <form style="display:inline-flex;" action="" method="POST">
                      <input class="form-control mr-sm-2" type="text" name="MCQ_search" placeholder="MCQ Search" aria-label="Search">
                      <button class="btn btn-primary mx-1" type="submit" name="mcq_search"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                  </li>
                </ul>
              </nav>
              <div id="scroll_question" style="border:2px solid #7b7b7b;">
              <table class="table table-striped" id="s_register">
                <thead class="bg-info text-white">
                    <tr>
                        <th scope="col">MCQ SUBJECT</th>
                        <th scope="col" class="text-center">VIEW</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    $conn = new mysqli("localhost", "root", "", "question_bank_db");

                    if($conn->connect_error){
                        die("Your connection is not working properly");
                    }

                    if(isset($_POST['mcq_search'])){

                      $search = strtoupper($_POST['MCQ_search']);

                      $sql = "SELECT DISTINCT m_subject FROM mcq_question WHERE m_subject='$search'";



                      $result = $conn->query($sql);

                      if($result->num_rows > 0){

                        while($row = $result->fetch_assoc()){

                        echo "<tr>
                                    <td class='w-50'>".$row['m_subject']." MCQ</td>";
                                    if($row['m_subject'] == "C++"){
                                      echo "<td class='w-25 text-center'><a style='float:right;' href='./MCQ_view/View.php?subject=cpp' class='btn btn-light'>View</a></td>
                                        </tr>";
                                    } 
                                    else if($row['m_subject'] == "C#"){
                                      echo "<td class='w-25 text-center'><a style='float:right;' href='./MCQ_view/View.php?subject=chash' class='btn btn-light'>View</a></td>
                                        </tr>";
                                    } 
                                    else{
                                      echo "<td class='w-25 text-center'><a style='float:right;' href='./MCQ_view/View.php?subject=$row[m_subject]' target=\"_blank\" class='btn btn-light'>View</a></td>
                                            </tr>";
                                    }
                                  }

                      }
                      else{
                        echo "<tr>
                                 <td class='w-50'> None </td>
                                 <td class='w-25 text-center'><a style='float:right;' class='btn btn-light'>View</a></td>
                             </tr>";
                                
                      }
                    }
                    else{

                      $sql = "SELECT DISTINCT m_subject FROM mcq_question ORDER BY mcq_question.m_id DESC";

                      $result = $conn->query($sql);

                      if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                          echo "<tr>
                                  <td class='w-50'>".$row['m_subject']." MCQ</td>";
                                  if($row['m_subject'] == "C++"){
                                    echo "<td class='w-25 text-center'><a style='float:right;' href='./MCQ_view/View.php?subject=cpp' class='btn btn-light'>View</a></td>
                                      </tr>";
                                  } 
                                  else if($row['m_subject'] == "C#"){
                                    echo "<td class='w-25 text-center'><a style='float:right;' href='./MCQ_view/View.php?subject=chash' class='btn btn-light'>View</a></td>
                                      </tr>";
                                  } 
                                  else{
                                    echo "<td class='w-25 text-center'><a style='float:right;' href='./MCQ_view/View.php?subject=$row[m_subject]' target=\"_blank\" class='btn btn-light'>View</a></td>
                                          </tr>";
                                  }         
                        }
                      }
                    
                    }
                  ?>
                </tbody>
              </table>
              </div>
            </div>
            <div class="col-lg-9 col-md-12 col-12 mt-2" >
              <nav class="navbar" style="background-color:#7b7b7b;">
                <a class="navbar-brand text-capitalize" style="color:#ffffff;"><b>WELCOME TO QUESTION BANK</b></a>
                <ul class="navbar-nav">
                  <li class="nav-item">
                  <form style="display:inline-flex;" action="" method="POST">
                      <input class="form-control mr-sm-2" type="text" name="Question_search" placeholder="Question Search" aria-label="Search">
                      <button class="btn btn-primary mx-1" type="submit" name="question_search"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                  </li>
                </ul>
              </nav>
              <div id="scroll_question" style="border:2px solid #7b7b7b;">
                <table class="table" id="s_register">
                  <tbody id="question">
                      <?php

$conn = new mysqli("localhost","root","","question_bank_db");

if($conn->connect_error){
  die("Your connection is not working properly");
}

if(isset($_POST['question_search'])){

    $search = strtoupper($_POST['Question_search']);

    $sql = "SELECT * FROM university_questions WHERE approved = '1' AND uni_name='$search' OR course='$search' OR branch='$search' OR subject='$search' OR semester='$search' ORDER BY q_id DESC";

    $result = $conn->query($sql);

    if($result->num_rows > 0){

      while($row = $result->fetch_assoc()){

        $path = $row['file_location'];
        
        echo "<tr>
                <td colspan=2><h4><u><a href='../teacher/Question/question_edit/$path' target='_blank'>$row[uni_name] Year : $row[year]&nbsp; Question</a></u></h4></td>
              </tr>
              <tr>  
                <td>Course : <a>$row[course]</a></td>
                <td>Branch : <a>$row[branch]</a></td>
              </tr>
              <tr>  
                <td>Subject :  <a>$row[subject]</a></td>
                <td>Semester : <a>$row[semester]</a></td>
              </tr>";
      }
      
    }
    else{
      echo "<tr>
              <td colspan=2><h4><u><a>None Year : None Question</a></u></h4></td>
            </tr>
            <tr>  
              <td>Course : <a>None</a></td>
              <td>Branch : <a>None</a></td>
            </tr>
            <tr>  
              <td>Subject :  <a>None</a></td>
              <td>Semester : <a>None</a></td>
            </tr>";
    }

}
else{
  $sql = "SELECT * FROM university_questions WHERE approved = '1' ORDER BY q_id DESC";

  $result = $conn->query($sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $path = $row['file_location'];
      
      echo "<tr>
              <td colspan=2><h4><u><a href='../teacher/Question/question_edit/$path' target='_blank'>$row[uni_name] Year : $row[year]&nbsp; Question</a></u></h4></td>
            </tr>
            <tr>  
              <td>Course : <a>$row[course]</a></td>
              <td>Branch : <a>$row[branch]</a></td>
            </tr>
            <tr>  
              <td>Subject :  <a>$row[subject]</a></td>
              <td>Semester : <a>$row[semester]</a></td>
            </tr>";
      
    }
  }
}
                      ?>
                  </tbody>
                </table>  
              </div>
            </div>
          </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="my-3 text-center">
              <h1> OUR PERFORMANCE </h1>
              <hr class="w-50"> 
            </div>
            <div class="row" id="s_register">
              <div class="col-lg-6 col-md-6 col-12 my-5">
                <div id="footer_design">
                  <table class="tabel mx-auto" >
                    <?php

                      $sql = "SELECT * FROM feedback WHERE 1";

                      $result = $conn->query($sql);

                      $rate1 = 0;
                      $rate2 = 0;
                      $rate3 = 0;
                      $rate4 = 0;
                      $rate5 = 0;

                      if($result->num_rows > 0){
                          while($row = $result->fetch_assoc()){
                            if($row['f_rate'] == "1"){
                              $rate1 += 1;
                            }
                            else if($row['f_rate'] == "2"){
                              $rate2 += 1;
                            }
                            else if($row['f_rate'] == "3"){
                              $rate3 += 1;
                            }
                            else if($row['f_rate'] == "4"){
                              $rate4 += 1;
                            }
                            else{
                              $rate5 += 1;
                            }
                          }
                          echo '<tr>
                                  <td class=\'w-25\'>
                                    <div class="mx-auto">
                                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                                    </div>
                                  </td>
                                  <td class=\'w-75\'>
                                    <div class="progress w-75 mx-auto">
                                      <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="'.$rate5.'" aria-valuemin="0" aria-valuemax="100" style="width: '.($rate5*2).'%"></div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td class=\'w-25\'>
                                    <div class="mx-auto">
                                      <i class="fa fa-star text-primary" aria-hidden="true"></i>
                                      <i class="fa fa-star text-primary" aria-hidden="true"></i>
                                      <i class="fa fa-star text-primary" aria-hidden="true"></i>
                                      <i class="fa fa-star text-primary" aria-hidden="true"></i>                            
                                    </div>
                                  </td>
                                  <td class=\'w-75\'>
                                    <div class="progress w-75 mx-auto">
                                      <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="'.$rate4.'" aria-valuemin="0" aria-valuemax="100" style="width: '.($rate4*2).'%"></div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td class=\'w-25\'>
                                    <div class="mx-auto">
                                      <i class="fa fa-star text-info" aria-hidden="true"></i>
                                      <i class="fa fa-star text-info" aria-hidden="true"></i>
                                      <i class="fa fa-star text-info" aria-hidden="true"></i>
                                    </div>
                                  </td>
                                  <td class=\'w-75\'>
                                    <div class="progress w-75 mx-auto" >
                                      <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="'.$rate3.'" aria-valuemin="0" aria-valuemax="100" style="width: '.($rate3*2).'%"></div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td class=\'w-25\'>
                                    <div class="mx-auto">
                                      <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                      <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    </div>
                                  </td> 
                                  <td class=\'w-75\'> 
                                    <div class="progress w-75 mx-auto">
                                      <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="'.$rate2.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$rate2.'%"></div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td class=\'w-25\'>
                                    <div class="mx-auto">
                                      <i class="fa fa-star text-danger" aria-hidden="true"></i>
                                    </div>
                                  </td>
                                  <td class=\'w-75\'>
                                    <div class="progress w-75 mx-auto">
                                      <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="'.$rate1.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$rate1.'%"></div>
                                    </div>
                                  </td>
                                </tr>';
                      }

                    ?>
                  </table>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12 my-3">
                  <div id="feed" class="p-3">  
                      <div class="text-center py-2  bg-info" id="feedback">
                        <h5><i class="fa fa-comments-o" aria-hidden="true"></i> FeedBack</h5> 
                      </div>  
                      <div id="scroll_question1" class="mb-2 pt-2">
                                <?php

                                   if(isset($_SESSION['user_id']))
                                   {
                                        $conn = new mysqli("localhost", "root", "", "question_bank_db");
                                        
                                        if($conn->connect_error)
                                        {
                                            die("Your Connection is not working");
                                        }

                                       
                                        $sql = "SELECT * FROM feedback WHERE 1 ORDER BY f_id DESC";

                                        $result = $conn->query($sql);

                                        $key = 0;
                                            if($result->num_rows > 0){
                                                while($row = $result->fetch_assoc()){
                                                    $key += 1;
                                                    echo "<div class=\"p-3\">
                                                            <h6><i class='fa fa-user-circle-o' aria-hidden='true' style=\"font-size:25px\"></i> ".$row['f_email']."</h6>
                                                            <small>".$row['f_massage']."</small>";
                                                            if($row['f_rate'] == "5"){
                                                                echo '<span>
                                                                        <i class="fa fa-star text-success" aria-hidden="true"></i>
                                                                        <i class="fa fa-star text-success" aria-hidden="true"></i>
                                                                        <i class="fa fa-star text-success" aria-hidden="true"></i>
                                                                        <i class="fa fa-star text-success" aria-hidden="true"></i>
                                                                        <i class="fa fa-star text-success" aria-hidden="true"></i>
                                                                      </span>';
                                                            }
                                                            else if($row['f_rate'] == "4"){
                                                                echo '<span>
                                                                        <i class="fa fa-star text-primary" aria-hidden="true"></i>
                                                                        <i class="fa fa-star text-primary" aria-hidden="true"></i>
                                                                        <i class="fa fa-star text-primary" aria-hidden="true"></i>
                                                                        <i class="fa fa-star text-primary" aria-hidden="true"></i>
                                                                      </span>';
                                                            }
                                                            else if($row['f_rate'] == "3"){
                                                                echo '<span>
                                                                        <i class="fa fa-star text-info" aria-hidden="true"></i>
                                                                        <i class="fa fa-star text-info" aria-hidden="true"></i>
                                                                        <i class="fa fa-star text-info" aria-hidden="true"></i>
                                                                      </span>';
                                                            }
                                                            else if($row['f_rate'] == "2"){
                                                                echo '<span>
                                                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                                      </span>';
                                                            }
                                                            else{
                                                                echo '<span>
                                                                        <i class="fa fa-star text-danger" aria-hidden="true"></i>
                                                                      </span>'; 
                                                            }

                                                    echo "</div>";
                                                }
                                            }
                                        

                                    }
                                    else{
                                        header("location:../student_login.html");
                                    }
                                ?>
                    </div>
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
   <script type="text/javascript" src="../style/jquary.js"></script>
   <script type="text/javascript" src="../style/bootstrap.min.js"></script>
</body>
</html>
