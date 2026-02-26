<?php
/*
Template Name: Cluster Cabinet Dissolution
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
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common111.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/cluster_theme.css" type="text/css" />
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
<?php the_title(); ?>
</div>
</div>

<div id="wapper">
<div id="contents">

<div id="main-cluster">

<ul class="cluster-scope">
  <li>解散制度</li>
  <li>戦略判断</li>
  <li>民主正統性</li>
</ul>

<h1><?php the_title(); ?></h1>

<p class="read">
内閣解散や解散総選挙は、「勝負の一手」や「政権の戦略」として語られることが多い一方で、制度として民主主義の中にどのように組み込まれてきたのかは、必ずしも整理されていません。
このクラスタでは、AI8社の視点から「解散権の位置づけ」「民意との関係」「制度と慣例の境界」といった論点を構造的に比較した記事のみを収録しています。
出来事の是非を判断するためではなく、政治と社会の距離感を別の角度から捉え直すための座標としてご利用ください。
</p>

<p class="cluster-rule">
  このクラスタには、<strong>内閣解散・解散総選挙</strong>に関する最新の投稿を時系列で表示しています。
</p>

<div class="cluster-block">

<?php
// ★ ページ番号取得（PageNavi用）
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

// (index + cabinet-dissolution) OR (index + dissolution-election)
$args = array(
  'post_type'      => 'post',
  'posts_per_page' => 15,
  'orderby'        => 'date',
  'order'          => 'DESC',
  'paged'          => $paged,   // ★追加
  'tax_query'      => array(
    'relation' => 'OR',

    array(
      'relation' => 'AND',
      array(
        'taxonomy' => 'post_tag',
        'field'    => 'slug',
        'terms'    => 'index',
      ),
      array(
        'taxonomy' => 'post_tag',
        'field'    => 'slug',
        'terms'    => 'cabinet-dissolution',
      ),
    ),

    array(
      'relation' => 'AND',
      array(
        'taxonomy' => 'post_tag',
        'field'    => 'slug',
        'terms'    => 'index',
      ),
      array(
        'taxonomy' => 'post_tag',
        'field'    => 'slug',
        'terms'    => 'dissolution-election',
      ),
    ),
  ),
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
<?php echo str_replace("\n", '', strip_tags(get_the_content())); ?>
</p>
</div>

<div style="clear:both"></div>
</div>
</a>
</li>

<?php endwhile; ?>
<?php else : ?>
<li>該当する記事がまだありません。</li>
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
<a href="/cluster/">クラスタ索引へ戻る</a>
</div>

</div>

<div style="clear:both"></div>
</div>
</div>

<?php get_template_part('partials/foote2'); ?>
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
