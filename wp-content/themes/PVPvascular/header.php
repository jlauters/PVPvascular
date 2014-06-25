<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php wp_title(); ?></title>
	
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>
    <div id="page">
        <div id="header">
            <div class="header-container">
                <div class="logo-text text-center"><a href="<?php echo home_url(); ?>">The Vascular Centers</a></div>
                <div id="main-menu"><?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?></div>
            </div><!-- header container -->
        </div><!--header -->

    <div id="main">
