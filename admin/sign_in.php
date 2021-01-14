<?php 
	require_once'../includes/init.php';
	
	$show_dialog=false;
	$msg = '';
	if(isset($_POST['btn_login'])){
		$email = $_POST['uname'];
		$psw = $_POST['pwd'];
		$QRY_LOGIN_CHECK = "SELECT name,login_id FROM users where email='$email' AND passwd = '$psw' AND status='Y'";
		echo $QRY_LOGIN_CHECK;
		$res = mysqli_query($con,$QRY_LOGIN_CHECK);
		$count = mysqli_num_rows($res);
		$row = mysqli_fetch_array($res);
		if ($count==1) {
			session_start();

			$_SESSION['name'] = $row['name'];
           	$_SESSION['login_id'] = $row['login_id'];
            header('Location:home_manager.php');
        }else{
            $show_dialog = true;
            $msg = "Incorrect Email Or Password !";
		}

	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro&display=swap" rel="stylesheet">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

			<style type="text/css">
			body {font-family: Arial, Helvetica, sans-serif;}
			form{border:3px solid #f1f1f1;}

			input[type=text]{
				width: 50%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid#ccc;
				box-sizing: border-box;
			}

			input[type=password]{
				width: 50%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid#ccc;
				box-sizing: border-box;
			}
			button{
				background-color: #4ACF50;
				color: white;
				padding:10px 20px;
				margin: 8px 0;
				border: none;
				cursor: pointer;
				width: 7%;
			}
			button:hover{
				opacity: 0.8;
			}
			.cancelbtn{
				width: auto;
				padding: 10px 18px;
				background-color: #f44336;
			}
			.imgcontainer{
				text-align: center;
				margin: 24px,0 12px 0;
			}
			img.avatar{
				width: 15%;
				border-radius: 50%;
			}
			
			span.psw{
				float: right;
				padding-top: 16px;
			}
			@media screen and (max-width: 300px){
				span.psw{
					display: block;
					float: none;
				}
				
			}
		</style>
</head>
<body>


<form action="sign_in.php" method="POST">
	<center><h3><b>Login Form</b></h3></center>
	<div class="imgcontainer">
		<img src="avatar.png" alt="Avatar" class="avatar">
		</div>
	<div class="container" >
	<label for="uname" style="padding-left: 25%;" ><b><i class="fa fa-user"></i> Username</b></label>
	<center><input  type="text" name="uname" placeholder="Type Your Email" required /></center> 
	<label for="pwd" style="padding-left: 25%;" ><b><i class="fa fa-lock"></i> Password</b></label><br>
	<center><input type="password" name="pwd" placeholder="Type Your Password" required></center>
	
	<span class="psw" style="padding-right:25%; "><a href="">Forgotten Password?</a></span><br><br>
	<center><button class="btn btn-success" name='btn_login' style="width: 50%; height: 44px;">Login</button></center>
	<?php if($show_dialog){ ?>
                <div class="alert alert-danger"><?php echo $msg; ?></div>
            <?php } ?>	
		
	</div>
	
	<div class="container" style="background-color: #f1f1f1">
	
	</div>
</form>


</body>
</html>