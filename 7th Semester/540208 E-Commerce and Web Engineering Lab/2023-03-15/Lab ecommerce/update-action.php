<?php 
	include('top.php');
	$id = $_POST['id'];
	$sname = $_POST['sname'];
	$dob = $_POST['dob'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];
	$rel = $_POST['rel']; 
	
	$servername = 'localhost'; 
	$username = 'root';
	$pass = '';
	$dbname = 'registration_form';
	$conn = new mysqli($servername, $username, $pass, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	
	$qry = '';
	if($password) 	$qry = ",password='$password' ";
	
	$sql = "UPDATE student_info SET sname='$sname', dob='$dob', email='$email', gender='$gender', rel='$rel' $qry WHERE id = '$id'";

	if ($conn->query($sql) === TRUE) {
	  echo "New record updated successfully! <br>";  
	  echo '<a href="users.php"> Back to User list </a>';
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	include('footer.php');
?>