<?php
$type = $args['type'] ?? '';
?>

<?php if ($type === 'h2'): ?>

<script>
// h2_2 用のコード
</script>

<?php elseif ($type === 'h3'): ?>

<script>
// h2_3 用のコード
</script>

<?php elseif ($type === 'related'): ?>

<script>
// h3 用のコード
</script>

<?php elseif ($type === 'next-prev'): ?>

<script>
// h3 用のコード
</script>

<?php endif; ?>