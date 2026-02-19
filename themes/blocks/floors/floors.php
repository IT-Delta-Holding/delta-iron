<?php
/**
 * Floors Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during backend preview render.
 * @param int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param array $context The context provided to the block by the post or it's parent block.
 */

if (isset($block['data']['preview_image_floors'])) {
    $previewImage = $block['data']['preview_image_floors'];
    echo "<img src='$previewImage' style='width:100%; height:auto;' />";

} else {

    $content = get_field('content');
    if ($content) {
        get_template_part('./components/floors/floors', null, [
            'text' => $content['text'] ?? '',
            'background_image' => $content['background_image'] ?? '',
            'floor' => $content['floor'] ?? '',
            'roof' => $content['roof'] ?? '',
            'atrijum' => $content['atrijum'] ?? '',
            'title_info_1' => $content['title_info_1'] ?? '',
            'info_1' => $content['info_1'] ?? '',
            'title_info_2' => $content['title_info_2'] ?? '',
            'info_2' => $content['info_2'] ?? '',
            'title_info_3' => $content['title_info_3'] ?? '',
            'info_3' => $content['info_3'] ?? '',
            'title_info_4' => $content['title_info_4'] ?? '',
            'info_4' => $content['info_4'] ?? '',
            'lamela_1' => $content['lamela_1'] ?? '',
            'lamela_2' => $content['lamela_2'] ?? '',
            'lamela_3' => $content['lamela_3'] ?? '',
            'lamela_4' => $content['lamela_4'] ?? '',
        ]);
    }

}
?>