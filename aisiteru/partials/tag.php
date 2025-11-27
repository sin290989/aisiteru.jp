<h2 class="tagTitle">タグクラウド</h2>  
<?php
// 非表示にするタグスラッグ
$exclude_slugs = array(
    'index',
    'chatgpt',
    'claude',
    'copilot',
    'deepseek',
    'gemini',
    'lechat',
    'perplexity',
    'grok'
);

// すべてのタグを取得（表示順は必要に応じて変更可能）
$tags = get_tags();

if ( $tags ) :
    echo '<ul class="tagcloud">';

    foreach ( $tags as $tag ) {

        // 除外タグならスキップ
        if ( in_array( $tag->slug, $exclude_slugs, true ) ) {
            continue;
        }

        echo '<li><a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '">' 
             . esc_html( $tag->name ) . '</a></li>';
    }

    echo '</ul>';
endif;
?>
