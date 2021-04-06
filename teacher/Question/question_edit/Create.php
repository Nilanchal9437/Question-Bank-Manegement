<?php


session_start();

if(isset($_POST['upload'])){

    $uni_name = $_POST['uni_name'];
    $course = $_POST['course_name'];
    $branch = $_POST['branch_name'];
    $subject = $_POST['subject_name'];
    $semster = $_POST['semester'];
    $year = $_POST['year'];
    $upload_date = $_POST['date_upload'];

    $file_name = $_FILES['question']['name'];

    $file_tmp_name = $_FILES['question']['tmp_name'];

    $file_path = "Question_Bank/$uni_name/$course/$branch/$subject/$semster/$upload_date";
    $file_full_path = $file_path."/".$file_name;

    if(!is_dir($file_path)){
        mkdir($file_path, 0777, true);
    }
    if(move_uploaded_file($file_tmp_name, $file_full_path))
    {
        $conn = new mysqli("localhost","root","","question_bank_db");

        if($conn->connect_error){
            die("Your connection is not working properly");
        }

        if(isset($_SESSION['user_id'])){
            $user_id = $_SESSION['user_id'];
            $sql = "SELECT * FROM teacher WHERE email='$user_id'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                $id = $row['t_id'];
                $sql = "INSERT INTO university_questions VALUES(0, '$uni_name','$course', '$branch', '$subject', '$semster', '$year', '$file_full_path', '$id', 0, '$upload_date')";
                
                if($conn->query($sql)){
                    header("location:../../Teacher_Login.php");
                }
            }
           
        }
        else{
            header("location:../../teacher_login.html");
        }
        
    }
}



?>