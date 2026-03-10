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
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common114.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts"); ?>
<style type="text/css">
/*==============================================================================================*/
/*catch*/
/*==============================================================================================*/
.catch {
  position: relative;
  width: 100%;
  height: 200px;
}

.catch1 {
  font-size: 60px;
  font-family: "游明朝", "Yu Mincho", YuMincho, "Hiragino Mincho Pro", serif;
  position: absolute;
  top: 30px;
  left: 0px;
  font-weight: bold;
  color:var(--color-secondary);
  z-index: 10;
}

.catch2 {
  font-size: 50px;
  font-family: "游明朝", "Yu Mincho", YuMincho, "Hiragino Mincho Pro", serif;
  position: absolute;
  top: 100px;
  left: 80px;
  font-weight: bold;
  color:var(--color-secondary);
  z-index: 10;
}

.with {
  position: absolute;
  font-size: 16px;
  color:var(--color-secondary);
  top: 140px;
  left: 175px;
  z-index: 20;
  color:var(--color-secondary);
  font-weight: bold;
}

.catch1 span,
.with span {
  color:var(--color-primary);
}
@media only screen and (min-width: 680px) {
  .catch {
    height: 200px;
  }

  .catch1 {
    font-size: 90px;
    top: 50px;
    left: -40px;
  }

  .catch2 {
    top: 50px;
    left: 300px;
    z-index: 10;
    font-size: 85px;
  }
  .with {
    font-size: 24px;
    top: 215px;
    left: 20px;
  }
}




.category-block {
  border-radius: 5px;
  padding: 10px 10px;
  position: relative;
  background-color: #ffffff;
  margin: 80px 10px 0 10px;
}

.category-block h2 {
  display: block;
  position: absolute;
  top: -30px;
  left: 15px;
  color: var(--color-secondary);
  font-size: 22px;
  font-family: "Noto Sans JP", sans-serif;
  font-weight: 700;
  z-index: 11;
}

.h2en {
  display: block;
  position: absolute;
  top: -30px;
  right: 7px;
  color: #ffffff;
  font-size: 34px;
  font-family: "Noto Sans JP", sans-serif;
  font-weight: 900;
  z-index: 10;
}
/*==============================================================================================*/
/*post-index-top*/
/*==============================================================================================*/
ul.post-index-top li {
  width: 100%;
  overflow: hidden;
  margin-bottom: 10px;
  position: relative;
  padding-bottom: 10px;
  border-bottom: 1px solid #eeeeee;
}

ul.post-index-top a {
  display: block;
  text-decoration: none;
}
ul.post-index-top li:last-child {
  border-bottom: none;
  padding-bottom: 0;
  margin-bottom: 0;
}
/*左側
-------------------------------------------------------*/
ul.post-index-top .post_thumbnail {
  width: 46%;
  float: left;
}

ul.post-index-top .post_thumbnail img {
  width: 100%;
  height: auto;
  vertical-align: bottom;
  padding: 0;
  margin-bottom: 0;
  border-radius: 3px;
}

/*右側
-------------------------------------------------------*/
/*右側
-------------------------------------------------------*/
ul.post-index-top .head {
  width: 52%;
  float: right;
  padding-top: 0px;
  color: #46526f;
}

ul.post-index-top .head h3 {
  font-family: "Noto Sans JP", sans-serif;
  font-weight: 700;
  font-style: normal;
  color: var(--color-secondary);
  font-size: 12px;
  line-height: 18px;
  background-image: none;
  border: none;
  margin: 0;
  padding: 0;
  height: auto;
  padding-top: 0px;
}
ul.post-index-top .head h3 span {
  margin: 0;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  overflow: hidden;
}
ul.post-index-top .head .post-dates {
  font-size: 12px;
  background-image: url(/wp/wp-content/themes/aisiteru/images/icon/time_bl.png);
  background-repeat: no-repeat;
  background-size: 12px auto;
  background-position: left center;
  padding: 0 0 0 16px;
  margin-bottom: 0px;
}



@media only screen and (min-width: 680px) {

  #contents{
    width: 900px;
  }
  .category-block {
    margin-top: 120px;
    background-color: #ffffff;
    border-radius: 30px;
    position: relative;
    box-sizing: border-box;
    padding: 50px;
  }

  .category-block.prediction-block {
    height: 900px;
  }

  .category-block h2 {
    display: block;
    position: absolute;
    top: -40px;
    left: 25px;
    color: var(--color-secondary);
    font-size: 28px;
    font-family: "Noto Sans JP", sans-serif;
    font-weight: 700;
  }

  .h2en {
    display: block;
    position: absolute;
    top: -40px;
    right: 25px;
    color: #ffffff;
    font-size: 70px;
    font-family: "Noto Sans JP", sans-serif;
    font-weight: 900;
  }


  ul.post-index-top li{
    width:240px;
    float: left;
    border-bottom: none;
}
ul.post-index-top li:nth-child(2){
    margin-left:30px;
    margin-right:30px;
}

