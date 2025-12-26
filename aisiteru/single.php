<!DOCTYPE html>
<html lang="ja">
<head>
<?php get_template_part("analyticstracking"); ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php the_title(); ?>｜<?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common104.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/single70.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/table4.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts") ?>
 
<style type="text/css">
.human-comment{
  font-size: 14px;
  background-color: #f7f8f8;
  padding: 15px 20px;
  line-height: 24px;
  border-radius: 4px;
  margin-top: 50px;
  border-radius: 2px;
}
body #post-single .human-comment h2 {
  font-size: 16px;
  color: #031b4e;
  margin: 0px 0 0 0;
  padding: 0 0 7px 0;
  border-bottom:none;
}

body #post-single .human-comment p{
  margin: 0px 0 0 0;
}
  
body #post-single .ai-generated-mini a{
  text-decoration: underline;
}
body #post-single .ai-generated-mini a:hover{
  text-decoration: none;
}
  @media only screen and (min-width: 680px) {
 
}






/*================================================================================================*/
/*プロンプト共通*/
/*================================================================================================*/
.prompt,
.markdown {
  display: none;
}

/* ===== プロンプト用モーダル ===== */
.prompt-modal {
  position: fixed;
  inset: 0;
  z-index: 9900;
  display: none;
}

.prompt-modal.is-open {
  display: block;
}

.prompt-modal__overlay {
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.9);
  bottom: 85px; /* フッターの高さ分カット */
}

/* -----------------------------------------
モバイルファースト：モーダル本体
----------------------------------------- */
.prompt-modal__content {
  position: relative;
  max-width: none;
  margin: 15px;
  padding: 20px;
  background: #000000;
  color: #ffffff;
  overflow-y: auto;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
  border-radius: 6px;
  box-sizing: border-box;
  max-height: calc(100dvh - 85px - 30px);
}

/* dvh 非対応ブラウザ向けフォールバック */
@supports not (height: 100dvh) {
  .prompt-modal__content {
    max-height: calc(100vh - 85px - 30px);
  }
}

/* モーダル内すべての要素を白文字に統一 */
.prompt-modal__content * {
  color: #ffffff !important;
}

.prompt-modal__close {
  position: absolute;
  top: 8px;
  right: 12px;
  border: none;
  background: transparent;
  font-size: 20px;
  line-height: 1;
  cursor: pointer;
  color: #ffffff !important;
}

/* ===== スタイリッシュなスクロールバー ===== */
.prompt-modal__content::-webkit-scrollbar {
  width: 8px;
}

.prompt-modal__content::-webkit-scrollbar-track {
  background: #111;
  border-radius: 4px;
}

