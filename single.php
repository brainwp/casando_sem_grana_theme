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
			<nav id="toggler" class="">
				<ul>
					<li class="i-sub_cat">
						<a href="">Sub Categorias</a>
					</li>
				</ul>
			</nav>
		</section><!-- .body_menu-list -->

		<section class="body-breadcrumps">
			<div id="title-sub_cat">
				<span><?php the_title(); ?></span>
			</div>
		</section><!-- .body-breadcrumps -->

		<section class="body_content-single">
			<div class="content-single">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="post">
					<figure>
						<div class="th-content-post"></div>
						<div class="date-post"></div>
					</figure><!-- .th-single-list -->

					<div class="title-content-post">
						<h2><?php the_title(); ?></h2>
					</div><!-- .title-content-single -->
					
					<div class="content-post">
						<?php the_content(); ?>
					</div><!-- .content-post -->

					<div class="body_autor-post">
						<figure>
							<div class="thumbnail th-autor"></div>
						</figure><!-- .th-autor -->
						
						<span>
							<h2>Via: <?php the_author(); ?></h2><!-- .nome-autor -->
							<a class="more" href="<?php the_permalink(); ?>"></a><!-- .more -->
							<div class="excerpt-autor"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim </p></div>
						</span>
					</div><!-- .body_autor-post -->
				</div><!-- .post -->

				<?php endwhile; else: ?>
					<p><?php //_e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>

				<div class="post-relacioned">
					<h2 class="sub-title-content">Posts Relacionados</h2>
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
								</div><!-- .info-single-post -->

							</li>
						</ul>
					</nav><!-- .content-posts -->
				</div><!-- .post-relacioned -->

				<div class="coments-single-post">
					<h2 class="sub-title-content">Comentários</h2>
					<?php comments_template(); ?>
				</div><!-- .coments-single-post -->

			</div><!-- .content-single -->
		</section><!-- .body_content-single -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar( "single" ); ?>
<?php get_footer(); ?>
