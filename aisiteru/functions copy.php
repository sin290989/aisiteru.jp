<?php
register_sidebar(array(
    'id' => 'sidebar-1'
));
//受信したコメント
function mydesign($comment,$args,$depth){
	$GLOBALS['comment'] = $comment; ?> 
<li class="compost">
<?php comment_text(); ?>
<p class="cominfo">
<?php comment_date(); ?> <?php comment_time(); ?>
｜
<?php comment_author_link(); ?>
</p>
<?php
}
?>
<?php add_theme_support('post-thumbnails'); ?>
<?php add_image_size('single-thumbnails', 750, 0, false); ?>
<?php
//合わせて読みたいショートコード
function related_func ( $atts ) {
    extract( shortcode_atts( array(
        'id' => '', 
        'label' => '合わせて読みたい',
    ), $atts ) );
     
    $ids = mb_split(",",$id);
    $outputTag = '';
     
    if($id):
        $outputTag .= '
        <div class="awasete">
        <div class="awasete-title">
        <span>'.$label.'</span>
        </div>
        <ul>';
  
        foreach($ids as $value):
            if(ctype_digit($value)):
                $link = get_permalink($value);
                $title = get_the_title($value);
                $date = get_the_modified_date('Y.m.d',$value);
                if(get_post_thumbnail_id($value)){
                    $thmbnail_url = wp_get_attachment_url(get_post_thumbnail_id( $value )); 
                }else{
                    $thmbnail_url = '/wp-content/themes/wdd2/images/common/no-image.jpg';   
                }
                $outputTag .='
                <li>
                    <a href="'.$link.'" target="_blank">
					<div class="awasete-wap">
                        <div class="awasete-img">
                        <img src="' . $thmbnail_url . '">
                        </div>
                        <div class="awasete-content">
                        <div class="awasete-content-title">' . $title . '</div>
                        <time class="awasete-content-date pc">' . $date . '<time>
                        </div>
						<div style="clear:both;"></div>
						</div>
                    </a>
                </li>';
            else:
                $outputTag .='<li>記事IDの指定が正しくありません</li>';
            endif;
        endforeach;
        $outputTag .= '</ul></div>';
        return $outputTag;
    else:
        return '
        <div class="awasete">
        <h5 class="awasete-title">
        <span>' . $label . '</span>
        </h5>
        <ul>記事IDがありません</ul>
        </div>';
    endif;
}
add_shortcode('related', 'related_func');
?>
<?php
function authorFunc($atts) {
    extract(shortcode_atts(array(
        'title' => 'この記事を書いた人',
		'profile' => '',
    ), $atts));
	
	ob_start();
	echo '<div class="author-profile">';
	echo '<div class="author-profile-title">'.$title.'</div>';
	echo '<div class="inner">';
	echo '<div class="author-img">'.get_avatar(get_the_author_meta( 'ID' ),100).'</div>';
	echo '<div class="author-info">';
	echo '<div class="author-name">';
	the_author();
	echo '</div>';
	echo '<div class="author-meta">';
	if($profile){
		echo $profile;
	}else{
    the_author_meta('user_description');
	}
	echo '</div>';
	echo '<div class="author-link">';
	echo '<a title="';
	the_author();
	echo '" href="'.get_author_posts_url( get_the_author_meta( 'ID' )).'">';
	the_author();
	echo 'の記事一覧</a></div>';
	echo '</div>';
	echo '<div style="clear:both"></div>';
	echo '</div>';
	echo '</div>';
    return ob_get_clean();
}
add_shortcode('author', 'authorFunc');
?>
<?php
function my_prism() {
  // Prism.jsのcssとjsの呼び出し
  wp_enqueue_style('prism-style', get_stylesheet_directory_uri() . '/prism/prism3.css');
  wp_enqueue_script('prism-script', get_stylesheet_directory_uri() . '/prism/prism3.js', array(), false, false);
}
add_action( 'wp_enqueue_scripts', 'my_prism' );
?>
<?php
/*---------------------------------------------------------*/
/* テキストモードでタグを追加 （my_prism関連の設定だと思われる）*/
/*---------------------------------------------------------*/
function appthemes_add_quicktags() {
    if (wp_script_is('quicktags')){
?>
 <script type="text/javascript">
 QTags.addButton( 'eg_pre_code', 'prism.js', '<pre class="line-numbers" data-line="" data-start=""><code class="language-php">', '</code></pre>', '', '', 201 );
 </script>
<?php
 }
}
add_action( 'admin_print_footer_scripts', 'appthemes_add_quicktags' );
?>
<?php
//https://blog-and-destroy.com/18588
function my_tags_in_cat( $cat_id ){
	// 現在のカテゴリーに属する投稿のIDを配列で取得
	$post_ids = get_objects_in_term( $cat_id, 'category' );
	
	// 現在のカテゴリーに属する投稿で利用しているタグのオブジェクトを取得
	$tags_object = wp_get_object_terms( $post_ids, 'post_tag' );

	return $tags_object;
}
?>
<?php
if ( function_exists('register_sidebar') ) {

  register_sidebar(array(
    'name'          => 'サイドバー1',
    'id'            => 'sidebar-1',
    'description'   => '全て',
    'class'         => 's1',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
  ));

  /*register_sidebar(array(
    'name'          => 'サイドバー(sendai)',
    'id'            => 'sidebar-sendai',
    'description'   => 'sendai・miyagi関連で使用されるサイドバー',
    'class'         => 'side-sendai',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
  ));
    
register_sidebar(array(
    'name'          => 'サイドバー(web)',
    'id'            => 'sidebar-web',
    'description'   => 'web関連で使用されるサイドバー',
    'class'         => 'side-web',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
  ));*/

}
?>
<?php
function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'blog'; //任意のスラッグ名
	}
	return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );
