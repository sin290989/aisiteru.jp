<?php
/*
Template Name: Cluster
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts") ?>
<?php get_template_part("partials/css/post-index") ?>



<style type="text/css">
    h1{
    font-size: 36px;
    line-height: 36px;
    font-weight: 700;
    padding: 60px 20px 20px 20px;
    color: #031b4e;
}
h1 span {
  color: #1433d6;
}
#main-cluster h2 {
    color: #1433d6;
    font-size: 28px;
    line-height: 28px;
    font-family: "Noto Sans JP", sans-serif;
    font-weight: 700;
    margin-bottom: 15px;
    padding: 0 20px;
}
#main-cluster ul.cluster-scope{
color:#FFFFFF; 
font-weight: 500;
padding: 0 20px;
margin-bottom: 20px;
margin-top:50px;
}
ul.cluster-scope li {
    display: inline;
    background-color: #031b4e;
    padding:2px 7px;
    font-size:10px;
    font-size:10px;
    border-radius:20px;
    margin-right: 4px;
}
#main-cluster p.read{
  padding: 0 20px;
  font-size:14px;
  line-height: 28px;
  font-weight: bold;
  text-align: justify;
}

#main-cluster p.cluster-read{
  padding: 0 20px;
  font-size:14px;
  line-height: 28px;
  font-weight: bold;
  text-align: justify;
}
.cluster-rule {
font-size: 12px;
font-weight: bold;
margin-top: 10px;
padding: 0 20px;
}

.cluster-rule strong{
color: #1433d6;
}
.cluster-block {
  border-radius: 5px;
  padding: 10px 10px;
  position: relative;
  background-color: #ffffff;
  margin: 30px 10px 0 10px;
}



ul.post-index li{
    width: 100%;
    overflow:hidden;
    margin-bottom: 10px;
    position: relative;
    padding-bottom: 10px;
    border-bottom: 1px solid #eeeeee;
}
ul.post-index a{
	display:block;
    text-decoration: none;
}
ul.post-index li:last-child {
  border-bottom: none;
  padding-bottom: 0;
  margin-bottom: 0;
}
ul.post-index li:nth-child(3){
    border-bottom: none;
    padding-bottom: 0;
  margin-bottom: 0;
}
/*左側
-------------------------------------------------------*/
ul.post-index .post_thumbnail{
	width:46%;
    float: left;
}

ul.post-index .post_thumbnail img{
	width:100%;
	height:auto;
	vertical-align:bottom;
    padding: 0;
    margin-bottom: 0;
    border-radius: 3px;
}
/*右側
-------------------------------------------------------*/
ul.post-index .head{
    width:52%;
    float: right;
    padding-top: 0px;
    color: #46526f;
}
ul.post-index .head h3{
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
    padding-top: 0px;
}
ul.post-index .head .post-dates {
  font-size: 12px;
  background-image: url(/wp/wp-content/themes/aisiteru/images/icon/time_bl.png);
  background-repeat: no-repeat;
  background-size: 12px auto;
  background-position: left center;
  padding: 0 0 0 16px;
  margin-bottom: 0px;
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
    font-size: 80px;
    line-height:80px;
    padding: 0 20px 20px 20px;
}
#contents {
    width: 1100px;
    margin: 0 auto;
    padding: 100px 0 50px 0;
}

#main-cluster h2 {
font-size: 48px;
line-height: 48px;
margin-bottom: 10px;
padding: 0 20px;
}

#main-cluster ul.cluster-scope{
margin-top:100px;
}
ul.cluster-scope li {
    padding:3px 10px;
    font-size:12px;
    line-height: 13px;
    border-radius:20px;
    margin-right: 7px;
}
#main-cluster p.read{
font-size:14px;
line-height: 28px;
}

.cluster-rule {
font-size: 14px;
font-weight: bold;
margin-top: 15px;
padding: 0 20px;
}

.cluster-rule strong{
color: #1433d6;
}

#main-cluster p.cluster-read{
    font-size:14px;
line-height: 28px;
}


.cluster-block {
margin-top:20px;
background-color: #ffffff;
border-radius: 5px;
position: relative;
box-sizing: border-box;
padding: 0;
}


