<?php
    /**
     * The template for displaying the footer
     *
     * Contains the closing of the #content div and all content after.
     *
     * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package Smartcat
     */

?>

<footer class="footer">
    <?php
        $footer_btt_label              = get_field( 'footer_btt_label', 'option' );
        $footer_image_1                = get_field( 'footer_image_1', 'option' );
        $footer_image_2                = get_field( 'footer_image_2', 'option' );
        $footer_image_3                = get_field( 'footer_image_3', 'option' );
        $footer_image_4                = get_field( 'footer_image_4', 'option' );
        $footer_image_5                = get_field( 'footer_image_5', 'option' );
        $footer_info_heading           = get_field( 'footer_info_heading', 'option' );
        $footer_mapa                 = get_field( 'footer_mapa', 'option' );
        $kontakt_telefon             = get_field( 'kontakt_telefon', 'option' );
        $cookie_settings_label         = get_field( 'cookie_settings_label', 'option' );
        $footer_copyright              = get_field( 'footer_copyright', 'option' );
        $email_icon                    = get_field( 'email_icon', 'option' );
        $email                         = get_field( 'email', 'option' );
        $linkedin_icon                 = get_field( 'linkedin_icon', 'option' );
        $linkedin                      = get_field( 'linkedin', 'option' );

        $footer_adresa               = get_field( 'footer_adresa', 'option' );
        $pdf_dokument                = get_field( 'pdf_dokument', 'option' );
        $footer_logo                 = get_field( 'footer_logo', 'option' );
        $footer_menu                 = get_field( 'footer_menu', 'option' );
        $socials                     = get_field( 'socials', 'option' );
        $copyright                   = get_field( 'copyright', 'option' );
        $footer_menu_bottom          = get_field( 'footer_menu_bottom', 'option' );
        $footer_dre_logo             = get_field( 'footer_dre_logo', 'option' );
        $dre_link                    = get_field( 'dre_link', 'option' );
    ?>
    <div class="container">
    <div class="footer__top">
        <div class="footer__top--info">
            <?php if ( $footer_adresa ): ?>
                <div><?= $footer_adresa ?></div>
            <?php endif; ?>
            <?php if ( $pdf_dokument ): ?>
                 <?php
                     get_template_part( './components/button_iron/button_iron', null, [
                    'color' => 'white',
                    'link'  => $pdf_dokument['url'],
                    'icon'   => '<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                   <path d="M8.79297 12.4816L3.79297 7.48157L5.19297 6.03157L7.79297 8.63157V0.481567H9.79297V8.63157L12.393 6.03157L13.793 7.48157L8.79297 12.4816ZM2.79297 16.4816C2.24297 16.4816 1.77214 16.2857 1.38047 15.8941C0.988802 15.5024 0.792969 15.0316 0.792969 14.4816V11.4816H2.79297V14.4816H14.793V11.4816H16.793V14.4816C16.793 15.0316 16.5971 15.5024 16.2055 15.8941C15.8138 16.2857 15.343 16.4816 14.793 16.4816H2.79297Z" fill="white"></path>
                        </svg>',
                    'target'  => '_blank',
                    'text'    => $pdf_dokument['title'],
                    'gap'   => 'big',
                    'align_self'   => 'center',
                ] );
                ?>
            <?php endif; ?>
        </div>
        <div class="footer__top--logo">
            <?php if ( $footer_logo ): ?>
            <img class="footer__top--logo-img"
                 src="<?= $footer_logo['url'] ?>"
                 alt="<?= $footer_logo['alt'] ?>">
            <?php endif; ?>
        </div>
        <div class="footer__top--menu">
            <div class="footer__top--menu--items">
                <?php if ( $footer_menu ): ?>
                    <?php foreach ( $footer_menu as $link ): ?>
                            <div class="footer__top--menu-link">
                                <a class="footer__top--menu-link-item"
                                   href="<?= $link['link']['url'] ?>"><?= $link['link']['title'] ?></a>
                            </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <div class="footer__top--menu-socials">
            <?php if ( $socials ): ?>
            <?php foreach ( $socials as $social ): ?>
                    <a class="footer__top--menu-social"
                       href="<?= $social['url'] ?>"
                       target="_blank">
                        <img class="footer__top--menu-social-icon"
                             src="<?= $social['icon']['url'] ?>"
                             alt="<?= $social['icon']['alt'] ?>">
                    </a>
            <?php endforeach; ?>
            <?php endif; ?>
            </div>
        </div>
        <div class="footer__top--socials-mobile">
            <?php if ( $footer_dre_logo ): ?>
            <a href="<?= $dre_link['url'] ?>" target="_blank">
                <img class="footer__top--socials-mobile-dre"
                     src="<?= $footer_dre_logo['url'] ?>"
                     alt="<?= $footer_dre_logo['alt'] ?>">
            </a>
            <?php endif; ?>
            <div class="footer__top--socials-mobile-socials">
                <?php if ( $socials ): ?>
                    <?php foreach ( $socials as $social ): ?>
                        <a class="footer__top--socials-mobile-social-link"
                           href="<?= $social['url'] ?>"
                           target="_blank">
                            <img class="footer__top--socials-mobile-social-icon"
                                 src="<?= $social['icon']['url'] ?>"
                                 alt="<?= $social['icon']['alt'] ?>">
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="footer__top--second-menu-mobile">
            <?php if ( $footer_menu_bottom ): ?>
            <?php foreach ( $footer_menu_bottom as $link ): ?>
                <div class="footer__top--second-menu-mobile-link">
                    <a class="footer__top--second-menu-mobile-link-item"
                       href="<?= $link['link']['url'] ?>"><?= $link['link']['title'] ?></a>
                </div>
            <?php endforeach; ?>
                <div class="footer__top--second-menu-mobile-link">
                    <a class="footer__top--second-menu-mobile-link-item"
                       onclick="return klaro.show();"><?= $cookie_settings_label ?: 'Podešavanje kolačića' ?></a>
                </div>
            <?php endif; ?>
        </div>


    </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
        <?php if ( $copyright ): ?>
            <p class="footer__bottom--copyright"><?= $copyright ?></p>
        <?php endif; ?>
        <div class="footer__bottom--menu">
            <?php if ( $footer_menu_bottom ): ?>
                <?php foreach ( $footer_menu_bottom as $link ): ?>
                    <div class="footer__bottom--menu-link">
                        <a class="footer__bottom--menu-link-item"
                           href="<?= $link['link']['url'] ?>"><?= $link['link']['title'] ?></a>
                    </div>
                <?php endforeach; ?>
                <div class="footer__bottom--menu-link">
                    <a class="footer__bottom--menu-link-item"
                       onclick="return klaro.show();"><?= $cookie_settings_label ?: 'Podešavanje kolačića' ?></a>
                </div>
            <?php endif; ?>
        </div>
        </div>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
