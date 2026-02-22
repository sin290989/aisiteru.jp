<div class="topic-cluster-box">
<!------------------------------------------------------------------------------>
<div class="cluster-block">

<ul class="cluster-scope">
  <li>所得把握と課税構造</li>
  <li>税制設計と再分配メカニズム</li>
  <li>個人・事業者・国家の財政関係</li>
</ul>

<?php
// tax-return タグの term を取得（確定申告）
$season_tag = get_term_by( 'slug', 'tax-return', 'post_tag' );
$season_tag_id = $season_tag ? $season_tag->term_id : 0;

// index タグの term を取得
$index_tag = get_term_by( 'slug', 'index', 'post_tag' );
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// tax-return ＋ index 両方が付いた最新3件を取得
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

<h2 class="h-topic">確定申告</h2>
<div class="total-count"><?php echo $total_count; ?><span>件</span></div>

<p class="cluster-read">
このクラスタでは、確定申告を「税金を計算して提出する手続き」としてではなく、
所得把握の仕組み・課税構造・再分配設計・国家財政との接続がどのように社会構造と結びついているかという視点から捉え直します。<br>
所得区分、控除制度、累進課税、申告義務の範囲、個人事業と給与所得の違いといった論点が、
税制設計や財政構造とどのように交差しているのかを比較するための入口としてご利用ください。
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
        <li>「index」タグと「tax-return」タグが付いた記事はまだありません。</li>
    <?php endif; ?>

    <div style="clear:both"></div>
</ul>

<?php
wp_reset_postdata();
?>

<div class="more-btn">
  <a href="/cluster/money/tax-return/">
    <span class="visually-hidden">クラスタページへ</span>
  </a>
</div>

</div>
<!------------------------------------------------------------------------------>
</div>