<style type="text/css">
    .mobile-menu-open{
        width: 30px;
        height: 30px;
        background-color: #031b4e;
        position: fixed;
        top:20px;
        right:20px;
        z-index: 100;
    }

    .mobile-menu-close{
        display: none;
        width: 30px;
        height: 30px;
        background-color: #46526f;
        position: fixed;
        top:20px;
        right:20px;
        z-index: 100;
    }

    .mobile-menu{
        display: none;
        margin-top: 70px;
        width:100%;
        border-top:1px solid #f7f8f8;
    }
    .mobile-menu ul {
        margin: 50px 20px 0 20px;
    }
    .mobile-menu ul li a{
        display:block;
        height: 50px;
        line-height:30px;
    }
    .outline{
        border-top:1px solid #f7f8f8;
        text-align: center;
        margin: 30px 20px 0 20px;
        padding: 30px 0 0 0;
    }
@media only screen and (min-width: 680px) {


    .mobile-menu{
        margin:0;
        background-color: #1433d6;
        height: 100vh;
    }


    
  
}
</style>
<script type="text/javascript">
$(function () {
let scrollPosition = 0; // スクロール位置を記録する変数
  // モバイルメニューを開く
  $(".mobile-menu-open").click(function () {
    scrollPosition = window.scrollY;
    $(".mobile-menu-close,.mobile-menu").show(); // 閉じるボタンを表示
    $(".mobile-menu-open").hide();  // 開くボタンを非表示
    $("#pan, #wapper,.top-wapper,#page-wapper,#footer,.page-main-img,.main-visual").hide(); // 他の要素を非表示

        if ($(window).width() >= 640) {
            executeForPC();
        }

        // 実行するPC専用の関数
        function executeForPC() {
            // PC専用の処理をここに書く
            $("#header").hide();

        }

  });

  // モバイルメニューを閉じる
  $(".mobile-menu-close").click(function () {
    $(".mobile-menu-close,.mobile-menu").hide(); // 閉じるボタンを非表示
    $(".mobile-menu-open").show();  // 開くボタンを表示
    $("#pan,#wapper,.top-wapper,#page-wapper,#footer,.page-main-img,.main-visual").show(); // 他の要素を表示
    window.scrollTo(0, scrollPosition);

    if ($(window).width() >= 640) {
        executeForPC();
    }

    // 実行するPC専用の関数
    function executeForPC() {
        // PC専用の処理をここに書く
        $("#header").show();
    }

  });
});


</script>

<div class="mobile-menu-open"></div>
<div class="mobile-menu-close"></div>

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