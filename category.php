<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package casando_sem_grana_theme
 */

get_header(); ?>

	<div id="primary" class="page content-area content-page">
		<main id="main" class="site-main" role="main">

			<?php get_template_part( 'content', 'box-category' ); ?>
			
			<section class="body-breadcrumps">
				<div id="title-sub_cat">
					<span class="i-cat"></span>
					<span><?php single_cat_title('',true); ?></span>
				</div>
			</section><!-- .body-breadcrumps -->

			<section class="body_content-category">
				<ul>
					<?php while ( have_posts() ) : the_post(); ?>
					<li class="post-category">

						<div class="date-category-post">
								<?php the_time('j') ?><br />
								<?php the_time('M') ?>
						</div><!-- .date-category-post -->

						<div class="thumb-category">
							<?php
								if ( has_post_thumbnail() ) {
									the_post_thumbnail( 'post_category' );
								} else {
									echo '<img src="' . get_template_directory_uri( 'stylesheet_directory' ) . '/images/th-category-default.jpg" />';
								}
							?>
							<?php //the_post_thumbnail( 'post_category' ); ?>
						</div>

						<div class="title-category-post">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</div><!-- .title-category-post -->

						<div class="excerpt-category-post"><?php my_excerpt_caracter(); ?></div>

						<div class="info-single-post">
							<div class="number-comments">
								<span>
									<?php
										$comments_count = wp_count_comments( $post->ID );
										echo $comments_count->approved;
									?>		
								</span>
							</div><!-- .number-comments -->
						</div><!-- .info-single-post -->
					</li>
					<?php endwhile; // end of the loop. ?>
				</ul>

				<div class="nagetation-single-pages">
					<?php /* Display navigation to next/previous pages when applicable */ ?>
					<?php
						global $wp_query;
						$total_pages = $wp_query->max_num_pages;
						if ($total_pages > 1){
							$current_page = max(1, get_query_var('paged'));
							echo '<div class="page_nav">';
							echo paginate_links(array(
							'base' => get_pagenum_link(1) . '%_%',
							'format' => 'page/%#%',
							'current' => $current_page,
							'total' => $total_pages,
							'prev_text' => '<< Anteriores',
							'next_text' => 'Pr&oacute;ximos >>'
							));
							echo '</div>';
						}
					?>
					<?php //else: ?>
						<h2 class="title"><?php// _e( 'Sua pesquisa acabou sem resultados.', 'portfoliopress' ) ?></h2>
					<?php //endif; ?>
				</div><!-- .nagetation-single-pages -->

			</section><!-- .body_content-category -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
