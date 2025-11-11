<!DOCTYPE html>
<html lang="ja">
<head>
<?php get_template_part("analyticstracking"); ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php single_cat_title(); ?>｜<?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common101.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/style17.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts") ?>
<style type="text/css">
#wapper{
  background-color: #FFFFFF;
}
h1{
    font-family: '游明朝','Yu Mincho',YuMincho,'Hiragino Mincho Pro',serif;
    margin: 0 0 25px 0;
    padding: 0;
    font-size: 36px;
    font-weight: bold;
    line-height: 36px;
    color:#031b4e;
}
h1 span{
    color: #1433d6;
}
ul.kihon-post{
    font-size:15px;
    line-height:24px;
    margin:0;
    padding:0 20px;
    width: 100%;
}
ul.kihon-post li{
	width:100%;
    margin: 0 0 40px 0;
}
ul.kihon-post li .kihon-post-title{
    overflow: hidden;
    margin: 0;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
}
ul.kihon-post li .kihon-post-title h2{
    font-weight: bold;
}
ul.kihon-post .item-time{
    font-size: 12px;
    background-image:url("/wp/wp-content/themes/aisiteru/images/icon/time_bl.png");
    background-repeat:no-repeat;
    background-size:12px auto;
    line-height:12px;
    padding-left:15px;
    background-position:left center;
    margin-bottom: 3px;
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
    h1{
        margin: 0 0 20px 0;
        font-size: 54px;
        line-height: 54px;
    }

ul.kihon-post{
width: 1100px;
height:auto;
margin:75px auto 0 auto;
padding:0;
}
ul.kihon-post li{
    position:static;
	width: 340px;
    height: 360px;
    float:left;
}
ul.kihon-post li .kihon-post-title h2{
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
ul.kihon-post li:nth-child(8),
ul.kihon-post li:nth-child(11),
ul.kihon-post li:nth-child(14),
ul.kihon-post li:nth-child(17),
ul.kihon-post li:nth-child(20){
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

<?php if ( !wp_is_mobile() ) : ?>
<script type="text/javascript">
$(function () {
$('ul.kihon-post li').hover(function(){
    $("h2",this).css('color','#0069ff');
    $(".kihon-post-thumb img",this).css('transform','scale(1.1)');
}, function(){
    $("h2",this).css('color','#031b4e');
    $(".kihon-post-thumb img",this).css('transform','scale(1)');
});  
});
</script>
<?php endif; ?>

</head>
<body>
<?php get_template_part('partials/header'); ?>

<div id="pan">
<div class="inner">
<a href="/"><span class="home">トップページ</span></a> > <a href="/basic">WEBのきほん</a>
</div>
</div>

<div class="blog-main-img"></div>

<div id="wapper">


<div id="contents">
<h1>WEBの<span>きほん</span></h1>
WEBサイトに関する基本的な情報をまとめました。これからWEBサイトを作りたいとお考えの方は、ぜひご覧ください。<br>
漠然としていた疑問がクリアになるかもしれません。

<?php
  $arg = array(
      'posts_per_page' => 100, // 表示する件数
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
                <h2><?php the_title(); ?></h2>
            </div>
        </a>
    </li><!-- .post End-->
<?php endforeach; ?>
<div style="clear:both;"></div>
</ul>

<?php
endif;
wp_reset_postdata();
?>

</div>
</div>
<?php get_template_part('partials/footer'); ?>
<?php wp_footer(); ?>
</body>
</html>