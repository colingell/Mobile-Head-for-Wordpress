<?php
/**

 * Adds to footer

 */



function footer_customizer( $wp_customize ) {

    $wp_customize->add_section(

        'footer_add',

        array(

            'title' => 'Add Code or Text to footer area',

            'description' => 'Extra Text or code can be added into the footer here',

            'priority' => 57,

        )

    );



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

        'section' => 'footer_add',

        'type' => 'textarea',

        'sanitize_callback' => 'example_sanitize_text',

    )

);

}

add_action( 'customize_register', 'footer_customizer' );

?>