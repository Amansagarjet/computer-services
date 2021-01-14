<?php
	require_once'includes/header.php';
	$show_dialog = false;
	$msg = "";
	$dialog_type = "";
	if(isset($_POST['btn_update'])){
		$id = $_POST['id'];
		$service = $_POST['service'];
		$description = $_POST['description'];
		$image = $_FILES['image_url']['name'];
		$QRY = "UPDATE service SET service_name='$service',description='$description',image='$image' where id='$id'";
		
		$row_res = mysqli_query($con,$QRY);

			if($row_res){
		 		$show_dialog = true;
		 		$msg="Data Updated Successfully";
		 		$dialog_type="alert alert-success";


		 	}else{
		 		$show_dialog = true;
		 		$msg="Some Error Occured !";
		 		$dialog_type="alert alert-danger";
		}
	}

	$qry = "SELECT * FROM service WHERE status='Y';";
	$res = mysqli_query($con,$qry);
?>

<body>
	<center><h3>Service Manager</h3></center>
	
	<?php if($show_dialog){ ?>
		<div class="<?php echo $dialog_type ?>"><?php echo $msg ?></div>
	<?php } ?>

	<table class="table table-bordered">
		<thead>
			<tbody>
				<tr>
					<th>S.NO</th>
					<th>Tittle</th>
					<th>Description</th>
					<th>Image Url</th>
					<th>Action</th>
				</tr>
			</thead>
				<?php 
						$counter=1;
						while($cont = mysqli_fetch_array($res)){
					 ?>
				<tr>
					<form action="service_manager.php" method="POST" enctype="multipart/form-data" >
					<td><?php echo $counter++; ?></td>
					<td><input type="text" name="service" id="text_<?php echo $counter; ?>" value="<?php echo $cont['service_name']; ?>" disabled></td>

					<td><textarea name="description" cols="50" id="description_<?php echo $counter; ?>" value="" disabled><?php echo $cont['description'];?></textarea></td>
					<td><input type="file" name="image_url" id="file_<?php echo $counter; ?>" value="" disabled></td>
					<td><button type="text" name="btn_edit" class="btn btn-info" value="edit" id="edit_<?php echo $counter; ?>"      onclick="onEditButtonClick(<?php echo $counter; ?>)">Edit</button>
						<input type="text" id="id" name="id" value="<?php echo $cont['id']; ?>" hidden />
						<button type="submit" name="btn_update" class="btn btn-success" value="Update" id="update_<?php echo $counter; ?>" style="visibility: hidden;">Update</button>
						<button type="text" name="btn_cancel" class="btn btn-danger" value="Cancel" id="cancel_<?php echo $counter; ?>" onclick="onCancelButtonClick(<?php echo $counter; ?>)" style="visibility: hidden;">Cancel</button></td>
					</form>
				</tr>
			</tbody>
		<?php } ?>
	</table>
	<script type="text/javascript">
		function onEditButtonClick(id) {
			event.preventDefault();
			document.getElementById('text_'+id).disabled=false;
			document.getElementById('description_'+id).disabled=false;
			document.getElementById('file_'+id).disabled=false;
			document.getElementById('edit_'+id).style.visibility='hidden';
			document.getElementById('update_'+id).style.visibility='visible';
			document.getElementById('cancel_'+id).style.visibility='visible';

		}

			function onCancelButtonClick(id) {
				event.preventDefault();
			document.getElementById('text_'+id).disabled=true;
			document.getElementById('description_'+id).disabled=true;
			document.getElementById('file_'+id).disabled=true;
			document.getElementById('edit_'+id).style.visibility='visible';
			document.getElementById('update_'+id).style.visibility='hidden';
			document.getElementById('cancel_'+id).style.visibility='hidden';

		}
	</script>
</body>
</html>