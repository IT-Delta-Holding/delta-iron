<?php /* Template Name: About us */ ?>

<?php
wp_enqueue_script('delta-page-about-us', get_template_directory_uri() . '/dist/js/page-about-us.js', array(), wp_get_theme()->get('Version'), true);
wp_enqueue_style('delta-page-about-us', get_template_directory_uri() . '/dist/css/page-about-us.css', array(),wp_get_theme()->get('Version'));
?>

<?php get_header('coming-soon') ?>

<div class="default">
    <?= the_content(); ?>
</div>

<?php

$coming_soon = get_field('coming_soon');

if ($coming_soon) {
    get_template_part('./components/coming-soon/coming-soon', null, [
        'title' => $coming_soon['title'] ?? '',
        'bg_image' => $coming_soon['bg_image'] ?? '',
        'contact_bg_image' => $coming_soon['contact_bg_image'] ?? '',
        'text' => $coming_soon['text'] ?? '',
    ]);
}


?>


<?php get_footer('coming-soon') ?>