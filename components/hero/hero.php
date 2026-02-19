<?php

$tagline = $args['tagline'];
$title = $args['title'];
$background_type = $args['background_type'];
$hero_image_position = $args['hero_image_position'];
$image = $args['image'];
$video = $args['video'];
$pdf_button_img = $args['pdf_button_img'];
$pdf_button_link = $args['pdf_button_link'];
$button_style = $args['button_style'];
$button_link = $args['button_link'];
$description_style = $args['description_style'];
$description_paragraphs_one = $args['description_paragraphs_one'];
$description_paragraphs_two = $args['description_paragraphs_two'];
$full_gradient = $args['full_gradient'];

?>

<section class="hero">
    <div class="hero__main">
        <?php if ($background_type && ($background_type['value'] == 'image')): ?>
            <?php if ($image): ?>
                <?php if ($desktop_image = $image['desktop_image']): ?>
                    <img class="hero__image hero__image--desktop hero__image-position-<?= $hero_image_position ?>"
                         src="<?= $desktop_image['url'] ?>"
                         srcset="
                             <?= $desktop_image['sizes']['thumbnail'] ?> 150w,
                             <?= $desktop_image['sizes']['medium'] ?> 300w,
                             <?= $desktop_image['sizes']['medium_large'] ?> 768w,
                             <?= $desktop_image['sizes']['large'] ?> 1024w,
                             <?= $desktop_image['sizes']['1536x1536'] ?> 1536w,
                             <?= $desktop_image['sizes']['2048x2048'] ?> 2048w"
                         alt="<?= $desktop_image['alt'] ?>">
                <?php endif; ?>
                <?php if ($image['different_image_for_mobile']): ?>
                    <?php if ($mobile_image = $image['mobile_image']): ?>
                        <img class="hero__image hero__image--mobile"
                             src="<?= $mobile_image['url'] ?>"
                             alt="<?= $mobile_image['alt'] ?>">
                    <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
        <?php elseif ($background_type && ($background_type['value'] == 'video')): ?>
            <?php if ($video): ?>
                <?php if ($video['desktop_video']): ?>
                    <video id="heroVideo" class="hero__video hero__video--desktop" width="320" height="240"  muted loop
                           playsinline>
                        <source src="<?= $video['desktop_video']['url'] ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                <?php endif; ?>
                <?php if ($video['mobile_video']): ?>
                    <video class="hero__video hero__video--mobile" width="320" height="240" autoplay muted loop
                           playsinline>
                        <source src="<?= $video['mobile_video']['url'] ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
        <div class="hero__gradient"></div>
        <?php if ($full_gradient): ?>
        <div class="hero__full-gradient"></div>
        <?php endif; ?>
<!--        <div class="hero__gradient hero__gradient--bottom"></div>-->
        <div class="container">
            <?php $logo_light = get_field( 'logo_light', 'option' ); ?>
<!--            --><?php //if ($logo_light): ?>
<!--                <img class="hero__logo"-->
<!--                     src="--><?php //= $logo_light['url'] ?><!--"-->
<!--                     alt="--><?php //= $logo_light['alt'] ?><!--">-->
<!--            --><?php //endif; ?>
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p class="hero__breadcrumb">', '</p>');
            } else {
                echo '<p class="hero__breadcrumb"> </p>';
            }
            ?>
            <div class="hero__content <?php echo get_the_ID() == get_option('page_on_front') ? "" : 'inline' ?>">
                <?php if ($pdf_button_link): ?>
                    <div class="hero__mobile-pdf-btn">
                        <a href="<?= $pdf_button_link['url'] ?>"><img src="<?= $pdf_button_img['url'] ?>" /><?= $pdf_button_link['title'] ?></a>
                    </div>
                <?php endif; ?>
                <div class="hero__text">
                    <?php if ($tagline): ?>
                        <p class="hero__tagline tagline"><?= $tagline ?></p>
                    <?php endif; ?>
                </div>
                <?php
                if ($button_style && $button_link) {
                    get_template_part('./components/button/button', null, [
                        'background_color' => $button_style,
                        'text_color' => 'white',
                        'link' => $button_link,
                        'icon' => 'arrow-circle',
                        'arrow' => '',
                        'arrow_circle' => ''
                    ]);
                }
                ?>
