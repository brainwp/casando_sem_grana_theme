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

			<section id="body_menu-boxes">
				<div id="boxes">
					<div class="box">
						<!-- <span class="img-bullet"></span> -->
						<li id="box-1">
							<a id="img-1" class="img-menu-page" href=""></a><a>Por onde Começar?</a>
						</li>
					</div>
					<div class="box">
						<!-- <span class="img-bullet"></span> -->
						<li id="box-2">
							<a id="img-2" class="img-menu-page" href=""></a><a>Faça você mesmo</a>
						</li>
					</div>
					<div class="box">
						<!-- <span class="img-bullet"></span> -->
						<li id="box-3">
							<a id="img-3" class="img-menu-page" href=""></a><a>Lista de Casamento</a>
						</li>
					</div>
					<div class="box">
						<!-- <span class="img-bullet"></span> -->
						<li id="box-4">
							<a id="img-4" class="img-menu-page" href=""></a><a>Fornecedores Justos</a>
						</li>
					</div>
				</div><!-- #boxes -->
			</section><!-- #body_slides -->

			<section class="body_menu-list">
				<nav class="nav-menu-toogle">
					<ul>
						<?php
							$args = array(
							'type'                     => '',
							'child_of'                 => 0,
							'parent'                   => '',
							'orderby'                  => 'ID',
							'order'                    => 'ASC',
							'hide_empty'               => 0,
							'hierarchical'             => 1,
							'exclude'                  => '1',
							'include'                  => '',
							'number'                   => '',
							'taxonomy'                 => 'category',
							'pad_counts'               => false );

							$categories = get_categories( $args );


							foreach( $categories as $category ) {

								$cat_ID = $category->term_id; // Get ID the category.

								if( $category->parent == 0 ){
									echo '<div class="ring"><span class="img-cat parent-item-'.$cat_ID.'"></span><li class="father-category">' . $category->name.'</li>';
									echo '<div class="hover-cat"><span></span></div></div>';
								}
							}
						?>
					</ul>
				</nav>

				<nav id="toggler" class="menu-hide-home">
					<ul>
						<span class="hide-cat">
							<?php
								$args = array(
									'show_option_all'    => '',
									'orderby'            => 'ID',
									'order'              => 'ASC',
									'style'              => 'none',
									'hide_empty'         => 0,
									'child_of'           => 2,
									'title_li'           => __( '' ),
									'show_option_none'   => __('No categories'),
									'taxonomy'           => 'category',
								);

								$my_categories = get_categories($args);
							?>

							<?php foreach( $my_categories as $category ): ?>
								<li><a href="<?php echo get_category_link($category->term_id);?>"><?php echo $category->name;?></a></li>
							<?php endforeach; ?>
						</span>

						<span class="hide-cat">
							<?php
								$args = array(
									'show_option_all'    => '',
									'orderby'            => 'ID',
									'order'              => 'ASC',
									'style'              => 'none',
									'hide_empty'         => 0,
									'child_of'           => 3,
									'title_li'           => __( '' ),
									'show_option_none'   => __('No categories'),
									'taxonomy'           => 'category',
								);

								$my_categories = get_categories($args);
							?>

							<?php foreach( $my_categories as $category ): ?>
								<li><a href="<?php echo get_category_link($category->term_id);?>"><?php echo $category->name;?></a></li>
							<?php endforeach; ?>
						</span>

						<span class="hide-cat">
							<?php
								$args = array(
									'show_option_all'    => '',
									'orderby'            => 'ID',
									'order'              => 'ASC',
									'style'              => 'none',
									'hide_empty'         => 0,
									'child_of'           => 4,
									'title_li'           => __( '' ),
									'show_option_none'   => __('No categories'),
									'taxonomy'           => 'category',
								);

								$my_categories = get_categories($args);
							?>

							<?php foreach( $my_categories as $category ): ?>
								<li><a href="<?php echo get_category_link($category->term_id);?>"><?php echo $category->name;?></a></li>
							<?php endforeach; ?>
						</span>

						<span class="hide-cat">
							<?php
								$args = array(
									'show_option_all'    => '',
									'orderby'            => 'ID',
									'order'              => 'ASC',
									'style'              => 'none',
									'hide_empty'         => 0,
									'child_of'           => 5,
									'title_li'           => __( '' ),
									'show_option_none'   => __('No categories'),
									'taxonomy'           => 'category',
								);

								$my_categories = get_categories($args);
							?>

							<?php foreach( $my_categories as $category ): ?>
								<li><a href="<?php echo get_category_link($category->term_id);?>"><?php echo $category->name;?></a></li>
							<?php endforeach; ?>
						</span>
					</ul>
				</nav>
			</section><!-- .body_menu-list -->
			
			<!-- <div class="clear"><hr></div> -->
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
									<?php the_post_thumbnail( 'post_category' ); ?>
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
