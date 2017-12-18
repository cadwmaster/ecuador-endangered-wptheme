<?php
/**
 * Widget Newsletter
 *
 * @package Twentysixteen-child
 * @author cadwmaster
 */

if ( ! class_exists( 'Newsletter_Widget' ) ){
	class Newsletter_Widget extends WP_Widget {
	
		
		/* ---------------------------------------------------------------------------
		 * Constructor
		 * --------------------------------------------------------------------------- */
		function __construct(){
			
			$widget_ops = array( 'classname' => 'widget_newsletter', 'description' => __( 'widget newsletter description', 'twentysixteen' ) );
		
			parent::__construct( 'widget_newsletter', __( 'widget newsletter', 'twentysixteen' ), $widget_ops );
	
			$this->alt_option_name = 'widget_newsletter';
		}
		
		
		/* ---------------------------------------------------------------------------
		 * Outputs the HTML for this widget.
		 * --------------------------------------------------------------------------- */
		function widget( $args, $instance ) {
	
			if ( ! isset( $args['widget_id'] ) ) $args['widget_id'] = null;
			extract( $args, EXTR_SKIP );
	
			echo $before_widget;
			
			$title = __( 'widget newsletter title', 'twentysixteen' );
			$subtitle =  __( 'widget newsletter subtitle', 'twentysixteen' );
			
			echo $before_title . $title . $after_title;
			
			echo '<div class="subtitle">'.$subtitle.'</div>';
			echo '<div class="content newsletter">';
				echo '';
			echo '</div>';
	
			echo $after_widget;
		}
	}
}
