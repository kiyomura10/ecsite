<?php  header("Content-Type: text/html;charset=UTF-8");
	
	session_start();
	if(isset($_SESSION['abc'])){
		$mes1 = "style=display:none";
		$mes2 = "style=display:block";
	}else{
		$mes1 = "style=display:block";
		$mes2 = "style=display:none";
	}
	
	
	$customer_name = $_POST['customer_name'];
	$ruby = $_POST['ruby'];
	$password = $_POST['password'];
	$mail = $_POST['email'];
	$gender = $_POST['gender'];
	$post_code = $_POST['post_code'];
	$address = $_POST['address'];
	$tel = $_POST['tel'];
	session_start();
	
		$db = new PDO('sqlite:db/main.db', '', '');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//データ取得,email重複チェック
		if(empty($_POST['customer_name'])){
     $_SESSION['name'] = "名前が未入力です。";
     $e = "true";
     }
     if(empty($_POST['email'])){
     $_SESSION['email'] = "メールアドレスを入力してください";
     $e = "true";
     }
     if (strlen($_POST['password']) < 8) {
     $_SESSION['password'] = "パスワードは半角英数字8文字以上で設定してください";
     $e = "true";
     }

		$sql = "SELECT email
				FROM customers
				WHERE email = ?;";
		$rs = $db->prepare($sql);
		$data = array($_POST['email']);
		$rs->execute($data);
		$email1 = $rs->fetchAll(PDO::FETCH_ASSOC);
		if($email = $email1) {
			
			$_SESSION['err'] = "メールアドレスが重複しています";
			$e = "true";
			
		}
		
		if($e){
			header("Location:register.php");
		}
	require_once('confirmation.html');
?>
