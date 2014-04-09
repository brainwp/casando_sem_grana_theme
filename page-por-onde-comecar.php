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

			<section class="body-meu-ret">
				<nav class="nav-menu-ret">
					<ul>
						<li><a id="img-1" class="img-menu-page" href=""></a><a>Titulo</a></li>
						<li><a id="img-2" class="img-menu-page" href=""></a><a>Titulo</a></li>
						<li><a id="img-3" class="img-menu-page" href=""></a><a>Titulo</a></li>
						<li><a id="img-4" class="img-menu-page" href=""></a><a>Titulo</a></li>
					</ul>
				</nav>
				<nav class="menu-hide menu-hide-ret">
					<ul>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
					</ul>
				</nav>
			</section><!-- .body-meu-ret -->

			<div id="title-page"><?php the_title(); ?></div>

			<section class="body_content-page">
				<div class="content-page">
					<div class="post">
						<figure>
							<div class="th-content-post"></div>
							<div class="date-post"></div>
						</figure><!-- .th-single-list -->

						<div class="title-content-post">
							<h2><?php the_title(); ?></h2>
						</div><!-- .title-content-page -->
						
						<div class="content-post">
							<h2><?php the_content(); ?></h2>
						</div><!-- .content-post -->

						<div class="body_autor-post">
							<figure>
								<div class="thumbnail th-autor"></div>
							</figure><!-- .th-autor -->
							
							<h2>Via:<?php the_content(); ?></h2>
						</div><!-- .body_autor-post -->

					</div><!-- .post -->
				</div><!-- .content-page -->
			</section><!-- .body_content-page -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
