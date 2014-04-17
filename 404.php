<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package casando_sem_grana_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<span class="erro"></span>
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Erro! Página não encontrada.', 'casando_sem_grana_theme' ); ?></h1>
					<!-- <h1 class="page-title"><?php //_e( 'Oops! That page can&rsquo;t be found.', 'casando_sem_grana_theme' ); ?></h1> -->
				</header><!-- .page-header -->

				<div class="page-content">
					<!-- <p><?php //_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'casando_sem_grana_theme' ); ?></p> -->
					<p><?php _e( 'Parece que nada foi encontrado neste local. Talvez tente um dos links abaixo ou uma pesquisa?', 'casando_sem_grana_theme' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>