<?php
/**
 * Atrijum Animation Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during backend preview render.
 * @param int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param array $context The context provided to the block by the post or it's parent block.
 */

if (isset($block['data']['preview_image_atrijum_animation'])) {
    $previewImage = $block['data']['preview_image_atrijum_animation'];
    echo "<img src='$previewImage' style='width:100%; height:auto;' />";

} else {

    $content = get_field('content');
    if ($content) {
        get_template_part('./components/atrijum-animation/atrijum-animation', null, [
            'main_image' => $content['main_image'] ?? '',
            'info_title_1' => $content['info_title_1'] ?? '',
            'info_1' => $content['info_1'] ?? '',
            'info_title_2' => $content['info_title_2'] ?? '',
            'info_2' => $content['info_2'] ?? '',
            'info_title_3' => $content['info_title_3'] ?? '',
            'info_3' => $content['info_3'] ?? '',
            'link' => $content['link'] ?? '',

        ]);
    }

}
?>

