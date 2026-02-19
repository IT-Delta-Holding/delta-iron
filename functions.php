<?php


wp_enqueue_script('delta-header', get_template_directory_uri() . '/dist/js/header.js', array('jquery'), wp_get_theme()->get('Version'), true);
wp_localize_script(
    'delta-header',
    'wp_ajax',
    [
        'nonce'    => wp_create_nonce( 'ajax_nonce' ),
        'ajax_url' => admin_url( 'admin-ajax.php' ),
    ]
);
wp_enqueue_script( 'delta-header' );

wp_enqueue_script('delta-footer', get_template_directory_uri() . '/dist/js/footer.js', array('jquery'), wp_get_theme()->get('Version'), true);
wp_localize_script(
    'delta-footer',
    'wp_ajax',
    [
        'nonce'    => wp_create_nonce( 'ajax_nonce' ),
        'ajax_url' => admin_url( 'admin-ajax.php' ),
    ]
);
wp_enqueue_script( 'delta-footer' );



function enqueue_default_styles()
{
    if (basename(get_page_template()) === 'page.php' && !is_404()) {
        wp_enqueue_script('delta-acf-blocks', get_template_directory_uri() . '/dist/js/acf-blocks.js', array(), wp_get_theme()->get('Version'), true);
        wp_enqueue_style('delta-acf-blocks', get_template_directory_uri() . '/dist/css/acf-blocks.css', array(), wp_get_theme()->get('Version'));
    }
}

add_action('wp_enqueue_scripts', 'enqueue_default_styles');

/*
 * Dequeue Block Styles
 */

function smartwp_remove_wp_block_library_css()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-blocks-style'); // Remove WooCommerce block CSS
    wp_dequeue_style('global-styles');
}

add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100);

function enqueue_editor_styles()
{
    wp_enqueue_script('delta-acf-blocks', get_template_directory_uri() . '/dist/js/acf-blocks.js', array(), wp_get_theme()->get('Version'), true);
    wp_enqueue_style('delta-acf-blocks', get_template_directory_uri() . '/dist/css/acf-blocks.css', array(), wp_get_theme()->get('Version'));
}

add_action('enqueue_block_editor_assets', 'enqueue_editor_styles');

/*
 * Include /inc folder
 */

require get_template_directory() . '/inc/search-ajax.php';

/* ACF Options Section */

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Header Settings',
        'menu_title' => 'Header',
        'parent_slug' => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Footer Settings',
        'menu_title' => 'Footer',
        'parent_slug' => 'theme-general-settings',
    ));
}

/*
 * Add excerpt support
 */

add_post_type_support('page', 'excerpt');

/*
 * CPT UI show featured image option
 */

add_theme_support('post-thumbnails');

/*
 *  Register Custom Menus
 */

function register_menus()
{
    register_nav_menus(
        array(
            'header' => 'Header Menu',
            'footer_column_one' => 'Footer Column One',
            'footer_column_two' => 'Footer Column Two',
            'footer_column_three' => 'Footer Column Three',
        )
    );
}

add_action('init', 'register_menus');


