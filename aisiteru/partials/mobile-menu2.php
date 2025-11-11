<style type="text/css">
/* .menu-toggle に position: absolute を適用 */
.menu-toggle {
    position: fixed; /* 絶対位置指定 */
    top: 20px; /* 必要に応じて調整 */
    right: 15px; /* 必要に応じて調整 */
    width: 34px;
    height: 34px;
    z-index: 1500;
}

/* 新しい .menu-wrapper に position: relative を適用 */
.menu-wrapper {
    position: relative; /* 相対位置指定 */
    width: 34px;
    height: 34px;
    background-color: #1433d6; /* 背景色 */
    border-radius: 50%; /* 正円 */
    display: flex;
    flex-direction: column; /* 縦に線を並べる */
    justify-content: center; /* 線を垂直方向で中央揃え */
    align-items: center; /* 線を左右中央揃え */
    cursor: pointer;
}

/* 三本線のスタイル */
.menu-wrapper span {
    display: block;
    position: absolute; /* 全ての線を重ねる */
    width: 15px; /* 線の幅を統一 */
    height: 2px; /* 線の太さを統一 */
    background-color: #FFFFFF; /* 線の色 */
    border-radius: 1px; /* 少し丸みを付ける */
    transition: all 0.3s ease; /* スムーズなアニメーション */
}

/* 初期位置 */
.menu-wrapper span:nth-child(1) {
    transform: translateY(-6px); /* 上の線を上に配置 */
}

.menu-wrapper span:nth-child(2) {
    transform: translateY(0); /* 真ん中の線を中央に配置 */
}

.menu-wrapper span:nth-child(3) {
    transform: translateY(6px); /* 下の線を下に配置 */
}

/* アクティブ時（バツになる状態） */
.menu-wrapper.active span:nth-child(1) {
    transform: rotate(45deg); /* 45度回転 */
    width: 20px; /* バツの長さを統一 */
    height: 2px;
}

.menu-wrapper.active span:nth-child(2) {
    opacity: 0; /* 真ん中の線を透明化 */
}

.menu-wrapper.active span:nth-child(3) {
    transform: rotate(-45deg); /* -45度回転 */
    width: 20px; /* バツの長さを統一 */
    height: 2px;
}

.mobile-menu-bg{
    margin:0;
    background-color: #1433d6;
    height: 100vh;
    position: fixed; /* 絶対位置指定 */
    top: 1300px;
    width: 100%;
    z-index: 100;
    transition: all 0.6s ease; /* スムーズなアニメーション */
    }
@media only screen and (min-width: 680px) {

/* .menu-toggle に position: absolute を適用 */
.menu-toggle {
    top: 40px; /* 必要に応じて調整 */
    width: 40px;
    height: 40px;
}

/* 新しい .menu-wrapper に position: relative を適用 */
.menu-wrapper {
    width: 40px;
    height: 40px;
}

/* 三本線のスタイル */
.menu-wrapper span {
    width: 20px; /* 線の幅を統一 */
}

/* アクティブ時（バツになる状態） */
.menu-wrapper.active span:nth-child(1) {
    width: 24px; /* バツの長さを統一 */
    height: 3px;
}

.menu-wrapper.active span:nth-child(3) {
    width: 24px; /* バツの長さを統一 */
    height: 3px;
}
.mobile-menu-bg{
    left:0px;
    transition: all 0.5s ease; /* スムーズなアニメーション */
    }


.mobile-menu{
    position: fixed; /* 絶対位置指定 */
    margin: auto; 
    top:-500px;
    right: 0;
    left: 0;
    z-index: 101;
    transition: all 0.5s ease; /* スムーズなアニメーション */
    width: 1000px;
    opacity:0;
    background-color: #ffffff;
}
}
</style>

<script type="text/javascript">
$(document).ready(function () {
    const menuWrapper = $(".menu-wrapper");
    const mobileMenu = $(".mobile-menu");
    const mobileMenuBg = $(".mobile-menu-bg");
    let scrollPosition = 0;
    const elementsToHide = [
        "#header",       // ヘッダー
        "#pan",          // パンくずリスト
        "#wapper",       // ラッパー要素
        ".top-wapper",   // トップラッパー
        "#page-wapper",  // ページラッパー
        "#footer",       // フッター
        ".page-main-img", // メインイメージ
        ".main-visual"   // メインビジュアル
    ];

    menuWrapper.on("click", function () {
        if (!menuWrapper.hasClass("active")) {
            // メニューを開く
            menuWrapper.addClass("active");
            scrollPosition = $(window).scrollTop(); // 現在のスクロール位置を記録
            mobileMenuBg.css("top", "0px");
            mobileMenuBg.css("opacity", "1");
            mobileMenuBg.show();
            setTimeout(function(){
                mobileMenu.css("top", "150px");
                
            },300);
            setTimeout(function(){
                $(elementsToHide.join(", ")).hide();
                mobileMenu.css("opacity", 1);
            },400);
        } else {
            // メニューを閉じる
            menuWrapper.removeClass("active");
            /*mobileMenu.hide();*/
            mobileMenuBg.css("opacity", "0");
            mobileMenu.css("opacity", 0);
            $(elementsToHide.join(", ")).show();
            setTimeout(function(){
                mobileMenuBg.css("top", "1300px");
                mobileMenu.css("top", "-500px");
            },250);
            $(window).scrollTop(scrollPosition); // スクロール位置を復元
        }
    });
});
</script>

<div class="menu-toggle">
    <div class="menu-wrapper">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

<div class="mobile-menu-bg"></div>
<div class="mobile-menu">
    <ul>
        <li><a href="/">トップページ</a></li>
        <li><a href="/about">私たちのこと</a></li>
        <li><a href="/blog">ブログ</a></li>
        <li><a href="/contact">お問合せ</a></li>
        <li><a href="/privacy-policy">プライバシーポリシー</a></li>
    </ul>

<div class="outline">
<div class="">aisiteru</div>
<div class="">宮城県仙台市青葉区中央2-2-30 日興ビル4F</div>
<div class="">プライバシーポリシー</div>
<div class="">© aisiteru All rights reserved.</div>
</div>

</div>