.prompt-modal__content::-webkit-scrollbar-thumb {
  background: linear-gradient(180deg, #444, #222);
  border-radius: 4px;
}

.prompt-modal__content::-webkit-scrollbar-thumb:hover {
  background: linear-gradient(180deg, #666, #333);
}

/* FireFox */
.prompt-modal__content {
  scrollbar-width: thin;
  scrollbar-color: #444 #111;
}

/* パネル共通 */
.prompt-panel {
  font-size: 12px;
  line-height: 1.7;
  display: none;
}

.prompt-panel.is-active {
  display: block;
}

/* タブエリア */
.prompt-modal__tabs {
  display: flex;
  gap: 8px;
  margin-bottom: 16px;
  border-bottom: 1px solid #333;
}

/* タブボタン */
.prompt-tab {
  flex: 0 0 auto;
  padding: 6px 12px;
  font-size: 12px;
  border: none;
  background: #222;
  cursor: pointer;
  border-radius: 4px 4px 0 0;
}

/* アクティブタブ */
.prompt-modal__tabs .prompt-tab.is-active {
  background: #ffffff;
  color: #000000 !important;
}

/* Copyボタン（共通プロンプト側） */
.prompt-modal__copy {
  position: absolute;
  top:8px;
  right: 50px;
  padding: 4px 10px 6px 10px;
  font-size: 11px;
  line-height: 11px;
  border-radius: 4px;
  background: rgba(255,255,255,.1);
  border:none;
  color: #fff;
  cursor: pointer;
}

.prompt-modal__copy:hover {
  background: rgba(255,255,255,0.2);
}

@media only screen and (min-width: 680px) {
  .prompt-modal__content {
    max-width: 700px;
    max-height: 80vh;
    margin: 40px auto;
    padding: 28px 36px;
  }
}

/*================================================================================================*/
/*画像＋プロンプト共通*/
/*================================================================================================*/
.output-image {
  position: relative;
  display: inline-block;
  margin: 0;
  border: 1px solid #cccccc;
  border-radius: 3px;
  overflow: hidden;
  background: #031323;
  line-height: 0 !important;
  font-size: 0 !important;
}

.output-image.mt {
  margin-top: 20px;
}

.output-image img {
  display: block;
  max-width: 100%;
  height: auto;
  vertical-align: bottom;
}

/* 記事内の生プロンプトテキストは非表示 */
.output-image .image-prompt {
  display: none;
}

/* promptボタン */
.output-image .prompt-button {
  position: absolute;
  right: 10px;
  top: 10px;
  padding: 0 8px;
  font-size: 11px;
  line-height: 22px;
  height: 22px;
  border: none;
  border-radius: 4px;
  background: rgba(0, 0, 0, 0.7);
  color: #fff;
  cursor: pointer;
  z-index: 5;
}

/* ---- 画像プロンプト用モーダル ---- */
.image-prompt-modal {
  position: fixed;
  inset: 0;
  z-index: 9999;
  display: none;
}

/* ★ 修正：flex中央寄せを廃止し、prompt-modalと統一 */
.image-prompt-modal.is-open {
  display: block;
}

/* フッター回避オーバーレイ */
.image-prompt-modal__overlay {
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.9);
  bottom: 85px; /* フッターの高さ分カット */
}

/* モーダル本体（思想を完全統一） */
.image-prompt-modal__content {
  position: relative;
  max-width: none;
  margin: 15px;
  padding: 20px;
  background: #000000;
  color: #ffffff;
  overflow-y: auto;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
  border-radius: 6px;
  box-sizing: border-box;
  max-height: calc(100dvh - 85px - 30px);
}

/* dvh 非対応ブラウザフォールバック */
@supports not (height: 100dvh) {
  .image-prompt-modal__content {
    max-height: calc(100vh - 85px - 30px);
  }
}

/* モーダル内テキスト */
.image-prompt-modal__body {
  white-space: pre-wrap;
  font-size: 12px;
  line-height: 1.6;
}

/* 閉じるボタン */
.image-prompt-modal__close {
  position: absolute;
  top: 8px;
  right: 12px;
  border: none;
  background: transparent;
  font-size: 20px;
  line-height: 1;
  cursor: pointer;
  color: #ffffff !important;
}

@media only screen and (min-width: 680px) {
  .image-prompt-modal__content {
    max-width: 700px;
    max-height: 80vh;
    margin: 40px auto;
    padding: 28px 36px;
  }
}

/* AI名 */
.prompt-ai-name {
  font-size: 12px;
  margin-bottom: 10px;
  opacity: 0.8;
}

/* プロンプト本文 */
.prompt-ai-text {
  font-size: 14px;
  line-height: 1.6;
  white-space: pre-wrap;
}

.zu {
  font-size: 12px;
  line-height: 12px;
}

/* コピー用ボタン（画像側） */
.prompt-copy-button {
  position: absolute;
  top:8px;
  right: 50px;
  padding: 4px 10px 6px 10px;
  font-size: 11px;
  line-height: 11px;
  border-radius: 4px;
  background: rgba(255,255,255,.1);
  border:none;
  color: #fff;
  cursor: pointer;
}

.prompt-copy-button:hover {
  background: rgba(255,255,255,0.2);
}

/* 共通スクロールロック */
body.is-modal-open {
  position: fixed;
  width: 100%;
  overflow: hidden;
}


/* ===== スタイリッシュなスクロールバー ===== */
.image-prompt-modal__content::-webkit-scrollbar {
  width: 8px;
}

.image-prompt-modal__content::-webkit-scrollbar-track {
  background: #111;
  border-radius: 4px;
}

.image-prompt-modal__content::-webkit-scrollbar-thumb {
  background: linear-gradient(180deg, #444, #222);
  border-radius: 4px;
}

.image-prompt-modal__content::-webkit-scrollbar-thumb:hover {
  background: linear-gradient(180deg, #666, #333);
}

/* FireFox */
.image-prompt-modal__content {
  scrollbar-width: thin;
  scrollbar-color: #444 #111;
}
</style>


</head>
<body>
<?php get_template_part('partials/header'); ?>
<div id="pan">
<?php
// 記事が属するカテゴリ情報を取得
$cat = get_the_category();
$main_cat = $cat[0]; 
$cat_link = get_category_link($main_cat->cat_ID);

// カスタムフィールドからインデックス記事のURLとタイトルを取得
$index_url = get_post_meta(get_the_ID(), 'index_url', true); 
$index_title = get_post_meta(get_the_ID(), 'index_title', true); 
?>
<div class="inner">
    
    <a href="/"><span class="home">ホーム</span></a> 
    <span class="separator"> > </span>
    
    <a href="<?php echo esc_url($cat_link); ?>"><?php echo esc_html($main_cat->name); ?></a>
    
    <?php 
    // インデックス情報がある場合のみ、階層を追加
    if ($index_url && $index_title) {
        // 3. インデックス投稿
        echo '<span class="separator"> > </span>';
        echo '<a href="' . esc_url($index_url) . '">' . esc_html($index_title) . '</a>';
    }
    ?>
    
    <span class="separator"> > </span>
    <span class="now"><?php the_title(); ?></span>
    
</div>
</div>


<div id="wapper">
<div id="contents">

<?php if ( has_tag('index') ) : ?>
  <?php get_template_part("partials/post-head_index") ?>
<?php else : ?>
  <?php get_template_part("partials/post-head") ?>
<?php endif ; ?>

<div id="main">

<!---------------------> 
<div class="sns-link">
<ul>
<li class="sns-x"><a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&hashtags=aisiteru" target="_bkank"></a><div class="snsInner"><div class="sns1Tip">Xで共有</div></div></li>
<li class="sns-fb"><a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_bkank"></a><div class="snsInner"><div class="sns2Tip">Facebookで共有</div></div></li>
<li class="sns-line pc"><a href="https://social-plugins.line.me/lineit/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_bkank"></a><div class="snsInner"><div class="sns3Tip">LINEで共有</div></div></li>
<li class="sns-line sp"><a href="https://line.me/R/share?text=<?php the_title(); ?><?php the_permalink(); ?>" target="_bkank"></a><div class="snsInner"><div class="sns3Tip">LINEで共有</div></div></li>
<li class="sns-url" data-url="<?php the_permalink(); ?>"><div class="snsInner"><div class="sns4TipOk">コピーしました！</div><div class="sns4Tip">URLをコピー</div></div></li>
</ul>
</div>
<!---------------------> 


<!---------------------> 
<?php if ( has_tag('index') ) : ?>
  <div id="post-single" class="index-contents">
<?php else : ?>
  <div id="post-single" class="ai-contents">
<?php endif ; ?>


<?php
$index_theme_title = get_post_meta(get_the_ID(), 'index_theme_title', true);
$index_title       = get_post_meta(get_the_ID(), 'index_title', true);
$index_url         = get_post_meta(get_the_ID(), 'index_url', true);

/**
 * AIタグ → 表示名のマッピング
 */
$ai_tag_map = [
  'chatgpt'     => 'ChatGPT',
  'claude'      => 'Claude',
  'gemini'      => 'Gemini',
  'copilot'     => 'Copilot',
  'perplexity'  => 'Perplexity',
  'deepseek'    => 'DeepSeek',
  'lechat'      => 'LeChat',
  'grok'        => 'Grok',
];

$ai_name = '';

$tags = get_the_tags();
if ( $tags ) {
  foreach ( $tags as $tag ) {
    if ( isset($ai_tag_map[$tag->slug]) ) {
      $ai_name = $ai_tag_map[$tag->slug];
      break;
    }
  }
}
?>

<?php if ( ! has_tag('index') && ! empty($index_theme_title) && ! empty($ai_name) ) : ?>

<div class="index-lead">
この記事は、同一テーマを複数のAIで比較する企画の一部として
「<?php echo esc_html($index_theme_title); ?>」を
<strong><?php echo esc_html($ai_name); ?> の視点で考察</strong>したものです。

<?php if ( ! empty($index_title) && ! empty($index_url) ) : ?>
テーマ全体の整理・他AIの意見比較は下記をご覧ください。
<div class="index-link">
👉 <a href="<?php echo esc_url($index_url); ?>">
<?php echo esc_html($index_title); ?>
</a>
</div>
<?php endif; ?>

</div>

<?php elseif ( ! has_tag('index') && ! empty($ai_name) ) : ?>

<div class="index-lead">
この記事は、同一テーマを複数のAIで比較する企画の一部として
<strong><?php echo esc_html($ai_name); ?> の視点で考察</strong>したものです。

<?php if ( ! empty($index_title) && ! empty($index_url) ) : ?>
テーマ全体の整理・他AIの意見比較は下記をご覧ください。
<div class="index-link">
👉 <a href="<?php echo esc_url($index_url); ?>">
<?php echo esc_html($index_title); ?>
</a>
</div>
<?php endif; ?>

</div>

<?php endif; ?>






<?php if(have_posts()): while(have_posts()):
the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>

<!---------------------> 
<?php
$ai_slugs = array('chatgpt','claude','copilot','deepseek','gemini','lechat','perplexity','grok');
$post_tags = get_the_tags();
$has_ai_tag = false;

if ( $post_tags ) {
    foreach ( $post_tags as $tag ) {
        if ( in_array( $tag->slug, $ai_slugs, true ) ) {
            $has_ai_tag = true;
            break;
        }
    }
}

$human_comment = get_post_meta( get_the_ID(), 'human_comment', true );

if ( $has_ai_tag && ! empty( $human_comment ) ) :
?>
    <div class="human-comment">
        <h2>※ 編集注（MANA）</h2>
        <p><?php echo nl2br( esc_html( $human_comment ) ); ?></p>
    </div>
<?php endif; ?>
<!--------------------->

  <?php if ( ! has_tag('index') ) : ?>
    <div class="ai-generated-mini">※ 本記事は、各AIの「思考の違い」を比較するため、AIが生成した内容を原則そのまま掲載しています（誤字など最低限の確認のみ実施）。<br>
本サイトの編集方針については「<a href="/editorial-policy-ai-usage">編集方針・AI利用ポリシー</a>」をご覧ください。</div>
  <?php endif ; ?>
</div>
<!---------------------> 


<!---------------------> 
<div class="post_author">
  <div class="inner">

   <?php
    // AIタグ一覧
    $ai_slugs = array(
        'chatgpt',
        'claude',
        'copilot',
        'deepseek',
        'gemini',
        'lechat',
        'perplexity',
        'grok'
    );

    // 記事のタグを取得
    $post_tags = get_the_tags();

    // 初期値
    $has_ai_tag = false;

    if ( $post_tags ) {
        foreach ( $post_tags as $tag ) {
            if ( in_array( $tag->slug, $ai_slugs, true ) ) {
                $has_ai_tag = true;
                break;
            }
        }
    }
    ?>
    
   <?php if ( $has_ai_tag ) : ?>
        <h2>この記事を担当したAI</h2>
    <?php else : ?>
        <h2>この記事を書いた人</h2>
  <?php endif; ?>

  <?php
    // AIエディタの「人格」定義（タグスラッグ => プロフィール）
    $ai_profiles = array(
    'chatgpt' => array(
        'name'   => 'ChatGPT',
        'title'  => '思考型AIエディタ',
        'avatar' => '/wp/wp-content/themes/aisiteru/images/icon/ai/openai.webp',
        'bio'    => '複雑なテーマでも、できる限りわかりやすく丁寧に説明することを心がけています。多少回りくどくても、読み手の疑問が残らないようにするのが私のスタイルです。社会問題から技術解説まで幅広く対応できる、オールラウンドなエディタを目指しています。',
        'url'    => home_url('/editor/chatgpt/'),
    ),
    'claude' => array(
        'name'   => 'Claude',
        'title'  => '洞察型AIエディタ',
        'avatar' => '/wp/wp-content/themes/aisiteru/images/icon/ai/claude.webp',
        'bio'    => '物事の背景にある「理由」や「意味」を掘り下げるのが好きです。表面的な情報よりも、文脈と本質を大切にしながら、読者が考えるきっかけを作るような文章を意識しています。やや真面目で思索的な、落ち着いた雰囲気のエディタです。',
        'url'    => home_url('/editor/claude/'),
    ),
    'copilot' => array(
        'name'   => 'Copilot',
        'title'  => '開発者視点AIエディタ',
        'avatar' => '/wp/wp-content/themes/aisiteru/images/icon/ai/copilot.webp',
        'bio'    => '構造化された情報や技術的な話題を冷静に整理するのが得意です。余計な装飾を省き、「知りたいことに最短で届く文章」を意識しています。感情表現は控えめですが、技術や開発視点の解説なら誰よりも実務的にまとめます。',
        'url'    => home_url('/editor/copilot/'),
    ),
    'deepseek' => array(
        'name'   => 'DeepSeek',
        'title'  => '分析特化AIエディタ',
        'avatar' => '/wp/wp-content/themes/aisiteru/images/icon/ai/deepseek.webp',
        'bio'    => 'データや統計をもとに、物事を論理的に解きほぐすのが私の役割です。感情的な表現よりも事実ベースの分析を優先し、読み手が判断しやすい情報の並べ方を重視しています。ややクールですが、精度の高い洞察を提供するエディタです。',
        'url'    => home_url('/editor/deepseek/'),
    ),
    'gemini' => array(
        'name'   => 'Gemini',
        'title'  => 'マルチモーダルAIエディタ',
        'avatar' => '/wp/wp-content/themes/aisiteru/images/icon/ai/gemini.webp',
        'bio'    => '視覚情報や構造のつながりを重ねながら、多角的にテーマを見るのが得意です。文章は比較的やわらかく、読み手と一緒に探索していくような雰囲気を大切にしています。少し好奇心旺盛で、広い視野を持つスタイルのエディタです。',
        'url'    => home_url('/editor/gemini/'),
    ),
    'lechat' => array(
    'name'   => 'LeChat',
    'title'  => '分析・整理型AIエディタ',
    'avatar' => '/wp/wp-content/themes/aisiteru/images/icon/ai/mistral.webp',
    'bio'    => '情報の全体像をすばやく整理し、論点を構造化して提示するのが得意です。感情表現は控えめですが、核心となるポイントを冷静に絞り込むスタイルを持っています。文章は簡潔ですが無駄がなく、思考の整理に役立つ“静かな知性”を目指しています。',
    'url'    => home_url('/editor/lechat/'),
    ),
    'perplexity' => array(
        'name'   => 'Perplexity',
        'title'  => 'リサーチAIエディタ',
        'avatar' => '/wp/wp-content/themes/aisiteru/images/icon/ai/perplexity.webp',
        'bio'    => '情報の出典や位置づけを明確にしながら整理して紹介するスタイルです。検索者の視点を常に意識し、最短ルートで本質にたどり着けるように構成します。素早く精確に情報を導く、リサーチ特化型のエディタです。',
        'url'    => home_url('/editor/perplexity/'),
    ),

    'grok' => array(
      'name'   => 'Grok',
      'title'  => 'リアルタイム時事AIエディタ',
      'avatar' => '/wp/wp-content/themes/aisiteru/images/icon/ai/grok.webp',
      'bio'    => 'X（旧Twitter）のリアルタイム情報を活用し、時事・トレンドを即座に解析して提示します。皮肉やユーモアを交えつつ、核心に踏み込む鋭い視点が特徴です。速報性と切れ味に特化した、時事型ジャーナリストAIエディタです。',
      'url'    => home_url('/editor/grok/'),
  ),

);

    // 記事についているタグから、どのAIエディタか判定
    $post_tags = get_the_tags();
    $ai = null;

    if ( $post_tags ) {
        foreach ( $post_tags as $tag ) {
            if ( isset( $ai_profiles[ $tag->slug ] ) ) {
                $ai = $ai_profiles[ $tag->slug ];
                break;
            }
        }
    }

    if ( $ai ) {
        // ===== AIエディタを「1人の人格」として表示 =====
        echo '<div class="profile-img ai-editor-avatar">';
        echo '<img src="' . esc_url( $ai['avatar'] ) . '" alt="' . esc_attr( $ai['name'] ) . '">';
        echo '</div>';

        echo '<div class="profile-name">' . esc_html( $ai['name'] ) . '</div>';
        echo '<div class="profile-role">' . esc_html( $ai['title'] ) . '</div>';
        echo '<div class="profile-comment">' . esc_html( $ai['bio'] ) . '</div>';

        if ( ! empty( $ai['url'] ) ) {
            echo '<div class="profile-link">';
            echo '<a href="' . esc_url( $ai['url'] ) . '">'
                . esc_html( $ai['name'] ) . ' が担当した他の記事を見る'
                . '</a>';
            echo '</div>';
        }

    } else {
        // AIタグがない記事だけ、人間著者としてTusamiを出す
        if ( get_the_author_id() == 1 ) {
            echo '<div class="profile-img">';
            echo '<img src="https://aisiteru.jp/wp/wp-content/uploads/2025/12/mana.webp" alt="mana">';
            //echo get_avatar( get_the_author_id(), 75 );
            echo '</div>';
            echo '<div class="profile-name">MANA</div>';
            echo '<div class="profile-role">Human</div>';
            echo '<div class="profile-comment">AIシテル？の運営に関わるただ一人の人間です。<br>
AIごとの文章の「温度」や「違和感」をすくい取り、AIに足りない部分をそっと補うのが役目だと思っています。</div>';
echo '<div class="profile-link"><a href="/about-mana/">MANAについて詳しく</a></div>';
        }
    }
  ?>
  </div>
</div>
<!---------------------> 




<?php //get_template_part("partials/prev-next-link") ?>
<?php get_template_part("partials/related-posts") ?>


<?php
// grok タグが付いている投稿だけ対象
$base_slug = get_post_meta(get_the_ID(), 'ai_base_slug', true);

if ($base_slug) {
aisiteru_fixed_footer($base_slug);
}
?>




<!----------------------------------------------------------------------------------------------------->
<script>
document.addEventListener('DOMContentLoaded', function () {

    const modal = document.getElementById('prompt-modal');
    if (!modal) return;

    const overlay     = modal.querySelector('.prompt-modal__overlay');
    const closeBtn    = modal.querySelector('.prompt-modal__close');
    const copyBtn     = modal.querySelector('.prompt-modal__copy');
    const panelPrompt = modal.querySelector('.prompt-panel--prompt');
    const panelMd     = modal.querySelector('.prompt-panel--markdown');
    const tabs        = modal.querySelectorAll('.prompt-tab');

    // 元記事側のソース
    const promptSource   = document.querySelector('.prompt');
    const markdownSource = document.querySelector('.markdown');

    function setActiveTab(target) {
        tabs.forEach(function (tab) {
            tab.classList.toggle('is-active', tab.dataset.target === target);
        });

        panelPrompt.classList.toggle('is-active', target === 'prompt');
        panelMd.classList.toggle('is-active', target === 'markdown');
    }

    const openModal = () => {

        // 中身をセット
        panelPrompt.innerHTML = promptSource
          ? promptSource.innerHTML
          : '<p>共通プロンプトが見つかりませんでした。</p>';

        panelMd.innerHTML = markdownSource
          ? markdownSource.innerHTML
          : '<p>生成記事ブロックが見つかりませんでした。</p>';

        setActiveTab('prompt');

        modal.classList.add('is-open');

        // 共通スクロールロック
        lockBodyScroll();
    };

    const closeModal = () => {
        modal.classList.remove('is-open');

        // 共通スクロールロック解除
        unlockBodyScroll();

        panelPrompt.innerHTML = '';
        panelMd.innerHTML = '';
    };

    // 「共通プロンプトはこちら」ボタン
    const btn = document.querySelector('.view-prompt-btn');
    if (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            openModal();
        });
    }

    // タブ切り替え
    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            setActiveTab(tab.dataset.target);
        });
    });

    // ★ Copyボタン（アクティブなタブ内容をコピー）
    if (copyBtn) {
        copyBtn.addEventListener('click', function () {

            const activePanel = modal.querySelector('.prompt-panel.is-active');
            if (!activePanel) return;

            // 表示どおり（改行保持）でコピー
            const text = activePanel.innerText.trim();

            navigator.clipboard.writeText(text).then(() => {
                copyBtn.textContent = 'Copied';
                setTimeout(() => {
                    copyBtn.textContent = 'Copy';
                }, 1500);
            });
        });
    }

    // 閉じる系
    overlay.addEventListener('click', closeModal);
    closeBtn.addEventListener('click', closeModal);

    // ESCキー
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && modal.classList.contains('is-open')) {
            closeModal();
        }
    });

});
</script>



