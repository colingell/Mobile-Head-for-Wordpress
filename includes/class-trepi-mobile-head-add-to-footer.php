<?php
/**

 * Adds to footer

 */



function footer_customizer( $wp_customize ) {





$wp_customize->add_setting(

    'footer_add_one',

    array(

        'default' => '',

    )

);



$wp_customize->add_control(

    'footer_add_one',

    array(

        'label' => 'Add Code to Footer',

        'section' => 'trepi_section_footer',

        'type' => 'textarea',



    )

);

}

add_action( 'customize_register', 'footer_customizer' );


/**
 * Create the area where code created can be added to the footer of wordpress
 */


add_action('wp_footer', 'hook_footer_trepi', 1);
function hook_footer_trepi() { echo get_theme_mod( 'footer_add_one', '' ); }