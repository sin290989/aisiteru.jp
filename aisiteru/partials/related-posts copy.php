<style type="text/css">
/*関連ポスト
================================================================================================*/
ul.related-posts{
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
ul.related-posts li{
	width:200px;
    position:absolute;
}
ul.related-posts li .related-posts-title{
    overflow: hidden;
    margin: 0;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
}
ul.related-posts li .related-posts-title h3{
    font-weight: bold;
}
ul.related-posts .item-time{
    font-size: 12px;
    background-image:url("/wp/wp-content/themes/aisiteru/images/icon/time_bl.png");
    background-repeat:no-repeat;
    background-size:11px auto;
    padding-left:15px;
    background-position:0px 3px;
    margin-bottom: 3px;
    }
ul.related-posts li:nth-child(1){
    top:0;
    left: 20px;
}
ul.related-posts li:nth-child(2){
    top:0;
    left: 250px;
}

ul.related-posts li:nth-child(3){
    top:0;
    left: 480px;
}

ul.related-posts li:nth-child(4){
    top:0;
    left: 710px;
}

ul.related-posts li:nth-child(5){
    top:0;
    left: 940px;
}
    
ul.related-posts li:nth-child(6){
    top:0;
    left: 1170px;
}    
 
ul.related-posts li:nth-child(7){
    top:0;
    left: 1400px;
} 
ul.related-posts li:nth-child(8){
    top:0;
    left: 1630px;
}

ul.related-posts li:nth-child(9){
    top:0;
    left: 1860px;
}
    
ul.related-posts li:nth-child(10){
    top:0;
    left: 2090px;
}    
 
ul.related-posts li:nth-child(11){
    top:0;
    left: 2320px;
} 
ul.related-posts li:nth-child(12){
    top:0;
    left: 2550px;
    padding-right: 30px;
} 

ul.related-posts img{
	width:100%;
	height:auto;
    border-radius: 3px;
    margin-bottom: 10px;
}
ul.related-posts li a {
    white-space:normal;
    display: block;
}
ul.related-posts li a:hover{
	text-decoration:none;
}

h2#related{
	padding:0;
	margin-bottom:10px;
	margin-top:30px;
    border-radius: 3px;
    font-size: 12px;
}
h2#related{
    text-align: left;
    margin-left:30px;
}
h2#related::before{
    white-space: pre;
    font-size: 24px;
    margin-right:15px;
    letter-spacing:1px;
}
h2#related::before{
    content: 'RELATION';
    color:#031b4e;
} 

@media only screen and (min-width: 680px) {
ul.related-posts{
    width: 750px;
    height: 660px;
}
ul.related-posts li{
	width:174px;
}
ul.related-posts li .related-posts-title h3{
    transition-duration: 0.3s;
}
ul.related-posts li .item-time{
    font-size: 12px;
    background-size:10px auto;
    padding-left:17px;
    background-position:left center;
}
ul.related-posts li:nth-child(1){
    top:0;
    left: 0;
}
ul.related-posts li:nth-child(2){
    top:0;
    left: 192px;
}

ul.related-posts li:nth-child(3){
    top:0;
    left: 384px;
}

ul.related-posts li:nth-child(4){
    top:0;
    left: 576px;
}
ul.related-posts li:nth-child(4){
    padding-right: 0;
}  
ul.related-posts li:nth-child(5){
    top:230px;
    left: 0px;
}   
    
ul.related-posts li:nth-child(6){
    top:230px;
    left: 192px;
}    
 
ul.related-posts li:nth-child(7){
    top:230px;
    left: 384px;
} 
ul.related-posts li:nth-child(8){
    top:230px;
    left: 576px;
    padding-right: 0;
}


ul.related-posts li:nth-child(9){
    top:460px;
    left: 0px;
}   
    
ul.related-posts li:nth-child(10){
    top:460px;
    left: 192px;
}    
 
ul.related-posts li:nth-child(11){
    top:460px;
    left: 384px;
} 
ul.related-posts li:nth-child(12){
    top:460px;
    left: 576px;
    padding-right: 0;
}
ul.related-posts li .related-posts-thumb{
    width:174px;
    height: 116px;
    overflow: hidden;
    margin: 0 0 10px 0;
}
ul.related-posts li img{
	width:100%;
    transition-duration: 0.3s;
}

h2#related{
    text-align: left;
    margin-left:0;
}
h2#related{
    margin-top: 60px;
} 
h2#related::before{
    font-size: 24px;
    margin-right:15px;
    letter-spacing: 1px;
}
     
h2#related::before{
     content: ' RELATION';
}
}
</style>

<?php if ( !wp_is_mobile() ) : ?>
<script type="text/javascript">
$(function () {
$('.related-posts li').hover(function(){
    $("h3",this).css('color','#0069ff');
    $(".related-posts-thumb img",this).css('transform','scale(1.1)');
}, function(){
    $("h3",this).css('color','#031b4e');
    $(".related-posts-thumb img",this).css('transform','scale(1)');
});  
});
</script>
<?php endif; ?>

<h2 id="related">関連記事</h2>
<?php
$max_posts = 12; // 表示件数

// 現在の記事のカテゴリ取得
$categories = get_the_category();
$cat_ids = $categories ? wp_list_pluck( $categories, 'term_id' ) : array();

// 最終的に入れる配列
$related_posts = array();

// ------------------------
// ① 同カテゴリ × index タグ
// ------------------------
$args1 = array(
    'posts_per_page' => $max_posts,
    'orderby'        => 'rand',
    'post__not_in'   => array( get_the_ID() ),
    'category__in'   => $cat_ids,
    'tag'            => 'index',
);
$posts1 = get_posts($args1);
$related_posts = $posts1;

// ------------------------
// ② index タグのランダム追加
// ------------------------
if (count($related_posts) < $max_posts) {
    $args2 = array(
        'posts_per_page' => $max_posts - count($related_posts),
        'orderby'        => 'rand',
        'post__not_in'   => array_merge(array(get_the_ID()), wp_list_pluck($related_posts, 'ID')),
        'tag'            => 'index',
    );
    $posts2 = get_posts($args2);
    $related_posts = array_merge($related_posts, $posts2);
}

// ------------------------
// ③ すべての投稿から補完
// ------------------------
if (count($related_posts) < $max_posts) {
    $args3 = array(
        'posts_per_page' => $max_posts - count($related_posts),
        'orderby'        => 'rand',
        'post__not_in'   => array_merge(array(get_the_ID()), wp_list_pluck($related_posts, 'ID')),
    );
    $posts3 = get_posts($args3);
    $related_posts = array_merge($related_posts, $posts3);
}

// ------------------------
// 表示
// ------------------------
if ($related_posts):
?>
<ul class="related-posts">
<?php foreach ( $related_posts as $post ) : setup_postdata( $post ); ?>
    <li>
        <a href="<?php the_permalink(); ?>">
            <div class="related-posts-thumb"><?php the_post_thumbnail('single-thumbnails'); ?></div>

            <div class="item-time">
                <?php if ( get_the_time('U') !== get_the_modified_time('U') ) : ?>
                    <time class="updated" datetime="<?php the_modified_date('Y-m-d H:i:s'); ?>">
                        <?php the_modified_date('Y.m.d'); ?>
                    </time>
                <?php else: ?>
                    <time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>">
                        <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                <?php endif; ?>
            </div>

            <div class="related-posts-title"><h3><?php the_title(); ?></h3></div>
        </a>
    </li>
<?php endforeach; ?>
</ul>
<?php endif;

wp_reset_postdata();
?>


<!------------------------------------------------------------------------------------------------------------------------>   