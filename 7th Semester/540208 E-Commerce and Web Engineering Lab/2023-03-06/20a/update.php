<?php include('top.php'); ?>
	<h1> User Update </h1> 
<?php  
	$servername = 'localhost'; 
	$username = 'root';
	$pass = '';
	$dbname = 'batch_20a';
	$conn = new mysqli($servername, $username, $pass, $dbname);// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$id = $_GET['id'];
	$sql = "SELECT * FROM student_info WHERE id = '$id'";
	$result = $conn->query($sql); 
	if ($row = $result->fetch_object()) {   
?>
	<form method="post" action="update-action.php" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="row">
			<label>Name: </label> <input type="text" class="w3" name="sname" value="<?php echo $row->sname; ?>" placeholder="Enter your full name." required>
		</div>
		<div class="row">
		   <label>DoB:</label> <input type="date" value="<?php echo $row->dob; ?>"  class="w3" name="dob"> 
		</div>
		<div class="row">
			<label>Email:</label> <input type="email" value="<?php echo $row->email; ?>"  class="w3" name="email" required>
		</div>
		<div class="row">
			<label>Password:</label> <input type="password" class="w3" name="password">  
		</div>
		<div class="row">
			<label>Gender:</label> 
			<input type="radio" name="gender" value="F" <?php if($row->gender == 'F') echo 'checked'; ?>> Female 
			<input type="radio" name="gender" value="M" <?php if($row->gender == 'M') echo 'checked'; ?>> Male
		</div> 
		<div class="row">
			<label>Religion:</label> 
			<select name="rel" class="w3">
				<option value="">--Select--</option>
				<option value="Islam" <?php if($row->rel == 'I') echo 'selected'; ?>>Islam</option>
				<option value="Hindu" <?php if($row->rel == 'H') echo 'selected'; ?>>Hindu</option>
			</select> 
		</div> 
		<div class="row">
			<input type="reset" name="reset" value="Reset">
			<input type="submit" name="submit" value="Submit">   
		</div>
	</form>
<?php 
	} else {
	  echo "0 results";
	}

	$conn->close();
?>
		</tbody>
	</table>
<?php include('footer.php'); ?>