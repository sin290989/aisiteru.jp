<div class="topic-cluster-box">
<!------------------------------------------------------------------------------>
<div class="cluster-block">
<ul class="cluster-scope">
  <li>制度移転</li>
  <li>家族構造</li>
  <li>分配構造</li>
</ul>

<?php
// inheritance タグの term を取得
$season_tag = get_term_by( 'slug', 'inheritance', 'post_tag' );
$season_tag_id = $season_tag ? $season_tag->term_id : 0;

// index タグの term を取得
$index_tag = get_term_by( 'slug', 'index', 'post_tag' );
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// inheritance ＋ index 両方が付いた最新3件を取得
$args = array(
    'post_type'       => 'post',
    'posts_per_page' => 3,   // ← 最新3件固定
    'tag__and'       => array( $season_tag_id, $index_tag_id ),
    'orderby'        => 'date',
    'order'          => 'DESC',
);

$index_query = new WP_Query( $args );
// ★ 総件数取得
$total_count = $index_query->found_posts;
?>
<h2 class="h-topic">相続</h2>
<div class="total-count"><?php echo $total_count; ?><span>件</span></div>

<p class="cluster-read">
このクラスタでは、相続を「個人の手続き」ではなく、制度・家族関係・資産の移転がどのように結びついているかという視点から捉え直します。<br>
法制度の設計、感情や責任の分配、社会における富の移動の意味を比較するための入口としてご利用ください。
</p>

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
  <a href="/cluster/money/inheritance/">
    <span class="visually-hidden">クラスタページへ</span>
  </a>
</div>
</div>
<!------------------------------------------------------------------------------>
</div>