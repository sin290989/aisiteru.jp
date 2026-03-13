<div class="topic-cluster-box">
<!------------------------------------------------------------------------------>
<div class="cluster-block">
<ul class="cluster-scope">
  <li>大会運営</li>
  <li>大学象徴</li>
  <li>メディア物語</li>
</ul>

<?php
// hakone-ekiden タグの term を取得
$season_tag = get_term_by( 'slug', 'hakone-ekiden', 'post_tag' );
$season_tag_id = $season_tag ? $season_tag->term_id : 0;

// index タグの term を取得
$index_tag = get_term_by( 'slug', 'index', 'post_tag' );
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// hakone-ekiden ＋ index 両方が付いた最新3件を取得
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'tag__and'       => array( $season_tag_id, $index_tag_id ),
    'orderby'        => 'date',
    'order'          => 'DESC',
);

$index_query = new WP_Query( $args );
// ★ 総件数取得
$total_count = $index_query->found_posts;
?>

<h2 class="h-topic">箱根駅伝</h2>
<div class="total-count"><?php echo $total_count; ?><span>件</span></div>
<p class="cluster-read">
このクラスタでは、箱根駅伝を「正月の大学駅伝」としてではなく、「大会運営・大学ブランド・地域経済・メディア構造がどのように結びついているか」という視点から捉え直します。<br>
長距離競技の価値形成、大学スポーツの制度的位置づけ、テレビ中継による物語化と社会的影響といった論点を、比較の入口としてご利用ください。
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
        <li>「index」タグと「hakone-ekiden」タグが付いた記事はまだありません。</li>
    <?php endif; ?>

    <div style="clear:both"></div>
</ul>

<?php
wp_reset_postdata();
?>

<div class="more-btn">
  <a href="/cluster/event/hakone-ekiden/">
    <span>箱根駅伝クラスタページへ</span>
  </a>
</div>
</div>
<!------------------------------------------------------------------------------>
</div>