<?php
/*
Template Name:top
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php get_template_part("analyticstracking"); ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common103.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/style17.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts") ?>
<script type="text/javascript">
$(document).ready(function () {
    const params = new URLSearchParams(window.location.search);
    if (params.get("view") === "service") {
        const $target = $("#service");
        if ($target.length) {
            // ヘッダー高さを条件に応じて設定
            let headerHeight;
            if ($(window).width() >= 640) {
                // PC用
                headerHeight = 160; // ずらす
            } else {
                // モバイル用
                headerHeight = 100; // ずらす
            }
            // スクロールアニメーションを実行
            $("html, body").animate(
                { scrollTop: $target.offset().top - headerHeight },
                500 // アニメーション速度（ミリ秒）
            );
        }
    }
});
</script>
<style type="text/css">
.top-wapper{
    background-color: #f7f8f8;
}
.inner-contents{
    margin: 0 20px;
}
h2{
    font-family: '游明朝','Yu Mincho',YuMincho,'Hiragino Mincho Pro',serif;
    margin: 0 0 25px 0;
    padding: 0;
    font-size: 36px;
    font-weight: bold;
    line-height: 36px;
    color:#031b4e;
}
.top-wapper h3{
    font-family: '游明朝','Yu Mincho',YuMincho,'Hiragino Mincho Pro',serif;
    font-size: 28px;
    font-weight: bold;
    line-height: 28px;
    margin: 0 0 25px 0;
    padding: 0 0 0 40px;
    color:#031b4e;
    position: relative;
}
.top-wapper h3::before {
    content: "—"; /* 表示する線（ダッシュ） */
    position: absolute;
    left: 7px; /* タイトルからの距離（調整可） */
    font-size: 24px; /* タイトルに合わせる */
    color: #031b4e;
    font-weight: bold;
  }


h2 span,
.top-wapper h3 span,
.with span{
    color: #1433d6;
}
.contents-text{
    font-weight: bold;
    font-size: 14px;
    line-height: 28px;
    margin: 0 0 20px 0;
}
.more-btn a{
    display: block;
    width: 240px;
    height: 50px;
    border-radius: 25px;
    background-color: #1433d6;
    line-height: 50px;
    text-align: center;
    color: #FFFFFF;
    font-weight: bold;
}

/*----------------------------------------------*/
.main-visual{
    width:100%;
    margin:70px auto 0 auto;
    height:500px;
    position: relative;
    overflow: hidden;
}
.catch1{
    font-size: 60px;
    font-family: '游明朝','Yu Mincho',YuMincho,'Hiragino Mincho Pro',serif;
    position: absolute;
    top:135px;
    left:0px;
    font-weight: bold;
    color: #031b4e;
    z-index: 10;
}
.catch2{
    font-size: 50px;
    font-family: '游明朝','Yu Mincho',YuMincho,'Hiragino Mincho Pro',serif;
    position: absolute;
    top:205px;
    left:80px;
    font-weight: bold;
    color: #031b4e;
    z-index: 10;
}
.catch-back{
    background:rgba(255,255,255,0.8);
    position: absolute;
    height:70px;
    width: 200px;
    top: 110px;
    left: 20px;
    z-index: 9;
}
.catch-back2{
    background:rgba(255,255,255,0.8);
    position: absolute;
    height:65px;
    width: 200px;
    top: 185px;
    left: 80px;
    z-index: 9;
}
.sub-catch{
    font-size: 16px;
    color: #031b4e;
    position: absolute;
    top:70px;
    left: 30px;
    z-index: 10;
}
.sub-catch h1{
    font-weight: bold;
}
.sub-catch-bg{
    background:rgba(255,255,255,0.8);
    position: absolute;
    height: 30px;
    width: 280px;
    top:70px;
    left: 20px;
    z-index: 9;
}
.sub-catch strong,
.catch1 span{
    color: #1433d6;
}
    
.main-visual .contents-text{
    display: none;
}
.main-visual .contents-text2{
    position: absolute;
    top:300px;
    margin: 0 20px;
    left: 0px;
    z-index: 10;
    color: #031b4e;
    font-weight: bold;
}
.contents-text-bg1{
    height: 65px;
    background:rgba(255, 255, 255, 0.8);
    position: absolute;
    left: 10px;
    z-index: 9;
    width: 340px;
    top: 295px;
}
.contents-text-bg2,
.contents-text-bg3,
.contents-text-bg4{
    display: none;
}
.with{
    position: absolute;
        font-size: 16px;
        color: #031b4e;
        top:245px;
        left: 230px;
        z-index: 20;
        color:#031b4e;
        font-weight: bold;
    }
    .with-bg{
        height: 30px;
        width: 125px;
        background:rgba(255, 255, 255, 0.8);
        position: absolute;
        left: 220px;
        z-index: 9;
        top: 245px;
    }
