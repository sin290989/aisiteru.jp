<!DOCTYPE html>
<html lang="ja">
<head>
<?php get_template_part("analyticstracking"); ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php single_cat_title(); ?>｜<?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common102.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/style17.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts") ?>
<?php get_template_part("partials/css/pagenavi") ?>
<?php get_template_part("partials/css/post-index") ?>
</head>
<body>

<?php get_template_part('partials/header'); ?>

<div id="pan">
<?php
// Tech Notes用のカテゴリ取得
$taxonomy = 'tech_category'; // カスタムタクソノミー「tech_category」を指定
$terms = get_the_terms(get_the_ID(), $taxonomy);

if ($terms && !is_wp_error($terms)) {
    $child_term = null;

    // 子カテゴリを探す
    foreach ($terms as $term) {
        if ($term->parent !== 0) { // 親カテゴリではない場合（親カテゴリのIDが0以外）
            $child_term = $term;
            break; // 最初の子カテゴリを取得して終了
        }
    }

    // 子カテゴリが見つかった場合の処理
    if ($child_term) {
        $catid = $child_term->term_id; // 子カテゴリID
        $catname = $child_term->name; // 子カテゴリ名
        $catslug = $child_term->slug; // 子カテゴリスラッグ
        $link = get_term_link($catid, $taxonomy); // 子カテゴリURL
    } else {
        $catid = null;
        $catname = '';
        $catslug = '';
        $link = '#'; // 子カテゴリがない場合のデフォルトリンク
    }
} else {
    $catid = null;
    $catname = '';
    $catslug = '';
    $link = '#'; // カテゴリがない場合のデフォルトリンク
}
?>
<div class="inner">
<a href="/"><span class="home">トップページ</span></a> > <a href="/tech/">制作ブログ</a> > <a href="<?php echo $link; ?>"><?php echo $catname; ?></a>
</div>
</div>

<div class="blog-main-img"></div>

<div id="wapper">
<div id="contents">
<h1 class="cate"><?php single_cat_title(); ?></h1>

<div id="main">
<ul class="post-index">
<?php if (have_posts()): while (have_posts()): the_post(); ?>

<li>
    <?php
    // カスタムタクソノミー 'tech_category' の取得
    $taxonomy = 'tech_category';
    $terms = get_the_terms(get_the_ID(), $taxonomy);
    if ($terms && !is_wp_error($terms)) {
        $term = $terms[0]; // 最初のカテゴリを取得
        $cat_name = $term->name; // カテゴリ名
        $cat_link = get_term_link($term->term_id, $taxonomy); // カテゴリリンク
    } else {
        $cat_name = '未分類';
        $cat_link = '#'; // デフォルトリンク
    }
    ?>

    <div class="post-author">
        <div class="post-author-img"><?php echo get_avatar(get_the_author_meta('ID'), 30); ?></div>
        <div class="post-author-name"><?php the_author(); ?></div>
    </div>

    <a href="<?php the_permalink(); ?>">
        <!-- サムネイル右側画像 -->
        <div class="post_thumbnail">
            <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('single-thumbnails'); ?>
            <?php else: ?>
                <img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
            <?php endif; ?>
        </div>
        <!-- サムネイル右側画像 -->

        <!-- サムネイル左側 -->
        <div class="head">
            <div class="post-dates">
                <?php
                if (get_the_time('U') !== get_the_modified_time('U')) {
                    echo '<time class="updated" datetime="' . get_the_modified_date("Y-m-d H:i:s") . '">' . get_the_modified_date('Y.m.d') . '</time>';
                } else {
                    echo '<time class="entry-date published" datetime="' . get_the_date("Y-m-d H:i:s") . '">' . get_the_date('Y.m.d') . '</time>';
                }
                ?>
            </div>

            <div class="post-title"><h2><span><?php the_title(); ?></span></h2></div>

            <div class="post-content pc">
                <p>
                    <?php echo str_replace('\n', '', strip_tags($post->post_content)); ?>
                </p>
            </div>

            <div style="clear:both"></div>
        </div>
    </a>
</li>

<?php endwhile; endif; ?>

    <div style="clear:both"></div>
</ul>

<?php wp_pagenavi(); ?>
</div>

<div id="side">
<?php get_template_part("partials/side-tech") ?>
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