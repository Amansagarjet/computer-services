<?php
	require 'includes/init.php';

	$QRY_PAGES = "select * from pages_table where status='Y'";
	$QRY_CAT = "select * from category_table where status='Y'";
	$res_PAGE = mysqli_query($con,$QRY_PAGES);
	$res_CAT = mysqli_query($con,$QRY_CAT);
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Lovcomputersolution</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
        <!-- Google Font link -->
        <link href="<link href=" https://fonts.googleapis.com/css?family=Lakki+Reddy&display=swap " rel="stylesheet ">
	<link href="https://fonts.googleapis.com/css?family=Pontano+Sans&display=swap " rel="stylesheet ">

	<style type="text/css">

				.p{
					color: #787878;
				}

				.dropdown:hover .dropdown-menu{

					display: block;
					margin-top: 0;
				
				}

                .dropdown-menu >li >a {
                    color:black;
                    font-weight: bold;
                }
			
		</style>

</head>
<body>
            <div style="width:100%;height:100px;margin-top: -20px">
			<center><h2 style="font-weight: bold; font-size: 35px;padding-top:20px; font-family: 'Lakki Reddy', cursive;"><a href="sai_home.php" style="color:black; ">Lovcomputersolution</a></h2></center>
        </div>
	<!-- Navbar Start -->
		<div class="left menu ">
			<nav class="navbar navbar-inverse ">
				<div class="container-fluid ">
						<div class="navbar-header ">
							<button class=" navbar-toggle " data-target=".menubar " data-toggle="collapse "><span class="icon-bar "></span><span 	class="icon-bar "></span><span class="icon-bar "></span>
							</button>
						</div>
				</div>

		<div class="right menu "style="padding-right: 10% ">
		<div class="collapse navbar-collapse menubar ">
		<div class="topnav ">
			<ul class="nav navbar-nav navbar-right " >



                
				<?php while ($row_PAGES = mysqli_fetch_array($res_PAGE)) { 

					if($row_PAGES['id']!=3){ ?>
						<li style="font-weight: bold; " ><a style="color:white " href="<?php echo $row_PAGES[ 'url']; ?>">
        <?php echo $row_PAGES['page_name']; ?>
            </a>
            </li>
            <?php }else{ ?>
                <li class="dropdown"><a href="sai_service.php" class="dropdown-toggle" data-toggle="dropdown" style="font-weight: bold; color: white"> Services</a>
                    <ul class="dropdown-menu" style="text-align: justify; background-color:#66CDAA; ">
                        <?php while($row_CAT = mysqli_fetch_array($res_CAT)) 
                              
                        { ?> 
                            <li>
                                <a href="sai_service.php?cat_id=<?php echo $row_CAT['cat_id']; ?>&cat_name=<?php echo $row_CAT['cat_name'] ?>" style="font-weight: bold; color: black;">
                                    <?php echo $row_CAT['cat_name']; ?>
                                </a>
                            </li>
                            <?php } ?>
                    </ul>
                </li>
                <?php }} ?>

                    </ul>
                    </div>
                    </div>
                    </div>
                    </nav>
                    </div>

                    <!-- Navbar End-->