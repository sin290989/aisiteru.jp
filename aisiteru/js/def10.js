// JavaScript Document
$(function () {
    $("#openBtn").click(function () {
        Sc = $(window).scrollTop();
        $("#spMenu").slideDown('fast');
        $("#glayLayer").slideDown('fast');
        $("#closeBtn").show();
        $("#wapper").hide();
        $("#footer").hide();
        $("#stt").hide();
        $('#closeBtn').show();
        $('#openBtn').hide();
    });
    
    $("#closeBtn").click(function () {
        $("#spMenu").slideUp('fast');
        $("#glayLayer").slideUp('fast');
        $("#closeBtn").hide();
        $("#wapper").show();
        $("#footer").show();
        $("#stt").show();
        $('html, body').scrollTop(Sc);
        $('#closeBtn').hide();
        $('#openBtn').show();
        return false;
    });
});

$(function () {
$(window).scroll(function(){
	if( $(window).scrollTop() > 80 ){
		$('#header').css('box-shadow','0px 3px 3px -1px rgba(0,0,0,0.31)');
	} else if( $(window).scrollTop() < 20 ){
		$('#header').css('box-shadow','0px 0px 0px 0px rgba(0,0,0,0.31)');
	}
});  
});

$(function(){
  $('a[href^="#"]').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    //ヘッダーの高さを取得
    var header = $('#header').height() + 30;
    //ヘッダーの高さを引く
    var position = target.offset().top - header;
    $("html, body").animate({scrollTop:position}, speed, "swing");
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
	}
});

$(function(){
	$('#stt').hover( function(){
		$(this).stop(true).animate({'bottom':'25px'},150);
	},function(){
		$(this).animate({'bottom':'20px'},150);
	});
});