<!--                --><?php //if (get_the_ID() == get_option('page_on_front')): ?>
<!--                    --><?php
//                        $args = array(
//                            'post_type' => 'brendovi',
//                            'orderby' => 'title',
//                            'order' => 'ASC',
//                        );
//
//                        $query = new WP_Query($args);
//                    ?>
<!--                    --><?php //if ($query->have_posts()): ?>
                    <div class="hero__socials">
<!--                        --><?php //while ($query->have_posts()): ?>
<!--                            --><?php
//                            $query->the_post();
//                            // print_r($query);
//                            ?>
                            <?php
                            $socials     = get_field( 'socials', 'option' );

                            ?>
                            <?php if (($socials)): ?>
<!--                            --><?php //print_r($socials); ?>
<!--                                <div class="hero__socials--container">-->
                                    <div class="hero__socials--icons">
                                        <div class="icons">
                                            <?php
                                                foreach ($socials as $social):
                                                    // $url = get_field('url');
                                                // print_r($social);
                                            ?>
                                                <?php if ($social['url'] && $social['icon']['url']) : ?>
                                                    <a class=""
                                                       href="<?= $social['url'] ?>"
                                                       target="_blank">
                                                        <img class=""
                                                             src="<?= $social['icon']['url'] ?>"
                                                             alt="">
                                                    </a>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
<!--                                    <div class="hero__socials--brand">-->
<!--                                        <p>--><?php //= the_title() ?><!--</p>-->
<!--                                    </div>-->
<!--                                </div>-->
                            <?php endif; ?>
<!--                        --><?php //endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
<!--                    --><?php //endif; ?>
<!--                --><?php //endif; ?>
                <?php if ($pdf_button_link): ?>
                    <div class="hero__pdf-btn">
                        <a href="<?= $pdf_button_link['url'] ?>"><img src="<?= $pdf_button_img['url'] ?>" /><?= $pdf_button_link['title'] ?></a>
                    </div>
                <?php endif; ?> 
            </div>   
        </div>

    </div>
    <?php if (($description_paragraphs_one || $description_paragraphs_two) && $description_style): ?>
        <div class="hero__description hero__description--<?= $description_style ?>">
            <div class="container">
                <?php if ($description_style == 'one'): ?>
                    <?php
                    $socials = get_field('socials', 'option');
                    $logo_dark = get_field('logo_dark', 'option');
                    ?>
                    <?php if ($socials): ?>
                        <div class="hero__description-banner">
                            <?php if ($logo_dark): ?>
                                <img class="hero__description-logo"
                                     src="<?= $logo_dark['url'] ?>"
                                     alt="<?= $logo_dark['alt'] ?>">
                            <?php endif; ?>
                            <div class="hero__description-socials">
                                <?php foreach ($socials as $social): ?>
                                    <div class="hero__description-social">
                                        <?php if ($social['icon'] && $social['url']): ?>
                                            <a href="<?= $social['url'] ?>"
                                               target="_blank">
                                                <img src="<?= $social['icon']['url'] ?>"
                                                     alt="<?= $social['icon']['alt'] ?>">
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ($description_paragraphs_one): ?>
                        <div class="hero__description-paragraphs hero__description-paragraphs--one">
                            <?php foreach ($description_paragraphs_one as $description): ?>
                                <?php if ($description['paragraph']): ?>
                                    <p class="hero__description-paragraph"><?= $description['paragraph'] ?></p>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                <?php elseif ($description_style == 'two' && $description_paragraphs_two): ?>
                    <?php if ($description_paragraphs_one): ?>
                        <div class="hero__description-paragraphs hero__description-paragraphs--one">
                            <?php foreach ($description_paragraphs_one as $description): ?>
                                <?php if ($description['paragraph']): ?>
                                    <p class="hero__description-paragraph"><?= $description['paragraph'] ?></p>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <div class="hero__description-paragraphs hero__description-paragraphs--two">
                        <?php foreach ($description_paragraphs_two as $description): ?>
                            <?php if ($description['paragraph']): ?>
                                <p class="hero__description-paragraph"><?= $description['paragraph'] ?></p>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
</section>
