<?php
/**

 * Adds to footer

 */



function trepi_footer_customizer( $wp_customize ) {





$wp_customize->add_setting(

    'trepi_footer_add_one',

    array(

        'default' => '',

    )

);



$wp_customize->add_control(

    'trepi_footer_add_one',

    array(

        'label' => 'Add Code to Footer',

        'section' => 'trepi_section_footer',

        'type' => 'textarea',



    )

);

}

add_action( 'customize_register', 'trepi_footer_customizer' );


/**
 * Create the area where code created can be added to the footer of wordpress
 */


add_action('wp_footer', 'trepi_hook_footer_trepi', 1);
function trepi_hook_footer_trepi() { echo get_theme_mod( 'trepi_footer_add_one', '' ); }