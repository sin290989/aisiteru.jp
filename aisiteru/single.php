<!DOCTYPE html>
<html lang="ja">
<head>
<?php get_template_part("analyticstracking"); ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php the_title(); ?>｜<?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common103.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/style17.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/single42.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/table4.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts") ?>
 
<style type="text/css">



/*フッター固定
================================================================================================*/
.fixed-footer {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  z-index: 9999;
  background: #1433d6;
  padding: 10px 0 12px 0;
  padding-bottom: calc(12px + env(safe-area-inset-bottom)); /* iPhone対策 */
  height: 85px;
  box-sizing: border-box;
}

/* 上部テキスト（13px） */
.fixed-footer .footer-text {
  font-size: 13px;
  color: #ffffff;
  text-align: center;
  margin-bottom: 8px;
  line-height: 1.3;
  padding: 0 10px;
  font-weight: 700;
}

/* アイコン行 */
.fixed-footer .icon-nav {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 12px;
}

/* 通常アイコン（正円 24px） */
.fixed-footer .icon-item {
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background: #ffffff;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 4px;
  transition: background 0.15s ease, transform 0.1s ease;
}

/* タップ時の軽いアニメーション */
.fixed-footer .icon-item:active {
  transform: scale(0.9);
}

.fixed-footer .icon-item.chatgpt a,
.fixed-footer .icon-item.gemini a,
.fixed-footer .icon-item.copilot a,
.fixed-footer .icon-item.claude a,
.fixed-footer .icon-item.lechat a,
.fixed-footer .icon-item.deepseek a,
.fixed-footer .icon-item.perplexity a {
  display: block;
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: 90% auto;
}
.fixed-footer .icon-item.chatgpt a {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/openai.webp");
}
.fixed-footer .icon-item.gemini a {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/gemini.webp");
}
.fixed-footer .icon-item.copilot a {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/copilot.webp");
}
.fixed-footer .icon-item.claude a {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/claude.webp");
}
.fixed-footer .icon-item.lechat a {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/mistral.webp");
}
.fixed-footer .icon-item.deepseek a {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/deepseek.webp");
}
.fixed-footer .icon-item.perplexity a {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/perplexity.webp");
}

.fixed-footer .icon-item.chatgpt.active,
.fixed-footer .icon-item.gemini.active,
.fixed-footer .icon-item.copilot.active,
.fixed-footer .icon-item.claude.active,
.fixed-footer .icon-item.lechat.active,
.fixed-footer .icon-item.deepseek.active,
.fixed-footer .icon-item.perplexity.active,
.fixed-footer .icon-item.chatgpt:hover,
.fixed-footer .icon-item.gemini:hover,
.fixed-footer .icon-item.copilot:hover,
.fixed-footer .icon-item.claude:hover,
.fixed-footer .icon-item.lechat:hover,
.fixed-footer .icon-item.deepseek:hover,
.fixed-footer .icon-item.perplexity:hover {
  box-shadow: inset 0 0 0 1px #FF0000; /* 内側に2pxの線 */
}


/*post_author
================================================================================================*/
.post_author {
  padding: 25px 25px 25px 25px;
  border-radius: 0 0 10px 10px;
  box-sizing: border-box;
  background-color: #ffffff;
  border-top: 1px solid #eeeeee;
  margin: 0 10px;
}
.post_author .inner {
  width: 100%;
  position: relative;
}
.post_author h2{
    font-weight: 700;
    color:#1433d6;
}
/* アバター */
.profile-img {
  position: absolute;
  top: 30px;
  left: 0;
  width: 60px;
  height: 60px;
  overflow: hidden;
  border-radius: 25px;
}
.profile-img img {
  width: 100%;
  height: auto;
  vertical-align: bottom;
}

/* 名前（AI名／Tusami） */
.profile-name {
  position: absolute;
  top: 40px;
  left: 70px;
  font-size: 15px;
  font-weight: bold;
  color: #031b4e;
}

