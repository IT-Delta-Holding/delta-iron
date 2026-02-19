<?php /* Template Name: Homepage */ ?>

<?php
wp_enqueue_script('delta-page-homepage', get_template_directory_uri() . '/dist/js/page-homepage.js', array(), wp_get_theme()->get('Version'), true);
wp_enqueue_style('delta-page-homepage', get_template_directory_uri() . '/dist/css/page-homepage.css', array(),wp_get_theme()->get('Version'));
?>

<?php get_header() ?>

<?php
$animated_img = get_field ('animation_logo','option');
$delta_iron_letters = get_field ('delta_iron_animation_letters','option');
$novi_sad_letters = get_field ('novi_sad_animation_letters','option');
?>

<div class="default">
    <div class="homepage-animation-container" id="homepage-animation-container" style="display:none;">
        <div class="homepage-animation-container__content">
            <div class="homepage-animation-container__content--logo">
                <img src="<?= $animated_img['url'] ?>" class="delta-iron-animation-logo">
                <div class="delta-iron-animation-logo--div">
                <img src="<?= $delta_iron_letters['url'] ?>" class="delta-iron-animation-logo--div-letters-1">
                </div>

                <div class="delta-iron-animation-logo--div-2">
                <img src="<?= $novi_sad_letters['url'] ?>" class="delta-iron-animation-logo--div-2-letters-2">
                </div>
            </div>
        </div>
    </div>
    <?= the_content(); ?>
</div>

<?php
$home_animation = get_field('home_animation');

if ($home_animation) {
    get_template_part('./components/home-animation/home-animation', null, [

    ]);
}

//$hero = get_field('hero');
//
//if ($hero) {
//    get_template_part('./components/hero/hero', null, [
//        'tagline' => $hero['tagline'] ?? '',
//        'title' => $hero['title'] ?? '',
//        'background_type' => $hero['background_type'] ?? '',
//        'hero_image_position' => $hero['hero_image_position'] ?? '',
//        'image' => $hero['image'] ?? '',
//        'video' => $hero['video'] ?? '',
//        'pdf_button_link' => $hero['pdf_button_link'] ?? '',
//        'pdf_button_img' => $hero['pdf_button_img'] ?? '',
//        'button_style' => $hero['button_style'] ?? '',
//        'button_link' => $hero['button_link'] ?? '',
//        'description_style' => $hero['description_style'] ?? '',
//        'description_paragraphs_one' => $hero['description_paragraphs_one'] ?? '',
//        'description_paragraphs_two' => $hero['description_paragraphs_two'] ?? '',
//        'full_gradient' => $hero['full_gradient'] ?? '',
//    ]);
//}

//$post_slider = get_field('posts_slider');
//
//if ($post_slider) {
//    get_template_part('./components/slider-posts/slider', 'posts', [
//        'background' => $post_slider['background'] ?? '',
//        'background_image' => $post_slider['background_image'] ?? '',
//        'text_color' => $post_slider['text_color'] ?? '',
//        'title' => $post_slider['title'] ?? '',
//        'subtitle' => $post_slider['subtitle'] ?? '',
//        'flippable' => $post_slider['flippable'] ?? '',
//        'cards' => $post_slider['cards'] ?? '',
//        'cta' => $post_slider['cta'] ?? ''
//    ]);
//}

//$groups_slider = get_field('groups_slider');
//
//if ($groups_slider) {
//    get_template_part('./components/slider-groups/slider', 'groups', [
//        'title' => $groups_slider['title'] ?? '',
//        'paragraph' => $groups_slider['paragraph'] ?? '',
//        'groups' => $groups_slider['groups'] ?? '',
//        'link' => $groups_slider['link'] ?? '',
//    ]);
//}
//
//$socials = get_field('socials');
//
//if ($socials) {
//    get_template_part('./components/socials/socials', null, [
//        'title' => $socials['title'] ?? '',
//        'paragraph' => $socials['paragraph'] ?? '',
//    ]);
//}

//$stats = get_field('stats');
//
//if ($stats) {
//    get_template_part('./components/stats-extended/stats', 'extended', [
//        'background_image' => $stats['background_image'] ?? '',
//        'title' => $stats['title'] ?? '',
//        'paragraphs' => $stats['paragraphs'] ?? '',
//        'link' => $stats['link'] ?? '',
//        'pages' => $stats['pages'] ?? '',
//        'stats_title' => $stats['stats_title'] ?? '',
//        'year' => $stats['year'] ?? '',
//    ]);
//}
//
//$brands_slider = get_field('brands_slider');
//
//if ($brands_slider) {
//    get_template_part('./components/slider-brands/slider', 'brands', [
//        'title' => $brands_slider['title'] ?? '',
//        'link' => $brands_slider['link'] ?? '',
//    ]);
//}

//$season = get_field('season');
//
//if ($season) {
//    get_template_part('./components/slider-season/slider', 'season', [
//        'season' => $season['season'] ?? '',
//        'season_page' => $season['season_page'] ?? '',
//    ]);
//}
$contact_form_footer = get_field( 'contact_form_footer', 'option' );
if ( $contact_form_footer) {
    get_template_part( './components/contact-form-footer/contact-form-footer', null, $contact_form_footer );
}
?>

<?php get_footer() ?>
