<?php 
	session_start();
	//echo md5("password1234");
	$email			  = $_POST["email"];
	$password  		  = $_POST["password"];
	$confirm_password = $_POST["confirm_password"];
	$user             = array('id'=>2,
							'first_name' => "Simi",
							'last_name'=>"Tresa Antony" ,
							'password'=>"bdc87b9c894da5168059e00ebffb9077",
							 'email'=>'simi.tresa.antony@gmail.com'
							 );
	//Validation
 
	if( ($email==$user['email'] ) && 
		( md5($password)==$user['password'] ) && 
		($password==$confirm_password) )
	{
		 $_SESSION["user_name"]=$user["email"];
		 $_SESSION["first_name"] = $user["first_name"];
		 $_SESSION["last_name"] = $user["last_name"];
		 $_SESSION["birth_date"] = $_POST["birth_date"];
		 $_SESSION["is_login"] = TRUE;
		 unset($_SESSION["message"]);
		 header("Location: profile.php");
		 die();
	}
	else{
		 $_SESSION["message"] = "Username or password incorrect, Please try again";
		 header("Location: index.php");
		 die();
	}

?>
