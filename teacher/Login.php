<?php

if(isset($_POST['Login']))
{
    $user_id = $_POST['email_id'];
    $user_pass = $_POST['password'];

    $conn = new mysqli("localhost", "root", "", "question_bank_db");

    if($conn->connect_error){
        die("Your connection have some problem please check your connection");
    }

    $sql = "SELECT * FROM teacher WHERE email='$user_id' AND t_password='$user_pass'";

    $result = $conn->query($sql);

   if($result->num_rows > 0){
       $row = $result->fetch_assoc();
       
       session_start();

       $_SESSION['user_id'] = $user_id;
       header('location:./Teacher_Login.php');
   }
   else{
       header('location:./Valid_Login.html');
   }
}

else{
    header("location:./Valid_Login.html");
  }



?>