<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package casando_sem_grana_theme
 */
?>
<section id="side-single" class="side-post">	
	<div id="secondary" class="widget-area" role="complementary">
		<?php if ( ! dynamic_sidebar( 'sidebar-post' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside><!-- #search -->

			<aside id="history" class="widget parceiros">
				<h2 class="widget-title">Parceiros</h2>
				<div id="th-history"><a href="" class="more-info"></a></div>
			</aside><!-- #history -->			

			<aside id="video" class="widget facebook">
				<h2 class="widget-title">Curta Nossa Pagina no Facebook</h2>
				<div id="th-video"><a href=""></a></div>
			</aside><!-- #video -->

		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
</section><!-- #side-single -->