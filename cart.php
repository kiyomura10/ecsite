<?php header("Content-Type: text/html;charset=UTF-8");
	//ログインしているかの判定
	session_start();
	if(!isset($_SESSION['abc'])){
	header("Location:./login.php");
	die();
	}

	
	if(isset($_SESSION['abc'])){
		$mes1 = "style=display:none";
		$mes2 = "style=display:block";
	}else{
		$mes1 = "style=display:block";
		$mes2 = "style=display:none";
	}
	

	$mes = isset($_SESSION['buy'])?$_SESSION['buy']:"";
	if($mes != ""){
		unset($_SESSION['buy']);
		}
		
	//ログイン認証、ユーザーID取得（セッション）
	$customer_id = $_SESSION['ID'];
	$customer_id = array($customer_id);
	
	//db接続
		$db = new PDO('sqlite:db/main.db','','');
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//カート情報取得（写真、商品名、金額）
	$sql ="select c.cart_id,c.quantity,p.product_id,p.product_name,p.stock,p.price,i.image from carts as c 
	inner join products as p on c.product_id = p.product_id 
	inner join  images as i on c.product_id = i.product_id 
	where c.customer_id = ?
	group by cart_id; ;";
	$rs = $db->prepare($sql);
		$rs->execute($customer_id);
		$values = $rs->fetchall();
		
		$sum=0;
		$count = 1;
		require_once('cart.html');
?>

	