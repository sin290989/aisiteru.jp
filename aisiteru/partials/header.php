<style type="text/css">
#header{
        height:70px;
        width: 100%;
        position: fixed;
        top:0;
        z-index: 99;
        background:rgba(255,255,255,0.95);
        transition-duration: 0.3s;
    }
    #header .inner {
        width: 100%;
        height:70px;
        position: relative;
        margin: 0 auto;
    }
    .logo{
        position: absolute;
        top: 25px;
        left:22px;
        font-size: 24px;
        font-weight: bold;
    }
    #header .message-sp{
        position: absolute;
        top: 28px;
        left:136px;
        font-size:12px;
        font-weight: bold;
        color: #1433d6;

    }
    #header .message,
    ul.global-menu{
        display: none;
    }
@media only screen and (min-width: 680px) {
    #header{
        height:60px;
        top:30px;
    }
    #header .inner{
        width: 1100px;
        height:60px;
    }
    .logo{
        top: 15px;
        left:0;
    }
    #header .message{
        display: block;
        position: absolute;
        top: 18px;
        left:145px;
        font-size:12px;
        font-weight: bold;
        color: #1433d6;
    }
    #header .message-sp{
        display: none;
    }
    ul.global-menu{
        display: block;
        position: absolute;
        top: 20px;
        right:50px;
        width: 450px;
        font-weight: bold;
    }
    ul.global-menu li{
        display:inline;
        margin-right: 30px;
    }
    ul.global-menu li:last-child{
        margin-right: 0;
    }
  
}
</style>
<script type="text/javascript">
$(function () {
    $(window).scroll(function(){
        if( $(window).scrollTop() > 80 ){
            $('#header').css('box-shadow','0px 3px 3px -1px rgba(0,0,0,0.31)');
        } else if( $(window).scrollTop() < 20 ){
            $('#header').css('box-shadow','0px 0px 0px 0px rgba(0,0,0,0.31)');
        }
    });  
    });
</script>
<div id="top"></div>
<div id="header">
<div class="inner">
<div class="logo"><a href="/">AIシテル？</a></div>
<div class="message"><?php echo esc_html( get_bloginfo( 'description', 'display' ) ); ?></div>
<div class="message-sp">[イーストアセンド]</div>
<ul class="global-menu">
<li><a href="/about">About</a></li>
<li><a href="/basic">Editor</a></li>
<li><a href="/contact">Contact</a></li>
</ul>
<?php get_template_part('partials/h-menu'); ?>
</div>
</div>