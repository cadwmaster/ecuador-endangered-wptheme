<?php
/**
 * @package Sixteen
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="featured-image-single">
			<?php if (has_post_thumbnail() )
				the_post_thumbnail();
			?>
		</div>
		<div class="autor">
			<?php template_posted_on(false); ?>
		</div><!-- .entry-meta -->
		<?php edit_post_link( __( 'Edit', 'sixteen' ), '<span class="edit-link">', '</span>' ); ?>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sixteen' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
