<div class="topic-cluster-box">
<!------------------------------------------------------------------------------>
<div class="cluster-block">

<ul class="cluster-scope">
  <li>解散権</li>
  <li>選挙制度</li>
  <li>政権構造</li>
</ul>

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
cabinet-dissolution または dissolution-election
*/
$args = array(
    'post_type'       => 'post',
    'posts_per_page'  => 3,
    'tax_query'       => array(
        'relation' => 'OR',
        array(
            'relation' => 'AND',
            array(
                'taxonomy' => 'post_tag',
                'field'    => 'term_id',
                'terms'    => array( $index_tag_id ),
            ),
            array(
                'taxonomy' => 'post_tag',
                'field'    => 'term_id',
                'terms'    => array( $cabinet_dissolution_tag_id ),
            ),
        ),
        array(
            'relation' => 'AND',
            array(
                'taxonomy' => 'post_tag',
                'field'    => 'term_id',
                'terms'    => array( $index_tag_id ),
            ),
            array(
                'taxonomy' => 'post_tag',
                'field'    => 'term_id',
                'terms'    => array( $dissolution_election_tag_id ),
            ),
        ),
    ),
    'orderby'         => 'date',
    'order'           => 'DESC',
);

$index_query = new WP_Query( $args );

// ★ 総件数取得
$total_count = $index_query->found_posts;
?>

<h2 class="h-topic">内閣解散・解散総選挙</h2>
<div class="total-count"><?php echo $total_count; ?><span>件</span></div>

<p class="cluster-read">
このクラスタでは、内閣解散と解散総選挙を「政治イベント」としてではなく、
権力の正当性・制度設計・民意との接続がどのように構造化されているかという視点から捉え直します。<br>
解散権の所在、政権維持とタイミングの関係、選挙制度の設計、民意の反映と政治判断の関係といった論点が、
政治制度と権力構造の中でどのように機能しているのかを比較するための入口としてご利用ください。
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
  <a href="/cluster/politics/cabinet-dissolution/">
    <span>内閣解散・解散総選挙クラスタページへ</span>
  </a>
</div>

</div>
<!------------------------------------------------------------------------------>
</div>