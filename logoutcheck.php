<?php
	header("Content-Type:text/html; charset=UTF-8");

	
	session_start();
	if( !empty($_POST['btn_logout'])){
		unset($_SESSION['abc']);
		
		
	}
	
	header("Location:./top.php");
?>
