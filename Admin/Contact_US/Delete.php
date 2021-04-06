<?php

session_start();

if(isset($_SESSION['user_pass']))
{
    $conn = new mysqli("localhost", "root", "", "question_bank_db");
                
    if($conn->connect_error){
        die("Your connection is not working");
    }

    $id = $_GET['id'];

    $sql = "DELETE FROM contact WHERE contact_id=$id";

    if($conn->query($sql)){
        header("location:./View_Massage.php");
    }
}
else{
    header("location:../Admin_login.html");
}


?>