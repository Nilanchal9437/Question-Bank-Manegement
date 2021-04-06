<?php

if(isset($_GET['subject_id'])){
    
    $m_id = $_GET['subject_id'];

    $conn = new mysqli("localhost" , "root", "", "question_bank_db");

    if($conn->connect_error){
        die("Your connection is not working properly");
    }

    $sql = "DELETE FROM mcq_question WHERE m_id=$m_id";

    if($conn->query($sql)){
        header("location:../MCQ_View.php");
    }
}

?>