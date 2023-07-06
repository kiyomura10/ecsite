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
<link rel="stylesheet" href="css/slick.css">
<link rel="stylesheet" href="css/slick-theme.css">
<link rel="stylesheet" href="css/picture.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
<link rel="stylesheet" href="css/contract.css">
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
    <meta itemprop="position" content="1" />
  </li>
      <li itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem">

        <span itemprop="name">特定商取引法表示</span>
   
  </li>
  </div>
</ol>
<!---------------article↓--------------->
<article>
<div class="pagetitle"><!--↓ページタイトルをいれてください-->
	<h1>特定商取引に関する法律に基づく表示 </h1>
</div>
<!--↓ここから各ページの内容-->
<body>


			<h3 class="main">販売業者</h3>
			<div class="sub">
			<p>松本フーズ株式会社<br><br></p>
			
			</div>
			<h3 class="main">運営統括責任者</h3>
			<div class="sub">
				<p>松本紀依<br><br></p>
			</div>
			
			<h3 class="main">電話番号</h3>
			<div class="sub">
				<p>0120-55-6666<br><br></p>
			</div>
			
			<h3 class="main">メールアドレス</h3>
			<div class="sub">
				<p>usagisan@matsumoto<br><br></p>
			</div>
			
			<h3 class="main">販売代金</h3>
			<div class="sub">
				<p>当社サイト上で表示されている商品代金（表示価格）で販売しています。<br>
					お客様ご注文確定時点の表示価格が商品代金となります。<br><br></p>
			</div>
			
			<h3 class="main">販売代金以外の必要料金</h3>
			<div class="sub">
				<p>上記販売代金のほか、以下の手数料が必要となる場合があります。<br>
					・商品の配送料<br>
					・代金引換手数料<br><br></p>
			</div>
			<h3 class="main">納期</h3>
			<div class="sub">
				<p>受注後３～５営業日<br>
			繁忙期や天候不良、災害発生や交通状態により、配送が遅れる可能性がございます。<br><br></p>
			</div>
			<h3 class="main">取扱商品</h3>
			<div class="sub">
				<p>・オーガニック食品<br>
					・オーガニックコスメ<br>
					・オーガニックサプリ<br><br></p>
			</div>
			<h3 class="main">返品・交換</h3>
			<div class="sub">
				<p>当社サイトで販売した商品については以下の条件で返品・交換を承りますので、商品到着後10日以内に、当社までお申し出ください。<br>
					なお、返品をご希望の際は、お電話にてお申し出ください。事前連絡のない返品、交換については、お受けできませんので、ご了承ください。<br><br>
					１．初期不良品当社の責により、不備が発生した場合（商品違い、商品破損等）<br>
					２．商品の当初からの品質上の不備、配送中の事故等による商品破損等の場合<br><br>
					上記に該当する場合でも、一度ご使用になった商品、お客様の責任でキズや汚れが生じた商品については、返品・交換はお受けできません。<br>
					また上記条件に該当しない場合には、返品・交換はお受けできません。<br>
					なお、送料につきましては、上記に該当する場合の返品・交換は、当社負担とさせていただきますが、そうでない場合にはお客様負担とさせていただきます。
					<br><br></p>
			</div>
			<h3 class="main">販売数量</h3>
			<div class="sub">
				<p>特に上限はございませんが、在庫数を超えるご注文の場合、ご購入お手続きができません。<br><br></p>
			</div>
			<h3 class="main">お支払い方法/期限</h3>
			<div class="sub">
				<p>代金引換のみ:商品到着時に代金引き換え<br><br></p>
			</div>
			
			
			
			
<!-- body code goes here --> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-3.4.1.min.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap-4.4.1.js"></script>
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
