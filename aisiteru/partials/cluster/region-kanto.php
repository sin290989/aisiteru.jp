<div class="topic-cluster-box">
<!------------------------------------------------------------------------------>
<div class="cluster-block">

<ul class="cluster-scope">
  <li>都市構造</li>
  <li>人口動態</li>
  <li>経済圏</li>
</ul>

<?php
// index タグ
// index
$index_tag = get_term_by( 'slug', 'index', 'post_tag' );
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// 関東タグ
$region_tags = array(
    'region-tokyo',
    'region-kanagawa',
    'region-saitama',
    'region-chiba',
    'region-ibaraki',
    'region-tochigi',
    'region-gunma'
);

$region_tag_ids = array();

foreach ($region_tags as $slug) {
    $tag = get_term_by( 'slug', $slug, 'post_tag' );
    if ($tag) {
        $region_tag_ids[] = $tag->term_id;
    }
}

// ★ ここが正解（元と同じ構造）
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'tag__and'       => array( $index_tag_id ),
    'tag__in'        => $region_tag_ids,
    'orderby'        => 'date',
    'order'          => 'DESC',
);

$index_query = new WP_Query( $args );

// 総件数
$total_count = $index_query->found_posts;
?>

<h2 class="h-topic">関東地方</h2>
<div class="total-count"><?php echo $total_count; ?><span>件</span></div>

<p class="cluster-read">
このクラスタでは、関東地方を「個別の都道府県の集合」としてではなく、
都市圏の形成・人口集中・経済活動の連動といった構造的な視点から捉え直します。<br>
東京を中心とした首都圏の構造、周辺地域との役割分担、通勤・居住・産業の配置といった観点を通じて、
関東という広域圏がどのように機能しているのかを比較するための入口としてご利用ください。
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
        <li>関東地方の該当記事はまだありません。</li>
    <?php endif; ?>

    <div style="clear:both"></div>
</ul>

<?php
wp_reset_postdata();
?>

<div class="more-btn">
  <a href="/cluster/region/kanto/">
    <span>関東地方クラスタページへ</span>
  </a>
</div>

</div>
<!------------------------------------------------------------------------------>
</div>