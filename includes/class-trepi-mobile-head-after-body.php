<?php

/* Original used a hack shutdown function with preg_replace to Add hook to after body */





add_action('shutdown', function() {

    $final = '';

    $levels = ob_get_level();

    for ($i = 0; $i < $levels; $i++){

        $final .= ob_get_clean();

    }

    echo apply_filters('final_output', $final);

}, 0);



add_filter('final_output', function($output) {          

    $trepi_after_body = apply_filters('trepi_after_body',''); 

    $output = preg_replace("/(\<body.*\>)/", "$1".$trepid_after_body, $output);

    return $output;

});



//add_action(‘trepi_after_body’,function($trepi_after_body){

//$trepi_after_body.=’My Content’;

//return $trepi_after_body;

//});



add_action('trepi_after_body',function($trepi_after_body){

    $trepi_after_body.='';

    return $trepi_after_body;

});



/* End of add hook to after body */

?>



<?php



/* Above now replaced with wp_footer and using CSS to display as absolute to the top of the view port */



add_action('wp_footer', 'trepi_hook_to_after_body', 1, 1);



function trepi_hook_to_after_body() { 



?>

<div class="hideme">



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



<div class="mobileNavigation" style="background-color:<?php echo get_theme_mod( 'color-setting'); ?>;">



  <div class="mobileContainer" style="background-color:<?php echo get_theme_mod( 'color-setting'); ?>;">



    <div class="mobileIcon" style="margin-top:2px; display:inline-block; text-align: justify;



    -ms-text-justify: distribute-all-lines;



    text-justify: distribute-all-lines;">







<div  id="icon1" style="display:<?php echo get_theme_mod( 'icon_one_off', 'inline-block; *display:block'); ?>; vertical-align: top; zoom:1;"> 

<a href="<?php echo esc_url( home_url( '/' ) ); ?> ">

<?php if(get_theme_mod('home-upload')) 

{ ?><img src="<?php echo get_theme_mod( 'home-upload' ); ?> "> <?php } else { echo

"<i class='fa fa-home' ></i>"; } ?>

<div class="bghover" style="border-radius:5px;  height:48px; width:48px; display:inline-block;">

</div><!-- .bghover --></a> </div><!-- #icon1 -->







<div  id="icon2" style="display:<?php echo get_theme_mod( 'icon_two_off', 'inline-block; *display:block'); ?>; vertical-align: top; zoom:1;"> 

<a href="mailto:<?php echo get_theme_mod( 'email_address', 'No Email' ); ?> ">

<?php if(get_theme_mod('mail-upload')) 

{ ?><img src="<?php echo get_theme_mod( 'mail-upload' ); ?> "> <?php } else { echo

"<i class='fa fa-envelope' ></i>"; } ?>

<div class="bghover" style="border-radius:5px;  height:48px; width:48px; display:inline-block;">

</div><!-- .bghover --></a> </div><!-- #icon2 -->



  



 <div  id="icon3" style="display:<?php echo get_theme_mod( 'icon_three_off', 'inline-block; *display:block'); ?>; vertical-align: top; zoom:1;">    

<a href="tel:<?php echo get_theme_mod( 'contact_number', 'No contact Number' ); ?> ">

<?php if(get_theme_mod('phone-upload')) 

{ ?><img src="<?php echo get_theme_mod( 'phone-upload' ); ?> "> <?php } else { echo

"<i class='fa fa-phone' ></i>"; } ?>

<div class="bghover" style="border-radius:5px;  height:48px; width:48px; display:inline-block;">

</div><!-- .bghover --></a> </div><!-- #icon3 -->



    



<div  id="icon4" style="display:<?php echo get_theme_mod( 'icon_four_off', 'inline-block; *display:block'); ?>; vertical-align: top; zoom:1;"> 
 
 <a href="<?php if(get_theme_mod('contact_pagefall')) { echo get_theme_mod('contact_pagefall'); } else { ?> ?p= <?php echo get_theme_mod('trepi_contact_page_options');} ?> "> 

<?php if(get_theme_mod('mail-contact')) 

{ ?><img src="<?php echo get_theme_mod( 'contact-upload' ); ?> "> <?php } else { echo

"<i class='fa fa-comment' ></i>"; } ?>

<div class="bghover" style="border-radius:5px;  height:48px; width:48px; display:inline-block;">

</div><!-- .bghover --></a> </div><!-- #icon4 -->



    



<div  id="icon5" style="display:<?php echo get_theme_mod( 'icon_five_off', 'inline-block; *display:block'); ?>; vertical-align: top; zoom:1;"> 

<a href="<?php if(get_theme_mod('about-usfall')) { echo get_theme_mod('about-usfall', '' ); } else { ?> ?p= <?php echo get_theme_mod('trepi_about_us_options', '' );} ?>" > 

<?php if(get_theme_mod('info-upload')) 

{ ?><img src="<?php echo get_theme_mod( 'info-upload' ); ?> "> <?php } else { echo

"<i class='fa fa-info' ></i>"; } ?>

<div class="bghover" style="border-radius:5px;  height:48px; width:48px; display:inline-block;">

</div><!-- .bghover --></a> </div><!-- #icon5 -->

    



<div  id="icon6" style="display:<?php echo get_theme_mod( 'icon_six_off', 'inline-block; *display:block'); ?>; vertical-align: top; zoom:1;" 
onclick="toggle_visibility('hideMe')" >
<div class="bghover" style="border-radius:5px; height:48px; width:48px; display:inline-block;"><?php if(get_theme_mod('info-upload')) 
{ ?><img src="<?php echo get_theme_mod( 'info-upload' ); ?>" id="maps" 
class="button" > <?php } else { ?><a href="#" class="icon6js"><?php echo
"<i "; ?>  class="fa fa-bars button" id="maps" ></i></a> <?php } ?>
</div><!-- .bghover --></a> 



</div><span class="stretch" style="width: 100%; display: inline-block;font-size: 0;line-height: 0;">
</div><!-- #icon6 -->

</div><!-- .mobileContainer-->  







<div class="hidemeholder" style="position:absolute; top:52px; width:100%; margin:0 auto;">



<div id="hideMe"style="display:none; position:relative; width:318px; margin:0 auto;">



<ul id="dropmenudown" >



<div id="droptriangle" style="border-color: transparent transparent <?php if(get_theme_mod('color-setting')) 

{ echo get_theme_mod( 'color-setting'); } else { ?> #1b2021; <?php } ?> "> </div>



  <div id='liholder' style="background:#1b2021; background-color:<?php echo get_theme_mod( 'color-setting'); ?>;" ><?php wp_nav_menu('title_li=&sort_column=menu_order&depth=2'); ?>



</div><!-- #liholder -->







</ul>



  </div><!-- #hideMe --></span>





 </div><!-- .mobileNavigation -->







</div><!-- .hideme -->

<?php

}

?>

<script type="text/javascript">

function toggle_visibility(a){var b=document.getElementById(a);"block"==b.style.display||""==b.style.display?b.style.display="none":b.style.display="block"}function MM_findObj(a,b){var c,d,e;for(b||(b=document),(c=a.indexOf("?"))>0&&parent.frames.length&&(b=parent.frames[a.substring(c+1)].document,a=a.substring(0,c)),!(e=b[a])&&b.all&&(e=b.all[a]),d=0;!e&&d<b.forms.length;d++)e=b.forms[d][a];for(d=0;!e&&b.layers&&d<b.layers.length;d++)e=MM_findObj(a,b.layers[d].document);return!e&&b.getElementById&&(e=b.getElementById(a)),e}function MM_swapImage(){var a,c,b=0,d=MM_swapImage.arguments;for(document.MM_sr=new Array,a=0;a<d.length-2;a+=3)null!=(c=MM_findObj(d[a]))&&(document.MM_sr[b++]=c,c.oSrc||(c.oSrc=c.src),c.src=d[a+2])}function showMenu(){document.getElementById("dropmenudown").style.display="block"}function hideMenu(){document.getElementById("dropmenudown").style.display="none"}

</script>



