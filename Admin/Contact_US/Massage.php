<?php

if(isset($_POST['contact'])){

    $c_name = strtoupper($_POST['c_name']);
    $c_email = $_POST['c_email'];
    $c_phone = $_POST['c_phone'];
    $massage = $_POST['massage'];

    $conn = new mysqli("localhost", "root", "", "question_bank_db");

    if($conn->connect_error){
        die("Your connection is not workig properly");
    }

    $sql = "INSERT INTO contact VALUES(0, '$c_name', '$c_email', '$c_phone', '$massage', '0')";

    if($conn->query($sql)){
        header("location:../../index.html");
    }
    else{
        echo "Fail to Send massage please cheack you massage less than 255 charecter";
    }
}


?>