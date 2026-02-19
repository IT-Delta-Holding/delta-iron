<?php

$title = $args['title'];
$text = $args['text'];
$link= $args['link'];
$image_1= $args['image_1'];
$image_2= $args['image_2'];
$image_number_1= $args['image_number_1'];
$image_number_2= $args['image_number_2'];
$image_text_1 = $args['image_text_1'];
$image_text_2= $args['image_text_2'];

?>
<section class="hover-images">
    <div class="container">
            <div class="hover-images__content--top">
                <div class="hover-images__content--top-text">
                    <?php if ( $title ): ?>
                    <h3 class="hover-images__content--top-title h3"><?= $title ?></h3>
                    <?php endif; ?>
                    <?php if ( $text ): ?>
                        <p class="hover-images__content--top-paragraph"><?= $text ?></p>
                    <?php endif; ?>
                </div>
                <?php
                get_template_part( './components/button_iron/button_iron', null, [
                    'color' => 'primary',
                    'link'  => $link['url'],
                    'icon'   => '<svg xmlns="http://www.w3.org/2000/svg" width="19" height="15" viewBox="0 0 19 15" fill="none">
                                            <path d="M17.9664 8.29993C18.3569 7.9094 18.3569 7.27624 17.9664 6.88571L11.6024 0.521752C11.2119 0.131228 10.5787 0.131228 10.1882 0.521752C9.79769 0.912277 9.79769 1.54544 10.1882 1.93597L15.8451 7.59282L10.1882 13.2497C9.79769 13.6402 9.79769 14.2734 10.1882 14.6639C10.5787 15.0544 11.2119 15.0544 11.6024 14.6639L17.9664 8.29993ZM0.259277 8.59282L17.2593 8.59282L17.2593 6.59282L0.259277 6.59282L0.259277 8.59282Z" fill="#01284D"/>
                                        </svg>',
                    'target'  => '_blank',
                    'text'    => $link['title'],
                    'gap'   => 'big',
                    'align_self'   => 'start',
                ] );
                ?>

            </div>
        </div>
            <div class="container">
            <div class="hover-images__content--bottom">
                <div class="hover-images__content--image-1">
                    <div class="hover-images__content--gradient"></div>
                <?php if ( $image_1 ): ?>
                    <img class="hover-images__content--image-1-img"
                         src="<?= $image_1['url'] ?>"
                         alt="<?= $image_1['alt'] ?>">
                <?php endif; ?>
                    <div class="hover-images__content--image-1-text">
                        <?php if ( $image_number_1 ): ?>
                            <p class="hover-images__content--image-1-number"><?= $image_number_1 ?></p>
                        <?php endif; ?>
                        <?php if ( $image_text_1 ): ?>
                            <p class="hover-images__content--image-1-paragraph"><?= $image_text_1 ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="hover-images__content--image-2">
                    <div class="hover-images__content--gradient"></div>
                <?php if ( $image_2 ): ?>
                    <img class="hover-images__content--image-2-img"
                         src="<?= $image_2['url'] ?>"
                         alt="<?= $image_2['alt'] ?>">
                <?php endif; ?>
                    <div class="hover-images__content--image-2-text">
                        <?php if ( $image_number_2 ): ?>
                            <p class="hover-images__content--image-2-number"><?= $image_number_2 ?></p>
                        <?php endif; ?>
                        <?php if ( $image_text_2 ): ?>
                            <p class="hover-images__content--image-2-paragraph"><?= $image_text_2 ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
                <div class="hover-images__mobile-button">
                    <?php
                    get_template_part( './components/button_iron/button_iron', null, [
                        'color' => 'primary',
                        'link'  => $link['url'],
                        'icon'   => '<svg xmlns="http://www.w3.org/2000/svg" width="19" height="15" viewBox="0 0 19 15" fill="none">
                                            <path d="M17.9664 8.29993C18.3569 7.9094 18.3569 7.27624 17.9664 6.88571L11.6024 0.521752C11.2119 0.131228 10.5787 0.131228 10.1882 0.521752C9.79769 0.912277 9.79769 1.54544 10.1882 1.93597L15.8451 7.59282L10.1882 13.2497C9.79769 13.6402 9.79769 14.2734 10.1882 14.6639C10.5787 15.0544 11.2119 15.0544 11.6024 14.6639L17.9664 8.29993ZM0.259277 8.59282L17.2593 8.59282L17.2593 6.59282L0.259277 6.59282L0.259277 8.59282Z" fill="#01284D"/>
                                        </svg>',
                        'target'  => '_blank',
                        'text'    => $link['title'],
                        'gap'   => 'big',
                        'align_self'   => 'start',
                    ] );
                    ?>
                </div>
            </div>
</section>
