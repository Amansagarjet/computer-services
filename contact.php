<!-- Header start -->
	<?php 
	require_once'includes/init.php';
	require_once'includes/lov_header.php'; 

	$status= '';
	$color = "white";
	if(isset($_GET['service_name'])){
		$status= 'disabled';
		$color = "aqua";
	}

		$success = false;
		$dailog_type ="";
		$msg="";
			
		if(isset($_GET['submit'])){
			
        	$name = $_GET['name'];
	        $email = $_GET['email'];
	        $subject = $_GET['subject'];
	        $message = $_GET['qry'];
			$qry = "INSERT INTO query(name,email,subject,qry) VALUES ('$name','$email','$subject','$message')";			
			$res=mysqli_query($con,$qry);
			echo $res;
		if($res){
			$success=true;
			$msg = "Data Insert Succesfully";
			$dailog_type = "alert alert-success";
		}else{
			$succes=true;
			$msg= "Some Error Occured";
			$dailog_type = "alert alert-danger";
		}
		}
	

?>
<!--  Header end -->

	<!--<img src="web_small.png"alt="First image"> -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7003.772797549223!2d77.27689382274062!3d28.63316664645711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfcad2277af7d%3A0xe68dd5cbcfe7d692!2sLaxmi%20Nagar%20Metro%20Station!5e0!3m2!1sen!2sin!4v1578072259084!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

	<!-- Contact Form Start -->
	<form action="sai_contact.php" method="GET">
			<div class="container">
					<center><h1>Have A Query ?</h1></center>
					
			<?php if($success){ ?>
                <div class="alert alert-success"><?php echo $msg; ?></div>
            <?php } ?>
						<div class='row'>

							<div class="col-md-5">
								
								<div class="row">
									<div class='col-md-12'>						
										<div class=" form-group">
											<label for="name">Name:</label>
											<input type="name" class="form-control" id="name"
											placeholder="Enter Name" size="30px;">
										</div>
									</div>

									<div class='col-md-12'>
										<div class="form-group">
											<label for="email">Email:</label>
											<input type="email" class="form-control" id="Email" placeholder="Enter Email">	
										</div>			
									</div>
									 
								
									<div class='col-md-12'>
										<div class="form-group">
											<label for="subject">Subject:</label>
											<input value="<?php echo @$_GET['service_name']; ?>" type="text" class="form-control" id="subject" placeholder="Enter Subject" style="background:<?php echo $color; ?>" <?php echo $status; ?>>
										</div>			
									</div>
								
								

									<div class='col-md-12'>						
										<div class="form-group">
											<label for="query">Query</label>
											<textarea placeholder="Query" class='form-control' rows="4"></textarea>
										</div>						
									</div>
									<div class='col-md-12'>
										<a href="" class="btn btn-info" name="submit">Submit</a>

									</div>
								</div>

							</div>
							<form>
								
							<div class="col-md-1 visible-md visible-lg"><div style="width:1px;border:1px solid #eee;height:70vh;margin-left:65px"></div></div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-12">
										<center><span class='fa fa-map-marker' style="font-size:80px;color:#8e8e8e"></span>
										<h6 style="font-weight:bold;color:#8e8e8e"> U Block Laxmi Nagar, Near Metro Station,<br> New Delhi (110092)</h6></center>
									</div>
									<div class="col-md-12">
										<br>
										<center><span class='fa fa-envelope' style="font-size:70px;color:#8e8e8e"></span>
										<h6 style="font-weight:bold;color:#8e8e8e">lovcomputersolution@gmail.com</h6></center>
									</div>

									<div class="col-md-12">
										<br>
										<center><span class='fa fa-phone' style="font-size:70px;color:#8e8e8e"></span>
										<h6 style="font-weight:bold;color:#8e8e8e"> +91-9012267671 , +91-8279416143</h6></center>
									</div>


								</div>
								
							</div>


						</div>
					</a></button>

				</form>
				
			</div>
		</div>
		</form>

	<br>


	<!--Contact Form End-->


			<!-- Website Footer Start -->

				<?php require_once 'includes/lov_footer.php'; ?>


			<!--Website Footer End-->
</body>
</html>