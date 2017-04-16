<?php
/**
 * Adds the individual sections, settings, and controls to the theme customizer
 */





function trepi_customizer( $wp_customize ) {

    $wp_customize->add_section(

        'trepi_section_one',

        array(

            'title' => 'Mobile Navigation Bar',

            'description' => 'This is a settings section.',

            'priority' => 35,

        )

    );

    

  

    

    


     //  ============================
    //  = Page Dropdown             =
    //  =============================

    $wp_customize->add_setting('trepi_about_us_options', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'default' => '',

    ));


$wp_customize->add_control(

    'about_us', 

    array(

        'type' => 'dropdown-pages', 

        'settings'   => 'trepi_about_us_options',

        'label' => 'Info Page',

        'section' => 'trepi_section_one', 

    )

);  



$wp_customize->add_setting(

    'about-usfall', 

    array(

        'default' => '',

    )

);

 

$wp_customize->add_control(

    'about-usfall', 

    array(

        'type' => 'text', 

        'label' => 'Over ride the Info Page link:', 

        'section' => 'trepi_section_one', 

        'sanitize_callback' => 'esc_url',

    )

);



    

    

    $wp_customize->add_setting(

    'contact_number',

    array(

        'default' => '',

    )

);



$wp_customize->add_control(

    'contact_number',

    array(

        'label' => 'Contact Number',

        'section' => 'trepi_section_one',

        'type' => 'text',

        'sanitize_callback' => 'esc_textarea',

    )

);

    $wp_customize->add_setting(

    'email_address',

    array(

        'default' => '',

    )

);



$wp_customize->add_control(

    'email_address',

    array(

        'label' => 'Email Address',

        'section' => 'trepi_section_one',

        'type' => 'text',

        'sanitize_callback' => 'is_email',

    )

);



     //  ============================
    //  = Page Dropdown             =
    //  =============================

    $wp_customize->add_setting('trepi_contact_page_options', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'default' => '',
 
    ));



 

$wp_customize->add_control(
    'contact_page', 
    array(
        'type' => 'dropdown-pages', 
        'settings'   => 'trepi_contact_page_options',
        'label' => 'Contact Page:', 
        'section' => 'trepi_section_one', 
    )
);



$wp_customize->add_setting(

    'contact-pagefall', 

    array(

        'default' => '',

    )

);

 

$wp_customize->add_control(

    'contact-pagefall', 

    array(

        'type' => 'text', 

        'label' => 'Over ride the Contact Page link:', 

        'section' => 'trepi_section_one', 

        'sanitize_callback' => 'esc_url',

    )

);





$wp_customize->add_setting(

    'color-setting',

    array(

        'default' => '#1B2021',

        'sanitize_callback' => 'sanitize_hex_color',

    )

);



$wp_customize->add_control(

    new WP_Customize_Color_Control(

        $wp_customize,

        'color-setting',

        array(

            'label' => 'Navigation Color',

            'section' => 'trepi_section_one',

            'settings' => 'color-setting',

        )

    )

);



$wp_customize->add_setting( 'home-upload' );

 

$wp_customize->add_control(

    new WP_Customize_Image_Control(

        $wp_customize,

        'home-upload',

        array(

            'label' => '1st Icon Upload - Default home',

            'section' => 'trepi_section_one',

            'settings' => 'home-upload'

        )

    )

);

$wp_customize->add_setting(

    'icon_one_off',

    array(

        'default' => 'inline-block',

    )

);

 

$wp_customize->add_control(

    'icon_one_off',

    array(

        'type' => 'radio',

        'label' => '1st Icon Turn off',

        'section' => 'trepi_section_one',

        'choices' => array(

            'inline-block; *display:block' => 'Turn On 1st Icon',

            'none' => 'Turn Off 1st Icon',           

            

        ),

    )

);







$wp_customize->add_setting( 'mail-upload' );

 

