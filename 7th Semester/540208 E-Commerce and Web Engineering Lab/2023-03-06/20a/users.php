<?php
	@session_start();
	if(!isset($_SESSION['id']) || $_SESSION['id'] < 1){
		header('Location: login.php');
	}
?>
<?php include('top.php'); ?>
	<h1> Users List </h1>
	<table class="table" border="1">
		<thead>
			<tr> 
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Created</th>
				<th>Status</th>
				<th>Action</th>
			</tr> 
		</thead>
		<tbody> 
<?php 
	 
	$servername = 'localhost'; 
	$username = 'root';
	$pass = '';
	$dbname = 'batch_20a';
	$conn = new mysqli($servername, $username, $pass, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT * FROM student_info";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) { 
	  while($row = $result->fetch_object()) { 
		$rdate = date('d/m/Y h:i a',$row->created);
		echo "<tr>
				<td>$row->id</td>
				<td>$row->sname</td>
				<td>$row->email</td>
				<td>$rdate </td>
				<td>$row->status</td>
				<td>
					<a href='update.php?id=$row->id'> Update </a> | <a href='delete.php?id=$row->id'>Delete </a></td>
			</tr>";
	  }
	} else {
	  echo "0 results";
	}

	$conn->close();
?>
		</tbody>
	</table>
<?php include('footer.php'); ?>