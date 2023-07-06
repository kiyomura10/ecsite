
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
<link rel="stylesheet" href="css/faq.css">
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
        <span itemprop="name">よくある質問</span>
    </a>
    <meta itemprop="position" content="2" />
  </li>
  </div>
</ol>
<!---------------article↓--------------->
<article>
<div class="pagetitle"><!--↓ページタイトルをいれてください-->
	<h1>よくあるご質問 </h1>
</div>
<!--↓ここから各ページの内容-->
<body>


			<h3 class="main">①注文後どのくらいで届きますか</h3>
			<div class="sub">
			<p>15時までのご注文は、翌営業日に発送致します。<br><br>
				
				繁忙期や天候不良、災害発生や交通状態により、配送が遅れる可能性がございます。<br>
				その場合、商品のお届けまでに通常よりお時間をいただきますので、予めご了承下さい。<br><br></p>
			
			</div>
			<h3 class="main">②注文をまとめたい</h3>
			<div class="sub">
				<p>ご注文完了後の商品同梱は出来かねます。<br>
				ご注文後2時間以内でしたら、一旦ご注文をキャンセルしていただき再度まとめてご注文をお願いいたします。<br><br></p>
			</div>
			
			<h3 class="main">③注文をキャンセルしたい</h3>
			<div class="sub">
				<p>ご注文のキャンセルは、ご注文完了から2時間以内可能です。<br>
				お電話にてご連絡ください。<br><br>
				
				〈電話番号〉0120-55-6666<br><br></p>
			</div>
			
			<h3 class="main">④到着した商品を返品したい</h3>
			<div class="sub">
				<p>お客様のご都合による返品/交換は基本的にはお受けしておりません。<br>
				商品が不良品の場合、またはご注文内容と異なる商品が届いた場合は、商品到着後10日以内に下記連絡先までご連絡ください。<br>
					<br>
					〈電話番号〉0120-55-6666<br>
					〈メール〉usagisan@matsumoto<br><br></p>
			</div>
			
			<h3 class="main">⑤お支払方法はどのようなものがありますか</h3>
			<div class="sub">
				<p>お支払いは「代金引換え」のみ承っております。<br>
				商品お届時に商品現品と引き換えにお支払ください。<br><br></p>
			</div>
			
			<h3 class="main">⑥送料はいくらですか</h3>
			<div class="sub">
				<p>送料はご購入金額に関わらず、全国一律５５０円となります。<br><br></p>
			</div>
			
			<h3 class="main">⑦商品がカートに入りません</h3>
			<div class="sub">
				<p>下記の3点をお試しください。<br>
					・OSバージョンを最新バージョンにアップデートいただく<br>
					・アプリを経由せずブラウザ【safari】か【Googlechrome】をご利用いただく<br>
					・端末の再起動をしていただく<br><br>
					上記をお試ししても解消しない場合、誠に申し訳ございませんが別の端末のご利用をお願いいたします。<br><br></p>
			</div>
			
			<h3 class="main">⑧マイページにログインできない</h3>
			<div class="sub">
				<p>マイぺージにログインができない場合には、以下の理由が考えられます。<br>
					お手数ですが、今一度お客様のご入力情報のご確認をお願いいたします。<br><br>
					【お客様のご入力のメールアドレスまたはパスワードに誤りがある場合】<br>
					英数字の大文字・小文字などに誤りがある場合もログインはできませんので、今一度入力情報をお確かめください。
					<br><br>
					【会員登録が正常に完了していない場合】<br>
					お手数ですが、再度新規会員登録をお願いいたします。<br><br>
					【登録をしたパスワード・メールアドレスどちらも不明な場合】<br>
					会員サイト側で状況確認いたします。下記連絡先までお問い合わせください。<br>
					<br>
					〈電話番号〉0120-55-6666<br>
					〈メール〉usagisan@matsumoto
					<br><br></p>
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
				<li><a href="top.php"><img src="images/instagram.svg" alt="ダミーインスタ"></a></li>
				<li><a href="top.php"><img src="images/facebook.svg" alt="ダミーフェイスブック"></a></li>
				<li><a href="top.php"><img src="images/twitter.svg" alt="ダミーツイッター"></a></li>
				<li><a href="top.php"><img src="images/line.svg" alt="ダミーライン"></a></li>	
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
