<?php

session_start();

if(isset($_SESSION['user_pass']))
{ 
    $id = $_GET['id'];

    $conn = new mysqli("localhost", "root", "","question_bank_db");

    if($conn->connect_error){
        die("Your connection is not working");
    }

    $sql = "DELETE FROM teacher WHERE t_id = $id";

    if($conn->query($sql)){
        header("location:./View.php");
    }
}
else{
    header("location:../Admin_login.html");
}
?>