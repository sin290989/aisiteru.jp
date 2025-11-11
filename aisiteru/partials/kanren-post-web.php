<style type="text/css">
/*関連ポスト
================================================================================================*/
ul.kanren-post{
    font-size:13px;
    line-height:18px;
    width: auto;
    overflow-x: auto;
  	-webkit-overflow-scrolling: touch;
  	white-space: nowrap;
    position: relative;
    height: 280px;
}
ul.kanren-post li{
	width:200px;
    position:absolute;
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

ul.kanren-post li:nth-child(5){
    top:0;
    left: 920px;
}
    
ul.kanren-post li:nth-child(6){
    top:0;
    left: 1150px;
}    
 
ul.kanren-post li:nth-child(7){
    top:0;
    left: 1380px;
} 
ul.kanren-post li:nth-child(8){
    top:0;
    left: 1610px;
    padding-right: 30px;
} 

ul.kanren-post img{
	width:100%;
	height:auto;
    border-radius: 3px;
    margin-bottom: 10px;
}
ul.kanren-post li a {
	color:#444444;
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
    margin-right:15px;
    letter-spacing: 1px;
}
h2#kanren::before{
    content: ' RELATION\A';
    color:#031b4e;
} 

@media only screen and (min-width: 680px) {
ul.kanren-post{
    width: 750px;
    height: 530px; 
}
ul.kanren-post li{
	width:174px;
}
ul.kanren-post li h3{
transition-duration: 0.3s;
}
ul.kanren-post .item-time{
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
    left: 192px;
}

ul.kanren-post li:nth-child(3){
    top:0;
    left: 384px;
}

ul.kanren-post li:nth-child(4){
    top:0;
    left: 576px;
}
ul.kanren-post li:nth-child(4){
    padding-right: 0;
}  
ul.kanren-post li:nth-child(5){
    top:270px;
    left: 0px;
}   
    
ul.kanren-post li:nth-child(6){
    top:270px;
    left: 192px;
}    
 
ul.kanren-post li:nth-child(7){
    top:270px;
    left: 384px;
} 
ul.kanren-post li:nth-child(8){
    top:270px;
    left: 576px;
    padding-right: 0;
}
ul.kanren-post li .kanren-post-thumb{
    width:174px;
    overflow: hidden;
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
     content: ' RELATION';
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
    $("h3",this).css('color','#4d5b7c');
    $(".kanren-post-thumb img",this).css('transform','scale(1)');
});  
});
</script>
<?php endif; ?>

<h2 id="kanren">関連記事</h2>
<?php
//参考https://yosiakatsuki.net/blog/get-posts-cat/
$arg = array(
		   'posts_per_page' => 8, // 表示する件数
		   'orderby' => 'rand', // 日付でソート
		   'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
		   'category_name' => 'web' // 表示したいカテゴリーのスラッグを指定
	   );
$posts = get_posts( $arg );
if($posts ): ?>
  
<ul class="kanren-post">
<?php
	foreach ( $posts as $post ) :
	setup_postdata( $post ); ?>
    
    <?php $cat = get_the_category(); ?>
	<?php $cat = $cat[0]; ?>
	
    <li>
    <a href="<?php the_permalink(); ?>">
    <div class="kanren-post-thumb"><?php the_post_thumbnail('single-thumbnails'); ?></div>
    <div class="item-time">
    <?php
    if(get_the_time('U') !== get_the_modified_time('U')){
    ?>
        <time class="updated" datetime="<?php the_modified_date("Y-m-d H:i:s") ?>"><?php the_modified_date('Y.m.d') ?></time>
    <?php
    }else{
    ?>
        <time class="entry-date published" datetime="<?php echo get_the_date("Y-m-d H:i:s") ?>"><?php echo get_the_date('Y.m.d') ?></time>
    <?php
    }
    ?>
    </div>
    <div class="kanren-post-title"><h3><?php the_title(); ?></h3></div>
    </a>
    </li><!-- .post End-->
    
<?php endforeach; ?>
</ul>
       
<?php
endif;
wp_reset_postdata();
?>   
<!------------------------------------------------------------------------------------------------------------------------>   