.main-visual .more-btn a{
    position: absolute;
    top:380px;
    /*left: 20px;*/
    right: 0;
    left: 0;
    margin: 0 auto;
}
.miyagi-map2{
    position: absolute;
    height: 100%;
    top: 0;
    left:-100px;
    z-index: -3;
    opacity: 1;
    overflow: hidden;
}
.miyagi-map2 img {
    width: auto;
    height: 110%;
}
.main-visual .image{
    /*width: 180px;
    height: 180px;
    border-radius: 90px;
    overflow: hidden;
    background-color: #FFFFFF;
    position: absolute;
    top:130px;
    left:-40px;
    z-index: -2;
    box-sizing: border-box;*/
    display: none;
}

/*------------------------------------------------------------*/
.top-message{
    margin:0;
    padding: 80px 0 0 0;
}

/*------------------------------------------------------------*/
.standard{
    padding: 100px 0 50px 0;
}
.standard ul{
    margin: 30px 0 0 0;
}
.standard ul li{
    background-color: #ffffff;
    border-radius: 3px;
    margin: 0 0 20px 0;
    padding: 25px 20px 30px 90px;
    box-sizing: border-box;
    text-align: left;
    background-repeat: no-repeat;
}
.standard ul li .standerd-title{
    font-size: 15px;
    color: #031b4e;
    font-weight: 600;
}
.standard ul li .standerd-info{
    font-size: 12px;
    line-height: 20px;
    letter-spacing: 1px;
    
}
.standard ul li:nth-child(1){
    background-image: url(/wp/wp-content/themes/aisiteru/images/top/domain_bl.png);
    background-size: 60px auto;
    background-position: 15px center;
}
.standard ul li:nth-child(2){
    background-image: url(/wp/wp-content/themes/aisiteru/images/top/server_bl.png);
    background-size: 50px auto;
    background-position: 15px center;
}
.standard ul li:nth-child(3){
    background-image: url(/wp/wp-content/themes/aisiteru/images/top/wordpress_bl.png);
    background-size: 60px auto;
    background-position: 15px center;
}
.standard ul li:nth-child(4){
    background-image: url(/wp/wp-content/themes/aisiteru/images/top/responsive_bl.png);
    background-size: 60px auto;
    background-position: 15px center;

    
}
.standard ul li:nth-child(5){
    background-image: url(/wp/wp-content/themes/aisiteru/images/top/seo_bl.png);
    background-size: 45px auto;
    background-position: 20px center;
}
.standard ul li:nth-child(6){
    background-image: url(/wp/wp-content/themes/aisiteru/images/top/analytics_bl.png);
    background-size: 60px auto;
    background-position: 15px center;
}
.standard ul li:nth-child(7){
    background-image: url(/wp/wp-content/themes/aisiteru/images/top/search_console_bl.png);
    background-size: 60px auto;
    background-position: 15px center;
}
.standard ul li:nth-child(8){
    background-image: url(/wp/wp-content/themes/aisiteru/images/top/design_bl.png);
    background-size: 45px auto;
    background-position: 20px center;
}
.standard ul li:nth-child(9){
    background-image: url(/wp/wp-content/themes/aisiteru/images/top/support_bl.png);
    background-size: 60px auto;
    background-position: 15px center;
}

/*------------------------------------------------------------*/
.shisan{
    padding: 30px 20px;
    margin: 0;
    border-radius: 5px;
    background-color: #FFFFFF;
    text-align: justify;
}

