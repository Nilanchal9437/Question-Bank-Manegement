<?php

session_start();

    if(isset($_POST['update']))
    {
        $conn = new mysqli("localhost","root","","question_bank_db");

        if($conn->connect_error){
            die("Your connection is not working properly");
        }
        $q_id = $_SESSION['id'];
        $uni_name = $_POST['uni_name'];
        $course = $_POST['course_name'];
        $branch = $_POST['branch_name'];
        $subject = $_POST['subject_name'];
        $semster = $_POST['semester'];
        $year = $_POST['year'];
        $uploaded_by = $_POST['Uploded_by'];
        $upload_date = $_POST['date_upload'];

        $file_name = $_FILES['question']['name'];
        $file_tmp_name = $_FILES['question']['tmp_name'];

        $file_path = "../../teacher/Question/question_edit/Question_Bank/$uni_name/$course/$branch/$subject/$semster/$upload_date";
        $file_full_path = $file_path."/".$file_name;

        $sql = "SELECT * FROM university_questions WHERE q_id = $q_id";

        $result = $conn->query($sql);

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $location = $row['file_location'];

            if(unlink("../../teacher/Question/question_edit/$location")){
                if(!is_dir($file_path)){
                    mkdir($file_path, 0777, true);
                }
            }
        }
        if(move_uploaded_file($file_tmp_name, $file_full_path))
        {
            

            $full_data_path = "Question_Bank/$uni_name/$course/$branch/$subject/$semster/$upload_date/".$file_name;
           
            $sql = "UPDATE university_questions SET uni_name='$uni_name',course = '$course', branch = '$branch',subject = '$subject',semester = '$semster',year = '$year', file_location = '$full_data_path', uploaded_by = '$uploaded_by', approved = 0,date_uploaded = '$upload_date' WHERE q_id = $q_id";
            
            if($conn->query($sql)){
                header("location:./View.php");
            }
        
            
            
                
        }
    }


?>