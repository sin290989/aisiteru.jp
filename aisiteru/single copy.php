<!DOCTYPE html>
<html lang="ja">
<head>
<?php get_template_part("analyticstracking"); ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php the_title(); ?>｜<?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common108.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/table4.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts") ?>
 
<style type="text/css">
/*================================================================================================*/
/*装飾
================================================================================================*/
#post-single a{
    color:#031b4e;
}
#post-single strong.jimoto{
    font-weight: normal;
}
#post-single strong.jimoto a{
    color:#46526f;
}
#post-single strong.jimoto a:hover{
    text-decoration: none;
    cursor:default;
}
#post-single strong.jimoto a[target="_blank"] {
	background-image:none;
	padding-left:0;
}
strong{
    color:#031b4e;
}
strong.red{
	color:#F00;
}
strong.red120{
	color:#F00;
	font-size:120%;
}
span.co-de{
    background-color: #EEEEEE;
    border-radius: 3px;
    font-size:0.9em;
    line-height: 0.9em;
    padding: 2px;
    padding-left: 5px;
    padding-right: 5px;
    margin: 0 1px 0 1px;
    color:#031b4e;
}

.imageWaku{
    border:5px solid #eeeeee;
    margin-bottom: 10px;
}
.imageWaku .img {
    vertical-align: bottom;
}
blockquote {
    padding: 15px;;
    box-sizing: border-box;
    font-style: italic;
    background: #f3f3f3;
    border-left:5px solid #CCCCCC;
}
ul.check{
	border:3px solid #CCCCCC;
	padding-left:20px;
	padding-right:20px;
	margin-bottom:10px;
	font-weight:bold;
}
ul.check li{
	border-bottom:1px dashed #CCCCCC;
	padding-top:10px;
	padding-bottom:10px;
	padding-left:40px;
	background-image:url(/wp/wp-content/themes/aisiteru/images/icon/check_gr.png);
	background-repeat:no-repeat;
	background-size:20px auto;
	background-position:center left 10px;
}
ul.check li:last-child{
	border:none;
}
.imp {
    position: relative;
    margin:40px 0 10px 0;
    padding: 20px 15px 0 30px;;
    border: solid 3px #eff30c;
    border-radius: 8px;
}
.imp .box-title {
    position: absolute;
    display: inline-block;
    top: -13px;
    left: 10px;
    padding: 0 9px;
    line-height: 1;
    font-size: 18px;
    background:#ffffff;
    color: #444444;
	background-image:url(/wp/wp-content/themes/aisiteru/images/icon/megaphone_yellow.png);
	background-position:center left 10px;
	background-size:30px auto;
	background-repeat:no-repeat;
	padding-left:50px;
	padding-bottom:5px;
	padding-top:5px;
}
.imp p{
	margin:0;
	padding:0;
}
.hint {
    position: relative;
    margin:40px 0 10px 0;
    padding: 0 15px 0 30px;;
    border: solid 3px #CCCCCC;
    border-radius: 8px;
}
.hint .box-title {
    position: absolute;
    display: inline-block;
    top: -13px;
    left: 10px;
    padding: 0 9px;
    line-height: 1;
    font-size: 18px;
    background:#ffffff;
    color: #111111;
    font-weight: bold;
	background-image:url(/wp/wp-content/themes/aisiteru/images/icon/megaphone_bk2.png);
	background-position:center left 10px;
	background-size:30px auto;
	background-repeat:no-repeat;
	padding-left:50px;
	padding-bottom:5px;
	padding-top:5px;
}
.hint p{
	margin:0;
	padding:0;
}
.hosoku {
    position: relative;
    margin:40px 0 10px 0;
    padding: 0 15px 0 30px;;
    border: solid 3px #CCCCCC;
    border-radius: 8px;
}
.hosoku .box-title {
    position: absolute;
    display: inline-block;
    top: -13px;
    left: 10px;
    padding: 0 9px;
    line-height: 1;
    font-size: 18px;
    background:#ffffff;
    color: #111111;
    font-weight: bold;
	background-image:url(/wp/wp-content/themes/aisiteru/images/icon/megaphone_bk2.png);
	background-position:center left 10px;
	background-size:30px auto;
	background-repeat:no-repeat;
	padding-left:50px;
	padding-bottom:5px;
	padding-top:5px;
}
.hosoku p{
	margin:0;
	padding:0;
}
span.btn-wp-blue{
	background-color:#007cba;
	color:#FFF;
	font-weight:bold;
	padding:3px 5px 3px 5px;
	margin:0 2px 0 2px;
	font-size:85%;
	border-radius: 3px;
	border:1px solid #007cba;
}

