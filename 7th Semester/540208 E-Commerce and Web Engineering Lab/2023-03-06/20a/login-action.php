<?php  
	$email = $_POST['email'];
	$password = $_POST['password']; 
	if(!isset($_POST['submit'])){
		header('Location: reg.php');
	}
	if(empty($password) || empty($email)){
		echo 'Password / email empty!';
		echo '<a href="login.php">Go Back </a>';
		die();
	}
	$servername = 'localhost'; 
	$username = 'root';
	$pass = '';
	$dbname = 'batch_20a';
	$conn = new mysqli($servername, $username, $pass, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT * FROM student_info WHERE email = '$email' AND password ='$password'";
	
	$result = $conn->query($sql); 
	if($row = $result->fetch_object()) { 
	  @session_start();
	  $_SESSION['id'] = $row->id;
	  $_SESSION['name'] = $row->sname;
	  header('Location: users.php'); 
	} else {
	  echo "Error: <br>" . $conn->error;
	  echo 'User not found!';
	}

	$conn->close();
?>