<?php if ( !wp_is_mobile() ) : ?>
<script type="text/javascript">
$(function () {
$('ul.post-index li').hover(function(){
//$("h2",this).css('color','#05730a');
$(".post_thumbnail img",this).css('transform','scale(1.1)');
}, function(){
//$("h2",this).css('color','#12dca3');
$(".post_thumbnail img",this).css('transform','scale(1)');
});
});
</script>
<?php endif; ?>