<?php

function news_filter_ajax()
{
    if (!isset($_POST['nonce']) || !wp_verify_nonce(sanitize_key($_POST['nonce']), 'ajax_nonce')) {
        wp_send_json_error(__('Invalid request', 'custom-blocks'), 500);
    }
    $paged = $_POST['paged'] ?? 1;


    $posts_args = array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'post_status' => 'publish',
        'paged' => $paged
    );

    $query = new WP_Query($posts_args);

    if (empty($query->posts)) {
        wp_send_json_error(__('No results', 'custom-blocks'), 404);
    }

    $formatted_data = [];
    foreach ($query->posts as $item) {
        $categories = get_the_category($item->ID);
        $authors = get_field('author', $item->ID);
        foreach ($authors as $author) {
            $author_img = get_the_post_thumbnail_url($author->ID);
            $author_name = get_the_title($author->ID);
        }

        $formatted_data[] = [
            'title' => get_the_title($item->ID),
            'link' => get_the_permalink($item->ID),
            'image' => get_the_post_thumbnail_url($item->ID),
            'alt' => get_post_meta(get_post_thumbnail_id($item->ID), '_wp_attachment_image_alt', true),
            'description' => get_field('short_description', $item->ID),
            'date' => get_the_date('d.m.Y', $item->ID),
            'categories' => $categories ?? '',
            'author_img' => $author_img ?? '',
            'author_name' => $author_name ?? '',
        ];
    }

    wp_reset_postdata();
    ob_start();
    echo theme_paginate_links($query, ['current' => $paged]);
    $pagination = ob_get_clean();
    wp_send_json_success(['data' => $formatted_data, 'pagination' => $pagination, 'args' => $posts_args]);
}

add_action('wp_ajax_news_filter_ajax', 'news_filter_ajax');
add_action('wp_ajax_nopriv_news_filter_ajax', 'news_filter_ajax');
