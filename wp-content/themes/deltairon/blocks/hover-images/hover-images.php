<?php
/**
 * Hover Images Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during backend preview render.
 * @param int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param array $context The context provided to the block by the post or it's parent block.
 */

if (isset($block['data']['preview_image_hover_images'])) {
    $previewImage = $block['data']['preview_image_hover_images'];
    echo "<img src='$previewImage' style='width:100%; height:auto;' />";

} else {

    $content = get_field('content');
    if ($content) {
        get_template_part('./components/hover-images/hover-images', null, [
            'title' => $content['title'] ?? '',
            'text' => $content['text'] ?? '',
            'link' => $content['link'] ?? '',
            'image_1' => $content['image_1'] ?? '',
            'image_2' => $content['image_2'] ?? '',
            'image_number_1' => $content['image_number_1'] ?? '',
            'image_number_2' => $content['image_number_2'] ?? '',
            'image_text_1' => $content['image_text_1'] ?? '',
            'image_text_2' => $content['image_text_2'] ?? '',
        ]);
    }

}
?>