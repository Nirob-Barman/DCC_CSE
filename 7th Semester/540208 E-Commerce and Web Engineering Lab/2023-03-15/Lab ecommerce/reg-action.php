<?php 
	$sname = $_POST['sname'];
	$dob = $_POST['dob'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];
	$rel = $_POST['rel'];

	if(!isset($_POST['submit'])){
		header('Location: reg.php');
	}
	if(empty($sname) || empty($email)){
		echo 'Name and email empty!';
		echo '<a href="reg.php">Go Back </a>';
		die();
	}
	$servername = 'localhost'; 
	$username = 'root';
	$pass = '';
	$dbname = 'registration_form';
	$conn = new mysqli($servername, $username, $pass, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	$sql = "INSERT INTO student_info (sname, dob, email, password, gender, rel) VALUES ('$sname', '$dob', '$email','$password','$gender','$rel')";

	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully! <br>";
	  echo "ID: ".$conn->insert_id; 
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>