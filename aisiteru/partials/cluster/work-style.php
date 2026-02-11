<!------------------------------------------------------------------------------>
<ul class="cluster-scope">
  <li>キャリアと成長</li>
  <li>報酬と労働市場</li>
  <li>選択と不確実性</li>
</ul>

<h2>働き方構造</h2>

<p class="cluster-read">
このクラスタでは、働き方を「個人の意思や努力」だけではなく、「労働市場・制度設計・産業構造・技術変化がどのように結びついているか」という視点から捉え直します。<br>
キャリア形成、賃金構造、雇用形態の変化、働き方の選択における意思決定と不確実性といった論点を、比較の入口としてご利用ください。
</p>

<div class="cluster-block">

<?php
// career タグ
$career_tag = get_term_by( 'slug', 'career', 'post_tag' );
$career_tag_id = $career_tag ? $career_tag->term_id : 0;

// wage タグ
$wage_tag = get_term_by( 'slug', 'wage', 'post_tag' );
$wage_tag_id = $wage_tag ? $wage_tag->term_id : 0;

// index タグ
$index_tag = get_term_by( 'slug', 'index', 'post_tag' );
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

/*
index 必須 ＋ career or wage
*/
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'tag__and'       => array( $index_tag_id ),
    'tag__in'        => array( $career_tag_id, $wage_tag_id ),
    'orderby'        => 'date',
    'order'          => 'DESC',
);

$index_query = new WP_Query( $args );
?>

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
                    <h3><span><?php the_title(); ?></span></h3>
                </div>

                <div class="post-content pc">
                <p>
                <?php echo str_replace('\n', '', strip_tags($post->post_content)); ?>
                </p>
                </div>

                <div style="clear:both"></div>
            </div>

            </a>
        </li>

        <?php endwhile; ?>
    <?php else : ?>
        <li>「index」＋「career」または「wage」タグの記事はまだありません。</li>
    <?php endif; ?>

    <div style="clear:both"></div>
</ul>

<?php
wp_reset_postdata();
?>

<div class="more-btn">
  <a href="/cluster/work-style/">
    <span class="visually-hidden">クラスタページへ</span>
  </a>
</div>
</div>
<!------------------------------------------------------------------------------>
