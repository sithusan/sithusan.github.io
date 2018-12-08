<?php 

require_once('function/dbCon.php');

if(isset($_GET['action'])){
	switch ($_GET['action']) {
		case 'save':
			$title = $_POST['title'];
			$code  = $_POST['code'];
			$brand = $_POST['brand'];
			$cat   = $_POST['category'];
			$price = $_POST['price'];
			$qty   = $_POST['qty'];
			$description = $_POST['description'];

			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			$file = $_FILES['image']['name'];


			
	       $sql = "insert into tb_product(code,name,brand_id,cat_id,price,image,qty,description) VALUES ('$code','$title','$brand','$cat','$price','$file','$qty','$description')";
			$result = mysqli_query($conn,$sql);
			if($result){
				move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
				header('location:productlist.php');
			}else{
				echo mysqli_error($conn);
			}

			break;
		
		case 'delete':

			$id   = $_GET['dpid'];
			$sql1 = "delete from tb_product where id = '$id' ";
			$result1 = mysqli_query($conn,$sql1);
			
			if($result1){
				header('location:productlist.php');
			} 
		case 'update':

			$upid  = $_POST['upid'];
			$code  = $_POST['code'];			
			$title = $_POST['title'];
			$brand = $_POST['brand'];
			$cat   = $_POST['category'];
			$price = $_POST['price'];
			$qty   = $_POST['qty'];
			$description = $_POST['description'];

			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			$file = $_FILES['image']['name'];

			$sql2 = "update tb_product set name = '$title', code = '$code',brand_id = '$brand', cat_id = '$cat',price = '$price', image = '$file' , qty = '$qty', description = '$description' where id = '$upid'";
			

			$result2 = mysqli_query($conn,$sql2);
			if($result2){
				move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
				
				header('location:productlist.php');
			}else{
				echo mysqli_error($conn);
			}
	}
}