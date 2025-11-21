<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common103.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/style17.css" type="text/css" />
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
<a href="/"><span class="home">トップページ</span></a>
</div>
</div>

<div id="wapper">
<!------------------------------------------------------------------------------------------------------------>
<!------------
https://memocarilog.info/wordpress/templatetug/3393
https://elearn.jp/wpman/function/get_posts.html
------------------------------------------------------------------------------------------------>
<?php
$num = mt_rand(1,4);
?>
<div id="top-main" style="background-image:url(<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/bg_page<?php echo $num; ?>.jpg);">
<div class="inner">
<ul id="picup">
<?php
//$postslist = get_posts('orderby=rand&include=32,61');
//$postslist = get_posts('numberposts=1&orderby=rand&category=5');
$postslist = get_posts('numberposts=1&orderby=rand');
//$postslistにget_postsで取得したデータを入れる
foreach ($postslist as $post) : setup_postdata($post);
//foreach文で繰り返し出力する
?> 
<li>
<a href="<?php the_permalink(); ?>">
<div class="post_thumbnail pc">
<?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('single-thumbnails'); ?>
    <?php else : ?>
        <img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
    <?php endif ; ?>
</div>
<div class="head">

<ul class="post-info">
<li class="time">
<?php
if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
?>
最終更新日:<time class="updated" datetime="<?php the_modified_date("Y-m-d H:i:s") ?>"><?php the_modified_date('Y年n月j日 l') ?></time>
<?php
}else{
?>
<time class="entry-date published" datetime="<?php echo get_the_date("Y-m-d H:i:s") ?>"><?php echo get_the_date('Y年n月j日 l') ?></time>
<?php
}
?>
</li>
<div class="sp" style="clear:both"></div>
<li class="cate pc">
<?php $cat = get_the_category(); ?>
<?php $cat = $cat[0]; ?>
<?php echo get_cat_name($cat->term_id); ?>
</li>

<li class="tag pc">
<?php
$post_tags = get_the_tags();
if($post_tags){
    foreach($post_tags as $tag) {
        echo $tag->name . ' ';
    }
}
?>
<div style="clear:both"></div>
</li>

<div style="clear:both"></div>
</ul>

<div class="post-title">
<h2><?php the_title(); ?></h2>
</div>

<?php
echo '<div class="post-content pc">';
if(mb_strlen($post->post_content,'UTF-8')>120){
	$content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 120,'UTF-8'));
	echo $content.'…';
}else{
	echo str_replace('\n', '', strip_tags($post->post_content));
}
echo '</div>';
?>
<!--https://saburo-design.com/5221/-->
<div class="post-author">
<div class="post-author-img"><?php echo get_avatar(get_the_author_meta( 'ID' ),30); ?></div>
<div class="post-author-name"><?php the_author(); ?></div>

<div style="clear:both"></div>
</div>
</div>


<div style="clear:both"></div>
</a>
</li><!-- .post -->
<?php endforeach; ?>
</ul>
</div>
</div>
<!------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------>
<div id="contents">
<div id="main">
<div id="main-info">
ダテナは、<strong>仙台市で働くWEBデザイナー</strong>が運営しています。WEB関連の話題はもちろんですが、宮城県、特に仙台に特化した地域情報も掲載しています。
</div>
<h1 class="new">お探しのページは見つかりませんでした。</h1>
大変申し訳ございません。こちらのURLの記事は削除されているか、存在しないページのようです。
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