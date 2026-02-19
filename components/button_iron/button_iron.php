<?php
/* primary white */
$color = $args['color'];
$link = $args['link'];
$icon = $args['icon'];
/* _blank _self */
$target = $args['target'];
$text = $args['text'];
/* big small */
$gap = $args['gap'];
/* start unset */
$align_self = $args['align_self'];

?>

<a class="button-iron button-iron-<?= $color ?> button-iron-<?= $gap ?> button-iron-<?= $align_self ?>" href="<?= $link ?>" target="<?= $target ?>"><?= $text ?>
    <?= $icon ?>
</a>