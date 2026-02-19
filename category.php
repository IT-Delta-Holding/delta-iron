<?php /* Template Name: Category */ ?>

<?php get_header(); ?>

<?php
    wp_enqueue_script( 'delta-category', get_template_directory_uri() . '/dist/js/category.js', array(), wp_get_theme()->get( 'Version' ), true );
    wp_enqueue_style( 'delta-category', get_template_directory_uri() . '/dist/css/category.css', array(), wp_get_theme()->get( 'Version' ) );
?>

<?php
    $term = get_queried_object();
    $hero = get_field( 'hero', $term );

    $all_posts_label = get_field( 'all_posts_label', 'option' );

    if ( isset( $wp_query->tax_query->queries ) ) {
        $taxonomy_slug = $wp_query->tax_query->queries[0]['taxonomy'];
        $term_slug     = $wp_query->tax_query->queries[0]['terms'][0];
        $term          = get_term_by( 'slug', $term_slug, $taxonomy_slug );
        $term_name     = $term->name;
        $category_id   = get_cat_ID( $term->name );

    }
?>

<?php
    if ( $hero ) {
        get_template_part( './components/hero/hero', null, [
            'tagline'                    => $hero['tagline'] ?? '',
            'title'                      => $hero['title'] ?? '',
            'background_type'            => $hero['background_type'] ?? '',
            'hero_image_position' => $hero['hero_image_position'] ?? '',
            'image'                      => $hero['image'] ?? '',
            'video'                      => $hero['video'] ?? '',
            'pdf_button_link' => $hero['pdf_button_link'] ?? '',
            'button_style'               => $hero['button_style'] ?? '',
            'button_link'                => $hero['button_link'] ?? '',
            'description_style'          => $hero['description_style'] ?? '',
            'description_paragraphs_one' => $hero['description_paragraphs_one'] ?? '',
            'description_paragraphs_two' => $hero['description_paragraphs_two'] ?? '',
            'full_gradient' => $hero['full_gradient'] ?? '',
        ] );
    }
?>
<div class="posts">
    <div class="container">
        <?php
            $args = array(
                'hide_empty' => true,
                'meta_key' => 'order',
                'orderby' => 'order',
                'order' => 'ASC',

            );
//            $categories = get_categories($args);
            $categories = get_categories();

            $counter  = 0;
            $firstCat = '';
        ?>
        <div class="posts__filters">
            <?php foreach ( $categories as $category ): ?>
                <?php
                if ( $counter === 0 ) {
                    $firstCat = $category->slug;
                }
                ?>
                <?php if ( $category->name && $category->slug ): ?>
                    <a class="posts__filter anim-link-item <?= isset( $term ) && $term->name === $category->name ? 'active' : '' ?> js-brands-filter"
                       href="<?= get_category_link( get_cat_ID( $category->name ) ) ?>"
                       data-slug="<?= $category->slug ?>">
                        <?= $category->name ?>
                    </a>
                <?php endif; ?>
                <?php $counter ++; ?>
            <?php endforeach; ?>
            <a class="posts__filter anim-link-item <?= isset( $term ) && isset( $term->post_name ) && !isset( $term->name ) ? 'active' : '' ?>"
               href="<?php echo home_url() . "/vesti"; ?>"
               data-slug="">
                <?= $all_posts_label ?: 'sve vesti' ?>
            </a>
        </div>
        <?php
            $paged = ( get_query_var( 'paged' ) ) ? intval( get_query_var( 'paged' ) ) : 1;

            $query_args = array(
                'post_type'      => 'post',
                'post_status'    => 'publish',
                'posts_per_page' => get_option( 'posts_per_page' ),
                'cat'            => isset( $category_id ) ? $category_id : '',
                'paged'          => $paged,
            );

            $query = new WP_Query( $query_args );
        ?>

        <?php if ( $query->have_posts() ): ?>
            <div class="posts__list">
                <?php while ( $query->have_posts() ): $query->the_post(); ?>
                    <div class="posts__item">
                        <?php
                            $image_content = [
                                'url' => get_the_post_thumbnail_url( get_the_ID(), 'medium-large' ),
                                'alt' => get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true )
                            ];

                            $creation_date = get_the_date( 'd.m.Y', $query->ID );
                            $category =  get_the_category($query->ID);

                            get_template_part( './components/card-blue/card', 'blue', [
                                'image'         => $image_content,
                                'title'         => get_the_title(),
                                'link'          => get_the_permalink(),
                                'flippable'     => false,
                                'excerpt'       => get_the_excerpt(),
                                'creation_date' => $creation_date,
                                'category' => $category
                            ] );

                        ?>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="posts__pagination">
                <?= theme_paginate_links( $query ); ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</div>

<?php
    $stvarajmo_zajedno = get_field( 'stvarajmo_zajedno', 'option' );
    if ( $stvarajmo_zajedno && isset( $stvarajmo_zajedno['content'] ) && $stvarajmo_zajedno['content'] ) {
        $stvarajmo_zajedno['content']['inverse_colors'] = true;
        get_template_part( './components/image-text/image-text', null, $stvarajmo_zajedno['content'] );
    }
?>

<?php get_footer(); ?>
