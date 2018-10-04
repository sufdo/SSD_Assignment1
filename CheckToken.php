<?php
require_once 'Stoken.php';
if(isset($_POST['token'])){
	if(token::checkToken($_POST['token'])){
        echo 'true';
    } else {
        echo 'false';
    }
	
	}
?>