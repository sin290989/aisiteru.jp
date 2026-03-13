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
        color:var(--color-secondary);
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
	$previous_post = get_previous_post(true);
    if($previous_post){
        $previous_id = $previous_post->ID;
        $previous_date = mysql2date('Y.m.d', $previous_post->post_date);
        $prevThumbnail = get_the_post_thumbnail($previous_post->ID, array(120,80) ); //「前の記事」データのサムネイル取得
    }
	
	$next_post = get_next_post(true);
    if($next_post){
        $next_id = $next_post->ID;
        $next_date = mysql2date('Y.m.d', $next_post->post_date);
        $nextThumbnail = get_the_post_thumbnail($next_post->ID, array(120,80) ); //「次の記事」データのサムネイル取得
    }
?>
<div class="prev-next-link">
  
<?php if($previous_post): ?>
    <div class="prev-link">
    <a href="<?php the_permalink( $previous_id ); ?>">
    <div class="prev-text">前の記事</div>
    <div class="prev-thumb"><?php echo $prevThumbnail; ?></div>  
    <div class="prev-con">
        <time class="item-time" datetime="<?php echo $previous_date; ?>"><?php echo $previous_date; ?></time>
        <h3 class="item-title"><?php echo get_the_title( $previous_id ); ?></h3>
    </div>
    <div style="clear:both;"></div>  
    </a>
    </div> 
<?php else: ?>
    <div class="prev-link top">
    <a href="/">
    <div class="top-text">トップに戻る</div>
    <div class="top-con">
    <h3 class="item-title">WEB制作関連記事では、この投稿が一番古い記事です。</h3>
    </div>
    </a>
    </div> 
<?php endif; ?>   
    
<?php if($next_post): ?>
    <div class="next-link">
    <a href="<?php the_permalink( $next_id ); ?>">
    <div class="next-text">次の記事</div>
    <div class="next-thumb"><?php echo $nextThumbnail; ?></div>
    <div class="next-con">
        <time class="item-time" datetime="<?php echo $next_date; ?>"><?php echo $next_date; ?></time>
        <h3 class="item-title"><?php echo get_the_title( $next_id ); ?></h3>
    </div>
    <div style="clear:both;"></div> 
    </a>
    </div> 
<?php else: ?>
    <div class="next-link top">
    <a href="/">
    <div class="top-text">トップに戻る</div>
    <div class="top-con">
    <h3 class="item-title">WEB制作関連記事では、この投稿が最新です。</h3>
    </div> 
    </a>
    </div> 
<?php endif; ?>
<div style="clear:both;"></div>   
</div>