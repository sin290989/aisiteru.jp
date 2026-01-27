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
<title><?php wp_title(''); ?>｜<?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common106.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts") ?>
<?php get_template_part("partials/css/post-index") ?>
<style type="text/css">
#main-cluster h1 {
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
ul.post-index .head h2{
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


@media only screen and (min-width: 680px) {
#contents {
    width: 1100px;
    margin: 0 auto;
    padding: 100px 0 50px 0;
}

#main-cluster h1 {
font-size: 74px;
line-height: 74px;
margin-bottom: 25px;
padding: 0 20px;
}

#main-cluster ul.cluster-scope{
margin-top:0;
}
ul.cluster-scope li {
    padding:3px 10px;
    font-size:12px;
    line-height: 13px;
    border-radius:20px;
    margin-right: 7px;
}
#main-cluster p.read{
font-size:16px;
line-height: 32px;
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



.cluster-block {
margin-top:30px;
background-color: #ffffff;
border-radius: 5px;
position: relative;
box-sizing: border-box;
padding: 0;
}


ul.post-index {
    padding: 50px;
}
ul.post-index li{
    width: 300px;
	margin-bottom:30px;
	padding-bottom:30px;
    float: left;
    border-bottom: none;
}
ul.post-index li:nth-child(2),
ul.post-index li:nth-child(5),
ul.post-index li:nth-child(8),
ul.post-index li:nth-child(11),
ul.post-index li:nth-child(14){
    margin-left:38px;
    margin-right:38px;
}
ul.post-index li:nth-child(13),
ul.post-index li:nth-child(14),
ul.post-index li:nth-child(15){
    margin-bottom:0;
	padding-bottom:0;
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
ul.post-index .head h2{
    font-size:16px;
	line-height:24px;
	margin:0;
	padding:0;
    transition-duration: 0.3s;
    overflow: hidden;
}
ul.post-index .head h2 span {
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
    <ul class="cluster-scope">
<li>入試制度</li>
<li>学校文化</li>
<li>評価と努力</li>
<li>公平性と選別</li>
<li>社会的役割</li>
</ul>
<h1><?php the_title(); ?></h1>

<p class="read">受験は、人生の大きな分岐点のように感じられる一方で、努力の意味や制度の公平性がどのように成立しているのかは、必ずしも整理されていません。
このクラスタでは、AI8社の視点から「受験期の努力」「公平性の認識」「分岐点としての機能」といった論点を構造的に比較した記事のみを収録しています。
正解を示すためではなく、あなた自身の経験や社会の前提を別の角度から捉え直すための座標としてご利用ください。</p>

<p class="cluster-rule">
  このクラスタには、<strong>受験・教育制度</strong>に関する最新の投稿を時系列で表示しています（最新15件）。
</p>
<div class="cluster-block">
   
<?php
// season-exam タグの term を取得
$season_tag = get_term_by( 'slug', 'season-exam', 'post_tag' );
$season_tag_id = $season_tag ? $season_tag->term_id : 0;

// index タグの term を取得
$index_tag = get_term_by( 'slug', 'index', 'post_tag' );
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// season-exam ＋ index 両方が付いた最新15件を取得（ページネーションなし）
$args = array(
    'post_type'       => 'post',
    'posts_per_page' => 15,
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
// クエリを元に戻す
wp_reset_postdata();
?>
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
