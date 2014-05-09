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

<div id="primary" class="page content-area">
	<main id="main" class="site-main" role="main">

		<?php get_template_part( 'content', 'box-category' ); ?>

		<section class="body-breadcrumps">
			<div id="title-sub_cat">
				<span>
					<?php the_breadcrumb(); ?>
					<?php //the_title(); ?>
				</span>
			</div>
		</section><!-- .body-breadcrumps -->

	<div class="anuncio">
		<a href="<?php echo of_get_option('anuncio_link'); ?>" target="_blank">
			<img src="<?php echo of_get_option('anuncio_img'); ?>" alt="Anúncio Casando sem Grana">
		</a>
	</div><!-- .anuncio -->

		<section class="body_content-single">
			<div class="content-single">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="post">
					<figure>
						<div class="th-content-post">
							<?php
								if ( has_post_thumbnail() ) {
									the_post_thumbnail('post_destaque');
								} else {
									echo '<img src="' . get_template_directory_uri( 'stylesheet_directory' ) . '/images/default-post.jpg" />';
								}
							?>
						</div><!-- .th-content-post -->
							<div class="date-post">
								<div class="date-single-post">
									<span><?php the_time('j') ?></span>
									<?php the_time('M') ?>
								</div>
							</div><!-- .date-single-->

					</figure><!-- .th-single-list -->

					<div class="title-content-post">
						<h2><?php the_title(); ?></h2>
					</div><!-- .title-content-single -->
					
					<div class="content-post">
						<?php the_content(); ?>
					</div><!-- .content-post -->

					<div class="body_autor-post">
						<figure>
							<div class="thumbnail th-autor"><?php echo get_avatar( get_the_author_meta( 'ID' ), 140 ); ?></div>
						</figure><!-- .th-autor -->
						
						<span>
							<h2>Por <?php the_author(); ?></h2><!-- .nome-autor -->
							<a class="more" href="<?php echo get_author_posts_url( get_the_author_id() ); ?>">Saiba Mais sobre o Autor</a><!-- .more -->	
							<div class="excerpt-autor"><p><?php the_author_description(); ?></p></div>
						</span>
					</div><!-- .body_autor-post -->
				</div><!-- .post -->

				<?php endwhile; else: ?>
					<p><?php //_e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>

				<div class="post-relacioned">
					<h2 class="sub-title-content">Posts Relacionados</h2>
					<nav class="content-posts">

					<?php 
						$categories = get_the_category($post->ID);  
						if ($categories) {  $category_ids = array();  
							foreach($categories as $individual_category)  
								$category_ids[] = $individual_category->term_id; 
					 
							$args=array( 
								'category__in' => $category_ids, 
								'post__not_in' => array($post->ID), 
								'showposts'=>3, // Number of related posts that will be shown. 
								'caller_get_posts'=>1 
							); 
							$my_query = new wp_query($args); 
					 
							if( $my_query->have_posts() ) {
								echo '<ul>'; 
								while ($my_query->have_posts()) { 
									$my_query->the_post(); ?> 
									<li class="post-category">

										<div class="date-category-post">
												<?php the_time('j') ?><br />
												<?php the_time('M') ?>
										</div><!-- .date-category-post -->

										<div class="thumb-single">
											<?php the_post_thumbnail( 'post_category' ); ?>
										</div>

										<div class="title-category-post">
											<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
										</div><!-- .title-category-post -->

									</li>
								<?php } 
								echo '</ul>'; 
							}

							wp_reset_query();
						} 
					?>

					</nav><!-- .content-posts -->
				</div><!-- .post-relacioned -->

				<div class="coments-single-post">
					<h2 class="sub-title-content">Comentários</h2>
					<?php comments_template(); ?>
				</div><!-- .coments-single-post -->

			</div><!-- .content-single -->
		</section><!-- .body_content-single -->

		<?php get_sidebar(); ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
