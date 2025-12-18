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
    margin: 50px auto 50px;
    padding: 0 20px;
}

.h-menu h2 {
    color: #fff;
    font-size: 15px;
    margin:15px 0 15px;
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

.h-menu a {
    color: #fff;
    font-weight: bold;
    letter-spacing: 1px;
    text-decoration: none;
    font-size:14px;
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
        height: 3px;
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

<div class="service-info">
    <div class="info-inner">
        <a href="https://hsbb.jp" target="_blank" rel="noopener">
            やっぱり甲子園ってスゴい！ 詳しくはこちら →
        </a>
    </div>
</div>

<div class="menu-bg"></div>

<nav class="h-menu" aria-label="グローバルメニュー">
    <div class="h-menu-inner">

        <h2>カテゴリ</h2>
        <ul>
            <li><a href="/category/prediction/">AI予測・時事</a></li>
            <li><a href="/category/regional/">地域・社会</a></li>
            <li><a href="/category/business/">ビジネス・キャリア</a></li>
            <li><a href="/category/culture/">創作・エンタメ</a></li>
            <li><a href="/category/life/">実用・ライフ</a></li>
            <li><a href="/category/technology/">技術・倫理</a></li>
            <li><a href="/category/history/">歴史・ミステリー</a></li>
        </ul>

        <h2>生成AI</h2>
        <ul>
            <li><a href="/editor/chatgpt/">ChatGPT</a></li>
            <li><a href="/editor/claude/">Claude</a></li>
            <li><a href="/editor/gemini/">Gemini</a></li>
            <li><a href="/editor/copilot/">Copilot</a></li>
            <li><a href="/editor/perplexity/">Perplexity</a></li>
            <li><a href="/editor/deepseek/">DeepSeek</a></li>
            <li><a href="/editor/lechat/">Le Chat</a></li>
            <li><a href="/editor/grok/">Grok</a></li>
        </ul>


        <ul>
        <li><a href="/">トップ</a></li>
        <li><a href="/about">AIシテル？について</a></li>
        <li><a href="/contact">お問合せ</a></li>
        <li><a href="/privacy-policy">プライバシーポリシー</a></li>
        <li><a href="/editorial-policy-ai-usage">編集方針・AI利用ポリシー</a></li>
        <li><a href="https://x.com/aisiterujp" target="_blank">X（@aisiterujp）</a></li>
        </ul>


    </div>
</nav>
