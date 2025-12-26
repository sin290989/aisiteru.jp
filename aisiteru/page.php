<!DOCTYPE html>
<html lang="ja">
<head>
<?php get_template_part("analyticstracking"); ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php the_title(); ?>｜<?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common106.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/single27.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts") ?>
</head>

<body>
<?php get_template_part('partials/header'); ?>
<div id="pan">
<div class="inner">
<a href="/"><span class="home">トップページ</span></a> > <span class="now"><?php the_title(); ?></span>
</div>
</div>
<div id="page-title">
<div class="title"><?php echo $slug_name = $post->post_name; ?></div>
<div class="slug"><?php the_title(); ?></div>
</div>

<div id="wapper">
<div id="contents">

<div id="main">
<div id="post-single">
<h1 class="page"><?php the_title(); ?></h1>
<?php if(have_posts()): while(have_posts()):
the_post(); ?>
<div class="post">
<?php the_content(); ?>
</div><!-- .post -->
<?php endwhile; endif; ?>
</div>
</div><!-- #main -->

<div id="side">
<?php dynamic_sidebar('sidebar-1'); ?>
<?php get_template_part("partials/cat") ?>
<?php //get_template_part("partials/tag") ?>
</div>
<div style="clear:both;"></div>

</div><!-- #contents -->

</div><!-- #wapper -->
<?php get_template_part('partials/footer'); ?>
<?php wp_footer(); ?>
</body>
</html>