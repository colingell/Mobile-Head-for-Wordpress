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

        'label' => 'Add Code/Text to Footer',

        'section' => 'trepi_section_footer',

        'type' => 'textarea',

        'sanitize_callback' => 'example_sanitize_text',

    )

);

}

add_action( 'customize_register', 'footer_customizer' );

?>