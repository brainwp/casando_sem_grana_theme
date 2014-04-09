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

	<div id="primary" class="content-area content-list-single">
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
						<li><a href=""></a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
					</ul>
				</nav>
			</section><!-- .body-meu-round -->

			<div id="title-page"><?php the_title(); ?></div>

			<section class="widget-single">				
				<div class="search">
					<form id="form-search" action="">
						<legend>1. Pesquisar</legend>

						<label for=""></label>
						<select name="" id="">
							<option type="text" name="">Categoria Serviço</option>
						</select>
						
						<label for=""></label>
						<select name="" id=""><!-- multiple="multiple" -->
							<option type="text" name="">Tipos Serviço</option>
						</select>

					</form><!-- #form-search -->
				</div><!-- .search -->

				<div class="localidade">
					<form id="form-localidade" action="">
						<legend>2. Localidade</legend>

						<label for=""></label>
						<select name="" id="">
							<option type="text" name="">Cidade</option>
						</select>
						
						<label for=""></label>
						<select name="" id="">
							<option type="text" name="">Estado</option>
						</select>

					</form><!-- #form-localidade -->
				</div><!-- .localidade -->

				<div class="cadastre-empresa">
					<span class="icon icon-cad-empresa"></span>
					<a href=""></a>
				</div><!-- .cadastre-empresa -->
			</section><!-- .content-internal-page -->

			<section class="body-content-list">
				<div class="body-breadcrumps">
					<div>
						<h3 class="title-single"></h3>
						<span class="breadcrump-bullet"></span>
						<h4 class="category"></h4>
						<span class="cidade"></span>
					</div>
				</div><!-- .breadcrumps -->

				<div class="content-list">
					<ul>
						<li>
							<figure>
								<div class="th-content-list"></div>
							</figure><!-- .th-single-list -->

							<div class="title-content-list">
								<h4><?php the_title(); ?></h4>
								<a class="more" href=""></a><!-- .more -->
							</div><!-- .title-single-list -->

							<div class="excerpt-content-list"></div><!-- .excerpt-single-list -->
						</li>
					</ul>

					<div class="nagetation-single-pages">
						<span><a href="" class="prev"></a></span>
						<span><a href="" class="next"></a></span>
					</div><!-- .nagetation-single-pages -->

				</div><!-- .content-list -->
			</section><!-- .content-list-single -->

			<section id="body-depoimentos">
				
				<div id="depoimentos">
					<ul>
						<li>
							<figure>
								<div class="thumbnail th-depoimento th-content-list"></div>
							</figure><!-- .th-single-list -->

							<div>
								<span class="left-quotes"></span>
								<cite class="user-depoimento"></cite>
								<span class="right-quotes"></span>
							</div>
						</li>
					</ul>
				</div>

			</section><!-- #body-depoimentos -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