/*------------------------------------------------------------*/
.fee{
    padding: 100px 0;
}
.fee-table{
    width: 100%;
    height: 575px;
    overflow-x: auto;
    /* IE, Edge 対応 */
        -ms-overflow-style: none;
        /* Firefox 対応 */
        scrollbar-width: none;
    -webkit-overflow-scrolling: touch;
}
.fee .inner-contents{
    padding: 0 0 30px 0;
}
.fee-table-inner{
    position: relative;
    width: 910px;
    height: 575px;
}
.fee-table-inner .business-plan,
.fee-table-inner .standard-plan,
.fee-table-inner .light-plan{
    position: absolute;
    top:0;
    text-align: center;
    height: 575px;
    width: 280px;
    border-radius: 3px;
    background-color: #FFFFFF;
}
.fee-table-inner .business-plan strong,
.fee-table-inner .standard-plan strong,
.fee-table-inner .light-plan strong{
    font-weight: 600;
    font-size: 1.2em;
    color: #031b4e;
}

.fee-table-inner .light-plan{
    left: 10px;
}
.fee-table-inner .standard-plan{
    left: 0;
    right: 0;
    margin: 0 auto;
}
.fee-table-inner .business-plan{
    right: 10px;
}
.fee-table-inner .plan-title{
    font-size: 18px;
    font-weight: 600;
    line-height: 70px;
    height: 70px;
    color: #031b4e;
}
.fee-table-inner .meyasu-title{
    color: #031b4e;
    margin: 0 20px;
}
.fee-table-inner .meyasu-price{
    font-size: 24px;
    font-weight: 600;
    color:#0069ff;
}
.fee-table-inner .catch{
    background-color: #031b4e;
    color:#FFFFFF;
    height: 40px;
    line-height: 40px;
    font-size: 15px;
    margin: 16px 0 0 0;
}
.fee-table-inner ul{
    margin: 16px 0 0 0;
}
.fee-table-inner ul li{
    height: 40px;
    width: 100%;
    border-top: 1px solid #f7f8f8;
    line-height: 40px;
}
.fee-table-inner ul li:first-child{
    border:none;
}

.fee-table-inner h4{
    font-weight: 600;
}


ul.kihon-post{
    font-size:13px;
    line-height:18px;
    overflow-x: auto;
  	-webkit-overflow-scrolling: touch;
  	white-space: nowrap;
    position: relative;
    height: 260px;
    margin:0;
    padding:0;
    width: 100%;
    /* IE, Edge 対応 */
	-ms-overflow-style: none;
	/* Firefox 対応 */
	scrollbar-width: none;
}
ul.kihon-post li{
	width:200px;
    position:absolute;
}
ul.kihon-post li .kihon-post-title{
    overflow: hidden;
    margin: 0;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
}
ul.kihon-post li .kihon-post-title h3{
    font-weight: bold;
}
ul.kihon-post .item-time{
    font-size: 12px;
    background-image:url("/wp/wp-content/themes/aisiteru/images/icon/time_bl.png");
    background-repeat:no-repeat;
    background-size:11px auto;
    padding-left:15px;
    background-position:0px 3px;
    margin-bottom: 3px;
    }
ul.kihon-post li:nth-child(1){
    top:0;
    left: 20px;
}
ul.kihon-post li:nth-child(2){
    top:0;
    left: 250px;
}

ul.kihon-post li:nth-child(3){
    top:0;
    left: 480px;
}

ul.kihon-post li:nth-child(4){
    top:0;
    left: 710px;
}

ul.kihon-post li:nth-child(5){
    top:0;
    left: 940px;
}
    
ul.kihon-post li:nth-child(6){
    top:0;
    left: 1170px;
}    
 
ul.kihon-post li:nth-child(7){
    top:0;
    left: 1400px;
} 
ul.kihon-post li:nth-child(8){
    top:0;
    left: 1630px;
} 
ul.kihon-post li:nth-child(9){
    top:0;
    left: 1860px;
    padding-right: 30px;
} 
ul.kihon-post img{
	width:100%;
	height:auto;
    border-radius: 3px;
    margin-bottom: 10px;
}
ul.kihon-post li a {
    white-space:normal;
    display: block;
}
ul.kihon-post li a:hover{
	text-decoration:none;
}

