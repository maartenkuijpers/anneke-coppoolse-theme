<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Gridster
 */
?>

<div id="footer">
<?php do_action( 'gridster_credits' ); ?>
<?php _e('&copy; Copyright','gridster') ?> <?php the_time('Y') ?> <?php bloginfo('name'); ?>	
<?php echo get_theme_mod( 'themefurnacefooter_footer_text' ); ?> 
</div>
</div>
<!-- main -->
<?php wp_footer(); ?>
</body></html>