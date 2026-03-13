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
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common121.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/cluster_structural9.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts") ?>
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
<h1 class="h-index">働き方</h1>

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
<?php get_template_part('partials/cluster/work-style-ai-work'); ?>
<?php get_template_part('partials/cluster/work-style-b2b-saas'); ?>



<div class="back-btn">
<a href="/cluster/">クラスタ索引へ<span>戻る</span></a>
</div>
</div>

<div style="clear:both"></div>
</div>
</div>

<?php get_template_part('partials/footer2'); ?>
<?php wp_footer(); ?>
<?php get_template_part('partials/js/post-index_h3_3'); ?>
</body>
</html>