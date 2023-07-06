<?php header("Content-Type: text/html;charset=UTF-8");

	session_start();
	if(isset($_SESSION['abc'])){
		$mes1 = "style=display:none";
		$mes2 = "style=display:block";
	}else{
		$mes1 = "style=display:block";
		$mes2 = "style=display:none";
	}
	
	//GET通信で商品ID取得
		$product_id = isset($_GET['product_id'])?$_GET['product_id']:"";
	//db接続
		$db = new PDO('sqlite:db/main.db','','');
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//sql商品情報、在庫取得
		$sql ="SELECT
					p.product_name,
					p.product_details,
					p.price,
					p.stock,
					product_summary,
					i.image
				FROM
					products  as p
				INNER JOIN
					images as i
				ON
					p.product_id = i.product_id
				WHERE
					p.product_id = ?
				ORDER BY
					i.image asc;";
		$rs = $db->prepare($sql);
		$data = array($product_id);
		$rs->execute($data);
		$value_list = $rs->fetchall(PDO::FETCH_ASSOC);
		
		//var_dump($value);
	require_once("./item.html");
	
?>
