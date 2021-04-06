<?php

$user_id = $_POST["User_ID"];
$password = $_POST["Password"];

// Create connection
$conn = new mysqli("localhost", "root", "", "question_bank_db");

if ($conn->connect_error)
{
    die("Your Connection is not working");
}
else
{   
    $sql = "SELECT * FROM admin WHERE username='$user_id' AND password='$password'";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();

        session_start();
        $_SESSION['user_data'] = $user_id;
        $_SESSION['user_pass'] = $password;
        
        $id = $row['username'];
        $pass = $row['password'];
        
        header('location:./Admin_start.php');
    }
    else{
        header('location:./Valid_login.html');
    }
    
}

?>
            