span.btn-wp-white{
	background-color:#ffffff;
	color:#007cba;
	font-weight:bold;
	padding:3px 5px 3px 5px;
	margin:0 2px 0 2px;
	font-size:85%;
	border-radius: 3px;
	border:1px solid #007cba;
}

.markerYellow {
    background: linear-gradient(transparent 60%, #ffff66 60%);
}
/*================================================================================================*/
/*================================================================================================*/
/*================================================================================================*/
/*================================================================================================*/





#main{
    margin:0;
    padding:0;
}
/*single
================================================================================================*/
#post-single{
	font-size:15px;
	line-height:28px;
    background-color:#ffffff;
    border-radius: 10px 10px 0 0;
    padding: 20px;
    margin:0 10px;
}
#post-single p{
    margin: 10px 0;
}
/*H
 ---------------------------------------------------------------*/
#post-single h2{
    font-size:20px;
    color:#031b4e;
    margin: 40px 0 0 0;
    padding: 0 0 7px 0;
    border-bottom:1px solid #CCCCCC;
} 
#post-single h3{
    color:#031b4e;
    font-size:16px;
    line-height:20px;
    background-color: #f7f8f8;
    border-radius: 3px;
	margin:30px 0 10px 0;
    padding:10px 0 10px 15px;
}
#post-single h4{
	margin-top:40px;
	background-image:url("/wp/wp-content/themes/aisiteru/images/icon/arrow_shita_bk.png");
	background-repeat:no-repeat;
	background-size:16px auto;
	padding-left:22px;
	background-position: center left;
    font-size: 16px;
    line-height: 16px;
    padding-top: 3px;
    margin-bottom: 5px;
    color:#031b4e;
}

#post-single img{
	width:100%;
	height:auto;
	vertical-align:bottom;
}
#post-single a[target="_blank"] {
	background-image:url(/wp/wp-content/themes/aisiteru/images/icon/blank.png);
	background-repeat:no-repeat;
	padding-left:17px;
	background-position:1px 4px;
}



/*post-head
================================================================================================*/
#post-head .inner{
    padding: 20px 0px 10px 0px;
}
.post_thumbnail{
	width:100%;
    position: relative;
    margin:20px 0 0 0;
}
.post_thumbnail img{
	width:100%;
	height:auto;
    vertical-align: bottom;
}
body #post-head h1{
	padding:0;
	margin:0 20px;
	border:none;
	font-size:22px;
	box-shadow:none;
    line-height: 35px;
    color:#031b4e;
    font-weight: bold;
}
.post-dates{
    font-size: 14px;
    padding: 0 0 0 18px;
    background-image:url("/wp/wp-content/themes/aisiteru/images/icon/time_bl.png");
	background-repeat:no-repeat;
	background-size:13px auto;
    background-position: left center;
}
ul.post-info{
	font-size:12px;
	line-height:12px;
	margin-bottom:7px;
}
ul.post-info li{
	float:left;
}
#post-single ul.post-info{
	margin-bottom:10px;
	margin-top:20px;
}
.post-cat{
    padding: 3px;
    font-size: 15px;
    font-weight: bold;
    margin:0 0 0 17px;
}
.post-cat span{
    background-image: url("/wp/wp-content/themes/aisiteru/images/icon/folder_bl.png");
    background-repeat: no-repeat;
    background-size: 20px auto;
    background-position: left center;
    padding-left: 23px;
}

