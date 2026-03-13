<div class="structural-cluster-box">
<!------------------------------------------------------------------------------>
<div class="cluster-block">
<?php
// wbc タグ
$wbc_tag = get_term_by( 'slug', 'wbc', 'post_tag' );
$wbc_tag_id = $wbc_tag ? $wbc_tag->term_id : 0;

// hakone-ekiden タグ
$hakone_tag = get_term_by( 'slug', 'hakone-ekiden', 'post_tag' );
$hakone_tag_id = $hakone_tag ? $hakone_tag->term_id : 0;

// index タグ
$index_tag = get_term_by( 'slug', 'index', 'post_tag' );
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

/*
index 必須 ＋ wbc or hakone-ekiden
*/
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'tag__and'       => array( $index_tag_id ),
    'tag__in'        => array( 
        $wbc_tag_id, 
        $hakone_tag_id
    ),
    'orderby'        => 'date',
    'order'          => 'DESC',
);

$index_query = new WP_Query( $args );

// ★ 総件数取得
$total_count = $index_query->found_posts;
?>

<h2 class="h-structural">イベント</h2>
<div class="total-count"><?php echo $total_count; ?><span>件</span></div>

<p class="cluster-read">
このクラスタでは、イベントを「単なる大会や行事」ではなく、
「制度設計・運営構造・経済的影響・社会的意味がどのように結びついているか」という視点から捉え直します。<br>
WBCや箱根駅伝といった大会を通じて、競技価値と社会構造の関係を比較するための入口としてご利用ください。
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
        <li>「index」＋「wbc」「hakone-ekiden」タグの記事はまだありません。</li>
    <?php endif; ?>

    <div style="clear:both"></div>
</ul>

<?php
wp_reset_postdata();
?>

<div class="more-btn">
  <a href="/cluster/event/">
    <span>イベントクラスタページへ</span>
  </a>
</div>
</div>
<!------------------------------------------------------------------------------>
</div>