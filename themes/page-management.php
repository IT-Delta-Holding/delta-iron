<?php /* Template Name: Management */ ?>

<?php get_header(); ?>

<?php
wp_enqueue_script('delta-page-management', get_template_directory_uri() . '/dist/js/page-management.js', array(), wp_get_theme()->get('Version'), true);
wp_enqueue_style('delta-page-management', get_template_directory_uri() . '/dist/css/page-management.css', array(),wp_get_theme()->get('Version'));
?>




<div class="staff">

<?php
$hero = get_field('hero');

if ($hero) {
    get_template_part('./components/hero/hero', null, [
        'tagline' => $hero['tagline'] ?? '',
        'title' => $hero['title'] ?? '',
        'background_type' => $hero['background_type'] ?? '',
        'hero_image_position' => $hero['hero_image_position'] ?? '',
        'image' => $hero['image'] ?? '',
        'video' => $hero['video'] ?? '',
        'pdf_button_link' => $hero['pdf_button_link'] ?? '',
        'button_style' => $hero['button_style'] ?? '',
        'button_link' => $hero['button_link'] ?? '',
        'description_style' => $hero['description_style'] ?? '',
        'description_paragraphs_one' => $hero['description_paragraphs_one'] ?? '',
        'description_paragraphs_two' => $hero['description_paragraphs_two'] ?? '',
        'full_gradient' => $hero['full_gradient'] ?? '',
    ]);
}
?>
    <div class="container">
        <?php
        $args = array(
            'taxonomy' => 'kategorije-zaposlenih',
            'meta_key' => 'order',
            'orderby' => 'order',
            'order' => 'ASC'
        );
        $cats = get_categories($args);

        $cta_label = get_field('cta_label');
        ?>
        <?php if ($cats): ?>
            <?php foreach ($cats as $cat): ?>
                <?php
                $args = array(
                    'post_type' => 'zaposleni',
                    'kategorije-zaposlenih' => $cat->slug,
                    'meta_key' => 'order',
                    'orderby' => 'order',
                    'order' => 'ASC'
                );
                $query = new WP_Query($args);
                ?>
                <?php if ($query->have_posts()): ?>
                    <?php
                    $counter = 1;
                    $first_highlighted = get_field('first_member_highlighted', $cat);
                    ?>
                    <div class="staff__list-inner">
                        <?php while ($query->have_posts()): $query->the_post(); ?>
                            <div class="staff__member <?= ($counter == 1 && $first_highlighted) ? 'staff__member--first' : '' ?>">
                                <img class="staff__member-img <?= ($counter == 1 && $first_highlighted) ? 'staff__member--first_img' : '' ?>"
                                        src="<?= get_the_post_thumbnail_url(); ?>"
                                        srcset="<?= get_the_post_thumbnail_url(get_the_ID(), 'thumbnail') ?> 150w,
                                                <?= get_the_post_thumbnail_url(get_the_ID(), 'medium') ?> 300w,
                                                <?= get_the_post_thumbnail_url(get_the_ID(), 'medium_large') ?> 768w,
                                                <?= get_the_post_thumbnail_url(get_the_ID(), 'large') ?> 1024w,
                                                <?= get_the_post_thumbnail_url(get_the_ID(), '1536x1536') ?> 1536w"
                                        sizes="(min-width: 1024px)"
                                        alt="<?= get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true) ?>">
                                <div class="staff__member-text">
                                    <div class="staff__member-title">
                                        <h3 class="staff__member-name"><?= the_title(); ?></h3>
                                        <?php if ($role = get_field('role')): ?>
                                            <p class="staff__member-role"><?= $role ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <?php

                                    if ($cta_label) {
                                        $link = [
                                            'title' => $cta_label,
                                            'url' => get_permalink()
                                        ];
                                        $arrow_circle = [
                                            'color' => 'primary',
                                            'direction' => 'right',
                                            'size' => 'small'
                                        ];
                                        get_template_part('./components/button/button', null, [
                                            'background_color' => 'transparent',
                                            'text_color' => 'primary',
                                            'link' => $link,
                                            'icon' => 'arrow-circle',
                                            'arrow' => '',
                                            'arrow_circle' => $arrow_circle
                                        ]);
                                    }

                                    ?>
                                </div>
                            </div>
                            <?php $counter++; ?>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</div>


<?php get_footer(); ?>
