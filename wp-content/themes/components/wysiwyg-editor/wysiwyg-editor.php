<?php
$text = $args['text'];
$background = $args['background_color'];


if ($background == 'white') {
    $bgcolor = 'wysiwyg-editor--white';
} else if($background == 'light') {
    $bgcolor = 'wysiwyg-editor--light';
}
?>

<section class="wysiwyg-editor <?= $bgcolor ?>">
    <div class="container">
        <?php if ($text): ?>
            <div class="wysiwyg-editor__content"><?= $text ?></div>
        <?php endif; ?>
    </div>
</section>