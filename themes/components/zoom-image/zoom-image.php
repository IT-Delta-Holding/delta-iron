<?php
$title = $args['title'];
$image = $args['image'];
$lamela_1 = $args['lamela_1'];
$lamela_2 = $args['lamela_2'];
$lamela_3 = $args['lamela_3'];
$lamela_4 = $args['lamela_4'];
$pdf_button = $args['pdf_button'];
?>

<section class="zoom-image">
    <div class="container">
        <div id="zoom-image" class="zoom-image__text">
            <?php if ($title): ?>
                <h3 class="zoom-image__title h3"><?= $title ?></h3>
            <?php endif; ?>
        </div>
<!--        <div class="zoom-image__buttons">-->
<!--            <svg class="zoom-image__move" xmlns="http://www.w3.org/2000/svg" width="89" height="89" viewBox="0 0 89 89" fill="none">-->
<!--                <g clip-path="url(#clip0_1121_5820)">-->
<!--                    <rect width="88.4019" height="88.4019" rx="44.2009" fill="white"/>-->
<!--                    <path d="M55.7168 44.9125L52.4651 41.6614L52.0637 42.0625L54.9143 44.9125H45.3962C45.2834 44.3533 44.8427 43.9129 44.2838 43.7998V34.282L47.1338 37.1323L47.5352 36.7312L44.2838 33.4795L44 33.1963L43.7162 33.4795L40.4651 36.7312L40.8662 37.1323L43.7162 34.282V43.7998C43.157 43.9129 42.7166 44.3533 42.6035 44.9125H33.0857L35.936 42.0625L35.5349 41.6614L32.2832 44.9125L32 45.1963L32.2832 45.4801L35.5349 48.7312L35.936 48.3298L33.0857 45.4798H42.6035C42.7166 46.039 43.157 46.4797 43.7162 46.5922V56.1103L40.8662 53.2597L40.4651 53.6611L43.7162 56.9128L44 57.1963L44.2838 56.9131L47.5349 53.6614L47.1335 53.26L44.2835 56.1106V46.5925C44.8427 46.4794 45.2831 46.039 45.3959 45.4801H54.914L52.0634 48.3301L52.4648 48.7315L55.7165 45.4804L56 45.1963L55.7168 44.9125Z" fill="#01284D"/>-->
<!--                </g>-->
<!--                <rect x="0.690639" y="0.690639" width="87.0206" height="87.0206" rx="43.5103" stroke="#01284D" stroke-width="1.38128"/>-->
<!--                <defs>-->
<!--                    <clipPath id="clip0_1121_5820">-->
<!--                        <rect width="88.4019" height="88.4019" rx="44.2009" fill="white"/>-->
<!--                    </clipPath>-->
<!--                </defs>-->
<!--            </svg>-->
<!---->
<!--            <svg class="zoom-image__zoom-in" xmlns="http://www.w3.org/2000/svg" width="89" height="89" viewBox="0 0 89 89" fill="none">-->
<!--                <g clip-path="url(#clip0_1121_5823)">-->
<!--                    <rect x="0.402344" width="88.4019" height="88.4019" rx="44.2009" fill="white"/>-->
<!--                    <rect x="45.1074" y="32" width="24" height="1.41176" transform="rotate(90 45.1074 32)" fill="#01284D"/>-->
<!--                    <rect x="32.4023" y="43.2942" width="24" height="1.41176" fill="#01284D"/>-->
<!--                </g>-->
<!--                <rect x="1.09298" y="0.690639" width="87.0206" height="87.0206" rx="43.5103" stroke="#01284D" stroke-width="1.38128"/>-->
<!--                <defs>-->
<!--                    <clipPath id="clip0_1121_5823">-->
<!--                        <rect x="0.402344" width="88.4019" height="88.4019" rx="44.2009" fill="white"/>-->
<!--                    </clipPath>-->
<!--                </defs>-->
<!--            </svg>-->
<!---->
<!--            <svg class="zoom-image__zoom-out" xmlns="http://www.w3.org/2000/svg" width="90" height="89" viewBox="0 0 90 89" fill="none">-->
<!--                <g clip-path="url(#clip0_1121_5828)">-->
<!--                    <rect x="0.804688" width="88.4019" height="88.4019" rx="44.2009" fill="white"/>-->
<!--                    <rect x="32.8047" y="43.2942" width="24" height="1.41176" fill="#01284D"/>-->
<!--                </g>-->
<!--                <rect x="1.49533" y="0.690639" width="87.0206" height="87.0206" rx="43.5103" stroke="#01284D" stroke-width="1.38128"/>-->
<!--                <defs>-->
<!--                    <clipPath id="clip0_1121_5828">-->
<!--                        <rect x="0.804688" width="88.4019" height="88.4019" rx="44.2009" fill="white"/>-->
<!--                    </clipPath>-->
<!--                </defs>-->
<!--            </svg>-->
<!--        </div>-->
        <div id="zoom-image-container" class="zoom-image__content">
            <?php if ($lamela_1): ?>
                <div class="zoom-image__content--lamela-1">
                    <p><?= $lamela_1 ?></p>
                </div>
            <?php endif; ?>
            <?php if ($lamela_2): ?>
                <div class="zoom-image__content--lamela-2">
                    <p><?= $lamela_2 ?></p>
                </div>
            <?php endif; ?>
            <?php if ($lamela_3): ?>
                <div class="zoom-image__content--lamela-3">
                    <p><?= $lamela_3 ?></p>
                </div>
            <?php endif; ?>
            <?php if ($lamela_4): ?>
                <div class="zoom-image__content--lamela-4">
                    <p><?= $lamela_4 ?></p>
                </div>
            <?php endif; ?>
        <?php if ($image): ?>
            <img id="zoomImage" class="zoom-image__img"
                 src="<?= $image['url'] ?>"
                 alt="<?= $image['alt'] ?>">
        <?php endif; ?>
            <div class="zoom-image__zoom-preview" id="zoomBox"></div>
        </div>
        <div class="zoom-image__button">
            <?php if ($pdf_button): ?>
                <?php
                get_template_part( './components/button_iron/button_iron', null, [
                    'color' => 'primary',
                    'link'  => $pdf_button['url'],
                    'icon'   => '<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                   <path d="M8.79297 12.4816L3.79297 7.48157L5.19297 6.03157L7.79297 8.63157V0.481567H9.79297V8.63157L12.393 6.03157L13.793 7.48157L8.79297 12.4816ZM2.79297 16.4816C2.24297 16.4816 1.77214 16.2857 1.38047 15.8941C0.988802 15.5024 0.792969 15.0316 0.792969 14.4816V11.4816H2.79297V14.4816H14.793V11.4816H16.793V14.4816C16.793 15.0316 16.5971 15.5024 16.2055 15.8941C15.8138 16.2857 15.343 16.4816 14.793 16.4816H2.79297Z" fill="#01284D"></path>
                        </svg>',
                    'target'  => '_blank',
                    'text'    => $pdf_button['title'],
                    'gap'   => 'big',
                    'align_self'   => 'center',
                ] );
                ?>
            <?php endif; ?>
        </div>
    </div>
</section>