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

<footer class="footer-coming-soon">
    <?php
        $socials                        = get_field( 'socials', 'option' );
        $copyright                      = get_field( 'copyright', 'option' );
        $footer_menu                    = get_field( 'footer_menu', 'option' );
        $cookie_settings_label           = get_field( 'cookie_settings_label', 'option' );
    ?>
<div class="container">
    <div class="footer-coming-soon__content">
        <div class="footer-coming-soon__copyright">
            <?php if ( $copyright ): ?>
                <p class="footer-coming-soon__copyright-text"><?= $copyright ?></p>
            <?php endif; ?>
        </div>
        <div class="footer-coming-soon__links">
            <?php if ( $socials ): ?>
                <div class="footer-coming-soon__socials">
                    <?php foreach ( $socials as $social ):  ?>
                        <?php if ($social['url'] && $social['icon']['url']) : ?>
                            <a class="footer-coming-soon__social"
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
<!--        <div class="footer-coming-soon__menu">-->
<!--            --><?php //if ( $footer_menu ): ?>
<!--                --><?php //foreach ( $footer_menu as $link ): ?>
<!--                    --><?php //if ( $link['link'] && $link['link']['url'] && $link['link']['title'] ): ?>
<!--                        <div class="footer-coming-soon__menu-link">-->
<!--                            <a class="footer-coming-soon__menu-link-item"-->
<!--                               href="--><?php //= $link['link']['url'] ?><!--">--><?php //= $link['link']['title'] ?><!--</a>-->
<!--                        </div>-->
<!--                    --><?php //endif; ?>
<!--                --><?php //endforeach; ?>
<!--            --><?php //endif; ?>
<!--            <a class="footer-coming-soon__menu-link-item"-->
<!--               onclick="return klaro.show();">--><?php //= $cookie_settings_label ?: 'Podešavanje kolačića' ?><!--</a>-->
<!--        </div>-->
        </div>
    </div>
</div>


</footer>

<?php wp_footer(); ?>

</body>
</html>
