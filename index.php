<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Regsitration</title>
		<link rel="stylesheet" 
			  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
		<style type="text/css">
			.col-md-6
			{
				margin-top: 20px;
				margin-left: 150px;
			}
			form
			{
				border:2px dotted black;
				padding: 10px;
			}
			#warning{
				background: orange;
			}
		</style>
	</head>
	<body class="container">
		<?php 
			 if(isset($_SESSION["message"]))
		 		{?>
				<div class="row">
				<div class="col-md-6 col-md-offset2" id="warning">
					<p>
					 <?php  
					 	echo $_SESSION["message"];
					 ?>		
					</p>
				</div>
				</div>
		 	<?php }?>	
		<div class="row">
			<div class="col-md-6 col-md-offset2">
				<h2>Login</h2>
				<form action="process.php" method="post" class="well">
					<div class="form-group">
						<label for="first_name"> * First Name</label>
						<input type="text" name="first_name" class="form-control">
					</div>
					<div class="form-group">
						<label for="last_name"> * Last Name</label>
						<input type="text" name="last_name" class="form-control">
					</div>
					<div class="form-group">
						<label for="email"> * Email</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label for="password"> * Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<div class="form-group">
						<label for="confirm_password"> * Confirm Password</label>
						<input type="password" name="confirm_password" class="form-control">
					</div>
					<div class="form-group">
						<label for="birth_date"> * Birth Date</label>
						<input type="date" name="birth_date" class="form-control">
					</div>
					<div class="form-group">
						<label for="profile_pic"> * Profile Picture</label>
						<input type="file" name="profile_pic">
					</div>
					<div class="form-group">
						<input type="submit" value="Submit" class="btn btn-primary">
					</div>
				</form>
				
			</div>
		</div>
	</body>
</html>