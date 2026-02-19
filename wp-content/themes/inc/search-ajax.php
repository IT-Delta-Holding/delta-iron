<?php

function post_filter_ajax()
{
    if (!isset($_POST['nonce']) || !wp_verify_nonce(sanitize_key($_POST['nonce']), 'ajax_nonce')) {
        wp_send_json_error(__('Invalid request', 'custom-blocks'), 500);
    }

    if (isset($_GET['wpml_lang'])) {
        do_action('wpml_switch_language', $_GET['wpml_lang']); // switch the content language
    }

    $searchString = $_POST['searchString'];

    $posts_args = array(
        'post_type' => array('page', 'post', 'zaposleni', 'galerija', 'serije'),
        'posts_per_page' => 6,
        'post_status' => 'publish',
        's' => $searchString,
    );

    $query = new WP_Query($posts_args);

    $formatted_data = [];
    foreach ($query->posts as $item) {
        $formatted_data[] = [
            'title' => get_the_title($item->ID),
            'link' => get_the_permalink($item->ID),
            'image' => get_the_post_thumbnail_url($item->ID, 'medium'),
            'alt' => get_post_meta(get_post_thumbnail_id($item->ID), '_wp_attachment_image_alt', true)
        ];
    }

    wp_reset_postdata();
    wp_send_json_success($formatted_data);
}

add_action('wp_ajax_post_filter_ajax', 'post_filter_ajax');
add_action('wp_ajax_nopriv_post_filter_ajax', 'post_filter_ajax');
