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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/slick.css">
<link rel="stylesheet" href="css/slick-theme.css">
<link rel="stylesheet" href="css/picture.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
<link rel="stylesheet" href="css/guide.css">

<!--UserStyle-->
<link href="css/style.css" rel="stylesheet"><!--触るな！-->
<link href="css/footer.css" rel="stylesheet"><!--触るな！-->
<link href="css/header.css" rel="stylesheet"><!--触るな！-->
<!--↓作成したcssを読み込んでください-->
<link href="css/guide.css" rel="stylesheet">

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
    <a itemprop="item" href="top.php">
        <span itemprop="name">HOME</span>
    </a>
    <meta itemprop="position" content="1" />
  </li>
    <li itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem">
   
        <span itemprop="name">利用ガイド</span>
   
    <meta itemprop="position" content="2" />
  </li>
  </div>
</ol>
  </div>
</ol>
<!---------------article↓--------------->
<article>
<div class="pagetitle"><!--↓ページタイトルをいれてください-->
	<h1>ご利用ガイド</h1>
</div>
<!--↓ここから各ページの内容-->
<title>ご利用ガイド</title>
<!-- Reset -->
<link href="css/reset.css" rel="stylesheet">
<!-- Bootstrap -->
<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
<!--UserStyle-->
<link href="css/style.css" rel="stylesheet">


</head>
<body>


<div class="guide_content">
					<section id="guide01" class="guide_block">
<h3 class="guide_block"><div class="midasi">お買い物の流れ</h3>
<div class="guide_block_inner">
	<dl>
		<dt>1．ご購入の商品をショッピングカートに入れます。</dt>
		<dd>各商品の詳細ページにある「カートに入れる」ボタンをクリックします。<br>
		カートに入れた商品はいつでも出し入れできます。</dd>
	</dl>
	<dl>
		<dt>2．カートに入れた商品を確認します。</dt>
		<dd>「カートに入れる」ボタンをクリック後、ショッピングカート画面に移ります。<br>
		内容を確認し、必要に応じて購入個数を変更してください。<br>
		間違いがなければ「購入する」ボタンをクリックします。
		
		</dd>
	</dl>
	<dl>
		<dt>3．お客様情報を確認し、ご注文を完了します。</dt>
		<dd>ご購入内容と購入商品の下に表示されるお客様情報を確認し、<br>
		間違いがなければ「確定する」ボタンをクリックします。
		</dd>
	</dl>
				
	<dl>
		<dt>4．商品をお届けします。</dt>
		<dd>ヤマト運輸にてお届けいたします。
		</dd>
		</dl><br><br>
	</div>
</section>
					
<section id="guide03" class="guide_block">
<h3 class="guide_block">お支払いについて</h3>
<div class="guide_block_inner">
	<dl>
		<dt class="circle">ご利用頂けるお支払方法</dt>
		<dd>代金引換</dd>
	<div>代引手数料が別途３３０円必要です。商品お届時に商品現品と引き換えにお支払ください。<br>
	</div>
	</dl><br><br>
</div>
</section>
					
<section id="guide04" class="guide_block">
<h3 class="guide_block">配送について</h3>
<div class="guide_block_inner">
	<dl>
		<dt class="circle">お届けまでの日数について</dt>
		<dd><span class="red">15時までのご注文は、翌営業日に発送致します。</span></dd>
	</dl>
	<dl>
		<dt class="circle">配送会社について</dt>
		<dd>ヤマト運輸の宅急便でのお届けとなります。</dd>
	</dl>
	<dl>
		<dt class="circle">配送可能地域について</dt>
		<dd>ヤマト運輸の宅急便配送地域であれば、日本全国に配送可能です。ただし、日本国外には配送できません。<br>
		宅急便の配送可能地域に関しては、ヤマト運輸のホームページにてご確認ください。</dd>
	</dl>
	<dl id="shipping">
		<dt class="circle">送料について</dt>
		<dd>
		<div>送料はご購入金額に関わらず、全国一律５５０円となります。</div>
									
						</div><!--list02-->										
				</div><!--list-->
		</dl>
	</div>
</section>
	

</div><!--guide_content-->
<!-- body code goes here --> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-3.4.1.min.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap-4.4.1.js"></script>
<hr>

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