$wp_customize->add_control(

    new WP_Customize_Image_Control(

        $wp_customize,

        'mail-upload',

        array(

            'label' => '2nd Icon Upload Default email',

            'section' => 'trepi_section_one',

            'settings' => 'mail-upload'

        )

    )

);



$wp_customize->add_setting(

    'icon_two_off',

    array(

        'default' => 'inline-block',

    )

);

 

$wp_customize->add_control(

    'icon_two_off',

    array(

        'type' => 'radio',

        'label' => '2nd Icon Turn off',

        'section' => 'trepi_section_one',

        'choices' => array(

            'inline-block; *display:block' => 'Turn On 2nd Icon',

            'none' => 'Turn Off 2nd Icon',           

            

        ),

    )

);



$wp_customize->add_setting( 'phone-upload' );

 

$wp_customize->add_control(

    new WP_Customize_Image_Control(

        $wp_customize,

        'phone-upload',

        array(

            'label' => '3rd Icon Upload - Default phone',

            'section' => 'trepi_section_one',

            'settings' => 'phone-upload'

        )

    )

);



$wp_customize->add_setting(

    'icon_three_off',

    array(

        'default' => 'inline-block',

    )

);

 

$wp_customize->add_control(

    'icon_three_off',

    array(

        'type' => 'radio',

        'label' => '3rd Icon Turn off',

        'section' => 'trepi_section_one',

        'choices' => array(

            'inline-block; *display:block' => 'Turn On 3rd Icon',

            'none' => 'Turn Off 3rd Icon',           

            

        ),

    )

);



$wp_customize->add_setting( 'contact-upload' );

 

$wp_customize->add_control(

    new WP_Customize_Image_Control(

        $wp_customize,

        'contact-upload',

        array(

            'label' => '4th Icon Upload - Default Contact',

            'section' => 'trepi_section_one',

            'settings' => 'contact-upload'

        )

    )

);



$wp_customize->add_setting(

    'icon_four_off',

    array(

        'default' => 'inline-block',

    )

);

 

$wp_customize->add_control(

    'icon_four_off',

    array(

        'type' => 'radio',

        'label' => '4th Icon Turn off',

        'section' => 'trepi_section_one',

        'choices' => array(

            'inline-block; *display:block' => 'Turn On 4th Icon',

            'none' => 'Turn Off 4th Icon',           

            

        ),

    )

);





$wp_customize->add_setting( 'info-upload' );

 

$wp_customize->add_control(

    new WP_Customize_Image_Control(

        $wp_customize,

        'info-upload',

        array(

            'label' => '5th Icon Upload - Default Info',

            'section' => 'trepi_section_one',

            'settings' => 'info-upload'

        )

    )

);



$wp_customize->add_setting(

    'icon_five_off',

    array(

        'default' => 'inline-block',

    )

);

 

$wp_customize->add_control(

    'icon_five_off',

    array(

        'type' => 'radio',

        'label' => '5th Icon Turn off',

        'section' => 'trepi_section_one',

        'choices' => array(

            'inline-block; *display:block' => 'Turn On 5th Icon',

            'none' => 'Turn Off 5th Icon',           

            

        ),

    )

);



$wp_customize->add_setting( 'menu-upload' );

 

$wp_customize->add_control(

    new WP_Customize_Image_Control(

        $wp_customize,

        'menu-upload',

        array(

            'label' => '6th Icon Upload - Default Menu',

            'section' => 'trepi_section_one',

            'settings' => 'menu-upload'

        )

    )

);

$wp_customize->add_setting(

    'icon_six_off',

    array(

        'default' => 'inline-block',

    )

);

 

$wp_customize->add_control(

    'icon_six_off',

    array(

        'type' => 'radio',

        'label' => '6th Icon Turn off',

        'section' => 'trepi_section_one',

        'choices' => array(

            'inline-block; *display:block' => 'Turn On 6th Icon',

            'none' => 'Turn Off 6th Icon',           

            

        ),

    )

);



}

add_action( 'customize_register', 'trepi_customizer' );









?>