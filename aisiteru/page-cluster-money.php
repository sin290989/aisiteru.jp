<?php
/*
Template Name: Cluster Money
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
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/cluster_structural19.css" type="text/css" />
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
<h1 class="h-index">お金</h1>

<p class="top-read">
このページは、AI比較クラスタの中でも、<strong>「お金」という構造領域に属するテーマ群を束ねた構造クラスタページ</strong>です。<br>
通貨制度、金融設計、資産移転、税制、市場構造といった観点から、お金という概念がどのように社会の中で設計・運用されているのかを、多角的な視点から整理しています。<br>
ここでは、相続、デジタル通貨、金融技術、資産構造など、お金に関連するテーマクラスタへの入口を提供しています。
</p>

<?php get_template_part('partials/cluster/money-investment'); ?>
<?php get_template_part('partials/cluster/money-credit'); ?>
<?php get_template_part('partials/cluster/money-insurance'); ?>
<?php get_template_part('partials/cluster/money-consumption'); ?>
<?php get_template_part('partials/cluster/money-property'); ?>
<?php get_template_part('partials/cluster/money-inheritance'); ?>
<?php get_template_part('partials/cluster/money-tax-return'); ?>
<?php get_template_part('partials/cluster/money-digital-money'); ?>

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