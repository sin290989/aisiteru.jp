<?php
/*
Template Name: Cluster Money - Property
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
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/cluster_theme10.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts") ?>
<?php get_template_part("partials/css/pagenavi") ?>
</head>

<body>

<?php get_template_part('partials/header2'); ?>

<div id="pan">
<div class="inner">
<a href="/"><span class="home">トップページ</span></a>
>
<a href="/cluster/">クラスタ索引</a>
>
<a href="/cluster/money/">お金クラスタ</a>
>
<?php the_title(); ?>
</div>
</div>

<div id="wapper">
<div id="contents">

<div id="main-cluster">

<ul class="cluster-scope">
  <li>資産構造</li>
  <li>市場設計</li>
  <li>政策環境</li>
</ul>

<h1><?php the_title(); ?></h1>

<p class="read">
不動産は単なる資産保有ではなく、価格形成、市場流動性、政策誘導といった構造要素を内包する領域です。
本クラスタは、構造クラスタ「お金」の下位テーマとして、AI8社の視点から「不動産価格の形成要因」「所有と利用の関係」「税制と市場誘導」といった論点を構造的に比較した記事のみを収録しています。
正解や推奨を提示するためではなく、不動産が経済構造の中でどのような役割を担っているのかを読み解くための座標としてご利用ください。
</p>

<p class="cluster-rule">
このクラスタには、構造クラスタ「お金」に属する<strong>不動産</strong>テーマの記事を時系列で表示しています。
</p>

<div class="cluster-block">

<?php
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

// property タグ
$season_tag = get_term_by( 'slug', 'property', 'post_tag' );
$season_tag_id = $season_tag ? $season_tag->term_id : 0;

// index タグ
$index_tag = get_term_by( 'slug', 'index', 'post_tag' );
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// property ＋ index
$args = array(
'post_type'      => 'post',
'posts_per_page' => 15,
'tag__and'       => array( $season_tag_id, $index_tag_id ),
'orderby'        => 'date',
'order'          => 'DESC',
'paged'          => $paged,
);

$index_query = new WP_Query( $args );
?>

<ul class="post-index">

<?php if ( $index_query->have_posts() ) : ?>
<?php while ( $index_query->have_posts() ) : $index_query->the_post(); ?>

<li>
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
<?php echo str_replace("\n", '', strip_tags($post->post_content)); ?>
</p>
</div>

<div style="clear:both"></div>

</div>
</a>
</li>

<?php endwhile; ?>
<?php else : ?>
<li>「index」タグと「property」タグが付いた記事はまだありません。</li>
<?php endif; ?>

<div style="clear:both"></div>
</ul>

<?php
if ( function_exists( 'wp_pagenavi' ) ) {
wp_pagenavi( array( 'query' => $index_query ) );
}
?>

<?php wp_reset_postdata(); ?>

</div>

<div class="back-btn">
<a href="/cluster/money/">お金クラスタへ<span>戻る</span></a>
</div>

</div>

<div style="clear:both"></div>
</div>
</div>

<?php get_template_part('partials/footer2'); ?>
<?php wp_footer(); ?>
<?php get_template_part('partials/js/post-index_h2_3'); ?>
</body>
</html>