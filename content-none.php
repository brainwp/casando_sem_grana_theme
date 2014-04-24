<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package casando_sem_grana_theme
 */
?>

<section class="no-results not-found">
	<div class="page-content">
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
	</div><!-- .page-content -->
</section><!-- .no-results -->
