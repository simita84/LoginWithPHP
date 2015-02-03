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
		#info{
			background:#00FF00;
		}
		div{
			margin: 20px;
		}
	</style>
	</head>
	<body class="container">
		<h1 class="page-header">Profile Page</h1>
		<div class="row">
			<div class="col-md-6 col-md-offset2" id="info">
			 	<p> Login Successful</p>
			</div>	 
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset2 well">
				<?php
					echo "Welcome !!! ".$_SESSION["first_name"]." ".$_SESSION["last_name"]."<br><br>";
					echo $_SESSION["user_name"]."<br>";
					echo $_SESSION["birth_date"]."<br>";
				?>
			</div>
		<div>
		<div class="row">
			<div class="col-md-6">
				 <button class="btn btn-warning">
				 	<a href="logout.php">Logout</a>
				 </button>
			</div>
		</div>
	</body>
</html>