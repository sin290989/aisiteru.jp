<?php add_theme_support('post-thumbnails'); ?>
<?php add_image_size('single-thumbnails', 750, 0, false); ?>
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
// 「AIが書いた記事」ショートコード（ai_written仕様・AI名対応・安全版）
if ( ! function_exists( 'related_func' ) ) {
    function related_func( $atts ) {

        // 元の属性を保持（label が指定されたか判定するため）
        $raw_atts = $atts;

        // 初期値とマージ（ショートコード名も明示）
        $atts = shortcode_atts(
            array(
                'id'    => '',
                'label' => '合わせて読みたい',
                'ai'    => '', // AI名
            ),
            $atts,
            'ai_written'
        );

        // サニタイズ
        $id_attr = isset( $atts['id'] ) ? trim( $atts['id'] ) : '';
        $label   = sanitize_text_field( $atts['label'] );
        $ai_name = sanitize_text_field( $atts['ai'] );

        // label がユーザーから指定されたかどうか
        $label_specified = is_array( $raw_atts ) && array_key_exists( 'label', $raw_atts );
        $raw_label       = $label_specified ? (string) $raw_atts['label'] : null;

        // ★ label の自動生成ロジック
        // 1) label が指定されていない or 空 で、ai がある → 「ChatGPT が書いた記事」
        if ( ( $raw_label === null || $raw_label === '' ) && $ai_name !== '' ) {
            $label = $ai_name . ' が書いた記事';
        }
        // 2) label も ai もない → デフォルト
        elseif ( $raw_label === null && $ai_name === '' ) {
            $label = 'AIが書いた記事';
        }
        // 3) label が指定されている場合は、その値を優先（上記を何もしない）

        // IDが未指定の場合
        if ( $id_attr === '' ) {
            return '
            <div class="ai-written">
                <h5 class="ai-written-title">
                    <span>' . esc_html( $label ) . '</span>
                </h5>
                <ul><li>記事IDがありません</li></ul>
            </div>';
        }

        // カンマ区切りを配列に（空白もトリム）
        $ids = preg_split( '/\s*,\s*/', $id_attr );

        $output  = '';
        $output .= '<div class="ai-written">';
        /*$output .= '  <div class="ai-written-title">';
        $output .= '    <span>' . esc_html( $label ) . '</span>';
        $output .= '  </div>';*/
        $output .= '  <ul>';

        foreach ( $ids as $value ) {
            if ( $value === '' ) {
                continue;
            }

            // 数字以外はエラー表示
            if ( ! ctype_digit( $value ) ) {
                $output .= '<li>記事IDの指定が正しくありません</li>';
                continue;
            }

            $post_id = absint( $value );
            if ( ! $post_id ) {
                $output .= '<li>記事IDの指定が正しくありません</li>';
                continue;
            }

            $link = get_permalink( $post_id );
            if ( ! $link ) {
                continue;
            }

            $title = get_the_title( $post_id );
            $date  = get_the_modified_date( 'Y.m.d', $post_id );

            if ( has_post_thumbnail( $post_id ) ) {
                $thumbnail_id  = get_post_thumbnail_id( $post_id );
                $thumbnail_url = wp_get_attachment_url( $thumbnail_id );
            } else {
                $thumbnail_url = get_template_directory_uri() . '/images/common/no-image.jpg';
            }

            $output .= '    <li>';
            $output .= '      <a href="' . esc_url( $link ) . '">';
            $output .= '        <div class="ai-written-wap">';
            $output .= '          <div class="ai-written-img">';
            $output .= '            <img src="' . esc_url( $thumbnail_url ) . '" alt="' . esc_attr( $title ) . '">';
            $output .= '          </div>';
            $output .= '          <div class="ai-written-content">';
            $output .= '            <div class="ai-written-content-title">' . esc_html( $title ) . '</div>';
            //$output .= '            <time class="ai-written-content-date pc">' . esc_html( $date ) . '</time>';
            $output .= '          </div>';
            $output .= '          <div style="clear:both;"></div>';
            $output .= '        </div>';
            $output .= '      </a>';
            $output .= '    </li>';

        }

        $output .= '  </ul>';
        $output .= '</div>';

        return $output;
    }
}

// ショートコード名を ai_written に変更
add_shortcode( 'ai_written', 'related_func' );

