<?php
/**
 * The newsletter containing the main widget areas.
 *
 * @package casando_sem_grana_theme
 */
?>
<section id="newsletter-footer" class="side-post">	
	<div id="secondary" class="widget-area" role="complementary">
		<?php if ( ! dynamic_sidebar( 'newsletter' ) ) : ?>
		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
</section><!-- #side-single -->