<style type="text/css">
#post-head .inner {
  padding: 20px 0px 10px 0px;
}

/*post-head
================================================================================================*/
#post-head .inner {
  padding: 20px 0px 10px 0px;
}


ul.tag-list {
  margin: 8px 0 0 20px;
  padding: 0 0 0 0;
}
ul.tag-list li {
  display: inline;
  margin-right: 5px;
}
body ul.tag-list a {
  font-size: 12px !important;
  line-height: 1em;
  background: #ffffff;
  display: inline-block;
  white-space: nowrap;
  padding: 8px 8px;
  padding-left: 30px;
  margin-top: 3px;
  border-radius: 3px;
  text-decoration: none;
  transition-duration: 0.3s;
  border: solid 1px #eeeeee;
  background-image: url(/wp/wp-content/themes/aisiteru/images/icon/tag_bl.png);
  background-size: 13px auto;
  background-repeat: no-repeat;
  background-position: left 10px center;
  color: #444444 !important;
}

/*------------------------------------------------------------*/
.post-meta-top {
  /* Flexboxを有効化し、子要素を横並びにする */
  display: flex;

  /* 左右にスペースを空ける */
  /* justify-content: space-between; */

  /* カテゴリーを左、日付を右に寄せる場合はこれ */
  justify-content: flex-start;

  /* 垂直方向の配置を中央に揃える */
  align-items: center;

  /* 下部に少しスペースを確保 */
  margin-bottom: 0px;

  gap: 15px; /* ボタン間の間隔 */
}

.post-cat {
  padding: 3px;
  font-size: 15px;
  font-weight: bold;
  margin: 0 0 0 20px;
}
.post-cat span {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/folder_bl.png");
  background-repeat: no-repeat;
  background-size: 20px auto;
  background-position: left center;
  padding-left: 23px;
}
.post-dates {
  font-size: 12px;
  padding: 0 0 0 18px;
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/time_bl.png");
  background-repeat: no-repeat;
  background-size: 13px auto;
  background-position: left center;
  font-weight: 500;
}

.post-dates .mobile-hide-date {
  display: none; /* スマホでは更新日と区切り文字を非表示 */
}
/*------------------------------------------------------------*/

/*------------------------------------------------------------*/
body #post-head h1 {
  padding: 0;
  margin: 0 20px;
  border: none;
  font-size: 22px;
  box-shadow: none;
  line-height: 32px;
  color: var(--color-secondary);
  font-weight: bold;
}
/*------------------------------------------------------------*/

/*------------------------------------------------------------*/
.ai-author-info {
  font-size: 13px;
  font-weight: 500;
  margin: 8px 20px 10px 20px;
}
.ai-author-info.ai-chatgpt {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/openai.webp");
  background-size: 20px auto;
  background-repeat: no-repeat;
  padding-left: 24px;
  background-position: left center;
}

.ai-author-info.ai-gemini {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/gemini.webp");
  background-size: 20px auto;
  background-repeat: no-repeat;
  padding-left: 28px;
  background-position: left center;
}
.ai-author-info.ai-copilot {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/copilot.webp");
  background-size: 20px auto;
  background-repeat: no-repeat;
  padding-left: 28px;
  background-position: left center;
}
.ai-author-info.ai-claude {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/claude.webp");
  background-size: 20px auto;
  background-repeat: no-repeat;
  padding-left: 28px;
  background-position: left center;
}
.ai-author-info.ai-deepseek {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/deepseek.webp");
  background-size: 20px auto;
  background-repeat: no-repeat;
  padding-left: 28px;
  background-position: left center;
}
.ai-author-info.ai-perplexity {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/perplexity.webp");
  background-size: 20px auto;
  background-repeat: no-repeat;
  padding-left: 28px;
  background-position: left center;
}
.ai-author-info.ai-lechat {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/mistral.webp");
  background-size: 20px auto;
  background-repeat: no-repeat;
  padding-left: 28px;
  background-position: left center;
}
.ai-author-info.ai-grok {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/grok.webp");
  background-size: 20px auto;
  background-repeat: no-repeat;
  padding-left: 28px;
  background-position: left center;
}
/*------------------------------------------------------------*/

/*------------------------------------------------------------*/
/* ボタン全体を横並びにする設定 */
.prompt-index-buttons-wrapper {
  display: flex;
  gap: 15px; /* ボタン間の間隔 */
  margin-top: 10
  px;
  align-items: center; /* 垂直方向の中央揃え */
  flex-wrap: wrap;
  justify-content: center;
}

/* 共通のボタンベーススタイル（ご要望のスタイルを適用） */
.button-base {
  /* サイズ、角丸、フォント設定を共通化 */
  height: 30px;
  border-radius: 15px;
  font-size: 12px;
  font-weight: 500;

  /* テキスト配置を共通化 */
  text-align: center;
  line-height: 30px; /* heightと同じ値でテキストを垂直方向中央に */
  text-decoration: none; /* aタグの下線を消す */
  cursor: pointer;
  transition: opacity 0.2s; /* ホバーエフェクト用 */

  /* フレックスの子要素として適切に扱うための設定 */
  display: inline-block;
  padding: 0 15px; /* 左右のパディングで幅を調整 */
}

/* 1. プロンプトボタンの個別設定（固定幅と色） */
.view-prompt-btn {
  width: 120px;
  background-color: #111111; /* 赤色 */
  color: #ffffff;
}

