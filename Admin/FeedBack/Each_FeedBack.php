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
    <style>
      #scroll_question{
        overflow-y: scroll;
        height: 10cm;
        width: 97%;
      }
    </style>
    <title>FeedBack's</title>
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand text-capitalize" href="index.html"><b><i class="fa fa-comments-o" aria-hidden="true"></i> FeedBack Detail's </b></a>
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
        <?php

        session_start();

        if(isset($_SESSION['user_pass']))
        {
            $conn = new mysqli("localhost", "root", "", "question_bank_db");
            
            if($conn->connect_error)
            {
                die("Your Connection is not working");
            }

            $id = $_GET['id'];

            $sql = "UPDATE feedback SET seen='1' WHERE f_id='$id'";

            if($conn->query($sql)){

                $sql = "SELECT * FROM feedback WHERE f_id = $id";

                $result = $conn->query($sql);

                if($result->num_rows){
                    $row = $result->fetch_assoc();
                   
                    echo '<section>
                            <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12 mx-auto my-4" id="s_register">
                                            <div class="my-3 text-center">
                                                <h1><i class="fa fa-comments-o" aria-hidden="true"></i> FeedBack</h1>
                                            </div>
                                            <form>
                                                <div class="form-row mb-2">
                                                    <div class="col-lg-2">
                                                        <label>Email</label>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" type="text" value="'.$row['f_email'].'" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-row mb-2">
                                                    <div class="col-lg-2">
                                                        <label>Rate</label>
                                                    </div>
                                                    <div class="col-lg-10">';
                                                    if($row['f_rate'] == "5"){
                                                        echo '
                                                                <i class="fa fa-star text-success" aria-hidden="true"></i>
                                                                <i class="fa fa-star text-success" aria-hidden="true"></i>
                                                                <i class="fa fa-star text-success" aria-hidden="true"></i>
                                                                <i class="fa fa-star text-success" aria-hidden="true"></i>
                                                                <i class="fa fa-star text-success" aria-hidden="true"></i>
                                                              ';
                                                    }
                                                    else if($row['f_rate'] == "4"){
                                                        echo '
                                                                <i class="fa fa-star text-primary" aria-hidden="true"></i>
                                                                <i class="fa fa-star text-primary" aria-hidden="true"></i>
                                                                <i class="fa fa-star text-primary" aria-hidden="true"></i>
                                                                <i class="fa fa-star text-primary" aria-hidden="true"></i>
                                                              ';
                                                    }
                                                    else if($row['f_rate'] == "3"){
                                                        echo '
                                                                <i class="fa fa-star text-info" aria-hidden="true"></i>
                                                                <i class="fa fa-star text-info" aria-hidden="true"></i>
                                                                <i class="fa fa-star text-info" aria-hidden="true"></i>
                                                              ';
                                                    }
                                                    else if($row['f_rate'] == "2"){
                                                        echo '
                                                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                              ';
                                                    }
                                                    else{
                                                        echo ' 
                                                                <i class="fa fa-star text-danger" aria-hidden="true"></i>
                                                              '; 
                                                    }
                                                    
                                            echo '</div>
                                                </div>
                                                <div class="form-row mb-2">
                                                    <div class="col-lg-2">
                                                        <label>Massage</label>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <textarea class="form-control" readonly>'.$row['f_massage'].'</textarea>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="text-center my-4 pb-1 pt-3">
                                                <a href="./View_Feedback.php"><button class="btn btn-secondary">Back</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </section>';
                }
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