<?php
/**
 * Widget Social Networks
 *
 * @package Twentysixteen-child
 * @author cadwmaster
 */

if ( ! class_exists( 'Social_Networks_Widget' ) ){
	class Social_Networks_Widget extends WP_Widget {
	
		
		/* ---------------------------------------------------------------------------
		 * Constructor
		 * --------------------------------------------------------------------------- */
		function __construct(){
			
			$widget_ops = array( 'classname' => 'widget_social_networks', 'description' => __( 'widget social networks description', 'twentysixteen' ) );
		
			parent::__construct( 'widget_social_networks', __( 'widget social networks', 'twentysixteen' ), $widget_ops );
	
			$this->alt_option_name = 'widget_social_networks';
		}
		
		
		/* ---------------------------------------------------------------------------
		 * Outputs the HTML for this widget.
		 * --------------------------------------------------------------------------- */
		function widget( $args, $instance ) {
	
			if ( ! isset( $args['widget_id'] ) ) $args['widget_id'] = null;
			extract( $args, EXTR_SKIP );
	
			echo $before_widget;
			
			$title = __( 'widget social networks title', 'twentysixteen' );
			$subtitle =  __( 'widget social networks subtitle', 'twentysixteen' );
			
			echo $before_title . $title . $after_title;
			
			echo '<div class="subtitle">'.$subtitle.'</div>';
			echo '<div class="content social-networks">';
				echo'<a href="https://www.youtube.com/channel/'.$instance['youtubeId'].'" target="_blank"><div class="youtube-link"></div></a>';
				echo'<a href="https://www.facebook.com/'.$instance['facebookId'].'" target="_blank"><div class="facebook-link"></div></a>';
			echo '</div>';
	
			echo $after_widget;
		}
	
	
		/* ---------------------------------------------------------------------------
		 * Deals with the settings when they are saved by the admin.
		 * --------------------------------------------------------------------------- */
		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
			
			$instance['youtubeId'] = strip_tags( $new_instance['youtubeId'] );			
			$instance['facebookId'] = strip_tags( $new_instance['facebookId'] );
			
			return $instance;
		}
	
		
		/* ---------------------------------------------------------------------------
		 * Displays the form for this widget on the Widgets page of the WP Admin area.
		 * --------------------------------------------------------------------------- */
		function form( $instance ) {
				
			$youtubeId = isset( $instance['youtubeId']) ? esc_attr( $instance['youtubeId'] ) : '';			
			$facebookId = isset( $instance['facebookId']) ? esc_attr( $instance['facebookId'] ) : '';
	
			?>
				<p>
					<label for="<?php echo esc_attr( $this->get_field_id( 'youtubeId' ) ); ?>"><?php _e( 'YouTube User ID:', 'twentysixteen' ); ?></label>
					<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'youtubeId' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'youtubeId' ) ); ?>" type="text" value="<?php echo esc_attr( $youtubeId ); ?>" />
				</p>
				
				<p>
					<label for="<?php echo esc_attr( $this->get_field_id( 'facebookId' ) ); ?>"><?php _e( 'Facebook User ID:', 'twentysixteen' ); ?></label>
					<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'facebookId' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'facebookId' ) ); ?>" type="text" value="<?php echo esc_attr( $facebookId ); ?>" />
				</p>

			<?php
		}
		
		
	}
}
