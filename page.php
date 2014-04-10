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

			<section class="body-meu-round">
				<nav class="nav-menu-round">
					<ul>
						<li><a id="img-1" class="img-menu-page" href=""></a><a>Titulo</a></li>
						<li><a id="img-2" class="img-menu-page" href=""></a><a>Titulo</a></li>
						<li><a id="img-3" class="img-menu-page" href=""></a><a>Titulo</a></li>
						<li><a id="img-4" class="img-menu-page" href=""></a><a>Titulo</a></li>
					</ul>
				</nav>
				<nav class="menu-hide">
					<ul>
						<li><a href="">Subcategories</a></li>
					</ul>
				</nav>
			</section><!-- .body-meu-round -->

			<div id="title-page"><?php the_title(); ?></div>

			<section class="body_content-page">
				<div class="content-internal-page">
					<nav class="menu-info">
						<ul>
							<li><a href="">Cadastre sua Empresa</a></li>
							<li><a href="">Cadastre sua Empresa</a></li>
							<li><a href="">Cadastre sua Empresa</a></li>
						</ul>
					</nav><!-- .menu-info -->

					<div class="info-interal-page">
						<span class="img-info"></span>
						<h1 class="title-info">Como Funciona</h1>
					</div><!-- .info-interal-page -->

					<nav class="menu-info">
						<ul>
							<li><a href="">Preencher Formulário</a></li>				
						</ul>
					</nav><!-- .menu-info -->

				</div><!-- .content-internal-page -->
			</section><!-- .body_content-page -->

			<?php //while ( have_posts() ) : the_post(); ?>
				<?php //get_template_part( 'content', 'page' ); ?>
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					//if ( comments_open() || '0' != get_comments_number() ) :
						//comments_template();
					//endif;
				?>
			<?php //endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
