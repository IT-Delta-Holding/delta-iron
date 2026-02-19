<?php
/**
 * Hero Text Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during backend preview render.
 * @param int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param array $context The context provided to the block by the post or it's parent block.
 */

if (isset($block['data']['preview_image_hero_text'])) {
    $previewImage = $block['data']['preview_image_hero_text'];
    echo "<img src='$previewImage' style='width:100%; height:auto;' />";

} else {

    $hero = get_field('content');

    if ($hero) {
        get_template_part('./components/hero-text/hero-text', null, [
            'tagline' => $hero['tagline'] ?? '',
            'title' => $hero['title'] ?? '',
            'background_type' => $hero['background_type'] ?? '',
            'hero_image_position' => $hero['hero_image_position'] ?? '',
            'image' => $hero['image'] ?? '',
            'video' => $hero['video'] ?? '',
            'pdf_button_link' => $hero['pdf_button_link'] ?? '',
            'pdf_button_img' => $hero['pdf_button_img'] ?? '',
            'button_style' => $hero['button_style'] ?? '',
            'button_link' => $hero['button_link'] ?? '',
            'description_style' => $hero['description_style'] ?? '',
            'description_paragraphs_one' => $hero['description_paragraphs_one'] ?? '',
            'description_paragraphs_two' => $hero['description_paragraphs_two'] ?? '',
            'full_gradient' => $hero['full_gradient'] ?? '',
        ]);
    }
}
?>

