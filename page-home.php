<?php
	/*
	Template Name: Home
	*/
?>

<?php get_header(); ?>

<section id="body_slides">
<?php if(function_exists("insert_post_highlights")) insert_post_highlights(); ?>
</section><!-- #body_slides -->

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

<?php
	//Box 1
	$icone_box_1 = of_get_option('icon_feature_upload_um');
	$title_box_1 = of_get_option('title_feature_um');
	$excerpt_box_1 = of_get_option('resumo_feature_um');

	//Box 2
	$icone_box_2 = of_get_option('icon_feature_upload_dois');
	$title_box_2 = of_get_option('title_feature_dois');
	$excerpt_box_2 = of_get_option('resumo_feature_dois');

	//Box 3
	$icone_box_3 = of_get_option('icon_feature_upload_tres');
	$title_box_3 = of_get_option('title_feature_tres');
	$excerpt_box_3 = of_get_option('resumo_feature_tres');

	//Box 4
	$icone_box_4 = of_get_option('icon_feature_upload_quatro');
	$title_box_4 = of_get_option('title_feature_quatro');
	$excerpt_box_4 = of_get_option('resumo_feature_quatro');
?>

<div id="boxes" class="boxes-home">
	<article id="box-1" class="box">
		<img src="<?php echo $icone_box_1; ?>" alt="<?php echo $title_box_1; ?>" />
		<h2 class="title"><?php echo $title_box_1; ?></h2>
		<div class="excerpt"><?php echo $excerpt_box_1; ?></div>
	</article>
	<article id="box-2" class="box">
		<span class="img-bullet">
			<img src="<?php echo $icone_box_2; ?>" alt="<?php echo $title_box_2; ?>" />
		</span>
		<h1 class="title"><?php echo $title_box_2; ?></h1>
		<div class="excerpt"><?php echo $excerpt_box_2; ?></div>
	</article>
	<article id="box-3" class="box">
		<span class="img-bullet">
			<img src="<?php echo $icone_box_3; ?>" alt="<?php echo $title_box_3; ?>" />
		</span>
		<h1 class="title"><?php echo $title_box_3; ?></h1>
		<div class="excerpt"><?php echo $excerpt_box_3; ?></div>
	</article>
	<article id="box-4" class="box">
		<span class="img-bullet">
			<img src="<?php echo $icone_box_4; ?>" alt="<?php echo $title_box_4; ?>" />
		</span>
		<h1 class="title"><?php echo $title_box_4; ?></h1>
		<div class="excerpt"><?php echo $excerpt_box_4; ?></div>
	</article>
</div><!-- #boxes -->

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
	<div class="anuncio">
		<a href="<?php echo of_get_option('anuncio_link'); ?>" target="_blank">
			<img src="<?php echo of_get_option('anuncio_img'); ?>" alt="Anúncio Casando sem Grana">
		</a>
	</div><!-- .anuncio -->
	<div id="box-post">
	<?php $id_post_destaque = of_get_option('destaque_post_home'); ?>

	<?php
		$post_destaque = get_post( of_get_option('destaque_post_home') ); 
	?>
		<figure>
			<div id="th-post">
				<?php echo get_the_post_thumbnail( $id_post_destaque, 'post_destaque' ); ?>
			</div>
		</figure>
		<h1 id="title-post"><?php echo $post_destaque->post_title; ?></h1>
		<figcaption>
			<div id="exerpt">
				<?php echo apply_filters( 'the_content', $post_destaque->post_content ); ?>
			</div>
		</figcaption>
		<span><a href="" class="more-info"></a></span>
	</div><!-- #box-post -->
</section><!-- #box-content -->

<?php get_sidebar( "single" ); ?>
<?php get_footer(); ?>
