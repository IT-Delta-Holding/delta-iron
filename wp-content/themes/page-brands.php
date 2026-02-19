<?php /* Template Name: Brands */ ?>

<?php get_header(); ?>

<?php
wp_enqueue_script('delta-page-brands', get_template_directory_uri() . '/dist/js/page-brands.js', array(), wp_get_theme()->get('Version'), true);
wp_enqueue_style('delta-page-brands', get_template_directory_uri() . '/dist/css/page-brands.css', array(),wp_get_theme()->get('Version'));
?>

<?php

$hero = get_field('hero');

if ($hero) {
    get_template_part('./components/hero/hero', null, [
        'tagline' => $hero['tagline'] ?? '',
        'title' => $hero['title'] ?? '',
        'background_type' => $hero['background_type'] ?? '',
        'image' => $hero['image'] ?? '',
        'video' => $hero['video'] ?? '',
        'button_style' => $hero['button_style'] ?? '',
        'button_link' => $hero['button_link'] ?? '',
        'description_style' => $hero['description_style'] ?? '',
        'description_paragraphs_one' => $hero['description_paragraphs_one'] ?? '',
        'description_paragraphs_two' => $hero['description_paragraphs_two'] ?? '',
    ]);
}

?>

<section class="brands">
    <div class="container">
        <?php
        $allTerms = get_terms([
            'taxonomy' => 'kategorije-brendova',
            'meta_key' => 'order',
            'orderby' => 'order',
            'order' => 'ASC',
            'hide_empty' => true,
        ]);

        $counter = 0;
        $firstCat = '';
        ?>
        <div class="brands__filters">
            <?php foreach ($allTerms as $item): ?>
                <?php
                if ($counter === 0) {
                    $firstCat = $item->slug;
                }
                ?>
                <?php if ($item->name && $item->slug): ?>
                    <a class="brands__filter <?= $counter === 0 ? 'active' : '' ?> js-brands-filter"
                       href="javascript:void(0)"
                       data-category="<?= $item->slug ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 12"
                             fill="none">
                            <path d="M1 1L8 6L1 11" stroke="#F47838" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                        <?= $item->name ?>
                    </a>
                <?php endif; ?>
                <?php $counter++; ?>
            <?php endforeach; ?>
        </div>
        <?php
        $args = array(
            'post_type' => 'brendovi',
            'post_status' => 'publish',
            'meta_key' => 'order',
            'orderby' => 'order',
            'order' => 'ASC',
        );
        $query = new WP_Query($args);
        ?>
        <?php if ($query->have_posts()): ?>
            <div class="brands__cards">
                <?php while ($query->have_posts()): $query->the_post(); ?>
                    <?php
                    $categories = get_the_terms(get_the_ID(), 'kategorije-brendova');
                    $icon = get_field('icon');
                    $link = get_field('link');
                    $image_url = get_the_post_thumbnail_url();
                    $image_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
                    $categoriesString = '';
                    $activeClass = '';
                    if ($categories) {
                        foreach ($categories as $cat) {
                            $categoriesString = $categoriesString . $cat->slug;
                            if ($cat->slug == $firstCat) {
                                $activeClass = 'active';
                            }
                        }
                    }
                    ?>
                    <div class="brands__card <?= $activeClass ?> <?= $categoriesString ?> js-brands-card"
                         data-category="<?= $categoriesString ?>">
                        <?php
                        $imageTemp = [
                            'url' => $image_url ?? '',
                            'alt' => $image_alt ?? ''
                        ];
                        get_template_part('./components/card-brand/card', 'brand', [
                            'url' => $link ?? '',
                            'icon' => $icon ?? '',
                            'image' => $imageTemp
                        ]);
                        ?>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php
get_template_part('./components/related-articles/related', 'articles', [
    'manual_select' => false,
    'related' => '',
]);
?>

<?php get_footer(); ?>
