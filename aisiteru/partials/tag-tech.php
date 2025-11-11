<h2 class="tagTitle">タグクラウド</h2>  
<ul class="tagcloud">
<?php
$taxonomy = 'tech_tag'; // Tech Notes用のタクソノミー
$term_list = get_terms(array(
    'taxonomy' => $taxonomy,
    'hide_empty' => true, // 投稿がないタグを非表示
));

if (!is_wp_error($term_list) && !empty($term_list)) {
    foreach ($term_list as $term) {
        $u = get_term_link($term, $taxonomy); // タグのリンクを取得
        echo "<li><a href='" . esc_url($u) . "'>" . esc_html($term->name) . "</a></li>";
    }
} else {
    echo "<li>タグがありません。</li>";
}
?>
</ul>