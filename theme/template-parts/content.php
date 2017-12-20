<?php
/**
 * The template part for displaying content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-image">
		<?php twentysixteen_post_thumbnail(); ?>
	</div>
	<div class="content-wrapper">
		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php 
				if (strlen(get_the_content()) >= 500) { 
					echo substr(get_the_content(''), 0, 500)."...";
				} else {
					echo get_the_content('');
				}
			?>
			<?php if (get_field('link_to_source')) : ?>
				<div class="entry-link">
					<a href="<?php echo get_field('link_to_source');?>"><?php _e('learn_more report link', 'twentysixteen'); ?></a>
				</div>
			<?php else : ?>
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'sixteen' ) ); ?>
			<?php endif; ?>
		</div><!-- .entry-content -->
		
	</div>
</article><!-- #post-## -->
