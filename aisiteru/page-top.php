<?php
/*
Template Name:top
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php get_template_part("analyticstracking"); ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common103.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/style17.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts") ?>
<script type="text/javascript">
$(document).ready(function () {
    const params = new URLSearchParams(window.location.search);
    if (params.get("view") === "service") {
        const $target = $("#service");
        if ($target.length) {
            // ヘッダー高さを条件に応じて設定
            let headerHeight;
            if ($(window).width() >= 640) {
                // PC用
                headerHeight = 160; // ずらす
            } else {
                // モバイル用
                headerHeight = 100; // ずらす
            }
            // スクロールアニメーションを実行
            $("html, body").animate(
                { scrollTop: $target.offset().top - headerHeight },
                500 // アニメーション速度（ミリ秒）
            );
        }
    }
});
</script>
<style type="text/css">
.top-wapper{
    background-color: #f7f8f8;
}
.inner-contents{
    margin: 0 20px;
}
h2{
    font-family: '游明朝','Yu Mincho',YuMincho,'Hiragino Mincho Pro',serif;
    margin: 0 0 25px 0;
    padding: 0;
    font-size: 36px;
    font-weight: bold;
    line-height: 36px;
    color:#031b4e;
}
.top-wapper h3{
    font-family: '游明朝','Yu Mincho',YuMincho,'Hiragino Mincho Pro',serif;
    font-size: 28px;
    font-weight: bold;
    line-height: 28px;
    margin: 0 0 25px 0;
    padding: 0 0 0 40px;
    color:#031b4e;
    position: relative;
}
.top-wapper h3::before {
    content: "—"; /* 表示する線（ダッシュ） */
    position: absolute;
    left: 7px; /* タイトルからの距離（調整可） */
    font-size: 24px; /* タイトルに合わせる */
    color: #031b4e;
    font-weight: bold;
  }


h2 span,
.top-wapper h3 span,
.with span{
    color: #1433d6;
}
.contents-text{
    font-weight: bold;
    font-size: 14px;
    line-height: 28px;
    margin: 0 0 20px 0;
}
.more-btn a{
    display: block;
    width: 240px;
    height: 50px;
    border-radius: 25px;
    background-color: #1433d6;
    line-height: 50px;
    text-align: center;
    color: #FFFFFF;
    font-weight: bold;
}



/*------------------------------------------------------------*/
.top-message{
    margin:0;
    padding: 80px 0 0 0;
}





@media only screen and (min-width: 680px) {
    #contents{
        margin: 0;
        padding: 100px 0 0 0;
    }
    .inner-contents{
        width: 1100px;
        margin: 0 auto;
    }
    h2{
        margin: 0 0 20px 0;
        font-size: 54px;
        line-height: 54px;
    }
    .top-wapper h3{
        font-size: 38px;
        line-height: 38px;
        margin: 0 0 20px 0;
        padding: 0 0 0 50px;
    }
    .top-wapper h3::before {
      left: 7px; /* タイトルからの距離（調整可） */
      font-size: 32px; /* タイトルに合わせる */
    }
    .contents-text{
        font-size: 15px;
        line-height: 32px;
        margin: 0 0 20px 0;
    }

    
    
    #slideshow {
      position: relative;
      width: 500px;
      height: 500px;
      overflow: hidden;
      border-radius: 50%;
    }
    #slideshow img {
      position: absolute;
      width: 100%;
      height: 100%;
      transform: scale(1.2);
      opacity: 0;
      transition: transform 1.5s ease, opacity 1.5s ease, filter 2s ease;
    }
    #slideshow img.active {
      transform: scale(1);
      opacity: 1;
      filter: brightness(1.2);
    }
    .progress-container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 10;
      width: 500px;
      height: 500px;
    }
    .progress-ring {
      width: 520px;
      height: 520px;
      position: absolute;
      top: -10px;
      left: -10px;
      transform: rotate(-90deg); /* 開始点を12時方向に */
    }
    .progress-ring circle {
      fill: none;
      stroke-width: 4; /* 線幅を調整 */
      stroke: #eeeeee; /* 背景の円 */
    }
    .progress-ring .progress-bar {
      stroke: #1433d7;
      stroke-linecap: round;
      stroke-dasharray: 1630; /* 円周の長さ */
      stroke-dashoffset: 1630; /* 初期値で非表示 */
      transition: stroke-dashoffset linear; /* 動きをスムーズに */
    }

    /*------------------------------------------------------------*/
    .top-message{
        margin:0;
        padding: 150px 0 0 0;
    }


    



}
</style>

</head>
<body>
<?php get_template_part('partials/header'); ?>


<div class="top-wapper">
<div class="top-message">
<div class="inner-contents">
<div id="service"></div>
<h2><span>WEBサイト</span>制作</h2>
<div class="contents-text">
ホームページにはターゲットや明確な目的の設定が必要です。<br>
デザインとマーケティングの力でお客様の強みを引き出し、目的の達成のためにターゲットに響くホームページを制作します。 <br>
専門知識は必要ありません。不安に思うこともありません。<br>
私たちにお任せいただければ、目的に合った最適なコンテンツをご用意いたします。
</div>
</div>
</div>
    

</div>


<?php get_template_part('partials/footer'); ?>
<?php wp_footer(); ?>
</body>
</html>