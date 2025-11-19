<!DOCTYPE html>
<html lang="ja">
<head>
<?php
if($_SERVER["HTTP_HOST"] == 'aisiteru.jp'){
	include_once("analyticstracking.php");
}
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common102.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/style17.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<script type='text/javascript'>	
</script>
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts") ?>
<?php if(!is_paged() ): ?>
<script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.min.js"></script>
<script type="text/javascript">  
$(function(){
    /*リロードした時にページの先頭移動*/
    if (window.performance) {
      if (performance.navigation.type === 1) {
          window.scrollTo(0, 0);
      }
    }
    
    /*////////////////////////////////////////////////////////////////////////////////////////////////*/
    //メインイメージ///////////////////////////////////////////////////////////////////////////////////*/
    /*////////////////////////////////////////////////////////////////////////////////////////////////*/
    
    var windowWidth = $(window).width();　//ブラウザの幅
    var windowHeight = $(window).height();　//ブラウザの高さ
    var scroll = $(window).scrollTop();　//スクロール量
    
    if(windowWidth < 680){
        //sp時、メイン画像の高さを取得する。
        var mainImgText2Top = $("#mainImgText2").offset().top;
        var mainImgText2Height = $("#mainImgText2").height();
        var mainImgHeight = $("#mainImg").height();
        var mainImgImgHeight = (mainImgHeight - mainImgText2Top) - mainImgText2Height / 2;

        $("#mainImgImg").css('height',mainImgImgHeight);
        $("#mission").css('top','153px');
    }
    
    
    
    var href = location.href;
    if(href.match(/aisiteru/)){
        var aaa = /aisiteru/;
    }else{
        var aaa = /onara/;
    }
    
    var ref = document.referrer;
    
    if(ref.match(aaa)) {
        /*$("#header").css('transition-duration','0.0s');*/
        
        
        //フォーディング設定
        $("#splash,#open").css('display','none');
        $("#mainImgText1").css('opacity','1.0');
        $("#mainImgText2").css('opacity','1.0');
        $("#mainImgText3").css('opacity','1.0');
        /*$("#mainImgImg").css('opacity','1.0');*/
        $(".scrolldown").css('opacity','1.0');
        $("#mainImgTextLine").css('opacity','1.0');
        $("#mainImgTextMisson").css('opacity','1.0');

        /*$("#mainImgImg").css('bottom','0px');*/
        $(".scrolldown").css('bottom','35px');
        /*$("#contents").css('display','block');
        $("#contents").css('top','0px');*/
        /*$("#footer").css('display','block');
        $("#datena-info").css('display','block');*/
        $("#mainImgImg").css('animation-delay','1s');
        
        if(windowWidth > 680){
                $("#mainImgText1").css('transition-duration','0.0s');
                $("#mainImgText2").css('transition-duration','0.0s');
                $("#mainImgText3").css('transition-duration','0.0s');
                $("#mainImgTextLine").css('transition-duration','0.0s');
                $("#mainImgTextMisson").css('transition-duration','0.0s');
                //$(".detailBtn").css('transition-duration','0.0s');
                $("#mainImgText1").css('opacity','0');
                $("#mainImgText2").css('opacity','0');
                $("#mainImgText3").css('opacity','0');
                $("#mainImgTextLine").css('opacity','0');
                $("#mainImgTextMisson").css('opacity','0');
                //$(".detailBtn").css('opacity','0');
            
            setTimeout(function(){
                var logoLeft = $("#header .logo").offset().left - 150;
                $("#mainImgTextLine").css('left',logoLeft);
                $("#mainImgTextMisson").css('left',logoLeft);
                //$(".detailBtn").css('left',logoLeft);
            },10);
            
            setTimeout(function(){
                var logoLeft = $("#header .logo").offset().left - 150;
                $("#mainImgText1,#mainImgText2,#mainImgText3").css('left',logoLeft);
            },20);
            
            setTimeout(function(){
                $("#mainImgText1").css('transition-duration','1.0s');
                $("#mainImgText2").css('transition-duration','1.0s');
                $("#mainImgText3").css('transition-duration','1.0s');
                $("#mainImgTextLine").css('transition-duration','1.0s');
                $("#mainImgTextMisson").css('transition-duration','1.0s');
                //$(".detailBtn").css('transition-duration','1.0s');
            },30);
            
            setTimeout(function(){
                var logoLeft = $("#header .logo").offset().left - 10;
                $("#mainImgTextLine").css('left',logoLeft);
                $("#mainImgTextLine").css('opacity','1.0');
            },40);
            
            setTimeout(function(){
                var logoLeft = $("#header .logo").offset().left - 10;
                $("#mainImgText1").css('left',logoLeft);
                $("#mainImgText1").css('opacity','1.0');
                $(".detailBtn").css('left',logoLeft);
                //$(".detailBtn").css('opacity','1.0');
            },100);
            
            setTimeout(function(){
                var logoLeft = $("#header .logo").offset().left - 10;
                $("#mainImgText3").css('left',logoLeft);
                $("#mainImgText3").css('opacity','1.0');
                $("#mainImgTextMisson").css('left',logoLeft);
                $("#mainImgTextMisson").css('opacity','1.0');
            },150);
            
            setTimeout(function(){
                var logoLeft = $("#header .logo").offset().left - 10;
                $("#mainImgText2").css('left',logoLeft);
                $("#mainImgText2").css('opacity','1.0');
                $("#header").css('position','fixed');
                $("#header").css('transition-duration','0.5s');
                $("#mission").css('opacity','1.0');
                $("#mainImgImg").css('bottom','0px');
                $("#mainImgImg").css('opacity','1.0');
                
            },200);
            setTimeout(function(){
                $("#mission").css('top','280px');
                var logoLeft = $("#header .logo").offset().left - 10;
                //$(".detailBtn").css('left',logoLeft);
                //$(".detailBtn").css('bottom','100px');
                //$(".detailBtn").css('opacity','1.0');
 
                $("#mainImgText1,#mainImgText2,#mainImgText3").css('color','#82d700');
                $("#mainImgText1 span.ppp span.zzz,#mainImgText2 span.ppp span.zzz,#mainImgText3 span.ppp span.zzz").css('color','#006d00');
            },250);
        
            setTimeout(function(){
                $("#mainImgText1 span.ppp,#mainImgText2 span.ppp,#mainImgText3 span.ppp").addClass("ttt");
            },550);
            
            setTimeout(function(){
                $("#contents").css('display','block');
            },850);
            setTimeout(function(){
                $("#contents").css('top','0px');
                $("#footer,#datena-info").css('display','block');
            },1000);
            
            setTimeout(function(){
                $("#header").css('top','0');
            },1400);
            
            setTimeout(function(){
                $("#header .gmenuAbout").css('top','26px');
                $("#header .gmenuContact").css('top','26px');
            },1500);
            
            setTimeout(function(){
                $("#header .gmenuBlog").css('top','26px');
            },1550);
            
            setTimeout(function(){
                $("#header .gmenuService").css('top','26px');
            },1600);
            
            
            
            
        }else{
            //sp
            $("#mainImgText1,#mainImgText2,#mainImgText3,#mainImgTextLine,#mainImgTextMisson").css('transition-duration','0.0s');
            $("#mainImgText1,#mainImgText2,#mainImgText3,#mainImgTextLine,#mainImgTextMisson").css('opacity','0');
            //$(".detailBtn").css('transition-duration','0.0s');

            //$(".detailBtn").css('opacity','0');
            $("#mainImgText1").css('top','300px');
            $("#mainImgText2").css('top','340px');
            $("#mainImgText3").css('top','380px');

            $("#mainImgTextLine").css('top','350px');
            $("#mainImgTextMisson").css('top','360px');
            $("#mainImgImg").css('bottom','-200px');
            
            setTimeout(function(){
                $("#mainImgText1,#mainImgText2,#mainImgText3,#mainImgTextLine,#mainImgTextMisson").css('transition-duration','1.0s');
            },20);
            
            setTimeout(function(){
                $("#mainImgText1").css('top','100px');
                $("#mainImgText1").css('opacity','1.0');
                
                $("#header").css('position','fixed');
                $("#header").css('transition-duration','0.5s');
            },500);
            
             setTimeout(function(){
                $("#mainImgText2").css('top','140px');
                $("#mainImgText2").css('opacity','1.0');
            },560);
            
            setTimeout(function(){
                $("#mainImgText3").css('top','180px');
                $("#mainImgText3").css('opacity','1.0');
                $("#mainImgImg").css('opacity','1.0');
                $("#mainImgImg").css('bottom','0');
            },535);
            
            
            setTimeout(function(){
                $("#mainImgTextLine").css('top','230px');
                $("#mainImgTextLine").css('opacity','1.0');
                $("#mainImgTextMisson").css('top','240px');
                $("#mainImgTextMisson").css('opacity','1.0');
            },950);
            
            setTimeout(function(){
                $("#mission").css('opacity','1.0');
                $("#mission").css('top','128px');
                
            },1050);
            
            setTimeout(function(){
                $("#mainImgText1 span.ppp,#mainImgText2 span.ppp,#mainImgText3 span.ppp").addClass("ttt");
                $("#mainImgText1 span.ppp span.zzz,#mainImgText2 span.ppp span.zzz,#mainImgText3 span.ppp span.zzz").css('transition-duration','1.0s');
                $("#mainImgText1 span.ppp span.zzz,#mainImgText2 span.ppp span.zzz,#mainImgText3 span.ppp span.zzz").css('color','#006d00');
            },1500);
            
            setTimeout(function(){
                $("#contents").css('display','block');
            },1600);
            
            setTimeout(function(){
                $("#contents").css('top','0px');
                $("#footer,#datena-info").css('display','block');
            },1700);
            
            setTimeout(function(){
                $("#header").css('top','0');
            },2000);
            
            
        }
        
    }else{
        ////////////////////////////////////////////////////////////////////////////////////////////////////
        //ローディングアリ
        ////////////////////////////////////////////////////////////////////////////////////////////////////
        
        //テキストのカウントアップ+バーの設定
        var bar = new ProgressBar.Circle(container, {
          color: '#006d00',
          // This has to be the same size as the maximum width to
          // prevent clipping
          strokeWidth: 4,
          trailWidth: 0,
          easing: 'easeInOut',
          duration: 1500,
          text: {
            autoStyleContainer: false
          },
          from: { color: '#006d00', width: 4 },
          to: { color: '#82d700', width: 4 },
          // Set default step function for all animate calls
          step: function(state, circle) {
            circle.path.setAttribute('stroke', state.color);
            circle.path.setAttribute('stroke-width', state.width);

            var value = Math.round(circle.value() * 100);
            if (value === 0) {
              circle.setText('');
            } else {
              circle.setText(value);
            }

          }
        });
        bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
        bar.text.style.fontSize = '2rem';

        bar.animate(1.0);  // Number from 0.0 to 1.0

        //アニメーションスタート
        bar.animate(1.0, function () {//バーを描画する割合を指定します 1.0 なら100%まで描画します
         $("#container").fadeOut(50);//#splashエリアをフェードアウト
            
            
        /*/////////////////////////////////////////////////*/
        //0秒後
        
            if(windowWidth > 680){
                
                setTimeout(function(){
                    var logoLeft = $("#header .logo").offset().left + 75;
                    $("#mainImgText1").css('left',logoLeft);
                    $("#mainImgText1").css('opacity','1.0');
                },100);
                
                setTimeout(function(){
                    var logoLeft = $("#header .logo").offset().left + 75;
                    $("#mainImgText2").css('left',logoLeft);
                    $("#mainImgText2").css('opacity','1.0');  
                },200);
                
                setTimeout(function(){
                    var logoLeft = $("#header .logo").offset().left + 75;
                    $("#mainImgText3").css('left',logoLeft);
                    $("#mainImgText3").css('opacity','1.0');
                },300);
                
                setTimeout(function(){
                    $("#mainImgText1 span.ppp span.zzz,#mainImgText2 span.ppp span.zzz,#mainImgText3 span.ppp span.zzz").css('transition-duration','1.0s');
                    $("#mainImgText1 span.ppp span.zzz,#mainImgText2 span.ppp span.zzz,#mainImgText3 span.ppp span.zzz").css('color','#006d00');
                },700);
                
                setTimeout(function(){
                    $("#wap").css('display','block');
                    $("#open").css('width','0px');
                    $("#mainImgImg").css('bottom','0px');
                    $("#mainImgImg").css('opacity','1.0');
                },1600);
                
                setTimeout(function(){
                    $("#mainImgText1,#mainImgText2,#mainImgText3").css('color','#82d700'); 
                },2100);
                
                setTimeout(function(){
                    var logoLeft = $("#header .logo").offset().left-10;
                    $("#mainImgTextMisson").css('left',logoLeft);
                    $("#mainImgTextMisson").css('opacity','1.0');

                    //テキストの白バック伸ばす
                    $("#mainImgText1 span.ppp,#mainImgText2 span.ppp,#mainImgText3 span.ppp").addClass("ttt");
                    
                },2700);
                
                setTimeout(function(){
                    $("#contents,#footer,#datena-info").css('display','block');
                    $("#header").css('top','0');
                    $("#mission").css('opacity','1.0');

                    var logoLeft = $("#header .logo").offset().left;
                    $("#mainImgTextLine").css('opacity','1.0');
                    $("#mainImgText1,#mainImgText2,#mainImgText3,#mainImgTextLine").css('left',logoLeft);
                },2750);
                
                setTimeout(function(){
                    $("#header").css('position','fixed');
                    $("#header").css('transition-duration','0.5s');
                    $("#contents").css('top','0px');
                    $(".scrolldown").css('bottom','35px');
                    $(".scrolldown").css('opacity','1.0');
                    $("#mission").css('top','280px');
                },3000);
                
                
                setTimeout(function(){
                $("#header .gmenuAbout").css('top','26px');
                $("#header .gmenuContact").css('top','26px');
            },3100);
            
            setTimeout(function(){
                $("#header .gmenuBlog").css('top','26px');
            },3150);
            
            setTimeout(function(){
                $("#header .gmenuService").css('top','26px');
            },3200);
                
            }else{
                $("#mainImgText1,#mainImgText2,#mainImgText3").css('transition-duration','0.0s');

                var text1Top = windowHeight/2+40;
                $("#mainImgText1").css('top',text1Top);
                var text2Top = windowHeight/2;
                $("#mainImgText2").css('top',text2Top);
                var text3Top = windowHeight/2+40;
                $("#mainImgText3").css('top',text3Top);
                
                setTimeout(function(){
                    $("#mainImgText1,#mainImgText2,#mainImgText3").css('transition-duration','1.0s');
                },10);
                
                setTimeout(function(){
                    var text1Top = windowHeight/2-40;
                    $("#mainImgText1").css('top','100px');
                    $("#mainImgText1").css('opacity','1.0');
                },100);
                
                setTimeout(function(){
                    $("#mainImgText2").css('opacity','1.0');
                    var text2Top = windowHeight/2;
                    $("#mainImgText2").css('top','140px');
                },200);
                
                setTimeout(function(){
                     var text3Top = windowHeight/2+40;
                    $("#mainImgText3").css('top','180px');
                    $("#mainImgText3").css('opacity','1.0');
                },300);
                
                setTimeout(function(){
                    $("#wap").css('display','block');
                    $("#open").css('width','0px');
                    $("#mainImgTextMisson,#mainImgTextLine").css('left','30px');
                    $("#mainImgImg,#mainImgTextMisson,#mainImgTextLine").css('opacity','1.0');
                    $("#mainImgImg").css('bottom','0px');
                },1600);
                
                setTimeout(function(){
                    $("#mainImgText1,#mainImgText2,#mainImgText3").css('color','#82d700'); 
                },2100);
                
                setTimeout(function(){
                    $("#mainImgText1 span.ppp,#mainImgText2 span.ppp,#mainImgText3 span.ppp").addClass("ttt");
                    $("#mainImgText1 span.ppp span.zzz,#mainImgText2 span.ppp span.zzz,#mainImgText3 span.ppp span.zzz").css('transition-duration','1.0s');
                    $("#mainImgText1 span.ppp span.zzz,#mainImgText2 span.ppp span.zzz,#mainImgText3 span.ppp span.zzz").css('color','#006d00');
                },2700);
                
                setTimeout(function(){
                    $("#contents").css('display','block');
                    $("#header").css('top','0');
                    $("#footer").css('display','block');
                    $("#datena-info").css('display','block');
                    $("#mission").css('opacity','1.0');
                },2750);
                
                setTimeout(function(){
                    $("#header").css('position','fixed');
                    $("#header").css('transition-duration','0.5s');
                    $("#contents").css('top','0px');
                    $(".scrolldown").css('bottom','35px');
                    $(".scrolldown").css('opacity','1.0');
                },3000);
                
            }
       

        });
        
    }

    
    if(windowWidth > 680){
        //pc
        //メインイメージの幅
        var mainImgImgWidth = windowWidth - 100;
        $("#mainImgImg").css('width',mainImgImgWidth);
        
        $(window).resize(function(){
            var windowWidth = $(window).width();
            var mainImgImgWidth = windowWidth - 100;
            $("#mainImgImg").css('transition-duration','1.00s');
            $("#mainImgImg").css('width',mainImgImgWidth);
        });
    }
    

$(function () {
    if(windowWidth > 680){
        $(window).resize(function(){
        var logoLeft = $("#header .logo").offset().left;
        $("#mainImgText1").css('transition-duration','0.8s');
        $("#mainImgText2").css('transition-duration','1.0s');
        $("#mainImgText3").css('transition-duration','0.9s');
        $("#mainImgTextLine").css('transition-duration','0.5s');
        $("#mainImgTextMisson").css('transition-duration','0.7s');
        $("#mainImgText1,#mainImgText2,#mainImgText3,#mainImgTextLine,#mainImgTextMisson").css('left',logoLeft);
        $("#mainImgText1 span.ppp,#mainImgText2 span.ppp,#mainImgText3 span.ppp").css('transition-duration','1.0s');
        $("#mainImgText1 span.ppp,#mainImgText2 span.ppp,#mainImgText3 span.ppp").removeClass("ttt");
        setTimeout(function(){
            $("#mainImgText1 span.ppp,#mainImgText2 span.ppp,#mainImgText3 span.ppp").css('transition-duration','5.0s');
            $("#mainImgText1 span.ppp,#mainImgText2 span.ppp,#mainImgText3 span.ppp").addClass("ttt");
        },500);
        }); 
    }
});
  


    /*////////////////////////////////////////////////////////////////////////////////////////////////*/
    /*////////////////////////////////////////////////////////////////////////////////////////////////*/
    /*////////////////////////////////////////////////////////////////////////////////////////////////*/
    

});
</script>
    