ul.post-index-top li:last-of-type{
    border-bottom:none;
    margin-bottom: 0;
    padding-bottom: 0;
}

 

  ul.post-index-top li:last-of-type {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
  }
/*左側
-------------------------------------------------------*/
ul.post-index-top .post_thumbnail{
    overflow: hidden;
	width:100%;
}
ul.post-index-top a img{
    transition-duration: 0.3s;
}

/*右側
-------------------------------------------------------*/
ul.post-index-top .head{
	width:100%;
}
ul.post-index-top .head .h-post-title{
    font-size:15px;
	line-height:24px;
	margin:0;
	padding:0;
    transition-duration: 0.3s;
    overflow: hidden;
}
ul.post-index-top .head .h-post-title span {
    margin: 0;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
}
ul.post-index-top .head .post-title{
	margin-bottom:10px;
	padding-bottom:0;
}
ul.post-index-top .head .post-content{
    overflow: hidden;
}
ul.post-index-top .head .post-content p {
    font-size:13px;
    line-height: 20px;
    margin: 0;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
    overflow: hidden;
    display: none;
}

  

  .visually-hidden {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0;
  }
}



h1{
    padding-top:130px;
    font-size: 42px;
    line-height: 42px;
    font-weight: 700;
    padding-bottom:20px;
    color: var(--color-secondary);
    text-align: center;
}
h1 span {
  color:var(--color-primary);
}

h1 a:hover{
    text-decoration: none;
}


.more-btn a {
    display: block;
    height: 40px;
    width: 200px;
    background-color:var(--color-primary);
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
    padding-top:30px;
    font-size: 80px;
    line-height: 80px;
    padding-bottom:30px;
}

.more-btn a{
    margin: 0;
    position: absolute;
    height: 40px;
    width: 40px;
    background-color:var(--color-primary);
    bottom:-20px;
    right: 0;
    left: 0;
    margin: 0 auto;
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
        background-color:var(--color-link-hover);
    }

    .category-block.prediction-block .more-btn a {
        top: 400px;
    }

    .visually-hidden {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
    }




}
</style>
</head>
<body>

<?php get_template_part('partials/header2'); ?>


<div id="wapper">
<div id="contents">

<h1><a href="/about"><span>多角</span>で読み解く</a></h1>

<div id="main-top">

<div class="category-block economy-block">
<h2>経済</h2>
<div class="h2en">ECONOMY</div>
<?php
//----------------------------------------------------
// ③ economy カテゴリ（indexタグ付き）3件
//----------------------------------------------------

// economy カテゴリ
$cat_economy = get_category_by_slug('economy');
$cat_economy_id = $cat_economy ? $cat_economy->term_id : 0;

// index タグ
$index_tag = get_term_by('slug', 'index', 'post_tag');
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// クエリパラメータ（economy）
$args_economy = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'cat'            => $cat_economy_id,
);

if ( $index_tag_id ) {
    $args_economy['tag__in'] = array( $index_tag_id );
}

$query_economy = new WP_Query($args_economy);
?>
<ul class="post-index-top">
    <?php if ( $query_economy->have_posts() ) : ?>
        <?php while ( $query_economy->have_posts() ) : $query_economy->the_post(); ?>
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
                    <time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>">
                        <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                </div>

                <div class="post-title">
                    <h3 class="h-post-title"><span><?php the_title(); ?></span></h3>
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
        <div style="clear:both;"></div>
    <?php else : ?>
        <li>経済カテゴリの index タグ付き記事はありません。</li>
    <?php endif; wp_reset_postdata(); ?>
</ul>
<div class="more-btn"><a href="/category/economy/"><span class="visually-hidden">すべて見る</span></a></div>
</div>

<div class="category-block work-block">
<h2>仕事</h2>
<div class="h2en">WORK</div>
<?php
//----------------------------------------------------
// ③ work カテゴリ（indexタグ付き）3件
//----------------------------------------------------

// work カテゴリ
$cat_work = get_category_by_slug('work');
$cat_work_id = $cat_work ? $cat_work->term_id : 0;

