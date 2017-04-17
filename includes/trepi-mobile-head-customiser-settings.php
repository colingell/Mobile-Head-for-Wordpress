<?php
/**
 * Adds the individual sections, settings, and controls to the theme customizer
 */



/**
 * Adds the Customize page to the WordPress admin area
 */

 
 
 
function trepi_mobile_head_customizer_menu() {
    add_menu_page( 'Mobile Menu Settings', 'Mobile Menu Settings', 'edit_theme_options', 'customize.php?autofocus[panel]=panel_Mobile_Nav', '', 'dashicons-smartphone', 10 );
}
add_action( 'admin_menu', 'trepi_mobile_head_customizer_menu' );







function trepi_customizer( $wp_customize ) {


$wp_customize->add_panel( 'panel_Mobile_Nav', array(
 'priority'       => 1,
  'capability'     => 'edit_theme_options',
  'theme_supports' => '',
  'title'          => 'Mobile Navigation Bar',
  'description'    => 'Change settings for each of the Mobile Navigation icons here',
) 
);



    $wp_customize->add_section(

        'trepi_section_one',

        array(

            'title' => 'Icon 1 - Home',

            'description' => 'Change and alter icon 1 and link.',

            'priority' => 1,
            
            'panel'  => 'panel_Mobile_Nav',

        )

    );



    $wp_customize->add_section(

        'trepi_section_two',

        array(

            'title' => 'Icon 2 - Email',

            'description' => 'Change and alter icon 2 and link.',

            'priority' => 2,
            
            'panel'  => 'panel_Mobile_Nav',

        )

    );
    

      $wp_customize->add_section(

        'trepi_section_three',

        array(

            'title' => 'Icon 3 - Phone',

            'description' => 'Change and alter icon 3 and link.',

            'priority' => 3,
            
            'panel'  => 'panel_Mobile_Nav',

        )

    );


    $wp_customize->add_section(

        'trepi_section_four',

        array(

            'title' => 'Icon 4 - Contact',

            'description' => 'Change and alter icon 4 and link.',

            'priority' => 4,
            
            'panel'  => 'panel_Mobile_Nav',

        )

    );



    $wp_customize->add_section(

        'trepi_section_five',

        array(

            'title' => 'Icon 5 - Info',

            'description' => 'Change and alter icon 5 and link.',

            'priority' => 5,
            
            'panel'  => 'panel_Mobile_Nav',

        )

    );


    $wp_customize->add_section(

        'trepi_section_six',

        array(

            'title' => 'Icon 6 - Menu',

            'description' => 'Change and alter icon 6 and link.',

            'priority' => 6,
            
            'panel'  => 'panel_Mobile_Nav',

        )

    );  

    $wp_customize->add_section(

        'trepi_section_colours',

        array(

            'title' => 'Navigation Colours',

            'description' => 'Change colours of Mobile Navigation Bar.',

            'priority' => 7,
            
            'panel'  => 'panel_Mobile_Nav',

        )

    ); 

    $wp_customize->add_section(

        'trepi_display_width',

        array(

            'title' => 'Display and Hide',

            'description' => 'Screen width to show and hide Mobile Navigation',

            'priority' => 7,
            
            'panel'  => 'panel_Mobile_Nav',

        )

    ); 

    $wp_customize->add_section(

        'trepi_section_head',

        array(

            'title' => 'Add Custom code to <head> tags',

            'description' => 'Add code between the <head></head> tags.',

            'priority' => 8,
            
            'panel'  => 'panel_Mobile_Nav',

        )

    );

    $wp_customize->add_section(

        'trepi_section_footer',

        array(

            'title' => 'Add Custom code to footer',

            'description' => 'Add code to the footer area of wordpress.',

            'priority' => 9,
            
            'panel'  => 'panel_Mobile_Nav',

        )

    );


    
   // ================================
   //  Email Link              =
   // ================================
    

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

        'section' => 'trepi_section_two',

        'type' => 'email',

        'sanitize_callback' => 'is_email',

    )

);

   // ================================
   //  Phone Link              =
   // ================================

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

        'section' => 'trepi_section_three',

        'type' => 'number',

        'sanitize_callback' => 'esc_textarea',

    )

);

     //  ============================
    //  = Contact Page            =
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
        'section' => 'trepi_section_four', 
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

        'type' => 'url', 

        'label' => 'Override the Contact Page link: (include http://) Note* not previewable', 

        'section' => 'trepi_section_four', 



    )

);


 //  ============================
    //  = About Us             =
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

        'section' => 'trepi_section_five', 

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

        'type' => 'url', 

        'label' => 'Override the Info Page link: (include http://) Note* not previewable', 

        'section' => 'trepi_section_five', 



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

            'section' => 'trepi_section_colours',

            'settings' => 'color-setting',

        )

    )

);


