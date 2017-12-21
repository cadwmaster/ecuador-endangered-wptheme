<?php 
get_header(); 
get_template_part( 'template-parts/general-top_banner');
?>

<div id="take-action">
	<div class="button_action big"><?php _e('take action', 'ecuador-endangered'); ?></div> 
</div>
<div id="primary" class="content-area home">
	<main id="main" class="site-main" role="main">
		
	<section id="news">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
				* Include the Post-Format-specific template for the content.
				* If you want to override this in a child theme, then include a file
				* called content-___.php (where ___ is the Post Format name) and that will be used instead.
				*/
			get_template_part( 'template-parts/content', get_post_format() );

		// End the loop.
		endwhile;
		?>
	</section>

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php
echo '<div class="wrapper-button"><a href="/category/news/"><div class="button_action">' . __('Load more', 'twentysixteen') . '</div></a></div>'. PHP_EOL;

get_template_part( 'template-parts/general-pictures_bar');
get_template_part( 'template-parts/general-take_action'); 

if ( is_active_sidebar( 'custom-side-bar' ) ) : 
	echo '<section id="custom-sidebar">';
	dynamic_sidebar( 'custom-side-bar' );
	echo '</section>';
endif;

get_footer(); 
?>
