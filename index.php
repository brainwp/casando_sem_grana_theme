<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package casando_sem_grana_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
		<section id="box-blog">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<div id="box-post">
				
					<figure>
						<div id="th-post">
							<a href="<?php the_permalink(); ?>">
								<?php
								if ( has_post_thumbnail() )
									the_post_thumbnail('post_destaque');
								else
									echo '<img src="' . get_template_directory_uri() . '/images/default-post.jpg' . '" alt="" />';
								?>
							</a>
						</div>
					</figure>

					<h1 id="title-post">
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h1>

					<figcaption>
						<div class="exerpt-home-destaque">
							<?php the_excerpt(); ?>
						</div><!-- .exerpt-home-destaque -->

					</figcaption>
					<span><a href="<?php the_permalink(); ?>" class="more-info"></a></span>
				</div><!-- #box-post -->

			<?php endwhile; ?>

			</section><!-- #box-content -->

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php nav_posts(); ?>

<?php get_footer(); ?>
