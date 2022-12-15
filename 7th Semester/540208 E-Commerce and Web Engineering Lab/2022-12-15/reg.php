<?php include('top.php'); ?>
			<h2> Registration Form </h2>
			<form method="post" action="reg-action.php" enctype="multipart/form-data">
				<div class="row">
					<label>Name: </label> <input type="text" class="w3" name="sname" placeholder="Enter your full name." required>
				</div>
				<div class="row">
					<label>DoB:</label> <input type="date" class="w3" name="dob"> 
				</div>
				<div class="row">
					<label>Email:</label> <input type="email" class="w3" name="email" required>
				</div>
				<div class="row">
					<label>Password:</label> <input type="password" class="w3" name="password" required>  
				</div>
				<div class="row">
					<label>Gender:</label> <input type="radio" name="gender" value="F"> Female <input type="radio" name="gender" value="M"> Male
				</div> 
				<div class="row">
					<label>Religion:</label> 
					<select name="rel" class="w3">
						<option value="Islam">Islam</option>
						<option value="Hindu">Hindu</option>
					</select> 
				</div> 
				<div class="row">
					<input type="reset" name="reset" value="Reset">
					<input type="submit" name="submit" value="Submit">   
				</div>
			</form>
<?php include('footer.php'); ?>