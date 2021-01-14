<?php 
    require_once 'includes/init.php';
    session_start();
    $show_dialog = false;
    $msg = '';
    if(isset($_POST['btn_login'])){
        $email  = $_POST['email'];
        $password  = $_POST['password'];
        $QRY_LOGIN_CHECK = "SELECT name,login_id FROM users where email='$email' AND passwd = '$password' AND status='Y'";
        $res = mysqli_query($con,$QRY_LOGIN_CHECK);
        $count = mysqli_num_rows($res);
        $row = mysqli_fetch_array($res);
        if($count == 1){           
           $_SESSION['name'] = $row['name'];
           $_SESSION['login_id'] = $row['login_id'];
            header('Location:bannar_manager.php');
        }else{
            $show_dialog = true;
            $msg = "Incorrect Email Or Password !";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Login</title>
</head>
<body>
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
    <div class="login-form">

        <form action="login.php" method="post">
            <h2 class="text-center">Log in</h2> 
            <label for="email">Email Address</label><input name="email" type="text" class="form-control" placeholder="Email Address" required />
            <label for="password">Password</label><input name="password" type="password" class="form-control" placeholder="Password" required />
            <div class="form-group">
                <br>
            <button type="submit" class="btn btn-primary btn-block" name="btn_login">Log in</button>
            <?php if($show_dialog){ ?>
                <div class="alert alert-danger"><?php echo $msg; ?></div>
            <?php } ?>
        </div>
        </form>  
    </div>
</body>
</html>