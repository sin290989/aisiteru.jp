<?php
/*
Template Name:about
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
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/page.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts") ?>
<style type="text/css">
  
#page-wapper{
  background-color: #FFFFFF;
}
#pan{
  border-bottom:none;
}
#about-contents{
  margin: 0 20px;
  padding: 20px 0 50px 0;
  font-size:16px;
  line-height: 32px;
  font-weight: bold;
  text-align: justify;
}
.about-text strong{
  color: #1433d6;
}

.catch{
  position: relative;
  width: 100%;
  height: 200px;
}



.catch2{
  font-size: 50px;
  font-family: '游明朝','Yu Mincho',YuMincho,'Hiragino Mincho Pro',serif;
  position: absolute;
  top:100px;
  left:0;
  font-weight: bold;
  color: #031b4e;
  z-index: 10;
}

.with{
  position: absolute;
  font-size: 16px;
  color: #031b4e;
  top:140px;
  left: 175px;
  z-index: 20;
  color:#031b4e;
  font-weight: bold;
}

.catch1 span,
.with span{
    color: #1433d6;
}



#footer{
  border-top:1px solid #f7f8f8;
}

@media only screen and (min-width: 680px) {   
#about-contents{
  width: 1100px;
  margin: 0 auto;
  padding: 0;
  font-size:20px;
  line-height: 40px;
}
.about-text{
  padding: 0 20px 50px 20px;
}
.catch{
  height: 175px;
}



.catch2{
  top:60px;
  left: 40px;
  z-index: 10;
  font-size: 95px;
}

.with{
  font-size:28px;
  top:135px;
  left: 20px;
}



}
</style>
</head>
<body>
<?php get_template_part('partials/header'); ?>
<div id="pan">
<div class="inner">
<a href="/"><span class="home">トップページ</span></a> > 404 Not Found</span>
</div>
</div>

<div id="page-wapper">
<div id="about-contents">

<div class="catch">
<div class="catch2">404 Not Found</div>
</div>

<div class="about-text">
お探しのページは、すでに削除されたか、URLが変更された可能性があります。<br>
入力されたアドレスに誤りがないかをご確認ください。<br>
<br>

AISITERU.jp（AIシテル？）は、ひとつのテーマを複数のAIで読み解き、その「解釈の違い」を比較しながら楽しむためのメディアです。<br>
目的のページにはたどり着けませんでしたが、ほかのテーマやAI比較記事から、新しい発見に出会っていただければ幸いです。<br>
<br>

・トップページから探す：<a href="/">AISITERU.jp トップへ戻る</a><br>
・ブラウザの「戻る」ボタンで前のページに戻る<br>
<br>

「<strong>多角で読み解く（with AISITERU）</strong>」という理念のもと、これからもAIとともに世界を読み解くコンテンツを更新してまいります。<br>
引き続き AISITERU.jp をご覧いただけましたら幸いです。<br><br>

</div>

</div>
</div>


<?php get_template_part('partials/footer'); ?>
<?php wp_footer(); ?>
</body>
</html>