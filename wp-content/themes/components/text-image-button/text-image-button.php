<?php

$title = $args['title'];
$text = $args['text'];
$image = $args['image'];
$link = $args['link'];

?>

<section class="text-image-button">
    <div class="container">
        <div class="text-image-button__content">
            <div class="text-image-button__content-text">
            <?php if ($title): ?>
                <h3 class="text-image-button__content-title h3"><?= $title ?></h3>
            <?php endif; ?>
                <?php if ($text): ?>
                    <p class="text-image-button__content-paragraph"><?= $text ?></p>
                <?php endif; ?>
            </div>
            <?php if ($image): ?>
                <img class="text-image-button__content-img"
                     src="<?= $image['url'] ?>"
                     alt="<?= $image['alt'] ?>">
            <?php endif; ?>


            <?php if ($link): ?>
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
            <?php endif; ?>
        </div>
    </div>
</section>

