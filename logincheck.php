<?php
	//var_dump($_POST);
	
	$email = isset($_POST['email'])?$_POST['email']:"";
	$pass = isset($_POST['pass'])?$_POST['pass']:"";
	$url = "./login.php";

	if($email != "" && $pass != ""){
		//DB接続
		$db = new PDO('sqlite:db/main.db', '', '');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql = "SELECT email, password,customer_id
				FROM customers
				WHERE email = ? AND password = ?;";
				
		$rs = $db->prepare($sql);
		$data = array($email, $pass);
		$rs->execute($data);
		
		session_start();
		if($row = $rs->fetch(PDO::FETCH_ASSOC)){
			$_SESSION['abc'] = true;
			$_SESSION['ID'] = $row['customer_id'];
			$url = "top.php";
			
		}
		else{
			$_SESSION['mes'] = "メールアドレスorパスワードが間違っています。";
		}
	}
	header("Location:{$url}");
	