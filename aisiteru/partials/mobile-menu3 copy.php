<style type="text/css">


/*------------------------------------------------------------------------*/
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
    height: 5px;
    position: fixed; /* 絶対位置指定 */
    top: 0;
    width: 100%;
    z-index: 100;
    transition: all 0.6s ease; /* スムーズなアニメーション */
    }
    .service-info{
        display: none;
    }

    /**/
    .mobile-menu{
    position: fixed; /* 絶対位置指定 */
    margin: auto; 
    top:-1000px;
    right: 0;
    left: 0;
    z-index: 101;
    transition: all 0.5s ease; /* スムーズなアニメーション */
    width: 100%;
    opacity:0;
}
.mobile-menu-inner{
    position: relative;
    width: 100%;
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
    height: 30px;
    transition: all 0.5s ease; /* スムーズなアニメーション */
    }

.mobile-menu{
    position: fixed; /* 絶対位置指定 */
    margin: auto; 
    top:-1000px;
    right: 0;
    left: 0;
    z-index: 101;
    transition: all 0.5s ease; /* スムーズなアニメーション */
    width: 1000px;
    opacity:0;
}
.mobile-menu-inner{
    position: relative;
    width: 1000px;
}
.mobile-menu-inner > ul{
    width: 400px;
    position: absolute;
    right:0;
    top:0;
}

.mobile-menu-inner > ul li{
    margin:0 0 20px 0;
}
.mobile-menu-inner > ul a{
    font-family: '游明朝','Yu Mincho',YuMincho,'Hiragino Mincho Pro',serif;
    font-size:32px;
    line-height: 32px;
    color:#FFFFFF;
    font-weight: bold;
    letter-spacing: 2px;;
}
.mobile-menu-inner > ul div{
    font-size:14px;
    color:#FFFFFF;
}
.service-info{
        display: block;
        position: fixed;
        top:0;
        width: 100%;
        height: 30px;
        line-height: 30px;
        font-size: 11px;
        z-index: 101;
        transition: all 0.5s ease; /* スムーズなアニメーション */
    }
    .service-info .inner {
        width: 1100px;
        margin: 0 auto;
        height: 30px;
        padding:0;
    }
    .service-info a{
        color: #FFFFFF;
    }

    .mobile-menu-outline{
        color: #FFFFFF;
        position: absolute;
        top:100px;
        left:100px;
    }

    .mobile-menu-outline-logo{
        font-size: 54px;
        line-height: 54px;
        font-weight: bold;
        margin: 0 0 40px 0;

    }
    .mobile-menu-outline-address{
        font-size: 14px;
        line-height: 14px;
        margin: 0 0 15px 0;
    }

    .mobile-menu-outline-mail{
        font-size: 14px;
        line-height: 14px;
        margin: 0 0 20px 0;
    }

    .mobile-menu-miyagi-map{
        position: absolute;
        width: 900px;
        height: 735px;
        top: -90px;
        left:auto;
        left: -130px;
        z-index: -3;
        opacity: 1;
    }
    .mobile-menu-miyagi-map img {
        width: 900px;
        height: 735px;
        vertical-align: bottom;
    }

}
</style>

<script type="text/javascript">
$(document).ready(function () {
    const menuWrapper = $(".menu-wrapper");
    const mobileMenu = $(".mobile-menu");
    const mobileMenuBg = $(".mobile-menu-bg");
    const serviceInfo = $(".service-info");
    let scrollPosition = 0;
    let bgHeight;
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
    if ($(window).width() >= 640) {
        bgHeight = "30px";
    }else{
        bgHeight = "5px";
    }
    menuWrapper.on("click", function () {
        if (!menuWrapper.hasClass("active")) {
            // メニューを開く
            menuWrapper.addClass("active");
            scrollPosition = $(window).scrollTop(); // 現在のスクロール位置を記録
            mobileMenuBg.css("height", "100vh");
            serviceInfo.css("top", "-50px");
            mobileMenu.css("transition", "all 0s ease");
            mobileMenu.css("top", "150px");
            setTimeout(function(){
                $(elementsToHide.join(", ")).hide();
                mobileMenu.css("transition", "all 0.3s ease");
            },250);
            setTimeout(function(){
                $(elementsToHide.join(", ")).hide();
                
                mobileMenu.css("opacity", 1);
            },300);
        } else {
            // メニューを閉じる
            menuWrapper.removeClass("active");
            /*mobileMenu.hide();*/
            mobileMenuBg.css("height", bgHeight);
            mobileMenu.css("opacity", 0);
            serviceInfo.css("top", "0px");
            $(elementsToHide.join(", ")).show();
            setTimeout(function(){
                mobileMenu.css("top", "-1000px");
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

<div class="service-info">
<div class="inner"><a href="https://hsbb.jp" target="_blank">やっぱり甲子園ってスゴい！ 詳しくはこちら　→</a></div>
</div>

<div class="mobile-menu-bg"></div>

<div class="mobile-menu">
<div class="mobile-menu-inner">
    <ul>
        <li><a href="/">HOME</a><div>トップページ</div></li>
        <li><a href="/about">ABOUT</a><div>私たちのこと</div></li>
        <li><a href="/blog">BLOG</a><div>ブログ</div></li>
        <li><a href="/contact">CONTACT</a><div>お問合せ</div></li>
        <li><a href="/privacy-policy">PRIVACY</a><div>プライバシー</div></li>
    </ul>

<div class="mobile-menu-outline">
<div class="mobile-menu-outline-logo">aisiteru</div>
<div class="mobile-menu-outline-address">宮城県仙台市青葉区中央2-2-30 日興ビル4F</div>
<div class="mobile-menu-outline-mail">info@aisiteru.jp</div>
</div>

<div class="mobile-menu-miyagi-map"><img src="/wp/wp-content/themes/aisiteru/images/top/miyagi-map10-2.webp" alt="宮城県の地図"></div>

</div>
</div>