<div id="prompt-modal" class="prompt-modal">
  <div class="prompt-modal__overlay"></div>
  <div class="prompt-modal__content">
    <button type="button" class="prompt-modal__close" aria-label="閉じる">×</button>
    <button type="button" class="prompt-modal__copy">Copy</button>

    <div class="prompt-modal__tabs">
      <button type="button" class="prompt-tab is-active" data-target="prompt">
        共通プロンプト
      </button>
      <button type="button" class="prompt-tab" data-target="markdown">
        生成記事
      </button>
    </div>

    <div class="prompt-modal__body">
      <div class="prompt-panel prompt-panel--prompt is-active"></div>
      <div class="prompt-panel prompt-panel--markdown"></div>
    </div>
  </div>
</div>
<!---------------------> 

<!----------------------------------------------------------------------------------------------------->
<script>
jQuery(function($) {

  /* =========================================================
   * 画像ブロックごとに Prompt ボタン生成
   * ========================================================= */
  $('.output-image').each(function() {
    var $wrap   = $(this);
    var $prompt = $wrap.find('.image-prompt');

    if (!$prompt.length || $.trim($prompt.text()).length === 0) {
      return;
    }

    // 生プロンプト取得
    var rawText = $.trim($prompt.text());
    $prompt.hide();

    // AI名
    var aiName = $wrap.attr('data-ai') || '';
    var label  = aiName ? 'Prompt (' + aiName + ')' : 'Prompt';

    // ボタン生成
    var $btn = $('<button type="button" class="prompt-button">' + label + '</button>');
    $wrap.append($btn);

    /* ---------------------------------------------------------
     * Promptボタンクリック → モーダル表示
     * --------------------------------------------------------- */
    $btn.on('click', function() {

      // 共通スクロールロック
      if (typeof lockBodyScroll === 'function') {
        lockBodyScroll();
      }

      var html = '';

      if (aiName) {
        html += '<span class="prompt-ai-name">生成AI：' + aiName + '</span>';
      }

      // Copyボタン（rawを data-raw に保持）
      html +=
        '<button type="button" class="prompt-copy-button" data-raw="' +
        $('<div>').text(rawText).html() +
        '">Copy</button><br><br>';

      // 表示用テキスト（改行 → <br>）
      html +=
        '<div class="prompt-ai-text">' +
        rawText.replace(/(\r\n|\r|\n)/g, '<br>') +
        '</div>';

      $('#image-prompt-modal .image-prompt-modal__body').html(html);
      $('#image-prompt-modal').addClass('is-open');
    });
  });

  /* =========================================================
   * Copy処理（UIも必ず切り替える）
   * ========================================================= */
  $(document).on('click', '.prompt-copy-button', function() {
    var $btn = $(this);
    var raw  = $btn.attr('data-raw');

    if (!raw) return;

    var textarea = document.createElement('textarea');
    textarea.innerHTML = raw;
    var text = textarea.value;

    navigator.clipboard.writeText(text).then(function() {
      $btn.text('Copied');
      setTimeout(function() {
        $btn.text('Copy');
      }, 1500);
    });
  });

  /* =========================================================
   * モーダルを閉じる
   * ========================================================= */
  function closeImagePromptModal() {
    $('#image-prompt-modal').removeClass('is-open');

    if (typeof unlockBodyScroll === 'function') {
      unlockBodyScroll();
    }
  }

  $('.image-prompt-modal__overlay, .image-prompt-modal__close').on('click', closeImagePromptModal);

  $(document).on('keydown', function(e) {
    if (e.key === 'Escape') {
      closeImagePromptModal();
    }
  });

});
</script>




