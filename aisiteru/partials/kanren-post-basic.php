<style type="text/css">
/*関連ポスト
================================================================================================*/
ul.kanren-post{
    font-size:13px;
    line-height:18px;
    overflow-x: auto;
  	-webkit-overflow-scrolling: touch;
  	white-space: nowrap;
    position: relative;
    height: 260px;
    margin:0;
    padding:0;
    width: 100%;
    /* IE, Edge 対応 */
	-ms-overflow-style: none;
	/* Firefox 対応 */
	scrollbar-width: none;
}
ul.kanren-post li{
	width:200px;
    position:absolute;
}
ul.kanren-post li .kanren-post-title{
    overflow: hidden;
    margin: 0;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
}
ul.kanren-post li .kanren-post-title h3{
    font-weight: bold;
}
ul.kanren-post .item-time{
    font-size: 12px;
    background-image:url("/wp/wp-content/themes/aisiteru/images/icon/time_bl.png");
    background-repeat:no-repeat;
    background-size:11px auto;
    padding-left:15px;
    background-position:0px 3px;
    margin-bottom: 3px;
    }
ul.kanren-post li:nth-child(1){
    top:0;
    left: 20px;
}
ul.kanren-post li:nth-child(2){
    top:0;
    left: 250px;
}

ul.kanren-post li:nth-child(3){
    top:0;
    left: 480px;
}

ul.kanren-post li:nth-child(4){
    top:0;
    left: 710px;
}

ul.kanren-post li:nth-child(5){
    top:0;
    left: 940px;
}
    
ul.kanren-post li:nth-child(6){
    top:0;
    left: 1170px;
}    
 
ul.kanren-post li:nth-child(7){
    top:0;
    left: 1400px;
} 
ul.kanren-post li:nth-child(8){
    top:0;
    left: 1630px;
    padding-right: 30px;
} 

ul.kanren-post img{
	width:100%;
	height:auto;
    border-radius: 3px;
    margin-bottom: 10px;
}
ul.kanren-post li a {
    white-space:normal;
    display: block;
}
ul.kanren-post li a:hover{
	text-decoration:none;
}

h2#kanren{
	padding:0;
	margin-bottom:10px;
	margin-top:30px;
    border-radius: 3px;
    font-size: 12px;
}
h2#kanren{
    text-align: center;
}
h2#kanren::before{
    white-space: pre;
    font-size: 24px;
    letter-spacing: 1px;
}
h2#kanren::before{
    content: 'BASIC\A';
    color:#031b4e;
} 

.more-btn a{
    display: block;
    width: 240px;
    height: 50px;
    border-radius: 25px;
    background-color: #1433d6;
    line-height: 50px;
    text-align: center;
    color: #FFFFFF;
    font-weight: bold;
}
@media only screen and (min-width: 680px) {
ul.kanren-post{
    width: 900px;
    height: 480px;
}
ul.kanren-post li{
	width:210px;
}
ul.kanren-post li .kanren-post-title h3{
    transition-duration: 0.3s;
}
ul.kanren-post li .item-time{
    font-size: 12px;
    background-size:10px auto;
    padding-left:17px;
    background-position:left center;
}
ul.kanren-post li:nth-child(1){
    top:0;
    left: 0;
}
ul.kanren-post li:nth-child(2){
    top:0;
    left: 230px;
}

ul.kanren-post li:nth-child(3){
    top:0;
    left: 460px;
}
ul.kanren-post li:nth-child(4){
    top:0;
    left: 690px;
}
ul.kanren-post li:nth-child(4){
    padding-right: 0;
}  
ul.kanren-post li:nth-child(5){
    top:240px;
    left: 0px;
}   
ul.kanren-post li:nth-child(6){
    top:240px;
    left: 230px;
}    
ul.kanren-post li:nth-child(7){
    top:240px;
    left: 460px;
} 
ul.kanren-post li:nth-child(8){
    top:240px;
    left: 690px;
    padding-right: 0;
}
ul.kanren-post li .kanren-post-thumb{
    width:210x;
    height: 140px;
    overflow: hidden;
    margin: 0 0 10px 0;
}
ul.kanren-post li img{
	width:100%;
    transition-duration: 0.3s;
}
h2#kanren{
    text-align: left;
}
h2#kanren{
    margin-top: 60px;
} 
h2#kanren::before{
    font-size: 24px;
    margin-right:15px;
    letter-spacing: 1px;
}
h2#kanren::before{
     content: ' BASIC';
}

.more-btn a{
    margin:30px auto 30px auto;
}
}
</style>

<?php if ( !wp_is_mobile() ) : ?>
<script type="text/javascript">
$(function () {
$('.kanren-post li').hover(function(){
    $("h3",this).css('color','#0069ff');
    $(".kanren-post-thumb img",this).css('transform','scale(1.1)');
}, function(){
    $("h3",this).css('color','#031b4e');
    $(".kanren-post-thumb img",this).css('transform','scale(1)');
});  
});
</script>
<?php endif; ?>

<h2 id="kanren">WEBのきほん</h2>
<?php
$arg = array(
    'posts_per_page' => 8,
    'orderby' => 'rand',
    'order' => 'DESC',
    'post_type' => 'basic', // カスタム投稿タイプ「basic」全体を対象
);
$posts = get_posts($arg);
if ($posts): ?>
  
<ul class="kanren-post">
<?php
foreach ($posts as $post):
    setup_postdata($post); ?>
    
    <li>
        <a href="<?php the_permalink(); ?>">
            <div class="kanren-post-thumb">
                <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('single-thumbnails'); ?>
                <?php else: ?>
                    <img src="/path/to/default-image.jpg" alt="デフォルト画像">
                <?php endif; ?>
            </div>
            <div class="item-time">
                <?php if (get_the_time('U') !== get_the_modified_time('U')): ?>
                    <time class="updated" datetime="<?php the_modified_date("Y-m-d H:i:s") ?>">
                        <?php the_modified_date('Y.m.d') ?>
                    </time>
                <?php else: ?>
                    <time class="entry-date published" datetime="<?php echo get_the_date("Y-m-d H:i:s") ?>">
                        <?php echo get_the_date('Y.m.d') ?>
                    </time>
                <?php endif; ?>
            </div>
            <div class="kanren-post-title">
                <h3><?php the_title(); ?></h3>
            </div>
        </a>
    </li><!-- .post End-->
    
<?php endforeach; ?>
</ul>

<?php
endif;
wp_reset_postdata();
?>

<div class="more-btn"><a href="/basic">全て見る</a></div>