ul.tag-list{
    margin: 8px 0 0 20px ;
    padding: 0 0 0 0 ;
} 
ul.tag-list li{
    display: inline;
    margin-right: 5px;
}
body ul.tag-list a{
    font-size: 12px !important;
    line-height: 1em;
    background: #ffffff;
    display: inline-block;
    white-space: nowrap;
    padding: 8px 8px;
    padding-left: 30px;
    margin-top: 3px;
    border-radius: 3px;
    text-decoration: none;
    transition-duration: 0.3s;
    border:solid 1px #eeeeee;
    background-image:url(/wp/wp-content/themes/aisiteru/images/icon/tag_bl.png);
    background-size: 13px auto;
    background-repeat: no-repeat;
    background-position: left 10px center;
    color: #444444 !important;
}
    






/*sns-link
================================================================================================*/
.sns-link{
    position:relative;
}
.sns-link ul {
    width: 220px;
    position: absolute;
    right: 0;
    left: 0;
    margin: 0 auto;
    top:-70px;
}
.sns-link ul li{
    width: 40px;
    height: 40px;
    border-radius: 20px;
    float:left;
    margin:0 20px 0 0 ;
}
.sns-link ul li:last-child{
    margin:0;
}
li.sns-x a{
    background-image:url("/wp/wp-content/themes/aisiteru/images/icon/sns/x.png");
    background-size: 48% auto;
}
li.sns-fb a{
    background-image:url("/wp/wp-content/themes/aisiteru/images/icon/sns/fb.png");
    background-size: 55% auto;
}
li.sns-line a{
    background-image:url("/wp/wp-content/themes/aisiteru/images/icon/sns/line.png");
    background-size: 55% auto;
}
li.sns-url{
    background-image:url("/wp/wp-content/themes/aisiteru/images/icon/sns/copy.png");
    background-size:50% auto;
    cursor: pointer;
}
.snsInner{
    position: relative;
}
li.sns-x a,
li.sns-fb a,
li.sns-line a,
li.sns-url{
    background-color: #031b4e;
    transition-duration: 0.5s;
    background-repeat: no-repeat;
    background-position: center center;
    display: block;
    width: 40px;
    height: 40px;
    border-radius: 20px;
}
.sns4TipOk,
.sns4Tip,
.sns3Tip,
.sns2Tip,
.sns1Tip{
     display: none;
}


/*post_author
================================================================================================*/
.post_author{
    padding: 25px 25px 25px 25px;
    border-radius: 0 0 10px 10px;
    box-sizing: border-box;
    background-color: #FFFFFF;
    border-top:1px solid #EEEEEE;
    margin:0 10px;
}
.post_author .inner{
    width: 100%;
    position: relative;
}
.profile-img{
    position: absolute;
    top: 0;
    left: 0;
    width: 60px;
    height: 60px;
    overflow:hidden;
    border-radius: 25px;
}
.profile-img img {
    width: 100%;
    height:auto;
    vertical-align: bottom;
}
.profile-name{
    position: absolute;
    top: 10px;
    left: 70px;
    font-size: 16px;
    font-weight: bold;
    color:#031b4e;
}
.profile-comment{
    padding-top: 70px;
    font-size: 13px;;
}


/* ===== フッター固定 ===== */
  .fixed-footer {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    z-index: 9999;
    background: #1433d6;
    padding: 10px 0 12px 0; /* ← スマホ向けに少し広げる */
    padding-bottom: calc(12px + env(safe-area-inset-bottom)); /* iPhone対策 */
  }

  /* 上部テキスト（13px） */
  .fixed-footer .footer-text {
    font-size: 13px;
    color: #ffffff;
    text-align: center;
    margin-bottom: 10px; /* スマホで見やすい間隔 */
    line-height: 1.3;
    padding: 0 10px; /* 画面端ギリギリ対策 */
  }

  /* アイコン行 */
  .fixed-footer .icon-nav {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 12px; /* スマホで適度な間隔に調整 */
  }

  /* 通常アイコン（正円 28px） */
  .fixed-footer .icon-item {
    width: 24px;   /* ←変更 */
    height: 24px;  /* ←変更 */
    border-radius: 50%;
    background: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 4px; /* 指で押しやすいよう微調整 */
    transition: background 0.15s ease, transform 0.1s ease;
  }

  /* タップ時の軽いアニメーション */
  .fixed-footer .icon-item:active {
    transform: scale(0.9);
  }

  /* アクティブ（赤 #FF0000） */
  .fixed-footer .icon-item.active {
    background: #FF0000;
  }

