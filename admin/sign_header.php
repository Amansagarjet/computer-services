<?php
	require_once'inti';
	session_start();
	@$login_id = $SESSION['login_id'];
	@$user_name = $SESSION['name'];
	if($login_id==null && $user_name==null){
		header("Location:sign_in.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Header</title>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro&display=swap" rel="stylesheet">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


</head>
<body>

</body>
</html>
<?php require_once'includes/sidebar.php'; ?>