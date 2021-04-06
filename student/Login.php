<?php

session_start();

if(isset($_POST['submit'])){
    $conn = new mysqli("localhost","root","","question_bank_db");

    if($conn->connect_error){
        die("Your connection is not working proper check it and try again");
    }

    $email_id = $_POST['email_id'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM student WHERE email='$email_id' AND s_password = '$pass'";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $_SESSION['user_id']=$row['email'];
        header('location:./Student_View.php');
    }
    else{
        header('location:./Valid_Login.html');
    }

}


















?>