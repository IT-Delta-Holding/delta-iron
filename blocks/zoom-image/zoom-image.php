<?php

/**
 * Zoom Image Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during backend preview render.
 * @param int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param array $context The context provided to the block by the post or it's parent block.
 */


if (isset($block['data']['preview_image_zoom_image'])) {
    $previewImage = $block['data']['preview_image_zoom_image'];
    echo "<img src='$previewImage' style='width:100%; height:auto;' />";

} else {

    $content = get_field('content');
    if ($content) {
        get_template_part('./components/zoom-image/zoom-image', null, [
            'title' => $content['title'] ?? '',
            'image' => $content['image'] ?? '',
            'lamela_1' => $content['lamela_1'] ?? '',
            'lamela_2' => $content['lamela_2'] ?? '',
            'lamela_3' => $content['lamela_3'] ?? '',
            'lamela_4' => $content['lamela_4'] ?? '',
            'pdf_button' => $content['pdf_button'] ?? '',
        ]);
    }
}