// index タグ
$index_tag = get_term_by('slug', 'index', 'post_tag');
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// クエリパラメータ（work）
$args_work = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'cat'            => $cat_work_id,
);

if ( $index_tag_id ) {
    $args_work['tag__in'] = array( $index_tag_id );
}

$query_work = new WP_Query($args_work);
?>
<ul class="post-index-top">
    <?php if ( $query_work->have_posts() ) : ?>
        <?php while ( $query_work->have_posts() ) : $query_work->the_post(); ?>
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
                    <time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>">
                        <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                </div>

                <div class="post-title">
                    <h3 class="h-post-title"><span><?php the_title(); ?></span></h3>
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
        <div style="clear:both;"></div>
    <?php else : ?>
        <li>仕事カテゴリの index タグ付き記事はありません。</li>
    <?php endif; wp_reset_postdata(); ?>
</ul>
<div class="more-btn"><a href="/category/work/"><span class="visually-hidden">すべて見る</span></a></div>
</div>

<div class="category-block society-block">
<h2>社会</h2>
<div class="h2en">SOCIETY</div>
<?php
//----------------------------------------------------
// ③ society カテゴリ（indexタグ付き）3件
//----------------------------------------------------

// society カテゴリ
$cat_society = get_category_by_slug('society');
$cat_society_id = $cat_society ? $cat_society->term_id : 0;

// index タグ
$index_tag = get_term_by('slug', 'index', 'post_tag');
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// クエリパラメータ（society）
$args_society = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'cat'            => $cat_society_id,
);

if ( $index_tag_id ) {
    $args_society['tag__in'] = array( $index_tag_id );
}

$query_society = new WP_Query($args_society);
?>
<ul class="post-index-top">
    <?php if ( $query_society->have_posts() ) : ?>
        <?php while ( $query_society->have_posts() ) : $query_society->the_post(); ?>
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
                    <time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>">
                        <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                </div>

                <div class="post-title">
                    <h3 class="h-post-title"><span><?php the_title(); ?></span></h3>
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
        <div style="clear:both;"></div>
    <?php else : ?>
        <li>社会構造・制度カテゴリの index タグ付き記事はありません。</li>
    <?php endif; wp_reset_postdata(); ?>
</ul>
<div class="more-btn"><a href="/category/society/"><span class="visually-hidden">すべて見る</span></a></div>
</div>


<div class="category-block technology-block">
<h2>技術</h2>
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
                    <time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>">
                        <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                </div>

                <div class="post-title">
                    <h3 class="h-post-title"><span><?php the_title(); ?></span></h3>
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
        <div style="clear:both;"></div>
    <?php else : ?>
        <li>technology カテゴリの index タグ付き記事はありません。</li>
    <?php endif; wp_reset_postdata(); ?>
</ul>
<div class="more-btn"><a href="/category/technology/"><span class="visually-hidden">すべて見る</span></a></div>
</div>




<div class="category-block politics-block">
<h2>政治</h2>
<div class="h2en">POLITICS</div>
<?php
//----------------------------------------------------
// ③ politics カテゴリ（indexタグ付き）3件
//----------------------------------------------------

// politics カテゴリ
$cat_politics = get_category_by_slug('politics');
$cat_politics_id = $cat_politics ? $cat_politics->term_id : 0;

// index タグ
$index_tag = get_term_by('slug', 'index', 'post_tag');
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// クエリパラメータ（politics）
$args_politics = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'cat'            => $cat_politics_id,
);

if ( $index_tag_id ) {
    $args_politics['tag__in'] = array( $index_tag_id );
}

$query_politics = new WP_Query($args_politics);
?>
<ul class="post-index-top">
    <?php if ( $query_politics->have_posts() ) : ?>
        <?php while ( $query_politics->have_posts() ) : $query_politics->the_post(); ?>
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
                    <time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>">
                        <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                </div>

                <div class="post-title">
                    <h3 class="h-post-title"><span><?php the_title(); ?></span></h3>
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
        <div style="clear:both;"></div>
    <?php else : ?>
        <li>政治カテゴリの index タグ付き記事はありません。</li>
    <?php endif; wp_reset_postdata(); ?>
</ul>
<div class="more-btn"><a href="/category/politics/"><span class="visually-hidden">すべて見る</span></a></div>
</div>


<div class="category-block education-block">
<h2>教育</h2>
<div class="h2en">EDUCATION</div>
<?php
//----------------------------------------------------
// ③ education カテゴリ（indexタグ付き）3件
//----------------------------------------------------

