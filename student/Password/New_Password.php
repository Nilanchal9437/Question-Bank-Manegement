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
    <title>Student Password Update</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand text-capitalize"><b> Student Password Update </b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="../../index.html"><i class="fa fa-home" aria-hidden="true"></i>Home <span class="sr-only">(current)</span></a>
                </li>
              </ul>
            </div>
          </nav>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 mx-auto my-4 text-center" id="s_register">
                    <form onsubmit="return validation()" action="Update_New_Password.php" method="POST">
                        <h3 class="text-center text-capitalize my-2"><i class="fa fa-user" aria-hidden="true"></i> Set New Password</h3>
                        <br>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label>Email</label>
                            </div>
                            <div class="form-group col-md-10">
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                        <span style="color: red;">
                            <?php
                                if(isset($_GET['error']))
                                {
                                    if($_GET['error'] == "true"){
                                        echo "<small> Your Email does not match try to use correct Email</small>";
                                    }
                                    else{
                                        echo "";
                                    }   
                                }
                            ?>
                        </span>
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
                            <a href="../student_login.html"><button type="button" class="btn btn-secondary">Back</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="../../style/jquary.js"></script>
    <script type="text/javascript" src="../../style/bootstrap.min.js"></script>
    <script type="text/javascript" src="../Javascript/Validation.js"></script>
</body>
</html>