add_action('acf/init', 'register_acf_blocks');
function register_acf_blocks()
{
    register_block_type(__DIR__ . '/blocks/hero', array(
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'preview_image_hero' => get_template_directory_uri() . '/blocks/hero/hero.jpg'
                )
            )
        )
    ));

    register_block_type(__DIR__ . '/blocks/hero-text', array(
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'preview_image_hero_text' => get_template_directory_uri() . '/blocks/hero-text/hero-text.jpg'
                )
            )
        )
    ));

    register_block_type(__DIR__ . '/blocks/animation-hero', array(
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'preview_image_animation_hero' => get_template_directory_uri() . '/blocks/animation-hero/animation-hero.jpg'
                )
            )
        )
    ));


    register_block_type(__DIR__ . '/blocks/slider-season', array(
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'preview_image_slider_season' => get_template_directory_uri() . '/blocks/slider-season/slider-season.jpg'
                )
            )
        )
    ));


     register_block_type(__DIR__ . '/blocks/career-form', array(
         'example' => array(
             'attributes' => array(
                 'mode' => 'preview',
                 'data' => array(
                     'preview_image_career_form' => get_template_directory_uri() . '/blocks/career-form/career-form.jpg'
                 )
             )
         )
     ));

    register_block_type(__DIR__ . '/blocks/text', array(
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'preview_image_text' => get_template_directory_uri() . '/blocks/text/text.jpg'
                )
            )
        )
    ));


    register_block_type(__DIR__ . '/blocks/brands-locations', array(
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'preview_image_brands_locations' => get_template_directory_uri() . '/blocks/brands-locations/brands-locations.jpg'
                )
            )
        )
    ));




    register_block_type(__DIR__ . '/blocks/wysiwyg-editor', array(
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'preview_image_wysiwyg_editor' => get_template_directory_uri() . '/blocks/wysiwyg-editor/wysiwyg-editor.jpg'
                )
            )
        )
    ));



    register_block_type(__DIR__ . '/blocks/career-block-text', array(
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'preview_image_career-block-text' => get_template_directory_uri() . '/blocks/career-block-text/career-block-text.jpg'
                )
            )
        )
    ));

    register_block_type(__DIR__ . '/blocks/contact-form', array(
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'preview_image_contact-form' => get_template_directory_uri() . '/blocks/contact-form/contact-form.jpg'
                )
            )
        )
    ));

    register_block_type(__DIR__ . '/blocks/two-cards-dmd', array(
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'preview_image_two_cards_dmd' => get_template_directory_uri() . '/blocks/two-cards-dmd/two-cards-dmd.jpg'
                )
            )
        )
    ));


    register_block_type(__DIR__ . '/blocks/scroll-images', array(
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'preview_image_scroll-images' => get_template_directory_uri() . '/blocks/scroll-images/scroll-images.jpg'
                )
            )
        )
    ));

    register_block_type(__DIR__ . '/blocks/floors', array(
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'preview_image_floors' => get_template_directory_uri() . '/blocks/floors/floors.jpg'
                )
            )
        )
    ));

    register_block_type(__DIR__ . '/blocks/hover-images', array(
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'preview_image_hover_images' => get_template_directory_uri() . '/blocks/hover-images/hover-images.jpg'
                )
            )
        )
    ));

    register_block_type(__DIR__ . '/blocks/atrijum-animation', array(
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'preview_image_atrijum_animation' => get_template_directory_uri() . '/blocks/atrijum-animation/atrijum-animation.jpg'
                )
            )
        )
    ));

    register_block_type(__DIR__ . '/blocks/odrzivost', array(
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'preview_image_odrzivost' => get_template_directory_uri() . '/blocks/odrzivost/odrzivost.jpg'
                )
            )
        )
    ));

    register_block_type(__DIR__ . '/blocks/centralni-atrijum', array(
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'preview_image_centralni_atrijum' => get_template_directory_uri() . '/blocks/centralni-atrijum/centralni-atrijum.jpg'
                )
            )
        )
    ));

    register_block_type(__DIR__ . '/blocks/zoom-image', array(
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'preview_image_zoom_image' => get_template_directory_uri() . '/blocks/zoom-image/zoom-image.jpg'
                )
            )
        )
    ));

    register_block_type(__DIR__ . '/blocks/locations', array(
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'preview_image_locations' => get_template_directory_uri() . '/blocks/locations/locations.jpg'
                )
            )
        )
    ));

    register_block_type(__DIR__ . '/blocks/text-image-button', array(
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'preview_image_text_image_button' => get_template_directory_uri() . '/blocks/text-image-button/text-image-button.jpg'
                )
            )
        )
    ));

    register_block_type(__DIR__ . '/blocks/odrzivost-animation', array(
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'preview_image_odrzivost_animation' => get_template_directory_uri() . '/blocks/odrzivost-animation/odrzivost-animation.jpg'
                )
            )
        )
    ));

     register_block_type(__DIR__ . '/blocks/poslovni-prostor', array(
         'example' => array(
             'attributes' => array(
                 'mode' => 'preview',
                 'data' => array(
                     'preview_image_poslovni_prostor' => get_template_directory_uri() . '/blocks/poslovni-prostor/poslovni-prostor.jpg'
                 )
             )
         )
     ));

    register_block_type(__DIR__ . '/blocks/certificate-block', array(
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'preview_image_certificate_block' => get_template_directory_uri() . '/blocks/certificate-block/certificate-block.jpg'
                )
            )
        )
    ));

    register_block_type(__DIR__ . '/blocks/zakupci', array(
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'preview_zakupci' => get_template_directory_uri() . '/blocks/zakupci/zakupci.jpg'
                )
            )
        )
    ));
}

