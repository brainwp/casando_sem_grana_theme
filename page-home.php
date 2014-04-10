<?php
	/*
	Template Name: Home
	*/
?>

<?php get_header(); ?>

<section id="body_slides"><h1>Slides - Plugin</h1>
	<div id="boxes">
		<article id="box-1" class="box">
			<span class="img-bullet"></span>
			<h1 class="title"></h1>
			<div class="excerpt"></div>
		</article>
		<article id="box-2" class="box">
			<span class="img-bullet"></span>
			<h1 class="title"></h1>
			<div class="excerpt"></div>
		</article>
		<article id="box-3" class="box">
			<span class="img-bullet"></span>
			<h1 class="title"></h1>
			<div class="excerpt"></div>
		</article>
		<article id="box-4" class="box">
			<span class="img-bullet"></span>
			<h1 class="title"></h1>
			<div class="excerpt"></div>
		</article>
	</div><!-- #boxes -->
</section><!-- #body_slides -->

<section class="body_menu-home">
	<nav class="nav-menu-toogle">
		<ul>
			<li>
				<span class="ring"><a id="img-1" class="img-menu"></a></span>
				<a class="write-menu">Casamentos Reais</a>
			</li>
			<li>
				<span class="ring"><a id="img-2" class="img-menu" ></a></span>
				<a class="write-menu">O Grande Dia</a>
			</li>
			<li>
				<span class="ring"><a id="img-3" class="img-menu" ></a></span>
				<a class="write-menu">Tem mais</a>
			</li>
			<li>
				<span class="ring"><a id="img-4" class="img-menu"></a></span>
				<a class="write-menu">Anuncie</a>
			</li>
		</ul>
	</nav><!-- .nav-menu-home -->

	<nav id="toggler" class="menu-hide-home">
		<ul>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<li><a href=""></a>Teste</li>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</ul>
	</nav>
</section><!-- .body_menu-home -->

<section id="box-content">
	<div id="anuncio"></div>
	<div id="box-post">
		<figure>
			<div id="th-post"></div>
		</figure>
		<h1 id="title-post"></h1>
		<figcaption>
			<div id="exerpt"></div>
		</figcaption>
		<span><a href="" class="more-info"></a></span>
	</div><!-- #box-post -->
</section><!-- #box-content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
