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
    <title>Student Profile Update</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand text-capitalize"><b> Student Profile Update </b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="./View.php"><i class="fa fa-home" aria-hidden="true"></i>Home <span class="sr-only">(current)</span></a>
                </li>
              </ul>
            </div>
          </nav>
    </header>

<?php

session_start();

if(isset($_SESSION['user_pass']))
{
    $id = $_GET['id'];

    $_SESSION['id'] = $id;

    $conn = new mysqli("localhost","root","","question_bank_db");


    if($conn->connect_error){
        die("Your connection is not working");
    }

    $sql = "SELECT * FROM student WHERE s_id=$id";

    $result = $conn->query($sql);

    if($result->num_rows > 0)
    {
        $row = $result->fetch_assoc();

        $name = $row['s_name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $address = $row['s_address'];
        $gender = $row['gender'];
        $dob = $row['dob'];
        echo '<section>
                    <div class="container">
                        <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 mx-auto my-4" id="s_register">
                                <form action="Update_data.php" method="POST">
                                    <h3 class="text-center text-capitalize my-2"><i class="fa fa-user" aria-hidden="true"></i>Update Profile</h3>
                                    <br>
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label>Name</label>
                                        </div>
                                        <div class="form-group col-md-10">
                                            <input type="text" class="form-control" name="t_name" value="'.$name.'" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label>Email</label>
                                        </div>
                                        <div class="form-group col-md-10">
                                            <input type="text" class="form-control" name="e_mail" value="'.$email.'" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label>Address</label>
                                        </div>
                                        <div class="form-group col-md-10">
                                            <input type="text" class="form-control" name="address" value="'.$address.'" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label>Gender</label>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <select id="inputState" name="gender" class="form-control" required>';
                                                
                                                if($gender === "FEMALE"){
                                                    echo '<option value="'.$gender.'">'.$gender.'</option>
                                                          <option value="MALE">MALE</option>
                                                          <option value="OTHER">OTHER</option>';
                                                }
                                                else if($gender === "MALE"){
                                                    echo '<option value="'.$gender.'">'.$gender.'</option>
                                                          <option value="FEMALE">FEMALE</option>
                                                          <option value="OTHER">OTHER</option>';
                                                }
                                                else{
                                                    echo '<option value="'.$gender.'">'.$gender.'</option>
                                                          <option value="FEMALE">FEMALE</option>
                                                          <option value="MALE">MALE</option>';
                                                }
                                        echo '</select>
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label>DOB</label>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <input type="date" class="form-control" name="dob" value="'.$dob.'" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label>Phone No</label>
                                        </div>
                                        <div class="form-group col-md-10">
                                            <input type="number" class="form-control" name="phone_no" value="'.$mobile.'" required>
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                       <div class="form-group col-md-12 text-center">
                                            <button type="submit" name="UPDATE_STUDENT" class="btn btn-warning my-1"><i class="fa fa-pencil fa-1x" aria-hidden="true"></i> UPDATE</button>
                                            <a href="./View.php"><button type="button" class="btn btn-secondary my-1"><i class="fa fa-sign-out" aria-hidden="true"></i> BACK</button></a>                      
                                        </div>    
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>';
    }
}
else{
    header("location:../Admin_login.html");
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
    <script type="text/javascript" src="../../style/jquary.js"></script>
    <script type="text/javascript" src="../../style/bootstrap.min.js"></script>
</body>
</html>