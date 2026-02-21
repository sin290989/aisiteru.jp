<?php
/*
Template Name: Cluster Work Style
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php get_template_part("analyticstracking"); ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php wp_title(''); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common108.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts") ?>

<style type="text/css">
#contents h1{
    color: #1433d6;
    font-family: "Noto Sans JP", sans-serif;
    font-weight: 700;
}

#contents h2{
    color: #1433d6;
    font-family: "Noto Sans JP", sans-serif;
    font-weight: 700;
}
.h-index{
    font-size: 36px;
    line-height: 36px;
    font-weight: 700;
    padding: 60px 20px 20px 20px;
    color: #031b4e;
}
.h-index span.cluster {
    color: #1433d6;
}

.h-structural{
    font-size: 28px;
    line-height: 28px;
   margin-bottom: 10px;
}


.h-topic{
    font-size: 28px;
    line-height: 28px;
    margin-bottom: 10px;
}
p.top-read{
  padding: 0 20px;
  text-align: justify;
}
p.cluster-read{
  text-align: justify;
  margin-bottom:30px;
}
    ul.cluster-scope{
    color:#FFFFFF; 
    font-weight: 500;
    margin-bottom: 10px;
    margin-top:0;
    }
    ul.cluster-scope li {
    display: inline;
    background-color: #031b4e;
    padding:2px 7px;
    font-size:10px;
    font-size:10px;
    border-radius:20px;
    margin-right: 4px;
    }

    .total-count{
        position: absolute;
        top:-20px;
        right:20px;
        font-size: 24px;
        font-weight: 700;
        background-color: #efefef;
        width:70px;
        height: 70px;
        text-align: center;
        border-radius: 35px;
        padding-top: 20px;
        box-sizing: border-box;
    }

    .total-count span{
        font-size: 12px;
    }
@media only screen and (min-width: 680px) {

    .h-index {
        font-size: 60px;
        line-height:60px;
        padding: 0 0px 20px 0;
    }


    .h-structural{
        font-size: 54px;
        line-height: 54px;
        margin-bottom: 20px;
    }
    .h-structural span{
        margin-left:30px;
        color: #EEEEEE;
        font-size: 38px;
    }
    body .h-topic{
        font-size: 42px;
        line-height: 42px;
        margin-bottom: 20px;
    }
  
    p.cluster-read{
        padding: 0;
        margin-bottom:25px;
    }
    p.top-read{
    padding: 0;
    }
     ul.cluster-scope{
    margin-top:0px;
    padding: 0;
    margin-bottom: 20px;
    }
    ul.cluster-scope li {
        padding:3px 10px;
        font-size:12px;
        line-height: 13px;
        border-radius:20px;
        margin-right: 7px;
    }

    .total-count{
        position: absolute;
        top:35px;
        right:30px;
        font-size: 24px;
        font-weight: 700;
        background-color: #efefef;
        width:70px;
        height: 70px;
        text-align: center;
        border-radius: 35px;
        padding-top: 20px;
        box-sizing: border-box;
    }

    .total-count span{
        font-size: 12px;
    }
}    
</style>



<style type="text/css">
/*構造クラスタ*/
.structural-cluster-box{
margin-top:60px;
}
.structural-cluster-box h2 {

}

/*構造クラスタ*/
.topic-cluster-box{
margin-top:60px;
}
.cluster-block {
  border-radius: 5px;
  padding: 20px 10px 10px 10px;
  position: relative;
  background-color: #ffffff;
  margin: 30px 10px 0 10px;
}
@media only screen and (min-width: 680px) {
/*構造クラスタ*/
.structural-cluster-box{
margin-top:60px;
}
/*構造クラスタ*/
.topic-cluster-box{
margin-top:100px;
}
.cluster-block {
    margin: 0;
    background-color: #ffffff;
    border-radius: 30px;
    position: relative;
    box-sizing: border-box;
    padding:50px 50px 20px 50px;
}

}
</style>



<style type="text/css">
ul.post-index li{
    width: 100%;
    overflow:hidden;
    margin-bottom: 10px;
    position: relative;
    padding-bottom: 10px;
    border-bottom: 1px solid #eeeeee;
}
ul.post-index a{
	display:block;
    text-decoration: none;
}
ul.post-index li:last-child {
  border-bottom: none;
  padding-bottom: 0;
  margin-bottom: 0;
}
ul.post-index li:nth-child(3){
    border-bottom: none;
    padding-bottom: 0;
  margin-bottom: 0;
}
/*左側
-------------------------------------------------------*/
ul.post-index .post_thumbnail{
	width:46%;
    float: left;
}

ul.post-index .post_thumbnail img{
	width:100%;
	height:auto;
	vertical-align:bottom;
    padding: 0;
    margin-bottom: 0;
    border-radius: 3px;
}
/*右側
-------------------------------------------------------*/
ul.post-index .head{
    width:52%;
    float: right;
    padding-top: 0px;
    color: #46526f;
}
ul.post-index .head .h-post-title{
    font-family: 'Noto Sans JP', sans-serif;
    font-weight: 700;
    font-style: normal;
    color: #031b4e;
	font-size:12px;
    line-height: 18px;
	background-image:none;
	border:none;
	margin:0;
	padding:0;
	height:auto;
    padding-top: 0px;
}
ul.post-index .head .post-dates {
  font-size: 12px;
  background-image: url(/wp/wp-content/themes/aisiteru/images/icon/time_bl.png);
  background-repeat: no-repeat;
  background-size: 12px auto;
  background-position: left center;
  padding: 0 0 0 16px;
  margin-bottom: 0px;
}


