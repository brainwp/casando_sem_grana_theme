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
				<nav id="toggler" class="">
					<ul>
						<li class="i-sub_cat">
							<a href="">Sub Categorias</a>
						</li>
					</ul>
				</nav>
			</section><!-- .body_menu-list -->

			<!-- <div id="title-sub_cat"><span><?php //the_title(); ?></span></div> -->

		<?php if ( have_posts() ) : ?>

			<header id="title-sub_cat" class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'casando_sem_grana_theme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

			<?php casando_sem_grana_theme_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