/* 肩書き（思考型AIエディタ 等） */
.profile-role {
  position: absolute;
  top: 62px;
  left: 70px;
  font-size: 12px;
  color: #7a869a;
}

/* コメント本文 */
.profile-comment {
  padding-top: 80px;  /* アイコン分のスペース */
  font-size: 14px;
  line-height: 1.6;
}

/* 「このAIエディタが担当した他の記事を見る」リンク */
.profile-link {
  margin-top: 8px;
  font-size: 12px;
}
.profile-link a {
  color: #0069ff;
  text-decoration: underline;
}
.profile-link a:hover {
  text-decoration: none;
}

/*合わせて読みたい
================================================================================================*/
#post-single .ai-written a[target="_blank"] {
	background-image:none;
}

#post-single .ai-written ul {
	border:1px solid #eeeeee;
	border-radius: 0px 0px 3px 3px;
}

#post-single .ai-written .ai-written-title {
	background-color:#031b4e;
	padding:10px;
	font-size:11px;
	line-height:12px;
	color:#ffffff;
	border-radius: 3px 3px 0px 0px;
	background-image:url("/wp/wp-content/themes/east/images/icon/link_bl.png");
	background-repeat:no-repeat;
	background-size:24px auto;
	padding-left:32px;
	background-position:5px center;
}

#post-single .ai-written ul li a{
	width:100%;
	display:block;
	box-sizing: border-box;
	padding-left:10px;
	padding-right:10px;
	color:#333;
}
#post-single .ai-written ul li .ai-written-wap{
	padding-top:10px;
	padding-bottom:10px;
	border-bottom:1px solid #eeeeee;
}
#post-single .ai-written ul li:last-child .ai-written-wap{
	border-bottom:none;
	padding-bottom:10px;
}
#post-single .ai-written ul li .ai-written-img{
	width:15%;
	float:left;
    border-radius: 3px;
    overflow: hidden;
}
#post-single .ai-written ul li .ai-written-img img {
	width:100%;
	height:35px;
	object-fit: cover;
	margin-right:17px;
}
#post-single .ai-written ul li .ai-written-content{
	display:block;
	width:80%;
	float:right;
}
body #post-single .ai-written ul li a .ai-written-content-title{
	font-weight:bold;
	font-size:12px;
	line-height:16px;
}

.common-prompt{
    background-color: #000000;
    color: #FFFFFF;
    border-radius: 6px;
    font-size: 12px;
    padding: 20px 25px;
    line-height: 18px;
}



body #main .generated-article h3{
background-size: 50px auto;
background-repeat: no-repeat;
height:50px;
padding-left:60px;
background-color: transparent;
margin-bottom: 0;
padding-bottom: 0;
padding-top: 5px;
}
body #main .generated-article h3 span{
  display: block;
  font-size: 11px;
  color: #AAAAAA;
}

body #main .generated-article p.ai-info{
  padding-top: 0;
  margin-top: 0;
  font-size: 13px;
  line-height: 21px;
}
.generated-article h3.chatgpt{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/openai.webp");
}
.generated-article h3.gemini{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/gemini.webp");
}
.generated-article h3.copilot{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/copilot.webp");
}
.generated-article h3.claude{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/claude.webp");
}
.generated-article h3.lechat{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/mistral.webp");
}
.generated-article h3.deepseek{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/deepseek.webp");
}
.generated-article h3.perplexity{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/perplexity.webp");
}

ul.ai-list {
  padding: 15px 20px;
  border:1px solid #eeeeee;
  border-radius: 3px;

}
ul.ai-list li{
  background-size: 20px auto;
  background-repeat: no-repeat;
  padding-left:30px;
  font-weight: 700;
  background-position: left center;
  margin-bottom: 5px;
}

