<?php

$bg_image = $args['bg_image'];
$text = $args['text'];
$solarni_omotac_image = $args['solarni_omotac_image'];
$solarni_omotac_title = $args['solarni_omotac_title'];
$solarni_omotac_text = $args['solarni_omotac_text'];

$smart_sistemi_image = $args['smart_sistemi_image'];
$smart_sistemi_title= $args['smart_sistemi_title'];
$smart_sistemi_text = $args['smart_sistemi_text'];

$zeleni_parking_image = $args['zeleni_parking_image'];
$zeleni_parking_title = $args['zeleni_parking_title'];
$zeleni_parking_text = $args['zeleni_parking_text'];

$geotermalne_sonde_image = $args['geotermalne_sonde_image'];
$geotermalne_sonde_title = $args['geotermalne_sonde_title'];
$geotermalne_sonde_text = $args['geotermalne_sonde_text'];

$reciklirani_materijali_image = $args['reciklirani_materijali_image'];
$reciklirani_materijali_title = $args['reciklirani_materijali_title'];
$reciklirani_materijali_text = $args['reciklirani_materijali_text'];
?>

<section class="odrzivost_animation">
    <?php if ( $bg_image ): ?>
        <img class="odrzivost_animation__img"
             src="<?= $bg_image['url'] ?>"
             alt="<?= $bg_image['alt'] ?>">
    <?php endif; ?>
    <div class="odrzivost_animation__scroll">
    <div class="container">
        <div class="odrzivost_animation__text">
            <?php if ( $text ): ?>
            <p class="odrzivost_animation__title"><?= $text ?></p>
            <?php endif; ?>
        </div>

        <div class="odrzivost_animation__content">

            <?php if ( $geotermalne_sonde_image && $geotermalne_sonde_title && $geotermalne_sonde_text ): ?>
                <div class="odrzivost_animation__content--geotermalne-sonde odrzivost_animation__content-row">
                    <img class="odrzivost_animation__content-img"
                         src="<?= $geotermalne_sonde_image['url'] ?>"
                         alt="<?= $geotermalne_sonde_image['alt'] ?>">
                    <div class="odrzivost_animation__content--geotermalne-sonde-content">
                        <svg class="odrzivost_animation__content--geotermalne-sonde-svg" xmlns="http://www.w3.org/2000/svg" width="305" height="44" viewBox="0 0 305 44" fill="none">
                            <path d="M0.861328 42.791L85.1835 1H304.679" stroke="white"/>
                        </svg>
                        <div class="odrzivost_animation__content-text">
                            <p class="odrzivost_animation__content-title"><?= $geotermalne_sonde_title ?></p>
                            <svg class="odrzivost_animation__content-text-svg" xmlns="http://www.w3.org/2000/svg" width="1" height="80" viewBox="0 0 1 80" fill="none">
                                <line x1="0.5" y1="0.0649414" x2="0.499997" y2="80.0649" stroke="white"/>
                            </svg>
                            <svg class="odrzivost_animation__content-text-svg-mobile" xmlns="http://www.w3.org/2000/svg" width="74" height="1" viewBox="0 0 74 1" fill="none">
                                <line y1="0.5" x2="73.8154" y2="0.5" stroke="white"></line>
                            </svg>
                            <div class="odrzivost_animation__content-paragraph"><?= $geotermalne_sonde_text ?></div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>



            <?php if ( $reciklirani_materijali_image && $reciklirani_materijali_title && $reciklirani_materijali_text ): ?>
                <div class="odrzivost_animation__content--reciklirani-materijali odrzivost_animation__content-row">
                    <img class="odrzivost_animation__content-img"
                         src="<?= $reciklirani_materijali_image['url'] ?>"
                         alt="<?= $reciklirani_materijali_image['alt'] ?>">
                    <div class="odrzivost_animation__content--reciklirani-materijali-content">
