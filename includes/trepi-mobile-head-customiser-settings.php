<?php
/**
 * Adds the individual sections, settings, and controls to the theme customizer
 */

function example_customizer( $wp_customize ) {

    $wp_customize->add_section(

        'example_section_one',

        array(

            'title' => 'Mobile Navigation Bar',

            'description' => 'This is a settings section.',

            'priority' => 35,

        )

    );

    

  

    

    

  $wp_customize->add_setting(

    'about_us', 

    array(

        'sanitize_callback' => 'example_sanitize_integer', 

    )

);

 

$wp_customize->add_control(

    'about_us', 

    array(

        'type' => 'dropdown-pages', 

        'label' => 'Info Page:', 

        'section' => 'example_section_one', 

    )

);  



$wp_customize->add_setting(

    'about_usfall', 

    array(

        'default' => '',

    )

);

 

$wp_customize->add_control(

    'about_usfall', 

    array(

        'type' => 'text', 

        'label' => 'Info Page Fall Back:', 

        'section' => 'example_section_one', 

        'sanitize_callback' => 'example_sanitize_text',

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

        'section' => 'example_section_one',

        'type' => 'text',

        'sanitize_callback' => 'example_sanitize_text',

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

        'section' => 'example_section_one',

        'type' => 'text',

        'sanitize_callback' => 'example_sanitize_text',

    )

);



$wp_customize->add_setting(

    'contact_page', 

    array(

        'sanitize_callback' => 'example_sanitize_integer', 

    )

);

 

$wp_customize->add_control(

    'contact_page', 

    array(

        'type' => 'dropdown-pages', 

        'label' => 'Contact Page:', 

        'section' => 'example_section_one', 

    )

);



$wp_customize->add_setting(

    'contact_pagefall', 

    array(

        'default' => '',

    )

);

 

$wp_customize->add_control(

    'contact_pagefall', 

    array(

        'type' => 'text', 

        'label' => 'Contact Page Fall Back:', 

        'section' => 'example_section_one', 

        'sanitize_callback' => 'example_sanitize_text',

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

            'section' => 'example_section_one',

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

            'section' => 'example_section_one',

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

        'section' => 'example_section_one',

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

            'section' => 'example_section_one',

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

        'section' => 'example_section_one',

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

            'section' => 'example_section_one',

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

        'section' => 'example_section_one',

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

            'section' => 'example_section_one',

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

        'section' => 'example_section_one',

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

            'section' => 'example_section_one',

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

        'section' => 'example_section_one',

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

            'section' => 'example_section_one',

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

        'section' => 'example_section_one',

        'choices' => array(

            'inline-block; *display:block' => 'Turn On 6th Icon',

            'none' => 'Turn Off 6th Icon',           

            

        ),

    )

);



}

add_action( 'customize_register', 'example_customizer' );





function logo_upload( $wp_customize ) {

    $wp_customize->add_section(

        'example_section_three',

        array(

            'title' => 'Logo',

            'description' => 'Site logo upload, and position',

            'priority' => 37,

        )

    );

    $wp_customize->add_setting(

    'include_page_nav',

    array(

        'default' => 'none',

    )

);



$wp_customize->add_setting( 'img-upload' );

 

$wp_customize->add_control(

    new WP_Customize_Image_Control(

        $wp_customize,

        'img-upload',

        array(

            'label' => 'Logo Upload',

            'section' => 'example_section_three',

            'settings' => 'img-upload'

        )

    )

);



$wp_customize->add_setting(

    'logo_top',

    array(

        'default' => 'none',

    )

);

 

$wp_customize->add_control(

    'logo_top',

    array(

        'type' => 'radio',

        'label' => 'Logo Top',

        'section' => 'example_section_three',

        'choices' => array(

            'block' => 'Top Logo On',

            'none' => 'Top Logo Off',

           

            

        ),

    )

);



$wp_customize->add_setting(

    'logo_bottom',

    array(

        'default' => 'none',

    )

);

 

$wp_customize->add_control(

    'logo_bottom',

    array(

        'type' => 'radio',

        'label' => 'Logo Bottom',

        'section' => 'example_section_three',

        'choices' => array(

            'block' => 'Bottom Logo On',

            'none' => 'Bottom Logo Off',           

            

        ),

    )

);



$wp_customize->add_setting(

    'masthead_textarea',

    array(

        'default' => '',

    )

);



$wp_customize->add_control(

    'masthead_textarea',

    array(

        'label' => 'Place shortcode/text/javascript/html in masthead area',

        'section' => 'example_section_three',

        'type' => 'textarea',

        'sanitize_callback' => 'example_sanitize_text',

    )

);







  



}

 add_action( 'customize_register', 'logo_upload' );





function page_navigation( $wp_customize ) {

    $wp_customize->add_section(

        'example_section_two',

        array(

            'title' => 'Home Page Navigation',

            'description' => 'This section allows you to turn on the page navigation when a static home page is created.  ',

            'priority' => 36,

        )

    );

    $wp_customize->add_setting(

    'include_page_nav',

    array(

        'default' => 'none',

    )

);

 

$wp_customize->add_control(

    'include_page_nav',

    array(

        'type' => 'radio',

        'label' => 'Include Page Navigation',

        'section' => 'example_section_two',

        'choices' => array(

            'block' => 'On',

            'none' => 'Off',

		

	            

        ),

    )

);



    

    }

        add_action( 'customize_register', 'page_navigation' );
?>