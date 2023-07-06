//to Pagetop

$(function() {
	var showFlag = false;
	var topBtn = $('#totop');	//エリア
	var clickBtn = $('#page-top');	　//クリックするボタン
	topBtn.css({'bottom': '-100px', 'opacity': '0'});
	var showFlag = false;
	//スクロールが100に達したらボタン表示
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
		if (showFlag == false) {
			showFlag = true;
				topBtn.stop().animate( { 'bottom' : '0px', 'opacity' : '1'}, {duration: 1200, easing: 'easeOutBounce'}
				);
//				topBtn.stop().animate({'bottom' : '40px'}, 400); 
				}
			} else {
				if (showFlag) {
					showFlag = false;
					topBtn.stop().animate({'bottom' : '-100px', 'opacity' : '0'},  {duration: 800, easing: 'easeIn'} ); 
				}
			}
		});
	//スクロールしてトップ
	clickBtn.click(function () {
	$('body,html').animate({
		scrollTop: 0
			}, 500);
		return false;
	});
});