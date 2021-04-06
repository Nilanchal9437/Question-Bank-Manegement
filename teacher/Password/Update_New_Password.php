<?php

if(isset($_POST['set_password'])){

    $email = $_POST['email'];

    $pass = $_POST['password'];

    $conn = new mysqli("localhost","root","","question_bank_db");

    if($conn->connect_error){
        die("Your connection is not working");
    }

    $sql = "SELECT * FROM teacher WHERE email='$email'";

    $num = $conn->query($sql);

    if($num->num_rows > 0){

        $sql = "UPDATE teacher SET t_password='$pass' WHERE email='$email'";

        if($conn->query($sql)){
            header("location:../teacher_login.html");
        }
    }
    else{
        header("location:./New_Password.php?error=true");
        
    }
    
}


?>
