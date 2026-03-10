<style type="text/css">
/* ===============================
   ハンバーガーアイコン（スマホのみ）
=============================== */
.h-menu-icon {
    position: fixed;
    top: 15px;
    right: 15px;
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
   スマホ：左ドロワー（80%）
=============================== */
.h-menu {
    position: fixed;
    top: 0;
    left: 0;
    width: 80%;
    max-width: 360px;
    height: 100vh;
    background: #ffffff;
    z-index: 1100;
    transform: translateX(-100%);
    transition: transform 0.4s ease;
    overflow-y: auto;
}

body.is-menu-open .h-menu {
    transform: translateX(0);
}

body.is-menu-open {
    overflow: hidden;
}

/* ===============================
   共通内部構造
=============================== */
.h-menu-inner {
    padding: 20px 20px;
}

.h-menu ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.h-menu li {
    margin: 0;
}

/* ===============================
   見出し
=============================== */
.h-menu h2{
    font-weight: 600;
    margin:0 0 15px 0;
    padding-bottom:0px;
    font-size: 13px;
}

/* ===============================
   リンクブロック
=============================== */

.cat-area{
    margin: 0;
    padding: 15px 0;
    border-top:1px solid #EEEEEE;
    border-bottom:1px solid #EEEEEE;
}
.ai-area{
    padding: 15px 0;
    border-bottom:1px solid #EEEEEE;
}
.h-menu ul.cat-link,
.h-menu ul.ai-link{
    margin: 0 5px 0 5px;
    padding: 0;
    overflow: hidden;
    background: transparent;   /* ← 背景なし */
    font-size: 12px;
}


.h-menu ul.cat-link li a,
.h-menu ul.ai-link li a{
    text-decoration:none;
    display:block;
    height:32px;          /* ← かなり詰める */
    line-height:32px;  /* ← 行間を揃える */
    padding-left:0;
    box-sizing: border-box;


}
.h-menu ul.ai-link li,
.h-menu ul.cat-link li{
    width: 50%;
    float:left;
}

/* ===============================
   その他リンク
=============================== */
ul.other-link{
    margin: 0 0 20px 0;
    font-size: 12px;
}

ul.other-link a{
    text-decoration:none;
    display:block;
    padding:0 0;       /* 少し詰める */
}
ul.other-link-bottom{
    margin: 20px 0 20px 0;
    font-size: 11px;
}

ul.other-link-bottom a{
    text-decoration:none;
    display:block;
    padding:0;
}

ul.other-link-bottom a:hover{

}



/* ===============================
   カテゴリ開閉用
=============================== */
/* スムーズ開閉（カテゴリ＆AI共通） */
.h-menu ul.cat-link,
.h-menu ul.ai-link {
    overflow: hidden;
    max-height: 1000px;
    transition: max-height 0.35s ease;
}

.h-menu ul.cat-link.is-closed,
.h-menu ul.ai-link.is-closed {
    max-height: 0;
}

.h-menu ul.cat-link.is-closed {
    max-height: 0;
}


.h-menu h2.catTitle {
    cursor: pointer;
    position: relative;
}

/* 簡易インジケーター（＋/−風） */
.h-menu h2.catTitle::after {
    content: "−";
    position: absolute;
    right: 20px;
    font-size: 14px;

}

.h-menu h2.catTitle.is-closed::after {
    content: "+";
}


.h-menu h2.aiTitle {
    cursor: pointer;
    position: relative;
}

.h-menu h2.aiTitle::after {
    content: "−";
    position: absolute;
    right: 20px;
    font-size: 14px;

}

.h-menu h2.aiTitle.is-closed::after {
    content: "+";
}



/* ===============================
   PC：左250px固定サイドナビ
=============================== */
@media (min-width: 680px) {

    .h-menu-icon {
        display: none;
    }

    .h-menu {
        position: fixed;
        top: 0;
        left: 0;
        width: 280px;           /* ← 250pxに変更 */
        height: 100vh;
        transform: none;
        background: #ffffff;
        overflow-y: auto;
    }

    body.is-menu-open {
        overflow: auto;
    }

    body {
        margin-left: 240px;     /* ← 250pxに変更 */
    }
}



/* ===============================
   スクロールバー 4px（極細）
=============================== */

/* Chrome / Edge / Safari */
.h-menu::-webkit-scrollbar {
    width: 4px;
}

.h-menu::-webkit-scrollbar-track {
    background: transparent;
}

.h-menu::-webkit-scrollbar-thumb {
    background: transparent; /* ← 通常透明 */
    border-radius: 10px;
    transition: background 0.2s ease;
}

/* ホバー時だけ表示 */
.h-menu:hover::-webkit-scrollbar-thumb {
    background: rgba(20, 51, 214, 0.35);
}

.h-menu:hover::-webkit-scrollbar-thumb:hover {
    background: #1433d6;
}



/* 共通アイコン設定 */
.h-menu .cat-link span {
    padding-left: 25px;
    background-repeat: no-repeat;
    background-position: left center;
    background-size: 18px 18px;
    display: inline-block;
}

/* 各カテゴリ */
.icon-politics {
    background-image: url("/wp/wp-content/themes/aisiteru/images/icon/category/politics_b.webp");
}

.icon-economy {
    background-image: url("/wp/wp-content/themes/aisiteru/images/icon/category/economy_b.webp");
}

.icon-work {
    background-image: url("/wp/wp-content/themes/aisiteru/images/icon/category/work_b.webp");
}

.icon-education {
    background-image: url("/wp/wp-content/themes/aisiteru/images/icon/category/education_b.webp");
}

.icon-culture {
    background-image: url("/wp/wp-content/themes/aisiteru/images/icon/category/culture_b.webp");
}

.icon-history {
    background-image: url("/wp/wp-content/themes/aisiteru/images/icon/category/history_b.webp");
}

.icon-regional {
    background-image: url("/wp/wp-content/themes/aisiteru/images/icon/category/regional_b.webp");
}

.icon-technology {
    background-image: url("/wp/wp-content/themes/aisiteru/images/icon/category/technology2_b.webp");
}

/* 社会アイコン 18px */
.h-menu .icon-society {
    background-image: url("/wp/wp-content/themes/aisiteru/images/icon/category/society2_b.webp");
}

/* AIアイコン共通 */
.h-menu .ai-link span {
    padding-left: 25px;
    background-repeat: no-repeat;
    background-position: left center;
    background-size: 18px 18px;
    display: inline-block;
}
.chatgpt {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/openai.webp");
}
.gemini {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/gemini.webp");
}
.copilot {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/copilot.webp");
}
.grok {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/grok.webp");
}
.claude {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/claude.webp");
}
.perplexity {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/perplexity.webp");
}
.deepseek {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/deepseek.webp");
}
.lechat {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/mistral.webp");
}

.h-menu span.prediction{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/category/prediction_b.webp");
}
.h-menu span.sports{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/category/sports_b.webp");
}
.h-menu span.business{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/category/business_b.webp");
}
.h-menu span.life {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/category/life_b.webp");
}



/* ===============================
   メニュー用 半透明レイヤー（スマホのみ）
=============================== */
@media (max-width: 679px) {

    .menu-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1050; /* h-menu(1100)より下 */
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease;
    }

    body.is-menu-open .menu-overlay {
        opacity: 1;
        visibility: visible;
    }

}


