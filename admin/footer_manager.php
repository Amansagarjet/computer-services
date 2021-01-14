<?php
		 require_once'includes/header.php';

		 $show_dialog = false;
		 $msg="";
		 $dialog_type="";
		 if(isset($_POST['btn_submit'])){
		 	$id = $_POST['id'];
		 	$title= $_POST['title'];
		 	$description = $_POST['description'];
		 	$QRY = "update footer SET tittle='$title',description='$description' where id='$id'";
		 	
		 	$res = mysqli_query($con,$QRY);
		 	if($res){
		 		$show_dialog = true;
		 		$msg="Data Updated Successfully";
		 		$dialog_type="alert alert-success";


		 	}else{
		 		$show_dialog = true;
		 		$msg="Some Error Occured !";
		 		$dialog_type="alert alert-danger";
		 	}

		 }



		 $qry = "SELECT id,tittle,description FROM footer WHERE status='Y'";
		 $res = mysqli_query($con,$qry);

?>

<body>
	<div class="container">
	<center><h3>Footer Manager</h3></center><br>
	<?php if($show_dialog){ ?>

		<div class="<?php echo $dialog_type; ?>"><?php echo $msg; ?></div>

	<?php } ?>
	<table class="table table-bordered">

		<tr>

			<th>S.No</th>

			<th>Title</th>

			<th>Description</th>

			<th>Action</th>
		</tr>

		<?php 
		$counter=1;
		while($row = mysqli_fetch_array($res)){ ?>


			<tr>
				<form action="footer_manager.php" method="post" >
				<td><?php echo $counter++; ?></td>
				<td><input type="text" value="<?php echo $row['tittle']; ?>" name="title" id="title_<?php echo $counter; ?>" disabled /></td>
				<td><textarea name="description" cols="50" id="desc_<?php echo $counter; ?>" disabled><?php echo $row['description']; ?></textarea></td>
				<td><input type="text" name="id"  value="<?php echo $row['id'] ?>" hidden/><input type="submit" class='btn btn-info' name="btn_update" onclick="onEditBtnClick(<?php echo $counter; ?>)" id="btn_edit_<?php echo $counter; ?>" value="Edit"/>
					<input type="submit" class='btn btn-success' name="btn_submit" id="btn_update_<?php echo $counter; ?>" value="Update" style="visibility: hidden"/>
					<input type="text" name="btn_cancel" class="btn btn-danger" id="btn_cancel_<?php echo $counter; ?>" value="Cancel" style="width:70px; visibility: hidden;"></td>

			</form>


			</tr>

		<?php } ?>


	</table>
	</div>

<script type="text/javascript">
	
	function onEditBtnClick(id){
		event.preventDefault();
		document.getElementById('title_'+id).disabled=false;
		document.getElementById('desc_'+id).disabled=false;
		document.getElementById('btn_edit_'+id).style.visibility='hidden';
		document.getElementById('btn_update_'+id).style.visibility='visible';
		document.getElementById('btn_cancel_'+id).style.visibility='visible';		

	}

	function onCancelButtonClick(id){
					event.preventDefault();
					document.getElementById('title_'+id).disabled=true;
					document.getElementById('description_'+id).disabled=true;
					document.getElementById('btn_edit_'+id).style.visibility='visible';
					document.getElementById('btn_update_'+id).style.visibility='hidden';
					document.getElementById('btn_cancel_'+id).style.visibility='hidden';
				}

</script>
		
</body>


</html> 

