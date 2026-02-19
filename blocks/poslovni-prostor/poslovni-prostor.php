<?php
/**
 * Poslovni Prostor Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during backend preview render.
 * @param int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param array $context The context provided to the block by the post or it's parent block.
 */



if (isset($block['data']['preview_image_poslovni_prostor'])) {
    $previewImage = $block['data']['preview_image_poslovni_prostor'];
    echo "<img src='$previewImage' style='width:100%; height:auto;' />";

} else {

    $content = get_field('content');
    if ($content) {
        get_template_part('./components/poslovni-prostor/poslovni-prostor', null, [
            'title' => $content['title'] ?? '',
            'text' => $content['text'] ?? '',
            'image_1' => $content['image_1'] ?? '',
            'image_2' => $content['image_2'] ?? '',
            'number_1' => $content['number_1'] ?? '',
            'title_1' => $content['title_1'] ?? '',
            'text_1' => $content['text_1'] ?? '',
            'number_2' => $content['number_2'] ?? '',
            'title_2' => $content['title_2'] ?? '',
            'text_2' => $content['text_2'] ?? '',

        ]);
    }
}

?>

<?php
