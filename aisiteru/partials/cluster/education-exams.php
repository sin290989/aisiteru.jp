<div class="topic-cluster-box">
<!------------------------------------------------------------------------------>
<div class="cluster-block">
<ul class="cluster-scope">
  <li>評価構造</li>
  <li>選抜制度</li>
  <li>社会接続</li>
</ul>

<?php
// exams タグの term を取得
$season_tag = get_term_by( 'slug', 'exams', 'post_tag' );
$season_tag_id = $season_tag ? $season_tag->term_id : 0;

// index タグの term を取得
$index_tag = get_term_by( 'slug', 'index', 'post_tag' );
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

// exams ＋ index 両方が付いた最新3件を取得
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

<h2 class="h-topic">受験</h2>
<div class="total-count"><?php echo $total_count; ?><span>件</span></div>
<p class="cluster-read">
このクラスタでは、受験を「学力を測る試験」としてではなく、「評価基準・選抜制度・社会的役割がどのように結びついているか」という視点から捉え直します。<br>
試験制度の設計、評価の公平性、選抜と機会の分配といった論点を、教育と社会構造の関係を比較するための入口としてご利用ください。
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
        <li>「index」タグと「exams」タグが付いた記事はまだありません。</li>
    <?php endif; ?>

    <div style="clear:both"></div>
</ul>

<?php
wp_reset_postdata();
?>

<div class="more-btn">
  <a href="/cluster/education/exams/">
    <span>受験クラスタページへ</span>
  </a>
</div>
</div>
<!------------------------------------------------------------------------------>
</div>