/*
 * Remove Core WP Blocks
 */

function wpse_allowed_block_types($allowed_block_types, $post)
{
    if ($post->post_type == 'zaposleni') {
        return array(
            'core/paragraph',
            'core/heading',
            'acf/hero'
        );
    }
    elseif ($post->post_type == 'serije') {
        return array(
            'core/paragraph',
        );
    } elseif ($post->post_type == 'page') {
        return array(
            'core/paragraph',
            'core/heading',
            'core/columns',
            'core/list',
            'core/list-item',
            'core/image',
            'acf/hero',
            'acf/hero-text',
            'acf/slider-season',
             'acf/career-form', 
            'acf/text',
            'acf/brands',
            'acf/wysiwyg-editor',
            'acf/animation-hero',
            'acf/timeline',
            'acf/scroll-images',
            'acf/floors',
            'acf/hover-images',
            'acf/atrijum-animation',
            'acf/odrzivost',
            'acf/centralni-atrijum',
            'acf/zoom-image',
            'acf/locations',
            'acf/text-image-button',
            'acf/odrzivost-animation',
            'acf/poslovni-prostor',
            'acf/certificate-block',
            'acf/zakupci',
        );
    } // Allow defaults in all other post types
    else {
        return $allowed_block_types;
    }
}

add_filter('allowed_block_types', 'wpse_allowed_block_types', 10, 2);


/*  AddToAny Instagram */
function addtoany_add_share_services($services)
{
    $services['example_share_service'] = array(
        'name' => 'Instagram',
        'icon_url' => site_url('/wp-content/plugins/add-to-any/icons/instagram.svg'),
        'icon_width' => 16,
        'icon_height' => 16,
        'href' => 'https://www.instagram.com/',
    );
    return $services;
}

add_filter('A2A_SHARE_SAVE_services', 'addtoany_add_share_services', 10, 1);


/*
 *  Custom Pagination for Blog
 */

/**
 * @param        $wp_query
 * @param string $args
 *
 * @return array|mixed|void
 */
