<?php

add_action('wp_footer', 'trepi_hook_to_after_body', 1, 1);

function trepi_hook_to_after_body() { ?>

<div class="hideme">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="mobileNavigation" style="background-color:<?php echo get_theme_mod( 'color-setting-bar'); ?>;">

  <div class="mobileContainer" style="background-color:<?php echo get_theme_mod( 'color-setting-bar'); ?>;">

    <div class="mobileIcon" style="margin-top:2px; display:inline-block; text-align: justify;  -ms-text-justify: distribute-all-lines;  text-justify: distribute-all-lines;">
	
<div  id="icon1" style="display:<?php echo get_theme_mod( 'icon_one_off', 'inline-block; *display:block'); ?>; vertical-align: top; zoom:1;"> 

<a href="<?php echo esc_url( home_url( '/' ) ); ?> ">

<?php if(get_theme_mod('home-upload')) { ?><img src="<?php echo get_theme_mod( 'home-upload' ); ?> "> <?php } else { echo

"<i class='fa fa-home' ></i>"; } ?>
</a>
</div><!-- #icon1 -->







<div  id="icon2" style="display:<?php echo get_theme_mod( 'icon_two_off', 'inline-block; *display:block'); ?>; vertical-align: top; zoom:1;"> 
<a href="mailto:<?php echo get_theme_mod( 'email_address', 'No Email' ); ?> ">

<?php if(get_theme_mod('mail-upload')) 

{ ?><img src="<?php echo get_theme_mod( 'mail-upload' ); ?> "> <?php } else { echo

"<i class='fa fa-envelope' ></i>"; } ?>
</a>
</div><!-- #icon2 -->



  



 <div  id="icon3" style="display:<?php echo get_theme_mod( 'icon_three_off', 'inline-block; *display:block'); ?>; vertical-align: top; zoom:1;">    

<a href="tel:<?php echo get_theme_mod( 'contact_number', 'No contact Number' ); ?> ">

<?php if(get_theme_mod('phone-upload')) 

{ ?><img src="<?php echo get_theme_mod( 'phone-upload' ); ?> "> <?php } else { echo

"<i class='fa fa-phone' ></i>"; } ?>
</a> 
</div><!-- #icon3 -->



    



<div  id="icon4" style="display:<?php echo get_theme_mod( 'icon_four_off', 'inline-block; *display:block'); ?>; vertical-align: top; zoom:1;"> 
 
 <a href="<?php if( get_theme_mod('contact-pagefall')) { echo get_theme_mod('contact-pagefall', ''); } else { ?>?p=<?php echo get_theme_mod('trepi_contact_page_options', '');} ?> "> 

<?php if(get_theme_mod('contact-upload')) 

{ ?><img src="<?php echo get_theme_mod( 'contact-upload' ); ?> "> <?php } else { echo

"<i class='fa fa-comment' ></i>"; } ?>
</a> 
</div><!-- #icon4 -->



    



<div  id="icon5" style="display:<?php echo get_theme_mod( 'icon_five_off', 'inline-block; *display:block'); ?>; vertical-align: top; zoom:1;"> 

<a href="<?php if( get_theme_mod('about-usfall')) { echo get_theme_mod('about-usfall', '' ); } else { ?>?p=<?php echo get_theme_mod('trepi_about_us_options', '' );} ?>" > 

<?php if(get_theme_mod('info-upload')) 

{ ?><img src="<?php echo get_theme_mod( 'info-upload' ); ?> "> <?php } else { echo

"<i class='fa fa-info' ></i>"; } ?></a>
</div><!-- #icon5 -->

    


<div onclick="trepitogglediv('trepdropmenudown')" id="icon6" style="display:<?php echo get_theme_mod( 'icon_six_off', 'inline-block; *display:block'); ?>; vertical-align: top; zoom:1;"  >
<?php if(get_theme_mod('menu-upload')) 
{ ?><img src="<?php echo get_theme_mod( 'menu-upload' ); ?>" id="maps"  > <?php } else { ?>
<i class="fa fa-bars button" id="maps" ></i> <?php } ?>
<span class="stretch" style="width: 100%; display: inline-block; font-size: 0; line-height: 0;"></span>
</div><!-- #icon6 -->


 


<div style="display: none; position:absolute; top:52px;  width:318px; margin:0 auto;" id="trepdropmenudown" class="dropdown-menu" >
<div style="position: relative; float: right;">
<div id="droptriangle" style="border-color: transparent transparent <?php if(get_theme_mod('color-setting-bar')) 
{ echo get_theme_mod( 'color-setting-bar'); } else { ?> #1b2021; <?php } ?> "> </div>
  <div id='liholder' style="background:#1b2021; background-color:<?php echo get_theme_mod( 'color-setting-bar'); ?>;" ><?php wp_nav_menu('title_li=&sort_column=menu_order&depth=2'); ?>
</div><!-- #liholder -->
</div>
</div>
<script type="text/javascript">
function trepitogglediv(id) {
    var div = document.getElementById(id);
    div.style.display = div.style.display == "block" ? "none" : "block";
}
</script>

</div><!-- .mobileContainer-->  

 </div><!-- .mobileNavigation -->


</div><!-- .hideme -->

<?php } 





