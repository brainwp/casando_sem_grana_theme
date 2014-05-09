<?php
	/*
	Template Name: Home
	*/
get_header(); ?>

<section id="body_slides">
<?php echo do_shortcode ('[pointelleslider id="2"]') ?>
</section><!-- #body_slides -->

<div class="see-all"><a href="<?php echo home_url(); ?>/posts">Ver Todos os Posts</a></div>

	<?php get_template_part( 'content', 'menu-category' ); ?>

<?php
	//Box 1
	$icone_box_1 = of_get_option('icon_feature_upload_um');
	$title_box_1 = of_get_option('title_feature_um');
	$excerpt_box_1 = of_get_option('resumo_feature_um');
	$link_box_1 = of_get_option('link_box_um');

	//Box 2
	$icone_box_2 = of_get_option('icon_feature_upload_dois');
	$title_box_2 = of_get_option('title_feature_dois');
	$excerpt_box_2 = of_get_option('resumo_feature_dois');
	$link_box_2 = of_get_option('link_box_dois');

	//Box 3
	$icone_box_3 = of_get_option('icon_feature_upload_tres');
	$title_box_3 = of_get_option('title_feature_tres');
	$excerpt_box_3 = of_get_option('resumo_feature_tres');
	$link_box_3 = of_get_option('link_box_tres');

	//Box 4
	$icone_box_4 = of_get_option('icon_feature_upload_quatro');
	$title_box_4 = of_get_option('title_feature_quatro');
	$excerpt_box_4 = of_get_option('resumo_feature_quatro');
	$link_box_4 = of_get_option('link_box_quatro');
?>

<div id="boxes" class="boxes-home">
	<a href="<?php echo $link_box_1; ?>" target="_blank">	
		<article id="box-1" class="box">
			<img src="<?php echo $icone_box_1; ?>" alt="<?php echo $title_box_1; ?>" />
			<h3 class="title"><?php echo $title_box_1; ?></h3>
			<div class="excerpt"><?php echo $excerpt_box_1; ?></div>
		</article>
	</a>
	<a href="<?php echo $link_box_2; ?>" target="_blank">	
		<article id="box-2" class="box">
			<span class="img-bullet">
				<img src="<?php echo $icone_box_2; ?>" alt="<?php echo $title_box_2; ?>" />
			</span>
			<h3 class="title"><?php echo $title_box_2; ?></h3>
			<div class="excerpt"><?php echo $excerpt_box_2; ?></div>
		</article>
	</a>
	<a href="<?php echo $link_box_3; ?>" target="_blank">	
		<article id="box-3" class="box">
			<span class="img-bullet">
				<img src="<?php echo $icone_box_3; ?>" alt="<?php echo $title_box_3; ?>" />
			</span>
			<h3 class="title"><?php echo $title_box_3; ?></h3>
			<div class="excerpt"><?php echo $excerpt_box_3; ?></div>
		</article>
	</a>
	<a href="<?php echo $link_box_4; ?>" target="_blank">	
		<article id="box-4" class="box">
		<span class="img-bullet">
			<img src="<?php echo $icone_box_4; ?>" alt="<?php echo $title_box_4; ?>" />
		</span>
		<h3 class="title"><?php echo $title_box_4; ?></h3>
		<div class="excerpt"><?php echo $excerpt_box_4; ?></div>
		</article>
	</a>
</div><!-- #boxes -->

	<div class="anuncio">
		<a href="<?php echo of_get_option('anuncio_link'); ?>" target="_blank">
			<img src="<?php echo of_get_option('anuncio_img'); ?>" alt="Anúncio Casando sem Grana">
		</a>
	</div><!-- .anuncio -->

<section id="box-content">

	<?php get_template_part( 'content', 'home-posts' );	?>
	
</section><!-- #box-content -->

<?php get_sidebar( 'home' ); ?>
<?php get_footer(); ?>
