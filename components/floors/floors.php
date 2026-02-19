<?php

$text = $args['text'];
$background_image = $args['background_image'];
$floor = $args['floor'];
$roof = $args['roof'];
$atrijum = $args['atrijum'];
$title_info_1 = $args['title_info_1'];
$info_1 = $args['info_1'];
$title_info_2 = $args['title_info_2'];
$info_2 = $args['info_2'];
$title_info_3 = $args['title_info_3'];
$info_3 = $args['info_3'];
$title_info_4 = $args['title_info_4'];
$info_4 = $args['info_4'];
$lamela_1 = $args['lamela_1'];
$lamela_2 = $args['lamela_2'];
$lamela_3 = $args['lamela_3'];
$lamela_4 = $args['lamela_4'];

?>
<section class="floors">
    <?php if ( $background_image ): ?>
    <img class="floors__bg"
         src="<?= $background_image['url'] ?>"
         alt="<?= $background_image['alt'] ?>">
    <?php endif; ?>
    <?php if ( $text ): ?>
        <h3 class="floors__text"><?= $text ?></h3>
    <?php endif; ?>
    <div class="floors__content">
        <?php if ( $roof ): ?>
            <img class="floors__roof"
                 src="<?= $roof['url'] ?>"
                 alt="<?= $roof['alt'] ?>">
        <?php endif; ?>
        <?php if ( $floor ): ?>
            <img class="floors__floor-1"
                 src="<?= $floor['url'] ?>"
                 alt="<?= $floor['alt'] ?>">
        <?php endif; ?>
        <?php if ( $floor ): ?>
            <img class="floors__floor-2"
                 src="<?= $floor['url'] ?>"
                 alt="<?= $floor['alt'] ?>">
        <?php endif; ?>
        <?php if ( $floor ): ?>
            <img class="floors__floor-3"
                 src="<?= $floor['url'] ?>"
                 alt="<?= $floor['alt'] ?>">
        <?php endif; ?>
        <?php if ( $floor ): ?>
            <img class="floors__floor-4"
                 src="<?= $floor['url'] ?>"
                 alt="<?= $floor['alt'] ?>">
        <?php endif; ?>

        <?php if ( $atrijum ): ?>
            <img class="floors__atrijum"
                 src="<?= $atrijum['url'] ?>"
                 alt="<?= $atrijum['alt'] ?>">
        <?php endif; ?>

        <div class="floors__lamela--1 scroll-hidden">
            <svg class="floors__lamela--1-pin" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                <circle cx="14.9985" cy="14.8969" r="9.78947" fill="#C0E2FF"/>
                <circle cx="15" cy="14.8965" r="14.5201" stroke="white" stroke-width="0.631588"/>
            </svg>
            <div class="floors__lamela--1-info">
            <svg class="floors__lamela--1-line" xmlns="http://www.w3.org/2000/svg" width="203" height="100" viewBox="0 0 203 100" fill="none">
                <path d="M202.5 0.896484H127L67 99.3965H0" stroke="white"/>
            </svg>
            <p class="floors__lamela--1-text"><?= $lamela_1 ?></p>
            </div>
        </div>


        <div class="floors__lamela--2 scroll-hidden">
            <svg class="floors__lamela--2-pin" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                <circle cx="14.9985" cy="14.8969" r="9.78947" fill="#C0E2FF"/>
                <circle cx="15" cy="14.8965" r="14.5201" stroke="white" stroke-width="0.631588"/>
            </svg>
            <div class="floors__lamela--2-info">
                <svg class="floors__lamela--2-line" xmlns="http://www.w3.org/2000/svg" width="203" height="100" viewBox="0 0 203 100" fill="none">
                    <path d="M202.5 0.896484H127L67 99.3965H0" stroke="white"/>
                </svg>
                <p class="floors__lamela--2-text"><?= $lamela_2 ?></p>
            </div>
        </div>

        <div class="floors__lamela--3 scroll-hidden">
            <svg class="floors__lamela--3-pin" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                <circle cx="14.9985" cy="14.8969" r="9.78947" fill="#C0E2FF"/>
                <circle cx="15" cy="14.8965" r="14.5201" stroke="white" stroke-width="0.631588"/>
            </svg>
            <div class="floors__lamela--3-info">
                <svg class="floors__lamela--3-line" xmlns="http://www.w3.org/2000/svg" width="204" height="100" viewBox="0 0 204 100" fill="none">
                    <path d="M0.792969 0.703125H76.293L136.293 99.2031H203.293" stroke="white"/>
                </svg>
                <p class="floors__lamela--3-text"><?= $lamela_3 ?></p>
            </div>
        </div>

        <div class="floors__lamela--4 scroll-hidden">
            <svg class="floors__lamela--4-pin" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                <circle cx="14.9985" cy="14.8969" r="9.78947" fill="#C0E2FF"/>
                <circle cx="15" cy="14.8965" r="14.5201" stroke="white" stroke-width="0.631588"/>
            </svg>
            <div class="floors__lamela--4-info">
                <svg class="floors__lamela--4-line" xmlns="http://www.w3.org/2000/svg" width="204" height="100" viewBox="0 0 204 100" fill="none">
                    <path d="M0.792969 0.703125H76.293L136.293 99.2031H203.293" stroke="white"/>
                </svg>
                <p class="floors__lamela--4-text"><?= $lamela_4 ?></p>
            </div>
        </div>




            <!--MOBILE-->
        <div class="floors__lamela--1-mobile scroll-hidden-mobile">
            <svg class="floors__lamela--1-mobile-pin" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                <circle cx="14.9985" cy="14.8969" r="9.78947" fill="#C0E2FF"/>
                <circle cx="15" cy="14.8965" r="14.5201" stroke="white" stroke-width="0.631588"/>
            </svg>
            <div class="floors__lamela--1-mobile-info">
                <svg class="floors__lamela--1-mobile-line" xmlns="http://www.w3.org/2000/svg" width="32" height="102" viewBox="0 0 32 102" fill="none">
                    <path d="M0.272457 0.340941L0.272458 37.9613L31.4323 67.8582L31.4323 101.243" stroke="white" stroke-width="0.316344"/>
                </svg>
                <p class="floors__lamela--1-mobile-text"><?= $lamela_1 ?></p>
            </div>
        </div>


        <div class="floors__lamela--2-mobile scroll-hidden-mobile">
            <svg class="floors__lamela--2-mobile-pin" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                <circle cx="14.9985" cy="14.8969" r="9.78947" fill="#C0E2FF"/>
                <circle cx="15" cy="14.8965" r="14.5201" stroke="white" stroke-width="0.631588"/>
            </svg>
            <div class="floors__lamela--2-mobile-info">
                <svg class="floors__lamela--2-mobile-line" xmlns="http://www.w3.org/2000/svg" width="32" height="102" viewBox="0 0 32 102" fill="none">
                    <path d="M0.272457 0.340941L0.272458 37.9613L31.4323 67.8582L31.4323 101.243" stroke="white" stroke-width="0.316344"/>
                </svg>
                <p class="floors__lamela--2-mobile-text"><?= $lamela_2 ?></p>
            </div>
        </div>

        <div class="floors__lamela--3-mobile scroll-hidden-mobile">
            <svg class="floors__lamela--3-mobile-pin" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                <circle cx="14.9985" cy="14.8969" r="9.78947" fill="#C0E2FF"/>
                <circle cx="15" cy="14.8965" r="14.5201" stroke="white" stroke-width="0.631588"/>
            </svg>
            <div class="floors__lamela--3-mobile-info">
                <svg class="floors__lamela--3-mobile-line" xmlns="http://www.w3.org/2000/svg" width="32" height="102" viewBox="0 0 32 102" fill="none">
                    <path d="M31.3418 0.128539L31.3418 37.7489L0.18195 67.6458L0.181949 101.031" stroke="white" stroke-width="0.316344"/>
                </svg>
                <p class="floors__lamela--3-mobile-text"><?= $lamela_3 ?></p>
            </div>
        </div>

        <div class="floors__lamela--4-mobile scroll-hidden-mobile">
            <svg class="floors__lamela--4-mobile-pin" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                <circle cx="14.9985" cy="14.8969" r="9.78947" fill="#C0E2FF"/>
                <circle cx="15" cy="14.8965" r="14.5201" stroke="white" stroke-width="0.631588"/>
            </svg>
            <div class="floors__lamela--4-mobile-info">
                <svg class="floors__lamela--4-mobile-line" xmlns="http://www.w3.org/2000/svg" width="32" height="102" viewBox="0 0 32 102" fill="none">
                    <path d="M31.3418 0.128539L31.3418 37.7489L0.18195 67.6458L0.181949 101.031" stroke="white" stroke-width="0.316344"/>
                </svg>
                <p class="floors__lamela--4-mobile-text"><?= $lamela_4 ?></p>
            </div>
        </div>



        <svg class="floors__front-part" xmlns="http://www.w3.org/2000/svg" width="240" height="180" viewBox="0 0 240 180" fill="none">
            <path class="floors__front-part--path animationPath" opacity="0.5" d="M10.4951 0.0532227H0.37207C0.37207 82.3026 14.9239 127.065 51.4616 179.895C130.706 155.852 177.208 137.505 240.002 94.9563L235.89 46.7139L209.159 37.2236L186.066 32.4784L153.799 30.264C135.99 38.6341 118.665 45.6267 99.704 52.4081C92.3482 39.0423 88.6094 30.1663 83.8868 16.3449L52.5688 5.11472L32.6391 1.3186L10.4951 0.0532227Z" fill="#01284D"/>
        </svg>

        <svg class="floors__left-part" xmlns="http://www.w3.org/2000/svg" width="104" height="121" viewBox="0 0 104 121" fill="none">
            <path class="floors__left-part--path animationPath" opacity="0.5" d="M52.4106 109.146L83.8868 120.377C77.2436 99.498 83.8868 91.4312 89.1065 74.3487V35.4384L83.7816 29.5798L89.7392 19.9376L95.5915 14.0852L103.342 8.54918L52.0943 0.482422C52.0943 0.482422 31.2156 17.4068 16.0311 46.0359C0.846586 74.665 0.37207 104.085 0.37207 104.085H10.4951L32.6391 105.35L52.4106 109.146Z" fill="#D82F24"/>
        </svg>

        <svg class="floors__right-part" xmlns="http://www.w3.org/2000/svg" width="181" height="166" viewBox="0 0 181 166" fill="none">
            <path class="floors__right-part--path animationPath" opacity="0.5" d="M113.233 7.40936L116.554 0.924316L180.93 10.731C177.767 26.2318 173.79 35.8803 173.18 37.462C173.351 37.462 173.971 37.3038 175.236 37.6202C174.761 40.1509 174.371 42.8206 173.264 47.8821C173.934 47.9233 174.477 47.9654 175.193 48.025C169.657 93.5785 121.226 142.612 86.9761 165.898L82.8636 117.655L55.1836 107.69L32.4068 102.953L0.772461 101.047C43.9672 79.6859 68.6282 63.5604 96.7828 29.0789L107.222 25.2828L110.386 15.1598L113.233 7.40936Z" fill="#FFCC4E"/>
        </svg>

        <svg class="floors__back-part" xmlns="http://www.w3.org/2000/svg" width="187" height="88" viewBox="0 0 187 88" fill="none">
            <path class="floors__back-part--path animationPath" opacity="0.5" d="M20.4353 0.152588L186.564 25.7764L183.084 32.4196L180.553 39.6955L177.232 50.2931L166.634 54.0892C157.571 67.006 149.776 74.2402 134.525 87.1471L6.08976 65.6357V27.0418L0.711914 21.3476L6.72244 11.541L12.8911 5.37226L20.4353 0.152588Z" fill="#6A9AC2"/>
        </svg>
    </div>


    <div class="floors__informations">

        <div class="floors__info-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="446" height="120" viewBox="0 0 446 120" fill="none">
                <path d="M0.507812 0.5H145.008L264.008 119.5H445.508" stroke="white"/>
            </svg>
            <div class="floors__info-1--text">
                <?php if ( $title_info_1 ): ?>
                    <h3 class="floors__info-1--title"><?= $title_info_1 ?></h3>
                <?php endif; ?>
                <?php if ( $info_1 ): ?>
                    <div class="floors__info-1--paragraph"><?= $info_1 ?></div>
                <?php endif; ?>
            </div>
        </div>

    <div class="floors__info-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="446" height="120" viewBox="0 0 446 120" fill="none">
            <path d="M0.507812 0.5H145.008L264.008 119.5H445.508" stroke="white"/>
        </svg>
        <div class="floors__info-2--text">
            <?php if ( $title_info_2 ): ?>
                <h3 class="floors__info-2--title"><?= $title_info_2 ?></h3>
            <?php endif; ?>
            <?php if ( $info_2 ): ?>
                <div class="floors__info-2--paragraph"><?= $info_2 ?></div>
            <?php endif; ?>
        </div>
    </div>

    <div class="floors__info-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="446" height="120" viewBox="0 0 446 120" fill="none">
            <path d="M0.507812 0.5H145.008L264.008 119.5H445.508" stroke="white"/>
        </svg>
        <div class="floors__info-3--text">
            <?php if ( $title_info_3 ): ?>
                <h3 class="floors__info-3--title"><?= $title_info_3 ?></h3>
            <?php endif; ?>
            <?php if ( $info_3 ): ?>
                <div class="floors__info-3--paragraph"><?= $info_3 ?></div>
            <?php endif; ?>
        </div>
    </div>

    <div class="floors__info-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="446" height="120" viewBox="0 0 446 120" fill="none">
            <path d="M0.507812 0.5H145.008L264.008 119.5H445.508" stroke="white"/>
        </svg>
        <div class="floors__info-4--text">
            <?php if ( $title_info_4 ): ?>
                <h3 class="floors__info-4--title"><?= $title_info_4 ?></h3>
            <?php endif; ?>
            <?php if ( $info_4 ): ?>
                <div class="floors__info-4--paragraph"><?= $info_4 ?></div>
            <?php endif; ?>
        </div>
    </div>
    </div>
</section>