ul.ai-list li span{
  font-size: 11px;
  color: #AAAAAA;
  font-weight: 500;
}
ul.ai-list li:last-child{
  margin-bottom: 0;
}
ul.ai-list li.chatgpt{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/openai.webp");
}
ul.ai-list li.gemini{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/gemini.webp");
}
ul.ai-list li.copilot{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/copilot.webp");
}
ul.ai-list li.claude{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/claude.webp");
}
ul.ai-list li.lechat{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/mistral.webp");
}
ul.ai-list li.deepseek{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/deepseek.webp");
}
ul.ai-list li.perplexity{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/perplexity.webp");
}


/* -----------------------------------------
   PC レイアウト（680px 以上）
   ----------------------------------------- */
@media only screen and (min-width: 680px) {

  .fixed-footer {
    padding: 15px 0;
    height: 85px;
  }
  .fixed-footer .footer-text {
    margin-bottom: 12px;
  }
  .fixed-footer .icon-nav {
    gap: 12px;
  }
  .fixed-footer .icon-item {
    padding: 3px;
  }
  .prompt-index-buttons-wrapper {
    margin-bottom: 10px;
    justify-content: flex-start;
  }

  .view-prompt-btn {
    width: auto;
  }
  .view-index-btn {
    width: auto;
  }


  /*post_author
================================================================================================*/
.post_author {
    width: 740px;
    padding: 25px 50px 25px 50px;
    border-radius: 0 0 10px 10px;
    box-sizing: border-box;
    background-color: #ffffff;
    border-top: 1px solid #eeeeee;
    margin: 0;
  }
  .post_author .inner {
    width: 100%;
    position: relative;
  }

  .profile-img {
    position: absolute;
    top: 30px;
    left: 0;
    width: 60px;
    height: 60px;
    overflow: hidden;
    border-radius: 25px;
  }
  .profile-img img {
    width: 100%;
    height: auto;
    vertical-align: bottom;
  }

  .profile-name {
    position: absolute;
    top: 40px;
    left: 70px;
    font-size: 16px;
    font-weight: bold;
    color: #031b4e;
  }

  .profile-role {
    position: absolute;
    top: 62px;
    left: 70px;
    font-size: 12px;
    color: #7a869a;
  }

  .profile-comment {
    padding-top: 80px;
    font-size: 14px;
    line-height: 1.6;
  }

  .profile-link {
    margin-top: 8px;
    font-size: 12px;
  }

/*合わせて読みたい
================================================================================================*/
#post-single .ai-written .ai-written-title {
	font-size:14px;
}
#post-single .ai-written ul li a{
	width:100%;
	display:block;
	box-sizing: border-box;
	padding-left:15px;
	padding-right:15px;
	color:#333;
}
#post-single .ai-written ul li .ai-written-wap{
	padding-top:15px;
	padding-bottom:15px;
	border-bottom:1px solid #eeeeee;
}
#post-single .ai-written ul li:last-child .ai-written-wap{
	border-bottom:none;
	padding-bottom:15px;
}
#post-single .ai-written ul li .ai-written-img{
	width:200px;
}

#post-single .ai-written ul li .ai-written-img img {
	width:100%;
	height:60px;
	object-fit: cover;
	vertical-align:bottom;
}

#post-single .ai-written ul li .ai-written-content{
	width:380px;
	float:right;
  padding-top: 10px;
}

body #post-single .ai-written ul li a .ai-written-content-title{
	line-height:22px;
	font-size:16px;
}

body #post-single .ai-written ul li a .ai-written-content-date{
	font-size:12px;
	background-image:url(/wp/wp-content/themes/east/images/icon/time_bl.png);
	background-repeat:no-repeat;
	background-size:12px auto;
	padding-left:17px;
	background-position:0px 0px;
	line-height:20px;
	margin-top:10px;
}
    
    .ai-written-content-title{
        transition-duration: 0.3s;
    }

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

