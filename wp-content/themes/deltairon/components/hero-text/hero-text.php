<?php

$tagline = $args['tagline'];
$title = $args['title'];
$background_type = $args['background_type'];
$hero_image_position = $args['hero_image_position'];
$image = $args['image'];
$video = $args['video'];
$button_style = $args['button_style'];
$button_link = $args['button_link'];
$description_style = $args['description_style'];
$description_paragraphs_one = $args['description_paragraphs_one'];
$description_paragraphs_two = $args['description_paragraphs_two'];
$full_gradient = $args['full_gradient'];

?>

<section class="hero-text">
    <div class="hero-text__main">
        <?php if ($background_type && ($background_type['value'] == 'image')): ?>
            <?php if ($image): ?>
                <?php if ($desktop_image = $image['desktop_image']): ?>
                    <img class="hero-text__image hero-text__image--desktop hero-text__image-position-<?= $hero_image_position ?>"
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
                        <img class="hero-text__image hero-text__image--mobile"
                             src="<?= $mobile_image['url'] ?>"
                             alt="<?= $mobile_image['alt'] ?>">
                    <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
        <?php elseif ($background_type && ($background_type['value'] == 'video')): ?>
            <?php if ($video): ?>
                <?php if ($video['desktop_video']): ?>
                    <video class="hero-text__video hero-text__video--desktop" width="320" height="240" autoplay muted loop
                           playsinline>
                        <source src="<?= $video['desktop_video']['url'] ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                <?php endif; ?>
                <?php if ($video['mobile_video']): ?>
                    <video class="hero-text__video hero-text__video--mobile" width="320" height="240" autoplay muted loop
                           playsinline>
                        <source src="<?= $video['mobile_video']['url'] ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
        <div class="hero-text__gradient"></div>
        <?php if ($full_gradient): ?>
            <div class="hero-text__full-gradient"></div>
        <?php endif; ?>
        <div class="hero-text__gradient hero-text__gradient--bottom"></div>
        <div class="container">
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p class="hero-text__breadcrumb">', '</p>');
            } else {
                echo '<p class="hero-text__breadcrumb"> </p>';
            }
            ?>
            <div class="hero-text__content <?php echo get_the_ID() == get_option('page_on_front') ? "" : 'inline' ?>">
                <div class="hero-text__text">
                    <?php if ($tagline): ?>
                        <p class="hero-text__tagline tagline"><?= $tagline ?></p>
                    <?php endif; ?>
                    <?php if ($title): ?>
                        <h1 class="hero-text__title h1"><?= $title ?></h1>
                    <?php endif; ?>
                    <?php if ($description_paragraphs_one): ?>
                        <div class="hero-text__description-paragraphs hero-text__description-paragraphs--one">
                            <?php foreach ($description_paragraphs_one as $description): ?>
                                <?php if ($description['paragraph']): ?>
                                    <p class="hero-text__description-paragraph"><?= $description['paragraph'] ?></p>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
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
                        'arrow_circle' => [
                            'color' => 'secondary-reverse',
                            'size' => 'small',
                            'direction' => 'top-right'
                        ]
                    ]);
                }
                ?>
                <?php if (get_the_ID() == get_option('page_on_front')): ?>
                    <?php
                    $args = array(
                        'post_type' => 'brendovi',
                        'orderby' => 'title',
                        'order' => 'ASC',
                    );

                    $query = new WP_Query($args);
                    ?>
                    <?php if ($query->have_posts()): ?>
                        <div class="hero-text__socials">
                            <?php while ($query->have_posts()): ?>
                                <?php
                                $query->the_post();
                                // print_r($query);
                                ?>
                                <?php
                                $socials = get_field('socials', get_the_ID());

                                ?>
                                <?php if (is_array($socials)): ?>
                                    <div class="hero-text__socials--container">
                                        <div class="hero-text__socials--icons">
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
                                        <div class="hero-text__socials--brand">
                                            <p><?= the_title() ?></p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>

    </div>
<!--    --><?php //if (($description_paragraphs_one || $description_paragraphs_two) && $description_style): ?>
<!--        <div class="hero-text__description hero-text__description----><?php //= $description_style ?><!--">-->
<!--            <div class="container">-->
<!--                --><?php //if ($description_style == 'one'): ?>
<!--                    --><?php
//                    $socials = get_field('socials', 'option');
//                    $logo_dark = get_field('logo_dark', 'option');
//                    ?>
<!--                    --><?php //if ($socials): ?>
<!--                        <div class="hero-text__description-banner">-->
<!--                            --><?php //if ($logo_dark): ?>
<!--                                <img class="hero-text__description-logo"-->
<!--                                     src="--><?php //= $logo_dark['url'] ?><!--"-->
<!--                                     alt="--><?php //= $logo_dark['alt'] ?><!--">-->
<!--                            --><?php //endif; ?>
<!--                            <div class="hero-text__description-socials">-->
<!--                                --><?php //foreach ($socials as $social): ?>
<!--                                    <div class="hero-text__description-social">-->
<!--                                        --><?php //if ($social['icon'] && $social['url']): ?>
<!--                                            <a href="--><?php //= $social['url'] ?><!--"-->
<!--                                               target="_blank">-->
<!--                                                <img src="--><?php //= $social['icon']['url'] ?><!--"-->
<!--                                                     alt="--><?php //= $social['icon']['alt'] ?><!--">-->
<!--                                            </a>-->
<!--                                        --><?php //endif; ?>
<!--                                    </div>-->
<!--                                --><?php //endforeach; ?>
<!--                            </div>-->
<!--                        </div>-->
<!--                    --><?php //endif; ?>
<!--                --><?php //elseif ($description_style == 'two' && $description_paragraphs_two): ?>
<!--                    --><?php //if ($description_paragraphs_one): ?>
<!--                        <div class="hero-text__description-paragraphs hero-text__description-paragraphs--one">-->
<!--                            --><?php //foreach ($description_paragraphs_one as $description): ?>
<!--                                --><?php //if ($description['paragraph']): ?>
<!--                                    <p class="hero-text__description-paragraph">--><?php //= $description['paragraph'] ?><!--</p>-->
<!--                                --><?php //endif; ?>
<!--                            --><?php //endforeach; ?>
<!--                        </div>-->
<!--                    --><?php //endif; ?>
<!--                    <div class="hero-text__description-paragraphs hero-text__description-paragraphs--two">-->
<!--                        --><?php //foreach ($description_paragraphs_two as $description): ?>
<!--                            --><?php //if ($description['paragraph']): ?>
<!--                                <p class="hero-text__description-paragraph">--><?php //= $description['paragraph'] ?><!--</p>-->
<!--                            --><?php //endif; ?>
<!--                        --><?php //endforeach; ?>
<!--                    </div>-->
<!--                --><?php //endif; ?>
<!--            </div>-->
<!--        </div>-->
<!--    --><?php //endif; ?>
</section>
