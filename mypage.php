<?php
	header("Content-Type:text/html; charset=UTF-8");
?>
<?php
	session_start();
	if(isset($_SESSION['abc'])){
		$mes1 = "style=display:none";
		$mes2 = "style=display:block";
		
	//login.phpからcustomer_id取得、代入
		$id = $_SESSION['ID'];

	//DB接続
	$db = new PDO('sqlite:db/main.db', '', '');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	//取得したcustomer_idと一致する会員情報をSELECT
	$sql = "SELECT c.customer_id,
				   c.customer_name, 
				   c.ruby, c.email, 
				   c.gender,sa.tel, 
				   sa.post_code, 
				   sa.address
			FROM customers c
			INNER JOIN shopping_address sa
			ON c.customer_id = sa.customer_id
			WHERE c.customer_id = $id";
	
	$rs = $db->prepare($sql);
	$rs->execute();
	
	//配列に格納
	$data = $rs->fetchall(PDO::FETCH_ASSOC);
	$gender = $data[0]['gender'];
	
	if($gender == "男性"){
		$checked1 = "checked";
		$checked2 = "";
		$checked3 = "";
	} else if($gender == "女性") {
		$checked1 = "" ;
		$checked2 = "checked";
		$checked3 = "";
	} else {
		//その他の場合
		$checked1 = "" ;
		$checked2 = "";
		$checked3 = "checked";
	}
	
}else{
		$mes1 = "style=display:block";
		$mes2 = "style=display:none";

//ログインしていない場合、ログイン画面表示
header("Location:./login.php");
		die();
}
	require_once("mypage.html");
?>