.fixed-footer .icon-item.chatgpt a,
.fixed-footer .icon-item.gemini a,
.fixed-footer .icon-item.copilot a,
.fixed-footer .icon-item.claude a,
.fixed-footer .icon-item.lechat a,
.fixed-footer .icon-item.deepseek a,
.fixed-footer .icon-item.perplexity a{
    display: block;
    width: 24px;   /* ←変更 */
    height: 24px;  /* ←変更 */
    border-radius: 50%;
    background-position:center center;
    background-repeat:no-repeat;
}
.fixed-footer .icon-item.chatgpt a{
    background-image:url("/wp/wp-content/themes/aisiteru/images/icon/ai/openai.webp");
    background-size: 90% auto;
    
}
.fixed-footer .icon-item.gemini a{
    background-image:url("/wp/wp-content/themes/aisiteru/images/icon/ai/gemini.webp");
    background-size: 90% auto;
}

.fixed-footer .icon-item.copilot a{
    background-image:url("/wp/wp-content/themes/aisiteru/images/icon/ai/copilot.webp");
    background-size: 90% auto;
}

.fixed-footer .icon-item.claude a{
    background-image:url("/wp/wp-content/themes/aisiteru/images/icon/ai/claude.webp");
    background-size: 90% auto;
}
.fixed-footer .icon-item.lechat a{
    background-image:url("/wp/wp-content/themes/aisiteru/images/icon/ai/mistral.webp");
    background-size: 90% auto;
}
.fixed-footer .icon-item.deepseek a{
    background-image:url("/wp/wp-content/themes/aisiteru/images/icon/ai/deepseek.webp");
    background-size: 90% auto;
}
.fixed-footer .icon-item.perplexity a{
    background-image:url("/wp/wp-content/themes/aisiteru/images/icon/ai/perplexity.webp");
    background-size: 90% auto;
}



.post-meta-top {
    /* Flexboxを有効化し、子要素を横並びにする */
    display: flex;
    
    /* 左右にスペースを空ける */
    /* justify-content: space-between; */ 
    
    /* カテゴリーを左、日付を右に寄せる場合はこれ */
    justify-content: flex-start; 
    
    /* 垂直方向の配置を中央に揃える */
    align-items: center; 
    
    /* 下部に少しスペースを確保 */
    margin-bottom: 0px; 
}

.post-cat {
    /* カテゴリーと日付の間に余白を入れる */
    margin-right: 20px; 
    
    /* カテゴリーを少し目立たせるための装飾（任意） */
    font-weight: bold; 
}

.post-dates {
    /* フォントサイズを小さくするなどの調整 */
    font-size: 0.9em;
    color: #666;
}



/* */
.ai-author-info{
    font-size: 13px;
    font-weight: 500;
    margin:0 0 10px 0;
}
.ai-author-info.ai-chatgpt{
    background-image:url("/wp/wp-content/themes/aisiteru/images/icon/ai/openai.webp");
    background-size:20px auto;
    background-repeat: no-repeat;
    padding-left: 24px;
    background-position: left center;
}

.ai-author-info.ai-gemini{
    background-image:url("/wp/wp-content/themes/aisiteru/images/icon/ai/gemini.webp");
    background-size:20px auto;
    background-repeat: no-repeat;
    padding-left: 28px;
    background-position: left center;
}




/* ボタン全体を横並びにする設定 */
.prompt-index-buttons-wrapper {
    display: flex;
    gap: 15px; /* ボタン間の間隔 */
    margin-bottom: 25px;
    align-items: center; /* 垂直方向の中央揃え */
    flex-wrap: wrap; 
    justify-content: center;
}

