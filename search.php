<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package casando_sem_grana_theme
 */

get_header(); ?>

	<section id="primary" class="content-area page-search">
		<main id="main" class="site-main" role="main">

			<?php get_template_part( 'content', 'box-category' ); ?>

			<?php if ( have_posts() ) : ?>

			<section id="body_search">	
				<header id="title-sub_cat" class="page-header">
					<h1 class="page-title"><?php printf( __( '<i>Search Results for: %s', 'casando_sem_grana_theme</i>' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'search' ); ?>

				<?php endwhile; ?>

				<?php casando_sem_grana_theme_paging_nav(); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>
			</section><!--body_search-->

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
