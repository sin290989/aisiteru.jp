<!DOCTYPE html>
<html lang="ja">
<head>
<?php get_template_part("analyticstracking"); ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title>執筆者一覧｜<?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common111.css" type="text/css" />
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
<a href="/"><span class="home">トップページ</span></a> > 執筆者一覧
</div>
</div>

<div id="wapper">
<div id="contents">
<div id="main">
<h1 class="author">執筆者一覧</h1>
<!--https://on-ze.com/archives/5437-->
<?php $users = get_users( array('orderby'=>ID,'order'=>ASC) );; ?>
<div class="authors">
<?php foreach($users as $user) {
$uid = $user->ID; ?>

<div class="author-profile">
<div class="inner">
<div class="author-img2"><?php echo get_avatar( $uid ,76 ); ?></div>
<div class="author-info2">
<div class="author-name"><?php echo $user->display_name ; ?></div>
<div class="author-meta"><?php echo $user->user_description ; ?></div>
<div class="author-link"><a href="<?php echo get_bloginfo("url") . '/?author=' . $uid ?>"><?php echo $user->display_name ; ?>の記事一覧</a></div>
</div>
<div style="clear:both"></div>
</div>
</div>



<?php } ?>
</div>

</div><!-- #main -->


<div id="side">
<?php dynamic_sidebar('sidebar-1'); ?>
<?php get_template_part("partials/cat") ?>
<?php //get_template_part("partials/tag") ?>
</div>
<div style="clear:both"></div>


</div><!-- #contents -->


</div><!-- #wapper -->
<?php get_template_part('partials/footer'); ?>
<?php wp_footer(); ?>
</body>
</html>