<style type="text/css">
    #contents{
        display: none;
        position: relative;
        top:500px;
        transition: all 1.00s ease;
    }
    
    #footer,
    #datena-info{
        display: none;
    }

    #wap{
        position:relative;
        overflow: hidden;
        margin-bottom:0;
    }
    
    #open {
        position:absolute;
        top:0;
        right:0;
        background-color:#ffffff;
        height: 100vh;
        width: 100%;
        transition: all 1.00s ease;
        z-index: 100;
        opacity:1;
    }
    
    #header{
        position:absolute;
        top:-100px;
        left: 0;
        width: 100%;
        transition: all 0.5s ease;
        z-index: 1002;
        
    }
    
    #logo{
        position: absolute;
        top: 20px;
        left: 30px;
    }
    
    #logo img {
        width: 100%;
        vertical-align: bottom;
    }
    #gmenu{
        display:none;
    }
    
    #mainImg{
        position: relative;
        height: 70vh;
        background-color: #f7f8f8;
    }
    
    #mainImgText1,
    #mainImgText2,
    #mainImgText3{
        font-family: "游ゴシック体", YuGothic, "游ゴシック", "Yu Gothic", sans-serif;
        color: #82d700;
        letter-spacing: 5px;
        position: absolute;
        left:30px;
        font-size: 24px;
        z-index: 105;
        font-weight: 700;
        opacity:0;
        transition: all 1.00s ease;
        white-space: nowrap;
    }
    
    
    #mainImgText1 span.ppp::after,
    #mainImgText2 span.ppp::after,
    #mainImgText3 span.ppp::after{
        content: "";
        display: block;
        height:30px;
        transition: all 1.00s ease;
        background-color: rgba(255,255,255,0.9);
        margin-top: -30px;
    }
    #mainImgText2 span.ppp::after{
        transition: all 0.7s ease;
    }
    
    .ppp::after{
        width: 0;
    }
    .ttt::after{
        width: 100%;
    }
    
    
    
    
    #mainImgText1{top:100px;}
    #mainImgText2{top:140px;}
    #mainImgText3{top:180px;}
    
    .detailBtn{
        position: absolute;
        width: 100px;
        height: 25px;
        z-index: 1000;
        background-color: #444444;
        transition: all 1.00s ease;
        left:550px;
        bottom:100px;
        opacity:0;
    }
    
    #mainImgImg{
        width: 100%;
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        z-index: 1;
        opacity:0;
        <?php
        if($_SERVER["HTTP_HOST"] == 'aisiteru.jp'){
            echo 'background-image:url("/wp/wp-content/themes/aisiteru/images/slide_all_13.webp");';
            echo 'background-image:url("/wp/wp-content/themes/aisiteru/images/slide_all12.webp");';
        }elseif($_SERVER["HTTP_HOST"] == 'onara.net'){
            echo 'background-image:url("/wp/wp-content/themes/aisiteru/images/slide_all12.webp");';
        }
        ?>
        background-size: auto 100%;
        transition: all 1.00s ease;
    /*スクロールの設定*/
        animation-name: scroll-header-bg;
        animation-duration: 110s;  /*110秒で画像1枚分スクロールする*/
        animation-delay: 4s;
        animation-timing-function: linear;       /*再生速度を一定にする*/
        animation-iteration-count: infinite;     /*アニメーションの無限再生*/
    }
        
    @keyframes scroll-header-bg {
        0% {
            background-position: 0 0; /*初期値を設定する*/
        }

        100% {
            background-position: -10000px 0;　/*画像サイズに合わせて変更する（負号で左スクロール）*/
        } 
    }
    
    #mainImgTextLine{
        position: absolute;
        left:30px;
        top:230px;
        z-index: 105;
        width: 140px;
        height: 3px;
        background-color: #82d700;
        transition: all 1.00s ease;
        opacity:0;
        border-left: 50px solid #006d00;
    }
    
    
    #mainImgTextMisson{
        position: absolute;
        left:30px;
        top:240px;
        z-index: 105;
        transition: all 1.00s ease;
        font-family: "游ゴシック体", YuGothic, "游ゴシック", "Yu Gothic", sans-serif;
        color: #82d700;
        font-size: 18px;
        font-weight: 700;
        opacity:0;
    }
    
    #mainImgTextMisson span{
        color: #006d00;
    }
    
    #mission{
        font-family: "游ゴシック体", YuGothic, "游ゴシック", "Yu Gothic", sans-serif;
        color: #222222;
        font-weight: 700;
        font-size: 38px;
        letter-spacing: 2px;
        position: absolute;
        right:10px;
        top:280px;
        z-index: -1;
        opacity:0;
        transition: all 1.00s ease;
    }

    
    body .slider img {
        width: 100%;
        height: 100%;
        vertical-align: bottom;
    }
    
    
    
    
    
    
    /*スクロールダウン全体の場所*/
    .scrolldown{
        /*描画位置※位置は適宜調整してください*/
        position:absolute;
        left:30px;
        bottom:-100px;
        opacity:0;
        /*全体の高さ*/
        height:50px;
        z-index: 100;
        transition: all 1.00s ease;
        -ms-writing-mode: tb-rl;
        writing-mode: vertical-rl;
    }

    /*Scrollテキストの描写*/
    .scrolldown span{
        /*描画位置*/
        position: absolute;
        left:-7px;
        top: -55px;
        /*テキストの形状*/
        color: #006d00;
        font-size: 0.7rem;
        letter-spacing: 0.05em;
    }

    /* 線の描写 */
    .scrolldown::after{
        content: "";
        /*描画位置*/
        position: absolute;
        top: 0;
        /*線の形状*/
        width: 2px;
        height: 30px;
        background: #82d700;
        /*線の動き1.4秒かけて動く。永遠にループ*/
        animation: pathmove 1.4s ease-in-out infinite;
        opacity:0;
    }

    /*高さ・位置・透過が変化して線が上から下に動く*/
    @keyframes pathmove{
        0%{
            height:0;
            top:0;
            opacity: 0;
        }
        30%{
            height:30px;
            opacity: 1;
        }
        100%{
            height:0;
            top:50px;
            opacity: 0;
        }
    }

    
    
    
    .ityped-cursor {
        font-size: 1em;
        opacity: 1;
        -webkit-animation: blink 0.3s infinite;
        -moz-animation: blink 0.3s infinite;
        animation: blink 0.3s infinite;
        animation-direction: alternate;
    }

    @keyframes blink {
        100% {
            opacity: 0;
        }
    }

    @-webkit-keyframes blink {
        100% {
            opacity: 0;
        }
    }

    @-moz-keyframes blink {
        100% {
            opacity: 0;
        }
    }
    
   
    .aboutHeading,
    .missionHeading,
    .promiseHeading{
        font-family: "游ゴシック体", YuGothic, "游ゴシック", "Yu Gothic", sans-serif;
        font-weight: bold;
        font-size: 20px;
        line-height: 32px;
        height: 100px;
        margin-left:0px;
        transition: all 2.00s ease;
        opacity:0;

    }
    
    .aboutRead,
    .missionRead,
    .promiseRead{
        font-size: 16px;
        line-height: 36px;
        font-weight: bold;
    }
    
    .aboutSubTitleLine,
    .missionSubTitleLine,
    .promiseSubTitleLine{
        height: 3px;
        width: 150px;
        background-color:#111111;
        margin-bottom: 20px;
        margin-left: 0;
        transition: all 1.50s ease;
    }
    .aboutSubTitle,
    .missionSubTitle,
    .promiseSubTitle{
        font-family: "游ゴシック体", YuGothic, "游ゴシック", "Yu Gothic", sans-serif;
        font-weight: bold;
        font-size: 18px;
        line-height: 18px;
        height: 20px;
        margin-left: 0px;
        transition: all 1.50s ease;
        margin-bottom: 30px;
    }
    
    
