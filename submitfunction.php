<?php
	
	$username =  $_POST['username'];
	$password =  $_POST['password'];
	if($username == 'admin' && $password == '1234'){
		require_once 'Stoken.php';
		echo 'inside results';
		token::generateToken();
		header("Location:main.php");
	} else {
		header("Location:login.php?fail=1");
	} 
?>