@media only screen and (min-width: 680px) {
    #contents{
        margin: 0;
        padding: 100px 0 0 0;
    }
    .inner-contents{
        width: 1100px;
        margin: 0 auto;
    }
    h2{
        margin: 0 0 20px 0;
        font-size: 54px;
        line-height: 54px;
    }
    .top-wapper h3{
        font-size: 38px;
        line-height: 38px;
        margin: 0 0 20px 0;
        padding: 0 0 0 50px;
    }
    .top-wapper h3::before {
      left: 7px; /* タイトルからの距離（調整可） */
      font-size: 32px; /* タイトルに合わせる */
    }
    .contents-text{
        font-size: 15px;
        line-height: 32px;
        margin: 0 0 20px 0;
    }

    /*----------------------------------------------*/
    .main-visual{
        width:1100px;
        margin:90px auto 0 auto;
        height:680px;
        overflow:visible;
    }
    .with{
        font-size: 24px;
        position: absolute;
        top:290px;
        left:auto;
        right: 380px;
        z-index: 20;
        color:#031b4e;
        font-weight: bold;
    }
    .with-bg{
        height: 28px;
        width: 190px;
        background:rgba(255, 255, 255, 0.8);
        position: absolute;
        left: 540px;
        z-index: 9;
        top: 290px;
    }
    .catch1{
        font-size: 105px;
        top:220px;
        left: -40px;
    }
    .catch2{
        font-size: 95px;
        top:220px;
        left: 340px;
    }
    .catch-back{
        height: 120px;
        width: 730px;
        top: 165px;
        left: 0;
    }
    .catch-back2{
        display: none;
    }
    .sub-catch{
        font-size: 24px;
        top:120px;
        left: 40px;
    }
   
    .sub-catch-bg{
        height: 43px;
        width: 490px;
        top: 112px;
        left: 0;
    }
    .main-visual .contents-text{
        display: block;
        position: absolute;
        top:350px;
        left: 20px;
        z-index: 10;
        color: #031b4e;
    }
    .main-visual .contents-text2{
        display: none;
    }
    .contents-text-bg1,
    .contents-text-bg2,
    .contents-text-bg3,
    .contents-text-bg4{
        height: 31px;
        background:rgba(255,255,255,1);
        position: absolute;
        left: 0;
        z-index: 9;
    }
    .contents-text-bg1{
        width: 402px;
        top: 353px;
    }
    .contents-text-bg2{
        display: block;
        width: 505px;
        top: 384px;
    }
    .contents-text-bg3{
        display: block;
        width:345px;
        top: 415px;
    }
    .contents-text-bg4{
        display: block;
        width:605px;
        top: 446px;
    }
    .main-visual .more-btn a{
        top:550px;
        left: 350px;
        right:auto;
    }
    .miyagi-map2{
        position: absolute;
        width: 900px;
        height: 735px;
        top: -40px;
        left:auto;
        right: 380px;
        z-index: -3;
        opacity: 1;
        overflow: hidden;
    }
    .miyagi-map2 img {
        width: 100%;
        height: auto;
    }
    .main-visual .image{
        display: block;
        width: 500px;
        height: 500px;
        border-radius: 250px;
        overflow: hidden;
        background-color: #FFFFFF;
        position: absolute;
        top:40px;
        right:0px;
        left:auto;
        z-index: -2;
        box-sizing: border-box;
    }

    
    #slideshow {
      position: relative;
      width: 500px;
      height: 500px;
      overflow: hidden;
      border-radius: 50%;
    }
    #slideshow img {
      position: absolute;
      width: 100%;
      height: 100%;
      transform: scale(1.2);
      opacity: 0;
      transition: transform 1.5s ease, opacity 1.5s ease, filter 2s ease;
    }
    #slideshow img.active {
      transform: scale(1);
      opacity: 1;
      filter: brightness(1.2);
    }
    .progress-container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 10;
      width: 500px;
      height: 500px;
    }
    .progress-ring {
      width: 520px;
      height: 520px;
      position: absolute;
      top: -10px;
      left: -10px;
      transform: rotate(-90deg); /* 開始点を12時方向に */
    }
    .progress-ring circle {
      fill: none;
      stroke-width: 4; /* 線幅を調整 */
      stroke: #eeeeee; /* 背景の円 */
    }
    .progress-ring .progress-bar {
      stroke: #1433d7;
      stroke-linecap: round;
      stroke-dasharray: 1630; /* 円周の長さ */
      stroke-dashoffset: 1630; /* 初期値で非表示 */
      transition: stroke-dashoffset linear; /* 動きをスムーズに */
    }

    /*------------------------------------------------------------*/
    .top-message{
        margin:0;
        padding: 150px 0 0 0;
    }
    /*------------------------------------------------------------*/
    .standard{
        padding: 75px 0 0 0;
    }
    .standard ul{
        margin: 50px 0 0 0;
    }
    .standard ul li{
        width: 340px;
        height: 125px;
        float: left;
        margin: 0 0 40px 0;
    }
    .standard ul li:nth-child(2),
    .standard ul li:nth-child(5),
    .standard ul li:nth-child(8){
        margin: 0 40px 40px 40px;
    }
    .standard ul li .standerd-title{
        font-size: 15px;
        color: #031b4e;
        font-weight: 600;
    }
    .standard ul li .standerd-info{
        font-size: 12px;
        line-height: 20px;
        letter-spacing: 1px;
    }
    .standard .bottom-message{
        font-weight: bold;
        font-size: 15px;
        line-height: 32px;
        margin: 0 0 20px 10px;
    }
    /*------------------------------------------------------------*/
    .shisan{
        padding: 75px 75px;
        margin: 75px 0 0 0;
        border-radius: 0;
        background-color: #1433d6; /* 背景色 */
    }
    .shisan-con{
        width:1100px;
        margin:0 auto 0 auto;
        color:#FFFFFF;
    }
    .shisan-con h3{
        color:#FFFFFF;
    }
    .shisan-con h3 span{
        color:#FFFFFF;
    }
    /*------------------------------------------------------------*/
    .fee{
        padding: 100px 0;
    }
    .fee .inner-contents{
        padding: 0 0 0 0;
    }
 
    .fee-table{
        width: 1100px;
        height: 665px;
        margin: 50px auto 0 auto;
    }
    .fee-table-inner{
        position: relative;
        width: 1100px;
        height: 665px;
    }
    .fee-table-inner .business-plan,
    .fee-table-inner .standard-plan,
    .fee-table-inner .light-plan{
        height: 665px;
        width: 340px;
        font-size: 13px;
        background-color: #ffffff;
    }
    .fee-table-inner .light-plan{
        left: 0;
    }
    .fee-table-inner .standard-plan{
        left: 0;
        right: 0;
        margin: 0 auto;
    }
    .fee-table-inner .business-plan{
        right: 0;
    }
    .fee-table-inner .plan-title{
        font-size: 18px;
        font-weight: 600;
        line-height: 70px;
        height: 70px;
    }
    .fee-table-inner .meyasu-price{
        font-size: 24px;
        font-weight: 600;
    }
    .fee-table-inner .catch{
        height: 40px;
        line-height: 40px;
        font-size: 15px;
        margin: 16px 0 0 0;
    }
    .fee-table-inner ul{
        margin: 16px 0 0 0;
    }
    .fee-table-inner ul li{
        height: 50px;
        width: 100%;
        border-top: 1px solid #FFFFFF;
        line-height: 50px;
    }
    #header{
        background:rgba(255,255,255,0.85);
    }


    .flow{
        padding: 0 0 100px 0;
    }

    .faq{
        padding: 0 0 100px 0;
    }

