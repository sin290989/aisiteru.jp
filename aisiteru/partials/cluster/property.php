<div class="topic-cluster-box">
<!------------------------------------------------------------------------------>
<ul class="cluster-scope">
  <li>制度設計</li>
  <li>権利と取引</li>
  <li>空間と資産価値</li>
</ul>

<h2 class="h-topic">不動産</h2>

<p class="cluster-read">
このクラスタでは、不動産を「個別の物件」ではなく、制度・権利・市場がどのように結びついているかという視点から捉え直します。<br>
登記や契約の設計、取引と利用の境界、空間が資産として扱われる意味を比較するための入口としてご利用ください。
</p>

<div class="cluster-block">
   
<?php
// property タグの term を取得
$season_tag = get_term_by( 'slug', 'property', 'post_tag' );
$season_tag_id = $season_tag ? $season_tag->term_id : 0;

// index タグの term を取得
$index_tag = get_term_by( 'slug', 'index', 'post_tag' );
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// property ＋ index 両方が付いた最新3件を取得
$args = array(
    'post_type'       => 'post',
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
                    <h3 class="h-post-title"><span><?php the_title(); ?></span></h3>
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
        <li>該当する記事がまだありません。</li>
    <?php endif; ?>
    <div style="clear:both"></div>
</ul>

<?php
// クエリを元に戻す
wp_reset_postdata();
?>
<div class="more-btn">
  <a href="/cluster/property/">
    <span class="visually-hidden">クラスタページへ</span>
  </a>
</div>
</div>
<!------------------------------------------------------------------------------>
</div>