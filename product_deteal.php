<?php header("Content-Type: text/html;charset=UTF-8");
	//get通信で商品ID取得
	//db接続
	$db = new PDO('sqlite:db/main.db','','');
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//sql商品情報、在庫取得
		$sql ="SELECT p.product_name,p.product_details,p.price,p.stock ,GROUP_CONCAT(i.image) as image
FROM products  as p inner join images as i on p.product_id = i.product_id where p.product_id = 1 group by p.product_id ;";
		$rs = $db->prepare($sql);
		$rs->execute();
		$value = $rs->fetch();
		var_dump($value);
		//imageを配列に分割
		$images = explode(",",$value['image']);
		var_dump($images);
		
?>
		<!DOCTYPE html>
<html>
<html lang="ja">
 <head>
 <meta charset="utf-8">
 <title>商品詳細</title>
 <!--<link rel="stylesheet" href="sample.css">-->
 </head>
 <body>

 <h1>商品詳細</h1>
 <p>商品名<?= $value['product_name'] ?></p>
 <p>在庫量<?= $value['stock'] ?></p>
 <form method="POST" action="cartregister.php">
 <p>写真<img src="<?= $images[0] ?>"></p>
 <p>商品説明<?= $value['product_details'] ?></P>
 <p>金額<?= $value['price'] ?></P>
 <p>購入量</p>
 <!--カートに入れる商品のidと個数を送信-->
 	<input type="hidden" name="product_id" value="1">
	<input type="number" name="stock" min="0" max="<?= $value['stock'] ?>" required>
 	<input type="submit" value="カートに入れる">
 </form>
 </body>
</html>
		