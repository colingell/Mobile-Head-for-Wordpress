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

        'section' => 'trepi_section_head',

        'type' => 'textarea',

        'sanitize_callback' => 'example_sanitize_text',

    )

);

}

add_action( 'customize_register', 'header_customizer' );

/**
 * Create the area where code created can be added to the head of wordpress
 */


add_action('wp_head', 'hook_head_trepidation');
function hook_head_trepidation() {    ?>
		
 <?php echo get_theme_mod( 'header_add_one', '' ); 

// Extra add to head for icons styles
?>
<style type="text/css" >
.mobileIcon i.fa, .mobileIcon a { color:<?php echo get_theme_mod( 'icon-color-setting', '#ddd' ); ?> }
.mobileIcon i.fa:hover, .mobileIcon a:hover { color:<?php echo get_theme_mod( 'icon-color-setting-hover', '#fdfdfd' ); ?> }

.hideme .mobileNavigation { display:<?php echo get_theme_mod( 'trepi_nav_off', '' ); ?> }
<?php 
if (get_theme_mod ( 'trepi_nav_off') == 'none'  ) 
{
?>
body
{margin-top: 0 !important;}
<?php
}
?>
@media (min-width: <?php echo get_theme_mod( 'trepi_width_hide', '' ); ?>px)
{ .hideme .mobileNavigation 
{
display: none !important;
} 
}
@media (max-width: <?php echo get_theme_mod( 'trepi_width_hide', '' ); ?>px)
{ body 
{
margin-top: 52px;
} }

</style>
<?php
}