/*========= LoadingのためのCSS ===============*/
#container {
    margin: 20px;
    width: 150px;
    height: 150px;
    position: absolute;
    z-index: 1000;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
}
    
    
  
    
@media only screen and (min-width: 680px) {

    
    
    body .slider{
            height: 370px;
        }
        body .slider ul{
            height: 370px;
        }  
    body .slider ul li {
        overflow: hidden;
        height: 370px;
        background-color: chartreuse;
        
    }
        
    #open {
        position:absolute;
        top:0;
        right:0;
        background-color:#ffffff;
        height: 100vh;
        width: 100%;
        transition: all 1.00s ease;
        z-index: 100;
        opacity:1.0;
    }
    
    #header{
        transition: all 1.00s ease;
    }
    
    #logo{
        top: 30px;
        left: 50px;
        right: auto;
        margin: 0;
        width: 125px;
    }
    
    .gmenuAbout,
    .gmenuBlog,
    .gmenuService,
    .gmenuContact{
        top:-100px;
    }

    #mainImg{
        height: 690px;
        background-image:url("/wp/wp-content/themes/aisiteru/images/bgMainImg2.jpg");
        background-repeat: repeat-x;

    }
    #mainImgText1,
    #mainImgText2,
    #mainImgText3{
        left:70px;
        font-size: 80px;
        line-height: 130px;
    }
    
    #mainImgText1 span.ppp::after,
    #mainImgText2 span.ppp::after,
    #mainImgText3 span.ppp::after{
        content: "";
        display: block;
        height:100px;
        transition: all 1.00s ease;
        background-color: rgba(255,255,255,0.9);
        margin-top: -120px;
    }
    #mainImgText2 span.ppp::after{
        transition: all 0.7s ease;
    }
    
    .ppp::after{
        width: 0;
    }
    .ttt::after{
        width: 100%;
    }
    
    #mainImgText1{
        top:130px;
    }
    
    #mainImgText2{
        top:250px;
    }
    
    #mainImgText3{
        top:370px;
    }
    
    #mainImgTextLine{
        position: absolute;
        left:550px;
        top:500px;
        z-index: 105;
        width: 250px;
        height: 3px;
        background-color: #82d700;
        transition: all 1.00s ease;
        opacity:0;
        border-left: 50px solid #006d00;
    }
    
    #mainImgTextMisson{
        position: absolute;
        left:550px;
        top:520px;
        z-index: 105;
        transition: all 1.00s ease;
        font-family: "游ゴシック体", YuGothic, "游ゴシック", "Yu Gothic", sans-serif;
        color: #82d700;
        font-size: 20px;
        font-weight: 700;
        opacity:0;
    }
    
    #mission{
        font-family: "游ゴシック体", YuGothic, "游ゴシック", "Yu Gothic", sans-serif;
        color: #FFFFFF;
        font-weight: 700;
        font-size: 100px;
        letter-spacing: 5px;
        position: absolute;
        right:50px;
        top:500px;
        z-index: 1;
        opacity:0;
        transition: all 1.00s ease;
    }
    
    .detailBtn{
        position: absolute;
        width: 100px;
        height: 25px;
        z-index: 1000;
        background-color: #444444;
        transition: all 1.00s ease;
        left:550px;
        bottom:100px;
        opacity:0;
    }
    
    #mainImgImg{
        
        height: 370px;
        position: absolute;
        bottom: -100px;
        z-index: 1;
        <?php
        if($_SERVER["HTTP_HOST"] == 'aisiteru.jp'){
            echo 'background-image:url("/wp/wp-content/themes/aisiteru/images/slide_all_13.webp");';
            echo 'background-image:url("/wp/wp-content/themes/aisiteru/images/slide_all12.webp");';
        }elseif($_SERVER["HTTP_HOST"] == 'onara.net'){
            echo 'background-image:url("/wp/wp-content/themes/aisiteru/images/slide_all12.webp");';
        }
        ?>
        
        background-size: auto 100%;
        left: 0;
        right: 0;
        margin: auto;
        opacity:0;
        transition: all 1.00s ease;
        animation-name: scroll-header-bg;
        animation-duration: 60s;                  /*3秒で画像1枚分スクロールする*/
        animation-timing-function: linear;       /*再生速度を一定にする*/
        animation-iteration-count: infinite;     /*アニメーションの無限再生*/
    }
     
    @keyframes scroll-header-bg {
        0% {
            background-position: 0 0;            /*初期値を設定する*/
        }

        100% {
            background-position: -5606px 0;      /*画像サイズに合わせて変更する（負号で左スクロール）*/
        }
    }

        
}
</style>
<?php else: ?>
<script src="https://unpkg.com/ityped@1.0.3"></script>   
<style type="text/css">
    .ityped-cursor {
    font-size: 1em;
    opacity: 1;
    -webkit-animation: blink 0.3s infinite;
    -moz-animation: blink 0.3s infinite;
    animation: blink 0.3s infinite;
    animation-direction: alternate;
}
</style>   
<?php endif; ?>

