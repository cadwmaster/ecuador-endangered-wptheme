<?php
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