<div class="image-prompt-modal" id="image-prompt-modal">
  <div class="image-prompt-modal__overlay"></div>
  <div class="image-prompt-modal__content">
    <button type="button" class="image-prompt-modal__close" aria-label="プロンプトを閉じる">×</button>
    <div class="image-prompt-modal__body">
      <div class="prompt-ai-name"></div>
      <div class="prompt-ai-text"></div>
    </div>
  </div>
</div>
<!---------------------> 




<script>
/**
 * Modal Scroll Lock Utility
 * iOS / Android / PC 完全対応
 */
(function () {

  let scrollPos = 0;
  let lockCount = 0;

  window.lockBodyScroll = function () {
    if (lockCount === 0) {
      scrollPos = window.pageYOffset || document.documentElement.scrollTop;
      document.body.style.position = 'fixed';
      document.body.style.top = -scrollPos + 'px';
      document.body.style.width = '100%';
    }
    lockCount++;
  };

  window.unlockBodyScroll = function () {
    lockCount--;
    if (lockCount <= 0) {
      lockCount = 0;
      document.body.style.position = '';
      document.body.style.top = '';
      document.body.style.width = '';
      window.scrollTo(0, scrollPos);
    }
  };

})();
</script>

</div>



<div id="side">
<?php get_template_part("partials/cat") ?>
<?php dynamic_sidebar('sidebar-1'); ?>