?>
<?php
function change_post_menu_label() {

	global $menu;
	global $submenu;
	$menu[5][0] = 'ブログ';
	$submenu['edit.php'][5][0] = 'ブログ一覧';
	$submenu['edit.php'][10][0] = '新しいブログ';
	$submenu['edit.php'][16][0] = 'タグ';

}
function change_post_object_label() {

	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'ブログ一覧';
	$labels->singular_name = 'ブログ';
	$labels->add_new = _x('追加', 'ブログ');
	$labels->add_new_item = 'ブログの新規追加';
	$labels->edit_item = 'ブログの編集';
	$labels->new_item = '新規ブログ';
	$labels->view_item = 'ブログを表示';
	$labels->search_items = 'ブログを検索';
	$labels->not_found = '記事が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に記事は見つかりませんでした';

}

add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );
?>
<?php
function helloFunc2() {
    $time = wp_date("G");//時刻の24時間表記 (0埋め無し)
    if($time >=5 && $time <= 12){
        $greeting = 'おはようございます！';
    }elseif($time >=12 && $time <= 17){
        $greeting = 'こんにちは！';
    }elseif(($time >=18 && $time <= 23) || ($time >=0 && $time <= 4)){
        $greeting = 'こんばんは！';
    }
    return "仙台の皆さん、".$greeting;
}
add_shortcode('hello2', 'helloFunc2');
?>
<?php
add_action( 'wp_footer', 'add_thanks_page' );
function add_thanks_page() {
echo <<< EOD
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = 'https://andseek.jp/contact/thanks/';
}, false );
</script>
EOD;
}
?>
<?php
add_action( 'wp_enqueue_scripts', function() {
    if(is_page('contact')) return;
    wp_deregister_script( 'google-recaptcha' );
}, 100, 0);
?>
<?php
function custom_post_types_and_taxonomies() {
    // 初心者向けブログ（カテゴリとタグを外した状態）
    register_post_type('basic', array(
        'labels' => array(
            'name' => 'WEBのきほん',
            'singular_name' => 'WEBのきほん',
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'basic'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    ));

    // 同業者向けブログ
    register_post_type('tech', array(
        'labels' => array(
            'name' => 'Tech Notes',
            'singular_name' => 'Tech Notes',
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'tech'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    ));

    // Tech Notes専用カテゴリ
    register_taxonomy('tech_category', 'tech', array(
        'labels' => array(
            'name' => 'Tech Notesカテゴリー',
            'singular_name' => 'Tech Notesカテゴリー',
        ),
        'public' => true,
        'hierarchical' => true, // カテゴリ形式
        'rewrite' => array('slug' => 'tech-category'),
    ));

    // Tech Notes専用タグ
    register_taxonomy('tech_tag', 'tech', array(
        'labels' => array(
            'name' => 'Tech Notesタグ',
            'singular_name' => 'Tech Notesタグ',
            'search_items' => 'Tech Notesタグを検索',
            'popular_items' => '人気のTech Notesタグ',
            'all_items' => 'すべてのTech Notesタグ',
            'edit_item' => 'Tech Notesタグを編集',
            'update_item' => 'Tech Notesタグを更新',
            'add_new_item' => '新しいTech Notesタグを追加',
            'new_item_name' => '新しいTech Notesタグ名',
            'menu_name' => 'Tech Notesタグ',
        ),
        'public' => true,
        'hierarchical' => false, // タグ形式
        'rewrite' => array('slug' => 'tech-tag'),
    ));
}

add_action('init', 'custom_post_types_and_taxonomies');
?>