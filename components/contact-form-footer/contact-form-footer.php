<?php

$contact_image = $args['contact_image'];
$contact_title = $args['contact_title'];
$contact_paragraph = $args['contact_paragraph'];
$form = $args['form'];
?>

<section class="contact-form-footer" id="contact-form-footer">
    <?php if ($contact_image): ?>
        <img class="contact-form-footer__img"
             src="<?= $contact_image['url'] ?>"
             alt="<?= $contact_image['alt'] ?>">
    <?php endif; ?>
    <div class="container">
        <div class="contact-form-footer__content">
            <div class="contact-form-footer__text">
                <?php if ($contact_title): ?>
                    <h3 class="contact-form-footer__title h3"><?= $contact_title ?></h3>
                <?php endif; ?>
                <?php if ($contact_paragraph): ?>
                    <p class="contact-form-footer__paragraph"><?= $contact_paragraph ?></p>
                <?php endif; ?>
            </div>

            <div class="contact-form-footer__form">
                <?php if ($form): ?>
                    <div class="contact-form-footer__formular"><?= $form ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
