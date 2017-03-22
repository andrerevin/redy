<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Redy
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="profile" href="http://gmpg.org/xfn/11">

    <!-- Bootstrap 4 Start -->
    <link type="text/css" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="<?php echo get_template_directory_uri() ?>/css/bootstrap-grid.min.css" rel="stylesheet">
    <link type="text/css" href="<?php echo get_template_directory_uri() ?>/css/bootstrap-reboot.min.css" rel="stylesheet">
    <!-- Bootstrap 4 End -->  
    
    <link type="text/css" href="<?php echo get_template_directory_uri() ?>/style.css" rel="stylesheet">
    <!-- Style Redy End -->
    
    <!-- Addons -->
    <link type="text/css" href="<?php echo get_template_directory_uri() ?>/css/ionicons.min.css" rel="stylesheet">
    <link type="text/css" href="<?php echo get_template_directory_uri() ?>/css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" href="<?php echo get_template_directory_uri() ?>/css/animate.min.css" rel="stylesheet">
  

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'redy' ); ?></a> -->

	<header id="masthead" class="site-header container-fluid header-border-1" role="banner">
		

		<nav id="site-navigation" class="main-navigation right navbar navbar-toggleable-md navbar-light px-1" role="navigation">
            
            
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#primary_nav_wrap" aria-expanded="false" aria-label="Toggle navigation"><span class="small"><?php esc_html_e( 'Primary Menu', 'redy' ); ?></span></button>
            
            
            
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a><!-- .navbar-brand -->
            
            
            
			<?php wp_nav_menu( array ( 
    'menu-1' => esc_html__( 'Primary', 'redy' ), 
    'container' => 'div',
    'container_class' => 'collapse navbar-collapse navbar-collapse justify-content-end', 
    'container_id' => 'primary_nav_wrap', 
    'menu_class' => 'menu navbar-nav', 
    'menu_id' => '',
    'echo' => true, 
    'fallback_cb' => 'wp_page_menu', 
    'before' => '<span class="nav-item nav-link">', 
    'after' => '</span>', 
    'link_before' => '', 
    'link_after' => '', 
    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
    'item_spacing' => 'preserve',
    'depth' => 0, 
    'walker' => '', 
    'theme_location' => '' 
) ); ?>
            
            
            
		</nav><!-- #site-navigation -->
        
        <div class="site-branding container">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->
        
	</header><!-- #masthead -->

	<div id="content" class="site-content container">