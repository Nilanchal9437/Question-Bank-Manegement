<?php

session_start();

if(isset($_SESSION['user_id']))
{ 
    $id = $_SESSION['id'];

    $conn = new mysqli("localhost", "root", "","question_bank_db");

    if($conn->connect_error){
        die("Your connection is not working");
    }

    $sql = "DELETE FROM teacher WHERE t_id = $id";

    if($conn->query($sql)){
        session_unset();
        session_destroy();
        header("location:../../index.html");
    }
}
else{
    header("location:../teacher_login.html");
}
?>