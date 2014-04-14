<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package casando_sem_grana_theme
 */

get_header(); ?>

	<section id="primary" class="content-area">
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
						<!-- <li class="father-category">
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
						</li> -->

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

			<!-- <div id="title-sub_cat"><span><?php //the_title(); ?></span></div> -->

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
