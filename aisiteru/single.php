<!DOCTYPE html>
<html lang="ja">
<head>
<?php get_template_part("analyticstracking"); ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php the_title(); ?>｜<?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common121.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/single95.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/table4.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts") ?>

</head>
<body>
<?php get_template_part('partials/header2'); ?>
<div id="pan">
<?php
// 記事が属するカテゴリ情報を取得
$cat = get_the_category();
$main_cat = $cat[0]; 
$cat_link = get_category_link($main_cat->cat_ID);

// カスタムフィールドから取得
$ai_base_slug = get_post_meta(get_the_ID(), 'ai_base_slug', true);
$index_title  = get_post_meta(get_the_ID(), 'index_title', true);

// ai_base_slug から index_path を生成
$index_path = $ai_base_slug ? '/' . trim($ai_base_slug, '/') . '/' : '';
?>
<div class="inner">
    
    <a href="/"><span class="home">ホーム</span></a> 
    <span class="separator"> > </span>
    
    <a href="<?php echo esc_url($cat_link); ?>">
        <?php echo esc_html($main_cat->name); ?>
    </a>
    
    <?php
    // インデックス情報がある場合のみ、階層を追加
    if ( $index_path && $index_title ) {
        echo '<span class="separator"> > </span>';
        echo '<a href="' . esc_url($index_path) . '">' . esc_html($index_title) . '</a>';
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
$ai_base_slug      = get_post_meta(get_the_ID(), 'ai_base_slug', true);

// ai_base_slug から index_path を生成
$index_path = $ai_base_slug ? '/' . trim($ai_base_slug, '/') . '/' : '';

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

<?php if ( ! empty($index_title) && ! empty($index_path) ) : ?>
テーマ全体の整理・他AIの意見比較は下記をご覧ください。
<div class="index-link">
<a href="<?php echo esc_url($index_path); ?>">
<?php echo esc_html($index_title); ?>
</a>
</div>
<?php endif; ?>

</div>

<?php elseif ( ! has_tag('index') && ! empty($ai_name) ) : ?>

<div class="index-lead">
この記事は、同一テーマを複数のAIで比較する企画の一部として
<strong><?php echo esc_html($ai_name); ?> の視点で考察</strong>したものです。

<?php if ( ! empty($index_title) && ! empty($index_path) ) : ?>
テーマ全体の整理・他AIの意見比較は下記をご覧ください。
<div class="index-link">
<a href="<?php echo esc_url($index_path); ?>">
<?php echo esc_html($index_title); ?>
</a>
</div>
<?php endif; ?>

</div>

<?php endif; ?>


<?php if (has_tag('index')) : ?>
<div class="index-lead">
この記事は、同一テーマについて複数のAIが行った考察を束ねた「比較インデックス」です。
結論を示すのではなく、視点の違いそのものを読むことを目的としています。
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
        <h2>この考察を生成したAI</h2>
    <?php else : ?>
        <h2>このテーマを設計した人</h2>
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
            echo '<div class="profile-role">Human / Editorial Role</div>';
            echo '<div class="profile-comment"Iシテル？において、記事を書くのではなく、問いと構造を設計する編集人格です。<br>
複数のAIが同じ条件で考察できるよう枠組みを整え、文章の「温度差」や違和感が読者の思考を歪めないよう、最小限の調整だけを行っています。<br>
MANAは答えを示す存在ではありません。考察が成立する「場」を整えることが役割です。</div>';
echo '<div class="profile-link"><a href="/about-mana/">MANAについて詳しく</a></div>';
        }
    }
  ?>
  </div>
</div>
<!---------------------> 










<?php
// ===============================
// クラスタ導線ブロック（OR論理対応・完全版）
// ===============================

// 投稿に設定されたクラスタURL用スラッグ
$cluster_slug = get_post_meta(get_the_ID(), 'cluster_slug', true);

// 今見ているAI記事の base slug（INDEX識別用）
$base_slug = get_post_meta(get_the_ID(), 'ai_base_slug', true);

// 必須タグ
$index_tag_slug = 'index';