<style type="text/css">

.mottoBtn a{
    color: #FFFFFF;
    display: block;
    width: 240px;
    height: 60px;
    font-size: 16px;
    line-height: 60px;
    padding-left: 30px;
    margin-left: auto;
    margin-right: auto;
    background-image:url("/wp/wp-content/themes/aisiteru/images/bg_mottoBtn.jpg");
    background-repeat: no-repeat;
    border-radius: 30px;
    background-position: left center;
    box-sizing: border-box;
    font-weight: bold;
    margin-top: 50px;
    margin-bottom: 50px;
} 

@media only screen and (min-width: 680px) {

.mottoBtn a{
    color: #FFFFFF;
    display: block;
    width: 240px;
    height: 60px;
    font-size: 16px;
    line-height: 60px;
    padding-left: 30px;
    margin-left: auto;
    margin-right: auto;
    background-image:url("/wp/wp-content/themes/aisiteru/images/bg_mottoBtn.jpg");
    background-repeat: no-repeat;
    border-radius: 30px;
    background-position: left center;
    box-sizing: border-box;
}     

   
}
</style>  

    
 
</head>
<body>
<?php get_template_part('partials/header'); ?>
<div id="wapper">


<div id="container"></div>

<?php
    $num = rand(1,1000);
    if($num == 1){
        $text1 = '<span class="ppp"><span class="zzz">ダテナ</span>は、</span>';
        $text2 = '<span class="ppp"><span class="zzz">宮城県仙台市</span>の</span>';
        $text3 = '<span class="ppp"><span class="zzz">フリーランス</span>です。</span>';
        $textEn = 'in Sendai City.';
        $textEn2 = 'About';
    }else{
        $text1 = '<span class="ppp"><span class="zzz">ウェブサイト</span>を、</span>';
        $text2 = '<span class="ppp">単なる<span class="zzz">営業ツール</span>から</span>';
        $text3 = '<span class="ppp">大切な<span class="zzz">資産</span>に変える</span>';
        $textEn = 'A <span>website</span> is an <span>asset.</span>';
        $textEn2 = 'Mission';
    }
