<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
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
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<script src="wp-content/themes/casa/js/jquery.min.js"></script>
	<script src="wp-content/themes/casa/js/jquery.backstretch.min.js"></script>
	<script>
	<?php if(is_page('home')){ ?>
	    $.backstretch("wp-content/themes/casa/images/bailarinas.jpg");
	<?php } ?>
	<?php if(is_page('quem-somos')){ ?>
	    $.backstretch("wp-content/themes/casa/images/bg-quem-somos.jpg");
	<?php } ?>
	<?php if(is_page('dancas-e-cursos')){ ?>
	    $.backstretch("wp-content/themes/casa/images/bg-dancas-e-cursos.jpg");
	<?php } ?>
	<?php if(is_page('parceiros')){ ?>
	    $.backstretch("wp-content/themes/casa/images/bg-parceiros.jpg");
	<?php } ?>
	<?php if(is_page('contato-2')){ ?>
	    $.backstretch("wp-content/themes/casa/images/bg-contato.jpg");
	<?php } ?>
	<?php if(is_page('noticias')){ ?>
	    $.backstretch("wp-content/themes/casa/images/bg-noticias.jpg");
	<?php } ?>
    </script>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body>
<div id="container-casa">
<nav id="menu" role="navigation">
	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
</nav><!-- #access -->
<?php if(!is_page('home')){ ?>
<div id="page-casa">
	<div id="main-casa">
<?php }else{ ?>
	<div id="logo">
		<img src="wp-content/themes/casa/images/logomarca.png">
	</div>
<?php } ?> 