// education カテゴリ
$cat_education = get_category_by_slug('education');
$cat_education_id = $cat_education ? $cat_education->term_id : 0;

// index タグ
$index_tag = get_term_by('slug', 'index', 'post_tag');
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// クエリパラメータ（education）
$args_education = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'cat'            => $cat_education_id,
);

if ( $index_tag_id ) {
    $args_education['tag__in'] = array( $index_tag_id );
}

$query_education = new WP_Query($args_education);
?>
<ul class="post-index-top">
    <?php if ( $query_education->have_posts() ) : ?>
        <?php while ( $query_education->have_posts() ) : $query_education->the_post(); ?>
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
                    <time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>">
                        <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                </div>

                <div class="post-title">
                    <h3 class="h-post-title"><span><?php the_title(); ?></span></h3>
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
        <div style="clear:both;"></div>
    <?php else : ?>
        <li>教育カテゴリの index タグ付き記事はありません。</li>
    <?php endif; wp_reset_postdata(); ?>
</ul>
<div class="more-btn"><a href="/category/education/"><span class="visually-hidden">すべて見る</span></a></div>
</div>



<div class="category-block culture-block">
<h2>文化</h2>
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
                    <time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>">
                        <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                </div>

                <div class="post-title">
                    <h3 class="h-post-title"><span><?php the_title(); ?></span></h3>
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
        <div style="clear:both;"></div>
    <?php else : ?>
        <li>culture カテゴリの index タグ付き記事はありません。</li>
    <?php endif; wp_reset_postdata(); ?>
</ul>
<div class="more-btn"><a href="/category/culture/"><span class="visually-hidden">すべて見る</span></a></div>
</div>



<div class="category-block regional-block">
<h2>地域</h2>
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
                    <time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>">
                        <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                </div>

                <div class="post-title">
                    <h3 class="h-post-title"><span><?php the_title(); ?></span></h3>
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
        <div style="clear:both;"></div>
    <?php else : ?>
        <li>regional カテゴリの index タグ付き記事はありません。</li>
    <?php endif; wp_reset_postdata(); ?>
</ul>
<div class="more-btn"><a href="/category/regional/"><span class="visually-hidden">すべて見る</span></a></div>
</div>

<div class="category-block history-block">
<h2>歴史</h2>
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
                    <time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>">
                        <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                </div>

                <div class="post-title">
                    <h3 class="h-post-title"><span><?php the_title(); ?></span></h3>
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
        <div style="clear:both;"></div>
    <?php else : ?>
        <li>history カテゴリの index タグ付き記事はありません。</li>
    <?php endif; wp_reset_postdata(); ?>
</ul>
<div class="more-btn"><a href="/category/history/"><span class="visually-hidden">すべて見る</span></a></div>
</div>

<div class="category-block">
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
    'posts_per_page' => 3,
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
                    <h3 class="h-post-title"><span><?php the_title(); ?></span></h3>
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
        <div style="clear:both;"></div>
    <?php else : ?>
        <li>prediction カテゴリの index タグ付き記事はありません。</li>
    <?php endif; wp_reset_postdata(); ?>
</ul>
<div class="more-btn"><a href="/category/prediction/"><span class="visually-hidden">すべて見る</span></a></div>
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
                    <time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>">
                        <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                </div>

                <div class="post-title">
                    <h3 class="h-post-title"><span><?php the_title(); ?></span></h3>
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
        <div style="clear:both;"></div>
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
                    <time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>">
                        <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                </div>

                <div class="post-title">
                    <h3 class="h-post-title"><span><?php the_title(); ?></span></h3>
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
        <div style="clear:both;"></div>
    <?php else : ?>
        <li>business カテゴリの index タグ付き記事はありません。</li>
    <?php endif; wp_reset_postdata(); ?>
</ul>
<div class="more-btn"><a href="/category/business/"><span class="visually-hidden">すべて見る</span></a></div>
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
                    <time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>">
                        <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                </div>

                <div class="post-title">
                    <h3 class="h-post-title"><span><?php the_title(); ?></span></h3>
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
        <div style="clear:both;"></div>
    <?php else : ?>
        <li>life カテゴリの index タグ付き記事はありません。</li>
    <?php endif; wp_reset_postdata(); ?>
</ul>
<div class="more-btn"><a href="/category/life/"><span class="visually-hidden">すべて見る</span></a></div>
</div>




</div>
</div>

</div>
<?php get_template_part('partials/footer2'); ?>
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
