<?php
	global $avia_config;

	$style 		= $avia_config['box_class'];
	$responsive	= avia_get_option('responsive_active') != "disabled" ? "responsive" : "fixed_layout";
	$blank 		= isset($avia_config['template']) ? $avia_config['template'] : "";	
	$av_lightbox= avia_get_option('lightbox_active') != "disabled" ? 'av-default-lightbox' : 'av-custom-lightbox';
	$preloader	= avia_get_option('preloader') == "preloader" ? 'av-preloader-active av-preloader-enabled' : 'av-preloader-disabled';

	
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="<?php echo " html_{$style} ".$responsive." ".$preloader." ".$av_lightbox." ".avia_header_class_string();?> ">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<!-- page title, displayed in your browser bar -->
<title><?php if(function_exists('avia_set_title_tag')) { echo avia_set_title_tag(); } ?></title>

<?php
/*
 * outputs a rel=follow or nofollow tag to circumvent google duplicate content for archives
 * located in framework/php/function-set-avia-frontend.php
 */
 if (function_exists('avia_set_follow')) { echo avia_set_follow(); }


 /*
 * outputs a favicon if defined
 */
 if (function_exists('avia_favicon'))    { echo avia_favicon(avia_get_option('favicon')); }
?>


<!-- mobile setting -->
<?php

if( strpos($responsive, 'responsive') !== false ) echo '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">';
?>


<!-- Scripts/CSS and wp_head hook -->
<?php
/* Always have wp_head() just before the closing </head>
 * tag of your theme, or you will break many plugins, which
 * generally use this hook to add elements to <head> such
 * as styles, scripts, and meta tags.
 */

// wp_head();

?>
<meta name="geo.region" content="US-CA" /> 
<meta name="geo.placename" content="330 A Street
San Diego, CA 92101, US" /> 
<meta name="geo.position" content="32.719091, -117.161353" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/enfold-landing.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/grid.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">



</head>




<body id="top" <?php body_class($style." ".$avia_config['font_stack']." ".$blank); avia_markup_helper(array('context' => 'body')); ?>>



	<div class="container">
		<div class="row pt24">
			<div class="col-md-6">
				<a href="<?php echo home_url(); ?>" class="logo">
					<img src="http://www.steelsmithgroup.com/wp-content/themes/enfold/images/logo.jpg" height="89" width="362" alt="Steelsmithgroup">
				</a>
			</div>
			<!-- /.col-md-6 -->
			<div class="col-md-6">

				<div class="call_me">
					<span class="phone_number">
<?php
$key = 'tracking_phone';
$themeta = get_post_meta($post->ID, $key, TRUE);
if($themeta != '') { ?>
<?php echo get_post_meta($post->ID, $key, true);?>
<?php } else { ?>
619-493-0492

	<?php } ?>
					</span>
				</div>
				<!-- /.call_me -->
			</div>
			<!-- /.col-md-6 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
	<header class=" header_color light_bg_color  av_header_top av_logo_left av_bottom_nav_header av_menu_left av_slim av_header_sticky av_header_shrinking_disabled av_header_stretch av_mobile_menu_phone av_header_searchicon_disabled av_header_unstick_top_disabled av_seperator_big_border">
		
	
<div id="header_main_alternate" class="container_wrap"><div class="container">
	<?php 
	if(!$blank) //blank templates dont display header nor footer
	{ 
		 //fetch the template file that holds the main menu, located in includes/helper-menu-main.php
         // get_template_part( 'includes/helper', 'main-menu' );

					    echo "<nav class='main_menu' data-selectname='".__('Select a page','avia_framework')."' ".avia_markup_helper(array('context' => 'nav', 'echo' => false)).">";
						        $avia_theme_location = 'avia';
						        $avia_menu_class = $avia_theme_location . '-menu';
						        $args = array(
						            'theme_location'	=> $avia_theme_location,
						            'menu_id' 			=> $avia_menu_class,
						            'menu_class'		=> 'menu av-main-nav',
						            'container_class'	=> $avia_menu_class.' av-main-nav-wrap'.$icon_beside,
						            'fallback_cb' 		=> 'avia_fallback_menu',
						            'walker' 			=> new avia_responsive_mega_menu()
						        );
						
						        wp_nav_menu($args);

	} ?>




</div>
<a href="#" class="toggle">toggle</a>

</div>

</header>
	<div class="hero_image">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hero-images.png" height="240" width="1600" alt="">
	</div>
	<!-- /.hero_image -->




	<div id='wrap_all'>

	<?php 
	if(!$blank) //blank templates dont display header nor footer
	{ 
		 //fetch the template file that holds the main menu, located in includes/helper-menu-main.php
       //  get_template_part( 'includes/helper', 'main-menu' );

	} ?>
		
	<div id='main' data-scroll-offset='<?php echo avia_header_setting('header_scroll_offset'); ?>'>

	<?php // do_action('ava_after_main_container'); ?>
