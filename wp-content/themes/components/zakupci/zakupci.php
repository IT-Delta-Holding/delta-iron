<?php

$background_image = $args['background_image'];
$title = $args['title'];
$zakupci = $args['zakupci'];

?>

<section class="zakupci">
    <?php if ($background_image): ?>
        <img class="zakupci__bg"
             src="<?= $background_image['url'] ?>"
             alt="<?= $background_image['alt'] ?>">
    <?php endif; ?>
    <div class="container">
        <?php if ($title): ?>
        <h3 class="zakupci__title h3"><?= $title ?></h3>
        <?php endif; ?>
    </div>


    <?php if ($zakupci): ?>
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                <?php foreach ($zakupci as $zakupac): ?>
                    <li class="splide__slide">
                        <img class="zakupci__slider-img"
                             src="<?= $zakupac['image']['url'] ?>"
                             alt="<?= $zakupac['image']['alt'] ?>">
                    </li>
                <?php endforeach; ?>
                </ul>
            </div>
            <div class="splide__arrows">
                <svg class="splide__arrow splide__arrow--prev" width="18" height="32" viewBox="0 0 18 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.5129 31.0258L0 15.5129L15.5129 0L17.1038 1.5975L3.16667 15.5129L17.1038 29.4283L15.5129 31.0258Z" fill="#01284D"/>
                </svg>
                <div class="splide__pagination"></div>
                <svg class="splide__arrow splide__arrow--next" width="18" height="32" viewBox="0 0 18 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.69411 31.0258L17.207 15.5129L1.69411 0L0.103281 1.5975L14.0404 15.5129L0.103281 29.4283L1.69411 31.0258Z" fill="#01284D"/>
                </svg>
            </div>
        </div>
    <?php endif; ?>

</section>
