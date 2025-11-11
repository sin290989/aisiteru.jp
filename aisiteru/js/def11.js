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
    $('#searchBtn').on('click', function(){
        $(".gmenuBlogSub").slideUp(200);
        $("#header .gmenuAbout,#header .gmenuContact,#header .gmenuBlog,#header .gmenuService").css('transition-duration','0.4s');
        $("#header .gmenuAbout,#header .gmenuContact,#header .gmenuBlog,#header .gmenuService").css('top','-100px');
        $("#header #searchBtn").css('right','75px');
        $("#header #searchBtn").css('opacity','0');
        $("#header #searchBtnClose").css('display','block');
        $("#header .search-form-wap").css('opacity','1.0');
        $("#header .inner .search-form .btn-area").css('opacity','0');
        setTimeout(function(){
           $("#header .search-form-wap").css('left','530px');
        },60);
        setTimeout(function(){
            $("#header .inner .search-form .btn-area").css('opacity','1.0');
        },200);
    });
});
    
$(function(){
    $('#searchBtnClose').on('click', function(){
        $("#header .gmenuAbout,#header .gmenuContact,#header .gmenuBlog,#header .gmenuService").css('transition-duration','0.7s');
        $("#header .gmenuAbout,#header .gmenuContact,#header .gmenuBlog,#header .gmenuService").css('top','26px');
        $("#header #searchBtn").css('right','20px');
        $("#header #searchBtn").css('opacity','1.0');   
        $("#header #searchBtnClose").css('display','none');
        $("#header .search-form-wap").css('opacity','0');
        $("#header .search-form-wap").css('left','500px');
        $("#header .inner .search-form .btn-area").css('opacity','0');
        
    });
});

$(function () {
    $('.gmenuBlog').hover(function(){
        $(".gmenuBlogSub").slideDown(300);
    }); 
});
    
$(function () {
    $('.gmenuBlog').hover(function(){
        $(".gmenuBlog .gmenuJp").css('color','#82d700');
    }, function(){
        $(".gmenuBlog .gmenuJp").css('color','#444444');
    });
});
 
$(function () {
    $('.gmenuAbout,.gmenuService,.gmenuContact').hover(function(){
        $(".gmenuBlogSub").slideUp(200);
    }); 
});
    
$(function () {
    $(window).scroll(function(){
        $(".gmenuBlogSub").slideUp(200);
        $("#header .gmenuAbout,#header .gmenuContact,#header .gmenuBlog,#header .gmenuService").css('transition-duration','0.7s');
        $("#header .gmenuAbout,#header .gmenuContact,#header .gmenuBlog,#header .gmenuService").css('top','26px');
        $("#header #searchBtn").css('right','20px');
        $("#header #searchBtn").css('opacity','1.0');   
        $("#header #searchBtnClose").css('display','none');
        $("#header .search-form-wap").css('opacity','0');
        $("#header .search-form-wap").css('left','500px');
        $("#header .inner .search-form .btn-area").css('opacity','0');
    });  
});
    
$(function () {    
    $('body').click(function() {
        $(".gmenuBlogSub").slideUp(200);
    });
});