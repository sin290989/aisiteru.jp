<div class="structural-cluster-box">
<!------------------------------------------------------------------------------>

<div class="cluster-block">

<?php
// index タグ
$index_tag = get_term_by( 'slug', 'index', 'post_tag' );
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// ★ 47都道府県の region タグ
$region_slugs = array(
    'region-hokkaido','region-aomori','region-iwate','region-miyagi','region-akita','region-yamagata','region-fukushima',
    'region-ibaraki','region-tochigi','region-gunma','region-saitama','region-chiba','region-tokyo','region-kanagawa',
    'region-niigata','region-toyama','region-ishikawa','region-fukui','region-yamanashi','region-nagano',
    'region-gifu','region-shizuoka','region-aichi','region-mie',
    'region-shiga','region-kyoto','region-osaka','region-hyogo','region-nara','region-wakayama',
    'region-tottori','region-shimane','region-okayama','region-hiroshima','region-yamaguchi',
    'region-tokushima','region-kagawa','region-ehime','region-kochi',
    'region-fukuoka','region-saga','region-nagasaki','region-kumamoto','region-oita','region-miyazaki','region-kagoshima','region-okinawa'
);

// slug → term_id に変換
$region_tag_ids = array();

foreach ($region_slugs as $slug) {
    $tag = get_term_by( 'slug', $slug, 'post_tag' );
    if ($tag) {
        $region_tag_ids[] = $tag->term_id;
    }
}

/*
index 必須 ＋ region（どれか）
*/
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'tag__and'       => array( $index_tag_id ),
    'tag__in'        => $region_tag_ids,
    'orderby'        => 'date',
    'order'          => 'DESC',
);

$index_query = new WP_Query( $args );
$total_count = $index_query->found_posts;
?>

<h2 class="h-structural">地域</h2>
<div class="total-count"><?php echo $total_count; ?><span>件</span></div>

<p class="cluster-read">
このクラスタでは、地域を「観光地やイメージ」ではなく、「都市構造・人口動態・経済活動・文化の形成」といった視点から捉え直します。<br>
各都道府県に紐づくテーマを横断的に比較し、地域という単位がどのように社会の中で機能しているのかを読み解くための入口としてご利用ください。
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
            <img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" alt="デフォルト画像" />
        <?php endif ; ?>
        </div>

        <div class="head">
            <div class="post-dates">
                <time datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>">
                    <?php echo get_the_date('Y.m.d'); ?>
                </time>
            </div>

            <div class="post-title">
                <h3 class="h-post-title"><span><?php the_title(); ?></span></h3>
            </div>

            <div class="post-content pc">
                <p><?php echo str_replace("\n", '', strip_tags($post->post_content)); ?></p>
            </div>
        </div>

        </a>
    </li>

    <?php endwhile; ?>
<?php else : ?>
    <li>
    「index」＋「region-都道府県」タグの記事はまだありません。
    </li>
<?php endif; ?>

<div style="clear:both"></div>
</ul>

<?php wp_reset_postdata(); ?>

<div class="more-btn">
  <a href="/cluster/region/">
    <span>地域クラスタページへ</span>
  </a>
</div>

</div>
<!------------------------------------------------------------------------------>
</div>