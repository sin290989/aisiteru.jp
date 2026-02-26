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
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common111.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts"); ?>
<?php get_template_part("partials/css/pagenavi"); ?>
<?php get_template_part("partials/css/post-index-top"); ?>



<style type="text/css">

.catch{
  position: relative;
  width: 100%;
  height: 200px;
}

.catch1{
  font-size: 60px;
  font-family: '游明朝','Yu Mincho',YuMincho,'Hiragino Mincho Pro',serif;
  position: absolute;
  top:30px;
  left:0px;
  font-weight: bold;
  color: #031b4e;
  z-index: 10;
}

.catch2{
  font-size: 50px;
  font-family: '游明朝','Yu Mincho',YuMincho,'Hiragino Mincho Pro',serif;
  position: absolute;
  top:100px;
  left:80px;
  font-weight: bold;
  color: #031b4e;
  z-index: 10;
}
.with{
  position: absolute;
  font-size: 16px;
  color: #031b4e;
  top:140px;
  left: 175px;
  z-index: 20;
  color:#031b4e;
  font-weight: bold;
}
.catch1 span,
.with span{
    color: #1433d6;
}


.blog-main-img{
    /*height: 150px;
    background-color: #ffffff;*/
}

ul.post-index-top li{
    width: 100%;
    overflow:hidden;
    margin-bottom: 10px;
    position: relative;
    padding-bottom: 30px;
}
ul.post-index-top a{
	display:block;
    text-decoration: none;
}

/*左側
-------------------------------------------------------*/
ul.post-index-top .post_thumbnail{
	width:46%;
    float: left;
}

ul.post-index-top .post_thumbnail img{
	width:100%;
	height:auto;
	vertical-align:bottom;
    padding: 0;
    margin-bottom: 0;
    border-radius: 3px;
}


/*右側
-------------------------------------------------------*/
ul.post-index-top .head{
    width:52%;
    float: right;
    padding-top: 5px;
    color: #46526f;
}
ul.post-index-top .head h3{
    font-family: 'Noto Sans JP', sans-serif;
    font-weight: 700;
    font-style: normal;
    color: #031b4e;
	font-size:12px;
    line-height: 18px;
	background-image:none;
	border:none;
	margin:0;
	padding:0;
	height:auto;
    padding-top: 5px;
}

ul.post-index-top .head .post-dates{
    font-size: 12px;
	background-image:url(/wp/wp-content/themes/aisiteru/images/icon/time_bl.png);
	background-repeat:no-repeat;
	background-size:12px auto;
    background-position: left 7px;
	padding: 0 0 0 16px;
	margin-bottom:5px;
}


.category-block h2{
   
	padding:15px;
	font-size:18px;
	font-weight:bold;
	margin-bottom:10px;
	background-repeat:no-repeat;
	background-size:24px auto;
	background-position: 10px center;
	padding-left:42px;
}
.category-block h2{background-image: url("/wp/wp-content/themes/aisiteru/images/icon/folder_bl.png");}

/*-----------------------------------*/

