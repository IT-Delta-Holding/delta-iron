<?php
    /**
     * The header for our theme
     *
     * This is the template that displays all of the <head> section and everything up until <div id="content">
     *
     * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package Smartcat
     */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title><?php wp_title( '' ); ?></title>
    <?php wp_head(); ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cardo:ital,wght@0,400;0,700;1,400&family=Playfair+Display&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-W3KS6RVB');</script>
    <!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W3KS6RVB"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <?php wp_body_open(); ?>
    <div id="page" class="site preload"><!-- #page -->
        <header class="header js-header">
            <?php
                $logo_light         = get_field( 'logo_light', 'option' );
                $logo_dark       = get_field( 'logo_dark', 'option' );
                $pdf_dokument      = get_field( 'pdf_dokument', 'option' );
                $copyright     = get_field( 'copyright', 'option' );
                $socials     = get_field( 'socials', 'option' );
                $logo_mobile         = get_field( 'logo_mobile', 'option' );
                $dre_logo         = get_field( 'dre_logo', 'option' );
                $dre_logo_dark         = get_field( 'dre_logo_dark', 'option' );
                $dre_link         = get_field( 'dre_link', 'option' );
                $header_image        = get_field( 'header_image', 'option' );
                $header_button         = get_field( 'header_button', 'option' );
                $hamburger_text         = get_field( 'hamburger_text', 'option' );
                $hamburger_close_text         = get_field( 'hamburger_close_text', 'option' );
//                $menu_default_image = get_field( 'menu_default_image', 'option' );
                $menu_links         = get_field( 'menu_links', 'option' );
                $menu_back_label    = get_field( 'menu_back_label', 'option' );
                $menu_next_label    = get_field( 'menu_next_label', 'option' );
                $counter            = 0;
            ?>
            <div class="container">
<!--                <div class="header__hamburger-menu">-->
<!--                <div class="header__hamburger js-header-hamburger">-->
<!--                    <div class="header__hamburger-lines header__hamburger-lines--1">-->
<!--                        <span class="header__hamburger-lines-one header__hamburger-lines-one--1"></span>-->
<!--                    </div>-->
<!--                    <div class="header__hamburger-lines header__hamburger-lines--2">-->
<!--                        <span class="header__hamburger-lines-two header__hamburger-lines-two--1"></span>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <p class="header__hamburger-text">--><?php //= $hamburger_text ?><!--</p>-->
<!--                </div>-->

                <!--  EXPANDED-->
                <div class="header__menu">
                    <div class="container">
                        <div class="header__menu--header">
                            <div class="header__hamburger-menu--expanded">
                                <div class="header__hamburger js-header-hamburger--close">
                                    <div class="header__hamburger-lines header__hamburger-lines--1">
                                        <span class="header__hamburger-lines-one header__hamburger-lines-one--1"></span>
                                    </div>
                                    <div class="header__hamburger-lines header__hamburger-lines--2">
                                        <span class="header__hamburger-lines-two header__hamburger-lines-two--1"></span>
                                    </div>
                                </div>
                                <p class="header__hamburger-text"><?= $hamburger_close_text ?></p>
                            </div>
                            <?php if ( $logo_dark ): ?>
                                <img class="header__dark-logo"
                                     src="<?= $logo_dark['url'] ?>"
                                     alt="<?= $logo_dark['alt'] ?>">
                            <?php endif; ?>
                            <div class="header__contact">
                                <?php if ( $dre_logo_dark ): ?>
                                <a href="<?= $dre_link['url'] ?>" target="_blank">
                                    <img class="header__dre-logo-dark"
                                         src="<?= $dre_logo_dark['url'] ?>"
                                         alt="<?= $dre_logo_dark['alt'] ?>">
                                </a>
                                <?php endif; ?>
                                <div class="header__menu-languages--expanded">
                                         <?= do_action( 'wpml_add_language_selector' ) ?>
