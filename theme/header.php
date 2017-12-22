<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slippry/1.4.0/slippry.min.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111179240-1"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-111179240-1');
	</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-main">
				<div class="site-branding">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_footer.png" />
                    </a>
				</div><!-- .site-branding -->

				<nav id="language-navigation" class="language-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Language Menu', 'twentysixteen' ); ?>">
					<ul>
						<?php pll_the_languages(array('hide_if_empty'=>0)); ?>
					</ul>
				</nav>

				<?php if ( has_nav_menu( 'primary' ) ) : ?>
					<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'menu_class'     => 'primary-menu',
							) );
						?>
					</nav><!-- .main-navigation -->
				<?php endif; ?>
			</div><!-- .site-header-main -->
		</header><!-- .site-header -->

		<div id="content" class="site-content">
