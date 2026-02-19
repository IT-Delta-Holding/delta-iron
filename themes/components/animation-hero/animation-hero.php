<?php

$title = $args['title'];
$text = $args['text'];
$box_background_1 = $args['box_background_1'];
$box_background_2 = $args['box_background_2'];
$box_background_3 = $args['box_background_3'];


?>

<section class="animation-hero">
    <div class="animation-hero__main">
        <div class="container">
            <div class="animation-hero__letters">
                <?php if ($box_background_1): ?>
                <div class="animation-hero__box-1">
                    <div class="animation-hero__box-1-bg" style="background-image: url(<?= $box_background_1['url'] ?>"></div>
                    <svg class="animation-hero__box-1-letter" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 372 385">
                        <defs>
                            <mask id="cutout-mask-1"  maskUnits="userSpaceOnUse">
                                <rect width="100%" height="100%" fill="white"/>
                                <path class="animation-hero__box-1--animated-path" d="M151.737 315.647C191.219 315.647 221.869 304.398 243.688 281.892C265.498 259.385 276.416 229.463 276.416 192.133C276.416 154.803 265.498 124.889 243.688 102.383C221.869 79.8681 191.219 68.619 151.737 68.619H93.761V315.647H151.737ZM0.25 0H151.737C195.375 0 233.91 8.15178 267.375 24.4311C300.823 40.7185 326.596 63.4109 344.671 92.5001C362.746 121.589 371.787 154.803 371.787 192.133C371.787 229.463 362.746 262.677 344.671 291.766C326.596 320.863 300.823 343.556 267.375 359.835C233.91 376.122 195.375 384.266 151.737 384.266H0.25V0Z" fill="black"/>
                            </mask>
                        </defs>
                        <rect width="372" height="385" fill="white" mask="url(#cutout-mask-1)"/>
                    </svg>
                </div>
                <?php endif; ?>
                <?php if ($box_background_2): ?>
                    <div class="animation-hero__box-2">
                        <div class="animation-hero__box-2-bg" style="background-image: url(<?= $box_background_2['url'] ?>"></div>
                        <svg class="animation-hero__box-2-letter" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 481 385">
                            <defs>
                                <mask id="cutout-mask-2" maskUnits="userSpaceOnUse">
                                    <rect width="100%" height="100%" fill="white"/>
                                    <path class="animation-hero__box-2--animated-path" d="M0.896484 0H123.707L244.641 282.159L361.831 0H482.151V384.258H393.007V126.806L279.545 384.258H203.494L90.0405 126.806V384.258H0.896484V0Z" fill="black"/>
                                </mask>
                            </defs>
                            <rect width="100%" height="100%" fill="white" mask="url(#cutout-mask-2)"/>
                        </svg>
                    </div>
                <?php endif; ?>

                <?php if ($box_background_3): ?>
                    <div class="animation-hero__box-3">
                        <div class="animation-hero__box-3-bg" style="background-image: url(<?= $box_background_3['url'] ?>"></div>
                        <svg class="animation-hero__box-3-letter" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 372 385">
                            <defs>
                                <mask id="cutout-mask-3">
                                    <rect width="100%" height="100%" fill="white"/>
                                    <path class="animation-hero__box-3--animated-path" d="M151.737 315.647C191.219 315.647 221.869 304.398 243.688 281.892C265.498 259.385 276.416 229.463 276.416 192.133C276.416 154.803 265.498 124.889 243.688 102.383C221.869 79.8681 191.219 68.619 151.737 68.619H93.761V315.647H151.737ZM0.25 0H151.737C195.375 0 233.91 8.15178 267.375 24.4311C300.823 40.7185 326.596 63.4109 344.671 92.5001C362.746 121.589 371.787 154.803 371.787 192.133C371.787 229.463 362.746 262.677 344.671 291.766C326.596 320.863 300.823 343.556 267.375 359.835C233.91 376.122 195.375 384.266 151.737 384.266H0.25V0Z" fill="black"/>
                                </mask>
                            </defs>
                            <rect width="100%" height="100%" fill="white" mask="url(#cutout-mask-3)"/>
                        </svg>
                    </div>
                <?php endif; ?>
            </div>

            <div class="animation-hero__content">
                <?php if ($title): ?>
                    <h1 class="animation-hero__heading"><?= $title ?></h1>
                <?php endif; ?>
                <div class="animation-hero__text">
                <?php if ($text): ?>
                    <?= $text ?>
                <?php endif; ?>
                </div>

            </div>

        </div>
    </div>
</section>