@media only screen and (min-width: 680px) {
.catch{
  height: 250px;
}

.catch1{
  font-size:90px;
  top:100px;
  left: -40px;
}

.catch2{
 top:100px;
  left: 300px;
  z-index: 10;
  font-size: 85px;
}
.with{
  font-size:24px;
  top:175px;
  left: 20px;
}

.category-block{
    margin-top:50px;
     background-color: #ffffff;
     border-radius: 5px;
     position: relative;
     height:425px;
     box-sizing: border-box;
}

.category-block.prediction-block{
    height:790px;
}
ul.post-index-top {
   background-color: #46526f;
    
}
ul.post-index-top li{
    position: absolute;
    
}
ul.post-index-top li:nth-child(1){
    width:420px;
    height:335px;
    top:50px;
    left:50px;
    overflow: hidden;
    box-sizing: border-box;
}

ul.post-index-top li:nth-child(2) {
    width:550px;
    height: 150px;
    top:50px;
    left:500px;
    box-sizing: border-box;
}

ul.post-index-top li:nth-child(3) {
    width:550px;
    height: 150px;
    top:230px;
    left:500px;
    box-sizing: border-box;
}


ul.post-index-top li:nth-child(4){
    width:420px;
    height:335px;
    top:410px;
    left:50px;
    overflow: hidden;
    box-sizing: border-box;
}
ul.post-index-top li:nth-child(5) {
    width:550px;
    height: 150px;
    top:410px;
    left:500px;
    box-sizing: border-box;
}

ul.post-index-top li:nth-child(6) {
    width:550px;
    height: 150px;
    top:590px;
    left:500px;
    box-sizing: border-box;
}

ul.post-index-top li:nth-child(1) .inner,
ul.post-index-top li:nth-child(4) .inner{
	margin:0px;
	padding:0px;
    width: 100%;
    height:335px;
    position: relative;
    border-bottom:1px solid #f7f8f8;
}

ul.post-index-top li:nth-child(2) .inner,
ul.post-index-top li:nth-child(3) .inner,
ul.post-index-top li:nth-child(5) .inner,
ul.post-index-top li:nth-child(6) .inner{
	margin:0px;
	padding:0px;
    width: 100%;
     height: 150px;
    position: relative;
    border-bottom:1px solid #f7f8f8;
}


ul.post-index-top li:last-of-type{
    border-bottom:none;
    margin-bottom: 0;
    padding-bottom: 0;;
}

/*左側
-------------------------------------------------------*/
ul.post-index-top li:nth-child(1) .post_thumbnail,
ul.post-index-top li:nth-child(4) .post_thumbnail{
    overflow: hidden;
	width:100%;
	margin-bottom:0;
    height:170px;
}
ul.post-index-top li:nth-child(2) .post_thumbnail,
ul.post-index-top li:nth-child(3) .post_thumbnail,
ul.post-index-top li:nth-child(5) .post_thumbnail,
ul.post-index-top li:nth-child(6) .post_thumbnail{
    overflow: hidden;
	width:40%;
	float:left;
	margin-bottom:0;
}









ul.post-index-top a img{
    transition-duration: 0.3s;
}

/*右側
-------------------------------------------------------*/
ul.post-index-top li:nth-child(1) .head,
ul.post-index-top li:nth-child(4) .head{
	width:100%;
}
ul.post-index-top li:nth-child(2) .head,
ul.post-index-top li:nth-child(3) .head,
ul.post-index-top li:nth-child(5) .head,
ul.post-index-top li:nth-child(6) .head{
	width:55%;
	float:right;
}
ul.post-index-top .head h3{
    font-size:16px;
	line-height:24px;
	margin:0;
	padding:0;
    transition-duration: 0.3s;
    overflow: hidden;
}
ul.post-index-top .head h3 span {
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
ul.post-index-top li:nth-child(1) .post-content p,
ul.post-index-top li:nth-child(4) .post-content p {
    font-size:13px;
    margin: 0;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
}
ul.post-index-top li:nth-child(2) .post-content p,
ul.post-index-top li:nth-child(3) .post-content p,
ul.post-index-top li:nth-child(5) .post-content p,
ul.post-index-top li:nth-child(6) .post-content p{
    font-size:13px;
    margin: 0;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
}

.category-block h2{
 position: absolute;
    top:-30px;
    left:35px;
}

.more-btn a{
    position:absolute;
    display: block;
    height: 40px;
    width: 40px;
    background-color:  #1433d6;
    top:200px;
    right: -20px;
    border-radius: 50%;
}
.category-block.prediction-block .more-btn a{
   top:400px;
}
}
</style>









</head>
<body>

<?php get_template_part('partials/header'); ?>

<div id="pan">
  <div class="inner">
    <span class="home">トップページ</span>
  </div>
</div>

<div class="blog-main-img"></div>

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
<div class="more-btn"><a href="/category/prediction/"></a></div>
</div>


<div class="category-block business-block">
<h2>ビジネス・キャリア</h2>
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
<div class="more-btn"><a href="/category/business/"></a></div>
</div>


<div class="category-block culture-block">
<h2>文化</h2>
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
<div class="more-btn"><a href="/category/culture/"></a></div>
</div>


<div class="category-block life-block">
<h2>実用・ライフ</h2>
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
<div class="more-btn"><a href="/category/life/"></a></div>
</div>


<div class="category-block technology-block">
<h2>技術・倫理</h2>
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
<div class="more-btn"><a href="/category/technology/"></a></div>
</div>


<div class="category-block history-block">
<h2>歴史・ミステリー</h2>
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
<div class="more-btn"><a href="/category/history/"></a></div>
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
