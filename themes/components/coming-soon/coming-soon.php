<?php
$bg_image = $args['bg_image'];
$contact_bg_image = $args['contact_bg_image'];
$title = $args['title'];
$text = $args['text'];
?>
<section class="coming-soon">
    <div class="coming-soon__gradient"></div>
    <?php if ( $bg_image ): ?>
        <img class="coming-soon__bg"
             src="<?= $bg_image['url'] ?>"
             alt="<?= $bg_image['alt'] ?>">
    <?php endif; ?>
    <div class="container">
        <div class="coming-soon__content">
            <?php if ( $text ): ?>
                <div class="coming-soon__form">
                    <?php $logo_dark = get_field( 'logo_dark', 'option' ); ?>
                    <img class="coming-soon__logo"
                         src="<?= $logo_dark['url'] ?>"
                         alt="<?= $logo_dark['alt'] ?>">
                    <?= $text ?>
                    <?php if ( $contact_bg_image ): ?>
                    <img class="coming-soon__form-bg"
                         src="<?= $contact_bg_image['url'] ?>"
                         alt="<?= $contact_bg_image['alt'] ?>">
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if ( $title ): ?>
            <h1 class="coming-soon__title"><?= $title ?></h1>
            <?php endif; ?>
        </div>
    </div>
</section>
