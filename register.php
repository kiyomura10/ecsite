<?php header("Content-Type: text/html;charset=UTF-8");
	
	session_start();
	if(isset($_SESSION['abc'])){
		$mes1 = "style=display:none";
		$mes2 = "style=display:block";
	}else{
		$mes1 = "style=display:block";
		$mes2 = "style=display:none";
	}
	
		
	if(isset($_SESSION['abc'])){
	header("Location:./mypage.php");
	die();
	}
	
	
	$mes = isset($_SESSION['err'])?$_SESSION['err']:"";
	if($mes != ""){
		unset($_SESSION['err']);
		}
		
		$name = isset($_SESSION['name'])?$_SESSION['name']:"";
	if($name != ""){
		unset($_SESSION['name']);
		}
		
		$email = isset($_SESSION['email'])?$_SESSION['email']:"";
	if($email != ""){
		unset($_SESSION['email']);
		}
		
		$password = isset($_SESSION['password'])?$_SESSION['password']:"";
	if($password != ""){
		unset($_SESSION['password']);}
	
	require_once("register.html");
?>

	






