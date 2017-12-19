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

echo '<div class="reports">'. PHP_EOL;
if (function_exists('get_fields')) :
    $fields = get_fields();
    $reports = array();
    for ($i = 1; $i < 5; $i++) {
        if ($fields['report_' . $i . '_title'] and $fields['report_' . $i . '_image'] and $fields['report_' . $i . '_description']) {
            $report  = '<div class="report">'. PHP_EOL;
            $report .= '<div class="image"><img src="' . $fields['report_' . $i . '_image']['url'] . '"/></div>'. PHP_EOL;
            $report .= '<div class="content">'. PHP_EOL;
            $report .= '<div class="title">' . $fields['report_' . $i . '_title'] . '</div>'. PHP_EOL;
            $report .= '<div class="description">' . $fields['report_' . $i . '_description'] . '</div>'. PHP_EOL;
            $report .= '<div class="link"><a href="' . $fields['report_' . $i . '_link'] .'">' . __('learn_more report link', 'twentysixteen') . '</a></div>'. PHP_EOL;
            $report .= '</div>'. PHP_EOL;
            $report .= '</div>';
            array_push($reports, $report);
        }
    }
    $video  = '<div class="wrapper-video">';
    $video .= '<iframe width="560" height="315" src="https://www.youtube.com/embed/b1K0BdjnNks" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>';
    $video .= '</div>';
    array_splice( $reports, 2 , 0, $video );

    foreach($reports as $report) {
        echo $report;
    }
endif;
echo '</div>'. PHP_EOL;

get_template_part( 'template-parts/general-pictures_bar');
get_template_part( 'template-parts/general-take_action');
if ( is_active_sidebar( 'custom-side-bar' ) ) : 
    echo '<section id="custom-sidebar">';
            dynamic_sidebar( 'custom-side-bar' );
    echo '</section>';
endif; 
get_footer(); 
?>
