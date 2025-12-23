<?php
// front-page.php などとして保存
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php get_template_part("analyticstracking"); ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php bloginfo('name'); ?>｜<?php bloginfo('description'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common104.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/front17.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts"); ?>
<style type="text/css">







@media only screen and (min-width: 680px) {

}
</style>
</head>
<body>

<?php get_template_part('partials/header'); ?>


<div id="wapper">
<div id="contents">

<h1>
<a href="/about">
<div class="catch">
<div class="catch1">「<span>多角</span>」</div>
<div class="catch2">で読み解く</div>
<div class="with"><span>with</span> AISITERU？</div>
</div>
</a>
</h1>


<div id="main-top">
<div class="category-block prediction-block">
<h2>AI予測・時事</h2>
<div class="h2en">PREDICTION</div>
<?php
//----------------------------------------------------
// ① prediction カテゴリ（indexタグ付き）3件
//----------------------------------------------------

// prediction カテゴリ
$cat_prediction = get_category_by_slug('prediction');
$cat_prediction_id = $cat_prediction ? $cat_prediction->term_id : 0;

// index タグ
$index_tag = get_term_by('slug', 'index', 'post_tag');
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// クエリパラメータ（prediction）
$args_prediction = array(
    'post_type'      => 'post',
    'posts_per_page' => 6,
    'cat'            => $cat_prediction_id,
);

if ( $index_tag_id ) {
    $args_prediction['tag__in'] = array( $index_tag_id );
}

$query_prediction = new WP_Query($args_prediction);
?>
<ul class="post-index-top">
    <?php if ( $query_prediction->have_posts() ) : ?>
        <?php while ( $query_prediction->have_posts() ) : $query_prediction->the_post(); ?>
        <li>
            <div class="inner">

            <a href="<?php the_permalink(); ?>">
            <div class="post_thumbnail">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('single-thumbnails'); ?>
            <?php else : ?>
                <img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
            <?php endif; ?>
            </div>

            <div class="head">
                <div class="post-dates">
                    <?php if ( get_the_time('U') !== get_the_modified_time('U') ) : ?>
                        <time class="updated" datetime="<?php the_modified_date('Y-m-d H:i:s'); ?>"><?php the_modified_date('Y.m.d'); ?></time>
                    <?php else : ?>
                        <time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                    <?php endif; ?>
                </div>

                <div class="post-title">
                    <h3><span><?php the_title(); ?></span></h3>
                </div>

                <div class="post-content pc">
                    <p><?php echo str_replace('\n', '', strip_tags( get_the_content() )); ?></p>
                </div>
                <div style="clear:both"></div>
            </div>
            </a>
           </div>
        </li>
        <?php endwhile; ?>
    <?php else : ?>
        <li>prediction カテゴリの index タグ付き記事はありません。</li>
    <?php endif; wp_reset_postdata(); ?>
</ul>
<div class="more-btn"><a href="/category/prediction/"><span class="visually-hidden">すべて見る</span></a></div>
</div>



<div class="category-block regional-block">
<h2>地域・社会</h2>
<div class="h2en">REGIONAL</div>
<?php
//----------------------------------------------------
// ③ regional カテゴリ（indexタグ付き）3件
//----------------------------------------------------

// regional カテゴリ
$cat_regional = get_category_by_slug('regional');
$cat_regional_id = $cat_regional ? $cat_regional->term_id : 0;

// index タグ
$index_tag = get_term_by('slug', 'index', 'post_tag');
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// クエリパラメータ（regional）
$args_regional = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'cat'            => $cat_regional_id,
);

if ( $index_tag_id ) {
    $args_regional['tag__in'] = array( $index_tag_id );
}