<div id="post-head">
<div class="inner">
<div class="post-info">

    <div class="post-meta-top">
    <div class="post-cat">
        <span>
        <?php
        // 記事に設定されているカテゴリー情報を取得
        $categories = get_the_category();

        // カテゴリーが設定されていることを確認し、あれば処理を実行
        if (!empty($categories)) {
            // 最初のカテゴリー（主要カテゴリー）のみを使用
            $main_category = $categories[0]; 
            
            $cat_name = $main_category->name;
            $cat_link = esc_url(get_category_link($main_category->term_id));
            
            // カテゴリー名とリンクを出力
            echo sprintf(
                "<a href='%s'>%s</a>", 
                $cat_link, 
                esc_html($cat_name)
            );
        }
        ?>
        </span>
    </div>

    <div class="post-dates">
    <?php 
    // 公開日の取得
    $pub_date = get_the_date('Y.n.j');
    $pub_date_html = get_the_date("Y-m-d H:i:s");

    // 更新日の取得
    $mod_date = get_the_modified_date('Y.n.j');
    $mod_date_html = get_the_modified_date("Y-m-d H:i:s");
    
    // 公開日と更新日が異なるかチェック
    if ( get_the_time('U') !== get_the_modified_time('U') ) {
        // 更新されている場合：公開日と更新日の両方を表示
    ?>
        <time class="entry-date published" datetime="<?php echo $pub_date_html ?>">公開日:<?php echo $pub_date ?></time>
        
        <span class="separator mobile-hide-date"> / </span>
        
        <time class="updated mobile-hide-date" datetime="<?php echo $mod_date_html ?>">更新日:<?php echo $mod_date ?></time>
    <?php
    } else {
        // 更新されていない場合：公開日のみを表示
    ?>
        <time class="entry-date published" datetime="<?php echo $pub_date_html ?>">公開日:<?php echo $pub_date ?></time>
    <?php
    }
    ?>
</div>

</div>

<h1><?php the_title(); ?></h1>

<?php
/**
 * 記事に設定されているAI名タグをチェックし、メッセージを出力する関数
 * ※本来は functions.php に置くのが理想ですが、ひとまずここに置いています。
 */
function display_ai_author_message() {
    // 比較に使用するAI名とスラッグの配列を定義
    $ai_list = array(
        'chatgpt'   => 'ChatGPT',
        'claude'    => 'Claude',
        'copilot'   => 'Copilot',
        'deepseek'  => 'DeepSeek',
        'gemini'    => 'Gemini',
        'lechat'     => 'LeChat',
        'perplexity'=> 'Perplexity',
    );
    
    // 記事に設定されている全てのタグを取得
    $post_tags = get_the_tags();
    
    if ($post_tags) {
        foreach ($post_tags as $tag) {
            $tag_slug = $tag->slug;
            
            // タグのスラッグが定義されたAIリストに含まれているかチェック
            if (array_key_exists($tag_slug, $ai_list)) {
                $ai_name = $ai_list[$tag_slug];
                
                // AI名に応じて、色や背景を切り替えるためのクラス名も出力 (デザイン用)
                echo '<div class="ai-author-info ai-' . esc_attr($tag_slug) . '">';
                
                // アイコンを削除し、テキストメッセージのみを出力
                echo '<p>この記事を担当したAIは' . esc_html($ai_name) . 'です。</p>';
                
                echo '</div>';
                
                // AI名タグは通常一つなので、見つかったらループを抜ける
                break;
            }
        }
    }
}
?>

<?php if ( ! has_tag('index') ) : ?>

    <?php display_ai_author_message(); ?>

    <?php
    // カスタムフィールドからインデックス記事のURLとタイトルを取得
    $index_url   = get_post_meta(get_the_ID(), 'index_url', true); 
    $index_title = get_post_meta(get_the_ID(), 'index_title', true); 
    ?>

    <div class="prompt-index-buttons-wrapper">
        
        <div class="view-prompt-btn button-base">
            <span class="pc">共通プロンプトはこちら</span><span class="sp">共通プロンプト</span>
        </div>
        
        <?php if ($index_url && $index_title) : ?>
            <a href="<?php echo esc_url($index_url); ?>" class="view-index-btn button-base">
                <span class="pc"><?php echo esc_html($index_title); ?></span><span class="sp">比較インデックス</span>
            </a>
        <?php endif; ?>
        
    </div>

