<?php

session_start();

if(isset($_POST["add"])){

    $m_id = $_SESSION['m_id'];

    $subject = $_POST['subject'];
    $question=$_POST['question'];
    $option1=$_POST['option1'];
    $option2=$_POST['option2'];
    $option3=$_POST['option3'];
    $option4=$_POST['option4'];
    $correct_option=$_POST['correct_option'];
    $explanation=$_POST['explanation'];

    $conn = new mysqli("localhost", "root", "", "question_bank_db");

    if($conn->connect_error){
        die("Your connection is not working properly");
    }

    $sql = "UPDATE mcq_question SET m_subject='$subject',m_question='$question',op1='$option1',op2='$option2',op3='$option3',op4='$option4',correct_option='$correct_option',explantion='$explanation' WHERE m_id=$m_id ";    
    
    if($conn->query($sql)){
        header("location:../MCQ_View.php");
    }
    else{
        echo "Can't Update right now";
    }
}


?>