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
<ul class="global-menu">
<li><a href="/editor">Editor</a></li>
<li><a href="/about">About</a></li>
</ul>
<?php get_template_part('partials/h-menu'); ?>
</div>
</div>