<?php


session_start();

if(isset($_SESSION['user_id']))
{
    $conn = new mysqli("localhost","root","","question_bank_db");

    if($conn->connect_error){
        die("Your connection is not working");
    }

    $id = $_SESSION['id'];

    if(isset($_POST['UPDATE_TEACHER'])){
        
        $name = strtoupper($_POST['t_name']);
        $email = $_POST['e_mail'];
        $address = strtoupper($_POST['address']);
        $gender = strtoupper($_POST['gender']);
        $date_of_birth = strtoupper($_POST['dob']);
        $mobile = strtoupper($_POST['phone_no']);

        $sql = "UPDATE teacher SET t_name='$name',email='$email',mobile='$mobile',gender='$gender',dob='$date_of_birth',t_address='$address' WHERE t_id=$id";
                
        if($conn->query($sql))
        {
            header("location:./Profile_Update.php");
        }
        else{
            header("location:./Profile_Update.php");
        }

    }
}
else{
    header("location:../teacher_login.html");
}

?>
