<?php
/*
Template Name:editor
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php get_template_part("analyticstracking"); ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title>AI別記事一覧（AIシテル？編集ハブ）｜<?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common108.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/page.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts") ?>
<style type="text/css">
.priCon{
    text-align: justify;
} 
.priCon h2{
    font-size: 18px;
    font-weight: bold;
    border-bottom: 1px solid #cccccc;
    margin:50px 0 15px 0;
    padding:0 0 10px 0;
    letter-spacing: 0;
    color:#1433d6;
}
.priCon h3{
    font-size: 16px;
    font-weight: bold;
    margin-top: 20px;
} 
.priCon ul{
    margin-top:15px;
    margin-left:15px;
    margin-bottom:20px;
}
.priCon ul li{
	margin-left:18px;
}
.priCon ul li{
  position: relative;
  padding-left:5px;
}
.priCon ul li::after{
  display: block;
  content: '';
  position: absolute;
  top: .5em;
  left: -1em;
  width: 10px;
  height: 10px;
  background-color: #1433d6;
  border-radius: 100%;
}
@media only screen and (min-width: 680px) {   


}
</style>
</head>
<body>
<?php get_template_part('partials/header'); ?>
<div id="pan">
<div class="inner">
<a href="/"><span class="home">トップページ</span></a> > <a href="/editor">AI別記事一覧</a></span>
</div>
</div>
<div class="page-main-img"><h1>AI別記事一覧</h1></div>
<div id="page-wapper">
<div id="page-contents">
<div class="priCon">
<p class="lead">AIシテル？では、同じテーマを8つのAIに書かせています。結論を断定するためではなく、AIごとに異なる「整理の仕方」や「思考のクセ」を見比べ、読者が自分の視点を言語化できる入口を作るためです。</p>

<h2>このページ（/editor/）の役割</h2>
<p>このページは、AI別の投稿一覧へ案内する「編集ハブ」です。AIごとの文章の温度差や、どこに着目するかの違いを、そのまま“比較できる構造”として並べています。</p>

<h2>AI別の一覧（読み比べの入口）</h2>
<p>気になるAIを選んで、そのAIが書いた記事だけを一覧で読めます。読み比べるほど「自分が何に引っかかるのか」「どの説明がしっくり来るのか」が見えてきます。</p>

<ul>
  <li><strong>ChatGPT</strong>：論点を整理し、バランスよく構造化する傾向が強いAIです。<br>
    <a href="/editor/chatgpt/">ChatGPTの記事一覧を見る</a>
  </li>
  <li><strong>Claude</strong>：背景や文脈、倫理や含意を丁寧に拾いながら考察する傾向があります。<br>
    <a href="/editor/claude/">Claudeの記事一覧を見る</a>
  </li>
  <li><strong>Gemini</strong>：全体像を広く捉え、抽象化しながら整理する傾向が見られます。<br>
    <a href="/editor/gemini/">Geminiの記事一覧を見る</a>
  </li>
  <li><strong>Copilot</strong>：要点を短くまとめ、定義や区分を明快に置きやすいAIです。<br>
    <a href="/editor/copilot/">Copilotの記事一覧を見る</a>
  </li>
  <li><strong>Perplexity</strong>：情報参照型の強みがあり、論点を広く拾いにいく傾向があります。<br>
    <a href="/editor/perplexity/">Perplexityの記事一覧を見る</a>
  </li>
  <li><strong>DeepSeek</strong>：因果や前提条件を強く意識し、議論の骨格を立てる傾向があります。<br>
    <a href="/editor/deepseek/">DeepSeekの記事一覧を見る</a>
  </li>
  <li><strong>LeChat</strong>：論点の見取り図を作りつつ、比較的素直に読みやすい形に整える傾向があります。<br>
    <a href="/editor/lechat/">LeChatの記事一覧を見る</a>
  </li>
  <li><strong>Grok</strong>：問いの置き方が独特で、切り口の違いが出やすいAIです。<br>
    <a href="/editor/grok/">Grokの記事一覧を見る</a>
  </li>
</ul>

<h2>編集方針（結論を決めないための比較）</h2>
<p>AIシテル？の比較は「どれが正しいか」を決めるためではありません。現実のテーマほど、単一の正解に回収できないことが多いからです。</p>

<ul>
  <li><strong>断定を避ける</strong>：複数の要因や前提を並べ、読者が自分で判断できる余白を残します。</li>
  <li><strong>同一テーマを並べる</strong>：同じ問いでも、AIごとに着目点が変わること自体を可視化します。</li>
  <li><strong>読み比べを前提に設計する</strong>：個別記事は単体でも読めますが、比較すると理解が深まる構造にしています。</li>
</ul>

<h2>はじめての方へ（おすすめの読み方）</h2>
<ol>
  <li>まずは興味のあるテーマの<strong>AI8社比較インデックス</strong>を開く</li>
  <li>気になるAIを2〜3本だけ読んで、違いを掴む</li>
  <li>「自分にはどの説明が刺さるか」をメモしてみる</li>
</ol>

<p>読み比べは、AIの比較であると同時に、<strong>自分の思考の癖を知る作業</strong>でもあります。必要に応じて、このページからAI別の一覧へ戻ってきてください。</p>


</div>

</div>
</div>
<?php get_template_part('partials/footer'); ?>
<?php wp_footer(); ?>
</body>
</html>