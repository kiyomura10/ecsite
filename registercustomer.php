<?php header("Content-Type: text/html;charset=UTF-8");
	
	$customer_name = $_POST['customer_name'];
	$ruby = $_POST['ruby'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$post_code = $_POST['post_code'];
	$address = $_POST['address'];
	$tel = $_POST['tel'];
	var_dump($_POST['tel']);
	$data = array($customer_name,$password,$email,$ruby,$gender);
	//db接続
		$db = new PDO('sqlite:db/main.db','','');
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//カスタマー情報登録
	$sql ="INSERT INTO customers(customer_name,password,email,ruby,gender) VALUES (?,?,?,?,?);";
	$rs = $db->prepare($sql);
	$rs->execute($data);
	//カスタマーID取得
	$data2= array($password,$email);
	$sql2 ="select customer_id from customers where password = ? and email = ?;";
	$rs2 = $db->prepare($sql2);
	$rs2->execute($data2);
	$id = $rs2->fetch();
	
	//住所登録
	$data3 = array($id['customer_id'],$post_code,$address,$tel);
	$sql3 ="INSERT INTO shopping_address(customer_id,post_code,address,tel) VALUES (?,?,?,?);";
	$rs3 = $db->prepare($sql3);
	$rs3->execute($data3);
	header("Location:kanryou.php");
	
?>

	






