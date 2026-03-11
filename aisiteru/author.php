<!DOCTYPE html>
<html lang="ja">
<head>
<?php get_template_part("analyticstracking"); ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php the_author(); ?>の書いた記事｜<?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common115.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts") ?>
</head>
<body>

<?php get_template_part('partials/header'); ?>

<div id="pan">
<div class="inner">
<a href="/"><span class="home">トップページ</span></a> > <?php the_author(); ?>の書いた記事
</div>
</div>

<div id="wapper">
<div id="contents">
<div id="main">
<h1 class="author"><?php the_author(); ?>の書いた記事</h1>





<div class="author-profile">
<div class="author-profile-title"><?php the_author(); ?>のプロフィール</div>
<div class="inner">
<div class="author-img2"><?php echo get_avatar(get_the_author_meta( 'ID' ),76); ?></div>
<div class="author-info2">
<div class="author-name"><?php the_author(); ?></div>
<div class="author-meta"><?php the_author_meta('user_description'); ?></div>
</div>
<div style="clear:both"></div>
</div>
</div>





<ul class="post-index">
    <?php if(have_posts()): while(have_posts()):
    the_post(); ?>

        <li>
            <?php $cat = get_the_category(); ?>
            <?php $cat = $cat[0]; ?>
            <div class="post-author">
                <div class="post-author-img"><?php echo get_avatar(get_the_author_meta( 'ID' ),30); ?></div>
                <div class="post-author-name"><?php the_author(); ?></div>
            </div>
            
            <?php
                $days = 3;  // NEWマークを表示する日数
                $now = date_i18n('U');  // 今の時間
                $entry = get_the_time('U');  // 投稿日の時間
                $term = date('U',($now - $entry)) / 86400;
                if( $days > $term ){
                    echo '<span class="newMark"></span>';
                }
            ?>

            <a href="<?php the_permalink(); ?>">
            <!--サムネイル右側画像-->
            
            <div class="post_thumbnail">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('single-thumbnails'); ?>
            <?php else : ?>
                <img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
            <?php endif ; ?>
            </div>
            <!--サムネイル右側画像-->

            <!--サムネイル左側-->
            <div class="head">
                <ul class="post-info">
                    <li class="time">
                        <?php
                        if(get_the_time('U') !== get_the_modified_time('U')){
                        ?>
                            更新日:<time class="updated" datetime="<?php the_modified_date("Y-m-d H:i:s") ?>"><?php the_modified_date('Y年n月j日 l') ?></time>
                        <?php
                        }else{
                        ?>
                            <time class="entry-date published" datetime="<?php echo get_the_date("Y-m-d H:i:s") ?>"><?php echo get_the_date('Y年n月j日 l') ?></time>
                        <?php
                        }
                        ?>
                    </li>
                    <li class="cate pc">
                        <?php echo get_cat_name($cat->term_id); ?>
                    </li>
                    <div style="clear:both"></div>
                </ul>

                <div class="post-title">
                <h2><?php the_title(); ?></h2>
                </div>

                <?php
                if($cat->category_nicename == 'quiz'){
                    echo '<div class="post-content">';
                    echo '<div class="seikairitsu">';
                    echo '正解率';
                    $seikai_ritsu = $row[$post->ID]["seikai_ritsu"] * 100;
                    echo '<span class="seikai_ritsu">'.round($seikai_ritsu,2).'</span>';
                    echo '%';
                    echo '</div>';
                    echo '</div>';
                }else{
                    echo '<div class="post-content pc">';
                    if(mb_strlen($post->post_content,'UTF-8')>50){
                        $content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 50,'UTF-8'));
                        echo $content.'…';
                    }else{
                        echo str_replace('\n', '', strip_tags($post->post_content));
                    }
                    echo '</div>';
                }
                ?>
            </div>

            <div style="clear:both"></div>
            </a>
        </li>
    <?php endwhile; endif; ?>
    <div style="clear:both"></div>
</ul>




<div id="author-index"><a href="/author">執筆者一覧</a></div>

</div>


<div id="side">
<?php dynamic_sidebar('sidebar-1'); ?>
<?php get_template_part("partials/cat") ?>
<?php //get_template_part("partials/tag") ?>
</div>
<div style="clear:both"></div>


</div>





</div>
<?php get_template_part('partials/footer'); ?>
<?php wp_footer(); ?>
</body>
</html>