/**/

.basic-con{
    padding: 100px 0 50px 0;
}

.basic-con .more-btn a{
    margin: 50px auto;
}
ul.kihon-post{
width: 1100px;
height:auto;
margin:75px auto 0 auto;
}
ul.kihon-post li{
    position:static;
	width: 340px;
    height: 360px;
    float:left;
}
ul.kihon-post li .kihon-post-title h3{
    transition-duration: 0.3s;
    font-size:16px;
    line-height: 26px;
}
ul.kihon-post li .item-time{
    font-size: 14px;
    background-size:10px auto;
    padding-left:17px;
    background-position:left center;
}

ul.kihon-post li:nth-child(2),
ul.kihon-post li:nth-child(5),
ul.kihon-post li:nth-child(8){
    margin:0 40px;
}
ul.kihon-post li:nth-child(9){
    padding:0;
}
ul.kihon-post li .kihon-post-thumb{
    width: 340px;
    height: 226px;
    overflow: hidden;
    margin: 0 0 10px 0;
}
ul.kihon-post li img{
	width:100%;
    transition-duration: 0.3s;
}



}
</style>

</head>
<body>
<?php get_template_part('partials/header'); ?>

<!------------------------------------------------------------------------------------------------------------>
<div class="main-visual">
<div class="image">
<div id="slideshow">

<img src="/wp/wp-content/themes/aisiteru/images/top/image1.webp" alt="写真1" class="active">
<img src="/wp/wp-content/themes/aisiteru/images/top/image2.webp" alt="写真2">
<img src="/wp/wp-content/themes/aisiteru/images/top/image3.webp" alt="写真3">
<img src="/wp/wp-content/themes/aisiteru/images/top/image4.webp" alt="写真4">
<img src="/wp/wp-content/themes/aisiteru/images/top/image5.webp" alt="写真5">