// ===============================
// クラスタ定義
// ===============================
$cluster_map = array(

  'exam-education' => array(
    'tags'  => array('season-exam'),
    'label' => '受験・教育',
    'parent'=> null,
  ),

  'cabinet-dissolution' => array(
    'tags'  => array('cabinet-dissolution','dissolution-election'),
    'label' => '内閣解散・解散総選挙',
    'parent'=> null,
  ),

  'taiga-drama' => array(
    'tags'  => array('taiga-drama'),
    'label' => '大河ドラマ',
    'parent'=> null,
  ),

  'finance' => array(
    'tags'  => array('finance'),
    'label' => '金融',
    'parent'=> null,
  ),

  'game' => array(
    'tags'  => array('game'),
    'label' => 'ゲーム',
    'parent'=> null,
  ),

  'olympics' => array(
    'tags'  => array('olympics'),
    'label' => 'オリンピック',
    'parent'=> null,
  ),

  'love' => array(
    'tags'  => array('love'),
    'label' => '恋愛',
    'parent'=> null,
  ),

  // =========================
  // ★ 働き方（親構造クラスタ）
  // =========================
  'work-style' => array(
    'tags'  => array(
        'career',
        'wage',
        'employment-type',
        'working-hours',
        'performance-evaluation',
        'job-change',
        'side-job',
        'ai-work',   // ★ AIと仕事
        'b2b-saas'     // ★ 追加：法人SaaS
    ),
    'label' => '働き方',
    'parent'=> null,
  ),

  'wage' => array(
    'tags'  => array('wage'),
    'label' => '賃金',
    'parent'=> 'work-style',
  ),

  'career' => array(
    'tags'  => array('career'),
    'label' => 'キャリア',
    'parent'=> 'work-style',
  ),

  // ★ 雇用形態
  'employment-type' => array(
    'tags'  => array('employment-type'),
    'label' => '雇用形態',
    'parent'=> 'work-style',
  ),

  // ★ 労働時間
  'working-hours' => array(
    'tags'  => array('working-hours'),
    'label' => '労働時間',
    'parent'=> 'work-style',
  ),

  // ★ 評価制度
  'performance-evaluation' => array(
    'tags'  => array('performance-evaluation'),
    'label' => '評価制度',
    'parent'=> 'work-style',
  ),

  // ★ 転職
  'job-change' => array(
    'tags'  => array('job-change'),
    'label' => '転職',
    'parent'=> 'work-style',
  ),

  // ★ 副業
  'side-job' => array(
    'tags'  => array('side-job'),
    'label' => '副業',
    'parent'=> 'work-style',
  ),

  // ★ AIと仕事
  'ai-work' => array(
    'tags'  => array('ai-work'),
    'label' => 'AIと仕事',
    'parent'=> 'work-style',
  ),

  // ★ 追加：法人SaaS
  'b2b-saas' => array(
    'tags'  => array('b2b-saas'),
    'label' => '法人SaaS',
    'parent'=> 'work-style',
  ),

 // =========================
  // ★ お金（親構造クラスタ）
  // =========================
  'money' => array(
      'tags'  => array(
          'inheritance',
          'digital-money',
          'investment',
          'credit',
          'property',
          'insurance',
          'consumption',
          'tax-return' // ★ 追加：確定申告
      ),
      'label' => 'お金',
      'parent'=> null,
  ),

  // 子テーマ
  'inheritance' => array(
      'tags'  => array('inheritance'),
      'label' => '相続',
      'parent'=> 'money',
  ),

  'digital-money' => array(
      'tags'  => array('digital-money'),
      'label' => 'デジタル通貨',
      'parent'=> 'money',
  ),

  'investment' => array(
      'tags'  => array('investment'),
      'label' => '投資',
      'parent'=> 'money',
  ),

  // ★ ローン
  'credit' => array(
      'tags'  => array('credit'),
      'label' => 'ローン',
      'parent'=> 'money',
  ),

  // ★ 保険
  'insurance' => array(
      'tags'  => array('insurance'),
      'label' => '保険',
      'parent'=> 'money',
  ),

  // ★ 消費
  'consumption' => array(
      'tags'  => array('consumption'),
      'label' => '消費',
      'parent'=> 'money',
  ),

  // ★ 追加：確定申告
  'tax-return' => array(
      'tags'  => array('tax-return'),
      'label' => '確定申告',
      'parent'=> 'money',
  ),

   // ★ 不動産
   'property' => array(
    'tags'  => array('property'),
    'label' => '不動産',
    'parent'=> 'money',
  ),

  // =========================
  // ★ イベント（親構造クラスタ）
  // =========================
  'event' => array(
    'tags'  => array('wbc','hakone-ekiden','koshien'),
    'label' => 'イベント',
    'parent'=> null,
  ),

  // 子テーマ：WBC
  'wbc' => array(
    'tags'  => array('wbc'),
    'label' => 'WBC',
    'parent'=> 'event',
  ),

  // 子テーマ：箱根駅伝
  'hakone-ekiden' => array(
    'tags'  => array('hakone-ekiden'),
    'label' => '箱根駅伝',
    'parent'=> 'event',
  ),

  // 子テーマ：甲子園
  'koshien' => array(
    'tags'  => array('koshien'),
    'label' => '甲子園',
    'parent'=> 'event',
  ),

);