li.cluster-link a{
    display: block;
    width: 100%;
    height: 60px;
    border-radius:10px;
    background-color: #f7f8f8;
    line-height: 60px;
    text-align: center;
    margin-top:30px;
    font-size: 15px;
    font-weight: 700;
    color:var(--color-primary);
}
</style>




<script>
$(function () {

    const $icon = $('.icon-wrapper');
    const $body = $('body');
    const $serviceInfo = $('.service-info');
    const $fixedFooter = $('.fixed-footer');

    function openMenu() {
        $icon.addClass('active');
        $body.addClass('is-menu-open');
        $serviceInfo.css({ transform: 'translateY(-100%)' });
        $fixedFooter.removeClass('is-visible');
    }

    function closeMenu() {
        $icon.removeClass('active');
        $body.removeClass('is-menu-open');
        $serviceInfo.css({ transform: 'translateY(0)' });
        $fixedFooter.addClass('is-visible');
    }

    $icon.on('click', function () {
        if ($body.hasClass('is-menu-open')) {
            closeMenu();
        } else {
            openMenu();
        }
    });

    /* 右20%クリックで閉じる */
    $(document).on('click', function(e){
        if (
            $('body').hasClass('is-menu-open') &&
            !$(e.target).closest('.h-menu, .icon-wrapper').length
        ){
            closeMenu();
        }
    });

/* ===== カテゴリ開閉 ===== */
$('.catTitle').on('click', function(){

    const $title = $(this);
    const $list = $title.next('.cat-link');

    $list.toggleClass('is-closed');
    $title.toggleClass('is-closed');

});


$('.aiTitle').on('click', function(){

    const $title = $(this);
    const $list = $title.next('.ai-link');

    $list.toggleClass('is-closed');
    $title.toggleClass('is-closed');

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

<nav class="h-menu" aria-label="グローバルメニュー">
<div class="h-menu-inner">

<ul class="other-link">
<li><a href="/about">AIシテル？について</a></li>
<li class="cluster-link"><a href="/cluster">クラスタ索引</a></li>
</ul>

<div class="cat-area">
<h2 class="catTitle">CATEGORY</h2>
<ul class="cat-link">
<li><a href="/category/society/"><span class="icon-society">社会</span></a></li>
<li><a href="/category/politics/"><span class="icon-politics">政治</span></a></li>
<li><a href="/category/economy/"><span class="icon-economy">経済</span></a></li>
<li><a href="/category/work/"><span class="icon-work">仕事</span></a></li>
<li><a href="/category/education/"><span class="icon-education">教育</span></a></li>
<li><a href="/category/culture/"><span class="icon-culture">文化</span></a></li>
<li><a href="/category/history/"><span class="icon-history">歴史</span></a></li>
<li><a href="/category/regional/"><span class="icon-regional">地域</span></a></li>
<li><a href="/category/technology/"><span class="icon-technology">技術</span></a></li>
<!--<li><a href="/category/prediction/"><span class="prediction">時事</span></a></li>
<li><a href="/category/sports/"><span class="sports">スポーツ</span></a></li>
<li><a href="/category/business/"><span class="business">ビジネス</span></a></li>
<li><a href="/category/life/"><span class="life">ライフ</span></a></li>-->
<div style="clear:both;"></div>
</ul>
</div>

<div class="ai-area">
<h2 class="aiTitle">8AI</h2>
<ul class="ai-link">
<li><a href="/editor/chatgpt/"><span class="chatgpt">ChatGPT</span></a></li>
<li><a href="/editor/gemini/"><span class="gemini">Gemini</span></a></li>
<li><a href="/editor/copilot/"><span class="copilot">Copilot</span></a></li>
<li><a href="/editor/grok/"><span class="grok">Grok</span></a></li>
<li><a href="/editor/claude/"><span class="claude">Claude</span></a></li>
<li><a href="/editor/perplexity/"><span class="perplexity">Perplexity</span></a></li>
<li><a href="/editor/deepseek/"><span class="deepseek">DeepSeek</span></a></li>
<li><a href="/editor/lechat/"><span class="lechat">LeChat</span></a></li>
<div style="clear:both;"></div>
</ul>
</div>


<ul class="other-link-bottom">
<li><a href="/editorial-policy-ai-usage">編集方針・AI利用ポリシー</a></li>
<li><a href="/privacy-policy">プライバシーポリシー</a></li>
<li><a href="/contact">お問合せ</a></li>
<li><a href="https://x.com/aisiterujp" target="_blank">X（@aisiterujp）</a></li>
</ul>

</div>
</nav>
<div class="menu-overlay"></div>