$query_regional = new WP_Query($args_regional);
?>
<ul class="post-index-top">
    <?php if ( $query_regional->have_posts() ) : ?>
        <?php while ( $query_regional->have_posts() ) : $query_regional->the_post(); ?>
        <li>
            <div class="inner">
            <a href="<?php the_permalink(); ?>">
            <div class="post_thumbnail">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('single-thumbnails'); ?>
            <?php else : ?>
                <img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
            <?php endif; ?>
            </div>

            <div class="head">
                <div class="post-dates">
                    <?php if ( get_the_time('U') !== get_the_modified_time('U') ) : ?>
                        <time class="updated" datetime="<?php the_modified_date('Y-m-d H:i:s'); ?>"><?php the_modified_date('Y.m.d'); ?></time>
                    <?php else : ?>
                        <time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                    <?php endif; ?>
                </div>

                <div class="post-title">
                    <h3><span><?php the_title(); ?></span></h3>
                </div>

                <div class="post-content pc">
                    <p><?php echo str_replace('\n', '', strip_tags( get_the_content() )); ?></p>
                </div>
                <div style="clear:both"></div>
            </div>
            </a>
            </div>
        </li>
        <?php endwhile; ?>
    <?php else : ?>
        <li>regional カテゴリの index タグ付き記事はありません。</li>
    <?php endif; wp_reset_postdata(); ?>
</ul>
<div class="more-btn"><a href="/category/regional/"><span class="visually-hidden">すべて見る</span></a></div>
</div>



<div class="category-block business-block">
<h2>ビジネス・キャリア</h2>
<div class="h2en">BUSINESS</div>
<?php
//----------------------------------------------------
// ② business カテゴリ（indexタグ付き）3件
//----------------------------------------------------

// business カテゴリ
$cat_business = get_category_by_slug('business');
$cat_business_id = $cat_business ? $cat_business->term_id : 0;

// クエリパラメータ（business）
$args_business = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'cat'            => $cat_business_id,
);

if ( $index_tag_id ) {
    $args_business['tag__in'] = array( $index_tag_id );
}

$query_business = new WP_Query($args_business);
?>
<ul class="post-index-top">
    <?php if ( $query_business->have_posts() ) : ?>
        <?php while ( $query_business->have_posts() ) : $query_business->the_post(); ?>
        <li>
        <div class="inner">

            <a href="<?php the_permalink(); ?>">
            <div class="post_thumbnail">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('single-thumbnails'); ?>
            <?php else : ?>
                <img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
            <?php endif; ?>
            </div>

            <div class="head">
                <div class="post-dates">
                    <?php if ( get_the_time('U') !== get_the_modified_time('U') ) : ?>
                        <time class="updated" datetime="<?php the_modified_date('Y-m-d H:i:s'); ?>"><?php the_modified_date('Y.m.d'); ?></time>
                    <?php else : ?>
                        <time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                    <?php endif; ?>
                </div>

                <div class="post-title">
                    <h3><span><?php the_title(); ?></span></h3>
                </div>

                <div class="post-content pc">
                    <p><?php echo str_replace('\n', '', strip_tags( get_the_content() )); ?></p>
                </div>
                <div style="clear:both"></div>
            </div>
            </a>
                    </div>
        </li>
        <?php endwhile; ?>
    <?php else : ?>
        <li>business カテゴリの index タグ付き記事はありません。</li>
    <?php endif; wp_reset_postdata(); ?>
</ul>
<div class="more-btn"><a href="/category/business/"><span class="visually-hidden">すべて見る</span></a></div>
</div>


<div class="category-block culture-block">
<h2>創作・エンタメ</h2>
<div class="h2en">CULTURE</div>
<?php
//----------------------------------------------------
// ③ culture カテゴリ（indexタグ付き）3件
//----------------------------------------------------

// culture カテゴリ
$cat_culture = get_category_by_slug('culture');
$cat_culture_id = $cat_culture ? $cat_culture->term_id : 0;

// index タグ（上で取得済みの場合は不要ですが、安全のため再利用）
$index_tag = get_term_by('slug', 'index', 'post_tag');
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// クエリパラメータ（culture）
$args_culture = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'cat'            => $cat_culture_id,
);

if ( $index_tag_id ) {
    $args_culture['tag__in'] = array( $index_tag_id );
}

