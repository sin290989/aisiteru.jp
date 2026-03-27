<?php
/*
Template Name: Cluster
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
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common121.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts") ?>

<style type="text/css">
#contents h1{
    color: var(--color-primary);
    font-family: "Noto Sans JP", sans-serif;
    font-weight: 700;
}

#contents h2{
    color: var(--color-primary);
    font-family: "Noto Sans JP", sans-serif;
    font-weight: 700;
}
.h-index{
    font-size: 36px;
    line-height: 36px;
    font-weight: 700;
    padding: 60px 20px 20px 20px;
    color: var(--color-secondary);
}
.h-index span.cluster {
    color: var(--color-primary);
}

#contents h2.h-structural{
    font-size: 28px;
    line-height: 28px;
   margin-bottom: 10px;
color: var(--color-secondary);
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
    background-color: var(--color-secondary);
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


    #contents h2.h-structural{
        font-size: 54px;
        line-height: 54px;
        margin-bottom: 20px;
    }
    #contents h2.h-structural span{
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
  padding: 20px 10px 0 10px;
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
    padding:50px 50px 0px 50px;
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
}
ul.post-index .head .h-post-title{
    font-family: 'Noto Sans JP', sans-serif;
    font-weight: 700;
    font-style: normal;
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
  color: var(--color-text);
}

  .more-btn a {
    display: block;
    width: 100%;
    text-align: center;
    transition-duration: 0.2s;
    background-image: url("/wp/wp-content/themes/aisiteru/images/icon/more_link_icon.png");
    background-size: 16px auto;
    background-position: right 15px center;
    background-repeat: no-repeat;
    margin: 30px auto 20px auto;
    font-weight: 600;
    border-top:1px solid #EEEEEE;
    font-size: 16px;
    padding-top: 15px;
    padding-bottom: 15px;
  }
/*
.more-btn a {
    display: block;
    height: 40px;
    width: 200px;
    background-color: var(--color-link);
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
    */


@media only screen and (min-width: 680px) {

#contents {
    width:900px;
    margin: 0 auto;
    padding: 100px 0 180px 0;
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

.more-btn a {
    margin: 10px auto 0 auto;
     font-size: 17px;
     font-weight: 700;
     padding-top: 15px;
    padding-bottom: 25px;
  }
  .more-btn a:hover{
     text-decoration: none;
  }
  .category-block.prediction-block .more-btn a {
    top: 400px;
  }


}
</style>



</head>
<body>

<?php get_template_part('partials/header2'); ?>

<div id="pan">
<div class="inner">
<a href="/"><span class="home">トップページ</span></a> > <?php the_title(); ?>
</div>
</div>

<div id="wapper">
<div id="contents">

<div id="main-cluster">

<!--<h1 class="h-index"><span class="ai">AI</span>比較<span class="cluster">クラスタ</span>索引</span></h1>-->
<h1 class="h-index"><span class="cluster">クラスタ</span>索引</span></h1>
<p class="top-read">
このページは、特定のテーマに対して複数のAIが行った考察記事を、<strong>「分野ごとのクラスタ」という構造で束ねた索引ページ</strong>です。<br>
正解や結論を示すことを目的とせず、制度・歴史・文化・社会といった異なる座標軸から、同じ問いがどのように切り取られているかを比較できるよう設計されています。<br>
関心のあるクラスタを入口として、思考の視点がどのように分岐していくかをご覧ください。
<br>
</p>

<?php get_template_part('partials/cluster/money'); ?>
<?php get_template_part('partials/cluster/work-style'); ?>
<?php get_template_part('partials/cluster/event'); ?>
<?php get_template_part('partials/cluster/finance'); ?>
<?php get_template_part('partials/cluster/exam-education'); ?>
<?php get_template_part('partials/cluster/cabinet-dissolution'); ?>
<?php get_template_part('partials/cluster/taiga-drama'); ?>
<?php get_template_part('partials/cluster/game'); ?>
<?php get_template_part('partials/cluster/love'); ?>

</div>

<div style="clear:both"></div>
</div>
</div>

<?php get_template_part('partials/footer2'); ?>
<?php wp_footer(); ?>
<?php get_template_part('partials/js/post-index_h3_3'); ?>
</body>
</html>