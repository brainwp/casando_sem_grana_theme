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
		<section id="widget-footer">
			<ul id="menu-footer">
				<li>
					<span id="img-nav-1"></span><span class="widget-footer-title">Quem sou eu?</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget orci ut elit auctor ultrices ac eu massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
				</li>
				<li>
					<span id="img-nav-2"></span><span class="widget-footer-title">Newsletter</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget orci ut elit auctor ultrices ac eu massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					<div class="newsletter">
						<?php get_sidebar( "newsletter" ); ?>
					</div>
				</li>
				<li>
					<span id="img-nav-3"></span><span class="widget-footer-title">Contato</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget orci ut elit auctor ultrices ac eu massa.</p>
					<h2 id="phone">Tel.:3456-7892</h2>
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
					<li><a href="#">Termo de Uso</a></li>
					<li><a href="#">Politica de Pricidade</a></li>
				</ul><br />
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
