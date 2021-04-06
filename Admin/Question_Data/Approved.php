<?php

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $conn = new mysqli("localhost", "root", "", "question_bank_db");

    if($conn->connect_error){
        die("Your connection is not working");
    }

    $sql = "UPDATE university_questions SET approved = '1' WHERE q_id = $id";

    if($conn->query($sql)){
        header("location:./View.php");
    }
    else{
        header("location:./View.php");
    }
}
?>