<?php get_header(); ?>

<?php
wp_enqueue_script('delta-single-zaposleni', get_template_directory_uri() . '/dist/js/single-zaposleni.js', array(), wp_get_theme()->get('Version'), true);
wp_enqueue_style('delta-single-zaposleni', get_template_directory_uri() . '/dist/css/single-zaposleni.css', array(),wp_get_theme()->get('Version'));
?>

<section class="hero">
    <?php
    $single_zaposleni_hero_image = get_field('single_zaposleni_hero_image', 'option')
    ?>
    <?php if ($single_zaposleni_hero_image): ?>
        <img class="hero__img"
             src="<?= $single_zaposleni_hero_image['url'] ?>"
             srcset="
                 <?= $single_zaposleni_hero_image['sizes']['thumbnail'] ?> 150w,
                 <?= $single_zaposleni_hero_image['sizes']['medium'] ?> 300w,
                 <?= $single_zaposleni_hero_image['sizes']['medium_large'] ?> 768w,
                 <?= $single_zaposleni_hero_image['sizes']['large'] ?> 1024w,
                 <?= $single_zaposleni_hero_image['sizes']['1536x1536'] ?> 1536w"
             alt="<?= $single_zaposleni_hero_image['alt'] ?>">
    <?php endif; ?>
    <div class="hero__gradient"></div>
    <div class="container">
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p class="hero__breadcrumb">', '</p>');
        }
        ?>
    </div>
</section>
<section class="member">
    <?php
    $role = get_field('role');
    ?>
    <div class="container">
        <img class="member__img"
             src="<?= get_the_post_thumbnail_url() ?>"
             srcset="<?= get_the_post_thumbnail_url(get_the_ID(), 'thumbnail') ?> 150w,
                     <?= get_the_post_thumbnail_url(get_the_ID(), 'medium') ?> 300w,
                     <?= get_the_post_thumbnail_url(get_the_ID(), 'medium_large') ?> 768w,
                     <?= get_the_post_thumbnail_url(get_the_ID(), 'large') ?> 1024w,
                     <?= get_the_post_thumbnail_url(get_the_ID(), '1536x1536') ?> 1536w"
             sizes="(min-width: 1024px) 616px, 100vw"
             alt="<?= get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true) ?>">
        <div class="member__content">
            <?php if ($role): ?>
                <span class="member__role"><?= $role ?></span>
            <?php endif; ?>
            <h1 class="member__name"><?= the_title() ?></h1>
            <?= the_content(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