$query_culture = new WP_Query($args_culture);
?>
<ul class="post-index-top">
    <?php if ( $query_culture->have_posts() ) : ?>
        <?php while ( $query_culture->have_posts() ) : $query_culture->the_post(); ?>
        <li>
       
            <div class="inner">
            <a href="<?php the_permalink(); ?>">
            <div class="post_thumbnail">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('single-thumbnails'); ?>
            <?php else : ?>
                <img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
            <?php endif; ?>
            </div>

            <div class="head">
                <div class="post-dates">
                    <?php if ( get_the_time('U') !== get_the_modified_time('U') ) : ?>
                        <time class="updated" datetime="<?php the_modified_date('Y-m-d H:i:s'); ?>"><?php the_modified_date('Y.m.d'); ?></time>
                    <?php else : ?>
                        <time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                    <?php endif; ?>
                </div>

                <div class="post-title">
                    <h3><span><?php the_title(); ?></span></h3>
                </div>

                <div class="post-content pc">
                    <p><?php echo str_replace('\n', '', strip_tags( get_the_content() )); ?></p>
                </div>
                <div style="clear:both"></div>
            </div>
            </a>
                    </div>
        </li>
        <?php endwhile; ?>
    <?php else : ?>
        <li>culture カテゴリの index タグ付き記事はありません。</li>
    <?php endif; wp_reset_postdata(); ?>
</ul>
<div class="more-btn"><a href="/category/culture/"><span class="visually-hidden">すべて見る</span></a></div>
</div>


<div class="category-block life-block">
<h2>実用・ライフ</h2>
<div class="h2en">LIFE</div>
<?php
//----------------------------------------------------
// ④ life カテゴリ（indexタグ付き）3件
//----------------------------------------------------

// life カテゴリ
$cat_life = get_category_by_slug('life');
$cat_life_id = $cat_life ? $cat_life->term_id : 0;

// index タグ（上で取得済みだが再利用）
$index_tag = get_term_by('slug', 'index', 'post_tag');
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// クエリパラメータ（life）
$args_life = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'cat'            => $cat_life_id,
);

if ( $index_tag_id ) {
    $args_life['tag__in'] = array( $index_tag_id );
}

$query_life = new WP_Query($args_life);
?>
<ul class="post-index-top">
    <?php if ( $query_life->have_posts() ) : ?>
        <?php while ( $query_life->have_posts() ) : $query_life->the_post(); ?>
        <li>
       
            <div class="inner">
            <a href="<?php the_permalink(); ?>">
            <div class="post_thumbnail">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('single-thumbnails'); ?>
            <?php else : ?>
                <img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
            <?php endif; ?>
            </div>

            <div class="head">
                <div class="post-dates">
                    <?php if ( get_the_time('U') !== get_the_modified_time('U') ) : ?>
                        <time class="updated" datetime="<?php the_modified_date('Y-m-d H:i:s'); ?>"><?php the_modified_date('Y.m.d'); ?></time>
                    <?php else : ?>
                        <time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                    <?php endif; ?>
                </div>

                <div class="post-title">
                    <h3><span><?php the_title(); ?></span></h3>
                </div>

                <div class="post-content pc">
                    <p><?php echo str_replace('\n', '', strip_tags( get_the_content() )); ?></p>
                </div>
                <div style="clear:both"></div>
            </div>
            </a>
                    </div>
        </li>
        <?php endwhile; ?>
    <?php else : ?>
        <li>life カテゴリの index タグ付き記事はありません。</li>
    <?php endif; wp_reset_postdata(); ?>
</ul>
<div class="more-btn"><a href="/category/life/"><span class="visually-hidden">すべて見る</span></a></div>
</div>


<div class="category-block technology-block">
<h2>技術・倫理</h2>
<div class="h2en">TECHNOLOGY</div>
<?php
//----------------------------------------------------
// ⑤ technology カテゴリ（indexタグ付き）3件
//----------------------------------------------------

// technology カテゴリ
$cat_technology = get_category_by_slug('technology');
$cat_technology_id = $cat_technology ? $cat_technology->term_id : 0;

// index タグ
$index_tag = get_term_by('slug', 'index', 'post_tag');
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// クエリパラメータ（technology）
$args_technology = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'cat'            => $cat_technology_id,
);

if ( $index_tag_id ) {
    $args_technology['tag__in'] = array( $index_tag_id );
}