<!--                                        <p>ENG</p>-->
                                </div>
                                <?php if ( $header_button ): ?>
                                    <?php
                                    get_template_part( './components/button_iron/button_iron', null, [
                                        'color' => 'primary',
                                        'link'  => $header_button['url'],
                                        'icon'   => '<svg xmlns="http://www.w3.org/2000/svg" width="19" height="15" viewBox="0 0 19 15" fill="none">
                                            <path d="M17.9664 8.29993C18.3569 7.9094 18.3569 7.27624 17.9664 6.88571L11.6024 0.521752C11.2119 0.131228 10.5787 0.131228 10.1882 0.521752C9.79769 0.912277 9.79769 1.54544 10.1882 1.93597L15.8451 7.59282L10.1882 13.2497C9.79769 13.6402 9.79769 14.2734 10.1882 14.6639C10.5787 15.0544 11.2119 15.0544 11.6024 14.6639L17.9664 8.29993ZM0.259277 8.59282L17.2593 8.59282L17.2593 6.59282L0.259277 6.59282L0.259277 8.59282Z" fill="#01284D"/>
                                        </svg>',
                                        'target'  => '_self',
                                        'text'    => $header_button['title'],
                                        'gap'   => 'big',
                                        'align_self'   => 'unset',
                                    ] );
                                    ?>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="header__menu--content">
                            <?php if ( $header_image ): ?>
                                <img class="header__menu-img"
                                     src="<?= $header_image['url'] ?>"
                                     alt="<?= $header_image['alt'] ?>">
                            <?php endif; ?>
                            <div class="header__menu--content-right">
                                <div class="header__menu--content-items">
                                    <?php foreach ( $menu_links as $key => $link ):  ?>
                                        <a class="header__menu--content-item" href="<?= $link['link']['url'] ?>"><?= $link['link']['title'] ?></a>
                                    <?php endforeach; ?>
                                </div>
                                <?php if ( $pdf_dokument ): ?>
                                    <?php
                                    get_template_part( './components/button_iron/button_iron', null, [
                                        'color' => 'primary',
                                        'link'  => $pdf_dokument['url'],
                                        'icon'   => '<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                            <path d="M8.79297 12.4816L3.79297 7.48157L5.19297 6.03157L7.79297 8.63157V0.481567H9.79297V8.63157L12.393 6.03157L13.793 7.48157L8.79297 12.4816ZM2.79297 16.4816C2.24297 16.4816 1.77214 16.2857 1.38047 15.8941C0.988802 15.5024 0.792969 15.0316 0.792969 14.4816V11.4816H2.79297V14.4816H14.793V11.4816H16.793V14.4816C16.793 15.0316 16.5971 15.5024 16.2055 15.8941C15.8138 16.2857 15.343 16.4816 14.793 16.4816H2.79297Z" fill="#01284D"/>
                                        </svg>',
                                        'target'  => '_blank',
                                        'text'    => $pdf_dokument['title'],
                                        'gap'   => 'small',
                                        'align_self'   => 'start',
                                    ] );
                                    ?>
                                <?php endif; ?>
                            </div>
                            <div class="header__menu--content-buttons">
                                <?php if ( $pdf_dokument ): ?>
                                    <?php
                                    get_template_part( './components/button_iron/button_iron', null, [
                                        'color' => 'primary',
                                        'link'  => $pdf_dokument['url'],
                                        'icon'   => '<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                            <path d="M8.79297 12.4816L3.79297 7.48157L5.19297 6.03157L7.79297 8.63157V0.481567H9.79297V8.63157L12.393 6.03157L13.793 7.48157L8.79297 12.4816ZM2.79297 16.4816C2.24297 16.4816 1.77214 16.2857 1.38047 15.8941C0.988802 15.5024 0.792969 15.0316 0.792969 14.4816V11.4816H2.79297V14.4816H14.793V11.4816H16.793V14.4816C16.793 15.0316 16.5971 15.5024 16.2055 15.8941C15.8138 16.2857 15.343 16.4816 14.793 16.4816H2.79297Z" fill="#01284D"/>
                                        </svg>',
                                        'target'  => '_blank',
                                        'text'    => $pdf_dokument['title'],
                                        'gap'   => 'small',
                                        'align_self'   => 'start',
                                    ] );
                                    ?>
                                <?php endif; ?>
                                <?php if ( $header_button ): ?>
                                    <?php
                                    get_template_part( './components/button_iron/button_iron', null, [
                                        'color' => 'primary',
                                        'link'  => $header_button['url'],
                                        'icon'   => '<svg xmlns="http://www.w3.org/2000/svg" width="19" height="15" viewBox="0 0 19 15" fill="none">
                                            <path d="M17.9664 8.29993C18.3569 7.9094 18.3569 7.27624 17.9664 6.88571L11.6024 0.521752C11.2119 0.131228 10.5787 0.131228 10.1882 0.521752C9.79769 0.912277 9.79769 1.54544 10.1882 1.93597L15.8451 7.59282L10.1882 13.2497C9.79769 13.6402 9.79769 14.2734 10.1882 14.6639C10.5787 15.0544 11.2119 15.0544 11.6024 14.6639L17.9664 8.29993ZM0.259277 8.59282L17.2593 8.59282L17.2593 6.59282L0.259277 6.59282L0.259277 8.59282Z" fill="#01284D"/>
                                        </svg>',
                                        'target'  => '_self',
                                        'text'    => $header_button['title'],
                                        'gap'   => 'big',
                                        'align_self'   => 'start',
                                    ] );
                                    ?>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="header__menu--socials">
                            <?php if ( $dre_logo_dark ): ?>
                                <img class="header__menu--socials--dre"
                                     src="<?= $dre_logo_dark['url'] ?>"
                                     alt="<?= $dre_logo_dark['alt'] ?>">
                            <?php endif; ?>
                            <?php if ( $socials ): ?>
                                <div class="header__menu--socials-links">
                                    <?php foreach ( $socials as $social ):  ?>
                                        <?php if ($social['url'] && $social['icon']['url']) : ?>
                                            <a class="header__menu--socials-link"
                                               href="<?= $social['url'] ?>"
                                               target="_blank">
                                                <img class=""
                                                     src="<?= $social['icon']['url'] ?>"
                                                     alt="">
                                            </a>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="header__menu--bottom">
                            <?php if ( $copyright ): ?>
                            <p class="header__menu--bottom-copyright"><?= $copyright ?></p>
                            <?php endif; ?>

                            <?php if ( $socials ): ?>
                                <div class="header__menu--bottom-socials">
                                <?php foreach ( $socials as $social ):  ?>
                                    <?php if ($social['url'] && $social['icon']['url']) : ?>
                                    <a class="header__menu--bottom-social"
                                       href="<?= $social['url'] ?>"
                                       target="_blank">
                                        <img class=""
                                             src="<?= $social['icon']['url'] ?>"
                                             alt="">
                                    </a>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!-- END EXPANDED-->

                <?php if ( $menu_links ): ?>
                    <div class="header__menu-items">
                        <?php foreach ( $menu_links as $key => $link ):  ?>
                            <a id="<?= mb_strtolower(str_replace(' ', '-', $link['link']['title'])) ?>" class="header__menu-item" href="<?= $link['link']['url'] ?>"><?= $link['link']['title'] ?></a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <div class="header__toggles">
                    <?php if ( $dre_logo_dark ): ?>
                    <a href="<?= $dre_link['url'] ?>" target="_blank">
                        <img class="header__dre-logo"
                             src="<?= $dre_logo_dark['url'] ?>"
                             alt="<?= $dre_logo_dark['alt'] ?>">
                    </a>
                    <?php endif; ?>
                    <?php if ( $header_button ): ?>
                        <?php
                        get_template_part( './components/button_iron/button_iron', null, [
                            'color' => 'white',
                            'link'  => $header_button['url'],
                            'icon'   => ' <svg xmlns="http://www.w3.org/2000/svg" width="19" height="15" viewBox="0 0 19 15" fill="none">
                            <path d="M17.9664 8.29993C18.3569 7.9094 18.3569 7.27624 17.9664 6.88571L11.6024 0.521752C11.2119 0.131228 10.5787 0.131228 10.1882 0.521752C9.79769 0.912277 9.79769 1.54544 10.1882 1.93597L15.8451 7.59282L10.1882 13.2497C9.79769 13.6402 9.79769 14.2734 10.1882 14.6639C10.5787 15.0544 11.2119 15.0544 11.6024 14.6639L17.9664 8.29993ZM0.259277 8.59282L17.2593 8.59282L17.2593 6.59282L0.259277 6.59282L0.259277 8.59282Z" fill="white"/>
                        </svg>',
                            'target'  => '_self',
                            'text'    => $header_button['title'],
                            'gap'   => 'big',
                            'align_self'   => 'unset',
                        ] );
                        ?>


