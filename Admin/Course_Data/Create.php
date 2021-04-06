<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../logo/n.png">
    <link rel="stylesheet" href="../../style/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Course Detail's</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand text-capitalize" href="index.html"><b><i class="fa fa-book" aria-hidden="true"></i> Course Detail's </b></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="../Admin_start.php"><i class="fa fa-home" aria-hidden="true"></i>Home <span class="sr-only">(current)</span></a>
              </li>
            </ul>
          </div>
        </nav>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 mx-auto my-4" id="s_register">
                    <div class="my-3 text-center">
                        <h1><i class="fa fa-book" aria-hidden="true"></i> Course Detail's </h1>
                        
    <?php
        
        session_start();

        if(isset($_SESSION['user_pass']))
        {

            $course = strtoupper($_POST["Course_Name"]);
            $branch = strtoupper($_POST["Branch_Name"]);
            $subject = strtoupper($_POST["Subject_Name"]);

            $conn = new mysqli("localhost", "root", "","question_bank_db");

            if($conn->connect_error){
                die("Your connection is not working");
            }
        
            $sql = "SELECT * FROM course WHERE course='$course' AND branch='$branch' AND c_subject='$subject'";

            $result = $conn->query($sql);

            if($result->num_rows > 0){
                $row = $result->fetch_assoc();

            echo '<h3 class="text-center text-danger">This course is already present</h3>
                    </div>
                    <form>
                    <div class="form-group">
                        <label>Course Name</label>
                        <input type="text" class="form-control" value="'.$row['course'].'" readonly>
                    </div>
                    <div class="form-group">
                        <label>Branch</label>
                        <input type="text"  class="form-control" value="'.$row['branch'].'" readonly>
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <input type="text"  class="form-control" value="'.$row['c_subject'].'"readonly>
                    </div>';
            }
            else{
                $sql = "INSERT INTO course(c_id, course, branch, c_subject) VALUE(0, '$course', '$branch', '$subject')";

                if($conn->query($sql)){
                    echo '<h3 class="text-center text-success">Thank you for register new course</h3>
                        </div>
                        <form>
                        <div class="form-group">
                                <label>Course Name</label>
                                <input type="text" class="form-control" value="'.$course.'" readonly>
                            </div>
                            <div class="form-group">
                                <label>Branch</label>
                                <input type="text"  class="form-control" value="'.$branch.'" readonly>
                            </div>
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text"  class="form-control" value="'.$subject.'"readonly>
                            </div>';
                }
            }
        }
        else{
            header("location:../Admin_login.html");
        }
    ?>
                            <div class="text-center my-4 pb-1 pt-3">
                                <a href="../Admin_start.php"><button type="button" class="btn btn-secondary">Back</button></a>
                            </div>
                        </form>
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
    <script type="text/javascript" src="../../style/jquary.js"></script>
    <script type="text/javascript" src="../../style/bootstrap.min.js"></script>
</body>
</html>