/* 共通のボタンベーススタイル（ご要望のスタイルを適用） */
.button-base {
    /* サイズ、角丸、フォント設定を共通化 */
    height: 30px; 
    border-radius: 15px;
    font-size: 13px;
    font-weight: 500;
    
    /* テキスト配置を共通化 */
    text-align: center;
    line-height: 30px; /* heightと同じ値でテキストを垂直方向中央に */
    text-decoration: none; /* aタグの下線を消す */
    cursor: pointer;
    transition: opacity 0.2s; /* ホバーエフェクト用 */
    
    /* フレックスの子要素として適切に扱うための設定 */
    display: inline-block; 
    padding: 0 15px; /* 左右のパディングで幅を調整 */
}

/* 1. プロンプトボタンの個別設定（固定幅と色） */
.view-prompt-btn {
    width: 120px;
    background-color: #FF0000; /* 赤色 */
    color: #FFFFFF;
}

/* 2. インデックスボタンの個別設定（可変幅と色） */
.view-index-btn {
     width: 120px;
    /* テキスト長に合わせて幅を可変にするため、widthを削除 */
    background-color: #008080; /* 例：サイトのイメージカラー（ティール系など） */
    color: #FFFFFF;
}

/* ホバーエフェクト */
.button-base:hover {
    opacity: 0.85;
}




@media only screen and (min-width: 680px) {
#contents{width:1100px;}
#main{margin:0;}
/*single
================================================================================================*/	
#post-single{
    width: 740px;
    padding: 25px 50px 15px 50px;
    box-sizing: border-box;
    margin: 0;
}
#post-single p{
	margin: 15px 0;
}
    
/*H
 ---------------------------------------------------------------*/
#post-single h2{
    font-size:22px;
    margin: 80px 0 0 0;
    padding: 0 0 10px 0;
}
#post-single h3{
    font-size:18px;
    margin: 50px 0 0 0;
}
#post-single h4{
    padding-left:27px;
    background-position: left center;
    font-size: 18px;
    line-height: 18px;
    padding-top: 4px;
} 
#post-single a:hover{
	text-decoration:underline;
}
#post-single a[target="_blank"] {
    background-position:2px 1px;
    }
    
    
 /*post-head
================================================================================================*/
#post-head .inner{
    position: relative;
    height: 265px;
    padding: 0;
}  
.post_thumbnail{
    position:absolute;
    top: 0;
    left: 0;
    margin:0;
    border-radius: 5px;
    overflow: hidden;
    width: 360px;
}
body #post-head h1{
    font-size:28px;
    line-height: 42px;
    margin:10px 0 10px 0;
}




.post-dates{
    font-size: 12px;
}
.post-info{
    position:absolute;
    top: 0;
    left: 390px;
	margin: 0;
    width: 710px;
}
.post-cat{
    font-size: 14px;
    margin:0;
}
.post-cat span{
    padding-left: 25px;
}
body ul.tag-list{
    margin: 0;
    padding: 0;
}
body ul.tag-list a:hover{
    text-decoration:underline;
}
    



/*目次
================================================================================================*/   
#toc_container{
	padding-left:30px;
	padding-right:30px;
}

#toc_container p.toc_title{
	font-size:18px;
	background-size:24px auto;
	padding-left:28px;
}


/*sns-link
================================================================================================*/
.sns-link ul {
    width: 25px;
    top:0;
    left: -55px;
    margin:0;
}
.sns-link ul li{
    position: relative;
    float:none;
    margin:0 0 20px 0;
}
  
li.sns-x a:hover,
li.sns-fb a:hover,
li.sns-line a:hover,
li.sns-url:hover{
    background-color: #0069ff;
}
.sns4TipOk,
.sns4Tip,
.sns3Tip,
.sns2Tip,
.sns1Tip{
    display: block;
    position: absolute;
    background-color: rgba(0,0,0,0.8);
    color: #FFFFFF;
    font-size: 11px;
    height: 20px;
    line-height: 20px;
    border-radius: 10px;
    text-align: center;
    opacity: 0;
    transition-duration: 0.5s;
    top:-30px;
    left:30px;
}
.sns4TipOk{
     top:10px;
    width:110px;
}
.sns4Tip{
    top:10px;
    width:90px;
}
.sns3Tip{
    width:90px;
}
.sns2Tip{
    width:115px;
}
.sns1Tip{
    width:65px;
}

