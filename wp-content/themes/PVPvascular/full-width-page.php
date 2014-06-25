<?php
/**
 * Template Name: Home
 * Description: A full-width template with no sidebar
 *
 */

get_header(); ?>
		
<div id="fullpage">
    <div id="content" role="main">
	    <?php while ( have_posts() ) : the_post(); ?>
		    <?php get_template_part( 'content', 'home' ); ?>
		<?php endwhile; // end of the loop. ?>
	</div><!-- #content -->
</div><!-- #fullpage -->

<?php get_footer(); ?>
