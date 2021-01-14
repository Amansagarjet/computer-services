<!-- Header start -->
<?php
	 require_once'includes/init.php';
	 require_once'includes/lov_header.php';
	 
	 $cat_id=1; 
	if(isset($_GET['cat_id'])){
		$cat_id=$_GET['cat_id'];
	}	

	$qry = "SELECT service.id,category_table.cat_name,service.service_name,service.description,service.image,service.cat_id FROM service,category_table WHERE category_table.status='Y' AND service.status='Y' AND category_table.cat_id = service.cat_id AND service.cat_id='$cat_id'";
	$res = mysqli_query($con,$qry);

	?>

	<style>
	.card {
	  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	  transition: 0.3s;
	  width: 100%;
	}

	.card:hover {
	  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
	}

	.container {
	  padding: 2px 16px 20px;
	  width:100%;
	}
	</style>
	
<!--  Header end -->

		<!-- Body Start -->

		<center><h1 style="font-weight: bold; font-size: 40px;"><u>Services</u></h1></center>
		<div style="margin-left:150px;margin-right: 150px">
			<div class="row">
			<?php while($row = mysqli_fetch_array($res)){ ?>
				<div class="col-md-6" style="margin-top:30px">
					<div class="card" style="border: 3px solid black;">
						
						<img src="assets/service_image/<?php echo $row['image']; ?>"alt="first image" style="width:442px;height:250px">
						<div class="container">
							<h4 style="text-align: center"><?php echo $row['service_name']; ?></h4>
							<p style="text-align: center;"><?php echo $row['description']; ?></p>
							<center><a href="sai_contact.php?service_name=<?php echo $row['service_name']; ?>" class="btn btn-default"><span class="fa fa-commenting" style="color:grey"></span> Ask Query</a></center>
						</div>	
						
							
				</div>
			</div>
			<?php } ?>	

		
		

		
	
			
			
				
			</div>
		
		</div>
		
		<br><br>
			<!--Footer start-->
			<?php require_once 'includes/lov_footer.php'; ?>
			<!--Footer end-->
</body>
</html>