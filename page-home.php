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
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<nav class="nav-menu-toogle">
		<ul>
			<?php
				$args = array(
					'show_option_all'    => '',
					'orderby'            => 'ID',
					'order'              => 'ASC',
					'style'              => 'list',
					'show_count'         => 0,
					'hide_empty'         => 0,
					'use_desc_for_title' => 1,
					'child_of'           => 0,
					'feed'               => '',
					'feed_type'          => '',
					'feed_image'         => '',
					'exclude'            => '1',
					'exclude_tree'       => '',
					'include'            => '',
					'hierarchical'       => 1,
					'title_li'           => __( '' ),
					'show_option_none'   => __('No categories'),
					'number'             => null,
					'echo'               => 1,
					'depth'              => 1,
					'current_category'   => 0,
					'pad_counts'         => 0,
					'taxonomy'           => 'category',
					'walker'             => null
				);
				wp_list_categories($args);
			?>
		</ul>
	</nav><!-- .nav-menu-home -->

<?php global $post;
				$categories = get_the_category($post->ID);
				var_dump($categories); ?>

	<nav id="toggler" class="menu-hide-home">
		<ul>
			<?php
				/*global $post;
				$categories = get_the_category($post->ID);
				var_dump($categories);*/
			?>
		</ul>
	</nav>
	<?php endwhile; else: ?>
		<p><?php //_e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
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

<?php get_sidebar( "single" ); ?>
<?php get_footer(); ?>