// ※ もし旧 [related] も動かしたければ、下行を追加
// add_shortcode( 'related', 'related_func' );
?>
<?php
// ★ basic / tech をすべて削除した後の空関数（何も登録しない）
function custom_post_types_and_taxonomies() {
    // ここでは何も登録しません（basic, tech の CPT/タクソノミーは削除済み）
}
add_action('init', 'custom_post_types_and_taxonomies');
?>
<?php
/**
 * AI定義（唯一の定義元）
 */
function aisiteru_get_ai_definitions() {
  return [
    [
      'slug'  => 'gpt',
      'class' => 'chatgpt',
      'label' => 'ChatGPT',
      'kana'  => 'チャットジーピーティー',
    ],
    [
      'slug'  => 'gemini',
      'class' => 'gemini',
      'label' => 'Gemini',
      'kana'  => 'ジェミニ',
    ],
    [
      'slug'  => 'copilot',
      'class' => 'copilot',
      'label' => 'Copilot',
      'kana'  => 'コパイロット',
    ],
    [
      'slug'  => 'grok',
      'class' => 'grok',
      'label' => 'Grok',
      'kana'  => 'グロック',
    ],
    [
      'slug'  => 'claude',
      'class' => 'claude',
      'label' => 'Claude',
      'kana'  => 'クロード',
    ],
    [
      'slug'  => 'perplexity',
      'class' => 'perplexity',
      'label' => 'Perplexity',
      'kana'  => 'パープレキシティ',
    ],
    [
      'slug'  => 'deepseek',
      'class' => 'deepseek',
      'label' => 'DeepSeek',
      'kana'  => 'ディープシーク',
    ],
    [
      'slug'  => 'lechat',
      'class' => 'lechat',
      'label' => 'Le Chat',
      'kana'  => 'ル・シャ',
    ],
  ];
}

/**
 * 固定フッター
 */
function aisiteru_fixed_footer($base_slug) {

  $ais = aisiteru_get_ai_definitions();
  $current_slug = get_post_field('post_name', get_post());
  $items = [];

  foreach ($ais as $ai) {

    $slug = $base_slug . '-' . $ai['slug'];

    // 記事が存在するAIだけ表示
    $post = get_page_by_path($slug, OBJECT, 'post');
    if (!$post || $post->post_status !== 'publish') {
      continue;
    }

    $items[] = [
      'class'  => $ai['class'],
      'label'  => $ai['label'],
      'url'    => home_url('/' . $slug . '/'),
      'active' => ($current_slug === $slug),
    ];
  }

  if (empty($items)) return;
  ?>
  <div class="fixed-footer">
    <div class="footer-text">共通プロンプトでのAI比較記事</div>
    <nav class="icon-nav">
      <?php foreach ($items as $item): ?>
        <div class="icon-item <?= esc_attr($item['class']) ?><?= $item['active'] ? ' active' : '' ?>">
          <a href="<?= esc_url($item['url']) ?>">
            <span class="visually-hidden">
              <?= esc_html($item['label']) ?>の分析記事を読む
            </span>
          </a>
        </div>
      <?php endforeach; ?>
    </nav>
  </div>
  <?php
}

/**
 * ai-list ショートコード
 * 使用例：[ai_list]
 */
function aisiteru_ai_list_shortcode() {

  $base_slug = get_post_meta(get_the_ID(), 'ai_base_slug', true);
  if (!$base_slug) return '';

  $ais = aisiteru_get_ai_definitions();
  $items = [];

  foreach ($ais as $ai) {

    // 記事の存在チェックは slug（gpt など）
    $slug = $base_slug . '-' . $ai['slug'];

    $post = get_page_by_path($slug, OBJECT, 'post');
    if (!$post || $post->post_status !== 'publish') {
      continue;
    }

    $items[] = $ai;
  }

  if (empty($items)) return '';

  ob_start();
  ?>
  <ul class="ai-list">
    <?php foreach ($items as $ai): ?>
      <li class="<?= esc_attr($ai['class']) ?>">
        <a href="#index-<?= esc_attr($ai['class']) ?>">
          <?= esc_html($ai['label']) ?>
          <span>（<?= esc_html($ai['kana']) ?>）</span>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
  <?php

  return ob_get_clean();
}
add_shortcode('ai_list', 'aisiteru_ai_list_shortcode');

?>