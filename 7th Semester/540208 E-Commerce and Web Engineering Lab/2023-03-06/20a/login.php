<?php include('top.php'); ?>
			<h2> Login Form </h2>
			<form method="post" action="login-action.php" enctype="multipart/form-data">
				<div class="row">  
					<label>Email:</label> <input type="email" class="w3" name="email" required>
				</div>
				<div class="row">
					<label>Password:</label> <input type="password" class="w3" name="password" required>  
				</div> 
				<div class="row">
					<input type="reset" name="reset" value="Reset">
					<input type="submit" name="submit" value="Submit">   
				</div>
			</form>
<?php include('footer.php'); ?>