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

		<?php
			//Box 1
			$icone_box_1 = of_get_option('icon_feature_upload_um');
			$title_box_1 = of_get_option('title_feature_um');
			$excerpt_box_1 = of_get_option('resumo_feature_um');
			$link_box_1 = of_get_option('link_box_um');

			//Box 2
			$icone_box_2 = of_get_option('icon_feature_upload_dois');
			$title_box_2 = of_get_option('title_feature_dois');
			$excerpt_box_2 = of_get_option('resumo_feature_dois');
			$link_box_2 = of_get_option('link_box_dois');

			//Box 3
			$icone_box_3 = of_get_option('icon_feature_upload_tres');
			$title_box_3 = of_get_option('title_feature_tres');
			$excerpt_box_3 = of_get_option('resumo_feature_tres');
			$link_box_3 = of_get_option('link_box_tres');

			//Box 4
			$icone_box_4 = of_get_option('icon_feature_upload_quatro');
			$title_box_4 = of_get_option('title_feature_quatro');
			$excerpt_box_4 = of_get_option('resumo_feature_quatro');
			$link_box_4 = of_get_option('link_box_quatro');
		?>

		<div id="boxes" class="boxes-internal boxes-home">
			<a id="box-1" href="<?php echo $link_box_1; ?>" target="_blank">	
				<article id="box-1" class="box box-internal">
					<img src="<?php echo $icone_box_1; ?>" alt="<?php echo $title_box_1; ?>" />
					<h3 class="title"><?php echo $title_box_1; ?></h3>
					<div class="excerpt"><?php echo $excerpt_box_1; ?></div>
				</article>
			</a>
			<a href="<?php echo $link_box_2; ?>" target="_blank">	
				<article id="box-2" class="box box-internal">
					<span class="img-bullet">
						<img src="<?php echo $icone_box_2; ?>" alt="<?php echo $title_box_2; ?>" />
					</span>
					<h3 class="title"><?php echo $title_box_2; ?></h3>
					<div class="excerpt"><?php echo $excerpt_box_2; ?></div>
			</article>
		</a>
		<a href="<?php echo $link_box_3; ?>" target="_blank">	
			<article id="box-3" class="box box-internal">
				<span class="img-bullet">
					<img src="<?php echo $icone_box_3; ?>" alt="<?php echo $title_box_3; ?>" />
				</span>
				<h3 class="title"><?php echo $title_box_3; ?></h3>
				<div class="excerpt"><?php echo $excerpt_box_3; ?></div>
			</article>
		</a>
		<a href="<?php echo $link_box_4; ?>" target="_blank">	
			<article id="box-4" class="box box-internal">
			<span class="img-bullet">
				<img src="<?php echo $icone_box_4; ?>" alt="<?php echo $title_box_4; ?>" />
			</span>
			<h3 class="title"><?php echo $title_box_4; ?></h3>
			<div class="excerpt"><?php echo $excerpt_box_4; ?></div>
			</article>
		</a>
	</div><!-- #boxes -->

	<section class="body_menu-home body_menu-list">	
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
					'number'                   => '4',
					'taxonomy'                 => 'category',
					'pad_counts'               => false );

					$categories = get_categories( $args );
					foreach( $categories as $category ) :
					$cat_ID = $category->term_id; // Get ID the category.
				?>
					<li data-category="<?php echo $cat_ID; ?>" class="active-toggle father-category">
							<div class="">
								<span class=""></span>
									<?php echo $category->name; ?>'
								<div class="hover-cat"></div>
							</div>

							<?php	
								$child_args = array( 'child_of' => $cat_ID, 'hide_empty' => 0, );
								$child_categories = get_categories( $child_args );
								//var_dump($child_categories);
							?>
					</li>

					<?php endforeach; ?>
			</ul>

			<!-- START | Toggle SubCategorias -->
			<?php
				$child_categories = get_categories('&child_of=2&hide_empty'); // List subcategories of category '4' (even the ones with no posts in them)
				echo '<ul id="child-2" class="sub-category-hide">';
				foreach ($child_categories as $subcategory) {
				  echo sprintf('<li><a href="%s">%s</a></li>', get_category_link($subcategory->term_id), apply_filters('get_term', $subcategory->name));
				}
				echo '</ul>';
			?>

			<?php
				$child_categories = get_categories('&child_of=3&hide_empty'); // List subcategories of category '4' (even the ones with no posts in them)
				echo '<ul  id="child-3" class="sub-category-hide">';
				foreach ($child_categories as $subcategory) {
				  echo sprintf('<li><a href="%s">%s</a></li>', get_category_link($subcategory->term_id), apply_filters('get_term', $subcategory->name));
				}
				echo '</ul>';
			?>

			<?php
				$child_categories = get_categories('&child_of=4&hide_empty'); // List subcategories of category '4' (even the ones with no posts in them)
				echo '<ul  id="child-4" class="sub-category-hide">';
				foreach ($child_categories as $subcategory) {
				  echo sprintf('<li><a href="%s">%s</a></li>', get_category_link($subcategory->term_id), apply_filters('get_term', $subcategory->name));
				}
				echo '</ul>';
			?>

			<?php
				$child_categories = get_categories('&child_of=5&hide_empty'); // List subcategories of category '4' (even the ones with no posts in them)
				echo '<ul  id="child-5" class="sub-category-hide">';
				foreach ($child_categories as $subcategory) {
				  echo sprintf('<li><a href="%s">%s</a></li>', get_category_link($subcategory->term_id), apply_filters('get_term', $subcategory->name));
				}
				echo '</ul>';
			?>
			<!-- AND | Toggle SubCategorias -->					
					
		</nav><!-- .nav-menu-home -->
	</section><!-- .body_menu-home -->

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