$query_technology = new WP_Query($args_technology);
?>
<ul class="post-index-top">
    <?php if ( $query_technology->have_posts() ) : ?>
        <?php while ( $query_technology->have_posts() ) : $query_technology->the_post(); ?>
        <li>
            <div class="inner">

            <a href="<?php the_permalink(); ?>">
            <div class="post_thumbnail">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('single-thumbnails'); ?>
            <?php else : ?>
                <img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
            <?php endif; ?>
            </div>

            <div class="head">
                <div class="post-dates">
                    <?php if ( get_the_time('U') !== get_the_modified_time('U') ) : ?>
                        <time class="updated" datetime="<?php the_modified_date('Y-m-d H:i:s'); ?>"><?php the_modified_date('Y.m.d'); ?></time>
                    <?php else : ?>
                        <time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                    <?php endif; ?>
                </div>

                <div class="post-title">
                    <h3><span><?php the_title(); ?></span></h3>
                </div>

                <div class="post-content pc">
                    <p><?php echo str_replace('\n', '', strip_tags( get_the_content() )); ?></p>
                </div>
                <div style="clear:both"></div>
            </div>
            </a>
                    </div>
        </li>
        <?php endwhile; ?>
    <?php else : ?>
        <li>technology カテゴリの index タグ付き記事はありません。</li>
    <?php endif; wp_reset_postdata(); ?>
</ul>
<div class="more-btn"><a href="/category/technology/"><span class="visually-hidden">すべて見る</span></a></div>
</div>


<div class="category-block history-block">
<h2>歴史・ミステリー</h2>
<div class="h2en">HISTORY</div>
<?php
//----------------------------------------------------
// ⑥ history カテゴリ（indexタグ付き）3件
//----------------------------------------------------

// history カテゴリ
$cat_history = get_category_by_slug('history');
$cat_history_id = $cat_history ? $cat_history->term_id : 0;

// index タグ（再利用）
$index_tag = get_term_by('slug', 'index', 'post_tag');
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// クエリパラメータ（history）
$args_history = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'cat'            => $cat_history_id,
);

if ( $index_tag_id ) {
    $args_history['tag__in'] = array( $index_tag_id );
}

$query_history = new WP_Query($args_history);
?>
<ul class="post-index-top">
    <?php if ( $query_history->have_posts() ) : ?>
        <?php while ( $query_history->have_posts() ) : $query_history->the_post(); ?>
        <li>
       
            <div class="inner">
            <a href="<?php the_permalink(); ?>">
            <div class="post_thumbnail">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('single-thumbnails'); ?>
            <?php else : ?>
                <img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
            <?php endif; ?>
            </div>

            <div class="head">
                <div class="post-dates">
                    <?php if ( get_the_time('U') !== get_the_modified_time('U') ) : ?>
                        <time class="updated" datetime="<?php the_modified_date('Y-m-d H:i:s'); ?>">
                            <?php the_modified_date('Y.m.d'); ?>
                        </time>
                    <?php else : ?>
                        <time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>">
                            <?php echo get_the_date('Y.m.d'); ?>
                        </time>
                    <?php endif; ?>
                </div>

                <div class="post-title">
                    <h3><span><?php the_title(); ?></span></h3>
                </div>

                <div class="post-content pc">
                    <p><?php echo str_replace('\n', '', strip_tags( get_the_content() )); ?></p>
                </div>

                <div style="clear:both"></div>
            </div>
            </a>
                    </div>
        </li>
        <?php endwhile; ?>
    <?php else : ?>
        <li>history カテゴリの index タグ付き記事はありません。</li>
    <?php endif; wp_reset_postdata(); ?>
</ul>
<div class="more-btn"><a href="/category/history/"><span class="visually-hidden">すべて見る</span></a></div>
</div>
</div>
</div>

</div>
<?php get_template_part('partials/footer'); ?>
<?php wp_footer(); ?>
<?php if ( ! wp_is_mobile() ) : ?>
<script type="text/javascript">
jQuery(function ($) {
  $('ul.post-index-top li').hover(function(){
      $("h2", this).css('color', '#0069ff');
      $(".post_thumbnail img", this).css('transform', 'scale(1.1)');
  }, function(){
      $("h2", this).css('color', '#031b4e');
      $(".post_thumbnail img", this).css('transform', 'scale(1)');
  });
});
</script>
<?php endif; ?>

</body>
</html>