/*post_author
================================================================================================*/
.post_author{
    width: 740px;
    padding: 25px 75px 25px 75px;
    border-radius: 0 0 10px 10px;
    box-sizing: border-box;
    background-color: #FFFFFF;
    border-top:1px solid #EEEEEE;
    margin:0;
}
.post_author .inner{
    width: 100%;
    position: relative;
}
.profile-img{
    position: absolute;
    top: 0;
    left: 0;
    width: 60px;
    height: 60px;
    overflow:hidden;
    border-radius: 25px;
}
.profile-img img {
    width: 100%;
    height:auto;
    vertical-align: bottom;
}
.profile-name{
    position: absolute;
    top: 10px;
    left: 70px;
    font-size: 16px;
    font-weight: bold;
    color:#031b4e;
}
.profile-comment{
    padding-top: 70px;
    font-size: 13px;;
}


/* ===== フッター固定 ===== */
.fixed-footer {
  padding: 15px 0;
}

/* 上部テキスト（12px） */
.fixed-footer .footer-text {
  margin-bottom: 12px;
}

/* アイコン行 */
.fixed-footer .icon-nav {
  gap: 12px; /* 小さくしたので余白も微調整 */
}

/* 通常アイコン（正円 28px） */
.fixed-footer .icon-item {
  padding: 3px; /* 28px用に最適化 */
}




.prompt-index-buttons-wrapper {
    justify-content: flex-start;
}
.view-prompt-btn {
   width:auto;
}
.view-index-btn {
     width:auto;
}




}
</style>  

</head>
<body>
<?php get_template_part('partials/header'); ?>
<div id="pan">
<?php
// 記事が属するカテゴリ情報を取得
$cat = get_the_category();
$main_cat = $cat[0]; 
$cat_link = get_category_link($main_cat->cat_ID);

// カスタムフィールドからインデックス記事のURLとタイトルを取得
$index_url = get_post_meta(get_the_ID(), 'index_url', true); 
$index_title = get_post_meta(get_the_ID(), 'index_title', true); 
?>
<div class="inner">
    
    <a href="/"><span class="home">ホーム</span></a> 
    <span class="separator"> > </span>
    
    <a href="<?php echo esc_url($cat_link); ?>"><?php echo esc_html($main_cat->name); ?></a>
    
    <?php 
    // インデックス情報がある場合のみ、階層を追加
    if ($index_url && $index_title) {
        // 3. インデックス投稿
        echo '<span class="separator"> > </span>';
        echo '<a href="' . esc_url($index_url) . '">' . esc_html($index_title) . '</a>';
    }
    ?>
    
    <span class="separator"> > </span>
    
    <span class="now"><?php the_title(); ?></span>
    
</div>
</div>




<div id="wapper">
<div id="contents">

<div id="post-head">
<div class="inner">

<div class="post-info">

    <div class="post-meta-top">
    <div class="post-cat">
        <span>
        <?php
        // 記事に設定されているカテゴリー情報を取得
        $categories = get_the_category();

        // カテゴリーが設定されていることを確認し、あれば処理を実行
        if (!empty($categories)) {
            // 最初のカテゴリー（主要カテゴリー）のみを使用
            $main_category = $categories[0]; 
            
            $cat_name = $main_category->name;
            $cat_link = esc_url(get_category_link($main_category->term_id));
            
            // カテゴリー名とリンクを出力
            echo sprintf(
                "<a href='%s'>%s</a>", 
                $cat_link, 
                esc_html($cat_name)
            );
        }
        ?>
        </span>
    </div>

    <div class="post-dates">
    <?php 
    // 公開日の取得
    $pub_date = get_the_date('Y.n.j');
    $pub_date_html = get_the_date("Y-m-d H:i:s");

    // 更新日の取得
    $mod_date = get_the_modified_date('Y.n.j');
    $mod_date_html = get_the_modified_date("Y-m-d H:i:s");
    
    // 公開日と更新日が異なるかチェック
    if ( get_the_time('U') !== get_the_modified_time('U') ) {
        // 更新されている場合：公開日と更新日の両方を表示
    ?>
        <time class="entry-date published" datetime="<?php echo $pub_date_html ?>">公開日:<?php echo $pub_date ?></time>
        <span class="separator"> / </span>
        <time class="updated" datetime="<?php echo $mod_date_html ?>">更新日:<?php echo $mod_date ?></time>
    <?php
    } else {
        // 更新されていない場合：公開日のみを表示
    ?>
        <time class="entry-date published" datetime="<?php echo $pub_date_html ?>">公開日:<?php echo $pub_date ?></time>
    <?php
    }
    ?>
