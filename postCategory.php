<?php
require_once('function/dbCon.php');
if(isset($_GET['action'])){

	switch ($_GET['action']) {
		case 'save':

		$title = $_POST['title'];
		$sql   = "insert into tb_cat(title) VALUES ('$title')";
		$result = mysqli_query($conn,$sql);
		if($result){

			header('location:categorylist.php');
		}
			
		break;
		case 'delete' :

		$id = $_GET['dcid'];
		$sql1 = "delete from tb_cat where id = $id";
		$result1 = mysqli_query($conn,$sql1);
		if($result1){
			header('location:categorylist.php');
		}

		case 'update' : 
		$uid = $_POST['ucid'];
		$utitle = $_POST['title'];
		$sql2 = "update tb_cat set title = '$utitle' where id = '$uid'";
		$result2 = mysqli_query($conn,$sql2);
		if($result2){

			header('location:categorylist.php');
		}
		
	}
}