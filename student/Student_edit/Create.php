    <?php

        $first = strtoupper($_POST['f_name']);
        $last = strtoupper($_POST['l_name']);
        $email = $_POST['e_mail'];
        $address = $_POST['address'];
        $gender = strtoupper($_POST['gender']);
        $dob = $_POST['dob'];
        $phone_no = $_POST['phone'];
        $pass = $_POST['pass'];

        $conn = new mysqli("localhost","root","","question_bank_db");

        if($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
	        echo "something error";
        }

        $sql = "SELECT * FROM student WHERE email='$email' AND s_password = $pass";

        $result = $conn->query($sql);
        
        if($result->num_rows > 0)
        {
            header("location:../student_login.html");
        }
        
        $sql = "INSERT INTO student VALUES(0,'".$first." ".$last."','".$email."','".$phone_no."','".$gender."','".$dob."','".$address."','".$pass."')";
        if($conn->query($sql)){
            header("location:../student_login.html");
        }
        $conn->close();
        
    ?>
