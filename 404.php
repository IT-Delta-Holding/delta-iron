<?php //get_header(); ?>
<?php get_header('coming-soon') ?>

<?php
wp_enqueue_script('delta-404', get_template_directory_uri() . '/dist/js/404.js', array(), wp_get_theme()->get('Version'), true);
wp_enqueue_style('delta-404', get_template_directory_uri() . '/dist/css/404.css', array(),wp_get_theme()->get('Version'));
?>


<?php
$title_404 = get_field('title_404', 'option');
$text_404 = get_field('text_404', 'option');
$link_404 = get_field('link_404', 'option');
$background_image_404 = get_field('background_image_404', 'option');
$mobile_image_404 = get_field('mobile_image_404', 'option');
$text_mask_image_404 = get_field('text_mask_image_404', 'option');
$copyright     = get_field( 'copyright', 'option' );
$mask_style = '';

if ($text_mask_image_404) {
    $mask_style = 'background: url(' . $text_mask_image_404['url'] . '); background-position: center; background-size: 200%; background-repeat: no-repeat; -webkit-background-clip: text; -webkit-text-fill-color: transparent;';
}

?>

<div class="error">
    <?php if ($background_image_404): ?>
        <img class="error__bg"
             src="<?= $background_image_404['url'] ?>"
             srcset="<?= $background_image_404['sizes']['thumbnail'] ?> 150w,
                     <?= $background_image_404['sizes']['medium'] ?> 300w,
                     <?= $background_image_404['sizes']['medium_large'] ?> 768w,
                     <?= $background_image_404['sizes']['large'] ?> 1024w,
                     <?= $background_image_404['sizes']['1536x1536'] ?> 1536w,
                     <?= $background_image_404['sizes']['2048x2048'] ?> 2048w"
             alt="<?= $background_image_404['alt'] ?>">
    <?php endif; ?>
    <?php if ($mobile_image_404): ?>
        <img class="error__mobile-bg"
             src="<?= $mobile_image_404['url'] ?>"
             srcset="<?= $mobile_image_404['sizes']['thumbnail'] ?> 150w,
                     <?= $mobile_image_404['sizes']['medium'] ?> 300w,
                     <?= $mobile_image_404['sizes']['medium_large'] ?> 768w,
                     <?= $mobile_image_404['sizes']['large'] ?> 1024w,
                     <?= $mobile_image_404['sizes']['1536x1536'] ?> 1536w,
                     <?= $mobile_image_404['sizes']['2048x2048'] ?> 2048w"
             alt="<?= $mobile_image_404['alt'] ?>">
    <?php endif; ?>
    <div class="container">
        <div class="error__content">
        <div class="error__text" style="<?= $mask_style ?>">
            <p class="error__title">404</p>
        </div>
        <div class="error__text-right">
            <?php if ($title_404): ?>
                <h2 class="error__subtitle"><?= $title_404 ?></h2>
            <?php endif; ?>
            <?php if ($text_404): ?>
                <p class="error__paragraph"><?= $text_404 ?></p>
            <?php endif; ?>
        <?php
        if ($link_404 && $link_404['url'] && $link_404['title']) {
            get_template_part( './components/button_iron/button_iron', null, [
                'color' => 'white',
                'link'  => $link_404['url'],
                'icon'   => '<svg xmlns="http://www.w3.org/2000/svg" width="19" height="15" viewBox="0 0 19 15" fill="none">
                                            <path d="M17.9664 8.29993C18.3569 7.9094 18.3569 7.27624 17.9664 6.88571L11.6024 0.521752C11.2119 0.131228 10.5787 0.131228 10.1882 0.521752C9.79769 0.912277 9.79769 1.54544 10.1882 1.93597L15.8451 7.59282L10.1882 13.2497C9.79769 13.6402 9.79769 14.2734 10.1882 14.6639C10.5787 15.0544 11.2119 15.0544 11.6024 14.6639L17.9664 8.29993ZM0.259277 8.59282L17.2593 8.59282L17.2593 6.59282L0.259277 6.59282L0.259277 8.59282Z" fill="white"/>
                                        </svg>',
                'target'  => '_blank',
                'text'    => $link_404['title'],
                'gap'   => 'big',
                'align_self'   => 'start',
            ] );
        }
        ?>
        </div>
    </div>
        <div class="error__copyright">
            <?php if ($copyright): ?>
                <p class="error__copyright-text"><?= $copyright ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer() ?>
