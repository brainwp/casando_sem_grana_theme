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
					<li class="father-category">
						<a class="write-menu">Casamentos Reais</a>
					</li>
					<li class="father-category">
						<a class="write-menu">O Grande Dia</a>
					</li>
					<li class="father-category">
						<a class="write-menu">Tem mais</a>
					</li>
					<li class="father-category">
						<a class="write-menu">Anuncie</a>
					</li>
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
			</nav><!-- #toggler -->
		</section><!-- .body_menu-list -->

		<section class="body-breadcrumps">
			<div id="title-sub_cat">
				<span>
					<?php the_breadcrumb(); ?>
					<?php //the_title(); ?>
				</span>
			</div>
		</section><!-- .body-breadcrumps -->

		<section class="body_content-single">
			<div class="content-single">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="post">
					<figure>
						<div class="th-content-post"><?php the_post_thumbnail(); ?></div>
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
							<h2>Via: <?php the_author(); ?></h2><!-- .nome-autor -->
							<a class="more" href="<?php the_permalink(); ?>"></a><!-- .more -->
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
								'showposts'=>5, // Number of related posts that will be shown. 
								'caller_get_posts'=>1 
							); 
							$my_query = new wp_query($args); 
					 
							if( $my_query->have_posts() ) {
								echo '<ul>'; 
								while ($my_query->have_posts()) { 
									$my_query->the_post(); ?> 
									<li>
										<figure>
											<div class="thumbnail th-post th-single-post">
												<?php the_post_thumbnail(); ?>
											</div>
										</figure><!-- .th-single-post -->

										<div class="title-single-post">
											<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
										</div><!-- .title-single-post -->

										<figcaption>
											<div class="excerpt-single-post"><?php my_excerpt_caracter(); ?></div>
										</figcaption><!-- .excerpt-single-post -->

										<div class="info-single-post">
											<div class="date-single-post"><?php the_time('j F') ?></div><!-- .date-single-post -->
										</div><!-- .info-single-post -->
										<div class="relation-comments-author">
											<div class="i-relations-comments"></div>
											<span><?php comments_number(); ?></span>
										</div>
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

		<section class="autor-sidebar">
			<div class="i-single-autor"></div>
			<span><?php the_author(); ?></span>
			
			<div class="i-single-comments"></div>
			<span><?php comments_number( $zero, $one, $more ); ?></span>
		</section><!-- .autor-sidebar -->

<?php get_sidebar( "post" ); ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
