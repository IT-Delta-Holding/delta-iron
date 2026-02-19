<?php

$background_image= $args['background_image'];
$title = $args['title'];
$text = $args['text'];
$link = $args['link'];
$cards = $args['cards'];
$bottom_image = $args['bottom_image'];
$bottom_title = $args['bottom_title'];
$bottom_text = $args['bottom_text'];

?>

<section class="odrzivost">
    <?php if ( $background_image ): ?>
        <img class="odrzivost__img"
             src="<?= $background_image['url'] ?>"
             alt="<?= $background_image['alt'] ?>">
    <?php endif; ?>
    <div class="container">
            <div class="odrzivost__top">
                <div class="odrzivost__top-text">
                <?php if ( $title ): ?>
                    <h3 class="odrzivost__top-text--title h3"><?= $title ?></h3>
                <?php endif; ?>
                <?php if ( $text ): ?>
                    <div class="odrzivost__top-text--paragraph"><?= $text ?></div>
                <?php endif; ?>
                </div>
                <?php
                get_template_part( './components/button_iron/button_iron', null, [
                    'color' => 'white',
                    'link'  => $link['url'],
                    'icon'   => '<svg xmlns="http://www.w3.org/2000/svg" width="19" height="15" viewBox="0 0 19 15" fill="none">
                                            <path d="M17.9664 8.29993C18.3569 7.9094 18.3569 7.27624 17.9664 6.88571L11.6024 0.521752C11.2119 0.131228 10.5787 0.131228 10.1882 0.521752C9.79769 0.912277 9.79769 1.54544 10.1882 1.93597L15.8451 7.59282L10.1882 13.2497C9.79769 13.6402 9.79769 14.2734 10.1882 14.6639C10.5787 15.0544 11.2119 15.0544 11.6024 14.6639L17.9664 8.29993ZM0.259277 8.59282L17.2593 8.59282L17.2593 6.59282L0.259277 6.59282L0.259277 8.59282Z" fill="white"/>
                                        </svg>',
                    'target'  => '_blank',
                    'text'    => $link['title'],
                    'gap'   => 'big',
                    'align_self'   => 'start',
                ] );
                ?>
            </div>


            <?php if ($cards): ?>
                <div class="odrzivost__content--cards">
                    <?php $counter = 0 ?>
                    <?php foreach ($cards as $card): ?>
                       <div class="odrzivost__card card-<?= $counter ?>">
                           <img class="odrzivost__card--img"
                                src="<?= $card['icon']['url'] ?>"
                                alt="<?= $card['icon']['alt'] ?>">
                           <h3 class="odrzivost__card--title"><?= $card['title']?></h3>
                           <div class="odrzivost__card--paragraph"><?= $card['text'] ?></div>
                       </div>
                        <?php $counter ++ ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>



        <div class="odrzivost__bottom">
            <div class="odrzivost__bottom--section-img">
                <?php if ($bottom_image): ?>
                    <img class="odrzivost__bottom--img"
                         src="<?= $bottom_image['url'] ?>"
                         alt="<?= $bottom_image['alt'] ?>">
                <?php endif; ?>
                <?php if ( $bottom_title ): ?>
                    <div class="odrzivost__bottom--title"><?= $bottom_title ?></div>
                <?php endif; ?>
            </div>
            <svg class="odrzivost__divider" xmlns="http://www.w3.org/2000/svg" width="2" height="138" viewBox="0 0 2 138" fill="none">
                <line x1="1.45441" y1="2.18557e-08" x2="1.4544" y2="138" stroke="white"/>
            </svg>
            <svg class="odrzivost__divider-mobile" xmlns="http://www.w3.org/2000/svg" width="74" height="1" viewBox="0 0 74 1" fill="none">
                <line y1="0.5" x2="73.8154" y2="0.5" stroke="white"/>
            </svg>
            <?php if ( $bottom_text ): ?>
                <div class="odrzivost__bottom--paragraph"><?= $bottom_text ?></div>
            <?php endif; ?>

            <?php
            get_template_part( './components/button_iron/button_iron', null, [
                'color' => 'white',
                'link'  => $link['url'],
                'icon'   => '<svg xmlns="http://www.w3.org/2000/svg" width="19" height="15" viewBox="0 0 19 15" fill="none">
                                            <path d="M17.9664 8.29993C18.3569 7.9094 18.3569 7.27624 17.9664 6.88571L11.6024 0.521752C11.2119 0.131228 10.5787 0.131228 10.1882 0.521752C9.79769 0.912277 9.79769 1.54544 10.1882 1.93597L15.8451 7.59282L10.1882 13.2497C9.79769 13.6402 9.79769 14.2734 10.1882 14.6639C10.5787 15.0544 11.2119 15.0544 11.6024 14.6639L17.9664 8.29993ZM0.259277 8.59282L17.2593 8.59282L17.2593 6.59282L0.259277 6.59282L0.259277 8.59282Z" fill="white"/>
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
