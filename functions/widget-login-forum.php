<?php
/**
 * Widget Login Forum
 *
 * @package Twentysixteen-child
 * @author cadwmaster
 */

if ( ! class_exists( 'Login_Forum_Widget' ) ){
	class Login_Forum_Widget extends WP_Widget {
	
		
		/* ---------------------------------------------------------------------------
		 * Constructor
		 * --------------------------------------------------------------------------- */
		function __construct(){
			
			$widget_ops = array( 'classname' => 'widget_login_forum', 'description' => __( 'widget login forum description', 'twentysixteen' ) );
		
			parent::__construct( 'widget_login_forum', __( 'widget login forum', 'twentysixteen' ), $widget_ops );
	
			$this->alt_option_name = 'widget_login_forum';
		}
		
		
		/* ---------------------------------------------------------------------------
		 * Outputs the HTML for this widget.
		 * --------------------------------------------------------------------------- */
		function widget( $args, $instance ) {
	
			if ( ! isset( $args['widget_id'] ) ) $args['widget_id'] = null;
			extract( $args, EXTR_SKIP );
	
			echo $before_widget;
			
			$title = __( 'widget login forum title', 'twentysixteen' );
			$subtitle =  __( 'widget login forum subtitle', 'twentysixteen' );
			
			echo $before_title . $title . $after_title;
			
			echo '<div class="subtitle">'.$subtitle.'</div>';
			echo '<div class="content login-forum">';
				echo '';
			echo '</div>';
	
			echo $after_widget;
		}		
		
	}
}
