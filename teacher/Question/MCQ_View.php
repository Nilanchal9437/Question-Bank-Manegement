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
    <style>
      #scroll_question{
        overflow-y: scroll;
        height: 11cm;
        width: 97%;
      }
     
    </style>
    <title>MCQ Bank</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand text-capitalize"><b>MCQ Bank</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="../Teacher_Login.php">Home</a>
                </li>
                <li class="nav-item">
                  <form style="display:inline-flex; float:right;" action="" method="POST">
                    <input class="form-control mr-sm-2" type="text" name="mcq_question_search" placeholder="MCQ Search" aria-label="Search">
                    <button class="btn btn-primary mx-1" type="submit" name="mcq_search"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </form>
                </li>
              </ul>
            </div>
       </nav>
    </header>
    <section>
        <div class="container my-3" id="s_register">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                  <div class="my-3 w-100 text-center">
                      <h1>MCQ Detail</h1>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-12 p-0 mx-3 mb-4">
                  <div id="scroll_question">
                   <table class="table" id="s_register" >
                      <thead class="text-white" id="table_design">
                          <tr>
                              <th scope="col">Sl NO</th>
                              <th scope="col">Subject Name</th>
                              <th scope="col">Question</th>
                              <th scope="col" class="text-center">EDIT</th>
                          </tr>
                      </thead>
                      <tbody id="table_design">
                        <?php
                            
                            session_start();

                            if(isset($_SESSION['user_id'])){
                                
                                $conn = new mysqli("localhost", "root", "", "question_bank_db");

                                if($conn->connect_error){
                                    die("Your connection is not working properly");
                                }

                                $user_id = $_SESSION['user_id'];

                                $sql = "SELECT * FROM teacher WHERE email = '$user_id'";

                                $t_data = $conn->query($sql);

                                if($t_data->num_rows > 0){
                                  
                                  $row = $t_data->fetch_assoc();
                                  
                                  $id = $row['t_id'];
                                  
                                  if(isset($_POST['mcq_search'])){

                                    $search = $_POST['mcq_question_search'];

                                    $sql = "SELECT * FROM mcq_question WHERE uploded_by ='$id' AND m_subject='$search' OR m_question='$search' OR explantion='$search' ORDER BY m_id DESC";

                                    $result = $conn->query($sql);

                                    $key = 0;

                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                          $key += 1;
                                            echo "<tr>
                                                    <td>".$key."</td>
                                                    <td>".$row['m_subject']."</td>
                                                    <td class='w-50'>".$row['m_question']."</td>
                                                    <td class='text-center'>
                                                        <a type='button' class='btn btn-success' href='./MCQ_edit/View.php?subject_id=$row[m_id]' ><i class='fa fa-eye fa-1x' aria-hidden='true'></i></a>                        
                                                        <a type='button' class='btn btn-warning' href='./MCQ_edit/Update.php?subject_id=$row[m_id]'><i class='fa fa-pencil fa-1x' aria-hidden='true'></i></a>
                                                        <a type='button' onclick='return check()' class='btn btn-danger'  href='./MCQ_edit/Delete.php?subject_id=$row[m_id]'><i class='fa fa-trash fa-1x' aria-hidden='true'></i></a>
                                                    </td>
                                                  </tr>";
                                        }
                                    }
                                    else{
                                      echo "<tr>
                                              <td> None </td>
                                              <td> None </td>
                                              <td class='w-50'> None </td>
                                              <td class='text-center'>
                                                  <a type='button' class='btn btn-success' ><i class='fa fa-eye fa-1x' aria-hidden='true'></i></a>                        
                                                  <a type='button' class='btn btn-warning' ><i class='fa fa-pencil fa-1x' aria-hidden='true'></i></a>
                                                  <a type='button' class='btn btn-danger'><i class='fa fa-trash fa-1x' aria-hidden='true'></i></a>
                                              </td>
                                            </tr>";
                                    } 
                                  }
                                  else{
                                    $sql = "SELECT * FROM mcq_question WHERE uploded_by = $id";

                                    $result = $conn->query($sql);

                                    $key = 0;

                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                          $key += 1;
                                            echo "<tr>
                                                    <td>".$key."</td>
                                                    <td>".$row['m_subject']."</td>
                                                    <td class='w-50'>".$row['m_question']."</td>
                                                    <td class='text-center'>
                                                        <a type='button' class='btn btn-success' href='./MCQ_edit/View.php?subject_id=$row[m_id]' ><i class='fa fa-eye fa-1x' aria-hidden='true'></i></a>                        
                                                        <a type='button' class='btn btn-warning' href='./MCQ_edit/Update.php?subject_id=$row[m_id]'><i class='fa fa-pencil fa-1x' aria-hidden='true'></i></a>
                                                        <a type='button' onclick='return check()' class='btn btn-danger'  href='./MCQ_edit/Delete.php?subject_id=$row[m_id]'><i class='fa fa-trash fa-1x' aria-hidden='true'></i></a>
                                                    </td>
                                                  </tr>";
                                        }
                                    } 
                                  }
                                }
                            }
                            else{
                                header("location:../teacher_login.html");
                            }


                        ?>
                      </tbody>
                  </table>
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
    <script type="text/javascript" src="../../style/jquary.js"></script>
    <script type="text/javascript" src="../../style/bootstrap.min.js"></script>
    <script>
       function check(){
           var data = confirm("Are you sure you want to Delete the MCQ question");
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