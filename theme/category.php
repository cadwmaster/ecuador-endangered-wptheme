<?php
/**
 * The template for displaying all category pages.
 *
 */

get_header(); 
get_template_part( 'template-parts/general-top_banner');
?>

	<div id="primary-home" class="content-area">
		<h2 id="page-title"><?php single_cat_title(); ?></h2>
		<main id="main" class="site-main" role="main">
			<section id="category">
				<?php while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content' );
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() )
							comments_template();
					?>

				<?php endwhile; // end of the loop. ?>
				
				<?php theme_pagination(); ?>
			</section>
		</main><!-- #main -->
	</div><!-- #primary-home-->

<?php
get_template_part( 'template-parts/general-pictures_bar');

if ( is_active_sidebar( 'custom-side-bar' ) ) : 
    echo '<section id="custom-sidebar">';
    dynamic_sidebar( 'custom-side-bar' );
    echo '</section>';
endif;
get_footer(); 
?>