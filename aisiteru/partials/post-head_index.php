<style type="text/css">
#post-head_index .post_thumbnail{
  width: 100%;
  position: relative;
  margin: 0;
  overflow: hidden;
  box-sizing: border-box;
}

/* PC以外では普通にimgを表示 */
#post-head_index .post_thumbnail img{
  width: 100%;
  height: auto;
  vertical-align: bottom;
}

body #post-head_index h1 {
  padding: 0;
  margin: 0;
  border: none;
  font-size: 22px;
  box-shadow: none;
  line-height: 32px;
  color: #031b4e;
  font-weight: bold;
}

.sns-link {
    position: relative;
  }

.sns-link ul {
  width: 220px;
  position: absolute;
  right: 0;
  left: 0;
  margin: 0 auto;
  top: -30px;
}

/*------------------------------------------------------------*/
.post-info {
  padding: 15px 20px 30px 20px;
}
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
  margin: 0 0 0 0;
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
/* PC（680px以上）だけトリミング・中央寄せにする */
@media only screen and (min-width: 680px) {
    #post-head_index{
      
    }
    #post-head_index .post_thumbnail {
        position: relative;   /* ← static は NG（ボタン位置がずれるため） */
        border-radius: 5px;
        overflow: hidden;
        width: 740px;
        margin: 0 0 0 0;
        height: 350px;
    }

    #post-head_index .post_thumbnail img{
        width: 100%;
        height: 100%;   
        object-fit: cover;
        object-position: center center;
        display: block;
    }

      body #post-head_index h1 {
        font-size: 28px;
        line-height: 42px;
        margin: 0 0 0 0;
        width: 740px;
        box-sizing: border-box;
        text-align: justify;
      }


      .sns-link ul {
        width: 25px;
        top: 0;
        left: -55px;
        margin: 0;
      }


      .post-info {

    padding: 10px 10px 30px 10px;
    width: 740px;
    box-sizing: border-box;
  }
  .post-cat {
    font-size: 14px;
    margin: 0;
  }
  .post-cat span {
    padding-left: 25px;
  }


}
</style>

<div id="post-head_index">
  <div class="inner">

   <?php

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
  $thumb_prompt = get_post_meta(get_the_ID(), 'thumb_prompt', true);
  if ($thumb_prompt) :
  ?>
    <div class="image-prompt">
        <?php echo esc_html($thumb_prompt); ?>
    </div>
  <?php endif; ?>

</div>

      

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



</div>


  </div>
</div>



<script>
document.addEventListener("DOMContentLoaded", function () {

  function positionSNS() {

    // モバイルだけ適用（680px未満）
    if (window.innerWidth >= 680) {
      const snsUL = document.querySelector('.sns-link ul');
      if (snsUL) {
        snsUL.style.top = ""; // PCはCSSに任せる
      }
      return;
    }

    const thumb   = document.querySelector('#post-head_index .post_thumbnail');
    const snsLink = document.querySelector('.sns-link');
    const snsUL   = document.querySelector('.sns-link ul');

    if (!thumb || !snsLink || !snsUL) return;

    // それぞれの画面上の位置を取得
    const thumbRect = thumb.getBoundingClientRect();
    const snsRect   = snsLink.getBoundingClientRect();

    // 目標位置：post_thumbnail の bottom から 30px 上
    const targetTop = thumbRect.bottom - 60;   // （画面座標）

    // 基準位置：sns-link の top（画面座標）
    const baseTop   = snsRect.top;

    // sns-link を基準にしたときの ul の top
    const relativeTop = targetTop - baseTop;

    // 差分だけ ul の top を動かす
    snsUL.style.position = 'absolute'; // 念のため
    snsUL.style.top = relativeTop + 'px';
  }

  window.addEventListener('load', positionSNS);
  window.addEventListener('resize', positionSNS);

});
</script>

<script>
window.addEventListener('load', function () {
  // PCのみ（1024px以上）
  if (window.innerWidth < 680) return;

  const thumbnail = document.querySelector('.post_thumbnail');
  const side = document.querySelector('#side');

  if (!thumbnail || !side) return;

  const thumbTop = thumbnail.getBoundingClientRect().top;
  const sideTop = side.getBoundingClientRect().top;

  const diff = sideTop - thumbTop;

  side.style.marginTop = `-${diff}px`;
});
</script>