<?php require_once('function/dbCon.php');

	$sql = "select * from tb_product";
	$result = mysqli_query($conn,$sql);

 ?>
<?php require_once('header.php'); ?>


	<div class = "content mt-3">
		<a href="product.php" class = "btn btn-primary mb-2" > Create Product </a>
		<table class = "table" >
			<tr>					
				<th> #</th>
				<th> Proudct Code </th>
				<th> Name </th>
				<th> Brand </th>
				<th> Category </th>		
				<th> Price  </th>
				<th> Qty </th>
				<th> Description </th>
				<th> Image </th>		
				<th> Edit </th>
				<th> Delete </th>
			</tr>
			<?php $i = 1; ?>
			<?php foreach($result as $data ) :  ?>

			<tr>
				<td> <?= $i++ ?> </td>
				<td> <?= $data['code'] ?></td>
				<td> <?= $data['name'] ?></td>
				<?php $bid = $data['brand_id'];

					$sql1 = "select * from tb_brand where id = '$bid'";
					$result1 = mysqli_query($conn,$sql1);
					$query_result = mysqli_fetch_assoc($result1);
				?>
				<td> <?= $query_result['title'] ?></td>
				<?php $cid = $data['cat_id'];
					$sql2  = "select * from tb_cat where id = '$cid'";
					$result2 = mysqli_query($conn,$sql2);
					$query_result1 = mysqli_fetch_assoc($result2);
				  ?>
				 <td><?= $query_result1['title'] ?></td>
				 <td><?= $data['price'] ?></td>
				 <td><?= $data['qty'] ?></td>
				 <td><?= $data['description'] ?></td>
				 <td><img src="uploads/<?= $data['image'] ?>" style = "width:100px;"></td>
				<td><a class = "btn btn-primary" href="editProduct.php?epid=<?= $data['id']?>"> Edit </a></td>
				<td><a class = "btn btn-danger" href="postProduct.php?dpid=<?= $data['id']?>&action=delete"> Delete </a></td>
				

				
			</tr>
		<?php endforeach ?>
		 </table>
		
	</div>

<?php require_once('footer.php') ?>