<?php

$title = $args['title'];
$text = $args['text'];
$images = $args['images'];

?>
<section class="scroll-images">
    <div class="container">
        <div class="scroll-images__text">
            <?php if ($title): ?>
                <h2 class="scroll-images__title"><?= $title ?></h2>
            <?php endif; ?>
            <?php if ($text): ?>
                <p class="scroll-images__paragraph"><?= $text ?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="scroll-images__gallery">
        <div class="scroll-images__images">
            <?php if ($images): ?>
                <?php foreach ($images as $image): ?>
                    <img class="scroll-images__img"
                         src="<?= $image['slide_image']['url'] ?>"
                         alt="<?= $image['slide_image']['url'] ?>">
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>





    <div class="container">
        <div class="scroll-images__gallery--mobile js-slider-gallery swiper">
            <div class="swiper-wrapper scroll-images__wrapper">
                    <?php foreach ($images as $image): ?>
                    <div class="scroll-images__slide swiper-slide  js-slider-gallery-slide">
                                <img class="scroll-images__img"
                                     src="<?= $image['slide_image']['url'] ?>"
                                     alt="<?= $image['slide_image']['url'] ?>">
                    </div>
                    <?php endforeach; ?>
            </div>
        </div>

        <div class="scroll-images__navigation">
            <div class="swiper-button-prev js-swiper-gallery-prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 68 61"
                     fill="none">
                    <path d="M66 30.279L2 30.279L36.912 59L2 30.279L36.912 1.55794" stroke="#01284d"
                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="swiper-pagination-gallery">
            </div>
            <div class="swiper-button-next js-swiper-gallery-next">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 68 61"
                     fill="none">
                    <path d="M2 30.721L66 30.721L31.088 2L66 30.721L31.088 59.4421" stroke="#01284d"
                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>
    </div>
</section>



