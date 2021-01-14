<!-- Header start -->
	<?php 
		require_once'includes/lov_header.php'; 
		require_once'includes/init.php';
		$qry= "SELECT * FROM contain WHERE status ='Y' AND id =19 OR id=20";
		$QRY="SELECT * FROM contain WHERE status ='Y' AND id =21 OR id=22";
		$QRY_RES=mysqli_query($con,$QRY);
		$res=mysqli_query($con,$qry);
	?>

<!--  Header end -->
	<!-- Google Font link -->
	<link href="https://fonts.googleapis.com/css?family=Carrois+Gothic|Pontano+Sans&display=swap" rel="stylesheet">
	

<style type="text/css">
	strong{
		color: #ffa400;
	}
</style>
		<center><h1 style="font-weight:bold; font-size:50px;">About Us</h1></center>
		<br>
		<br>
		
			
	
				<?php 
				$count=1;
				while($text = mysqli_fetch_array($res)){ ?>
					<div class="row ">
					<?php if($count%2==0){
					?>
					
					<div class="col-md-6 col-sm-2" style="padding-left:150px">
						<h3 style="font-weight: bold; font-family:'Carrois Gothic', sans-serif;"><?php echo $text['tittle']; ?> </h3>
						<p style=" text-align: justify;"><?php echo $text['description']; ?></p>
					</div>
				<br><br>
					<div class="col-md-6 col-sm-2" style="padding-left:150px;">
							<img src="assets/about/<?php echo $text['image_url']; ?>" alt="Image1" style=" height:45vh; width:80%">
					</div>
				<?php }else{ ?>
					<div class="col-md-6 col-sm-2" style="padding-left:150px;">
							<img src="assets/about/<?php echo $text['image_url']; ?>" alt="Image1" style=" height:45vh; width:80%">
					</div>
					<div class="col-md-5 col-sm-2" style="padding-right:50px;;margin-top:-20px">
						<h3 style="font-weight: bold; font-family:'Carrois Gothic', sans-serif;"><?php echo $text['tittle']; ?> </h3>
						<p style=" text-align: justify;"><?php echo $text['description']; ?></p>
					</div>
				<br><br>
					
				<?php } $count++; ?>

			</div>
		<?php } ?>
		<br><br>
		<div class="">
						
							<div class="row">
							<?php
							$counter=0;
							 while ($last_res = mysqli_fetch_array($QRY_RES)) { 
							 	 ?>
							 		
										<div class="col-md-6">
											<div class="clients" style="padding-left: 120px;">
												<h3 style="font-family: 'Carrois Gothic', sans-serif;"><?php echo $last_res['tittle'];?></h3>
												<p><?php 
													$arr_data = explode('$', $last_res['description']);
													for($i=0;$i<sizeof($arr_data);$i++){
														echo $arr_data[$i]."<br>";
													}

												?></p>


												
											</div>
										</div>
										
						<?php } ?>
					
								</div>
				</div>


					


			<br>
			<!-- Footer Start -->

   				<?php require_once 'includes/lov_footer.php'; ?>

   			<!-- Footer End -->

                    

    </html>
</body>
</html>