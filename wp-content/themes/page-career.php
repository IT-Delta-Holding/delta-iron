<?php /* Template Name: Career */ ?>

<?php
wp_enqueue_script('delta-page-career', get_template_directory_uri() . '/dist/js/page-career.js', array(), wp_get_theme()->get('Version'), true);
wp_enqueue_style('delta-page-career', get_template_directory_uri() . '/dist/css/page-career.css', array(),wp_get_theme()->get('Version'));
?>

<?php get_header() ?>

    <div class="default">
        <?= the_content(); ?>
    </div>

<?php


$hero = get_field('hero');

if ($hero) {
    get_template_part('./components/hero/hero', null, [
        'tagline' => $hero['tagline'] ?? '',
        'title' => $hero['title'] ?? '',
        'background_type' => $hero['background_type'] ?? '',
        'hero_image_position' => $hero['hero_image_position'] ?? '',
        'image' => $hero['image'] ?? '',
        'video' => $hero['video'] ?? '',
        'button_style' => $hero['button_style'] ?? '',
        'button_link' => $hero['button_link'] ?? '',
        'description_style' => $hero['description_style'] ?? '',
        'description_paragraphs_one' => $hero['description_paragraphs_one'] ?? '',
        'description_paragraphs_two' => $hero['description_paragraphs_two'] ?? '',
        'full_gradient' => $hero['full_gradient'] ?? '',
    ]);
}






    get_template_part('./components/career-form/career-form');


$novosti = get_field( 'novosti', 'option' );
if ( $novosti && isset( $novosti['content'] ) && $novosti['content'] ) {
    get_template_part( './components/slider-posts/slider-posts', null, $novosti['content'] );
}

?>


<?php get_footer() ?>