<?php
/**
 * Locations Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during backend preview render.
 * @param int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param array $context The context provided to the block by the post or it's parent block.
 */


if (isset($block['data']['preview_image_locations'])) {
    $previewImage = $block['data']['preview_image_locations'];
    echo "<img src='$previewImage' style='width:100%; height:auto;' />";

} else {

    $content = get_field('content');
    if ($content) {
        get_template_part('./components/locations/locations', null, [
            'title' => $content['title'] ?? '',
            'text' => $content['text'] ?? '',
            'link' => $content['link'] ?? '',
            'image' => $content['image'] ?? '',
            'red_map' => $content['red_map'] ?? '',
            'yellow_map' => $content['yellow_map'] ?? '',
            'blue_map' => $content['blue_map'] ?? '',
            'light_blue_image' => $content['light_blue_image'] ?? '',
            'centar_grada_label' => $content['centar_grada_label'] ?? '',
            'tc_big_label' => $content['tc_big_label'] ?? '',
            'autoput_label' => $content['autoput_label'] ?? '',
            'autobuska_stanica_label' => $content['autobuska_stanica_label'] ?? '',
            'zeleznicka_stanica_label' => $content['zeleznicka_stanica_label'] ?? '',
            'novosadski_sajam_label' => $content['novosadski_sajam_label'] ?? '',
            'srpsko_narodno_pozoriste_label' => $content['srpsko_narodno_pozoriste_label'] ?? '',
            'spens_label' => $content['spens_label'] ?? '',
            'petrovaradinska_tvrdjava_label' => $content['petrovaradinska_tvrdjava_label'] ?? '',
            'naucno_tehnoloski_park_label' => $content['naucno_tehnoloski_park_label'] ?? '',
            'tc_promenada_label' => $content['tc_promenada_label'] ?? '',

        ]);
    }
}
?>
