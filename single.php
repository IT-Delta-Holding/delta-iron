<?php get_header() ?>

<?php
wp_enqueue_script('delta-single', get_template_directory_uri() . '/dist/js/single.js', array(), wp_get_theme()->get('Version'), true);
wp_enqueue_style('delta-single', get_template_directory_uri() . '/dist/css/single.css', array(),wp_get_theme()->get('Version'));
?>

<section class="hero" style="position: relative">
    <?php
    $single_post_hero_image = get_field('single_post_hero_image', 'option');
    $single_post_hero_mobile_image = get_field('single_post_hero_mobile_image', 'option');
    ?>
    <?php if ($single_post_hero_image): ?>
    <div class="post-hero_gradient"></div>
        <img class="hero__img"
             src="<?= $single_post_hero_image['url'] ?>"
             alt="<?= $single_post_hero_image['alt'] ?>">
    <?php endif; ?>
    <?php if ($single_post_hero_mobile_image): ?>
        <img class="hero__mobile-img"
             src="<?= $single_post_hero_mobile_image['url'] ?>"
             alt="<?= $single_post_hero_mobile_image['alt'] ?>">
    <?php endif; ?>
    <?php /*
        <div class="hero__gradient"></div>
    
        <div class="container">
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p class="hero__breadcrumb">', '</p>');
            }
            ?>
        </div>
    */?>
</section>
<div class="post">
    <?php
    $images = get_field('images');
    ?>
    <div class="container">
        <div class="post__gallery js-post-gallery pswp-gallery">
            <?php if ($images): ?>
                <?php foreach ($images as $image): ?>
                    <a class="post__gallery-item"
                       href="<?= $image['url'] ?>"
                       data-pswp-width="<?= $image['width'] ?>"
                       data-pswp-height="<?= $image['height'] ?>"
                       target="_blank">
                        <img class="post__gallery-item-img"
                             src="<?= $image['url'] ?>"
                             alt="<?= $image['alt'] ?>">
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="post__content">
            <div class="post__info">
                <p class="post__date"><?= get_the_date('d. M Y.') ?></p>
            </div>
            <h1 class="post__title h2"><?= the_title() ?></h1>
            <div class="post__content-text">
                <?php the_content(); ?>
            </div>
            <?php
            $posts_share_label = get_field('posts_share_label', 'option');
            $posts_related_posts_label = get_field('posts_related_posts_label', 'option');
            $share_on_socials = get_field('share_on_socials', 'option');
            ?>
            <?php if ($posts_share_label && shortcode_exists('addtoany')): ?>
                <div class="post__share">
                    <h2 class="post__share-title h3"><?= $posts_share_label ?></h2>
                    <?= do_shortcode('[addtoany]') ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="related-posts">
    <div class="container">
        <?php if ($posts_related_posts_label): ?>
            <h2 class="related-posts-title h2"><?= $posts_related_posts_label ?></h2>
        <?php endif; ?>
        <?php
        $query_args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 2,
            'orderby' => 'rand',
            'order' => 'DESC',
        );

        $query = new WP_Query($query_args);

//        print_r($query);
        ?>
        <?php if ($query->have_posts()): ?>
        <div class="related-posts__cards swiper js-related-posts-cards">
            <div class="swiper-wrapper">
                <?php while ($query->have_posts()): $query->the_post(); ?>
                <div class="swiper-slide">
<!--                <div class="related-posts__swiper-slide">-->
                    <?php
                    $image_content = [
                        'url' => get_the_post_thumbnail_url(),
                        'alt' => get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true)
                    ];

                    $creation_date = get_the_date('d. M Y.', $query->ID);
                    $category =  get_the_category($query->ID);


                    get_template_part('./components/card-blue/card', 'blue', [
                        'image' => $image_content,
                        'title' => get_the_title(),
                        'link' => get_the_permalink(),
                        'flippable' => false,
                        'excerpt' => get_the_excerpt(),
                        'creation_date' => $creation_date,
                        'category' => $category
                    ]);

                    ?>
                </div>
                <?php endwhile; ?>
            </div>
            </div>

            <div class="related-posts__navigation related-posts__navigation--mobile">
                <div class="swiper-button-prev js-related-posts-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="68" height="61" viewBox="0 0 68 61" fill="none">
                        <path d="M66 30.279L2 30.279L36.912 59L2 30.279L36.912 1.55794" stroke="#8B8B8B"
                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="swiper-pagination-related-posts-mobile">
                </div>
                <div class="swiper-button-next js-related-posts-next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="68" height="61" viewBox="0 0 68 61" fill="none">
                        <path d="M2 30.721L66 30.721L31.088 2L66 30.721L31.088 59.4421" stroke="#8B8B8B"
                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>



            <div class="related-posts__list">
                <?php while ($query->have_posts()): $query->the_post(); ?>
                    <div class="related-posts__item">
                        <?php
                        $image_content = [
                            'url' => get_the_post_thumbnail_url(),
                            'alt' => get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true)
                        ];

                        $creation_date = get_the_date('d. M Y.', $query->ID);
                        $category =  get_the_category($query->ID);


                        get_template_part('./components/card-blue/card', 'blue', [
                            'image' => $image_content,
                            'title' => get_the_title(),
                            'link' => get_the_permalink(),
                            'flippable' => false,
                            'excerpt' => get_the_excerpt(),
                            'creation_date' => $creation_date,
                            'category' => $category
                        ]);

                        ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php
    $stvarajmo_zajedno = get_field( 'stvarajmo_zajedno', 'option' );
    if ( $stvarajmo_zajedno && isset( $stvarajmo_zajedno['content'] ) && $stvarajmo_zajedno['content'] ) {
        get_template_part( './components/image-text/image-text', null, $stvarajmo_zajedno['content'] );
    }
?>

<?php get_footer() ?>