.more-btn a{
    display: block;
    height: 40px;
    width: 200px;
    background-color: #1433d6;
    text-align: center;
    color: #FFFFFF;
    border-radius: 20px;
    transition-duration: 0.2s;
    background-image: url("/wp/wp-content/themes/aisiteru/images/icon/more_link_icon.png");
    background-size: 16px auto;
    background-position: right 15px center;
    background-repeat: no-repeat;
    margin: 40px auto 20px auto;
    line-height: 40px;
    font-weight: 600;
  }
@media only screen and (min-width: 680px) {

#contents {
    width:900px;
    margin: 0 auto;
    padding: 100px 0 50px 0;
}

ul.post-index li{
    width:240px;
    float: left;
    border-bottom: none;
}
ul.post-index li:nth-child(2){
    margin-left:40px;
    margin-right:40px;
}

ul.post-index li:last-of-type{
    border-bottom:none;
    margin-bottom: 0;
    padding-bottom: 0;;
}
/*左側
-------------------------------------------------------*/
ul.post-index .post_thumbnail{
    overflow: hidden;
	width:100%;
}
ul.post-index a img{
    transition-duration: 0.3s;
}
/*右側
-------------------------------------------------------*/
ul.post-index .head{
	width:100%;
}
ul.post-index .head .h-post-title{
    font-size:15px;
	line-height:24px;
	margin:0;
	padding:0;
    transition-duration: 0.3s;
    overflow: hidden;
}
ul.post-index .head .h-post-title span {
    margin: 0;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
}
ul.post-index .head .post-title{
	margin-bottom:10px;
	padding-bottom:0;
}
ul.post-index .head .post-content{
    overflow: hidden;
}
ul.post-index .head .post-content p {
    font-size:13px;
    line-height: 20px;
    margin: 0;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
    overflow: hidden;
    display: none;
}

.more-btn a{
    margin: 0;
    position: absolute;
    height: 40px;
    width: 40px;
    background-color: #1433d6;
    bottom:-20px;
    right: 0;
    left: 0;
    margin: 0 auto;
    border-radius: 50%;
    transition-duration: 0.2s;
    background-image: url("/wp/wp-content/themes/aisiteru/images/icon/more_link_icon.png");
    background-size: 45% auto;
    background-position: center center;
    background-repeat: no-repeat;
    text-decoration: none;
    transition: all 0.3s ease;
  }

    .more-btn a:hover{
        background-color: #0069ff;
    }

    .category-block.prediction-block .more-btn a {
        top: 400px;
    }

    .visually-hidden {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
    }

}
</style>


</head>
<body>

<?php get_template_part('partials/header2'); ?>

<div id="pan">
<div class="inner">
<a href="/"><span class="home">トップページ</span></a> >
<a href="/cluster/">クラスタ索引</a> >
<?php the_title(); ?>
</div>
</div>

<div id="wapper">
<div id="contents">

<div id="main-cluster">
<h1 class="h-structural">働き方</h1>

<p class="top-read">
このページは、AI比較クラスタの中でも、<strong>「働き方」という構造領域に属するテーマ群を束ねた構造クラスタページ</strong>です。<br>
労働市場、制度設計、キャリア形成、報酬構造、雇用形態といった観点から、働き方という概念がどのように社会の中で形成されているのかを、多角的な視点から整理しています。<br>
ここでは、賃金、キャリア、雇用形態、副業、評価制度など、働き方に関連するテーマクラスタへの入口を提供しています。

</p>

<?php get_template_part('partials/cluster/work-style-employment-type'); ?>
<?php get_template_part('partials/cluster/work-style-working-hours'); ?>
<?php get_template_part('partials/cluster/work-style-performance-evaluation'); ?>
<?php get_template_part('partials/cluster/work-style-wage'); ?>
<?php get_template_part('partials/cluster/work-style-career'); ?>
<?php get_template_part('partials/cluster/work-style-job-change'); ?>
<?php get_template_part('partials/cluster/work-style-side-job'); ?>

<div class="back-btn">
<a href="/cluster/">クラスタ索引へ戻る</a>
</div>
</div>

<div style="clear:both"></div>
</div>
</div>

<?php get_template_part('partials/footer2'); ?>
<?php wp_footer(); ?>

<?php if ( !wp_is_mobile() ) : ?>
<script type="text/javascript">
$(function () {
$('ul.post-index li').hover(function(){
    $("h3",this).css('color','#0069ff');
    $(".post_thumbnail img",this).css('transform','scale(1.1)');
}, function(){
    $("h3",this).css('color','#031b4e');
    $(".post_thumbnail img",this).css('transform','scale(1)');
});  
});
</script>
<?php endif; ?>

</body>

</html>