<?php
          
    if(isset($_POST['give'])){

    $c_email = $_POST['f_email'];
    $rate = $_POST['rate'];
    $massage = $_POST['massage'];

    $conn = new mysqli("localhost", "root", "", "question_bank_db");

    if($conn->connect_error){
        die("Your connection is not workig properly");
    }

    $sql = "INSERT INTO feedback VALUES(0, '$c_email', '$rate', '$massage', '0')";

    if($conn->query($sql)){
        header("location:../../student/Student_View.php");
    }
    else{
        echo "Fail to Send massage please cheack you massage less than 255 charecter";
    }

    }

?>