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

			<div id="title-sub_cat"><span><?php the_title(); ?></span></div>
			
			<section class="body_content-posts">
				<div class="content-posts">
					<ul>
						<?php //if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<li>
							<figure>
								<div class="th-content-list"></div>
							</figure><!-- .th-single-list -->

							<div class="date-single-post">
								<span><b>22</b><br />FEV</span>
								<span class="i-comments"><b>23</b></span>
							</div><!-- .date-single-post -->

							<div class="title-content-list">
								<h4><?php the_title(); ?></h4>
							</div><!-- .title-single-list -->

							<div class="excerpt-content-list">Teste do conteúdo.</div><!-- .excerpt-single-list -->
						</li>
					</ul>

					<?php //endwhile; ?>
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

				</div><!-- .content-posts -->
			</section><!-- .body_content-posts -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