// ===============================
// 処理開始
// ===============================
if ($cluster_slug && isset($cluster_map[$cluster_slug])) :

  $cluster_label = $cluster_map[$cluster_slug]['label'];
  $cluster_tags  = $cluster_map[$cluster_slug]['tags'];
  $parent_slug   = $cluster_map[$cluster_slug]['parent'];

  // ===============================
  // OR構造 tax_query
  // ===============================
  $tax_query = array('relation'=>'OR');

  foreach ($cluster_tags as $tag_slug) {
    $tax_query[] = array(
      'relation' => 'AND',
      array(
        'taxonomy'=>'post_tag',
        'field'=>'slug',
        'terms'=>$index_tag_slug,
      ),
      array(
        'taxonomy'=>'post_tag',
        'field'=>'slug',
        'terms'=>$tag_slug,
      ),
    );
  }

  $related_args = array(
    'post_type'=>'post',
    'posts_per_page'=>5,
    'orderby'=>'date',
    'order'=>'DESC',
    'tax_query'=>$tax_query,

    // 同じINDEX除外
    'meta_query'=>array(
      array(
        'key'=>'ai_base_slug',
        'value'=>$base_slug,
        'compare'=>'!=',
      ),
    ),
  );

  $related_query = new WP_Query($related_args);
?>

<section class="cluster-block">

<?php if ($related_query->have_posts()) : ?>
<div class="cluster-related">
<h2>
<span><?php echo esc_html($cluster_label); ?></span>クラスタ内の関連視点
</h2>
<ul class="cluster-list">
<?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
<li>
<a href="<?php the_permalink(); ?>">
<div class="cluster-block-wap">
<div class="cluster-block-img">
  <?php the_post_thumbnail('single-thumbnails'); ?>
</div>
<div class="cluster-block-content">
  <div class="cluster-block-content-title"><?php the_title(); ?></div>
</div>
<div style="clear:both;"></div>
</div>
<div class="more-arrow"></div>
</a>
</li>
<?php endwhile; ?>
</ul>
</div>
<?php endif; ?>



<?php
// ===============================
// 戻りリンク生成
// ===============================
if ($parent_slug) {
  $back_url = '/cluster/'.$parent_slug.'/'.$cluster_slug.'/';
} else {
  $back_url = '/cluster/'.$cluster_slug.'/';
}
?>

<div class="cluster-backlink">
<a href="<?php echo esc_url($back_url); ?>">
<?php echo esc_html($cluster_label); ?>クラスタページへ
</a>
</div>

</section>

<?php
wp_reset_postdata();
endif;
?>












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

            // ★ これを足すだけ
  $('#copy-toast').addClass('is-show');
  setTimeout(function() {
    $('#copy-toast').removeClass('is-show');
  }, 1200);

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

  // HTMLエンティティを戻して改行保持
  var textarea = document.createElement('textarea');
  textarea.innerHTML = raw;
  var text = textarea.value;

  navigator.clipboard.writeText(text).then(function() {

    // ボタン表示切り替え
    $btn.text('Copied');
    setTimeout(function() {
      $btn.text('Copy');
    }, 1500);

    // ===== トースト表示 =====
    var $toast = $('#copy-toast');
    if ($toast.length) {
      $toast.addClass('is-show');
      setTimeout(function() {
        $toast.removeClass('is-show');
      }, 1200);
    }

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




<div style="clear:both;"></div>
</div>

</div>
<?php get_template_part('partials/footer2'); ?>
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
        // AI Written Hover
        // -------------------
        $('.cluster-list li').hover(function(){
            $(".more-arrow",this).css('background-color','#0069ff');
            $(".cluster-block-img img", this).css('transform', 'scale(1.1)');
        }, function(){
            $(".more-arrow",this).css('background-color','#1433d6');
            $(".cluster-block-img img", this).css('transform', 'scale(1)');
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
<div id="copy-toast" class="copy-toast">コピーしました</div>

</body>
</html>