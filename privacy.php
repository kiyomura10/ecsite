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
<link rel="stylesheet" href="css/privacy.css">

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
   
        <span itemprop="name">個人情報取扱方針</span>
 
  </li>
  </div>
</ol>
<!---------------article↓--------------->
<article>
<div class="pagetitle"><!--↓ページタイトルをいれてください-->
	<h1>個人情報取扱方針</h1>
</div>
<!--↓ここから各ページの内容-->
<body>
	<div class="policy_inner">
				<p>ハーモニックナチュラル（以下、｢当社｣といいます）は、｢個人情報の保護に関する法律｣（以下、｢法令｣といいます）に基づき、個人情報の適切な保護と利用に関する 取り組みについての会社方針(以下、「プライバシーポリシー」といいます)を公表いたします。</p>
				<p>当社は、個人情報の重要性を認識し、その保護の徹底を図るため、個人情報に関して適用される法令や規範を遵守するとともに、個人情報を以下の方針に従って取り扱います。 </p>

				<dl>
				<dt>個人情報の定義</dt>
				<dd>個人情報とは、お客様ご本人に関する情報で、氏名、生年月日、住所、性別、電話番号、職業、メールアドレスその他の記述等により、お客様個人を識別することができるものを言います。 </dd>
				</dl>
				<dl>
				<dt>利用目的の明示と公表</dt>
				<dd>当社は、お客様の個人情報について、下記の目的の範囲内で適正に取り扱いさせていただきます。<br>
				〔利用目的〕<br>
				・当社が取り扱う商品・サービスの提供<br>
				・当社が取り扱う商品・サービスに関するお知らせや関連サービスのご案内<br>
				・商品についてのアンケート調査等のご依頼<br>
				・キャンペーン等に関する景品等の発送<br>
				・当社が開催(主催・共催・協賛)するイベントや催し物等に関するご案内 <br>
				・お問い合わせ、資料請求その他ご依頼等への対応<br>
				なお、上記利用目的の他、サービスやアンケート等により個別に利用目的を定める場合があります。 </dd>
				</dl>
				<dl>
				<dt>個人情報の取得と利用</dt>
				<dd>当社は、個人情報を適正な方法で取得します。お客様から、個人情報を取得する場合は、原則として利用目的を明らかにした上で行います。また当社は、あらかじめ明らかにした利用目的の範囲を超えて、個人情報を取り扱うことはいたしません。 </dd>
				</dl>
				<dl>
				<dt>個人情報の保護と管理</dt>
				<dd>当社は、取得したお客様の個人情報を利用目的の範囲内で正確・最新の内容に保つよう努め、情報の紛失、改ざん、および漏えいなどから守るべく、必要かつ適切な安全管理措置を講じます。</dd>
				</dl>
				<dl>
				<dt>個人情報の第三者提供</dt>
				<dd>当社は、お客様の同意を得た場合または法令により許された場合を除き、お客様の個人情報を第三者に提供することはいたしません。なお、お客様の個人情報を第三者に提供する場合には、提供する情報は必要な範囲のみに限定し、提供先に対して 契約等により個人情報の管理を義務付けるとともに、適切な監督を行います。</dd>
				</dl>
				<dl>
				<dt>開示請求等の求め</dt>
				<dd>当社は、お客様が自らの個人情報の開示、訂正、商品やサービスの紹介の停止、または 消去などを希望される場合、ご本人であることを確認した上で、法令の規定に基づき、 すみやかに対応します。</dd>
				</dl>
				<dl>
				<dt>社内体制の継続的改善とプライバシーポリシーの改定</dt>
				<dd>当社は、取得した個人情報を適切に取り扱うために、内部規程の整備、従業員教育および適正な内部監査の実施等を通じて、プライバシーポリシーの見直しを含めた社内体制の継続的強化・改善に努めます。また、プライバシーポリシーの改定が必要であると判断した場合、お客様に対して予告なく改定することがあります。 但し、重要な変更がある場合には、当ホームページ上においてお知らせいたします。</dd>
				</dl>
				<dl>
				<dt>利用規約</dt>
				<dd>【適用範囲】
				本規約は、ハーモニックナチュラル（以下弊社）が作成、管理し、インターネット上に展開する<a href="index.html"></a>（以下当サイト）に構築するコンテンツに適用されます。当サイトをご利用になる皆様は、全て本規約に同意いただいたものとします。</dd>
				</dl>
				<dl>
				<dt>著作権</dt>
				<dd>当サイト上のコンテンツの著作権は、弊社が所有するものとします。</dd>
				</dl>
				<dl>
				<dt>セキュリティ</dt>
				<dd>ユーザの登録情報はユーザのプライバシー保護及びセキュリティの為、パスワードで保護されています。<br>
				また本サイトでは、お客様のプライバシー保護のため、「個人情報入力ページ」においてSSL暗号化通信を実現しています。<br>
				尚、SSLで暗号化されたページ(URLがhttps://で始まるページ）をご利用いただくには、ブラウザの設定をSSLが利用できるように設定してください。<br>
				※ご注意：SSLを利用するためのブラウザ設定方法はご利用のブラウザによって異なります。</dd>
				</dl>
				<dl>
				<dt>禁止事項</dt>
				<dd>当サイト上のコンテンツ全ては、弊社の著作物であるか、または許可を受けた上で使用されているものであり、無断転載等の二次使用は禁止します。利用者は弊社の許諾を得ず、当サイト上のコンテンツを著作権法で定める個人の私的使用の範囲を超えて使用、または公開することはできません。</dd>
				</dl>
				<dl>
				<dt>利用規約の変更</dt>
				<dd>弊社は適宜裁量により本規約を変更することができるものとします。</dd>
				</dl>
				<dl>
				<dt>個人を特定しない属性情報・行動履歴の取得及び利用について</dt>
				<dd>当ウェブサイトでは、広告配信事業者が提供するプログラムを利用し、特定のサイトにおいて行動ターゲティング広告（サイト閲覧情報などをもとにユーザーの興味・関心にあわせて広告を配信する広告手法）を行っております。その際、ユーザーのサイト訪問履歴情報を採取するためCookieを使用しています（ただし、個人を特定・識別できるような情報は一切含まれておりません）。<br>
				広告配信事業者は 当該Cookieを使用して当ウェブサイトへの過去のアクセス情報に基づいて広告を配信します。この広告の無効化を希望されるユーザーは 広告配信事業者のオプトアウトページにアクセスして、Cookie の使用を無効にできます。ブラウザの変更、Cookieの削除及び新しいPCへ変更等の場合には再度設定が必要となります。<br>
				ユーザーは広告のオプトアウトページでYahoo!やGoogleのCookie を使用しないよう設定できます（また、Network Advertising Initiative のオプトアウト ページでも第三者配信事業者の Cookie の使用を無効にできます）。オプトアウトを行っていない場合、Yahoo!やGoogle他、第三者配信事業者または広告ネットワークの Cookie も使用される可能性があります。Network Advertising Initiative のオプトアウト ウェブサイトでは、一部のCookie（すべてではありません）をまとめて無効にできます。</dd>
				<dd>			・オプトアウトページのURLは下記になります。<br>
				Yahoo!のオプトアウトページ：<a href="http://btoptout.yahoo.co.jp/optout/preferences.html" target="blank">http://btoptout.yahoo.co.jp/optout/preferences.html</a><br>
				Googleのオプトアウトページ：<a href="http://www.google.co.jp/policies/privacy/ads/" target="blank">http://www.google.co.jp/policies/privacy/ads/</a><br>
				Network Advertising Initiativeのオプトアウトページ：<a href="http://www.networkadvertising.org/choices/#completed" target="blank">http://www.networkadvertising.org/choices/#completed</a></dd>
				</dl>
				<dl>
				<dt>Cookieについて</dt>
				<dd>Cookieとは、ウェブページを利用したときに、ブラウザとサーバーとの間で送受信した利用履歴や入力内容などをお客様のコンピュータに一時的にデータを書き込んで保存させる仕組みです。</dd>
				</dl>
				<dl class="end">
				<dt>Cookieの設定について</dt>
				<dd>お客様はCookieの送受信に関する設定を「すべてのCookieを許可する」、「すべてのCookieを拒否する」、「Cookieを受信したらユーザーに通知する」などから選択できます。設定方法は、ブラウザにより異なります。Cookieに関する設定方法は、お使いのブラウザの「ヘルプ」メニューでご確認ください。<br>
				「すべてのCookieを拒否する」を選択されますと、認証に必要なサービスを受けられなくなる等、インターネットの各種サービスの利用上、成約を受ける場合がありますのでご注意ください。</dd>
				</dl>


				<p>2021年7月15日</p>
				<p>松本フーズ株式会社</p>
			</div>

		</div>
	</section><!--policy-->

			
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
