<?php
	require_once'includes/init.php';






	$qry="SELECT * FROM footer WHERE status='y' AND id<=3;"
	$res=mysqli_query($con,$qry);

?>
<table>
	<thead>
		<tr>
			<th>S.No</th>
			<th>Tittle</th>
			<th>Description</th>
			<th>Action</th>
		</tr>
		<?php
			$counter=0;
			$arr=mysqli_fetch_array($res);
		 ?>
		<tr>
			<form action="contact_manager.php" method="POST"></form>
			<td><?php $counter++; ?></td>
			<td><input type="text" name="name" value="<?php  ?>"></td>
			<td></td>
			<td></td>
		</tr>
	</thead>
</table>