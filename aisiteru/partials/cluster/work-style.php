<div class="structural-cluster-box">
<!------------------------------------------------------------------------------>
<div class="cluster-block">
<?php
// career タグ
$career_tag = get_term_by( 'slug', 'career', 'post_tag' );
$career_tag_id = $career_tag ? $career_tag->term_id : 0;

// wage タグ
$wage_tag = get_term_by( 'slug', 'wage', 'post_tag' );
$wage_tag_id = $wage_tag ? $wage_tag->term_id : 0;

// employment-type タグ
$employment_tag = get_term_by( 'slug', 'employment-type', 'post_tag' );
$employment_tag_id = $employment_tag ? $employment_tag->term_id : 0;

// working-hours タグ（労働時間）
$working_hours_tag = get_term_by( 'slug', 'working-hours', 'post_tag' );
$working_hours_tag_id = $working_hours_tag ? $working_hours_tag->term_id : 0;

// performance-evaluation タグ（評価制度）
$performance_eval_tag = get_term_by( 'slug', 'performance-evaluation', 'post_tag' );
$performance_eval_tag_id = $performance_eval_tag ? $performance_eval_tag->term_id : 0;

// job-change タグ（転職）
$job_change_tag = get_term_by( 'slug', 'job-change', 'post_tag' );
$job_change_tag_id = $job_change_tag ? $job_change_tag->term_id : 0;

// side-job タグ（副業）
$side_job_tag = get_term_by( 'slug', 'side-job', 'post_tag' );
$side_job_tag_id = $side_job_tag ? $side_job_tag->term_id : 0;

// ai-work タグ（AIと仕事）
$ai_work_tag = get_term_by( 'slug', 'ai-work', 'post_tag' );
$ai_work_tag_id = $ai_work_tag ? $ai_work_tag->term_id : 0;

// ★ 追加：b2b-saas タグ（法人SaaS）
$b2b_it_tag = get_term_by( 'slug', 'b2b-saas', 'post_tag' );
$b2b_it_tag_id = $b2b_it_tag ? $b2b_it_tag->term_id : 0;

// index タグ
$index_tag = get_term_by( 'slug', 'index', 'post_tag' );
$index_tag_id = $index_tag ? $index_tag->term_id : 0;

/*
index 必須 ＋
career or wage or employment-type or working-hours
or performance-evaluation or job-change or side-job or ai-work or b2b-saas
*/
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'tag__and'       => array( $index_tag_id ),
    'tag__in'        => array(
        $career_tag_id,
        $wage_tag_id,
        $employment_tag_id,
        $working_hours_tag_id,
        $performance_eval_tag_id,
        $job_change_tag_id,
        $side_job_tag_id,
        $ai_work_tag_id,
        $b2b_it_tag_id
    ),
    'orderby'        => 'date',
    'order'          => 'DESC',
);

$index_query = new WP_Query( $args );

// ★ 総件数取得
$total_count = $index_query->found_posts;
?>

<h2 class="h-structural">働き方</h2>
<div class="total-count"><?php echo $total_count; ?><span>件</span></div>

<p class="cluster-read">
このクラスタでは、働き方を「個人の意思や努力」だけではなく、
「労働市場・制度設計・産業構造・技術変化がどのように結びついているか」という視点から捉え直します。<br>
キャリア形成、賃金構造、雇用形態の変化、労働時間の設計、評価制度の設計、転職による流動性の拡大、
副業による収入分散とリスク再配分、AI導入による役割再編と価値創出の変化、
法人SaaSによる業務設計と管理の再編、働き方の選択における意思決定と不確実性といった論点を、比較の入口としてご利用ください。
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
「career」「wage」「employment-type」「working-hours」
「performance-evaluation」「job-change」「side-job」「ai-work」「b2b-saas」
タグの記事はまだありません。
</li>
<?php endif; ?>

<div style="clear:both"></div>
</ul>

<?php wp_reset_postdata(); ?>

<div class="more-btn">
<a href="/cluster/work-style/">
<span>働き方クラスタページへ</span>
</a>
</div>

</div>
<!------------------------------------------------------------------------------>
</div>