<?php
	header("Content-Type:text/html; charset=UTF-8");
	
	session_start();
	if(isset($_SESSION['abc'])){
		$mes1 = "style=display:none";
		$mes2 = "style=display:block";
	}else{
		$mes1 = "style=display:block";
		$mes2 = "style=display:none";
	}
	
	//DB接続
	$db = new PDO('sqlite:db/main.db', '', '');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	//食べ物一覧
	$sql ="SELECT
				p.product_id,
				p.categori_id,
				p.product_name,
				p.price,
				p.stock,
				i.image
			FROM
				images as i
			INNER JOIN
				products as p
			ON
				i.product_id = p.product_id
			WHERE p.categori_id = 'e'
			AND i.image LIKE '%img1%'
			group by
				p.product_id;";
	
	$rs = $db->prepare($sql);
	
	$rs->execute();
	
	$food_list = $rs->fetchAll(PDO::FETCH_ASSOC);
	
	require_once("./food.html");
	

?>
