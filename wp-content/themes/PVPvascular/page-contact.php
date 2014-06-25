<?php
/**
 * Template Name: Contact Page with Map 
 *
 * Contains US State map with image maps 
 * for active states to infusion center 
 * detail page.
 */

get_header(); ?>

		
        <div id="primary">
			<div id="content" role="main-page">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
				<?php endwhile; // end of the loop. ?>

                <div id="ic-map-container" class="entry-content">
                    <img src="<?php get_theme_image('US_map.png'); ?>" width="538" height="335" border="0" usemap="#Map" />
                    <map name="Map" id="Map">
                        <area shape="poly"
coords="209,201,240,200,240,223,250,229,269,235,283,233,292,232,304,239,307,257,310,266,309,284,298,292,276,308,267,322,275,336,252,328,242,312,232,293,222,285,212,287,205,292,192,287,187,278,177,270,168,257,209,257,209,201"
href="<?php echo home_url('texas-centers'); ?>" alt="texas" />
                        <area shape="poly" coords="152,137,219,142,221,193,146,190,153,138" href="<?php echo home_url('colorado'); ?>" alt="colorado" />
                    </map>
                </div>

			</div><!-- #content -->
		</div><!-- #primary -->

		
       

<?php get_sidebar(); ?> 
<?php get_footer(); ?>
