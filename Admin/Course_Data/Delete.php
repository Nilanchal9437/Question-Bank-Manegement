<?php

session_start();

if(isset($_SESSION['user_pass']))
{
    $conn = new mysqli("localhost", "root", "", "question_bank_db");
                
    if($conn->connect_error){
        die("Your connection is not working");
    }



    $c_id = $_GET['id'];

    $sql = "DELETE FROM course WHERE c_id=$c_id";

    if($conn->query($sql)){
        header("location:./View.php");
    }
}
else{
    header("location:../Admin_login.html");
}


?>