<style type="text/css">
#post-head_index .post_thumbnail{
  width: 100%;
  position: relative;
  margin: 20px 0 0 0;
}

/* PC以外では普通にimgを表示 */
#post-head_index .post_thumbnail img{
  width: 100%;
  height: auto;
  vertical-align: bottom;
}

/* PC（680px以上）だけトリミング・中央寄せにする */
@media only screen and (min-width: 680px) {

    #post-head_index .post_thumbnail {
        position: relative;   /* ← static は NG（ボタン位置がずれるため） */
        border-radius: 5px;
        overflow: hidden;
        width: 740px;
        margin: 0 0 20px 0;
        height: 350px;
    }

    #post-head_index .post_thumbnail img{
        width: 100%;
        height: 100%;   
        object-fit: cover;
        object-position: center center;
        display: block;
    }

    /* サイドとの位置調整（そのまま） */
    body #side{
        margin-top: -400px;
    }
}
</style>

<div id="post-head_index">
  <div class="inner">

    <div class="post_thumbnail output-image" data-ai="ImageFX">

      <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('single-thumbnails'); ?>
      <?php else : ?>
          <img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
      <?php endif ; ?>

      <?php
      $thumb_prompt = get_post_meta(get_the_ID(), 'thumb_prompt', true);
      if ($thumb_prompt) :
      ?>
        <div class="image-prompt">
            <?php echo esc_html($thumb_prompt); ?>
        </div>
      <?php endif; ?>

    </div>

    <h1><?php the_title(); ?></h1>

  </div>
</div>
