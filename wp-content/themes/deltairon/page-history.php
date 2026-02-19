<?php /* Template Name: History */ ?>

<?php
wp_enqueue_script('delta-page-history', get_template_directory_uri() . '/dist/js/page-history.js', array(), wp_get_theme()->get('Version'), true);
wp_enqueue_style('delta-page-history', get_template_directory_uri() . '/dist/css/page-history.css', array(),wp_get_theme()->get('Version'));
?>

<?php get_header(); ?>

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

<div class="history">
    <?php
    $history = get_field('history');
    $read_more_label = get_field('read_more_label');
    $itemsCounter = 0;
    ?>
    <div class="container">
        <?php if ($history): ?>
            <div class="history__list js-history-list">
                <div class="history__timeline"></div>
                <div class="history__item-invisible"></div>
                <?php foreach ($history

                               as $item): ?>
                    <div class="history__item js-history-item <?= $itemsCounter % 2 === 0 ? 'right' : 'left' ?>">
<!--                        <div class="history__item-loader-white"></div>-->
<!--                        <div class="history__item-loader js-history-loader"></div>-->
<!--                        <svg class="history__item-dot"-->
<!--                             xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">-->
<!--                            <circle class="circle-big" cx="12" cy="12" r="12" fill="white"/>-->
<!--                            <circle class="circle-small" cx="12" cy="12" r="3" fill="#F47838"/>-->
<!--                        </svg>-->
                        <?php if ($item['image']): ?>
                            <img class="history__item-img"
                                 src="<?= $item['image']['url'] ?>"
                                 srcset="
                                     <?= $item['image']['sizes']['thumbnail'] ?> 150w,
                                     <?= $item['image']['sizes']['medium'] ?> 300w,
                                     <?= $item['image']['sizes']['medium_large'] ?> 768w,
                                     <?= $item['image']['sizes']['large'] ?> 1024w,
                                     <?= $item['image']['sizes']['1536x1536'] ?> 1536w"
                                 sizes="300px"
                                 alt="<?= $item['image']['alt'] ?>">
                        <?php endif; ?>
                        <?php if ($item['paragraphs']): ?>
                            <div class="history__item-paragraphs">
                                <?php if ($item['year']): ?>
                                    <p class="history__item-year h3"><?= $item['year'] ?></p>
                                <?php endif; ?>
                                <?php $counter = 0; ?>
                                <?php foreach ($item['paragraphs'] as $paragraph): ?>
                            <?php if ($paragraph['paragraph']): ?>
                            <?php if ($counter === 6): ?>
                                <div class="history__item-paragraphs-hidden">
                                    <div class="history__item-paragraphs-hidden-inner">
                                        <?php endif; ?>
                                        <p class="history__item-title"><?= $paragraph['paragraph'] ?></p>
                                        <p class="history__item-paragraph"><?= $paragraph['paragraph'] ?></p>
                                        <?php $counter++; ?>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                        <?php if ($counter > 6): ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($item['paragraphs'] && count($item['paragraphs']) > 2): ?>
                            <div class="history__item-expand js-history-item-expand">
                                <?php
                                if ($read_more_label) {
                                    get_template_part('./components/button/button', null, [
                                        'background_color' => 'transparent',
                                        'text_color' => 'secondary',
                                        'link' => [
                                            'url' => 'javascript:void(0)',
                                            'title' => $read_more_label
                                        ],
                                        'icon' => 'arrow-circle',
                                        'arrow' => '',
                                        'arrow_circle' => [
                                            'color' => 'secondary',
                                            'size' => 'small',
                                            'direction' => 'bottom'
                                        ]
                                    ]);
                                }
                                ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php $itemsCounter++; ?>
                <?php endforeach; ?>
            </div>

        <?php endif; ?>
    </div>
</div>
<?php
/*get_template_part('./components/related-articles/related', 'articles', [
    'manual_select' => false,
    'related' => '',
]);*/
?>

<?php
    $novosti = get_field( 'novosti', 'option' );
    if ( $novosti && isset( $novosti['content'] ) && $novosti['content'] ) {
        get_template_part( './components/slider-posts/slider-posts', null, $novosti['content'] );
    }

    $stvarajmo_zajedno = get_field( 'stvarajmo_zajedno', 'option' );
    if ( $stvarajmo_zajedno && isset( $stvarajmo_zajedno['content'] ) && $stvarajmo_zajedno['content'] ) {
        $stvarajmo_zajedno['content']['inverse_colors'] = true;
        get_template_part( './components/image-text/image-text', null, $stvarajmo_zajedno['content'] );
    }
?>

<?php get_footer(); ?>
