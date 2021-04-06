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
    <title>Student's</title>
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand text-capitalize" href="index.html"><b><i class="fa fa-user" aria-hidden="true"></i> Student Detail's </b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../Admin_start.php"><i class="fa fa-home" aria-hidden="true"></i>Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <form class="form-inline my-2 my-lg-0" action="" method="POST">
                    <input class="form-control mr-sm-2" type="text" name="student_search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-info my-2 my-sm-0" type="submit" name="search"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </li>
          </ul>
        </div>
      </nav>
   </header>
   <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-12 mx-auto my-4" id="s_register">
                    <div class="my-3 text-center">
                        <h1><i class="fa fa-users" aria-hidden="true"></i> Student Detail's </h1>
                    </div>
                    <div id="scroll_question" class="mb-3">
                        <table class="table table-striped">
                            <thead class="bg-info text-white text-center">
                                <tr>
                                <th scope="col">Sl NO</th>
                                <th scope="col">Student Name's</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Mobile No</th>
                                <th scope="col">Profile</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                   
                                   session_start();

                                   if(isset($_SESSION['user_pass']))
                                   {
                                        $conn = new mysqli("localhost", "root", "", "question_bank_db");
                                        
                                        if($conn->connect_error)
                                        {
                                            die("Your Connection is not working");
                                        }
                                        if(isset($_POST['search']))
                                        {
                                            $Serach_Bar = ucwords($_POST["student_search"]);

                                            $sql = "SELECT * FROM student WHERE s_id='$Serach_Bar' OR s_name='$Serach_Bar' OR gender='$Serach_Bar'";
                                            
                                            $result = $conn->query($sql);

                                            if($result->num_rows > 0){
                                                while($row = $result->fetch_assoc()){
                                                    echo "<tr>
                                                            <th scope='row'>".$row['s_id']."</th>
                                                            <td class='w-25' >".$row['s_name']."</td>
                                                            <td>".$row['gender']."</td>
                                                            <td>".$row['mobile']."</td>
                                                            <td class='text-center'>
                                                                <a type='button' class='btn btn-success' href='./View_T_Data.php?id=$row[s_id]' ><i class='fa fa-eye fa-1x' aria-hidden='true'></i></a>                        
                                                                <a type='button' class='btn btn-warning' href='./Update.php?id=$row[s_id]' ><i class='fa fa-pencil fa-1x' aria-hidden='true'></i></a>
                                                                <a type='button' class='btn btn-danger' onclick='return check()' href='./Delete.php?id=$row[s_id]' ><i class='fa fa-trash fa-1x' aria-hidden='true'></i></a>                       
                                                            </td>
                                                        </tr>";
                                                }
                                            }
                                            else{
                                                echo "
                                                        <tr>
                                                            <th scope='row'>0</th>
                                                            <td>No data found</td>
                                                            <td>No data found</td>
                                                            <td>No data found</td>
                                                            <td class='text-center'><button class='btn btn-danger'><i class='fa fa-eye fa-1x' aria-hidden='true'></i></td>
                                                        </tr>
                                                    ";
                                            }
                                        }
                                        else{
                                            $sql = "SELECT * FROM student WHERE 1";

                                            $result = $conn->query($sql);

                                            if($result->num_rows > 0){
                                                while($row = $result->fetch_assoc()){
                                                    echo "<tr>
                                                            <th scope='row'>".$row['s_id']."</th>
                                                            <td class='w-25'>".$row['s_name']."</td>
                                                            <td>".$row['gender']."</td>
                                                            <td>".$row['mobile']."</td>
                                                            <td class='text-center'>
                                                                <a type='button' class='btn btn-success' href='./View_T_Data.php?id=$row[s_id]' ><i class='fa fa-eye fa-1x' aria-hidden='true'></i></a>                        
                                                                <a type='button' class='btn btn-warning' href='./Update.php?id=$row[s_id]' ><i class='fa fa-pencil fa-1x' aria-hidden='true'></i></a>
                                                                <a type='button' class='btn btn-danger' onclick='return check()' href='./Delete.php?id=$row[s_id]' ><i class='fa fa-trash fa-1x' aria-hidden='true'></i></a>                        
                                                            </td>
                                                        </tr>";
                                                }
                                            }
                                        }

                                    }
                                    else{
                                        header("location:../Admin_login.html");
                                    }
                                ?>
                            </tbody>
                        </table>
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
   <script>
        function check(){
           var data = confirm("Are you sure you want to Delete the university");
           if(data){
               return true;
           }
           else{
               return false;
           }
       }
   </script>
</body>
</html>