<?php header("Content-Type: text/html;charset=UTF-8");
	//ログイン認証、ユーザーID取得（セッション)
	session_start();
	if(!isset($_SESSION['abc'])){
		header("Location:./login.php");
		die();
		}
	$customer_id = $_SESSION['ID'];
	$customer = $customer_id;
	//post通信された。購入量と商品id取得
		$buy = $_POST['quantity'];
		$product_id = $_POST['product_id'];
		$product = array($_POST['product_id']);
	//db接続
		$db = new PDO('sqlite:db/main.db','','');
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//在庫量
		$sql ="SELECT stock  FROM products where product_id = ? ";
		$rs = $db->prepare($sql);
		
		$rs->execute($product);
		$value = $rs->fetch();
		//var_dump($value);
		
		//カート登録商品数情報取得
		$sql ="SELECT quantity  FROM carts where product_id = ? and customer_id = ?; ";
		$rs2 = $db->prepare($sql);
		$data = array($product_id,$customer);
		$rs2->execute($data);
		$value2 = $rs2->fetch();
		
		
	//カート情報登録（ユーザーID、商品ID、購入量）を配列に保存
	
	 //同じ商品が登録されていた場合
		if(!empty($value2)){
			//カートに登録済みの商品と新たに購入する商品の合計
			$sum =$buy + $value2['quantity'];
			if($sum > $value['stock']){
				//カートと購入量の合計が在庫量を超えていたら最大値を在庫量にする
				$sum = $value['stock'];
				}
			
			$sql = "update carts set quantity = ? where customer_id = ? and product_id = ?;";
			$rs = $db->prepare($sql);
			$data = array($sum,$customer_id,$product_id);
			$rs->execute($data);
			
			header('Location:cart.php');
			//カートに登録されていない在庫判定
		}else if($value['stock'] < $buy){ 
		//在庫より購入量が多い。エラー
		session_start();
		$_SESSION['mes'] = '在庫残り'.$value['stock'].'です。';
		header('Location:top.php');
		 }else{ 
		//在庫より購入量が少ない。カートに登録処理してカート画面表示
		//カート情報登録（ユーザーID、商品ID、購入量）
			$sql = "insert into carts(customer_id,product_id,quantity) values(?,?,?);";
			$data = array($customer_id,$product_id,$buy);
			$rs = $db->prepare($sql);
			$rs->execute($data);
			header('Location:cart.php');
		}
		
		
	
?>

