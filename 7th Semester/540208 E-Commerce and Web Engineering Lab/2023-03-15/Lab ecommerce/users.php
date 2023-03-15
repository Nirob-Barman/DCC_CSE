
<?php include('top.php'); ?>
	<h1> Users List </h1>
	<table class="table">
		<thead>
			<tr> 
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>dob</th>
				<th>gender</th>
				<th>religion</th>
			</tr> 
		</thead>
		<tbody> 
<?php 
	 
	$servername = 'localhost'; 
	$username = 'root';
	$pass = '';
	$dbname = 'registration_form';
	$conn = new mysqli($servername, $username, $pass, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT * FROM student_info";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) { 
	  while($row = $result->fetch_object()) { 
		echo "<tr>
				<td>$row->id</td>
				<td>$row->sname</td>
				<td>$row->email</td>
				<td>$row->dob</td>
				<td>$row->gender</td>
				<td>$row->rel</td>
				<td> <a href='update.php?id=$row->id'> Update </a> </td>
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