<?php
		 require_once'includes/header.php';

		 $show_dialog = false;
		 $msg="";
		 $dialog_type="";
		 if(isset($_POST['btn_update'])){
		 $id=$_POST['id'];
		 $title=$_POST['tittle'];
		 $description=$_POST['description'];
		 $image=$_FILES['image_url']['name'];
		 $temp=$_FILES['image_url']['tmp_name'];
		 $QRY = "UPDATE contain SET tittle='$title',description='$description',image_url='$image' WHERE id='$id'";
		 $row_update = mysqli_query($con,$QRY);

		 if($row_update){
		 	$show_dialog=true;
		 	$msg="Data Updated Successfully";
		 	$dialog_type="alert alert-success";
		 	move_uploaded_file($temp,'../admin/images/'.$image);

		 }else{
		 	$show_dialog=true;
		 	$msg="Some Error Occured!";
		 	$dialog_type="alert alert-danger";
		 }
	}
		 $qry = "SELECT id,tittle,description,image_url,status from contain WHERE page_id='2' AND status='Y'";
		 $res = mysqli_query($con,$qry);
?>

<body>

<div class="container">
	<center><h3>About Manager</h3></center>
			<table class="table table-bordered table-condensed">
			<?php if($show_dialog){ ?>

				<div class="<?php echo $dialog_type; ?>"><?php echo $msg; ?></div>

			<?php } ?>

				
				<thead>
					
						<tr>
							<th>S.NO</th>
							<th>Tittle</th>
							<th>Description</th>
							<th>Image Url</th>
							<th >Action</th>
						</tr>
				</thead>
						<tbody>
						<tr>
							<?php 
								$counter = 1; 
								while($cont = mysqli_fetch_array($res)){
							 ?>
							<form action="about_manager.php" method="POST" enctype="multipart/form-data">
								<td><?php echo $counter++; ?></td>
								<td><input type="text" name="tittle" id="title_<?php echo $counter; ?>" value="<?php echo $cont['tittle'] ?>" disabled /></td>

								<td><textarea name="description" cols="50" id="description_<?php echo $counter; ?>"disabled><?php echo $cont['description'];?></textarea></td>

								<td><img src="<?php echo '../'.$cont['image_url']; ?>" id="preview_<?php echo $counter; ?>" style="width:100px;height:100px" />

								<input onchange="document.getElementById('preview_<?php echo $counter; ?>').src = window.URL.createObjectURL(this.files[0]);" type="file" name="image_url" id="file_<?php echo $counter; ?>" disabled  /></td>

								<td ><input type="text" name="id"  value="<?php echo $cont['id'] ?>" hidden/>     <input type="submit" value="Edit" class="btn btn-info" name="btn_edit" onclick="onEditButtonClick(<?php echo $counter; ?>)" id="btn_edit_<?php echo $counter; ?>" style="width:60px;" />

								<input type="Submit" name="btn_update" class="btn btn-success" value="Update" id="btn_update_<?php echo $counter; ?>" style="width:70px;visibility: hidden; " />

								<button type="text" name="btn_cancel" class="btn btn-danger" value="Cancel" id="btn_cancel_<?php echo $counter; ?>" style="width:70px; visibility: hidden;" onclick="onCancelButtonClick(<?php echo $counter; ?>)">Cancel</button></td>
							</form>
						</tr>
					</tbody>
				<?php $counter++; } ?>
			</table>


	</div>

			<script type="text/javascript">
				
				function onEditButtonClick(id){
					event.preventDefault();
					document.getElementById('title_'+id).disabled=false;
					document.getElementById('description_'+id).disabled=false;
					document.getElementById('file_'+id).disabled=false;
					document.getElementById('btn_edit_'+id).style.visibility='hidden';
					document.getElementById('btn_update_'+id).style.visibility='visible';
					document.getElementById('btn_cancel_'+id).style.visibility='visible';
				}

				function onCancelButtonClick(id){
					event.preventDefault();
					document.getElementById('title_'+id).disabled=true;
					document.getElementById('description_'+id).disabled=true;
					document.getElementById('file_'+id).disabled=true;
					document.getElementById('btn_edit_'+id).style.visibility='visible';
					document.getElementById('btn_update_'+id).style.visibility='hidden';
					document.getElementById('btn_cancel_'+id).style.visibility='hidden';
				}
			</script>
</body>
</html>