<?php
	/*
	Template Name: Home
	*/
?>

<?php get_header(); ?>

<section id="pl-slides"><p>Slides - Plugin</p>
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
</section><!-- #pl-slides -->

<section class="body-meu-round">
	<nav class="nav-menu-round">
		<ul>
			<li><a id="img-1" class="img-menu" href=""></a><a>Titulo</a></li>
			<li><a id="img-2" class="img-menu" href=""></a><a>Titulo</a></li>
			<li><a id="img-3" class="img-menu" href=""></a><a>Titulo</a></li>
			<li><a id="img-4" class="img-menu" href=""></a><a>Titulo</a></li>
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
