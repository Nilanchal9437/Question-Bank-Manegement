<?php

session_start();

$user_id = $_SESSION['user_data'];
$password = $_SESSION['user_pass'];

$conn = new mysqli('localhost', 'root', '','question_bank_db');

if($conn->connect_error){
    die('Your connection is not working');
}

$sql = "SELECT * FROM admin WHERE username='$user_id' AND password='$password'";

$result = $conn->query($sql);

if($result->num_rows > 0){
    session_unset();
    session_destroy();
    header("location:./../index.html");
}
?>