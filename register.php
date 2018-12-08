<?php 
require_once('function/dbCon.php');
if(isset($_POST['btnRegister'])){
	$first_name = $_POST['first_name'];
	$last_name  = $_POST['last_name'];
	$user_name  = $_POST['user_name'];
	$email      = $_POST['email'];
	$password   = $_POST['password'];
	$cpassword   = $_POST['confirm_password'];
	if(empty($first_name)){
		$msg = "Please enter First Name";
	}else if(empty($last_name)){
		$msg = "Please enter Last Name";
	}else if(empty($user_name)){
		$msg = "Please enter User Name";
	}else if(empty($email)){
		$msg = "Please enter email";
	}else if(empty($password)){
		$msg = "Please enter password";
	}
	else if($password != $cpassword){
		$msg = "Password Does not match";
	}else{


		$sql = "insert into tb_user(first_name,last_name,user_name,email,password) VALUES ('$first_name','$last_name','$user_name','$email','$password')";
		$query = mysqli_query($conn,$sql);
		if($query){
			$_SESSION['user'] = $user_name;
			header('location:productlist.php');
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Register </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style type="text/css">
		body{
			background-color: #008000;
		}
		a,a:hover{
			display: block;
			text-decoration: none;
			color:#000;
			text-align: center;
		}
	</style>
</head>
<body>
	<h3 class = "col-md-4 offset-md-3 mt-3"> Register </h3>
	<form class = "col-md-4 offset-md-4" action = "" method = "POST">
	  	<?php require_once('error.php') ?>
		<div class="form-group">
				<label> First Name </label>
				<input class = "form-control" type="text" name="first_name" placeholder="First Name">
		</div>
		<div class="form-group">
				<label> Last Name </label>
				<input class = "form-control" type="text" name="last_name" placeholder="Last Name">
		</div>
		<div class="form-group">
				<label> User Name </label>
				<input class = "form-control" type="text" name="user_name" placeholder="User Name">
		</div>
		<div class="form-group">
				<label> Email </label>
				<input class = "form-control" type="text" name="email" placeholder="Email">
		</div>
		<div class="form-group">
				<label> Password </label>
				<input class = "form-control" type="password" name="password" placeholder="Password">
		</div>
		<div class="form-group">
				<label> Confirm Password </label>
				<input class = "form-control" type="password" name="confirm_password" placeholder="Confirm Password">
		</div>
		<button class = "btn btn-white col-md-4 offset-md-4" name = "btnRegister"> Register </button>
        <p><a href = "login.php" class = "mt-5"> Login </a></p>

	</form>

</body>
</html>