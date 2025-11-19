<!DOCTYPE html>
<html lang="ja">
<head>
<?php
include_once("analyticstracking.php");
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php single_cat_title(); ?>｜<?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common102.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/style17.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts") ?>
<?php get_template_part("partials/css/pagenavi") ?>
<?php get_template_part("partials/css/post-index") ?>
</head>
<body>

<?php get_template_part('partials/header'); ?>

<div id="pan">
<div class="inner">
<a href="/"><span class="home">トップページ</span></a> > <a href="/blog/">ブログ</a> > <?php single_cat_title(); ?>
</div>
</div>

<div class="blog-main-img"></div>

<div id="wapper">
<div id="contents">

<h1 class="tag"><?php single_cat_title(); ?></h1>

<div id="main">
<ul class="post-index">
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
<?php if ( !wp_is_mobile() ) : ?>
<script type="text/javascript">
$(function () {
$('ul.post-index li').hover(function(){
    $("h2",this).css('color','#0069ff');
    $(".post_thumbnail img",this).css('transform','scale(1.1)');
}, function(){
    $("h2",this).css('color','#031b4e');
    $(".post_thumbnail img",this).css('transform','scale(1)');
});  
});
</script>
<?php endif; ?>

</body>
</html>