<?php endif; ?>





<?php
// 記事に付いているタグを取得
$post_tags = get_the_tags();

// 除外したいタグスラッグ一覧
$exclude_slugs = array(
    'index',
    'chatgpt',
    'claude',
    'copilot',
    'deepseek',
    'gemini',
    'lechat',
    'perplexity'
);

if ( $post_tags ) :
    // フィルタ後に出力するタグがあるか確認するためのフラグ
    $has_visible_tag = false;
    // まず「表示対象のタグがあるか」をチェック
    foreach ( $post_tags as $tag ) {
        if ( ! in_array( $tag->slug, $exclude_slugs, true ) ) {
            $has_visible_tag = true;
            break;
        }
    }
    // 表示対象がある場合のみ UL を出力
    if ( $has_visible_tag ) {
        echo '<ul class="tag-list">';
        foreach ( $post_tags as $tag ) {

            // 除外タグは表示しない
            if ( in_array( $tag->slug, $exclude_slugs, true ) ) {
                continue;
            }
            // 通常タグのみ表示
            echo '<li><a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '">' . esc_html( $tag->name ) . '</a></li>';
        }
        echo '</ul>';
    }

endif;
?>
<div style="clear: both;"></div>



</div>


    
<div class="post_thumbnail">
<?php if (has_post_thumbnail()) : ?>
    <?php the_post_thumbnail('single-thumbnails'); ?>
<?php else : ?>
    <img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
<?php endif ; ?>
</div>



</div>
</div>   


<div id="main">

<!-----------------------------------------------------------------------------------------------------> 
<div class="sns-link">
<ul>
<li class="sns-x"><a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&hashtags=aisiteru" target="_bkank"></a><div class="snsInner"><div class="sns1Tip">Xで共有</div></div></li>
<li class="sns-fb"><a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_bkank"></a><div class="snsInner"><div class="sns2Tip">Facebookで共有</div></div></li>
<li class="sns-line pc"><a href="https://social-plugins.line.me/lineit/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_bkank"></a><div class="snsInner"><div class="sns3Tip">LINEで共有</div></div></li>
<li class="sns-line sp"><a href="https://line.me/R/share?text=<?php the_title(); ?><?php the_permalink(); ?>" target="_bkank"></a><div class="snsInner"><div class="sns3Tip">LINEで共有</div></div></li>
<li class="sns-url" data-url="<?php the_permalink(); ?>"><div class="snsInner"><div class="sns4TipOk">コピーしました！</div><div class="sns4Tip">URLをコピー</div></div></li>
</ul>
</div>
<!-----------------------------------------------------------------------------------------------------> 


<!-----------------------------------------------------------------------------------------------------> 
<div id="post-single">
<?php if(have_posts()): while(have_posts()):
the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
<div class="ai-generated-mini">
※ 本記事はAIによる生成・編集サポートを含みます。
</div>
</div>
<!-----------------------------------------------------------------------------------------------------> 





<!-----------------------------------------------------------------------------------------------------> 
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
        'perplexity'
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
            echo get_avatar( get_the_author_id(), 75 );
            echo '</div>';
            echo '<div class="profile-name">TOMO</div>';
            echo '<div class="profile-role">Human</div>';
            echo '<div class="profile-comment">AIシテル？の運営に関わるただ一人の人間です。<br>
AIごとの文章の“温度”や“違和感”をすくい取り、AIに足りない部分をそっと補うのが役目だと思っています。</div>';
        }
    }
  ?>
  </div>
</div>
<!-----------------------------------------------------------------------------------------------------> 