?>
<div id="wap">
<div id="mainImgText1"><?php echo $text1; ?></div>
<div id="mainImgText2"><?php echo $text2; ?></div>
<div id="mainImgText3"><?php echo $text3; ?></div>



<div id="mission"><?php echo $textEn2; ?></div>
<div id="mainImgTextLine"></div>
<div id="mainImgTextMisson"><?php echo $textEn; ?></div>
<!--<div class="detailBtn"><a href="/about">Detail</a></div>-->
    
<div id="open"></div>
<div id="mainImg">
<div id="mainImgImg">
<div class="scrolldown"><span>SCROLL</span></div>   
</div>   
    
</div>
</div>
 

<!------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------>
<div id="contents">
<div id="main">  



    


</div><!-- #main End-->


<div id="side">
<?php dynamic_sidebar('sidebar-1'); ?>
<?php get_template_part("partials/cat") ?>
<?php get_template_part("partials/tag") ?>
</ul>
</div>
<div style="clear:both"></div><!-- #mainと#sideのclear-->


</div><!-- #contents End-->

</div><!-- #wapper End-->
<?php get_template_part('partials/footer'); ?>
<?php wp_footer(); ?>
    
<?php if ( !wp_is_mobile() ) : ?>
<script type="text/javascript">
$(function () {
$('ul.post-index li').hover(function(){
    $("h2",this).css('color','#82d700');
    $(".post_thumbnail img",this).css('transform','scale(1.1)');
}, function(){
    $("h2",this).css('color','#444444');
    $(".post_thumbnail img",this).css('transform','scale(1)');
});  
});


$(function () {
$('ul.post li').hover(function(){
    $("h2",this).css('color','#82d700');
    $(".post_thumbnail img",this).css('transform','scale(1.1)');
}, function(){
    $("h2",this).css('color','#444444');
    $(".post_thumbnail img",this).css('transform','scale(1)');
});  
});

$(function () {
$('.wpp-list li').hover(function(){
    $(".wpp-post-title",this).css('color','#82d700');
}, function(){
    $(".wpp-post-title",this).css('color','#444444');
});  
});


$(function () {
$('.awasete li').hover(function(){
    $(".awasete-content-title",this).css('color','#82d700');
}, function(){
    $(".awasete-content-title",this).css('color','#444444');
});  
});
</script>
<?php endif; ?>
</body>
</html>