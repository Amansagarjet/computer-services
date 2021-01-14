<?php 
	$url='localhost';
	$user_name='root';
	$db_name='lov';
	$password='';
	$con=mysqli_connect($url,$user_name,$db_name,$password);
	if(!$con){
		echo"<h4> Database Not Connected Please Check init File.......</h4>";
	} ?>