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
    <title>Teacher Password Update</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand text-capitalize"><b> Teacher Password Update </b></a>
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

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 mx-auto my-4 text-center" id="s_register">
                    <form onsubmit="return validation()" action="" method="POST">
                        <h3 class="text-center text-capitalize my-2"><i class="fa fa-user" aria-hidden="true"></i> Set New Password</h3>
                        <br>
                        <h4 class="text-center text-capitalize my-2">
                            <?php
                               
                                
                                session_start();

                                if(isset($_SESSION['user_pass']))
                                { 
                                    $id = $_GET['id'];

                                    $conn = new mysqli("localhost","root","","question_bank_db");
                                    
                                    if($conn->connect_error){
                                        die("Your connection is not working");
                                    }

                                    $sql = "SELECT * FROM teacher WHERE t_id = $id";

                                    $result = $conn->query($sql);

                                    if($result->num_rows > 0){
                                        $row = $result->fetch_assoc();

                                        echo "$row[t_name]";
                                    }
                                }
                                else{
                                    header("location:../Admin_login.html");
                                }
                            ?>
                        
                        </h4>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label>Password</label>
                            </div>
                            <div class="form-group col-md-10">
                                <input type="password" class="form-control" name="password" id="password_id" required>
                            </div>
                        </div>
                        <span id="pass_message" style="color: red;"></span>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label>Confirm Password</label>
                            </div>
                            <div class="form-group col-md-10">
                                <input type="password" class="form-control" name="c_password" id="cpassword" required>
                            </div>
                        </div>
                        <span id="cpass_message" style="color: red;"></span>
                        <div class="text-center my-2 pb-4">
                            <input type="submit" class="btn btn-primary" name="set_password" value="SET">
                            <a href="./View.php"><button type="button" class="btn btn-secondary">Back</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php

if(isset($_POST['set_password'])){
    $id = $_GET['id'];

    $pass = $_POST['password'];

    $conn = new mysqli("localhost","root","","question_bank_db");

    if($conn->connect_error){
        die("Your connection is not working");
    }

    $sql = "UPDATE teacher SET t_password='$pass'  WHERE t_id=$id";

    if($conn->query($sql)){
        header("location:./View.php");
    }
}


?>

    <script type="text/javascript" src="../../style/jquary.js"></script>
    <script type="text/javascript" src="../../style/bootstrap.min.js"></script>
    <script type="text/javascript" src="../Javascript/Validation.js"></script>
</body>
</html>