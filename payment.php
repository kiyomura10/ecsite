<?php header("Content-Type: text/html;charset=UTF-8");
	
	session_start();
	if(isset($_SESSION['abc'])){
		$mes1 = "style=display:none";
		$mes2 = "style=display:block";
	}else{
		$mes1 = "style=display:block";
		$mes2 = "style=display:none";
	}
	
	if(!isset($_POST['quantity']) && !isset($_POST['cart_id'])){
		header("Location:cart.php");
	}
	
	//var_dump($_POST);
	//ログイン認証、ユーザーID取得（セッション）
	$customer_id = $_SESSION['ID'];
	$customer = array($customer_id);
	//post通信された。購入量とカートid取得
		$buy = $_POST['quantity'];
		$cart_id = $_POST['cart_id'];
	//db接続
		$db = new PDO('sqlite:db/main.db','','');
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
	//var_dump(count($buy));
	//var_dump($cart_id);
		
	
	//カート情報を上書き
		$sql = "update carts set quantity = ? where cart_id = ?;";
		$rs = $db->prepare($sql);
		for($i = 1;$i <= count($buy); $i++){
		$data = array($buy[$i],$cart_id[$i]);
		$rs->execute($data);
		
		
		}
		
		
	//カスタマーIDでカート情報、カスタマー情報、送付先取得、
		
		$sql2 = "select c.customer_name, p.product_name,p.price,ca.quantity,s.address,s.tel,i.image from  customers as c 
					inner join carts as ca on c.customer_id = ca.customer_id
					inner join products as p on p.product_id = ca.product_id
					inner join images as i on i.product_id = p.product_id
					inner join shopping_address as s on s.customer_id = c.customer_id
					where c.customer_id = ? group by ca.cart_id;";
		$rs2 = $db->prepare($sql2);
		$rs2->execute($customer);
		$values = $rs2->fetchall();
		$sum = 0;
		$i = 0;
		require_once('payment.html');
?>

