<div class="topic-cluster-box">
<!------------------------------------------------------------------------------>
<div class="cluster-block">

<ul class="cluster-scope">
  <li>制度構造</li>
  <li>財源設計</li>
  <li>境界問題</li>
</ul>

<?php
// nhk-reception-fee タグの term を取得
$season_tag = get_term_by( 'slug', 'nhk-reception-fee', 'post_tag' );
$season_tag_id = $season_tag ? $season_tag->term_id : 0;

// index タグの term を取得
$index_tag = get_term_by( 'slug', 'index', 'post_tag' );
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// nhk-reception-fee ＋ index 両方が付いた最新3件を取得
$args = array(
    'post_type'       => 'post',
    'posts_per_page'  => 3,
    'tag__and'        => array( $season_tag_id, $index_tag_id ),
    'orderby'         => 'date',
    'order'           => 'DESC',
);

$index_query = new WP_Query( $args );

// ★ 総件数取得
$total_count = $index_query->found_posts;
?>

<h2 class="h-topic">NHK受信料</h2>
<div class="total-count"><?php echo $total_count; ?><span>件</span></div>

<p class="cluster-read">
このクラスタでは、NHK受信料を単なる料金制度としてではなく、
公共放送の成立条件・財源設計・受信契約という法的構造がどのように社会制度と結びついているのかという視点から捉え直します。<br>
「税ではない設計」「視聴と負担の関係」「公平性と強制力」「スクランブル化の不採用理由」といった論点が、
政治・制度・社会構造とどのように交差しているのかを比較するための入口としてご利用ください。
</p>

<ul class="post-index">
    <?php if ( $index_query->have_posts() ) : ?>
        <?php while ( $index_query->have_posts() ) : $index_query->the_post(); ?>

        <li>
            <?php $cat = get_the_category(); ?>
            <?php $cat = $cat[0]; ?>

            <a href="<?php the_permalink(); ?>">

            <div class="post_thumbnail">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('single-thumbnails'); ?>
            <?php else : ?>
                <img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
            <?php endif ; ?>
            </div>

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
                <?php echo str_replace("\n", '', strip_tags($post->post_content)); ?>
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
wp_reset_postdata();
?>

<div class="more-btn">
  <a href="/cluster/politics/nhk-reception-fee/">
    <span>NHK受信料クラスタページへ</span>
  </a>
</div>

</div>
<!------------------------------------------------------------------------------>
</div>