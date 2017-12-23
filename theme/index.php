<?php 
get_header(); 
get_template_part( 'template-parts/general-top_banner');
?>

<div id="take-action">
	<a href="/take-action">
		<div class="button_action big"><?php _e('take action', 'ecuador-endangered'); ?></div>
	</a>
</div>
<div id="primary" class="content-area home">
	<main id="main" class="site-main" role="main">
		
	<section id="news">
		<?php
		$args = array( 'posts_per_page' => 8, 'category_name' => 'news' );
		$news = get_posts( $args );
		foreach ( $news as $post ) : setup_postdata( $post );
			get_template_part( 'template-parts/content', get_post_format() );
		endforeach; 
		wp_reset_postdata();
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
