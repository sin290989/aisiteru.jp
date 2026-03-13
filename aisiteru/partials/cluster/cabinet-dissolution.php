<div class="topic-cluster-box">
<!------------------------------------------------------------------------------>


<div class="cluster-block">
<ul class="cluster-scope">
  <li>解散制度</li>
  <li>戦略判断</li>
  <li>民主正統性</li>
</ul>

<?php
// (index + cabinet-dissolution) OR (index + dissolution-election)
// 最新3件のみ表示

$args = array(
  'post_type'       => 'post',
  'posts_per_page' => 3,   // ← 最新3件固定
  'orderby'        => 'date',
  'order'          => 'DESC',
  'tax_query'      => array(
    'relation' => 'OR',

    // パターンA: index + cabinet-dissolution
    array(
      'relation' => 'AND',
      array(
        'taxonomy' => 'post_tag',
        'field'    => 'slug',
        'terms'    => 'index',
      ),
      array(
        'taxonomy' => 'post_tag',
        'field'    => 'slug',
        'terms'    => 'cabinet-dissolution',
      ),
    ),

    // パターンB: index + dissolution-election
    array(
      'relation' => 'AND',
      array(
        'taxonomy' => 'post_tag',
        'field'    => 'slug',
        'terms'    => 'index',
      ),
      array(
        'taxonomy' => 'post_tag',
        'field'    => 'slug',
        'terms'    => 'dissolution-election',
      ),
    ),
  ),
);

$index_query = new WP_Query( $args );

// ★ 総件数取得
$total_count = $index_query->found_posts;
?>

<h2 class="h-topic">内閣解散・解散総選挙</h2>
<div class="total-count"><?php echo $total_count; ?><span>件</span></div>
<p class="cluster-read">
このクラスタでは、内閣解散や解散総選挙を「政治的な出来事」ではなく、制度としての位置づけと意味から捉え直します。<br>
戦略と制度、民意と正統性、権力と責任の関係を比較するための入口としてご利用ください。
</p>



<ul class="post-index">
    <?php if ( $index_query->have_posts() ) : ?>
        <?php while ( $index_query->have_posts() ) : $index_query->the_post(); ?>

        <li>
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
                <?php echo str_replace("\n", '', strip_tags(get_the_content())); ?>
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

<?php wp_reset_postdata(); ?>
<div class="more-btn"><a href="/cluster/cabinet-dissolution/"><span>内閣解散・総選挙クラスタページへ</span></a></div>
</div>
<!------------------------------------------------------------------------------>
</div>