<!--                        <svg class="odrzivost_animation__content--reciklirani-materijali-svg" xmlns="http://www.w3.org/2000/svg" width="305" height="43" viewBox="0 0 305 43" fill="none">-->
<!--                            <path d="M0.443359 0.467529L84.7655 42.2585H304.261" stroke="white"/>-->
<!--                        </svg>-->
                        <svg class="odrzivost_animation__content--reciklirani-materijali-svg" xmlns="http://www.w3.org/2000/svg" width="305" height="44" viewBox="0 0 305 44" fill="none">
                            <path d="M0.861328 42.791L85.1835 1H304.679" stroke="white"/>
                        </svg>
                        <div class="odrzivost_animation__content-text">
                            <p class="odrzivost_animation__content-title"><?= $reciklirani_materijali_title ?></p>
                            <svg class="odrzivost_animation__content-text-svg" xmlns="http://www.w3.org/2000/svg" width="1" height="80" viewBox="0 0 1 80" fill="none">
                                <line x1="0.5" y1="0.0649414" x2="0.499997" y2="80.0649" stroke="white"/>
                            </svg>
                            <svg class="odrzivost_animation__content-text-svg-mobile" xmlns="http://www.w3.org/2000/svg" width="74" height="1" viewBox="0 0 74 1" fill="none">
                                <line y1="0.5" x2="73.8154" y2="0.5" stroke="white"></line>
                            </svg>
                            <div class="odrzivost_animation__content-paragraph"><?= $reciklirani_materijali_text ?></div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>





            <?php if ( $zeleni_parking_image && $zeleni_parking_title && $zeleni_parking_text ): ?>
                <div class="odrzivost_animation__content--zeleni-parking odrzivost_animation__content-row">
                    <img class="odrzivost_animation__content-img"
                         src="<?= $zeleni_parking_image['url'] ?>"
                         alt="<?= $zeleni_parking_image['alt'] ?>">
                    <div class="odrzivost_animation__content--zeleni-parking-content">
                        <svg class="odrzivost_animation__content--zeleni-parking-svg" xmlns="http://www.w3.org/2000/svg" width="231" height="2" viewBox="0 0 231 2" fill="none">
                            <path d="M0.970703 0.547363L11.4538 0.547363H230.949" stroke="white"/>
                        </svg>
                        <div class="odrzivost_animation__content-text">
                            <p class="odrzivost_animation__content-title"><?= $zeleni_parking_title ?></p>
                            <svg class="odrzivost_animation__content-text-svg" xmlns="http://www.w3.org/2000/svg" width="1" height="81" viewBox="0 0 1 81" fill="none">
                                <line x1="0.5" y1="0.0649414" x2="0.499997" y2="80.0649" stroke="white"/>
                            </svg>
                            <svg class="odrzivost_animation__content-text-svg-mobile" xmlns="http://www.w3.org/2000/svg" width="74" height="1" viewBox="0 0 74 1" fill="none">
                                <line y1="0.5" x2="73.8154" y2="0.5" stroke="white"></line>
                            </svg>
                            <div class="odrzivost_animation__content-paragraph"><?= $zeleni_parking_text ?></div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>



            <?php if ( $solarni_omotac_image && $solarni_omotac_title && $solarni_omotac_text ): ?>
                <div class="odrzivost_animation__content--solarni-omotac odrzivost_animation__content-row">
                    <img class="odrzivost_animation__content-img"
                         src="<?= $solarni_omotac_image['url'] ?>"
                         alt="<?= $solarni_omotac_image['alt'] ?>">
                    <div class="odrzivost_animation__content--solarni-omotac-content">
                        <svg class="odrzivost_animation__content--solarni-omotac-svg" xmlns="http://www.w3.org/2000/svg" width="305" height="43" viewBox="0 0 305 43" fill="none">
                            <path d="M0.443359 0.467529L84.7655 42.2585H304.261" stroke="white"/>
                        </svg>
                        <div class="odrzivost_animation__content-text">
                            <p class="odrzivost_animation__content-title"><?= $solarni_omotac_title ?></p>
                            <svg class="odrzivost_animation__content-text-svg" xmlns="http://www.w3.org/2000/svg" width="1" height="81" viewBox="0 0 1 81" fill="none">
                                <line x1="0.5" y1="0.0649414" x2="0.499997" y2="80.0649" stroke="white"/>
                            </svg>
                            <svg class="odrzivost_animation__content-text-svg-mobile" xmlns="http://www.w3.org/2000/svg" width="74" height="1" viewBox="0 0 74 1" fill="none">
                                <line y1="0.5" x2="73.8154" y2="0.5" stroke="white"></line>
                            </svg>
                            <div class="odrzivost_animation__content-paragraph"><?= $solarni_omotac_text ?></div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>



            <?php if ( $smart_sistemi_image && $smart_sistemi_title && $smart_sistemi_text ): ?>
                <div class="odrzivost_animation__content--smart-sistemi odrzivost_animation__content-row">
                    <img class="odrzivost_animation__content-img"
                         src="<?= $smart_sistemi_image['url'] ?>"
                         alt="<?= $smart_sistemi_image['alt'] ?>">
                    <div class="odrzivost_animation__content--smart-sistemi-content">
                        <svg class="odrzivost_animation__content--smart-sistemi-svg" xmlns="http://www.w3.org/2000/svg" width="305" height="43" viewBox="0 0 305 43" fill="none">
                            <path d="M0.443359 0.467529L84.7655 42.2585H304.261" stroke="white"/>
                        </svg>
                        <div class="odrzivost_animation__content-text">
                            <p class="odrzivost_animation__content-title"><?= $smart_sistemi_title ?></p>
                            <svg class="odrzivost_animation__content-text-svg" xmlns="http://www.w3.org/2000/svg" width="1" height="81" viewBox="0 0 1 81" fill="none">
                                <line x1="0.5" y1="0.0649414" x2="0.499997" y2="80.0649" stroke="white"/>
                            </svg>
                            <svg class="odrzivost_animation__content-text-svg-mobile" xmlns="http://www.w3.org/2000/svg" width="74" height="1" viewBox="0 0 74 1" fill="none">
                                <line y1="0.5" x2="73.8154" y2="0.5" stroke="white"></line>
                            </svg>
                            <div class="odrzivost_animation__content-paragraph"><?= $smart_sistemi_text ?></div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>








        </div>
    </div>
    </div>
</section>
