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
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/front18.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts"); ?>
<style type="text/css">

h1{
    padding-top:130px;
    font-size: 42px;
    line-height: 42px;
    font-weight: 700;
    padding-bottom:20px;
    color: #031b4e;
    text-align: center;
}
h1 span {
  color: #1433d6;
}

h1 a:hover{
    text-decoration: none;
}


.more-btn a {
    display: block;
    height: 40px;
    width: 200px;
    background-color: #1433d6;
    text-align: center;
    color: #FFFFFF;
    border-radius: 20px;
    transition-duration: 0.2s;
    background-image: url("/wp/wp-content/themes/aisiteru/images/icon/more_link_icon.png");
    background-size: 16px auto;
    background-position: right 15px center;
    background-repeat: no-repeat;
    margin: 40px auto 20px auto;
    line-height: 40px;
    font-weight: 600;
  }

  


@media only screen and (min-width: 680px) {
h1{
    padding-top:130px;
    font-size: 120px;
    line-height: 120px;
    padding-bottom:40px;
}

.more-btn a{
    margin: 0;
    position: absolute;
    height: 40px;
    width: 40px;
    background-color: #1433d6;
    top: 200px;
    right: -20px;
    border-radius: 50%;
    transition-duration: 0.2s;
    background-image: url("/wp/wp-content/themes/aisiteru/images/icon/more_link_icon.png");
    background-size: 45% auto;
    background-position: center center;
    background-repeat: no-repeat;
    text-decoration: none;
    transition: all 0.3s ease;
  }
  .more-btn a:hover{
    background-color: #0069ff;
  }
  .category-block.prediction-block .more-btn a {
    top: 400px;
  }

}
</style>
</head>
<body>

<?php get_template_part('partials/header'); ?>


<div id="wapper">
<div id="contents">

<h1><a href="/about"><span>多角</span>で読み解く</a></h1>

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


<div class="category-block sports-block">
<h2>スポーツ・格闘技</h2>
<div class="h2en">SPORTS</div>
<?php
//----------------------------------------------------
// ③ sports カテゴリ（indexタグ付き）3件
//----------------------------------------------------

// sports カテゴリ
$cat_sports = get_category_by_slug('sports');
$cat_sports_id = $cat_sports ? $cat_sports->term_id : 0;

// index タグ
$index_tag = get_term_by('slug', 'index', 'post_tag');
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// クエリパラメータ（sports）
$args_sports = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'cat'            => $cat_sports_id,
);

if ( $index_tag_id ) {
    $args_sports['tag__in'] = array( $index_tag_id );
}

$query_sports = new WP_Query($args_sports);
?>
<ul class="post-index-top">
    <?php if ( $query_sports->have_posts() ) : ?>
        <?php while ( $query_sports->have_posts() ) : $query_sports->the_post(); ?>
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
        <li>sports カテゴリの index タグ付き記事はありません。</li>
    <?php endif; wp_reset_postdata(); ?>
</ul>
<div class="more-btn"><a href="/category/sports/"><span class="visually-hidden">すべて見る</span></a></div>
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
      $("h3", this).css('color', '#0069ff');
      $(".post_thumbnail img", this).css('transform', 'scale(1.1)');
  }, function(){
      $("h3", this).css('color', '#031b4e');
      $(".post_thumbnail img", this).css('transform', 'scale(1)');
  });
});
</script>
<?php endif; ?>

</body>
</html>
