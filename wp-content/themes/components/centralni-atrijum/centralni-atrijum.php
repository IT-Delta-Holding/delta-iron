<?php
$title = $args['title'];
$text = $args['text'];
$link = $args['link'];
$background_image = $args['background_image'];
?>
<section class="centralni-atrijum">
    <?php if ( $background_image ): ?>
        <img class="centralni-atrijum__img"
             src="<?= $background_image['url'] ?>"
             alt="<?= $background_image['alt'] ?>">
    <?php endif; ?>
    <svg class="centralni-atrijum__mask" xmlns="http://www.w3.org/2000/svg" width="919" height="494" viewBox="0 0 919 494" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M921.5 233.713C835.654 164.854 726.755 123.616 608.42 123.616C377.409 123.616 182.355 280.777 124.582 493.777L0.78717 480.513C66.077 205.484 313.707 0.268555 608.42 0.268555C722.426 0.268555 829.398 30.9775 921.5 84.5575V233.713Z" fill="#6A9AC2"/>
    </svg>
    <div class="container">
        <div class="centralni-atrijum__content">
            <div class="centralni-atrijum__content-text">
            <?php if ( $title ): ?>
                <h3 class="centralni-atrijum__title h3"><?= $title ?></h3>
            <?php endif; ?>
                <?php if ( $text ): ?>
                    <p class="centralni-atrijum__paragraph"><?= $text ?></p>
                <?php endif; ?>
            </div>
            <?php if ( $link ): ?>
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
            <?php endif; ?>
        </div>
    </div>
</section>