<!-----------------------------------------------------------------------------------------------------> 
<?php
$ai_slugs = array('chatgpt','claude','copilot','deepseek','gemini','lechat','perplexity');
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
        <h2>編集者のコメント</h2>
        <p><?php echo nl2br( esc_html( $human_comment ) ); ?></p>
    </div>
<?php endif; ?>
<!-----------------------------------------------------------------------------------------------------> 


<?php //get_template_part("partials/prev-next-link") ?>
<?php get_template_part("partials/related-posts") ?>

<!----------------------------------------------------------------------------------------------------->
<script>
document.addEventListener('DOMContentLoaded', function () {

    const modal        = document.getElementById('prompt-modal');
    if (!modal) return;

    const overlay      = modal.querySelector('.prompt-modal__overlay');
    const closeBtn     = modal.querySelector('.prompt-modal__close');
    const panelPrompt  = modal.querySelector('.prompt-panel--prompt');
    const panelMd      = modal.querySelector('.prompt-panel--markdown');
    const tabs         = modal.querySelectorAll('.prompt-tab');

    // 元記事側のソース
    const promptSource   = document.querySelector('.prompt');   // プロンプト
    const markdownSource = document.querySelector('.markdown'); // 生成記事

    function setActiveTab(target) {
        tabs.forEach(function (tab) {
            const isActive = tab.dataset.target === target;
            tab.classList.toggle('is-active', isActive);
        });

        panelPrompt.classList.toggle('is-active', target === 'prompt');
        panelMd.classList.toggle('is-active', target === 'markdown');
    }

    const openModal = () => {
        // 開くたびに中身をセット（記事が変わっても対応できるように）
        if (promptSource) {
            panelPrompt.innerHTML = promptSource.innerHTML;
        } else {
            panelPrompt.innerHTML = '<p>共通プロンプトが見つかりませんでした。</p>';
        }

        if (markdownSource) {
            panelMd.innerHTML = markdownSource.innerHTML;
        } else {
            panelMd.innerHTML = '<p>生成記事ブロックが見つかりませんでした。</p>';
        }

        // デフォルトは「共通プロンプト」タブ
        setActiveTab('prompt');

        modal.classList.add('is-open');
        document.body.classList.add('prompt-modal-open');
    };

    const closeModal = () => {
        modal.classList.remove('is-open');
        document.body.classList.remove('prompt-modal-open');

        // 中身をクリアしておく（不要ならこの2行は削除しても可）
        panelPrompt.innerHTML = '';
        panelMd.innerHTML = '';
    };

    // 「共通プロンプトはこちら」ボタンクリック
    const btn = document.querySelector('.view-prompt-btn');
    if (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            openModal();
        });
    }

    // タブクリック
    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            const target = tab.dataset.target;
            setActiveTab(target);
        });
    });

    // オーバーレイクリック
    overlay.addEventListener('click', closeModal);

    // 閉じるボタン
    closeBtn.addEventListener('click', closeModal);

    // ESCキーで閉じる
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            closeModal();
        }
    });

});
</script>


<style type="text/css">
.prompt,
.markdown{
    display:none;
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
    margin: 15px;          /* 上下左右 15px 余白 */
    padding: 20px;
    background: #000000;
    color: #ffffff;
    overflow-y: auto;
    box-shadow: 0 10px 30px rgba(0,0,0,0.6);
    border-radius: 6px;
    box-sizing: border-box;
    /* 高さは「画面 - フッター - margin×2」で計算（dvh 優先） */
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
    font-size: 24px;
    line-height: 1;
    cursor: pointer;
    color: #ffffff !important;
}

