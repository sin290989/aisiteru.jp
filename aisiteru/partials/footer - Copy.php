<style type="text/css">
.header {
        position: fixed;
        top:0;
        left: 0;
        width: 100%;
        height: 60px;
        z-index: 999;
        background-color: rgba(255, 255, 255, 0.9);
    }
    
    .header .inner {
        width: 100%;
        height: 60px;
        position: relative;
    }

     ul.gmenu{
        display: none;
    }
    
    .loginBtn{
        position: absolute;
        right: 25px;
        top:14px;
        width: 125px;
        height: 32px;
    }
    .loginBtn a{
        display: block;
        height: 32px;
        width: 125px;
        border-radius: 16px;
        border: 2px solid #222222;
        box-sizing: border-box;
        font-size: 12px;
        text-align: center;
        background-color: #FFFFFF;
        line-height: 29px;
        letter-spacing: 1px;
        font-weight: 700;
        transition: 0.2s;
    }
    
@media only screen and (min-width: 680px) {
    .header {
        z-index: 999;
    }
    
    /**/
    ul.gmenu{
        display: block;
        width: 650px;
        height: 21px;
        position:absolute;
        top: 20px;
        right:150px;
        font-size: 14px;
        letter-spacing: 1px;
    }
    ul.gmenu li a {
        position: relative;
        display: inline-block;
        text-decoration: none;
    }
    ul.gmenu li a::after {
      position: absolute;
      bottom: -6px;
      left: 0;
      content: '';
      width: 100%;
      height: 2px;
      background: #222222;
      transform: scale(0, 1);
      transform-origin: left top;
      transition: transform .5s;
    }
    ul.gmenu li a:hover::after {
      transform: scale(1, 1);
    }

    ul.gmenu li{
        float: left;
        line-height: 21px;
        /*border-left: 1px solid #222222;*/
    }
    
    ul.gmenu li a{
        display: block;
        padding: 0 0;
        margin: 0 10px;
        font-weight: 700;
    }
    
    ul.gmenu li:first-child{
        border-left: none;
    }
    
    ul.gmenu li:first-child a{
        margin: 0 18px 0 0;
        
    }
    
    ul.gmenu li:last-child a{
        margin: 0 0 0 18px;
    }

    .loginBtn a:hover{
        background-color: #222222;
        color: #FFFFFF;
    }
    
}
</style>

<div class="header">
<div class="inner">
<ul class="gmenu">
<?php
if($this->request->getParam('controller') == 'Top'){
    echo '<li><a href="#top">トップ</a></li>';
    echo '<li><a href="#about">充実の標準機能</a></li>';
    echo '<li><a href="#caseStudy">料⾦プラン</a></li>';
    echo '<li><a href="#merit">独自の強み</a></li>';
    echo '<li><a href="#fee">利用料金</a></li>';
    echo '<li><a href="/blog">ユーザー登録</a></li>';
}else{
    echo '<li><a href="https://aisiteru.jp/">トップ</a></li>';
    echo '<li><a href="https://aisiteru.jp#about">充実の標準機能</a></li>';
    echo '<li><a href="https://promontion.com/#caseStudy">料⾦プラン</a></li>';
    echo '<li><a href="https://promontion.com/#merit"></a></li>';
    echo '<li><a href="https://promontion.com/#fee">利用料金</a></li>';
    echo '<li><a href="https://promontion.com/blog">ブログ</a></li>';
}
?>
<div style="clear: both;"></div>
</ul>
<div class="loginBtn"><a href="/user/login">ログイン</a></div>
</div>
</div>