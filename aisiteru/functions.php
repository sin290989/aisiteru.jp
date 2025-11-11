<?php add_theme_support('post-thumbnails'); ?>
<?php add_image_size('single-thumbnails', 750, 0, false); ?>
<?php
// カテゴリーに紐づくタグ一覧を取得
function my_tags_in_cat( $cat_id ){
	$post_ids = get_objects_in_term( $cat_id, 'category' );
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
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  ));
}
?>
<?php
// Contact Form 7 送信後にサンクスページへ遷移
add_action( 'wp_footer', 'add_thanks_page' );
function add_thanks_page() {
echo <<< EOD
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = 'https://aisiteru.jp/contact/thanks/';
}, false );
</script>
EOD;
}
?>
<?php
// お問い合わせページ以外で reCAPTCHA を解除
add_action( 'wp_enqueue_scripts', function() {
    if (is_page('contact')) return;
    wp_deregister_script( 'google-recaptcha' );
}, 100, 0);
?>
<?php
// ★ basic / tech をすべて削除した後の空関数（何も登録しない）
function custom_post_types_and_taxonomies() {
    // ここでは何も登録しません（basic, tech の CPT/タクソノミーは削除済み）
}
add_action('init', 'custom_post_types_and_taxonomies');
?>