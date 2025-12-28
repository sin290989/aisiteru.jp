<style type="text/css">
/* ===============================
   ハンバーガーアイコン
=============================== */
.h-menu-icon {
    position: fixed;
    top: 15px;
    right: 15px;
    left: auto !important;
    transform: none;
    width: 34px;
    height: 34px;
    z-index: 2000;
}

.icon-wrapper {
    position: relative;
    width: 34px;
    height: 34px;
    background-color: #1433d6;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}

.icon-wrapper span {
    position: absolute;
    width: 15px;
    height: 2px;
    background: #fff;
    border-radius: 1px;
    transition: transform 0.3s ease, opacity 0.3s ease;
}

.icon-wrapper span:nth-child(1) { transform: translateY(-6px); }
.icon-wrapper span:nth-child(2) { transform: translateY(0); }
.icon-wrapper span:nth-child(3) { transform: translateY(6px); }

.icon-wrapper.active span:nth-child(1) {
    transform: rotate(45deg);
    width: 20px;
}
.icon-wrapper.active span:nth-child(2) {
    opacity: 0;
}
.icon-wrapper.active span:nth-child(3) {
    transform: rotate(-45deg);
    width: 20px;
}

/* ===============================
   背景オーバーレイ
=============================== */
.menu-bg {
    position: fixed;
    inset: 0;
    background: #1433d6;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.4s ease;
    z-index: 1000;
}

body.is-menu-open .menu-bg {
    opacity: 1;
    pointer-events: auto;
}

/* ===============================
   メニュー本体
=============================== */
.h-menu {
    position: fixed;
    inset: 0;
    z-index: 1100;
    opacity: 0;
    transform: translateY(-20px);
    pointer-events: none;
    transition: opacity 0.4s ease, transform 0.4s ease;
    overflow-y: auto;
}

body.is-menu-open .h-menu {
    opacity: 1;
    transform: translateY(0);
    pointer-events: auto;
}

.h-menu-inner {
    max-width: 1000px;
    margin: 20px auto 20px;
    padding: 0;
}


.h-menu ul {
    list-style: none;
    margin: 0;
    padding: 0;
    font-size:14px;
}

.h-menu li {
    margin-bottom: 5px;
}



/* ===============================
   スクロールロック
=============================== */
body.is-menu-open {
    overflow: hidden;
}

/* ===============================
   service-info（PCのみ）
=============================== */
.service-info {
    display: none;
}

@media (min-width: 680px) {
    .h-menu-icon {
        position: absolute;
        width: 40px;
        height: 40px;
        top: 10px;
        right: 15px;
        left: auto !important;
    }

    .icon-wrapper {
        width: 40px;
        height: 40px;
    }

    .icon-wrapper span {
        width: 20px;
        height: 2px;
    }

    .icon-wrapper span:nth-child(1) { transform: translateY(-7px); }
    .icon-wrapper span:nth-child(3) { transform: translateY(7px); }

    .icon-wrapper.active span:nth-child(1),
    .icon-wrapper.active span:nth-child(3) {
        width: 24px;
    }

    .service-info {
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 30px;
        line-height: 30px;
        font-size: 11px;
        z-index: 1200;
        color: #fff;
         background-color: #1433d6;
         background-color: #ffffff;
    }

    .service-info .info-inner {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .service-info a {
        color: #fff;
        text-decoration: none;
    }

    .h-menu-inner{
        position: relative;
    }
}




.h-menu ul.cat-link li a,
.h-menu ul.ai-link li a{
    font-family: 'Noto Sans JP', sans-serif;
    font-weight: 600;
    font-style: normal; 
}
.h-menu h2.catTitle::before,
.h-menu h2.aiTitle::before{
    font-family: 'Noto Sans JP', sans-serif;
    font-weight: 900;
    font-style: normal; 
}  

.h-menu h2{
	padding:0;
	font-weight:bold;
	margin-bottom:4px;
	margin-top:30px;
    border-radius: 3px;
    font-size: 12px;
    color:#FFFFFF;
}

.h-menu h2.catTitle::before,
.h-menu h2.aiTitle::before{
    white-space: pre;
    font-size: 24px;
    margin-right:15px;
    margin-left:30px;
    letter-spacing: 1px;
    color: #fff;
}
  
.h-menu h2.catTitle::before{
    content: 'CATEGORY'; 
}
.h-menu h2.aiTitle::before{
    content: 'AI';
}
.h-menu h2.catTitle{
    margin-top:75px;
}
.h-menu h2.aiTitle{
    margin-top:40px;
}
.h-menu ul.cat-link,
.h-menu ul.ai-link{
    margin: 0 20px;
    border-radius: 5px;
    overflow: hidden;
    background-color: #FFFFFF;
}
.h-menu ul.cat-link li a,
.h-menu ul.ai-link li a{
	text-decoration:none;
	background-image:url(/wp/wp-content/themes/aisiteru/images/icon/arrow.png);
	background-position:right 20px center;
	background-size:auto 9px;
	background-repeat:no-repeat;
	display:block;
	height:42px;
	line-height:42px;
	font-size:14px;
	padding-left:15px;
    transition-duration: 0.3s;
    box-sizing: border-box;
}

.h-menu ul.cat-link li ul li a,
.h-menu ul.ai-link li ul li a{
    padding-left:50px;
    font-size: 14px;
    height:42px;
	line-height:42px;
    border-bottom:solid 1px #f7f8f8;
    border-top:none;
    box-sizing: border-box;
    display: block;
    
}

.h-menu ul.cat-link li,
.h-menu ul.ai-link li{
    border-bottom:solid 1px #f7f8f8;
    box-sizing: border-box;
    margin: 0;
}

.h-menu ul.cat-link li:last-child,
.h-menu ul.ai-link li:last-child{
    border:none;
}


.h-menu span.chatgpt,
.h-menu span.gemini,
.h-menu span.copilot,
.h-menu span.claude,
.h-menu span.lechat,
.h-menu span.deepseek,
.h-menu span.perplexity,
.h-menu span.grok {
    padding-left: 30px;
background-position: left center;
  background-repeat: no-repeat;
  background-size: 20px auto;
}

.h-menu span.chatgpt{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/openai.webp");
}
.h-menu span.gemini{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/gemini.webp");
}
.h-menu span.copilot{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/copilot.webp");
}
.h-menu span.claude{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/claude.webp");
}
.h-menu span.lechat {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/mistral.webp");
}
.h-menu span.deepseek {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/deepseek.webp");
}
.h-menu span.perplexity {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/perplexity.webp");
}
.h-menu span.grok {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/grok.webp");
}



.h-menu span.prediction,
.h-menu span.regional,
.h-menu span.sports,
.h-menu span.business,
.h-menu span.culture,
.h-menu span.life,
.h-menu span.technology,
.h-menu span.history {
    padding-left: 30px;
background-position: left center;
  background-repeat: no-repeat;
  background-size: 20px auto;
}

.h-menu span.prediction{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/category/prediction_b.webp");
}
.h-menu span.regional{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/category/regional_b.webp");
}
.h-menu span.sports{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/category/sports_b.webp");
}
.h-menu span.business{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/category/business_b.webp");
}
.h-menu span.culture {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/category/culture_b.webp");
}
.h-menu span.life {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/category/life_b.webp");
}
.h-menu span.technology {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/category/technology_b.webp");
}
.h-menu span.history {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/category/history_b.webp");
}


ul.other-link{
    margin: 40px 30px 100px 30px;
}
ul.other-link a{
    color:#ffffff;
    font-weight: 600;
}
@media (min-width: 680px) {
.h-menu ul.cat-link,
.h-menu ul.ai-link{

    width: 300px;
}
.h-menu h2.catTitle{
    margin-top: 0;
    display: block;
    width: 300px;
    height: 50px;
    position: absolute;
    top:100px;
    left:10px;
}
.h-menu ul.cat-link{
    position: absolute;
    top:130px;
    left:10px;
}
.h-menu h2.aiTitle{
    margin-top: 0;
    display: block;
    width: 300px;
    height: 50px;
    position: absolute;
    top:100px;
    left:380px;
}
.h-menu ul.ai-link{
    position: absolute;
    top:130px;
    left:380px;
}
.h-menu .other-link{
    position: absolute;
    top:110px;
    left:750px;
}
}







</style>

<script>
$(function () {
    const $icon = $('.icon-wrapper');
    const $body = $('body');
    const $menuBg = $('.menu-bg');
    const $serviceInfo = $('.service-info');
    const $fixedFooter = $('.fixed-footer');

    function openMenu() {
        $icon.addClass('active');
        $body.addClass('is-menu-open');

        // service-info：上にスライドして枠外へ（フェードなし）
        $serviceInfo.css({
            transform: 'translateY(-100%)'
        });

        // fixed-footer：下にスライドして非表示
        $fixedFooter.removeClass('is-visible');
    }

    function closeMenu() {
        $icon.removeClass('active');
        $body.removeClass('is-menu-open');

        // service-info：元の位置へ戻す
        $serviceInfo.css({
            transform: 'translateY(0)'
        });

        // fixed-footer：再表示
        $fixedFooter.addClass('is-visible');
    }

    $icon.on('click', function () {
        if ($body.hasClass('is-menu-open')) {
            closeMenu();
        } else {
            openMenu();
        }
    });

    $menuBg.on('click', function () {
        closeMenu();
    });
});
</script>



<div class="h-menu-icon">
    <div class="icon-wrapper">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

<!--<div class="service-info">
    <div class="info-inner">
        <a href="https://hsbb.jp" target="_blank" rel="noopener">
            やっぱり甲子園ってスゴい！ 詳しくはこちら →
        </a>
    </div>
</div>-->

<div class="menu-bg"></div>

<nav class="h-menu" aria-label="グローバルメニュー">
    <div class="h-menu-inner">

        <h2 class="catTitle">カテゴリ</h2>
        <ul class="cat-link">
            <li><a href="/category/prediction/"><span class="prediction">AI予測・時事</span></a></li>
            <li><a href="/category/regional/"><span class="regional">地域・社会</span></a></li>
            <li><a href="/category/sports/"><span class="sports">スポーツ・格闘技</span></a></li>
            <li><a href="/category/business/"><span class="business">ビジネス・キャリア</span></a></li>
            <li><a href="/category/culture/"><span class="culture">創作・エンタメ</span></a></li>
            <li><a href="/category/life/"><span class="life">実用・ライフ</span></a></li>
            <li><a href="/category/technology/"><span class="technology">技術・倫理</span></a></li>
            <li><a href="/category/history/"><span class="history">歴史・ミステリー</span></a></li>
        </ul>

        <h2 class="aiTitle">生成AI</h2>
        <ul class="ai-link">
            <li><a href="/editor/chatgpt/"><span class="chatgpt">ChatGPT</span></a></li>
            <li><a href="/editor/gemini/"><span class="gemini">Gemini</span></a></li>
            <li><a href="/editor/copilot/"><span class="copilot">Copilot</span></a></li>
            <li><a href="/editor/grok/"><span class="grok">Grok</span></a></li>
            <li><a href="/editor/claude/"><span class="claude">Claude</span></a></li>
            <li><a href="/editor/perplexity/"><span class="perplexity">Perplexity</span></a></li>
            <li><a href="/editor/deepseek/"><span class="deepseek">DeepSeek</span></a></li>
            <li><a href="/editor/lechat/"><span class="lechat">LeChat</span></a></li>
        </ul>


        <ul class="other-link">
        <li><a href="/about">AIシテル？について</a></li>
        <li><a href="/editorial-policy-ai-usage">編集方針・AI利用ポリシー</a></li>
        <li><a href="/privacy-policy">プライバシーポリシー</a></li>
        <li><a href="/contact">お問合せ</a></li>
        <li><a href="https://x.com/aisiterujp" target="_blank">X（@aisiterujp）</a></li>
        </ul>


    </div>
</nav>
