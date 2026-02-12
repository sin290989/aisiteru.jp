<?php
/*
Template Name: Cluster Work Style
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php wp_title(''); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common106.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts") ?>
<?php get_template_part("partials/css/post-index") ?>



<style type="text/css">
h1{
    color: #1433d6;
    font-family: "Noto Sans JP", sans-serif;
    font-weight: 700;
}
h2{
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
    font-size:48px;
    line-height: 48px;
    margin-bottom: 15px;
    padding: 0 20px;
}
.h-topic{
    font-size: 28px;
    line-height: 28px;
    margin-bottom: 15px;
    padding: 0 20px;
}
p.top-read{
  padding: 0 20px;
  font-size:14px;
  line-height: 28px;
  font-weight: bold;
  text-align: justify;
}
p.cluster-read{
  padding: 0 20px;
  font-size:14px;
  line-height: 28px;
  font-weight: bold;
  text-align: justify;
}
ul.cluster-scope{
color:#FFFFFF; 
font-weight: 500;
padding: 0 20px;
margin-bottom: 20px;
margin-top:50px;
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
@media only screen and (min-width: 680px) {

    .h-index {
        font-size: 80px;
        line-height:80px;
        padding: 0 20px 20px 20px;
    }
    .h-index span.ai{
        font-size:120%;
        line-height:120%;
        margin-top: 20px;
    }

    .h-structural{
        font-size: 68px;
        line-height: 68px;
        margin-bottom: 20px;
        padding: 0 20px;
    }

    .h-topic{
        font-size: 48px;
        line-height: 48px;
        margin-bottom: 10px;
        padding: 0 20px;
    }
    p.top-read{
        font-size:14px;
        line-height: 28px;
    }
    p.cluster-read{
        font-size:14px;
        line-height: 28px;
    }
    ul.cluster-scope li {
        padding:3px 10px;
        font-size:12px;
        line-height: 13px;
        border-radius:20px;
        margin-right: 7px;
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
  padding: 10px 10px;
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
margin-top:20px;
background-color: #ffffff;
border-radius: 5px;
position: relative;
box-sizing: border-box;
padding: 0;
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


.more-btn a {
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


  
.back-btn a {
    display: block;
    height: 40px;
    width: 280px;
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
    width: 1100px;
    margin: 0 auto;
    padding: 100px 0 50px 0;
}


ul.post-index {
    padding: 50px;
    padding-bottom: 20px;
}
ul.post-index li{
    width: 300px;
    float: left;
    border-bottom: none;
}
ul.post-index li:nth-child(2){
    margin-left:38px;
    margin-right:38px;
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
    font-size:16px;
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
    top:160px;
    right: -20px;
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

<?php get_template_part('partials/header'); ?>

<div id="pan">
<div class="inner">
<a href="/"><span class="home">トップページ</span></a> >
<a href="/cluster/">AI比較クラスタ索引</a> >
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
<br>
<br>
</p>


<?php get_template_part('partials/cluster/work-style-career'); ?>
<?php get_template_part('partials/cluster/work-style-wage'); ?>


<div class="back-btn">
<a href="/cluster/">AI比較クラスタ索引へ戻る</a>
</div>
</div>

<div style="clear:both"></div>
</div>
</div>

<?php get_template_part('partials/footer'); ?>
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