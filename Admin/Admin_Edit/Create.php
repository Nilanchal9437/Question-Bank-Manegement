
<?php

if(isset($_POST["Create"]))
{

	$conn = new mysqli("localhost", "root", "", "question_bank_db");
		
	$user_id = $_POST["User_ID"];
	$password = $_POST["Password"];

	$sql = "SELECT username, password FROM admin WHERE 1";
		
	$result = $conn->query($sql);

	if ($conn->connect_error)
	{
		die("Your connection is not working properly");
	}
	
						
	$sql= "DELETE FROM `admin`";
	$conn->query($sql);				

	$sql="INSERT INTO admin(username, password) VALUES('$user_id','$password')";
	$conn->query($sql);	
	$sql = "SELECT username, password FROM admin WHERE username = '$user_id' AND password = '$password'";
	if($conn->query($sql)) 
	{
		header('location:../Admin_login.html');
	}
}
?>
