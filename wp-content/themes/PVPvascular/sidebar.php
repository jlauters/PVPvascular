<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?>
		<div id="secondary" class="widget-area" role="complementary">
        
			<?php do_action( 'before_sidebar' ); ?>
			<?php if (is_page_template('full-width-page.php')): ?>
			 <?php dynamic_sidebar( 'home-widgets' ); ?> 
			<?php elseif ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
			

			<?php endif; // end sidebar widget area ?>
           
		</div><!-- #secondary .widget-area -->
