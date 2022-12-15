<?php 
	
	$sname = $_POST['sname'];
	$dob = $_POST['dob'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];
	$rel = $_POST['rel'];
	$created = time();
	$status = 2; 
	
	echo "
	Name: $sname <br>
	DoB: $dob <br>
	Email: $email <br>
	Pass: $password <br>
	Gender: $gender <br>
	Rel: $rel <br>
	";
	
	$servername = 'localhost'; 
	$username = 'root';
	$pass = '';
	$dbname = 'batch_20a';
	$conn = new mysqli($servername, $username, $pass, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "INSERT INTO student_info (sname, dob, email, password, gender, rel, created, status) VALUES ('$sname', '$dob', '$email','$password','$gender','$rel', $created, $status)";

	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully! <br>";
	  echo "ID: ".$conn->insert_id; 
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>