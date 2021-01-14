<?php
	require 'includes/init.php';

	$QRY_PAGES = "select * from pages_table where status='Y'";
	$QRY_CAT = "select * from category_table where status='Y'";
	$res_PAGE = mysqli_query($con,$QRY_PAGES);
	$res_CAT = mysqli_query($con,$QRY_CAT);

?>

<!DOCTYPE html>
	<head>
		<title>RC Foods</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro&display=swap" rel="stylesheet">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		
		<style>
			
			@media only screen and (max-width: 767px) { 
				 .dropdown-content {
				  display: none;
				  position: relative;
				  background-color: #f1f1f1;
				  min-width: 160px;
				  box-shadow: 5px 8px 16px 0px rgba(0,0,0,0.2);
				  
				}

				.dropdown-content a {
				  color: black;
				  padding: 12px 10px;
				  text-decoration: none;	
				  display: block;
				}
			}
			
			@media only screen and (min-width: 768px) { 
				 .dropdown-content {
				  display: none;
				  position: absolute;
				  background-color: #f1f1f1;
				  min-width: 160px;
				  box-shadow: 5px 8px 16px 0px rgba(0,0,0,0.2);
				  
				}

				.dropdown-content a {
				  color: black;
				  padding: 12px 10px;
				  text-decoration: none;	
				  display: block;
				}
			}
		
		
			

			.dropdown-content a:hover {background-color: #ddd;}

			.dropdown:hover .dropdown-content {display: block;}

			.dropdown:hover .dropbtn {background-color: #3e8e41;}
		
			.container-fluid {
				
				color: #eee;
				font-family: 'Source Code Pro', monospace;
				}
				
				span{
				color:#eee;
			}
			span:hover{
				color:#fff;
			}
		</style>
	
	</head>
	
	<body>
	<!--Start Navbar-->
		<nav class="navbar navbar-inverse navbar-fixed-top ">
			<div class="">
				<div class="navbar-header">
					<button class="navbar-toggle" data-target=".menubar" data-toggle="collapse">
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
						<a class="navbar-brand" href="index.php"><strong style="font-size:50px;"><i>rc</i></strong><i>foods</i></a>	
				</div>
				<div class="collapse navbar-collapse menubar">
					<ul class="nav navbar-nav navbar-right " style="margin-right:10px;">

					<!-- MENUS START FROM HERE -->

						<?php 
							while($row_page = mysqli_fetch_array($res_PAGE)){	
								if($row_page['id'] != 3){					
						?>
									<li><a href="<?php echo $row_page['url'] ?>"><b><?php echo $row_page['page_name'] ?></b></a></li>
						
						<?php }else{ ?>

							
						<li class="dropdown"><a href="<?php echo $row_page['url'] ?>"><b><?php echo $row_page['page_name'] ?></b></a>
							<ul class="dropdown-content">
								<?php while($row_cat = mysqli_fetch_array($res_CAT)){
									?>
								<a href="" style="margin-left:-30px"><?php echo $row_cat['cat_name'] ?></a>
								
								<?php } ?>
							</ul>
						</li>	

						<?php } } ?>
						<!-- MENUS END HERE -->
					</ul>
				</div>
			</div>
		</nav>
	<!--Close Navbar-->