/* 2. インデックスボタンの個別設定（可変幅と色） */
.view-index-btn {
  width: 120px;
  /* テキスト長に合わせて幅を可変にするため、widthを削除 */
  background-color: #5d065e; /* 例：サイトのイメージカラー（ティール系など） */
  color: #ffffff;
   background-image: url(/wp/wp-content/themes/aisiteru/images/icon/arrow_yubi.png);
  background-repeat: no-repeat;
  background-size: 15px auto;
  background-position: center left 10px;
  padding-left:20px
}
.view-index-btn:hover{
  color: #FFFFFF;
  text-decoration: none;
  background-color: #740875;
}
/* ホバーエフェクト */
.button-base:hover {
  opacity: 0.85;
}
/*------------------------------------------------------------*/

#post-head .post_thumbnail{
  width: 100%;
  position: relative;
  margin: 20px 0 0 0;
  overflow: hidden;
  box-sizing: border-box;
}
#post-head .post_thumbnail img{
  width: 100%;
  height: auto;
  vertical-align: bottom;
}


@media only screen and (min-width: 680px) {
  /*post-head
================================================================================================*/
  #post-head .inner {
    position: relative;
    height: 230px;
    padding: 0;
  }
   #post-head .post_thumbnail {
    position: absolute;
    top: 0;
    left:0;
    margin: 0;
    border-radius: 5px;
    overflow: hidden;
    width:250px;
  }
  body #post-head h1 {
    font-size: 22px;
    line-height: 36px;
    margin: 5px 0 10px 0;
  }
  .post-dates {
    font-size: 12px;
  }
  .post-dates .mobile-hide-date {
    display: inline;
  }
  .post-info {
    position: absolute;
    top: 0;
    left:280px;
    margin: 0;
    width: 530px;
  }
  .post-cat {
    font-size: 14px;
    margin: 0;
  }
  .post-cat span {
    padding-left: 25px;
  }
  body ul.tag-list {
    margin: 0;
    padding: 0;
  }
  body ul.tag-list a:hover {
    text-decoration: underline;
  }

  /*------------------------------------------------------------*/
  .ai-author-info {
    margin-left: 0;
  }
  /*------------------------------------------------------------*/


  .prompt-index-buttons-wrapper {
    margin-bottom: 10px;
    margin-top:0;
    width: 800px;
    position: absolute;
    bottom: 20px;
  }

  .view-prompt-btn {
    width: auto;
    font-size:11px;
  }
  .view-index-btn {
    width: auto;
   background-image: url(/wp/wp-content/themes/aisiteru/images/icon/arrow_yubi.png);
  background-repeat: no-repeat;
  background-size: 18px auto;
  background-position: center left 10px;
  padding-left:30px;
  font-size:11px;
  }
.view-index-btn:hover{
  color: #FFFFFF;
  text-decoration: none;
  background-color: #740875;
}


    #post-head_index .post_thumbnail {
        position: static;
        border-radius: 5px;
        overflow: hidden;
        width: 800px;
        margin: 0 0 20px 0;
    }

    #post-head_index .post_thumbnail img{
        width: 100%;
        height: 100%;   
        object-fit: cover;
        object-position: center center; /* ←天地中央に配置 */
    }


    


}
</style>


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
          'lechat'    => 'LeChat',
          'perplexity'=> 'Perplexity',
          'grok'      => 'Grok',
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
                  echo '<p>この記事の考察は、AI「' . esc_html($ai_name) . '」によるものです。</p>';
                  
                  echo '</div>';
                  
                  // AI名タグは通常一つなので、見つかったらループを抜ける
                  break;
              }
          }
      }
  }
  ?>


  <?php display_ai_author_message(); ?>

</div>




    
<?php
// カスタムフィールド thumb_ai を取得（未設定時は ImageFX）
$thumb_ai = get_post_meta(get_the_ID(), 'thumb_ai', true);
$thumb_ai = $thumb_ai ? $thumb_ai : 'ImageFX';
?>

<div class="post_thumbnail output-image" data-ai="<?php echo esc_attr($thumb_ai); ?>">

  <?php if (has_post_thumbnail()) : ?>
      <?php the_post_thumbnail('single-thumbnails'); ?>
  <?php else : ?>
      <img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
  <?php endif; ?>

  <?php
  // カスタムフィールド thumb_prompt を取得
  $thumb_prompt = get_post_meta(get_the_ID(), 'thumb_prompt', true);

  // 値があれば prompt ブロック追加
  if ($thumb_prompt) :
  ?>
    <div class="image-prompt">
        <?php echo esc_html($thumb_prompt); ?>
    </div>
  <?php endif; ?>

</div>



<?php
// カスタムフィールドから取得
$ai_base_slug = get_post_meta(get_the_ID(), 'ai_base_slug', true);
$index_title  = get_post_meta(get_the_ID(), 'index_title', true);

// ai_base_slug から index_path を生成
$index_path = $ai_base_slug ? '/' . trim($ai_base_slug, '/') . '/' : '';
?>

<div class="prompt-index-buttons-wrapper">
    
    <div class="view-prompt-btn button-base">
        <span class="pc">共通プロンプトはこちら</span><span class="sp">共通プロンプト</span>
    </div>
    
    <?php if ( $index_path && $index_title ) : ?>
        <a href="<?php echo esc_url($index_path); ?>" class="view-index-btn button-base">
            <span class="pc"><?php echo esc_html($index_title); ?></span><span class="sp">比較インデックス</span>
        </a>
    <?php endif; ?>
    
</div>

</div>
</div> 