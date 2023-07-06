<?php
	header("Content-Type:text/html; charset=UTF-8");
	
	session_start();
	if(isset($_SESSION['abc'])){
		$mes1 = "style=display:none";
		$mes2 = "style=display:block";
	}else{
		$mes1 = "style=display:block";
		$mes2 = "style=display:none";
	}
	
	session_start();
	$mes = isset($_SESSION['mes'])?$_SESSION['mes']:"";
	if($mes != ""){
		unset($_SESSION['mes']);
		
	}
	require_once("login.html");
?>

