<?php get_header(); ?>

<div class="default">
    <?= the_content(); ?>
</div>

<?php
    //$novosti = get_field( 'novosti', 'option' );
    //if ( $novosti && isset( $novosti['content'] ) && $novosti['content'] ) {
    //    get_template_part( './components/slider-posts/slider-posts', null, $novosti['content'] );
    //}

    $contact_form_footer = get_field( 'contact_form_footer', 'option' );
    if ( $contact_form_footer) {
        get_template_part( './components/contact-form-footer/contact-form-footer', null, $contact_form_footer );
    }
?>

<?php get_footer(); ?>
