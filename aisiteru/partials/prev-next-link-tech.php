<style type="text/css">
    .prev-next-link{
        margin:50px 20px 70px 20px;
    }
    
    .prev-link,
    .next-link{
        width: 50%;
        box-sizing: border-box;
        position: relative;
    }
    .prev-link{
        float: left;
        padding-right: 15px;
        border-right: solid 1px #cccccc;
    }
    .next-link{
        float: right;
        padding-left: 15px;
    }
    
    .prev-link a,
    .next-link a{
        text-decoration: none;
    }
    
    .prev-thumb,
    .next-thumb{
        width: 70%;
        border-radius: 3px;
        overflow: hidden;
    }
    .prev-thumb{
        margin-left: 30%;
    }
    
    .next-thumb img,
    .prev-thumb img{
        width: 100%;
        height: auto;
        vertical-align: bottom;
    }

    .prev-con{
        width: 100%;
        box-sizing: border-box;
    }
    .next-con{
        width: 100%;
        box-sizing: border-box;
    }
    
    .prev-con h3,
    .next-con h3{
        font-size: 13px;
	    line-height:18px;
    }

    .prev-text,
    .next-text{
        color:#031b4e;
        margin-bottom: 10px;
        position: absolute;
        background-color: rgba(255,255,255,0.9);
        line-height: 16px;
       
    }
    .prev-text{
        left:10px;
        top:20px;
    }
    
    .next-text{
        right:10px;
        top:20px;
    }
    
    .item-time{
        font-size: 12px;
        background-image:url("/wp/wp-content/themes/aisiteru/images/icon/time_bl.png");
        background-repeat:no-repeat;
        background-size:11px auto;
        padding-left:15px;
        background-position:left center;
        font-weight: normal;
        color: #46526f;
    }
    .item-title{
        font-weight: bold;
        overflow: hidden;
        margin: 0;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
    }

@media only screen and (min-width: 680px) {
.prev-next-link{
    margin:50px 0;
}
.prev-link,
.next-link{
    height: 120px;
}
.prev-link{
    padding-right: 30px;
}
.next-link{
    padding-left: 30px;
}
.prev-thumb,
.next-thumb{
    width: 110px;
}
.prev-thumb{
    float: left;
    margin-left: 0;
}
.next-thumb{
    float: right;
}
.next-thumb img,
.prev-thumb img{
    transition-duration: 0.3s;
}
.prev-con{
    width: 200px;
    float: right;
}
.next-con{
    width: 200px;
    float: left;
}
.prev-con h3,
.next-con h3{
    transition-duration: 0.3s;
}
.prev-text,
.next-text{
    position:static;
    background-color: transparent;
}
.prev-text{
    padding-left: 7px;
}
.next-text{
    padding-right: 7px;
    text-align: right;
}

.item-time{
    background-size:10px auto;
    padding-left:17px;
}

}
</style>

<?php if ( !wp_is_mobile() ) : ?>
<script type="text/javascript">
$(function () {
$('.next-link').hover(function(){
    $("h3",this).css('color','#0069ff');
    $(".next-thumb img",this).css('transform','scale(1.1)');
}, function(){
    $("h3",this).css('color','#031b4e');
    $(".next-thumb img",this).css('transform','scale(1)');
});  
});
    
$(function () {
$('.prev-link').hover(function(){
    $("h3",this).css('color','#0069ff');
    $(".prev-thumb img",this).css('transform','scale(1.1)');
}, function(){
    $("h3",this).css('color','#031b4e');
    $(".prev-thumb img",this).css('transform','scale(1)');
});  
});
</script>
<?php endif; ?>

<?php
global $post;

// 前の記事を取得（Tech Notes専用）
$prev_args = array(
    'post_type' => 'tech', // カスタム投稿タイプ「tech」
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'DESC',
    'post_status' => 'publish',
    'date_query' => array(
        array(
            'before' => get_the_date('Y-m-d H:i:s'), // 現在の投稿より前の日付
        ),
    ),
);
$prev_query = new WP_Query($prev_args);
$previous_post = $prev_query->have_posts() ? $prev_query->posts[0] : null;

// 次の記事を取得（Tech Notes専用）
$next_args = array(
    'post_type' => 'tech', // カスタム投稿タイプ「tech」
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'ASC',
    'post_status' => 'publish',
    'date_query' => array(
        array(
            'after' => get_the_date('Y-m-d H:i:s'), // 現在の投稿より後の日付
        ),
    ),
);
$next_query = new WP_Query($next_args);
$next_post = $next_query->have_posts() ? $next_query->posts[0] : null;
?>

<div class="prev-next-link">

<?php if ($previous_post): ?>
    <div class="prev-link">
        <a href="<?php echo get_permalink($previous_post->ID); ?>">
            <div class="prev-text">前の記事</div>
            <div class="prev-thumb"><?php echo get_the_post_thumbnail($previous_post->ID, array(120, 80)); ?></div>
            <div class="prev-con">
                <time class="item-time" datetime="<?php echo get_the_date('Y-m-d', $previous_post->ID); ?>">
                    <?php echo get_the_date('Y.m.d', $previous_post->ID); ?>
                </time>
                <h3 class="item-title"><?php echo get_the_title($previous_post->ID); ?></h3>
            </div>
            <div style="clear:both;"></div>
        </a>
    </div>
<?php else: ?>
    <div class="prev-link top">
        <a href="<?php echo home_url('/tech/'); ?>">
            <div class="top-text">トップに戻る</div>
            <div class="top-con">
                <h3 class="item-title">Tech Notes の記事では、この投稿が一番古い記事です。</h3>
            </div>
        </a>
    </div>
<?php endif; ?>

<?php if ($next_post): ?>
    <div class="next-link">
        <a href="<?php echo get_permalink($next_post->ID); ?>">
            <div class="next-text">次の記事</div>
            <div class="next-thumb"><?php echo get_the_post_thumbnail($next_post->ID, array(120, 80)); ?></div>
            <div class="next-con">
                <time class="item-time" datetime="<?php echo get_the_date('Y-m-d', $next_post->ID); ?>">
                    <?php echo get_the_date('Y.m.d', $next_post->ID); ?>
                </time>
                <h3 class="item-title"><?php echo get_the_title($next_post->ID); ?></h3>
            </div>
            <div style="clear:both;"></div>
        </a>
    </div>
<?php else: ?>
    <div class="next-link top">
        <a href="<?php echo home_url('/tech/'); ?>">
            <div class="top-text">トップに戻る</div>
            <div class="top-con">
                <h3 class="item-title">Tech Notes の記事では、この投稿が最新です。</h3>
            </div>
        </a>
    </div>
<?php endif; ?>

<div style="clear:both;"></div>
</div>

