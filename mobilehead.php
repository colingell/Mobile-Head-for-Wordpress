<?php

/*

Plugin Name: Trepidation Mobile Head Plugin

Plugin URI: http://trepidation.com

Description: A plugin by trepidation Creative for creating a mobile head

Author: Colin Gell

Version: 1.0

Author URI: http:/trepidation.com

*/




function trepidation_mobile_head_styles()
{
    // Register the style like this for a plugin:
    wp_register_style( 'trepidation-custom-style', plugins_url( '/css/plugin-style.css', __FILE__ ), array(), '20120208', 'all' );
     
    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'trepidation-custom-style' );
}
add_action( 'wp_enqueue_scripts', 'trepidation_mobile_head_styles' );


add_action('wp_head', 'hook_css_trepidation');
// custom admin CSS
function hook_css_trepidation() {    ?>

        // css goes here
    <?php }

function trepidation_mobile_head() {

do_action('trepidation_mobile_head');

}





add_action('trepidation_mobile_head', 'hook_css_mobile_head');

function hook_css_mobile_head() {

    ?>



<div class="hideme">

<div class="mobileNavigation" style="background-color:<?php echo get_theme_mod( 'color-setting'); ?>;">

  <div class="mobileContainer" style="background-color:<?php echo get_theme_mod( 'color-setting'); ?>;">

    <div class="mobileIcon" style="margin-top:2px; display:inline-block; text-align: justify;

    -ms-text-justify: distribute-all-lines;

    text-justify: distribute-all-lines;">



<div  id="icon1" style="display:<?php echo get_theme_mod( 'icon_one_off', 'inline-block; *display:block'); ?>; vertical-align: top; zoom:1;"> 

<a href="<?php echo esc_url( home_url( '/' ) ); ?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('click to call','','<?php if(get_theme_mod('home-upload')): ?><?php echo get_theme_mod( 'home-upload' ); ?><?php else: ?>

<?php plugins_url('/img/white/home168.png', __FILE__); ?>

<?php endif; ?>',1)"><div class="bghover" style="border-radius:5px;  height:48px; width:48px; display:inline-block;"><img src="<?php if(get_theme_mod('home-upload')): ?><?php echo get_theme_mod( 'home-upload' ); ?><?php else: ?>

<?php plugins_url('/img/white/home168.png', __FILE__); ?>


<?php endif; ?>" alt="home link" width="50" height="47"  style="padding:8px; border-radius:4px; " id="click to call"></div><!-- .bghover --></a> </div><!-- #icon1 -->



<div  id="icon2" style="display:<?php echo get_theme_mod( 'icon_two_off', 'inline-block; *display:block'); ?>; vertical-align: top; zoom:1;"> 

<a href="mailto:<?php echo get_theme_mod( 'email_address', 'No Email' ); ?>" onMouseOut="MM_swapImgRestore()" OnMouseOver="MM_swapImage('contact','','<?php if(get_theme_mod('mail-upload')): ?><?php echo get_theme_mod( 'mail-upload' ); ?><?php else: ?>

<?php plugins_url('/img/white/mail59.png', __FILE__); ?>

<?php endif; ?>',1)"><div class="bghover" style="border-radius:5px; height:48px; width:48px; display:inline-block;"><img src="<?php if(get_theme_mod('mail-upload')): ?><?php echo get_theme_mod( 'mail-upload' ); ?><?php else: ?>

<?php plugins_url('/img/white/mail59.png', __FILE__); ?>

<?php endif; ?>" alt="email" width="50" height="47" style="padding:8px; border-radius:4px;" id="contact"></div><!-- .bghover --></a></div><!-- #icon2 -->

  

 <div  id="icon3" style="display:<?php echo get_theme_mod( 'icon_three_off', 'inline-block; *display:block'); ?>; vertical-align: top; zoom:1;">    

<a href="tel:<?php echo get_theme_mod( 'contact_number', 'No contact Number' ); ?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('facebook','','<?php if(get_theme_mod('phone-upload')): ?><?php echo get_theme_mod( 'phone-upload' ); ?><?php else: ?>

<?php plugins_url('/img/white/phone16.png', __FILE__); ?>

<?php endif; ?>',1)"><div class="bghover" style="border-radius:5px; height:48px; width:48px; display:inline-block;"><img src="<?php if(get_theme_mod('phone-upload')): ?><?php echo get_theme_mod( 'phone-upload' ); ?><?php else: ?>

<?php plugins_url('/img/white/phone16.png', __FILE__); ?>

<?php endif; ?>" alt="phone" width="50" height="47" style="padding:8px; border-radius:4px;" id="facebook" ></div><!-- .bghover --></a></div><!-- #icon3 -->

    

<div  id="icon4" style="display:<?php echo get_theme_mod( 'icon_four_off', 'inline-block; *display:block'); ?>; vertical-align: top; zoom:1;"> 

 <a href="<?php echo get_theme_mod( 'contact_pagefall', '' ); ?><?php echo get_theme_mod( 'contact_page', '' ); ?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('twitter','','<?php if(get_theme_mod('contact-upload')): ?><?php echo get_theme_mod( 'contact-upload' ); ?><?php else: ?>

<?php plugins_url('/img/white/business134.png', __FILE__); ?>

<?php endif; ?>',1)"><div class="bghover" style="border-radius:5px;  height:48px; width:48px; display:inline-block;"><img src="<?php if(get_theme_mod('contact-upload')): ?><?php echo get_theme_mod( 'contact-upload' ); ?><?php else: ?>

<?php plugins_url('/img/white/business134.png', __FILE__); ?>

<?php endif; ?>" alt="Contact Us" width="50" height="47" style="padding:8px; border-radius:4px;" id="twitter"></div><!-- .bghover --></a></div><!-- #icon4 -->

    

<div  id="icon5" style="display:<?php echo get_theme_mod( 'icon_five_off', 'inline-block; *display:block'); ?>; vertical-align: top; zoom:1;"> 

<a href="<?php echo get_theme_mod( 'about_usfall', '' ); ?><?php echo get_theme_mod( 'about_us', '#' ); ?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('youTube','','<?php if(get_theme_mod('info-upload')): ?><?php echo get_theme_mod( 'info-upload' ); ?><?php else: ?>

<?php plugins_url('/img/white/info5.png', __FILE__); ?>

<?php endif; ?>',1)"><div class="bghover" style="border-radius:5px;  height:48px; width:48px; display:inline-block;"><img src="<?php if(get_theme_mod('info-upload')): ?><?php echo get_theme_mod( 'info-upload' ); ?><?php else: ?>

<?php plugins_url('/img/white/info5.png', __FILE__); ?>

<?php endif; ?>" alt="About Us" width="50" height="47" style="padding:8px; border-radius:4px;" id="youTube"></div><!-- .bghover --></a> </div><!-- #icon5 -->

    

<div  id="icon6" style="display:<?php echo get_theme_mod( 'icon_six_off', 'inline-block; *display:block'); ?>; vertical-align: top; zoom:1;">

<div class="bghover" style="border-radius:5px; height:48px; width:48px; display:inline-block;"><img src="<?php if(get_theme_mod('menu-upload')): ?><?php echo get_theme_mod( 'menu-upload' ); ?><?php else: ?>

<?php plugins_url('/img/white/menu48.png', __FILE__); ?>

<?php endif; ?>" alt="menu" style="  padding:8px;" width="50" height="47" id="maps" class="button" onclick="toggle_visibility('hideMe')" /></div><!-- .bghover --></a> 

</div><span class="stretch" style="width: 100%; display: inline-block;font-size: 0;line-height: 0;">

</div><!-- #icon6 -->

</div>



<div class="hidemeholder" style="position:absolute; top:52px; width:100%; margin:0 auto;">

<div id="hideMe"style="display:none; position:relative; width:318px; margin:0 auto;">

<ul id="dropmenudown" >

<div id="droptriangle" style="border-color: transparent transparent <?php echo get_theme_mod( 'color-setting'); ?>;"></div>

  <div id='liholder' style="background:#1b2021; background-color:<?php echo get_theme_mod( 'color-setting'); ?>;" ><?php wp_nav_menu('title_li=&sort_column=menu_order&depth=2'); ?>

</div><!-- #liholder -->



</ul>

  </div><!-- #hideMe --></span>

</div> <!-- .hidemeholder -->

 </div><! .mobileNavigation -->

</div>

</div><! .hideme -->



<?php

}



?>





<?php

/**

 * Adds to Head

 */



function header_customizer( $wp_customize ) {

    $wp_customize->add_section(

        'header_add',

        array(

            'title' => 'Add Code between <head></head>',

            'description' => 'Code can be inserted into the header here.',

            'priority' => 56,

        )

    );



$wp_customize->add_setting(

    'header_add_one',

    array(

        'default' => '',

    )

);



$wp_customize->add_control(

    'header_add_one',

    array(

        'label' => 'Add Code to Header',

        'section' => 'header_add',

        'type' => 'textarea',

        'sanitize_callback' => 'example_sanitize_text',

    )

);

}

add_action( 'customize_register', 'header_customizer' );













/**

 * Adds to footer

 */



function footer_customizer( $wp_customize ) {

    $wp_customize->add_section(

        'footer_add',

        array(

            'title' => 'Footer Text',

            'description' => 'Extra Text or code can be added into the footer here',

            'priority' => 55,

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