<div class="progress-container">
      <svg class="progress-ring" width="520" height="520">
        <circle cx="260" cy="260" r="250" />
        <circle class="progress-bar" cx="260" cy="260" r="250" />
      </svg>
    </div>
</div>


<script>
    const images = document.querySelectorAll("#slideshow img");
    const progressBar = document.querySelector(".progress-bar");
    const radius = 250; // 半径
    const circumference = 2 * Math.PI * radius;

    let currentIndex = 0;
    const slideDuration = 8000; // スライドの切り替え間隔（ms）
    const progressDuration = slideDuration - 500; // プログレスバーの動作時間
    const pauseDuration = 500; // 静止時間
    const initialDelay = 3000; // 初期遅延（ms）

    progressBar.style.strokeDasharray = `${circumference}`;
    progressBar.style.strokeDashoffset = `${circumference}`; // 初期状態を0%に設定

    function resetProgress() {
      progressBar.style.transition = "none";
      progressBar.style.strokeDashoffset = `${circumference}`;
    }

    function startProgress() {
      progressBar.style.transition = `stroke-dashoffset ${progressDuration / 1000}s linear`;
      progressBar.style.strokeDashoffset = "0";
    }

    function showSlide(index) {
      images.forEach((img, i) => {
        img.classList.toggle("active", i === index);
      });
    }

    function nextSlide() {
      // 次のスライドを表示
      currentIndex = (currentIndex + 1) % images.length;
      showSlide(currentIndex);

      // プログレスバーをリセットして再開
      resetProgress();
      setTimeout(startProgress, 50);
    }

    function startSlideshow() {
      // 初回処理
      showSlide(currentIndex); // 最初のスライドを表示
      startProgress(); // プログレスバー開始

      // 次のスライド以降を制御
      setInterval(nextSlide, slideDuration);
    }

    // 初期設定とスライドショー開始
    resetProgress();
    setTimeout(startSlideshow, initialDelay); // 初期遅延を設定
  </script>

</div>

<div class="sub-catch"><h1>私たちは<strong>仙台市のWEB制作会社</strong>です。</h1></div>
<div class="sub-catch-bg"></div>
<div class="catch1">「<span>近く</span>」</div>
<div class="catch2">で支える</div>
<div class="catch-back"></div>
<div class="catch-back2"></div>
<div class="contents-text">私たちは、身近に寄り添う姿勢を大切にしています。<br>
寄り添いながら、課題や可能性を一緒考え、進む道を見つけていく。<br>それが、私たちアンドシークのあり方です。<br>
地元を知る私たちだからこそ気づけるニーズに応え、確かな安心をお届けします。</div>
<div class="contents-text2">私たちは、身近に寄り添う姿勢を大切にしています。<br>
それが、私たちアンドシークのあり方です。<br>
</div>
<div class="more-btn"><a href="/about">私たちのこと</a></div>
<div class="miyagi-map2"><img src="/wp/wp-content/themes/aisiteru/images/top/miyagi-map10.webp" alt="宮城県の地図"></div>
<div class="contents-text-bg1"></div>
<div class="contents-text-bg2"></div>
<div class="contents-text-bg3"></div>
<div class="contents-text-bg4"></div>
<div class="with"><span>with</span> aisiteru</div>
<div class="with-bg"></div>

</div>

<div class="top-wapper">
<div class="top-message">
<div class="inner-contents">
<div id="service"></div>
<h2><span>WEBサイト</span>制作</h2>
<div class="contents-text">
ホームページにはターゲットや明確な目的の設定が必要です。<br>
デザインとマーケティングの力でお客様の強みを引き出し、目的の達成のためにターゲットに響くホームページを制作します。 <br>
専門知識は必要ありません。不安に思うこともありません。<br>
私たちにお任せいただければ、目的に合った最適なコンテンツをご用意いたします。
</div>
</div>
</div>
    
<div class="standard">
<div class="inner-contents">
<h3>充実の<span>標準</span>機能</h3>
<div class="contents-text">
ドメインの取得・維持管理費用、サーバーの維持管理費用などのランニングコストも月額固定費用に含まれます。<br>
専門知識が必要なことは私たちに丸投げしてください。 
</div>

