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
        <header class="header-coming-soon js-header-coming-soon">
            <?php
                $logo_light         = get_field( 'logo_light', 'option' );
                $logo_dark       = get_field( 'logo_dark', 'option' );
                $pdf_dokument      = get_field( 'pdf_dokument', 'option' );
                $copyright     = get_field( 'copyright', 'option' );
                $socials     = get_field( 'socials', 'option' );
                $logo_mobile         = get_field( 'logo_mobile', 'option' );
                $dre_logo         = get_field( 'dre_logo', 'option' );
                $dre_logo_dark         = get_field( 'dre_logo_dark', 'option' );
                $header_image        = get_field( 'header_image', 'option' );
                $header_button         = get_field( 'header_button', 'option' );
                $hamburger_text         = get_field( 'hamburger_text', 'option' );
                $hamburger_close_text         = get_field( 'hamburger_close_text', 'option' );
                $menu_links         = get_field( 'menu_links', 'option' );
                $menu_back_label    = get_field( 'menu_back_label', 'option' );
                $menu_next_label    = get_field( 'menu_next_label', 'option' );
                $counter            = 0;
            ?>
            <div class="container">
                <div class="header-coming-soon__logo">
                    <?php if ( $logo_dark ): ?>
                        <a href="/">
                            <img class="header-coming-soon__logo-img"
                                 src="<?= $logo_dark['url'] ?>"
                                 alt="<?= $logo_dark['alt'] ?>">
                        </a>
                    <?php endif; ?>
                    <?php if ( $logo_light ): ?>
                        <a href="/">
                            <img class="header-coming-soon__logo-img--mobile"
                                 src="<?= $logo_light['url'] ?>"
                                 alt="<?= $logo_light['alt'] ?>">
                        </a>
                    <?php endif; ?>
                </div>
                <div class="header-coming-soon__toggles">
                    <?php if ( $dre_logo_dark ): ?>
                    <a href="https://deltarealestate.rs/" target="_blank">
                        <img class="header-coming-soon__dre-logo"
                             src="<?= $dre_logo_dark['url'] ?>"
                             alt="<?= $dre_logo_dark['alt'] ?>">
                    </a>
                    <?php endif; ?>
                    <?php if ( $header_button ): ?>


                    <?php endif; ?>
                    <div class="header-coming-soon__menu-languages">
<!--                        <div class="container">-->
<!--                            --><?php //= do_action( 'wpml_add_language_selector' ) ?>
                            <p>ENG</p>
<!--                        </div>-->
                    </div>
                    <?php if ( $header_button ): ?>
                        <?php
                        get_template_part( './components/button_iron/button_iron', null, [
                            'color' => 'white',
                            'link'  => $header_button['url'],
                            'icon'   => '<svg xmlns="http://www.w3.org/2000/svg" width="19" height="15" viewBox="0 0 19 15" fill="none">
                                            <path d="M17.9664 8.29993C18.3569 7.9094 18.3569 7.27624 17.9664 6.88571L11.6024 0.521752C11.2119 0.131228 10.5787 0.131228 10.1882 0.521752C9.79769 0.912277 9.79769 1.54544 10.1882 1.93597L15.8451 7.59282L10.1882 13.2497C9.79769 13.6402 9.79769 14.2734 10.1882 14.6639C10.5787 15.0544 11.2119 15.0544 11.6024 14.6639L17.9664 8.29993ZM0.259277 8.59282L17.2593 8.59282L17.2593 6.59282L0.259277 6.59282L0.259277 8.59282Z" fill="white"/>
                                        </svg>',
                            'target'  => '_blank',
                            'text'    => $header_button['title'],
                            'gap'   => 'big',
                            'align_self'   => 'unset',
                        ] );
                        ?>
                    <?php endif; ?>
                </div>
            </div>
        </header>
