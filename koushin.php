<?php
	header("Content-Type:text/html; charset=UTF-8");

	try {
	
	$namae = $_POST['namae'];
	$ruby = $_POST['ruby'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$tel = $_POST['tel'];
	$post_code = $_POST['post_code'];
	$address = $_POST['address'];
	$id = $_POST['customer_id'];

	///////customerテーブル更新///////
	
	//DB接続
	$db = new PDO('sqlite:db/main.db', '', '');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$stmt = $db->prepare("UPDATE customers
			SET customer_name = :namae,
				ruby = :ruby,
				email = :email,
				gender = :gender
			WHERE customer_id = $id");
			
	$stmt->execute(array
					(':namae' => $_POST['namae'], 
					 ':ruby' => $_POST['ruby'], 
					 ':email' => $_POST['email'], 
					 ':gender' => $_POST['gender']));
	$db = null;
	
	///////shopping_addressテーブル更新///////
	
	$db = new PDO('sqlite:db/main.db', '', '');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$stmt = $db->prepare("UPDATE shopping_address
			SET post_code = :post_code,
				address = :address,
				tel = :tel
			WHERE customer_id = $id");
			
	$stmt->execute(array
					(':post_code' => $_POST['post_code'], 
					 ':address' => $_POST['address'], 
					 ':tel' => $_POST['tel']));
					 
	 $db = null;
	
	
	} catch (Exception $e) {
	 echo 'エラーが発生しました。:' . $e->getMessage();
	}
	header("Location:kanryou.php");
?>


	
	<?php
	/*
	$stmt->bindParam( ':customer_id', $id, PDO::PARAM_INT);
	$stmt->bindParam( ':customer_name', $namae, PDO::PARAM_STR);
	$stmt->bindParam( ':ruby', $ruby, PDO::PARAM_STR);
	$stmt->bindParam( ':email', $email, PDO::PARAM_STR);
	$stmt->bindParam( ':gender', $gender, PDO::PARAM_STR);
	

	$res = $stmt->execute();

	*/
?>
	

	