<ul>
<li>
    <a href="/basic/domain/">
    <div class="standerd-title">ドメインの取得・管理</div>
    <div class="standerd-info">オリジナルドメインの取得・更新もお任せください。</div>
    </a>
    </li>
    
    <li>
    <a href="/basic/server/">
    <div class="standerd-title">サーバーの維持・管理費</div>
    <div class="standerd-info">専門知識が必要なサーバーの維持・管理もお任せください。</div>
    </a>
    </li>

    <li>
    <div class="standerd-title">WordPressで構築</div>
    <div class="standerd-info">SEOや更新作業に秀でたWordPressでホームページを構築します。</div>
    </li>

    <li>
    <div class="standerd-title">レスポンシブデザイン</div>
    <div class="standerd-info">パソコンにもスマホにも最適化されたデザイン・レイアウトで制作します。</div>
    </li>
    
    <li>
    <div class="standerd-title">内部SEO対策は標準で対応</div>
    <div class="standerd-info">画像やコードの軽量化などの内部SEOも標準で対応させていただきます。</div>
    </li>
    
    <li>
    <div class="standerd-title">アクセス解析ツール</div>
    <div class="standerd-info">Google Analyticsを導⼊・設定をサポートさせていただきます。</div>
    </li>
    
    <li>
    <div class="standerd-title">SEOツールの導⼊</div>
    <div class="standerd-info">Google Search Consoleを導⼊・設定をサポートさせていただきます。</div>
    </li>
    
    <li>
    <div class="standerd-title">オリジナルデザイン</div>
    <div class="standerd-info">ターゲットや目的に合わせたデザインをご提案させていただきます。</div>
    </li>
    
    <li>
    <div class="standerd-title">制作後も万全サポート</div>
    <div class="standerd-info">完成後も修正やサーバーの管理、システムの更新などお任せください。</div>
    </li>
    
    <div style="clear:both;"></div>
</ul>
    
<div class="contents-text">
新規の制作だけではなく、突然の担当者の退職などの理由で、運用・管理が行き届いていない場合などもご相談ください。 </div>
</div>
</div>


<div class="shisan">
<div class="shisan-con">
<h3>ツールから<span>資産</span>へ</h3>
<div class="contents-text">
私たちは、WEBサイトを「資産」として位置づけ、その視点からすべてを考えます。<br>
資産には、安定した土台が欠かせません。私たちが提供するWEBサイトは、技術的な安定性を重視し、信頼性の高い基盤の上に構築されています。<br>
最新の技術は一見すると魅力的で目を引くものがありますが、ユーザーにとっては馴染みがなく、不安定な結果を生むことも少なくありません。だからこそ、私たちは「長く使える」「価値を生み出し続ける」資産として、安定したWEBサイトをお届けします。
</div>
</div>
</div>
    
<div class="fee">
<div class="inner-contents">
<h3>料⾦<span>プラン</span></h3>
<div class="contents-text">
ドメインの取得・維持管理費用、サーバーの維持管理費用などのランニングコストも月額固定費用に含まれます。<br>
専門知識が必要なことは私たちに丸投げしてください。 
</div>
<div style="clear:both"></div>
</div>

<div class="fee-table">
<div class="fee-table-inner">

<div class="light-plan">
    <div class="plan-title"><h4>ライトプラン</h4></div>
    <div class="meyasu-title">製作費の目安</div>
    <div class="meyasu-price">10万円～</div>
    <div class="catch">ミニマムホームページ</div>
    <ul>
        <li>月額費用 <strong>6,000円～</strong></li>
        <li>制作期間 <strong>2週間</strong></li>
        <li>ページ数 <strong>2ページ</strong></li>
        <li>デザイン <strong>テンプレート</strong></li>
        <li>お問合せフォーム <strong>〇</strong></li>
        <li>スマホ対応 <strong>〇</strong></li>
        <li>ブログ投稿機能 <strong>〇</strong></li>
        <li>マーケティング <strong>×</strong></li>
        <li>軽微な修正 <strong>月1回まで</strong></li>
    </ul>
</div>
      