<!--                        --><?php
//                        get_template_part( './components/button_iron/button_iron', null, [
//                            'color' => 'primary',
//                            'link'  => $header_button['url'],
//                            'icon'   => ' <svg xmlns="http://www.w3.org/2000/svg" width="19" height="15" viewBox="0 0 19 15" fill="none">
//                            <path d="M17.9664 8.29993C18.3569 7.9094 18.3569 7.27624 17.9664 6.88571L11.6024 0.521752C11.2119 0.131228 10.5787 0.131228 10.1882 0.521752C9.79769 0.912277 9.79769 1.54544 10.1882 1.93597L15.8451 7.59282L10.1882 13.2497C9.79769 13.6402 9.79769 14.2734 10.1882 14.6639C10.5787 15.0544 11.2119 15.0544 11.6024 14.6639L17.9664 8.29993ZM0.259277 8.59282L17.2593 8.59282L17.2593 6.59282L0.259277 6.59282L0.259277 8.59282Z" fill="white"/>
//                        </svg>',
//                            'target'  => '_blank',
//                            'text'    => $header_button['title'],
//                            'gap'   => 'big',
//                            'align_self'   => 'unset',
//                        ] );
//                        ?>
                    <?php endif; ?>
                    <div class="header__menu-languages">
                        <div class="container">
                            <?= do_action( 'wpml_add_language_selector' ) ?>
