// JavaScript Document

	      $(function(){
          // ScrollSpeed
			 var speed = 1000; 

        // ページ内遷移（#）で実行
        $('a[href^="#"]').click(function() {
          var href= $(this).attr("href");
          var target = $(href == "#" || href == "" ? 'html' : href);
          var position = target.offset().top;
          $('body,html').animate({scrollTop:position}, speed, 'easeInOutCirc');
          return false;
        });
      });
