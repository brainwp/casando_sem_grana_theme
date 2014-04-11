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
							
							<span>
								<h2>Via:<?php the_author(); ?></h2><!-- .nome-autor -->
								<a class="more" href=""></a><!-- .more -->
							</span>
							<div class="excerpt-autor"></div>
						</div><!-- .body_autor-post -->
					</div><!-- .post -->

					<div class="post-relacioned">
						<nav class="content-posts">
							<ul>
								<li>
									<figure>
										<div class="thumbnail th-post th-single-post"></div>
									</figure><!-- .th-single-post -->

									<div class="title-single-post"></div><!-- .title-single-post -->

									<figcaption>
										<div class="excerpt-single-post"></div>
									</figcaption><!-- .excerpt-single-post -->

									<div class="info-single-post">
										<div class="date-single-post"></div><!-- .date-single-post -->
										<div class="coments-single-post"></div><!-- .coments-single-post -->
									</div><!-- .info-single-post -->
								</li>
							</ul>

							<div class="nagetation-single-pages">
								<span><a href="" class="prev"></a></span>
								<span><a href="" class="next"></a></span>
							</div><!-- .nagetation-single-pages -->

						</nav><!-- .content-posts -->
					</div><!-- .post-relacioned -->

					<div class="coments-post"></div><!-- .coments-post -->

				</div><!-- .content-page -->
			</section><!-- .body_content-page -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar( "single" ); ?>
<?php get_footer(); ?>
