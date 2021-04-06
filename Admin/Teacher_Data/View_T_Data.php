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
        <title>Teacher Profile</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand text-capitalize"><b>Teacher Deatil</b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="./View.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
                    </li>
                    </ul>
                </div>
           </nav>
        </header>
        <section>
            <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 mx-auto my-4" id="s_register">
                            <form>
        <?php
            session_start();

            if(isset($_SESSION['user_pass']))
            {
                $conn = new mysqli("localhost", "root", "", "question_bank_db");
        

                if($conn->connect_error){
                    die("Your connection is not working properly");
                }

                $id = $_GET['id'];

                $sql = "SELECT * FROM teacher WHERE t_id=$id";

                $result = $conn->query($sql);
                if($result->num_rows){
                    $row = $result->fetch_assoc();

                    echo '  <div class="my-3 text-center">
                                <h1><i class="fa fa-user" aria-hidden="true"></i>Teacher Profile</h1>
                            </div>
                            <div class="form-row my-2">
                                <div class="col">
                                    <label>Teacher Name</label>
                                </div>
                                <div class="col">
                                    <input class="form-control" type="text" value="'.$row['t_name'].'" readonly>
                                </div>
                            </div>
                            <div class="form-row mb-2">
                                <div class="col">
                                    <label>Email</label>
                                </div>
                                <div class="col">
                                    <input class="form-control" type="text" value="'.$row['email'].'" readonly>
                                </div>
                            </div>
                            <div class="form-row mb-2">
                                <div class="col">
                                    <label>Phone Number</label>
                                </div>
                                <div class="col">
                                    <input class="form-control" type="text" value="'.$row['mobile'].'" readonly>
                                </div>
                            </div>
                            <div class="form-row mb-2">
                                <div class="col">
                                    <label>Gender</label>
                                </div>
                                <div class="col">
                                    <input class="form-control" type="text" value="'.$row['gender'].'" readonly>
                                </div>
                            </div>
                            <div class="form-row mb-2">
                                <div class="col">
                                    <label>Date Of Birth</label>
                                </div>
                                <div class="col">
                                    <input class="form-control" type="text" value="'.$row['dob'].'" readonly>
                                </div>
                            </div>
                            <div class="form-row mb-2">
                                <div class="col">
                                    <label>Address</label>
                                </div>
                                <div class="col">
                                    <input class="form-control" type="text" value="'.$row['t_address'].'" readonly>
                                </div>
                            </div>
                        ';
                }
            }
            else{
                header("location:../Admin_login.html");
            }
        ?>

                        </form>
                        <div class="text-center my-4 pb-1 pt-3">
                            <a href="./View.php"><button class="btn btn-secondary">Back</button></a>
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
        <script type="text/javascript" src="../../style/jquary.js"></script>
        <script type="text/javascript" src="../../style/bootstrap.min.js"></script>
    </body>
</html>