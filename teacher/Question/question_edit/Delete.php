<?php

session_start();

if(isset($_SESSION['user_id'])){
    $id = $_GET['id'];

    $conn = new mysqli("localhost","root","","question_bank_db");

    $sql = "SELECT * FROM university_questions WHERE q_id = $id";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $location = $row['file_location'];

        if(unlink($location)){
            
            $sql = "DELETE FROM university_questions WHERE q_id = $id";

            if($conn->query($sql)){
                header("location:../View.php");
            }
        }
        else{
            header("location:../View.php");
        }

    }

}
else{
    header("location:../../teacher_login.html");
  }




?>