<!--                            <p>ENG</p>-->
                        </div>
                    </div>
                </div>
            </div>
<!--            <div class="header__search-modal js-header-search-modal">-->
<!--                <div class="container js-search-clear">-->
<!--                    --><?php
//                        $header_search_placeholder = get_field( 'header_search_placeholder', 'option' );
//                        $header_search_no_results  = get_field( 'header_search_no_results', 'option' );
//                    ?>
<!--                    <div class="header__search-modal-close js-header-search-modal-close">-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"-->
<!--                             viewBox="0 0 50 50">-->
<!--                            <path d="M 25 2 C 12.309534 2 2 12.309534 2 25 C 2 37.690466 12.309534 48 25 48 C 37.690466 48 48 37.690466 48 25 C 48 12.309534 37.690466 2 25 2 z M 25 4 C 36.609534 4 46 13.390466 46 25 C 46 36.609534 36.609534 46 25 46 C 13.390466 46 4 36.609534 4 25 C 4 13.390466 13.390466 4 25 4 z M 32.990234 15.986328 A 1.0001 1.0001 0 0 0 32.292969 16.292969 L 25 23.585938 L 17.707031 16.292969 A 1.0001 1.0001 0 0 0 16.990234 15.990234 A 1.0001 1.0001 0 0 0 16.292969 17.707031 L 23.585938 25 L 16.292969 32.292969 A 1.0001 1.0001 0 1 0 17.707031 33.707031 L 25 26.414062 L 32.292969 33.707031 A 1.0001 1.0001 0 1 0 33.707031 32.292969 L 26.414062 25 L 33.707031 17.707031 A 1.0001 1.0001 0 0 0 32.990234 15.986328 z"></path>-->
<!--                        </svg>-->
<!--                    </div>-->
<!--                    <input class="header__search-modal-input js-header-search-modal-input" type="text"-->
<!--                           placeholder="--><?php //= $header_search_placeholder ?: 'Pretraga' ?><!--">-->
<!--                    <div class="header__search-modal-results js-header-search-modal-results">-->
<!--                        --><?php
//                            $queryM_args = array(
//                                'post_type'      => array( 'page' ),
//                                'posts_per_page' => 6,
//                                'post_status'    => 'publish',
//                                'orderby'        => 'rand',
//                                'order'          => 'DESC',
//                                's'
//                            );
//                            $queryM      = new WP_Query( $queryM_args );
//                        ?>
<!--                        --><?php //if ( $queryM->have_posts() ): ?>
<!--                            --><?php //while ( $queryM->have_posts() ) : $queryM->the_post(); ?>
<!--                                <a class="header__search-modal-result"-->
<!--                                   href="--><?php //= get_permalink() ?><!--">-->
<!--                                    <img class="header__search-modal-result-img"-->
<!--                                         src="--><?php //= get_the_post_thumbnail_url( get_the_ID(), 'medium' ) ?><!--"-->
<!--                                         alt="--><?php //= get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ) ?><!--">-->
<!--                                    <p class="header__search-modal-result-title">--><?php //= the_title() ?><!--</p>-->
<!--                                </a>-->
<!--                            --><?php //endwhile; ?>
<!--                            --><?php //wp_reset_postdata(); ?>
<!--                        --><?php //endif; ?>
<!--                    </div>-->
<!--                    <div class="header__search-modal-error js-header-search-modal-error">--><?php //= $header_search_no_results ?: 'No results' ?><!--</div>-->
<!--                </div>-->
<!--            </div>-->
        </header>