</div>
</div>

<h1><?php the_title(); ?></h1>

<?php
/**
 * 記事に設定されているAI名タグをチェックし、メッセージを出力する関数
 */
function display_ai_author_message() {
    // 比較に使用するAI名とスラッグの配列を定義
    $ai_list = array(
        'chatgpt'   => 'ChatGPT',
        'claude'    => 'Claude',
        'copilot'   => 'Copilot',
        'deepseek'  => 'DeepSeek',
        'gemini'    => 'Gemini',
        'lechat'     => 'LeChat',
        'perplexity'=> 'Perplexity',
    );
    
    // 記事に設定されている全てのタグを取得
    $post_tags = get_the_tags();
    
    if ($post_tags) {
        foreach ($post_tags as $tag) {
            $tag_slug = $tag->slug;
            
            // タグのスラッグが定義されたAIリストに含まれているかチェック
            if (array_key_exists($tag_slug, $ai_list)) {
                $ai_name = $ai_list[$tag_slug];
                
                // AI名に応じて、色や背景を切り替えるためのクラス名も出力 (デザイン用)
                echo '<div class="ai-author-info ai-' . esc_attr($tag_slug) . '">';
                
                // アイコンを削除し、テキストメッセージのみを出力
                echo '<p>この記事を担当したAIは' . esc_html($ai_name) . 'です。</p>';
                
                echo '</div>';
                
                // AI名タグは通常一つなので、見つかったらループを抜ける
                break;
            }
        }
    }
}
?>

<?php display_ai_author_message(); ?>


<?php
// カスタムフィールドからインデックス記事のURLとタイトルを取得
$index_url = get_post_meta(get_the_ID(), 'index_url', true); 
$index_title = get_post_meta(get_the_ID(), 'index_title', true); 
?>

<div class="prompt-index-buttons-wrapper">
    
    <div class="view-prompt-btn button-base">
        <span class="pc">プロンプトはこちら</span><span class="sp">プロンプト</span>
    </div>
    
    <?php 
    // インデックス記事のURLとタイトルがカスタムフィールドに設定されている場合のみ表示
    if ($index_url && $index_title) {
    ?>
    <a href="<?php echo esc_url($index_url); ?>" class="view-index-btn button-base">
        <span class="pc"><?php echo esc_html($index_title); ?></span><span class="sp">比較インデックス</span>
    </a>
    
    <?php
    }
    ?>
    
</div>


<?php if(has_tag()==true) : ?>
<?php the_tags( '<ul class="tag-list"><li>', '</li><li>', '</li></ul>' ); ?>
<?php endif; ?>
<div style="clear: both;"></div>

</div>


    
<div class="post_thumbnail">
<?php if (has_post_thumbnail()) : ?>
    <?php the_post_thumbnail('single-thumbnails'); ?>
<?php else : ?>
    <img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
<?php endif ; ?>
</div>



</div>
</div>   


<div id="main">
<div class="sns-link">
<ul>
<li class="sns-x"><a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&hashtags=aisiteru" target="_bkank"></a><div class="snsInner"><div class="sns1Tip">Xで共有</div></div></li>
<li class="sns-fb"><a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_bkank"></a><div class="snsInner"><div class="sns2Tip">Facebookで共有</div></div></li>
<li class="sns-line pc"><a href="https://social-plugins.line.me/lineit/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_bkank"></a><div class="snsInner"><div class="sns3Tip">LINEで共有</div></div></li>
<li class="sns-line sp"><a href="https://line.me/R/share?text=<?php the_title(); ?><?php the_permalink(); ?>" target="_bkank"></a><div class="snsInner"><div class="sns3Tip">LINEで共有</div></div></li>
<li class="sns-url" data-url="<?php the_permalink(); ?>"><div class="snsInner"><div class="sns4TipOk">コピーしました！</div><div class="sns4Tip">URLをコピー</div></div></li>
</ul>
</div>

