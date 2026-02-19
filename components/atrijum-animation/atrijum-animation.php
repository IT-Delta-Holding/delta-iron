<?php

$main_image = $args['main_image'];
$info_title_1 = $args['info_title_1'];
$info_1 = $args['info_1'];
$info_title_2 = $args['info_title_2'];
$info_2 = $args['info_2'];
$info_title_3 = $args['info_title_3'];
$info_3 = $args['info_3'];
$link = $args['link'];

?>
<section class="atrijum-animation">
    <div class="container">
        <div class="atrijum-animation__content">
        <?php if ( $main_image ): ?>
            <img class="atrijum-animation__img"
                 src="<?= $main_image['url'] ?>"
                 alt="<?= $main_image['alt'] ?>">
        <?php endif; ?>
<!--            --><?php //if ( $info_1 ): ?>
<!--                <p class="atrijum-animation__text">--><?php //= $info_1 ?><!--</p>-->
<!--            --><?php //endif; ?>
            <svg class="atrijum-animation__red-circle" xmlns="http://www.w3.org/2000/svg" width="252" height="131" viewBox="0 0 252 131" fill="none">
                <ellipse cx="126" cy="65.4292" rx="126" ry="65" fill="#D82F24"/>
            </svg>

            <svg class="atrijum-animation__yellow-circle" xmlns="http://www.w3.org/2000/svg" width="70" height="35" viewBox="0 0 70 35" fill="none">
                <ellipse cx="35" cy="17.5" rx="35" ry="17.5" fill="#FFCC4E"/>
            </svg>

            <svg class="atrijum-animation__blue-circle" xmlns="http://www.w3.org/2000/svg" width="127" height="69" viewBox="0 0 127 69" fill="none">
                <ellipse cx="63.5" cy="34.5" rx="63.5" ry="34.5" fill="#6A9AC2"/>
            </svg>

            <div class="atrijum-animation__info-1">
                <svg class="atrijum-animation__info-1--svg" xmlns="http://www.w3.org/2000/svg" width="461" height="44" viewBox="0 0 461 44" fill="none">
                    <path d="M0.367188 42.6987L129.538 0.907715H460.065" stroke="white"/>
                </svg>
                <div class="atrijum-animation__info-1--content">
                    <?php if ( $info_title_1 ): ?>
                        <h3 class="atrijum-animation__info-1--title"><?= $info_title_1 ?></h3>
                    <?php endif; ?>
                    <svg class="atrijum-animation__info-1--divider" xmlns="http://www.w3.org/2000/svg" width="2" height="74" viewBox="0 0 2 74" fill="none">
                        <line x1="0.828125" y1="2.18557e-08" x2="0.828122" y2="73.8154" stroke="white"/>
                    </svg>
                    <svg class="atrijum-animation__info-1--divider-mobile" xmlns="http://www.w3.org/2000/svg" width="74" height="1" viewBox="0 0 74 1" fill="none">
                        <line y1="0.5" x2="73.8154" y2="0.5" stroke="white"/>
                    </svg>
                    <?php if ( $info_1 ): ?>
                        <p class="atrijum-animation__info-1--text"><?= $info_1 ?></p>
                    <?php endif; ?>
                </div>
            </div>



            <div class="atrijum-animation__info-2">
                <svg class="atrijum-animation__info-2--svg" xmlns="http://www.w3.org/2000/svg" width="167" height="2" viewBox="0 0 167 2" fill="none">
                    <path d="M0.212891 1.22559L166.115 1.2256" stroke="white"/>
                </svg>
                <div class="atrijum-animation__info-2--content">
                    <?php if ( $info_title_2 ): ?>
                        <h3 class="atrijum-animation__info-2--title"><?= $info_title_2 ?></h3>
                    <?php endif; ?>
                    <svg class="atrijum-animation__info-2--divider" xmlns="http://www.w3.org/2000/svg" width="2" height="74" viewBox="0 0 2 74" fill="none">
                        <line x1="0.828125" y1="2.18557e-08" x2="0.828122" y2="73.8154" stroke="white"/>
                    </svg>
                    <svg class="atrijum-animation__info-2--divider-mobile" xmlns="http://www.w3.org/2000/svg" width="74" height="1" viewBox="0 0 74 1" fill="none">
                        <line y1="0.5" x2="73.8154" y2="0.5" stroke="white"/>
                    </svg>
                    <?php if ( $info_2 ): ?>
                        <p class="atrijum-animation__info-2--text"><?= $info_2 ?></p>
                    <?php endif; ?>
                </div>
            </div>


            <div class="atrijum-animation__info-3">
                <svg class="atrijum-animation__info-3--svg" xmlns="http://www.w3.org/2000/svg" width="461" height="44" viewBox="0 0 461 44" fill="none">
                    <path d="M1 1.21289L130.171 43.0039H460.698" stroke="white"/>
                </svg>
                <div class="atrijum-animation__info-3--content">
                    <?php if ( $info_title_3 ): ?>
                        <h3 class="atrijum-animation__info-3--title"><?= $info_title_3 ?></h3>
                    <?php endif; ?>
                    <svg class="atrijum-animation__info-2--divider" xmlns="http://www.w3.org/2000/svg" width="2" height="74" viewBox="0 0 2 74" fill="none">
                        <line x1="0.828125" y1="2.18557e-08" x2="0.828122" y2="73.8154" stroke="white"/>
                    </svg>
                    <svg class="atrijum-animation__info-2--divider-mobile" xmlns="http://www.w3.org/2000/svg" width="74" height="1" viewBox="0 0 74 1" fill="none">
                        <line y1="0.5" x2="73.8154" y2="0.5" stroke="white"/>
                    </svg>
                    <?php if ( $info_3 ): ?>
                        <p class="atrijum-animation__info-3--text"><?= $info_3 ?></p>
                    <?php endif; ?>
                </div>
            </div>
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
</section>
