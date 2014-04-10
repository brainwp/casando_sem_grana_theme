<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package casando_sem_grana_theme
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php //if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside><!-- #search -->

			<aside id="history" class="widget">
				<h2 class="widget-title">Conte-nos a sua História</h2>
				<div id="th-history"><a href="" class="more-info"></a></div>
			</aside><!-- #history -->

			<aside id="video" class="widget">
				<h2 class="widget-title">Conheça nosso canal no Youtube</h2>
				<div id="th-video"><a href=""></a></div>
			</aside><!-- #video -->

		<?php //endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
