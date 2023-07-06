<?php header("Content-Type: text/html;charset=UTF-8");

	//ログイン認証、カスタマーID取得（セッション）
	session_start();
	if(!isset($_SESSION['abc'])){
		header("Location:./login.php");
		die();
		}
	$customer_id = $_SESSION['ID'];
	//db接続
		$db = new PDO('sqlite:db/main.db','','');
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		isset($_POST['clear'])?$cart_id = $_POST['clear']:"";
		//var_dump($cart_id);
	
	//var_dump($_POST);
		//押されたボタンに応じて削除処理
		//個別削除ボタンが押された時の処理
	if(isset($_POST['clear'])){
		//カートの中身個別削除
		$cart_id = array($cart_id);
		$sql = "delete from carts where cart_id =  ? ;";
		$rs = $db->prepare($sql);
		$rs->execute($cart_id);
		header('Location:cart.php');
		//var_dump($cart_id);
	}
	//全削除
	if(isset($_POST['allclear'])){
	$customer_id = array($customer_id);
		$sql="delete from carts where  customer_id = ?;";
		$rs = $db->prepare($sql);
		$rs->execute($customer_id);
		header('Location:cart.php');
		
	}
	 
	
	
	
?>

	