ul.post-index {
    padding: 50px;
    padding-bottom: 20px;
}
ul.post-index li{
    width: 300px;
    float: left;
    border-bottom: none;
}
ul.post-index li:nth-child(2){
    margin-left:38px;
    margin-right:38px;
}

ul.post-index li:last-of-type{
    border-bottom:none;
    margin-bottom: 0;
    padding-bottom: 0;;
}
/*左側
-------------------------------------------------------*/
ul.post-index .post_thumbnail{
    overflow: hidden;
	width:100%;
}
ul.post-index a img{
    transition-duration: 0.3s;
}
/*右側
-------------------------------------------------------*/
ul.post-index .head{
	width:100%;
}
ul.post-index .head h3{
    font-size:16px;
	line-height:24px;
	margin:0;
	padding:0;
    transition-duration: 0.3s;
    overflow: hidden;
}
ul.post-index .head h3 span {
    margin: 0;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
}
ul.post-index .head .post-title{
	margin-bottom:10px;
	padding-bottom:0;
}
ul.post-index .head .post-content{
    overflow: hidden;
}
ul.post-index .head .post-content p {
    font-size:13px;
    line-height: 20px;
    margin: 0;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
    overflow: hidden;
    display: none;
}



.more-btn a{
    margin: 0;
    position: absolute;
    height: 40px;
    width: 40px;
    background-color: #1433d6;
    top:160px;
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

<?php get_template_part('partials/header'); ?>

<div id="pan">
<div class="inner">
<a href="/"><span class="home">トップページ</span></a> > <?php the_title(); ?>
</div>
</div>

<div id="wapper">
<div id="contents">

<div id="main-cluster">

<h1><span>クラスタ</span>索引</h1>

<p class="read">
このページは、特定のテーマに対して複数のAIが行った考察記事を、<strong>「分野ごとのクラスタ」という構造で束ねた索引ページ</strong>です。<br>
正解や結論を示すことを目的とせず、制度・歴史・文化・社会といった異なる座標軸から、
同じ問いがどのように切り取られているかを比較できるよう設計されています。
関心のあるクラスタを入口として、思考の視点がどのように分岐していくかをご覧ください。
<br>
<br>
<br>
</p>


<!------------------------------------------------------------------------------>
<ul class="cluster-scope">
  <li>制度と運営構造</li>
  <li>競技と価値創出</li>
  <li>政治と社会的影響</li>
</ul>

<h2>オリンピック</h2>

<p class="cluster-read">
このクラスタでは、オリンピックを「スポーツ大会」ではなく、制度設計・競技価値・政治や社会との関係がどのように結びついているかという視点から捉え直します。<br>
大会運営の仕組み、競技が持つ象徴的意味、国家や市場との関係性を比較するための入口としてご利用ください。
</p>

<div class="cluster-block">
   
<?php
// olympics タグの term を取得
$season_tag = get_term_by( 'slug', 'olympics', 'post_tag' );
$season_tag_id = $season_tag ? $season_tag->term_id : 0;

// index タグの term を取得
$index_tag = get_term_by( 'slug', 'index', 'post_tag' );
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// olympics ＋ index 両方が付いた最新3件を取得
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,   // ← 最新3件固定
    'tag__and'       => array( $season_tag_id, $index_tag_id ),
    'orderby'        => 'date',
    'order'          => 'DESC',
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
<h3><span><?php the_title(); ?></span></h3>
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
<li>該当する記事がまだありません。</li>
<?php endif; ?>

<div style="clear:both"></div>
</ul>

<?php
// クエリを元に戻す
wp_reset_postdata();
?>

<div class="more-btn">
<a href="/cluster/olympics/">
<span class="visually-hidden">クラスタページへ</span>
</a>
</div>

</div>
<!------------------------------------------------------------------------------>


<!------------------------------------------------------------------------------>
<ul class="cluster-scope">
  <li>制度設計</li>
  <li>家族関係</li>
  <li>資産移転</li>
</ul>

<h2>相続制度</h2>

<p class="cluster-read">
このクラスタでは、相続を「個人の手続き」ではなく、制度・家族関係・資産の移転がどのように結びついているかという視点から捉え直します。<br>
法制度の設計、感情や責任の分配、社会における富の移動の意味を比較するための入口としてご利用ください。
</p>

<div class="cluster-block">
   
<?php
// inheritance タグの term を取得
$season_tag = get_term_by( 'slug', 'inheritance', 'post_tag' );
$season_tag_id = $season_tag ? $season_tag->term_id : 0;

// index タグの term を取得
$index_tag = get_term_by( 'slug', 'index', 'post_tag' );
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// inheritance ＋ index 両方が付いた最新3件を取得
$args = array(
    'post_type'       => 'post',
    'posts_per_page' => 3,   // ← 最新3件固定
    'tag__and'       => array( $season_tag_id, $index_tag_id ),
    'orderby'        => 'date',
    'order'          => 'DESC',
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
            <!--サムネイル右側画像-->
            <div class="post_thumbnail">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('single-thumbnails'); ?>
            <?php else : ?>
                <img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
            <?php endif ; ?>
            </div>
            <!--サムネイル右側画像-->

            <!--サムネイル左側-->
            <div class="head">
                <div class="post-dates">
                    <time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>">
                        <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                </div>

                <div class="post-title">
                    <h3><span><?php the_title(); ?></span></h3>
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
        <li>該当する記事がまだありません。</li>
    <?php endif; ?>
    <div style="clear:both"></div>
</ul>

<?php
// クエリを元に戻す
wp_reset_postdata();
?>
<div class="more-btn">
  <a href="/cluster/inheritance/">
    <span class="visually-hidden">クラスタページへ</span>
  </a>
</div>
</div>
<!------------------------------------------------------------------------------>


<!------------------------------------------------------------------------------>
<ul class="cluster-scope">
  <li>制度設計</li>
  <li>権利と取引</li>
  <li>空間と資産価値</li>
</ul>

<h2>不動産構造</h2>

<p class="cluster-read">
このクラスタでは、不動産を「個別の物件」ではなく、制度・権利・市場がどのように結びついているかという視点から捉え直します。<br>
登記や契約の設計、取引と利用の境界、空間が資産として扱われる意味を比較するための入口としてご利用ください。
</p>

<div class="cluster-block">
   
<?php
// property タグの term を取得
$season_tag = get_term_by( 'slug', 'property', 'post_tag' );
$season_tag_id = $season_tag ? $season_tag->term_id : 0;

// index タグの term を取得
$index_tag = get_term_by( 'slug', 'index', 'post_tag' );
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// property ＋ index 両方が付いた最新3件を取得
$args = array(
    'post_type'       => 'post',
    'posts_per_page' => 3,   // ← 最新3件固定
    'tag__and'       => array( $season_tag_id, $index_tag_id ),
    'orderby'        => 'date',
    'order'          => 'DESC',
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
            <!--サムネイル右側画像-->
            <div class="post_thumbnail">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('single-thumbnails'); ?>
            <?php else : ?>
                <img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
            <?php endif ; ?>
            </div>
            <!--サムネイル右側画像-->

            <!--サムネイル左側-->
            <div class="head">
                <div class="post-dates">
                    <time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>">
                        <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                </div>

                <div class="post-title">
                    <h3><span><?php the_title(); ?></span></h3>
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
        <li>該当する記事がまだありません。</li>
    <?php endif; ?>
    <div style="clear:both"></div>
</ul>

<?php
// クエリを元に戻す
wp_reset_postdata();
?>
<div class="more-btn">
  <a href="/cluster/property/">
    <span class="visually-hidden">クラスタページへ</span>
  </a>
</div>
</div>
<!------------------------------------------------------------------------------>



<!------------------------------------------------------------------------------>
<ul class="cluster-scope">
  <li>制度としての解散</li>
  <li>政治的戦略</li>
  <li>民主主義と正統性</li>
</ul>

<h2>内閣解散・解散総選挙</h2>

<p class="cluster-read">
このクラスタでは、内閣解散や解散総選挙を「政治的な出来事」ではなく、制度としての位置づけと意味から捉え直します。<br>
戦略と制度、民意と正統性、権力と責任の関係を比較するための入口としてご利用ください。
</p>

<div class="cluster-block">

<?php
// (index + cabinet-dissolution) OR (index + dissolution-election)
// 最新3件のみ表示

$args = array(
  'post_type'       => 'post',
  'posts_per_page' => 3,   // ← 最新3件固定
  'orderby'        => 'date',
  'order'          => 'DESC',
  'tax_query'      => array(
    'relation' => 'OR',

    // パターンA: index + cabinet-dissolution
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

    // パターンB: index + dissolution-election
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
                    <h3><span><?php the_title(); ?></span></h3>
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

<?php wp_reset_postdata(); ?>
<div class="more-btn"><a href="/cluster/cabinet-dissolution/"><span class="visually-hidden">クラスタページへ</span></a></div>
</div>
<!------------------------------------------------------------------------------>



<!------------------------------------------------------------------------------>
<ul class="cluster-scope">
  <li>入試制度</li>
  <li>評価と努力</li>
  <li>公平性と選別</li>
</ul>

<h2>受験・教育制度</h2>

<p class="cluster-read">
このクラスタでは、受験を「個人の挑戦」ではなく、制度・評価・選別がどのように結びついているかという視点から捉え直します。<br>
努力と公平性、分岐点としての役割、制度が生み出す意味の違いを比較するための入口としてご利用ください。
</p>

<div class="cluster-block">
   
<?php
// season-exam タグの term を取得
$season_tag = get_term_by( 'slug', 'season-exam', 'post_tag' );
$season_tag_id = $season_tag ? $season_tag->term_id : 0;

// index タグの term を取得
$index_tag = get_term_by( 'slug', 'index', 'post_tag' );
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// season-exam ＋ index 両方が付いた最新3件を取得
$args = array(
    'post_type'       => 'post',
    'posts_per_page' => 3,   // ← 最新3件固定
    'tag__and'       => array( $season_tag_id, $index_tag_id ),
    'orderby'        => 'date',
    'order'          => 'DESC',
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
            <!--サムネイル右側画像-->
            <div class="post_thumbnail">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('single-thumbnails'); ?>
            <?php else : ?>
                <img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
            <?php endif ; ?>
            </div>
            <!--サムネイル右側画像-->

            <!--サムネイル左側-->
            <div class="head">
                <div class="post-dates">
                    <time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>">
                        <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                </div>

                <div class="post-title">
                    <h3><span><?php the_title(); ?></span></h3>
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
        <li>該当する記事がまだありません。</li>
    <?php endif; ?>
    <div style="clear:both"></div>
</ul>

<?php
// クエリを元に戻す
wp_reset_postdata();
?>
<div class="more-btn"><a href="/cluster/exam-education/"><span class="visually-hidden">クラスタページへ</span></a></div>
</div>
<!------------------------------------------------------------------------------>


<!------------------------------------------------------------------------------>
<ul class="cluster-scope">
  <li>資本とリスク</li>
  <li>制度と市場</li>
  <li>判断と不確実性</li>
</ul>

<h2>金融構造</h2>

<p class="cluster-read">
このクラスタでは、金融を「お金の運用」ではなく、「制度・市場・人間の判断がどのように結びついているか」という視点から捉え直します。<br>
リスクの扱われ方、制度設計と市場行動の関係、不確実性の中での意思決定といった論点を、比較の入口としてご利用ください。
</p>

<div class="cluster-block">

<?php
// finance タグの term を取得
$season_tag = get_term_by( 'slug', 'finance', 'post_tag' );
$season_tag_id = $season_tag ? $season_tag->term_id : 0;

// index タグの term を取得
$index_tag = get_term_by( 'slug', 'index', 'post_tag' );
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// finance ＋ index 両方が付いた最新3件を取得
$args = array(
    'post_type'       => 'post',
    'posts_per_page' => 3,   // ← 最新3件固定
    'tag__and'       => array( $season_tag_id, $index_tag_id ),
    'orderby'        => 'date',
    'order'          => 'DESC',
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
            <!--サムネイル右側画像-->
            <div class="post_thumbnail">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('single-thumbnails'); ?>
            <?php else : ?>
                <img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
            <?php endif ; ?>
            </div>
            <!--サムネイル右側画像-->

            <!--サムネイル左側-->
            <div class="head">
                <div class="post-dates">
                    <time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>">
                        <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                </div>

                <div class="post-title">
                    <h3><span><?php the_title(); ?></span></h3>
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
        <li>「index」タグと「finance」タグが付いた記事はまだありません。</li>
    <?php endif; ?>
    <div style="clear:both"></div>
</ul>

<?php
// クエリを元に戻す
wp_reset_postdata();
?>
<div class="more-btn">
  <a href="/cluster/finance/">
    <span class="visually-hidden">クラスタページへ</span>
  </a>
</div>
</div>
<!------------------------------------------------------------------------------>






<!------------------------------------------------------------------------------>
<ul class="cluster-scope">
  <li>歴史解釈</li>
  <li>人物像の再構築</li>
  <li>物語と史実</li>
</ul>

<h2>大河ドラマ</h2>

<p class="cluster-read">
このクラスタでは、大河ドラマを「歴史の再現」ではなく、「どのように歴史が物語として構成されているか」という視点から捉え直します。<br>
人物像の描かれ方、史実と演出の境界、メディアとしての役割といった論点を、比較の入口としてご利用ください。
</p>

<div class="cluster-block">

<?php
// taiga-drama タグの term を取得
$season_tag = get_term_by( 'slug', 'taiga-drama', 'post_tag' );
$season_tag_id = $season_tag ? $season_tag->term_id : 0;

// index タグの term を取得
$index_tag = get_term_by( 'slug', 'index', 'post_tag' );
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// taiga-drama ＋ index 両方が付いた最新3件を取得
$args = array(
    'post_type'       => 'post',
    'posts_per_page' => 3,   // ← 最新3件固定
    'tag__and'       => array( $season_tag_id, $index_tag_id ),
    'orderby'        => 'date',
    'order'          => 'DESC',
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
            <!--サムネイル右側画像-->
            <div class="post_thumbnail">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('single-thumbnails'); ?>
            <?php else : ?>
                <img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
            <?php endif ; ?>
            </div>
            <!--サムネイル右側画像-->

            <!--サムネイル左側-->
            <div class="head">
                <div class="post-dates">
                    <time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>">
                        <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                </div>

                <div class="post-title">
                    <h3><span><?php the_title(); ?></span></h3>
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
        <li>「index」タグと「taiga-drama」タグが付いた記事はまだありません。</li>
    <?php endif; ?>
    <div style="clear:both"></div>
</ul>

<?php
// クエリを元に戻す
wp_reset_postdata();
?>
<div class="more-btn"><a href="/cluster/taiga-drama/"><span class="visually-hidden">クラスタページへ</span></a></div>
</div>
<!------------------------------------------------------------------------------>




<!------------------------------------------------------------------------------>
<ul class="cluster-scope">
<li>ゲーム設計とシステム構造</li>
<li>達成感と心理設計</li>
<li>社会と文化的影響</li>
</ul>

<h2>ゲーム構造</h2>

<p class="cluster-read">
このクラスタでは、ゲームを「個別のタイトル」ではなく、設計思想・報酬構造・プレイヤー体験がどのように結びついているかという視点から捉え直します。<br>
難易度設計、報酬ループ、コミュニティ形成、文化的影響を比較するための入口としてご利用ください。
</p>

<div class="cluster-block">
   
<?php
// game タグの term を取得
$season_tag = get_term_by( 'slug', 'game', 'post_tag' );
$season_tag_id = $season_tag ? $season_tag->term_id : 0;

// index タグの term を取得
$index_tag = get_term_by( 'slug', 'index', 'post_tag' );
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// game ＋ index 両方が付いた最新3件を取得
$args = array(
'post_type'      => 'post',
'posts_per_page' => 3,   // ← 最新3件固定
'tag__and'       => array( $season_tag_id, $index_tag_id ),
'orderby'        => 'date',
'order'          => 'DESC',
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
<h3><span><?php the_title(); ?></span></h3>
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
<li>該当する記事がまだありません。</li>
<?php endif; ?>

<div style="clear:both"></div>
</ul>

<?php
wp_reset_postdata();
?>

<div class="more-btn">
<a href="/cluster/game/">
<span class="visually-hidden">クラスタページへ</span>
</a>
</div>

</div>
<!------------------------------------------------------------------------------>


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
    $("h3",this).css('color','#0069ff');
    $(".post_thumbnail img",this).css('transform','scale(1.1)');
}, function(){
    $("h3",this).css('color','#031b4e');
    $(".post_thumbnail img",this).css('transform','scale(1)');
});  
});
</script>
<?php endif; ?>

</body>
</html>