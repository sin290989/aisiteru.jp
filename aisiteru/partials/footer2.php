<style type="text/css">
/*==============================================================================================*/
/*footer*/
/*==============================================================================================*/
#footer {
  padding-top: 15px;
  padding-bottom: 15px;
  background-color: #f7f8f8;
}
#footer #copy {
  text-align: center;
  font-size: 12px;
}
.ft-menu {
  display: none;
}
#stt {
  position: fixed;
  bottom: 10px;
  right: 10px;
  height: 45px;
  width: 45px;
}
#stt img {
  width: 100%;
  vertical-align: bottom;
}
@media only screen and (min-width: 680px) {
  #footer {
    padding: 0;
  }
  #footer .inner {
    width: 100%;
    height: 100px;
    margin-left: auto;
    margin-right: auto;
    position: relative;
  }
  #footer #copy {
    position: absolute;
    top: 40px;
    left: 30px;
    text-align: left;
    font-size: 11px;
    letter-spacing: 1px;
  }
  #footer .ft-menu {
    display: block;
    position: absolute;
    top: 40px;
    left: 330px;
    font-size: 11px;
  }
  #footer .ft-menu li {
    display: inline;
    margin: 0 15px 0 0;
    letter-spacing: 1px;
  }
  #footer .ft-menu a {
    color: #46526f;
  }
  #stt {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 40px;
    height: 40px;
    z-index: 10000;
  }
  #stt img {
    width: 100%;
    vertical-align: bottom;
  }

  #stt a {
    display: block;
    width: 40px;
    height: 40px;
    border-radius: 20px;
    background-color: #1433d6;
    transition-duration: 0.2s;
    background-image: url("/wp/wp-content/themes/aisiteru/images/icon/top_up_icon.png");
    background-size: 45% auto;
    background-position: center center;
    background-repeat: no-repeat;
  }
}
</style>
<script type="text/javascript">
$(function(){
  $('a[href^="#"]').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    //ヘッダーの高さを取得

	// ヘッダー高さを条件に応じて設定
	let header;
    if ($(window).width() >= 640) {
        // PC用
        header = $('#header').height() + 100;
    } else {
        // モバイル用
        header = $('#header').height() + 40;
    }
    //ヘッダーの高さを引く
    var position = target.offset().top - header;
    $("html, body").animate({scrollTop:position}, speed, "swing");
	//
	$(".sns-link ul").css('transition','all 0.70s ease');
    return false;
  });
});

$( function(){
	$('#stt').hide();
})

$(window).scroll(function(){
	if( $(window).scrollTop() !== 0 ){
		$('#stt').fadeIn();
	} else if( $(window).scrollTop() == 0 ){
		$('#stt').stop().fadeOut();
		$(".sns-link ul").css('transition','all 0s ease');
	}
});

$(function(){
	$('#stt').hover( function(){
		$(this).stop(true).animate({'bottom':'25px'},150);
	},function(){
		$(this).animate({'bottom':'20px'},150);
	});
});
</script>
<div id="footer">
<div class="inner">
<div id="copy">Copyright © <?php echo date("Y"); ?> aisiteru? All Rights Reserved.</div>

</div>
</div>
<div id="stt"><a href="#top"></a></div>