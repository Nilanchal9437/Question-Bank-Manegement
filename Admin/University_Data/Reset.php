<?php

session_start();

if(isset($_SESSION['user_pass']))
{ 

    $conn = new mysqli("localhost", "root", "", "question_bank_db");


    if($conn->connect_error){
        die("Your connection is not working");
    }

    $sql = "ALTER TABLE university DROP uni_id";

    if($conn->query($sql)){
        $sql = "ALTER TABLE university ADD uni_id INT NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (uni_id)";
        if($conn->query($sql)){
            header("location:./View.php");
        }
    }
}
else{
    header("location:../Admin_login.html");
}
?>