<div id="post-single">
<?php if(have_posts()): while(have_posts()):
the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
</div>

<div class="post_author">
<div class="inner">
<?php
if(get_the_author_id() == 1){
    echo '<div class="profile-img">';
    echo get_avatar( get_the_author_id(), 75 );
    echo '</div>';
    echo '<div class="profile-name">Tusami</div>';
    echo '<div class="profile-comment">';
    echo '仙台市で活動するフリーランスです。よろしくお願いします。';
    echo '</div>';
}   
?>
</div>
</div>

<?php get_template_part("partials/prev-next-link") ?>
<?php get_template_part("partials/related-posts") ?>
</div>
<div id="side">
<?php dynamic_sidebar('sidebar-1'); ?>
<?php get_template_part("partials/cat") ?>
<?php //get_template_part("partials/tag") ?>
</div>
<div style="clear:both;"></div>
</div>

</div>
<?php get_template_part('partials/footer'); ?>
<?php wp_footer(); ?>


<?php if ( !wp_is_mobile() ) : ?>
<script type="text/javascript">
$(function () {
    $('.awasete li').hover(function(){
        $(".awasete-content-title",this).css('color','#0069ff');
    }, function(){
        $(".awasete-content-title",this).css('color','#46526f');
    });  
});

$(function () {
    // 必要な要素をキャッシュ
    const $postSingle = $("#post-single");
    const $snsLinkUl = $(".sns-link ul");

    // 要素の位置や高さを事前に計算
    const mainTop = $postSingle.offset().top;
    const postSingleBottom = mainTop + $postSingle.height();
    const snsLinkUlHeight = $snsLinkUl.height();

    $(window).on("scroll", function () {
        const scroll = $(window).scrollTop();

        if (scroll > mainTop) {
            const ulTop = scroll - mainTop + 120;

            // SNSリンクが記事の下に突き抜けないよう制限
            if (scroll < postSingleBottom - snsLinkUlHeight) {
                $snsLinkUl.css("top", ulTop);
            }
        } else {
            // 記事の上部より上にスクロールした場合
            $snsLinkUl.css("top", 0);
        }
    });
});

$(function(){   
    $('.sns-url').click(function(){
        const url = $(this).data('url');
        navigator.clipboard.writeText(url);

        $(".sns4TipOk").css("opacity","1");
        $(".sns4TipOk").css("left","45px");

        $(".sns4Tip").css("opacity",0);
        $(".sns4Tip").css("left","20px");

        setTimeout(function(){
            $(".sns4TipOk").css("opacity",0);
            $(".sns4TipOk").css("left","20px");
        },1500);
    });
});
    
$(function(){
    $('li.sns-url').hover(function(){
        $(".sns4Tip").css("opacity",1);
        $(".sns4Tip").css("left","45px");
    }, function(){
        $(".sns4Tip").css("opacity",0);
        $(".sns4Tip").css("left","20px");
    });
});

$(function(){
    $('.sns-line').hover(function(){
        $(".sns3Tip").css("opacity",1);
        $(".sns3Tip").css("left","45px");
    }, function(){
        $(".sns3Tip").css("opacity",0);
        $(".sns3Tip").css("left","20px");
    });
});
    
$(function(){
    $('.sns-fb').hover(function(){
        $(".sns2Tip").css("opacity",1);
        $(".sns2Tip").css("left","45px");
    }, function(){
        $(".sns2Tip").css("opacity",0);
        $(".sns2Tip").css("left","20px");
    });

}); 
    
$(function(){
    $('.sns-x').hover(function(){
        $(".sns1Tip").css("opacity",1);
        $(".sns1Tip").css("left","45px");
    }, function(){
        $(".sns1Tip").css("opacity",0);
        $(".sns1Tip").css("left","20px");
    });
});
</script>
    
<?php endif; ?>

</body>
</html>