body.prompt-modal-open {
    overflow: hidden;
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

/* パネル共通（中身の文字サイズなど） */
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

/* アクティブタブの見た目 */
.prompt-modal__tabs .prompt-tab.is-active {
    background: #ffffff;
    color: #000000 !important;
}
@media only screen and (min-width: 680px) {
    .prompt-modal__content {
      max-width: 700px;
      max-height: 80vh;
      margin: 40px auto;
      padding: 28px 36px;
  }

  
}
</style>

<div id="prompt-modal" class="prompt-modal">
  <div class="prompt-modal__overlay"></div>
  <div class="prompt-modal__content">
    <button type="button" class="prompt-modal__close" aria-label="閉じる">×</button>

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
<!-----------------------------------------------------------------------------------------------------> 

<!----------------------------------------------------------------------------------------------------->
<script>
jQuery(function($) {

  $('.output-image').each(function() {
    var $wrap   = $(this);
    var $prompt = $wrap.find('.image-prompt');

    if ($prompt.length && $.trim($prompt.text()).length > 0) {

        // 生のプロンプトは非表示
        $prompt.hide();

        // <div class="output-image" data-ai="chatgpt"> などから取得
        var aiName = $wrap.attr('data-ai') || '';

        // ボタンに表示する文言を作成
        var label = 'prompt';
        if (aiName) {
            label = 'Prompt (' + aiName + ')';
        }

        // ボタン生成
        var $btn = $('<button type="button" class="prompt-button" data-ai="'+ aiName +'">'+ label +'</button>');
        $wrap.append($btn);

        // クリック時：モーダルにプロンプト＋AI名を表示
        $btn.on('click', function() {
            var text = $.trim($prompt.text());

            // モーダル内に入れるHTMLを組み立て
            var html = '';
            if (aiName) {
                html += '<span class="prompt-ai-name">生成AI：' + aiName + '</span><br><br>';
            }
            // 改行を <br> に変換
            html += text.replace(/(\r\n|\r|\n)/g, '<br>');

            $('#image-prompt-modal .image-prompt-modal__body').html(html);
            $('#image-prompt-modal').addClass('is-open');
        });
    }
  });

  // 閉じる処理
  $('.image-prompt-modal__overlay, .image-prompt-modal__close').on('click', function() {
    $('#image-prompt-modal').removeClass('is-open');
  });

  $(document).on('keydown', function(e) {
    if (e.key === 'Escape') {
      $('#image-prompt-modal').removeClass('is-open');
    }
  });

});
</script>

<style type="text/css">
/* ---- 画像＋プロンプト共通 ---- */
.output-image {
    position: relative;
    display: inline-block;
    margin: 0;
    border:1px solid #CCCCCC;
    border-radius: 3px;
    overflow: hidden;
}

.output-image img {
    display: block;
    max-width: 100%;
    height: auto;
}

/* 記事内の生プロンプトテキストは非表示にしておく */
.output-image .image-prompt {
    display: none;
}
.ai-name{
  border:1px solid #FF0000;
  font-size: 12px;
}
/* promptボタン */
.output-image .prompt-button {
    position: absolute;
    right: 10px;
    bottom: 10px;
    padding: 0 12px;
    font-size: 12px;
    line-height: 26px;
    height: 26px;
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
    display: none;  /* 初期状態は非表示 */
}

/* モーダルが開いているときだけ表示＆中央寄せ */
.image-prompt-modal.is-open {
    display: flex;
    justify-content: center; /* 横中央 */
    align-items: center;     /* 縦中央 */
}

.image-prompt-modal__overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.7);
}

/* モーダル本体 */
.image-prompt-modal__content {
    position: relative;
    max-width: 640px;
    max-height: 80vh;      /* 縦方向の上限 */
    margin: 0 16px;        /* 画面端との余白（左右） */
    padding: 20px 24px;
    background: #111;
    color: #fff;
    overflow-y: auto;      /* はみ出したらスクロール */
    box-shadow: 0 4px 12px rgba(0,0,0,0.5);
    border-radius: 4px;
}

/* 中身のテキスト（改行維持） */
.image-prompt-modal__body {
    white-space: pre-wrap;
    font-size: 14px;
    line-height: 1.6;
}

