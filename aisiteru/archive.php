<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php single_cat_title(); ?>｜<?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common103.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/style17.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts") ?>
<?php include_once("partials/css/pagenavi.php") ?>
<style type="text/css">

ul.post li{
    width: 100%;
    overflow:hidden;
    margin-bottom: 10px;
    position: relative;
    padding-bottom: 30px;
    border-bottom:1px solid #EEEEEE;
}
/*左側
-------------------------------------------------------*/
ul.post .post_thumbnail{
	width:46%;
    float: left;
}
ul.post .post_thumbnail img{
	width:100%;
	height:auto;
	vertical-align:bottom;
    padding: 0;
    margin-bottom: 0;
    border-radius: 3px;
}

/*右側
-------------------------------------------------------*/
ul.post .head{
    width:52%;
    float: right;
    padding-top: 5px;
    color: #46526f;
}
ul.post .head h2{
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
    padding-top: 5px;
}
ul.post .head .post-dates{
	font-size: 12px;
	background-image:url(/wp/wp-content/themes/aisiteru/images/icon/time_bl.png);
	background-repeat:no-repeat;
	background-size:12px auto;
    background-position: left 7px;
	padding: 0 0 0 16px;
	margin-bottom:5px;
}
   
/*post-author
-------------------------------------------------------*/
ul.post li .post-author{
    position: absolute;
    bottom:10px;
    left:10px;
    z-index: 79;
    width: 50%;
}
ul.post li .post-author .post-author-img{
    float: none;
    overflow:auto;
    width:30px;
	height:30px;
    margin-left:0;
	border-radius:50%;
	overflow:hidden;
    box-sizing: border-box;
    border:1px solid #CCCCCC;
    margin-bottom: 0;
    float: left;
}
ul.post li .post-author .post-author-img img {
    width:100%;
	height:auto;
}

ul.post li .post-author .post-author-name{
    font-size: 8px;
    text-align: center;
    width: 50px;
    font-weight: bold;
    line-height: 8px;
    float: left;
    width: auto;
    padding-top: 18px;
    margin-left: 5px;
    letter-spacing: 0;
}

@media only screen and (min-width: 680px) {
ul.post{
    background-color: #FFFFFF;
    padding: 50px;
    border-radius: 5px;
}
ul.post li:nth-child(odd){
    width: 48%;
    float: left;
    overflow:hidden;
    height: 425px;
    margin-bottom: 15px;
    padding-bottom: 0;
    border-bottom: none;
}

ul.post li:nth-child(even){
    width: 48%;
    float: right;
    height: 425px;
    overflow:hidden;
    margin-bottom: 15px;
    padding-bottom: 0;
    border-bottom: none;
}

ul.post li:nth-child(9),
ul.post li:nth-child(10){
    margin-bottom: 0;
    height: 400px;
}
 
/*上部
-------------------------------------------------------*/
ul.post .post_thumbnail{
	width:100%;
	margin-bottom:15px;
    overflow: hidden;
}
ul.post a img{
    transition-duration: 0.3s;
}
/*下部
-------------------------------------------------------*/
ul.post .head{
	width:100%;
}
ul.post .head h2{
	font-size:16px;
	background-image:none;
	border:none;
	margin:0;
	padding:0;
	height:auto;
    padding-top: 5px;
    margin-bottom: 10px;
    line-height: 24px;
    transition-duration: 0.3s;
    overflow: hidden;
}

ul.post .head h2 span{
    margin: 0;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
}

ul.post .head .post-content{
    overflow: hidden;
}
ul.post .head .post-content p {
    font-size:13px;
    margin: 0;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
}

/*post-author
-------------------------------------------------------*/
ul.post li .post-author{
    position: absolute;
    bottom:auto;
    left:auto;
    top:190px;
    right:10px;
    text-align: center;
    width: 50px;
    z-index: 79;
    width: 60px;
}
ul.post li .post-author .post-author-img{
    float: none;
    overflow:auto;
    width:40px;
	height:40px;
    margin-left: 10px;
	border-radius:50%;
	overflow:hidden;
    box-sizing: border-box;
    border:1px solid #CCCCCC; 
}
ul.post li .post-author .post-author-img img {
    width:100%;
	height:auto;
}

ul.post li .post-author .post-author-name{
    font-size: 9px;
    text-align: center;
    width: 60px;
    font-weight: bold;
    line-height: 9px;
    margin-top: 4px;
    padding-top:0;
    margin-left:0;
    letter-spacing: 0;
}

}
</style>
<?php if ( !wp_is_mobile() ) : ?>
<script type="text/javascript">
$(function () {
$('ul.post li').hover(function(){
    $("h2",this).css('color','#0069ff');
    $(".post_thumbnail img",this).css('transform','scale(1.1)');
}, function(){
    $("h2",this).css('color','#031b4e');
    $(".post_thumbnail img",this).css('transform','scale(1)');
});  
});
</script>
<?php endif; ?>

</head>
<body>
<?php get_template_part('partials/header'); ?>

<div id="pan">
<div class="inner">
<a href="/"><span class="home">トップページ</span></a> > <a href="/blog">ブログ</a>
</div>
</div>

<div class="blog-main-img"></div>

<div id="wapper">
<div id="contents">
<div id="main">
<ul class="post">
    <?php if(have_posts()): while(have_posts()):
    the_post(); ?>
        <li>
            <div class="post-author">
                <div class="post-author-img"><?php echo get_avatar(get_the_author_meta( 'ID' ),30); ?></div>
                <div class="post-author-name"><?php the_author(); ?></div>
            </div>

            <a href="<?php the_permalink(); ?>">
            <!--サムネイル右側画像-->
            <div class="post_thumbnail">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('single-thumbnails'); ?>
            <?php else : ?>
                <img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
            <?php endif ; ?>
            </div>
            <!--サムネイル右側画像-->

            <!--サムネイル左側-->
            <div class="head">
                <div class="post-dates">
                <?php if(get_the_time('U') !== get_the_modified_time('U')){ ?>
                    <time class="updated" datetime="<?php the_modified_date("Y-m-d H:i:s") ?>"><?php the_modified_date('Y.m.d') ?></time>
                <?php }else{ ?>
                    <time class="entry-date published" datetime="<?php echo get_the_date("Y-m-d H:i:s") ?>"><?php echo get_the_date('Y.m.d') ?></time>
                <?php } ?>
                </div>

                <div class="post-title"><h2><span><?php the_title(); ?></span></h2>
                </div>

                <div class="post-content pc">
                <p>
                <?php echo str_replace('\n', '', strip_tags($post->post_content)); ?>
                </p>
                </div>
                <div style="clear:both"></div>
                </div>
            </a>
        </li>
    <?php endwhile; endif; ?>
    <div style="clear:both"></div>
</ul>

<?php wp_pagenavi(); ?>
</div>

<div id="side">
    <?php dynamic_sidebar('sidebar-1'); ?>
    <?php get_template_part("partials/cat") ?>
    <?php get_template_part("partials/tag") ?>  
</div>
<div style="clear:both"></div>
</div>
</div>
<?php get_template_part('partials/footer'); ?>
<?php wp_footer(); ?>
</body>
</html>