function theme_paginate_links($wp_query, $args = [])
{
    global $wp_rewrite;

    $prev_button_label = get_field('pagination_prev_button_label', 'option');
    $next_button_label = get_field('pagination_next_button_label', 'option');

    // Setting up default values based on the current URL.
    $pagenum_link = html_entity_decode(get_pagenum_link());
    $url_parts = explode('?', $pagenum_link);

    // Get max pages and current page out of the current query, if available.
    $total = isset($wp_query->max_num_pages) ? $wp_query->max_num_pages : 1;
    $current = get_query_var('paged') ? (int)get_query_var('paged') : 1;

    // Append the format placeholder to the base URL.
    $pagenum_link = trailingslashit($url_parts[0]) . '%_%';

    // URL base depends on permalink settings.
    $format = $wp_rewrite->using_index_permalinks() && !strpos($pagenum_link, 'index.php') ? 'index.php/' : '';
    $format .= $wp_rewrite->using_permalinks() ? user_trailingslashit($wp_rewrite->pagination_base . '/%#%', 'paged') : '?paged=%#%';

    $defaults = [
        'base' => $pagenum_link,
        // http://example.com/all_posts.php%_% : %_% is replaced by format (below).
        'format' => $format,
        // ?page=%#% : %#% is replaced by the page number.
        'total' => $total,
        'current' => $current,
        'aria_current' => 'page',
        'show_all' => false,
        'prev_next' => true,
        'prev_text' => __($prev_button_label ?? '<'),
        'next_text' => __($next_button_label ?? '>'),
        'end_size' => 1,
        'mid_size' => 2,
        'type' => 'plain',
        'add_args' => [],
        // Array of query args to add.
        'add_fragment' => '',
        'before_page_number' => '',
        'after_page_number' => '',
    ];

    $args = wp_parse_args($args, $defaults);

    // Merge additional query vars found in the original URL into 'add_args' array.
    if (isset($url_parts[1])) {
        // Find the format argument.
        $format = explode('?', str_replace('%_%', $args['format'], $args['base']));
        $format_query = isset($format[1]) ? $format[1] : '';
        wp_parse_str($format_query, $format_args);

        // Find the query args of the requested URL.
        wp_parse_str($url_parts[1], $url_query_args);

        // Remove the format argument from the array of query arguments, to avoid overwriting custom format.
        foreach ($format_args as $format_arg => $format_arg_value) {
            unset($url_query_args[$format_arg]);
        }
    }

    // Who knows what else people pass in $args.
    $total = (int)$args['total'];
    if ($total < 2) {
        return;
    }
    $current = (int)$args['current'];
    $end_size = (int)$args['end_size']; // Out of bounds? Make it the default.
    if ($end_size < 1) {
        $end_size = 1;
    }
    $mid_size = (int)$args['mid_size'];
    if ($mid_size < 0) {
        $mid_size = 2;
    }

    $page_links = [];
    $dots = false;

    if ($args['prev_next'] && $current && 1 < $current) :
        $link = str_replace('%_%', 2 == $current ? '' : $args['format'], $args['base']);
        $link = str_replace('%#%', $current - 1, $link);
        $link .= $args['add_fragment'];

        $page_links[] = sprintf(
            '<a class="prev page-numbers" href="%1$s" data-page="%3$s" rel="prev">%2$s</a>',
            /**
             * Filters the paginated links for the given archive pages.
             *
             * @param string $link The paginated link URL.
             *
             * @since 3.0.0
             *
             */
            esc_url(apply_filters('paginate_links', $link)),
            $args['prev_text'],
            $current - 1
        );
    endif;

    for ($n = 1; $n <= $total; $n++) :
        if ($n == $current) :
            $page_links[] = sprintf(
                '<span aria-current="%s" class="page-numbers current">%s</span>',
                esc_attr($args['aria_current']),
                $args['before_page_number'] . number_format_i18n($n) . $args['after_page_number']
            );

            $dots = true;
        else :
            if ($args['show_all'] || ($n <= $end_size || ($current && $n >= $current - $mid_size && $n <= $current + $mid_size) || $n > $total - $end_size)) :
                $link = str_replace('%_%', 1 == $n ? '' : $args['format'], $args['base']);
                $link = str_replace('%#%', $n, $link);
                $link .= $args['add_fragment'];

                $page_links[] = sprintf(
                    '<a class="page-numbers" href="%1$s" data-page="%3$s">%2$s</a>',
                    /** This filter is documented in wp-includes/general-template.php */
                    esc_url(apply_filters('paginate_links', $link)),
                    $args['before_page_number'] . number_format_i18n($n) . $args['after_page_number'],
                    $n
                );

                $dots = true;
            elseif ($dots && !$args['show_all']) :
                $page_links[] = '<span class="page-numbers dots">' . __('&hellip;') . '</span>';

                $dots = false;
            endif;
        endif;
    endfor;

    if ($args['prev_next'] && $current && $current < $total) :
        $link = str_replace('%_%', $args['format'], $args['base']);
        $link = str_replace('%#%', $current + 1, $link);
        $link .= $args['add_fragment'];

        $page_links[] = sprintf(
            '<a class="next page-numbers" href="%1$s" data-page="%3$s" rel="next">%2$s</a>',
            /** This filter is documented in wp-includes/general-template.php */
            esc_url(apply_filters('paginate_links', $link)),
            $args['next_text'],
            $current + 1
        );
    endif;

    /**
     * Filters the HTML output of paginated links for archives.
     *
     * @param string $r HTML output.
     * @param array $args An array of arguments. See paginate_links()
     *                     for information on accepted arguments.
     *
     * @since 5.7.0
     *
     */
    return apply_filters('paginate_links_output', implode("\n", $page_links), $args);
}

