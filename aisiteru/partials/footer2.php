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
<div id="copy">© AIシテル？ All Rights Reserved.</div>

</div>
</div>
<div id="stt"><a href="#top"></a></div>