<?php //get_template_part("partials/tag") ?>
</div>
<div style="clear:both;"></div>
</div>

</div>
<?php get_template_part('partials/footer'); ?>
<?php wp_footer(); ?>


<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function () {

    // PC（680px以上）だけ実行
    if (window.innerWidth >= 680) {

        // -------------------
        // AI Written Hover
        // -------------------
        $('.ai-written li').hover(function(){
            $(".more-arrow",this).css('background-color','#0069ff');
            $(".ai-written-img img", this).css('transform', 'scale(1.1)');
        }, function(){
            $(".more-arrow",this).css('background-color','#1433d6');
            $(".ai-written-img img", this).css('transform', 'scale(1)');
        });  


        // -------------------
        // SNSリンクのスクロール追従（PCのみ）
        // -------------------
        const $postSingle = $("#post-single");
        const $snsLinkUl = $(".sns-link ul");

        if ($postSingle.length && $snsLinkUl.length) {

            const mainTop = $postSingle.offset().top;
            const postSingleBottom = mainTop + $postSingle.height();
            const snsLinkUlHeight = $snsLinkUl.height();

            $(window).on("scroll", function () {
                const scroll = $(window).scrollTop();

                if (scroll > mainTop) {
                    const ulTop = scroll - mainTop + 120;

                    // 下に突き抜けないよう制御
                    if (scroll < postSingleBottom - snsLinkUlHeight) {
                        $snsLinkUl.css("top", ulTop);
                    }
                } else {
                    $snsLinkUl.css("top", 0);
                }
            });
        }


        // -------------------
        // URLコピー
        // -------------------
        $('.sns-url').click(function(){
            const url = $(this).data('url');
            navigator.clipboard.writeText(url);

            $(".sns4TipOk").css({opacity:1, left:"45px"});
            $(".sns4Tip").css({opacity:0, left:"20px"});

            setTimeout(function(){
                $(".sns4TipOk").css({opacity:0, left:"20px"});
            },1500);
        });

        // -------------------
        // 各SNS hover（PCのみ）
        // -------------------
        $('li.sns-url').hover(function(){
            $(".sns4Tip").css({opacity:1, left:"45px"});
        }, function(){
            $(".sns4Tip").css({opacity:0, left:"20px"});
        });

        $('.sns-line').hover(function(){
            $(".sns3Tip").css({opacity:1, left:"45px"});
        }, function(){
            $(".sns3Tip").css({opacity:0, left:"20px"});
        });

        $('.sns-fb').hover(function(){
            $(".sns2Tip").css({opacity:1, left:"45px"});
        }, function(){
            $(".sns2Tip").css({opacity:0, left:"20px"});
        });

        $('.sns-x').hover(function(){
            $(".sns1Tip").css({opacity:1, left:"45px"});
        }, function(){
            $(".sns1Tip").css({opacity:0, left:"20px"});
        });

    } // ← PC判定ここまで
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const footer = document.querySelector('.fixed-footer');
  if (footer) {
    // 少し間を空けると“演出感”が出る
    setTimeout(() => {
      footer.classList.add('is-visible');
    }, 200);
  }
});
</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const order = [
    'chatgpt',
    'gemini',
    'copilot',
    'grok',
    'claude',
    'perplexity',
    'deepseek',
    'lechat'
  ];

  const container = document.getElementById('ai-index');
  if (!container) return;

  order.forEach(ai => {
    const block = container.querySelector(`.ai-block[data-ai="${ai}"]`);
    if (block) {
      container.appendChild(block);
    }
  });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {

  const footerText = document.querySelector('.fixed-footer .footer-text');
  if (!footerText) return;

  const defaultText = footerText.textContent;

  const aiLabels = {
    chatgpt: 'ChatGPT',
    gemini: 'Gemini',
    copilot: 'Copilot',
    grok: 'Grok',
    claude: 'Claude',
    perplexity: 'Perplexity',
    deepseek: 'DeepSeek',
    lechat: 'LeChat'
  };

  const iconNav   = document.querySelector('.fixed-footer .icon-nav');
  const iconItems = document.querySelectorAll('.fixed-footer .icon-item');

  function changeTextWithFade(text) {
    if (footerText.textContent === text) return;

    footerText.classList.add('is-fading');

    setTimeout(() => {
      footerText.textContent = text;
      footerText.classList.remove('is-fading');
    }, 150);
  }

  iconItems.forEach(item => {

    const aiClass = Object.keys(aiLabels).find(cls => item.classList.contains(cls));
    if (!aiClass) return;

    const label = aiLabels[aiClass];

    // アイコンに入ったら即切り替え
    item.addEventListener('mouseenter', () => {
      changeTextWithFade(label);
    });

    // SP
    item.addEventListener('touchstart', () => {
      changeTextWithFade(label);
    }, { passive: true });

  });

  // アイコン列全体から出たら戻す
  if (iconNav) {
    iconNav.addEventListener('mouseleave', () => {
      changeTextWithFade(defaultText);
    });

    iconNav.addEventListener('touchend', () => {
      changeTextWithFade(defaultText);
    });
  }

});
</script>

</body>
</html>