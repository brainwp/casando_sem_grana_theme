<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package casando_sem_grana_theme
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">


<?php
	//Footer 1
	$title_footer_1 = of_get_option('title_footer_um');
	$excerpt_footer_1 = of_get_option('resumo_footer_um');
	$link_footer_1 = of_get_option('link_footer_um');

	//Footer 2
	$title_footer_2 = of_get_option('title_footer_dois');
	$excerpt_footer_2 = of_get_option('resumo_footer_dois');

	//Footer 3
	$title_footer_3 = of_get_option('title_footer_tres');
	$excerpt_footer_3 = of_get_option('resumo_footer_tres');
	$link_footer_3 = of_get_option('link_footer_tres');
	$telefone_footer_3 = of_get_option('telefone_footer_tres');

?>

		<section id="widget-footer">
			<ul id="menu-footer">
				<li>
					<a href="<?php echo $link_footer_1; ?>" target="_blank">
						<span id="img-nav-1"></span><span class="widget-footer-title"><?php echo $title_footer_1; ?></span>
						<p><?php echo $excerpt_footer_1 ; ?></p>
					</a>				
				</li>
				<li>
						<span id="img-nav-2"></span><span class="widget-footer-title"><?php echo $title_footer_2; ?></span>
						<p><?php echo $excerpt_footer_2 ; ?></p>
						<div class="newsletter">
							<?php get_sidebar( "newsletter" ); ?>
						</div>
				</li>
				<li>
					<a href="<?php echo $link_footer_3; ?>" target="_blank">
						<span id="img-nav-3"></span><span class="widget-footer-title"><?php echo $title_footer_3; ?></span>
						<p><?php echo $excerpt_footer_2 ; ?></p>
					</a>		
						<h2 id="phone">Tel.:<?php echo $telefone_footer_3 ; ?></h2>
				</li>
				<li class="link-morando">
					<a href="http://" target="blank"><span id="img-nav-4"></span></a>
					<p class="texto-morando">Conheça também o<br /><span>Morando Sem grana</span></p>
				</li>
			</ul>
		</section><!-- .site-info -->

		<section id="info-footer">
			<nav id="menu-creditos">
				<ul>
					<li>Grupo CSG - Casando sem grana</li>
				</ul>
				<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class' => 'nav-menu' ) ); ?>
			<br />			
				<span class="direitos">2014 - Todos os Direitos Reservados</span>
			</nav>
			<nav id="social-area">

				<?php if ( ! dynamic_sidebar( 'redes-sociais-footer' ) ) : ?>
					<?php if ( current_user_can( 'manage_options' ) ) {
						echo "Verifique se o plugin Simple Social Icon está instalado, configurado e adicionado ao Widget Redes Sociais.";
					} ?>
				<?php endif; // end sidebar widget area ?>

			</nav>
		</section><!-- #info-footer -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
