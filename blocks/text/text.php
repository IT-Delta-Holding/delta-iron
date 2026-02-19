<?php
/**
 * Hero Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during backend preview render.
 * @param int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param array $context The context provided to the block by the post or it's parent block.
 */

if (isset($block['data']['preview_image_text'])) {
    $previewImage = $block['data']['preview_image_text'];
    echo "<img src='$previewImage' style='width:100%; height:auto;' />";

} else {
    $allowed_blocks = array('core/heading', 'core/paragraph', 'core/list', 'core/columns','core/image');
    ?>
        <div class="text">
            <div class="container">
                <InnerBlocks allowedBlocks="<?= esc_attr(wp_json_encode($allowed_blocks)) ?>"/>
            </div>
        </div>
    <?php
}
?>

