<?php
session_start();
$_SESSION["username"] = "admin";
class token {
	
	public static function generateToken(){
		
		 $_SESSION['csrf_token'] = base64_encode(openssl_random_pseudo_bytes(32));
		
		
	}
	public static function checkToken($token){
		
		if($token == $_SESSION['csrf_token']) {
			
			return true;
		} else {
			unset($_SESSION['csrf_token']);
			return false;
		}
		
	}
}
?>