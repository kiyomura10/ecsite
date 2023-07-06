<?php
	header("Content-Type:text/html; charset=UTF-8");
	//customer_idをPOSTで受け取り
	session_start();
	if(!isset($_SESSION['abc'])){
		header("Location:./login.php");
		die();
		}
	$customer_id = $_SESSION['ID'];
			
			$customer = array($customer_id);
			
	//DB接続
	if($customer_id != "") {
		$db = new PDO('sqlite:db/main.db', '', '');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//在庫確認SQL文
		$sql = "SELECT
					c.customer_id,
					c.product_id,
					c.quantity,
					p.stock
				FROM
					carts as c
				INNER JOIN
					products as p
				ON
					p.product_id = c.product_id
				WHERE
					customer_id = ?;";
		
		$rs = $db->prepare($sql);
		$rs->execute($customer);
		
		$customer_carts = $rs->fetchAll(PDO::FETCH_ASSOC);
		//var_dump($customer_carts);
		
	//在庫削除SQL文作成
		foreach($customer_carts as $c){
		$data = "UPDATE products SET stock = stock - ". $c['quantity']. " WHERE product_id = ". $c['product_id'].";";
		//var_dump($data);
		$sql = $data;
		$rs = $db->prepare($sql);
		$rs->execute();
		
		$product = $rs->fetch(PDO::FETCH_ASSOC);
		}
	//購入処理完了後カート削除
		$data = "DELETE FROM carts WHERE customer_id = " . $customer_id;
		$sql = $data;
		$rs = $db->prepare($sql);
		$rs->execute();
	}
	$_SESSION['buy'] = "購入処理が完了しました。";
	header("Location:cart.php");
	
?>
