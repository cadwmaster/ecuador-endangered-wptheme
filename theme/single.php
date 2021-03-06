<?php
/**
 * The Template for displaying all single posts.
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php 
get_template_part( 'template-parts/general-pictures_bar');
get_template_part( 'template-parts/general-take_action'); 

if ( is_active_sidebar( 'custom-side-bar' ) ) :
    echo '<section id="custom-sidebar">';
    dynamic_sidebar( 'custom-side-bar' );
    echo '</section>';
endif;

get_footer(); 
?>