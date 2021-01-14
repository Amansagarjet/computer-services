<?php 
	$url='localhost';
	$user_name='root';
	$password='';
	$db_name="lov";
	$con=mysqli_connect($url,$user_name,$password,$db_name);
	if(!$con){
		echo "<h4> Database Not Connected Please Check init File.......</h4>";
	}


?>