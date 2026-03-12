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
<title>AIシテル？について｜<?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common117.css" type="text/css" />
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

.catch1{
  font-size: 60px;
  font-family: '游明朝','Yu Mincho',YuMincho,'Hiragino Mincho Pro',serif;
  position: absolute;
  top:30px;
  left:0px;
  font-weight: bold;
  color: var(--color-secondary);
  z-index: 10;
}

.catch2{
  font-size: 50px;
  font-family: '游明朝','Yu Mincho',YuMincho,'Hiragino Mincho Pro',serif;
  position: absolute;
  top:100px;
  left:80px;
  font-weight: bold;
  color: var(--color-secondary);
  z-index: 10;
}

.with{
  position: absolute;
  font-size: 16px;
  color: var(--color-secondary);
  top:140px;
  left: 175px;
  z-index: 20;
  color:var(--color-secondary);
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



}
</style>
</head>
<body>
<?php get_template_part('partials/header'); ?>
<div id="pan">
<div class="inner">
<a href="/"><span class="home">トップページ</span></a> > <a href="/about">AIシテル？について</a></span>
</div>
</div>

<div id="page-wapper">
<div id="about-contents">

<div class="catch">
<div class="catch1">「<span>多角</span>」</div>
<div class="catch2">で読み解く</div>
<div class="with"><span>with</span> AISITERU？</div>
</div>

<div class="about-text">
AISITERU.jp（AIシテル？）は、「<strong>多角で読み解く</strong>」というシンプルな理念を中心に据えています。<br>
ここでいう「<strong>多角</strong>」とは、単に情報を並べることではありません。同じテーマを複数のAIに投げかけ、そこに生まれる“解釈の違い”を比較し、読者が世界をより立体的に理解できるようにする姿勢そのものを意味しています。<br>
私たちは、AIをただのツールとしてではなく、視点を広げるための“思考のパートナー”と捉えています。<br>
<br>

AISITERU.jpが提示するのは、AIごとの文章の癖や分析軸、結論の違いを読み比べることで見えてくる、新しい学びの形です。<br>
AIの意見を鵜呑みにするのではなく、「なぜこう書くのか？」「どの視点が抜けているのか？」を考えながら読むことで、情報に対する確かな土台――いわば<strong>知的な資産</strong>を形成することを目指しています。<br>
流行や表面的な話題に流されず、本質を見極めるための素材を丁寧に選び抜き、長く読み続けられる価値あるコンテンツを届けてまいります。<br>
<br>

また、本サイトは“離れた場所から一方的に発信するメディア”ではありません。<br>
AIの多様な視点を読者のそばに置き、日々の思考を支える存在でありたいと考えています。複数のAIを並べて読むことで生まれる気づきや違和感、発見。それらを読者と共有し、共に学び、共に育てていくことが AISITERU.jp の強みです。<br>
<br>

「<strong>多角で読み解く（with AISITERU）</strong>」——それは、情報との距離を縮め、視点の幅を広げ、考える楽しさを読者と分かち合うという私たちの信念です。<br>
これからも、AIとの新しい付き合い方を提示しながら、読者とともに未来の知識体験をつくり続ける存在でありたいと願っています。<br><br>

</div>

</div>
</div>

<?php get_template_part('partials/footer'); ?>
<?php wp_footer(); ?>
</body>
</html>