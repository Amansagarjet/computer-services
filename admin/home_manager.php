<?php 
	require_once'includes/header.php';
	$show_dialog = false;
	$msg = '';
	$dialog_type = '';
	if(isset($_POST['btn_update'])){
		 $id=$_POST['id'];
		 $title=$_POST['tittle'];
		 $description=$_POST['description'];
		 $image=$_FILES['image']['name'];
		 $tmp_name = $_FILES['image']['tmp_name'];
		 $QRY = "UPDATE contain SET tittle='$title',image_url='$image',description='$description' WHERE id='$id'";
		 $row_update = mysqli_query($con,$QRY);

		 if($row_update){
		 	$show_dialog=true;
		 	$msg="Data Updated Successfully";
		 	$dialog_type="alert alert-success";
		 	move_uploaded_file($tmp_name,'../admin/images/'.$image);
		 
		 }else{
		 	$show_dialog=true;
		 	$msg="Some Error Occured!";
		 	$dialog_type="alert alert-danger";
		 }
	}
		 $qry = "SELECT id,tittle,description,image_url,status from contain WHERE page_id='1' AND status='Y'";
		 $res = mysqli_query($con,$qry);	
?>
<body>
	<center><h3>Home Manager</h3></center>
	<div class="container">

		<?php if($show_dialog){ ?>
			<div class="<?php echo $dialog_type; ?>"><?php echo $msg; ?></div>
		<?php } ?>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th><center>S.No</center></th>
					<th><center>Title</center></th>
					<th><center>Description</center></th>
					<th><center>Image Url</center></th>
					<th><center>Action</center></th>
				</tr>
			</thead>
				
					<?php 
						$counter=1;
						while ($arr_num = mysqli_fetch_array($res)) {							
					?>
					<tr>
						<form action="home_manager.php" method="POST" enctype="multipart/form-data">
						<td><?php echo $counter;?>
							<input type"text" name="id" value="<?php echo $arr_num['id']; ?>" hidden />

						</td>
						<td><input type="text" name="tittle" id="title_<?php echo $counter; ?>" value="<?php echo $arr_num['tittle']; ?>" disabled /></td>
						<td><textarea name="description" id="description_<?php echo $counter; ?>" disabled>                      <?php echo $arr_num['description']; ?></textarea> </td>
						<td>
							<img src="<?php echo '../'.$arr_num['image_url']; ?>" id="preview_<?php echo $counter; ?>" style="width:100px;height:100px" />

							<input onchange="document.getElementById('preview_<?php echo $counter; ?>').src = window.URL.createObjectURL(this.files[0]);" type="file" name="image" id="file_<?php echo $counter; ?>" value="<?php echo $arr_num['image_url']; ?>" disabled /></td>
						<td><button class="btn btn-info" id="btn_edit_<?php echo $counter; ?>" onclick="onEditBtnClick(<?php echo $counter; ?>)">Edit</button>
							<button class="btn btn-success" id="btn_update_<?php echo $counter; ?>" name="btn_update" style="visibility: hidden;">Update</button>
							<button class="btn btn-danger" onclick="onCancelBtnClick(<?php echo $counter; ?>)" id="btn_cancel_<?php echo $counter; ?>" value="" style="visibility: hidden;">Cancel</button>
						</td>
					
					</form>
				</tr>
			<?php $counter++; } ?>
		</table>
	</div>
</body>
	<script type="text/javascript">
		function onEditBtnClick(id){
			event.preventDefault();
			document.getElementById('title_'+id).disabled= false;			
			document.getElementById('description_'+id).disabled= false;	
			document.getElementById('file_'+id).disabled= false;	
			document.getElementById('btn_edit_'+id).style.visibility= 'hidden';			
			document.getElementById('btn_update_'+id).style.visibility= 'visible';			
			document.getElementById('btn_cancel_'+id).style.visibility= 'visible';			

		}
		function onCancelBtnClick(id){
			event.preventDefault();
			document.getElementById('title_'+id).disabled= true;			
			document.getElementById('description_'+id).disabled= true;	
			document.getElementById('file_'+id).disabled= true;	
			document.getElementById('btn_edit_'+id).style.visibility= 'visible';			
			document.getElementById('btn_update_'+id).style.visibility= 'hidden';			
			document.getElementById('btn_cancel_'+id).style.visibility= 'hidden';			

		}

	</script>

</html>