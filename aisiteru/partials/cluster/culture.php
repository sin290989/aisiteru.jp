<div class="structural-cluster-box">
<!------------------------------------------------------------------------------>

<div class="cluster-block">

<?php
// love タグ（恋愛）
$love_tag = get_term_by( 'slug', 'love', 'post_tag' );
$love_tag_id = $love_tag ? $love_tag->term_id : 0;

// game タグ（ゲーム）
$game_tag = get_term_by( 'slug', 'game', 'post_tag' );
$game_tag_id = $game_tag ? $game_tag->term_id : 0;

// taiga-drama タグ（大河ドラマ）
$taiga_tag = get_term_by( 'slug', 'taiga-drama', 'post_tag' );
$taiga_tag_id = $taiga_tag ? $taiga_tag->term_id : 0;

// j-league タグ（Jリーグ）★追加
$jleague_tag = get_term_by( 'slug', 'j-league', 'post_tag' );
$jleague_tag_id = $jleague_tag ? $jleague_tag->term_id : 0;

// index タグ
$index_tag = get_term_by( 'slug', 'index', 'post_tag' );
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

/*
index 必須 ＋（love OR game OR taiga-drama OR j-league）
*/
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'tag__and'       => array( $index_tag_id ),
    'tag__in'        => array( $love_tag_id, $game_tag_id, $taiga_tag_id, $jleague_tag_id ),
    'orderby'        => 'date',
    'order'          => 'DESC',
);

$index_query = new WP_Query( $args );

// ★ 総件数取得
$total_count = $index_query->found_posts;
?>

<h2 class="h-structural">文化</h2>
<div class="total-count"><?php echo $total_count; ?><span>件</span></div>

<p class="cluster-read">
このクラスタでは、文化を「個人の趣味や嗜好」だけではなく、「通過儀礼・価値観・社会規範・メディア・慣習」といった構造の中で捉え直します。<br>
恋愛やゲームといった身近なテーマから、大河ドラマのような歴史表象、そしてJリーグに代表されるスポーツ文化まで、異なる領域を横断しながら、文化がどのように社会と結びつき、どのように再構成されていくのかを読み解くための入口としてご利用ください。
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
        <li>
        「index」＋「love」または「game」または「taiga-drama」または「j-league」タグの記事はまだありません。
        </li>
    <?php endif; ?>

    <div style="clear:both"></div>
</ul>

<?php
wp_reset_postdata();
?>

<div class="more-btn">
  <a href="/cluster/culture/">
    <span>文化クラスタページへ</span>
  </a>
</div>

</div>
<!------------------------------------------------------------------------------>
</div>