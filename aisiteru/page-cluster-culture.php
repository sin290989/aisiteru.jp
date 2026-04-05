<?php
/*
Template Name: Cluster Culture
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
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/cluster_structural20.css" type="text/css" />
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
<h1 class="h-index">文化</h1>

<p class="top-read">
このページは、AI比較クラスタの中でも、<strong>「文化」という構造領域に属するテーマ群を束ねた構造クラスタページ</strong>です。<br>
通過儀礼、価値観、慣習、メディア、娯楽といった観点から、文化がどのように社会の中で形成・共有・変容していくのかを、多角的な視点から整理しています。<br>
ここでは、恋愛、メディア、芸術、流行、スポーツなど、文化に関連するテーマクラスタへの入口を提供していきます。
</p>
<?php get_template_part('partials/cluster/culture-mlb'); ?>
<?php get_template_part('partials/cluster/culture-j-leagu'); ?>
<?php get_template_part('partials/cluster/culture-game'); ?>
<?php get_template_part('partials/cluster/culture-love'); ?>
<?php get_template_part('partials/cluster/culture-taiga-drama'); ?>

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