<?php
/*
Template Name:contact-thanks
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php get_template_part("analyticstracking"); ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common101.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/page.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/style17.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts") ?>
 <style type="text/css">  

@media only screen and (min-width: 680px) {

}
</style>   
</head>
<body>
<?php get_template_part('partials/header'); ?>
<div id="pan">
<div class="inner">
<a href="/"><span class="home">トップページ</span></a> > <a href="/contact">お問合せ</a></span>
</div>
</div>
<div class="page-main-img">Contact</div>
<div id="page-wapper">
<div id="page-contents">
<div class="">お問い合わせを受け付けました。</div>
ご連絡いただきありがとうございます。<br>
内容を確認の上、通常1〜2営業日以内にご返信差し上げます。<br>
今後ともよろしくお願い申し上げます。
</div>
</div>
<?php get_template_part('partials/footer'); ?>
<?php wp_footer(); ?>
</body>
</html>