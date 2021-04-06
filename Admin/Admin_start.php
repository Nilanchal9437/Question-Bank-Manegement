<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="icon" href="../logo/n.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./Animation.css">
    <title>ADMIN</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand text-capitalize"><b>
                ADMIN SECTION
            </b></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
                
                session_start();

                if(isset($_SESSION['user_pass']))
                { 
                    $conn = new mysqli('localhost', 'root', '','question_bank_db');

                    if($conn->connect_error){
                        die('Your connection is not working');
                    }   
                    echo '<ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" style="color:#fff"><b><i class="fa fa-user-circle-o" aria-hidden="true"></i> WELCOME '.strtoupper($_SESSION["user_data"]).'</b></a>
                            </li>';       
                }
                else{
                    header("location:./Admin_login.html");
                }
            
            ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html"><i class="fa fa-home" aria-hidden="true"></i>HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>LOGOUT <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Admin_Edit/View.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> PROFILE </a>
                    </li>
                    <li class="nav-item">
                        <?php

                            $sql = "SELECT * FROM contact WHERE seen='0'";
                            
                            $result = $conn->query($sql);

                            $key = 0;
                            if($result->num_rows > 0 ){
                                while($row = $result->fetch_assoc()){
                                    $key += 1;
                                }
                            }
                            if($key > 0){
                                echo '<a class="nav-link text-danger" href="./Contact_US/View_Massage.php"><span class="badge badge-danger badge-pill">'.$key.'</span> CONTACT<i class="fa fa-address-book" aria-hidden="true"></i></a>';
                            }
                            else{
                                echo '<a class="nav-link" href="./Contact_US/View_Massage.php">CONTACT<i class="fa fa-address-book" aria-hidden="true"></i></a>';
                            }
                            
                        ?>
                    </li>
                    <li class="nav-item">
                        <?php

                            $sql = "SELECT * FROM feedback WHERE seen='0'";

                            $result1 = $conn->query($sql);

                            $key1 = 0;
                            if($result1->num_rows > 0 ){
                                while($row = $result1->fetch_assoc()){
                                    $key1 += 1;
                                }
                            }
                            if($key1 > 0){
                                echo '<a class="nav-link text-primary" href="./FeedBack/View_Feedback.php"><span class="badge badge-primary badge-pill">'.$key1.'</span> FEEDBACK<i class="fa fa-comments-o" aria-hidden="true"></i></a>';
                            }
                            else{
                                echo '<a class="nav-link" href="./FeedBack/View_Feedback.php">FEEDBACK<i class="fa fa-comments-o" aria-hidden="true"></i></a>';
                            }
                        ?>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section>
    <div class="container-fluid mt-2" id="main">
        <div class="row">
          <div class="col-12">
              <div id="stars"></div>
              <div id="stars2"></div>
              <div id="stars3"></div>
            <div class="sky-container m-auto" >
              <div id="stars"></div>
              <div id="stars2"></div>
              <div id="stars3"></div>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
            </div>
            
            <div id="title">
              <span>WELCOME TO QUESTION BANK MANEGEMENT</span>
            </div>
            
          </div>
        </div>
      </div>
    </section>


    <section>
        <div class="container mt-1">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="text-center pt-4">
                        <h1>Work Source</h1>
                        <hr class="w-25" style="display:block;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 my-3">
                    <div class="card" id="card_design">
                        <img src="./Images/university.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text-center py-2">
                                <h3 class="card-title"><u>University Detail's</u></h3>
                            </div>
                            <div class="w-100">
                                <p class="card-text">
                                        University can teach you skill and give you opportunity, 
                                        but it can't teach you sense, nor give you understanding.
                                </p>
                            </div>
                            <div class="text-center py-4">
                                <a href="./University_Data/Create.html"><button class="btn btn-success">Create</button></a>
                                <a href="./University_Data/View.php"><button class="btn btn-info">View</button></a>
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="col-lg-4 col-md-4 col-12 my-3">
                    <div class="card"  id="card_design">
                        <img src="./Images/teacher.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text-center py-2">
                                <h3 class="card-title"><u>Teacher Detail's</u></h3>
                            </div>
                            <p class="card-text">
                                    Good teaching must be slow enough so that it is not confusing,
                                    and fast enough so that it is not boring.
                            </p>
                            <div class="text-center py-4">
                                <a href="./Teacher_Data/Create.html"><button class="btn btn-success">Create</button></a>
                                <a href="./Teacher_Data/View.php"><button class="btn btn-info">View</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 my-3" >
                    <div class="card"  id="card_design">
                        <img src="./Images/course.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text-center py-2">
                                <h3 class="card-title"><u>Course Detail's</u></h3>
                            </div>
                            <p class="card-text">
                                The more that you read, the more things you will know.
                                The more that you learn, the more places you’ll go.
                            </p>
                            <div class="text-center py-4">
                                <a href="./Course_Data/Create.html"><button class="btn btn-success">Create</button></a>
                                <a href="./Course_Data/View.php"><button class="btn btn-info">View</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-1">
           <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="text-center pt-4">
                        <h1>View Source</h1>
                        <hr class="w-25" style="display:block;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 my-3">
                    <div class="card"  id="card_design">
                        <img src="./Images/student.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text-center py-2">
                                <h3 class="card-title"><u>Student Detail's</u></h3>
                            </div>
                            <p class="card-text">
                                The man who does not read books has no advantage over the one who cannot read them.
                                Education is the passport to the future.
                            </p>
                            <div class="text-center py-4">
                                <a href="Student_Data/View.php"><button class="btn btn-info">View</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 my-3">
                    <div class="card"  id="card_design">
                        <img src="./Images/question.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text-center py-2">
                                <h3 class="card-title"><u>University Question</u></h3>
                            </div>
                            <p class="card-text">
                                Ever since I was a little girl and could barely talk, 
                                the word ‘why’ has lived and grown along with me… When I got older, 
                                I noticed that not all questions.
                            </p>
                            <div class="text-center py-4">
                                <a href="./Question_Data/View.php"><button class="btn btn-info">View</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 my-3">
                    <div class="card"  id="card_design">
                        <img src="./Images/mcq.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text-center py-2">
                                <h3 class="card-title"><u>MCQ Detail</u></h3>
                            </div>
                            <p class="card-text">
                                I am like that option of the MCQ type question,
                                Comes to your mind only after playing
                                Crazy games to choose one option
                                When you don't know the answer.
                            </p>
                            <div class="text-center py-4">
                                <a href="./MCQ_Data/MCQ_View.php"><button class="btn btn-info">View</button></a>
                            </div>
                        </div>
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
                                      <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="'.$rate5.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$rate5.'%"></div>
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
                                      <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="'.$rate4.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$rate4.'%"></div>
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
                                      <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="'.$rate3.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$rate3.'%"></div>
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

                                   if(isset($_SESSION['user_pass']))
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
                                        header("location:../Admin_login.html");
                                    }
                                ?>
                    </div>
                </div>
              </div>
        </div>
      </div>
    </section>

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
    <script type="text/javascript" src="../style/jquary.js"></script>
    <script type="text/javascript" src="../style/bootstrap.min.js"></script>
</body>
</html>