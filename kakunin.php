<?php
	header("Content-Type:text/html; charset=UTF-8");
 var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>変更内容確認画面</title>
</head>
<body>
<h1>変更内容確認画面</h1>

<form action="koushin.php" method="post">
<p>名前：<?php print(htmlspecialchars($_POST['namae'])) ; ?></p>
<p>フリガナ：<?php print(htmlspecialchars($_POST['ruby'])); ?></p>
<p>メールアドレス：<?php print(htmlspecialchars($_POST['email'])); ?></p>
<p>性別：<?php print(htmlspecialchars($_POST['gender'])); ?></p>
<p>電話番号：<?php print(htmlspecialchars($_POST['tel'])); ?></p>
<p>郵便番号：<?php print(htmlspecialchars($_POST['post_code'])); ?></p>
<p>住所：<?php print(htmlspecialchars($_POST['address'])); ?></p>

<p><input type=hidden name="namae" value=<?php print($_POST['namae']); ?>></p>
<p><input type=hidden name="ruby" value=<?php print($_POST['ruby']); ?>></p>
<p><input type=hidden name="email" value=<?php print($_POST['email']); ?>></p>
<p><input type=hidden name="gender" value=<?php print($_POST['gender']); ?>></p>
<p><input type=hidden name="tel" value=<?php print($_POST['tel']); ?>></p>
<p><input type=hidden name="post_code" value=<?php print($_POST['post_code']); ?>></p>
<p><input type=hidden name="address" value=<?php print($_POST['address']); ?>></p>
<p><input type=hidden name="customer_id" value=<?php print($_POST['customer_id']); ?>></p>
<input type=submit value=更新>
<a href="mypage.php">戻る</a>
</form>
</body>
</html>