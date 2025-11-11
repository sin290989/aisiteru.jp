<div id="comments">
<div class="naka">
<?php if(have_comments()): ?>
<h2>コメント</h2>

<ul>
<?php wp_list_comments('callback=mydesign'); ?>
</ul>
<?php endif; ?>


<?php comment_form(); ?>
</div></div>