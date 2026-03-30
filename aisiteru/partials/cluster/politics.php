<div class="structural-cluster-box">
<!------------------------------------------------------------------------------>

<div class="cluster-block">

<?php
// cabinet-dissolution タグ（内閣解散）
$cabinet_dissolution_tag = get_term_by( 'slug', 'cabinet-dissolution', 'post_tag' );
$cabinet_dissolution_tag_id = $cabinet_dissolution_tag ? $cabinet_dissolution_tag->term_id : 0;

// dissolution-election タグ（解散総選挙）
$dissolution_election_tag = get_term_by( 'slug', 'dissolution-election', 'post_tag' );
$dissolution_election_tag_id = $dissolution_election_tag ? $dissolution_election_tag->term_id : 0;

// index タグ
$index_tag = get_term_by( 'slug', 'index', 'post_tag' );
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

/*
index 必須 ＋
cabinet-dissolution or dissolution-election
*/
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'tag__and'       => array( $index_tag_id ),
    'tag__in'        => array(
        $cabinet_dissolution_tag_id,
        $dissolution_election_tag_id
    ),
    'orderby'        => 'date',
    'order'          => 'DESC',
);

$index_query = new WP_Query( $args );

// ★ 総件数取得
$total_count = $index_query->found_posts;
?>

<h2 class="h-structural">政治</h2>
<div class="total-count"><?php echo $total_count; ?><span>件</span></div>

<p class="cluster-read">
このクラスタでは、政治を「選挙や政権運営の出来事」だけではなく、「制度設計・権力構造・意思決定プロセスがどのように機能しているか」という視点から捉え直します。<br>
内閣解散という制度の意味、解散総選挙の構造、政権維持と民意の関係、政治的意思決定のプロセスと正当性といった論点を、比較の入口としてご利用ください。
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
        「index」＋
        「cabinet-dissolution」「dissolution-election」
        タグの記事はまだありません。
        </li>
    <?php endif; ?>

    <div style="clear:both"></div>
</ul>

<?php
wp_reset_postdata();
?>

<div class="more-btn">
  <a href="/cluster/politics/">
    <span>政治クラスタページへ</span>
  </a>
</div>

</div>
<!------------------------------------------------------------------------------>
</div>