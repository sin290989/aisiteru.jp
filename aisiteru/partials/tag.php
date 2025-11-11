<h2 class="tagTitle">タグクラウド</h2>  
<ul class="tagcloud">
<?php
$term_list = get_terms('post_tag');
$result_list = [];
foreach ($term_list as $term) {
$u = (get_term_link( $term, 'post_tag' ));
echo "<li><a href='".$u."'>".$term->name."</a></li>";
}
?>
</ul>