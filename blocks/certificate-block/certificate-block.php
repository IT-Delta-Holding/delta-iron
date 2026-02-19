<?php
/**
 * Certificate Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during backend preview render.
 * @param int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param array $context The context provided to the block by the post or it's parent block.
 */



if (isset($block['data']['preview_image_certificate_block'])) {
    $previewImage = $block['data']['preview_image_certificate_block'];
    echo "<img src='$previewImage' style='width:100%; height:auto;' />";

} else {

    $content = get_field('content');
    if ($content) {
        get_template_part('./components/certificate-block/certificate-block', null, [
            'image' => $content['image'] ?? '',
            'title' => $content['title'] ?? '',
            'text' => $content['text'] ?? '',
        ]);
    }
}

?>
