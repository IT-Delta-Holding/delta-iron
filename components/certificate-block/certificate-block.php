<?php

$image = $args['image'];
$title = $args['title'];
$text = $args['text'];

?>

<section class="certificate_block">
    <div class="container">
        <div class="certificate_block__content">
        <?php if ( $image ): ?>
            <img class="certificate_block__img"
                 src="<?= $image['url'] ?>"
                 alt="<?= $image['alt'] ?>">
        <?php endif; ?>
            <div class="certificate_block__text">
                <?php if ( $title ): ?>
                   <h3 class="certificate_block__title h3"><?= $title ?></h3>
                <?php endif; ?>
                <?php if ( $text ): ?>
                    <div class="certificate_block__paragraph"><?= $text ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
