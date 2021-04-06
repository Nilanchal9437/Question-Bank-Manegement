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
    <title>Question Bank</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand text-capitalize"><b>Question Bank Manegement</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="../Teacher_Login.php">Home</a>
                </li>
              </ul>
            </div>
       </nav>
    </header>
    <?php
        session_start();

        if(isset($_SESSION['user_id'])){

            $conn = new mysqli("localhost", "root", "", "question_bank_db");

            if($conn->connect_error){
                die("Your connection is not working properly Please check your connection");
            }
        }
        else{
          header("location:../teacher_login.html");
        }
      
      ?>
      <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 mx-auto my-4" id="s_register">
                        <form action="./question_edit/Create.php" method="POST" enctype="multipart/form-data">
                            <h3 class="text-center text-capitalize my-2">Question Upload Form</h3>
                            <br>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label>University Name</label>
                                </div>
                                <div class="form-group col-md-10">
                                    <select id="inputState" name="uni_name" class="form-control">
                                      <option value="choose the option">choose your option</option>
                                      <?php  
                  
                                            $sql = "SELECT DISTINCT uni_name FROM university WHERE 1";

                                            $result = $conn->query($sql);

                                            if($result->num_rows > 0){
                                              while($row = $result->fetch_assoc()){
                                                echo '<option value="'.$row['uni_name'].'">'.$row['uni_name'].'</option>';
                                                
                                              }
                                            }
                                        
                                      ?>
                                    </select>
                                  </div>
                              </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label>Course</label>
                                </div>
                                <div class="form-group col-md-10">
                                    <select id="inputState" name="course_name" class="form-control">
                                      <option value="choose the option">choose your option</option>
                                      <?php  
                                        $sql = "SELECT DISTINCT course FROM course WHERE 1";

                                        $result = $conn->query($sql);

                                        if($result->num_rows > 0){
                                          while($row = $result->fetch_assoc()){
                                            echo '<option value="'.$row['course'].'">'.$row['course'].'</option>';
                                            
                                          }
                                        }
                                      ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label>Branch</label>
                                </div>
                                <div class="form-group col-md-4">
                                    
                                    <select id="inputState" name="branch_name" class="form-control">
                                      <option value="select">select</option>
                                      <?php  
                                        $sql = "SELECT DISTINCT branch FROM course WHERE 1";

                                        $result = $conn->query($sql);

                                        if($result->num_rows > 0){
                                          while($row = $result->fetch_assoc()){
                                            echo '<option value="'.$row['branch'].'">'.$row['branch'].'</option>';
                                            
                                          }
                                        }
                                      ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-2 text-center">
                                    <label>Subject</label>
                                </div>
                                <div class="form-group col-md-4">
                                    <select id="inputState" name="subject_name" class="form-control">
                                      <option value="selct">select</option>
                                      <?php  
                                        $sql = "SELECT DISTINCT c_subject FROM course WHERE 1";

                                        $result = $conn->query($sql);

                                        if($result->num_rows > 0){
                                          while($row = $result->fetch_assoc()){
                                            echo '<option value="'.$row['c_subject'].'">'.$row['c_subject'].'</option>';
                                            
                                          }
                                        }
                                      ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label>Semester</label>
                                </div>
                                <div class="form-group col-md-4">
                                    <select id="inputState" name="semester" class="form-control">
                                        <option value="1">1st</option>
                                        <option value="2">2nd</option>
                                        <option value="3">3rd</option>
                                        <option value="4">4th</option>
                                        <option value="5">5th</option>
                                        <option value="6">6th</option>
                                        <option value="7">7th</option>
                                        <option value="8">8th</option>
                                        <option value="9">9th</option>
                                        <option value="10">10th</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2 text-center">
                                    <label>Year</label>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="number" class="form-control" name="year" placeholder="Enter year" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label>Uploaded By</label>
                                </div>
                                <div class="form-group col-md-10">
                                    <?php
                                      
                                      $user_id = $_SESSION['user_id'];
                                      
                                      $sql = "SELECT t_name FROM teacher WHERE email='$user_id'";
                                      
                                      $result = $conn->query($sql);

                                      if($result->num_rows > 0)
                                      {
                                        $row = $result->fetch_assoc();
                                        $name = $row['t_name'];
                                        echo '<input type="text" class="form-control" name="Uploded_by" value="'.$name.'"  readonly>';
                                      }
                                    ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2 text-center">
                                    <label>Date Of Upload</label>
                                </div>
                                <div class="form-group col-md-10">
                                    <input type="date" name="date_upload" class="form-control"  required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2 text-center">
                                    <label>Choose Your File</label>
                                </div>
                                <div class="form-group col-md-10">
                                     Choose Only PDF file<input type="file" name="question"  required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 text-center">
                                    <input class="form-check-input" type="checkbox" required>
                                    <label>I have accept all the details are correct</label>
                                </div>
                            </div>
                            <div class="text-center mb-4">
                                <button type="submit" name="upload" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
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
</body>
</html>