<div class="standard-plan">
    <div class="plan-title"><h4>スタンダードプラン</h4></div>
    <div class="meyasu-title">製作費の目安</div>
    <div class="meyasu-price">20万円～</div>
    <div class="catch">おすすめプランNO.1</div>
    <ul>
        <li>月額費用 <strong>12,000円～</strong></li>
        <li>制作期間 <strong>2か月</strong></li>
        <li>ページ数 <strong>6ページ</strong></li>
        <li>デザイン <strong>セミテンプレート</strong></li>
        <li>お問合せフォーム <strong>〇</strong></li>
        <li>スマホ対応 <strong>〇</strong></li>
        <li>ブログ投稿機能 <strong>〇</strong></li>
        <li>マーケティング <strong>〇</strong></li>
        <li>軽微な修正 <strong>月3回まで</strong></li>
    </ul>    
</div>

<div class="business-plan">
    <div class="plan-title"><h4>ビジネスプラン</h4></div>
    <div class="meyasu-title">製作費の目安</div>
    <div class="meyasu-price">50～300万円</div>
    <div class="catch">問題を解決する戦略的プラン</div>
    <ul>
        <li>月額費用 <strong>応相談</strong></li>
        <li>制作期間 <strong>応相談</strong></li>
        <li>ページ数 <strong>6ページ～</strong></li>
        <li>デザイン <strong>完全オリジナル</strong></li>
        <li>お問合せフォーム <strong>〇</strong></li>
        <li>スマホ対応 <strong>〇</strong></li>
        <li>ブログ投稿機能 <strong>〇</strong></li>
        <li>マーケティング <strong>〇</strong></li>
        <li>軽微な修正 <strong>月10回まで</strong></li>
    </ul>    
</div>

</div>
</div>
</div>


<div class="flow">
<div class="inner-contents">
<h3>制作の<span>流れ</span></h3>
<div class="contents-text">
Webサイト制作が初めての方でも安心して進めていただけるよう、制作の流れをわかりやすくご紹介します。<br>
制作プロセス全体のイメージをつかんでいただければ幸いです。ご不明点がありましたら、いつでもお気軽にお問い合わせください！
</div>
<div style="clear:both"></div>
</div>
</div>


<div class="faq">
<div class="inner-contents">
<h3>よくある<span>ご質問</span></h3>
<div class="contents-text">
お客様からよくいただくご質問とその回答をまとめました。サービス内容や料金、納期に関する情報をわかりやすくご紹介しています。<br>
その他のご質問がございましたら、どうぞお気軽にお問い合わせください。
</div>
<div style="clear:both"></div>
</div>
</div>

</div>


<div class="basic-con">
<div class="inner-contents">
<h2>WEBの<span>きほん</span></h2>
<div class="contents-text">
WEBサイトに関する基本的な情報をまとめました。これからWEBサイトを作りたいとお考えの方は、ぜひご覧ください。<br>
漠然としていた疑問がクリアになるかもしれません。
</div>
</div>


<?php
  $arg = array(
      'posts_per_page' => 6, // 表示する件数
      'orderby' => 'modified', // 日付でソート
      'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
      'post_type' => 'basic', // カスタム投稿タイプ「basic」を指定
  );

$posts = get_posts($arg);
if ($posts): ?>
  
<ul class="kihon-post">
<?php
foreach ($posts as $post):
    setup_postdata($post); ?>
    
    <li>
        <a href="<?php the_permalink(); ?>">
            <div class="kihon-post-thumb">
                <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('single-thumbnails'); ?>
                <?php else: ?>
                    <img src="/path/to/default-image.jpg" alt="デフォルト画像">
                <?php endif; ?>
            </div>
            <div class="item-time">
                <?php if (get_the_time('U') !== get_the_modified_time('U')): ?>
                    <time class="updated" datetime="<?php the_modified_date("Y-m-d H:i:s") ?>">
                        <?php the_modified_date('Y.m.d') ?>
                    </time>
                <?php else: ?>
                    <time class="entry-date published" datetime="<?php echo get_the_date("Y-m-d H:i:s") ?>">
                        <?php echo get_the_date('Y.m.d') ?>
                    </time>
                <?php endif; ?>
            </div>
            <div class="kihon-post-title">
                <h3><?php the_title(); ?></h3>
            </div>
        </a>
    </li><!-- .post End-->
    
<?php endforeach; ?>
</ul>

<?php
endif;
wp_reset_postdata();
?>
<div class="more-btn"><a href="/basic">全て見る</a></div>
</div>

<?php get_template_part('partials/footer'); ?>
<?php wp_footer(); ?>
</body>
</html>