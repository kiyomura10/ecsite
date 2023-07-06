
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

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>HarmonicNatural　Webstore(ハーモニックナチュラル)</title>
<!-- Reset -->
<link href="css/reset.css" rel="stylesheet">
<!-- Bootstrap -->
<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
<!--その他-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<!--↓パクってきたcssはこっち--> 

<!--UserStyle-->
<link href="css/style.css" rel="stylesheet"><!--触るな！-->
<link href="css/footer.css" rel="stylesheet"><!--触るな！-->
<link href="css/header.css" rel="stylesheet"><!--触るな！-->
<!--↓作成したcssを読み込んでください-->
<link href="css/company.css" rel="stylesheet"><!--触るな！-->

</head>

<body>
<!---------------ヘッダー↓--------------->
<header>
	<div class="headerInner">
		<h1><a href="top.php"><img src="images/header/logo.png" alt="ハーモニックナチュラル"></a></h1>
		<nav>
			<ul class="nav_item">
				<li><a href="category.php" ontouchstart>カテゴリ</a></li>
				<li><a href="guide.php" ontouchstart>利用ガイド</a></li>
				<li><a href="faq.php" ontouchstart>よくある質問</a></li>
			</ul><!--nav_item-->
			<ul class="nav_cart">
			    <li class="registratuion"><a href="mypage.php"><img src="images/human.svg" alt="マイページ遷移のアイコン"></a></li>
			    <li class="logout" <?php print($mes2) ?>><a href="logout.php"><img src="images/door-open.svg" alt="ログインページ遷移のアイコン"></a></li>
			   	<li class="login" <?php print($mes1) ?>><a href="login.php"><img src="images/door-closed.svg" alt="ログインページ遷移のアイコン"></a></li>
			    <li class="cart"><a href="cart.php"><img src="images/cart.svg" alt="カートページ遷移のアイコン"></a></li>
			</ul><!--nav_icon-->
		</nav>
	</div><!--headerInner-->
</header>
<div class="triggerOuter">
	<div class="trigger">
		<div class="openbtn-area"><span></span><span></span><span></span></div>
		</div>
	</div>
<div class="header_border">
</div><!--ナビ下の帯部分-->
<!--ぱんくず-->
<ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
  <div class="breadcrumb_text">
  <li itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem">
    <a itemprop="item" href="index.html">
        <span itemprop="name">HOME</span>
    </a>
     <li itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem">
    
        <span itemprop="name">会社概要</span>
    </a>
    </div>
</ol>
<!---------------article↓--------------->
<article>
<div class="pagetitle"><!--↓ページタイトルをいれてください-->
	<h1>会社概要</h1>
</div>
<!--↓ここから各ページの内容-->
<div class="company">
		<p >Harmonic　Naturalは、オーガニック、マクロビオティックを基本に<br class="pc">「食」ビジネスに取り組んでいる、株式会社松本フーズが運営しています。</p>
					<table class="com_inf">
						<tr>
							<th>社名</th>
							<td>松本フーズ株式会社</td>
						</tr>
						<tr>
							<th>住所</th>
							<td>〒540-0024 大阪市中央区南新町1-3-8</td>
						</tr>
						<tr>
							<th>電話番号</th>
							<td>06-4400-6772</td>
						</tr>
						<tr>
							<th>FAX</th>
							<td>06-6920-6111</td>
						</tr>
						<tr>
							<th>ホームページ</th>
							<td><a href=""</a></td>
						</tr>
						<tr>
							<th>メール</th>
							<td><a href="">matsumoto@docomo.jp</a></td>
						</tr>
						<tr>
							<th>創業</th>
							<td>昭和28年（1953年）</td>
						</tr>
						<tr>
							<th>創立</th>
							<td>昭和61年（1986年）</td>
						</tr>
						<tr>
							<th>代表取締役</th>
							<td>松本 征剛</td>
						</tr>
						<tr>
							<th>事業内容</th>
							<td>自然食品の輸出入・オーガニック原料・商品の輸出入</td>
						</tr>
						<tr>
							<th>関連会社</th>
							<td>
								ムソー株式会社<br>
								正食協会<br>
								ムソー食品工業株式会社<br>
								株式会社冨貴食研<br>
								大連日華有機食品精選有限公司<br>
								American Soy Products, Inc.
							</td>
						</tr>
						<tr>
							<th>所属協会</th>
							<td>
								NPO日本オーガニック&amp;ナチュラルフーズ協会(JONA)<br>
								NPO全日本健康自然食品協会(NPO全健協)<br>
								NPO日本オーガニック検査員協会(JOIA)<br>
								OCIA協会<br>
								ECOCERTインターナショナル
							</td>
						</tr>
					</table>
</div><!--company-->				
				
			
	
<hr>
</article>
<!-- ボタン --> 
<a href="#" id="page_top">ページの先頭に戻る</a>
<!---------------フッター↓--------------->
<footer>
	<div class="footer_sns">
		<p>公式SNS</p>
			<ul class="sns-btn">
				<li><a href="index.html"><img src="images/instagram.svg" alt="ダミーインスタ"></a></li>
				<li><a href="index.html"><img src="images/facebook.svg" alt="ダミーフェイスブック"></a></li>
				<li><a href="index.html"><img src="images/twitter.svg" alt="ダミーツイッター"></a></li>
				<li><a href="index.html"><img src="images/line.svg" alt="ダミーライン"></a></li>	
			</ul>
	</div><!--footer_sns終わり-->
	<div class="footer_logo">
		<p><a href="top.php"><img src="images/header/logo.png" alt="ハーモニックナチュラル"></a></p>
	</div><!--footer_logo終わり-->
	<!--お問い合わせフォーム-->
	<div class="contact">
		<p>お問い合わせ</p>
			<ul class="contact">
				<li>TEL<a href="top.php"> 0120-55-6666</a></li>
				<li>MAIL<a href="top.php"> usagisan@matsumoto</a></li>
			</ul>
	</div><!--contact終わり-->				
			<ul class="footer_link">
				<li><a href="company.php">会社概要</a></li>
				<li><a href="contract.php">特定商取引法に基づく表示</a></li>
				<li><a href="privacy.php">個人情報取り扱い方針</a></li>
				<li><a href="">お問い合わせ</a></li>
			</ul>
	<div class="footer_copyright"><small>Copyright &#169; 2023 Matsumoto Co.Ltd., All rights reserved.</small>
	</div><!--footer_copyright終わり-->
</footer><!--footer終わり-->
<!----------------------------------->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-3.4.1.min.js"></script> 
<script src="js/jquery.easing.1.3.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap-4.4.1.js"></script>
<!--UX Controls--> 
<script src="js/scrollJudge.js"></script> 
<script src="js/trigger.js"></script>
<script src="js/totop.js"></script>
<script src="js/smoothscroll.js"></script>
</body>
</html>