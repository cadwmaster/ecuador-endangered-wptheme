<?php
/**
 * Template Name: Learn More
 */

get_header(); 

echo '<div class="content-header">'. PHP_EOL;
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        echo '<div class="title">' . get_the_title() . '</div>';
        echo '<div class="description">' . get_the_content() . '</div>';
    endwhile;
endif;
echo '</div>'. PHP_EOL;

$category_query_args = array(
    'category_name' => 'reports',
    'posts_per_page' => 8,
    'meta_key' => 'order',
	'orderby' => 'meta_value',
	'order'	=> 'ASC'
);

$category_query = new WP_Query( $category_query_args );
$reports = array();
echo '<div class="reports">'. PHP_EOL;
if ( $category_query->have_posts() ) : 
    while ($category_query->have_posts()) : 
        $category_query->the_post();
        $report  = '<div class="report">'. PHP_EOL;
        $report .= '<div class="image" style="background-image: url(' . get_the_post_thumbnail_url() . ');"></div>'. PHP_EOL;
        $report .= '<div class="content">'. PHP_EOL;
        $report .= '<div class="title">' . get_the_title() . '</div>'. PHP_EOL;
        $report .= '<div class="description">' . get_the_content() . '</div>'. PHP_EOL;
        if (get_field('label_to_source') and get_field('link_to_source')) {
            $report .= '<div class="link"><a href="' . get_field('link_to_source') . '">' .  get_field('label_to_source') . '</a></div>'. PHP_EOL;
        }
        $report .= '</div>'. PHP_EOL;
        $report .= '</div>';
        array_push($reports, $report);
    endwhile;
endif;

if (get_field('youtube_id')) {
    $video  = '<div class="wrapper-video">';
    $video .= '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.get_field('youtube_id').'" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>';
    $video .= '</div>';
    array_splice( $reports, 2 , 0, $video );
}

foreach($reports as $report) {
    echo $report;
}
echo '</div>'. PHP_EOL;

// echo get_next_posts_link('Go to next page');
// echo '<div class="wrapper-button"><a href="/category/reports/"><div class="button_action">' . __('Load more', 'twentysixteen') . '</div></a></div>'. PHP_EOL;

get_template_part( 'template-parts/general-pictures_bar');
get_template_part( 'template-parts/general-take_action');
if ( is_active_sidebar( 'custom-side-bar' ) ) : 
    echo '<section id="custom-sidebar">';
            dynamic_sidebar( 'custom-side-bar' );
    echo '</section>';
endif; 
get_footer(); 
?>
