<?php
/**
 * Template Name: About
 */

//response generation function
$response = "";

//function to generate response
function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";
}

get_header(); 

get_template_part( 'template-parts/take_action-header');
get_template_part( 'template-parts/take_action-sign_petition');
get_template_part( 'template-parts/take_action-explanation');
get_template_part( 'template-parts/general-pictures_bar');

?>
<?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
    <section id="custom-sidebar">
        <?php dynamic_sidebar( 'custom-side-bar' ); ?>
    </section>
<?php 
endif; 
get_footer(); 
?>
