<?php require_once('function/dbCon.php');

	$sql = "select * from tb_brand";
	$result = mysqli_query($conn,$sql);

 ?>
<?php require_once('header.php'); ?>


	<div class = "content mt-3">
		<a href="create_brand.php" class = "btn btn-primary mb-2" > Create Brand </a>
		<table class = "table">
			<tr>					
				<th> #</th>
				<th> Name </th>
				<th> Edit </th>
				<th> Delete </th>
			</tr>
			<?php $i = 1; ?>
			<?php foreach($result as $data ) :  ?>

			<tr>
				<td> <?= $i++ ?> </td>
				<td> <?= $data['title'] ?></td>
				<td><a class = "btn btn-primary" href="editbrand.php?ebid=<?= $data['id']?>"> Edit </a></td>
				<td><a class = "btn btn-danger" href="postbrand.php?dbid=<?= $data['id']?>&action=delete"> Delete </a></td>

				
			</tr>
		<?php endforeach ?>
		 </table>
		
	</div>

<?php require_once('footer.php') ?>