<?php

session_start();

if(isset($_POST['set_password'])){

    $id = $_SESSION['user_id'];

    $old = $_POST['old_password'];

    $pass = $_POST['password'];

    $conn = new mysqli("localhost","root","","question_bank_db");

    if($conn->connect_error){
        die("Your connection is not working");
    }

    $sql = "SELECT * FROM student WHERE s_password='$old'";

    $num = $conn->query($sql);

    if($num->num_rows > 0){

        $sql = "UPDATE student SET s_password='$pass'  WHERE email='$id'";

        if($conn->query($sql)){
            session_unset();
            session_destroy();
            header("location:../student_login.html");
        }
    }
    else{
        header("location:./Profile_Password.php?error=true");
        
    }
    
}


?>
