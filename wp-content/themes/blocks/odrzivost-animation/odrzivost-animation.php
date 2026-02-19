<?php
/**
 * Odrzivost Animation Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during backend preview render.
 * @param int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param array $context The context provided to the block by the post or it's parent block.
 */



if (isset($block['data']['preview_image_odrzivost_animation'])) {
    $previewImage = $block['data']['preview_image_odrzivost_animation'];
    echo "<img src='$previewImage' style='width:100%; height:auto;' />";

} else {

    $content = get_field('content');
    if ($content) {
        get_template_part('./components/odrzivost-animation/odrzivost-animation', null, [
            'bg_image' => $content['bg_image'] ?? '',
            'text' => $content['text'] ?? '',
            'solarni_omotac_image' => $content['solarni_omotac_image'] ?? '',
            'solarni_omotac_title' => $content['solarni_omotac_title'] ?? '',
            'solarni_omotac_text' => $content['solarni_omotac_text'] ?? '',
            'smart_sistemi_image' => $content['smart_sistemi_image'] ?? '',
            'smart_sistemi_title' => $content['smart_sistemi_title'] ?? '',
            'smart_sistemi_text' => $content['smart_sistemi_text'] ?? '',
            'zeleni_parking_image' => $content['zeleni_parking_image'] ?? '',
            'zeleni_parking_title' => $content['zeleni_parking_title'] ?? '',
            'zeleni_parking_text' => $content['zeleni_parking_text'] ?? '',
            'geotermalne_sonde_image' => $content['geotermalne_sonde_image'] ?? '',
            'geotermalne_sonde_title' => $content['geotermalne_sonde_title'] ?? '',
            'geotermalne_sonde_text' => $content['geotermalne_sonde_text'] ?? '',
            'reciklirani_materijali_image' => $content['reciklirani_materijali_image'] ?? '',
            'reciklirani_materijali_title' => $content['reciklirani_materijali_title'] ?? '',
            'reciklirani_materijali_text' => $content['reciklirani_materijali_text'] ?? '',
        ]);
    }
}

?>

<?php
