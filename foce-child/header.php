<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<section class="top-nav">
		  <h6 class="title">Fleurs d'oranger & chat errants</h6>
		  <div class="container">
			<div class="btn">
			  <span class="bar1"></span>
			  <span class="bar2"></span>
			  <span class="bar3"></span>
			</div>

			<div class="menu">
			  <img src="<?php echo  get_stylesheet_directory_uri(). '/assets/images/logo.png'; ?>" class="logo">
			  <img src="<?php echo  get_stylesheet_directory_uri(). '/assets/images/cat.png'; ?>" class="cat-1">
			  <img src="<?php echo  get_stylesheet_directory_uri(). '/assets/images/cat-1.png'; ?>" class="cat-2">
			  <img src="<?php echo  get_stylesheet_directory_uri(). '/assets/images/cat-2.png'; ?>" class="cat-3">
			  <img src="<?php echo  get_stylesheet_directory_uri(). '/assets/images/orchid.png'; ?>" class="orchid">
			  <img src="<?php echo  get_stylesheet_directory_uri(). '/assets/images/Sunflower.png'; ?>" class="sunflower">
			  <img src="<?php echo  get_stylesheet_directory_uri(). '/assets/images/random_flower.png'; ?>" class="random-flower">
			  <img src="<?php echo  get_stylesheet_directory_uri(). '/assets/images/flower.png'; ?>" class="flower">
			  <img src="<?php echo  get_stylesheet_directory_uri(). '/assets/images/Hibiscus.png'; ?>" class="hibiscus">
			  <ul>
				<li class="move-margin"><a href="#story">Histoire</a></li>
				<li><a href="#characters">Personnages</a></li>
				<li><a href="#place">Lieu</a></li>
				<li><a href="#studio" class="respons">Studio Koukaki</a></li>
				<li class="copyright">STUDIO KOUKAKI</li>
			  </ul>
			</div>
		  </div>  
		</section>
	</header><!-- #masthead -->
