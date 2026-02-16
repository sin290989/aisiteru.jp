<div class="structural-cluster-box">
<!------------------------------------------------------------------------------>
<h2 class="h-structural">お金</h2>

<p class="cluster-read">
このクラスタでは、お金を「個人の収入や支出」だけではなく、「金融制度・通貨設計・資産構造・国家と市場の関係がどのように結びついているか」という視点から捉え直します。<br>
資産形成、相続構造、デジタル通貨の設計、金融技術の変化といった論点を、比較の入口としてご利用ください。
</p>

<div class="cluster-block">

<?php
// inheritance タグ
$inheritance_tag = get_term_by( 'slug', 'inheritance', 'post_tag' );
$inheritance_tag_id = $inheritance_tag ? $inheritance_tag->term_id : 0;

// digital-money タグ
$digital_money_tag = get_term_by( 'slug', 'digital-money', 'post_tag' );
$digital_money_tag_id = $digital_money_tag ? $digital_money_tag->term_id : 0;

// index タグ
$index_tag = get_term_by( 'slug', 'index', 'post_tag' );
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

/*
index 必須 ＋ inheritance or digital-money
*/
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'tag__and'       => array( $index_tag_id ),
    'tag__in'        => array( $inheritance_tag_id, $digital_money_tag_id ),
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
                    <h3 class="h-post-title"><span><?php the_title(); ?></span></h3>
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
        <li>「index」＋「inheritance」または「digital-money」タグの記事はまだありません。</li>
    <?php endif; ?>

    <div style="clear:both"></div>
</ul>

<?php
wp_reset_postdata();
?>

<div class="more-btn">
  <a href="/cluster/money/">
    <span class="visually-hidden">クラスタページへ</span>
  </a>
</div>
</div>
<!------------------------------------------------------------------------------>
</div>