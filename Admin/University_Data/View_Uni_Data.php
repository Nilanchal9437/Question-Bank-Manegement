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
        <title>Admin Profile</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand text-capitalize"><b>University Deatil</b></a>
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

<?php

session_start();

if(isset($_SESSION['user_pass']))
{ 

    $conn = new mysqli("localhost", "root", "", "question_bank_db");
    
    if($conn->connect_error){
        die("Your connection is not working properly");
    }

    $uni_id = $_GET['id'];

    $sql = "SELECT * FROM university WHERE uni_id=$uni_id";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $name = $row['uni_name'];
        $city = $row['city'];
        $state = $row['state'];
    echo '<section>
            <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 mx-auto my-4" id="s_register">
                            <div class="my-3 text-center">
                                <h1><i class="fa fa-university" aria-hidden="true"></i></i>University Profile</h1>
                            </div>
                            <form>
                                <div class="form-row my-2">
                                    <div class="col">
                                        <label>University Name</label>
                                    </div>
                                    <div class="col">
                                        <input class="form-control" type="text" value="'.$name.'" readonly>
                                    </div>
                                </div>
                                <div class="form-row mb-2">
                                    <div class="col">
                                        <label>City Name</label>
                                    </div>
                                    <div class="col">
                                        <input class="form-control" type="text" value="'.$city.'" readonly>
                                    </div>
                                </div>
                                <div class="form-row mb-2">
                                    <div class="col">
                                        <label>State Name</label>
                                    </div>
                                    <div class="col">
                                        <input class="form-control" type="text" value="'.$state.'" readonly>
                                    </div>
                                </div>
                            </form>
                            <div class="text-center my-4 pb-1 pt-3">
                                <a href="./View.php"><button class="btn btn-secondary">Back</button></a>
                            </div>
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
    <script type="text/javascript" src="../../style/jquary.js"></script>
    <script type="text/javascript" src="../../style/bootstrap.min.js"></script>
</body>
</html>