/* 閉じるボタン */
.image-prompt-modal__close {
    position: absolute;
    top: 8px;
    right: 8px;
    border: none;
    background: transparent;
    color: #fff;
    font-size: 20px;
    cursor: pointer;
}

/* スマホ向け微調整 */
@media (max-width: 768px) {
    .image-prompt-modal__content {
        width: 90%;
        max-height: 80vh;
        padding: 16px;
    }
}

.prompt-ai-name {
    font-size: 12px;
    margin-bottom: 10px;
    opacity: 0.8;
}

.prompt-ai-text {
    font-size: 14px;
    line-height: 1.6;
    white-space: pre-wrap;
}

.zu{
  font-size: 12px;
  line-height: 12px;
}
</style>

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
<!-----------------------------------------------------------------------------------------------------> 


</div>
<div id="side">
<?php dynamic_sidebar('sidebar-1'); ?>
<?php get_template_part("partials/cat") ?>
<?php get_template_part("partials/tag") ?>
</div>
<div style="clear:both;"></div>
</div>

</div>
<?php get_template_part('partials/footer'); ?>
<?php wp_footer(); ?>


<?php if ( !wp_is_mobile() ) : ?>
<script type="text/javascript">
$(function () {
    $('.ai-written li').hover(function(){
        $(".ai-written-content-title",this).css('color','#0069ff');
    }, function(){
        $(".ai-written-content-title",this).css('color','#46526f');
    });  
});

$(function () {
    // 必要な要素をキャッシュ
    const $postSingle = $("#post-single");
    const $snsLinkUl = $(".sns-link ul");

    // 要素の位置や高さを事前に計算
    const mainTop = $postSingle.offset().top;
    const postSingleBottom = mainTop + $postSingle.height();
    const snsLinkUlHeight = $snsLinkUl.height();

    $(window).on("scroll", function () {
        const scroll = $(window).scrollTop();

        if (scroll > mainTop) {
            const ulTop = scroll - mainTop + 120;

            // SNSリンクが記事の下に突き抜けないよう制限
            if (scroll < postSingleBottom - snsLinkUlHeight) {
                $snsLinkUl.css("top", ulTop);
            }
        } else {
            // 記事の上部より上にスクロールした場合
            $snsLinkUl.css("top", 0);
        }
    });
});

$(function(){   
    $('.sns-url').click(function(){
        const url = $(this).data('url');
        navigator.clipboard.writeText(url);

        $(".sns4TipOk").css("opacity","1");
        $(".sns4TipOk").css("left","45px");

        $(".sns4Tip").css("opacity",0);
        $(".sns4Tip").css("left","20px");

        setTimeout(function(){
            $(".sns4TipOk").css("opacity",0);
            $(".sns4TipOk").css("left","20px");
        },1500);
    });
});
    
$(function(){
    $('li.sns-url').hover(function(){
        $(".sns4Tip").css("opacity",1);
        $(".sns4Tip").css("left","45px");
    }, function(){
        $(".sns4Tip").css("opacity",0);
        $(".sns4Tip").css("left","20px");
    });
});

$(function(){
    $('.sns-line').hover(function(){
        $(".sns3Tip").css("opacity",1);
        $(".sns3Tip").css("left","45px");
    }, function(){
        $(".sns3Tip").css("opacity",0);
        $(".sns3Tip").css("left","20px");
    });
});
    
$(function(){
    $('.sns-fb').hover(function(){
        $(".sns2Tip").css("opacity",1);
        $(".sns2Tip").css("left","45px");
    }, function(){
        $(".sns2Tip").css("opacity",0);
        $(".sns2Tip").css("left","20px");
    });

}); 
    
$(function(){
    $('.sns-x').hover(function(){
        $(".sns1Tip").css("opacity",1);
        $(".sns1Tip").css("left","45px");
    }, function(){
        $(".sns1Tip").css("opacity",0);
        $(".sns1Tip").css("left","20px");
    });
});
</script>
    
<?php endif; ?>







</body>
</html>