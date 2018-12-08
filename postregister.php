<?php 

require_once('function/dbCon.php');

$first_name = $_POST['first_name'];
$last_name  = $_POST['last_name'];
$user_name  = $_POST['user_name'];
$email      = $_POST['email'];
$password   = $_POST['password'];
$cpassword   = $_POST['confirm_password'];
if($password != $cpassword){
	echo "<script> alert('Password Does not match') </script>";
	header('location:register.php');
}else{


	$sql = "insert into tb_user(first_name,last_name,user_name,email,password) VALUES ('$first_name','$last_name','$user_name','$email','$password')";
	$query = mysqli_query($conn,$sql);
	if($query){
		header('location:productlist.php');
	}
}

?>