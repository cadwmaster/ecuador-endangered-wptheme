<?php
/**
 * Theme widgets and sidebars.
 *
 * @package Twentysixteen-child
 * @author cadwmaster
 */


/* ---------------------------------------------------------------------------
 * Widgets | Add
 * --------------------------------------------------------------------------- */
if( ! function_exists( 'ee_register_widget' ) )
{
	function ee_register_widget()
	{
		register_widget('Social_Networks_Widget');			// Social Networks
		register_widget('Newsletter_Widget');				// Newsletter
		register_widget('Login_Forum_Widget');				// Login Forum
		// register_widget('Mfn_Recent_Comments_Widget');	// Comments
		// register_widget('Mfn_Recent_Posts_Widget');		// Posts
		// register_widget('Mfn_Tag_Cloud_Widget');		// Tags
	}
}
add_action('widgets_init','ee_register_widget');