<?php
/*
Template Name: Cluster Exam Education
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php wp_title(''); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common106.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/cluster3.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts") ?>
<?php get_template_part("partials/css/post-index") ?>
<?php get_template_part("partials/css/pagenavi") ?>

</head>
<body>

<?php get_template_part('partials/header'); ?>

<div id="pan">
<div class="inner">
<a href="/"><span class="home">トップページ</span></a>
>
<a href="/cluster/">AI比較クラスタ索引</a>
>
<?php the_title(); ?>
</div>
</div>

<div id="wapper">
<div id="contents">

<div id="main-cluster">

<ul class="cluster-scope">
<li>入試制度</li>
<li>評価と努力</li>
<li>公平性と選別</li>
</ul>

<h1><?php the_title(); ?></h1>

<p class="read">
受験は、人生の大きな分岐点のように感じられる一方で、努力の意味や制度の公平性がどのように成立しているのかは、必ずしも整理されていません。
このクラスタでは、AI8社の視点から「受験期の努力」「公平性の認識」「分岐点としての機能」といった論点を構造的に比較した記事のみを収録しています。
正解を示すためではなく、あなた自身の経験や社会の前提を別の角度から捉え直すための座標としてご利用ください。
</p>

<p class="cluster-rule">
このクラスタには、<strong>受験・教育制度</strong>に関する最新の投稿を時系列で表示しています。
</p>

<div class="cluster-block">

<?php
// ★ ページ番号取得（PageNavi用）
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

// season-exam タグ
$season_tag = get_term_by( 'slug', 'season-exam', 'post_tag' );
$season_tag_id = $season_tag ? $season_tag->term_id : 0;

// index タグ
$index_tag = get_term_by( 'slug', 'index', 'post_tag' );
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// season-exam ＋ index
$args = array(
'post_type'      => 'post',
'posts_per_page' => 15,
'tag__and'       => array( $season_tag_id, $index_tag_id ),
'orderby'        => 'date',
'order'          => 'DESC',
'paged'          => $paged,   // ★追加
);

$index_query = new WP_Query( $args );
?>

<ul class="post-index">

<?php if ( $index_query->have_posts() ) : ?>
<?php while ( $index_query->have_posts() ) : $index_query->the_post(); ?>

<li>

<?php $cat = get_the_category(); ?>
<?php $cat = $cat[0]; ?>

<a href="<?php the_permalink(); ?>">

<div class="post_thumbnail">
<?php if (has_post_thumbnail()) : ?>
<?php the_post_thumbnail('single-thumbnails'); ?>
<?php else : ?>
<img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
<?php endif ; ?>
</div>

<div class="head">

<div class="post-dates">
<time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>">
<?php echo get_the_date('Y.m.d'); ?>
</time>
</div>

<div class="post-title">
<h2><span><?php the_title(); ?></span></h2>
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

<?php endwhile; ?>
<?php else : ?>
<li>「index」タグが付いた記事はまだありません。</li>
<?php endif; ?>

<div style="clear:both"></div>
</ul>

<?php
// ★ PageNavi
if ( function_exists( 'wp_pagenavi' ) ) {
wp_pagenavi( array( 'query' => $index_query ) );
}
?>

<?php wp_reset_postdata(); ?>

</div>

<div class="back-btn">
<a href="/cluster/">AI比較クラスタ索引へ戻る</a>
</div>

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