$wp_customize->add_setting(

    'icon-color-setting',

    array(

        'default' => '#ddd',

        'sanitize_callback' => 'sanitize_hex_color',

    )

);



$wp_customize->add_control(

    new WP_Customize_Color_Control(

        $wp_customize,

        'icon-color-setting',

        array(

            'label' => 'Icon Color',

            'section' => 'trepi_section_colours',

            'settings' => 'icon-color-setting',

        )

    )

);


$wp_customize->add_setting(

    'icon-color-setting-hover',

    array(

        'default' => '#fdfdfd',

        'sanitize_callback' => 'sanitize_hex_color',

    )

);



$wp_customize->add_control(

    new WP_Customize_Color_Control(

        $wp_customize,

        'icon-color-setting-hover',

        array(

            'label' => 'Icon Color:Hover',

            'section' => 'trepi_section_colours',

            'settings' => 'icon-color-setting-hover',

        )

    )

);



$wp_customize->add_setting( 'home-upload' );

 

$wp_customize->add_control(

    new WP_Customize_Image_Control(

        $wp_customize,

        'home-upload',

        array(

            'label' => 'Replace 1st Icon- Default home',

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

        'label' => 'Remove 1st Icon',

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

            'label' => 'Replace 2nd Icon - Default email',

            'section' => 'trepi_section_two',

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

        'label' => 'Remove 2nd Icon',

        'section' => 'trepi_section_two',

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

            'label' => 'Replace 3rd Icon - Default phone',

            'section' => 'trepi_section_three',

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

        'label' => 'Remove 3rd Icon',

        'section' => 'trepi_section_three',

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

            'label' => 'Replace 4th Icon - Default Contact',

            'section' => 'trepi_section_four',

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

        'label' => 'Remove 4th Icon',

        'section' => 'trepi_section_four',

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

            'label' => 'Replace 5th Icon - Default Info',

            'section' => 'trepi_section_five',

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

        'label' => 'Remove 5th Icon',

        'section' => 'trepi_section_five',

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

            'label' => 'Replace 6th Icon - Default Menu',

            'section' => 'trepi_section_six',

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

        'label' => 'Remove 6th Icon',

        'section' => 'trepi_section_six',

        'choices' => array(

            'inline-block; *display:block' => 'Turn On 6th Icon',

            'none' => 'Turn Off 6th Icon',           

            

        ),

    )

);


$wp_customize->add_setting(

    'trepi_nav_off',

    array(

        'default' => 'inline-block',

    )

);


$wp_customize->add_control(

    'trepi_nav_off',

    array(
        'type' => 'radio',
        'label' => 'Hide Mobile Navigation',
        'section' => 'trepi_display_width',
        'choices' => array(
            'inline-block; *display:block' => 'Turn On Mobile Navigation Bar',
            'none' => 'Turn Off Mobile Navigation Bar',        
        ),
    )
);





$wp_customize->add_setting(

    'trepi_width_hide',

    array(

        'default' => '600',

    )

);



$wp_customize->add_control(

    'trepi_width_hide',

    array(

        'label' => 'Max width in px to display mobile navigation bar',

        'section' => 'trepi_display_width',

        'type' => 'number',

        'sanitize_callback' => 'esc_textarea',

    )

);

}

add_action( 'customize_register', 'trepi_customizer' );









?>