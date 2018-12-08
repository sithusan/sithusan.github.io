<?php
require_once('function/dbCon.php');
if(isset($_GET['action'])){

	switch ($_GET['action']) {
		case 'save':

		$title = $_POST['title'];
		$sql   = "insert into tb_brand(title) VALUES ('$title')";
		$result = mysqli_query($conn,$sql);
		if($result){

			header('location:brandlist.php');
		}
			
		break;
		case 'delete' :

		$id = $_GET['dbid'];
		$sql1 = "delete from tb_brand where id = $id";
		$result1 = mysqli_query($conn,$sql1);
		if($result1){
			header('location:brandlist.php');
		}

		case 'update' : 
		$uid = $_POST['ubid'];
		$utitle = $_POST['title'];
		$sql2 = "update tb_brand set title = '$utitle' where id = '$uid'";
		$result2 = mysqli_query($conn,$sql2);
		if($result2){

			header('location:brandlist.php');
		}
		
	}
}