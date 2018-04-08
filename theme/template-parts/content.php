<?php
/**
 * The template part for displaying content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-image" style="background-image: url(<?php echo the_post_thumbnail_url( 'full' ); ?>)"></div>
	<div class="content-wrapper">
		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php 
				echo the_content_formatted();
			?>
			<div class="entry-link">
			<?php 
			if (get_field('link_to_source') and get_field('label_to_source')) {
				$target = get_field('target_to_source') ?: '_blank';
				echo '<a href="'. get_field('link_to_source') . '" target="' . $target . '">' . get_field('label_to_source') . '</a>';
			}	
			?>
			</div>
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-## -->
