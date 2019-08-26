<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>
Rhubarb 
<div class="off-canvas position-right" id="off-canvas" data-off-canvas>
	SHIT START
	<?php joints_off_canvas_nav(); ?>

	<?php if ( is_active_sidebar( 'offcanvas' ) ) : ?>
        
        <div class="offcanvas-title">
            <?php 
            // wp_nav_menu( array( 'theme_location' => 'offcanvas-nav' ) );
            // _e( 'Menu', 'jointswp-child' ); 
            ?>
        </div>
		
		<?php dynamic_sidebar( 'offcanvas' ); ?>

	<?php endif; ?>
	SHIT END
</div>
