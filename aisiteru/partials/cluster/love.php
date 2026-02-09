<!------------------------------------------------------------------------------>
<ul class="cluster-scope">
  <li>関係性と感情</li>
  <li>社会構造と出会い</li>
  <li>選択と不確実性</li>
</ul>

<h2>恋愛構造</h2>

<p class="cluster-read">
このクラスタでは、恋愛を「個人の感情や相性」だけではなく、「社会構造・制度・市場・価値観がどのように結びついているか」という視点から捉え直します。<br>
出会いの仕組み、恋愛と経済・社会制度の関係、関係性の形成と維持における意思決定と不確実性といった論点を、比較の入口としてご利用ください。
</p>

<div class="cluster-block">

<?php
// love タグの term を取得
$season_tag = get_term_by( 'slug', 'love', 'post_tag' );
$season_tag_id = $season_tag ? $season_tag->term_id : 0;

// index タグの term を取得
$index_tag = get_term_by( 'slug', 'index', 'post_tag' );
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// love ＋ index 両方が付いた最新3件を取得
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,   // ← 最新3件固定
    'tag__and'       => array( $season_tag_id, $index_tag_id ),
    'orderby'        => 'date',
    'order'          => 'DESC',
);

$index_query = new WP_Query( $args );
?>

<ul class="post-index">
    <?php if ( $index_query->have_posts() ) : ?>
        <?php while ( $index_query->have_posts() ) : $index_query->the_post(); ?>

        <li>
            <?php $cat = get_the_category(); ?>
            <?php $cat = $cat[0]; ?>

            <a href="<?php the_permalink(); ?>">
            <!--サムネイル右側画像-->
            <div class="post_thumbnail">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('single-thumbnails'); ?>
            <?php else : ?>
                <img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
            <?php endif ; ?>
            </div>
            <!--サムネイル右側画像-->

            <!--サムネイル左側-->
            <div class="head">
                <div class="post-dates">
                    <time class="entry-date published" datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>">
                        <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                </div>

                <div class="post-title">
                    <h3><span><?php the_title(); ?></span></h3>
                </div>

                <div class="post-content pc">
                <p>
                <?php echo str_replace('\n', '', strip_tags($post->post_content)); ?>
                </p>
                </div>
                <div style="clear:both"></div>
            </div>
            </a>
        </li>

        <?php endwhile; ?>
    <?php else : ?>
        <li>「index」タグと「love」タグが付いた記事はまだありません。</li>
    <?php endif; ?>
    <div style="clear:both"></div>
</ul>

<?php
// クエリを元に戻す
wp_reset_postdata();
?>
<div class="more-btn">
  <a href="/cluster/love/">
    <span class="visually-hidden">クラスタページへ</span>
  </a>
</div>
</div>
<!------------------------------------------------------------------------------>
