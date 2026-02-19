<?php

$title = $args['title'];
$text = $args['text'];
$image_1 = $args['image_1'];
$image_2 = $args['image_2'];
$number_1 = $args['number_1'];
$title_1 = $args['title_1'];
$text_1 = $args['text_1'];
$number_2 = $args['number_2'];
$title_2 = $args['title_2'];
$text_2 = $args['text_2'];
?>

<section class="poslovni_prostor">
    <div class="container">
        <div class="poslovni_prostor__text">
            <?php if ($title): ?>
                <div class="poslovni_prostor__title"><?= $title ?></div>
            <?php endif; ?>
            <?php if ($text): ?>
                <p class="poslovni_prostor__paragraph"><?= $text ?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="poslovni_prostor__images">
    <?php if ( $image_1 ): ?>
    <div class="poslovni_prostor__images-content-1">
        <div class="poslovni_prostor__images-content-1--text">
            <h3 class="poslovni_prostor__images-content-1--number h3"><?= $number_1 ?></h3>
            <h3 class="poslovni_prostor__images-content-1--title h3"><?= $title_1 ?></h3>
        </div>
        <div class="poslovni_prostor__images-content-1--text-2">
            <div class="poslovni_prostor__images-content-1--paragraph"><?= $text_1 ?></div>
        </div>
        <img class="poslovni_prostor__images-img-1"
             src="<?= $image_1['url'] ?>"
             alt="<?= $image_1['alt'] ?>">
        <div class="poslovni_prostor__images-content-1--gradient"></div>
    </div>
    <?php endif; ?>
        <?php if ( $image_2 ): ?>
        <div class="poslovni_prostor__images-content-2">
            <div class="poslovni_prostor__images-content-2--text">
                <h3 class="poslovni_prostor__images-content-2--number h3"><?= $number_2 ?></h3>
                <h3 class="poslovni_prostor__images-content-2--title h3"><?= $title_2 ?></h3>
            </div>
            <div class="poslovni_prostor__images-content-2--text-2">
                <div class="poslovni_prostor__images-content-2--paragraph"><?= $text_2 ?></div>
            </div>
            <img class="poslovni_prostor__images-img-2"
                 src="<?= $image_2['url'] ?>"
                 alt="<?= $image_2['alt'] ?>">
            <div class="poslovni_prostor__images-content-2--gradient"></div>
        </div>
        <?php endif; ?>
    </div>
</section>
