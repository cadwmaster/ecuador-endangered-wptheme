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
				echo '<div id="mc_embed_signup">';
				echo '<form action="https://ecuadorendangered.us17.list-manage.com/subscribe/post?u=dad2320734a8d3331711cb5c1&amp;id=83cc4895ce" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>';
				echo '	<div id="mc_embed_signup_scroll">';
				echo '	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>';
				echo '	<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->';
				echo '  <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_dad2320734a8d3331711cb5c1_83cc4895ce" tabindex="-1" value=""></div>';
				echo '	<div class="clear"><input type="submit" value="'.__('widget newsletter button suscribe').'" name="subscribe" id="mc-embedded-subscribe" class="button"></div>';
				echo '	</div>';
				echo '</form>';
				echo '</div>';
			echo '</div>';
	
			echo $after_widget;
		}
	}
}