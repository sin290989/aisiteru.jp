<?php
/*
Template Name:about
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common103.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/page.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/style17.css" type="text/css" />
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

.catch1{
  font-size: 60px;
  font-family: '游明朝','Yu Mincho',YuMincho,'Hiragino Mincho Pro',serif;
  position: absolute;
  top:30px;
  left:0px;
  font-weight: bold;
  color: #031b4e;
  z-index: 10;
}

.catch2{
  font-size: 50px;
  font-family: '游明朝','Yu Mincho',YuMincho,'Hiragino Mincho Pro',serif;
  position: absolute;
  top:100px;
  left:80px;
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

.gaiyo{
  padding: 20px;
  border:2px solid #EEEEEE;
  border-radius: 5px;
  font-size:14px;
  line-height: 18px;
}

.gaiyo li{
  margin:0 0 20px 0 ;
}

.gaiyo li:last-child{
  margin:0;
}

.gaiyo-title{
  width: 100px;
  margin: 0 0 7px 0 ;
  color: #1433d6;
}

.gaiyo-con{
  padding: 0 0 0 0;
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
  height: 250px;
}

.catch1{
  font-size: 105px;
  top:60px;
  left: -40px;
}

.catch2{
  top:60px;
  left: 340px;
  z-index: 10;
  font-size: 95px;
}

.with{
  font-size:28px;
  top:135px;
  left: 20px;
}

.gaiyo{
  margin:50px 0 0 0;
  font-size:16px;
}

.gaiyo-title{
  border-right:2px solid #EEEEEE;
  float: left;
  margin: 0 20px 0 0 ;
}

.moji3{
  letter-spacing: 11px;
}

}
</style>
</head>
<body>
<?php get_template_part('partials/header'); ?>
<div id="pan">
<div class="inner">
<a href="/"><span class="home">トップページ</span></a> > <a href="/about">私たちのこと</a></span>
</div>
</div>

<div id="page-wapper">
<div id="about-contents">
<div class="catch">
<div class="catch1">「<span>近く</span>」</div>
<div class="catch2">で支える</div>
<div class="with"><span>with</span> aisiteru</div>
</div>
<div class="about-text">
私たちアンドシークは、「<strong>近くで支える</strong>」というシンプルな言葉に、すべてを込めています。<br>
この「<strong>近く</strong>」とは、物理的な距離だけではありません。お客様との信頼関係を築き、心の距離を縮め、親身になって寄り添う姿勢を意味しています。私たちは、お客様の課題や理想を深く理解し、それを共に探求するパートナーでありたいと考えています。<br>
<br>
私たちは、Webサイトを単なるツールではなく、「<strong>資産</strong>」として位置づけています。<br>
資産には安定した土台が欠かせません。だからこそ、技術的な安定性と持続可能性を重視し、長くお客様のビジネスを支え続ける存在でありたいと願っています。派手さや流行を追うだけではなく、本当に必要なものを丁寧に選び抜き、真に価値あるWebサイトをつくることをお約束します。<br>
<br>
また、地元に根ざした私たちだからこそ気づけるニーズがあります。<br>
地域の文化や価値観、そして企業が抱える課題を理解し、最適な形で解決へと導く力。それが、地元企業と共に成長してきたアンドシークの強みです。「<strong>近くで支える</strong>」という言葉のもと、迅速で確かなサポートを提供し、お客様に安心と信頼をお届けします。<br>
<br>
「<strong>近くで支える（with aisiteru）</strong>」――それは、距離的にも、心のつながりとしても、いつでもお客様のそばにいるという私たちの信念です。<br>
これからもお客様とともに歩み続け、一緒に未来を創っていくパートナーでありたいと願っています。<br><br>

<div class="gaiyo">
<ul>
<li><div class="gaiyo-title moji3">組織名</div><div class="gaiyo-con">aisiteru（アンドシーク）</div></li>
<li><div class="gaiyo-title moji3">所在地</div><div class="gaiyo-con">〒980-0021　宮城県仙台市青葉区中央2-2-30 日興ビル4F（<a href="https://maps.app.goo.gl/3R1DgFnSzChxN33J9" target="_blank">Google Map</a>）</div></li>
<li><div class="gaiyo-title moji3">連絡先</div><div class="gaiyo-con">info@aisiteru.jp</div></li>
<li><div class="gaiyo-title">事業内容</div><div class="gaiyo-con">インターネットメディア事業、インターネット広告制作事業、コンテンツ開発事業 </div></li>
</ul>
</div>

</div>
</div>
</div>
<?php get_template_part('partials/footer'); ?>
<?php wp_footer(); ?>
</body>
</html>