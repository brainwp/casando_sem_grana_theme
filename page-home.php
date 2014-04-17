<?php
	/*
	Template Name: Home
	*/
?>

<?php get_header(); ?>

<section id="body_slides">
<?php echo do_shortcode ('[pointelleslider set="2" id="2"]') ?>
</section><!-- #body_slides -->

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

<section class="body_menu-home">
	
	<nav class="nav-menu-toogle">
		<ul>
			<?php
				$args = array(
				'type'                     => '',
				'child_of'                 => 0,
				'parent'                   => '',
				'orderby'                  => 'ID',
				'order'                    => 'ASC',
				'hide_empty'               => 0,
				'hierarchical'             => 1,
				'exclude'                  => '1',
				'include'                  => '',
				'number'                   => '4',
				'taxonomy'                 => 'category',
				'pad_counts'               => false );

				$categories = get_categories( $args );
				foreach( $categories as $category ) :
				$cat_ID = $category->term_id; // Get ID the category.
			?>
				<li class="active-toggle">
						<div class="ring">
							<span class="img-cat parent-item-<?php echo $cat_ID; ?>"></span>
								<?php echo $category->name; ?>'
							<div class="hover-cat"></div>
						</div>

						<?php	
							$child_args = array( 'child_of' => $cat_ID, );
							$child_categories = get_categories( $child_args );
						?>
					<ul class="sub-category-hide">
						<li>
							<?php foreach( $child_categories as $child_category ) : ?>		
								<a href="<?php echo get_category_link( $child_category->term_id );?>">
									<?php echo $child_category->name; ?>
								</a>
							<?php endforeach; ?>
						</li>
					</ul>
				</li>
					
	<?php endforeach; ?>
				
		</ul>
	</nav><!-- .nav-menu-home -->

</section><!-- .body_menu-home -->

<section id="box-content">
	<div class="anuncio">
		<a href="<?php echo of_get_option('anuncio_link'); ?>" target="_blank">
			<img src="<?php echo of_get_option('anuncio_img'); ?>" alt="Anúncio Casando sem Grana">
		</a>
	</div><!-- .anuncio -->

	<div id="box-post">
		<?php $id_post_destaque = of_get_option( 'destaque_post_home' ); ?>

		<?php $post_destaque = get_post( of_get_option( 'destaque_post_home' ) ); ?>

		<figure>
			<div id="th-post">
				<a href="<?php echo get_permalink( $id_post_destaque ); ?>">
					<?php echo get_the_post_thumbnail( $id_post_destaque, 'post_destaque' ); ?>
				</a>
			</div>
		</figure>

		<h1 id="title-post">
			<a href="<?php echo get_permalink( $id_post_destaque ); ?>">
				<?php echo $post_destaque->post_title; ?>
			</a>
		</h1>

		<figcaption>
			<div class="exerpt-home-destaque">
				<?php
					$qtd_destaque = of_get_option( 'qtd_destaque' );
					if ( empty ( $qtd_destaque ) ) {
						$qtd_destaque = 50;
					}
					$quantas = 10; echo wp_trim_words( $post_destaque->post_content, $qtd_destaque );
				?>
				<?php // echo apply_filters( 'the_content', $post_destaque->post_content ); ?>
			</div><!-- .exerpt-home-destaque -->

		</figcaption>
		<span><a href="" class="more-info"></a></span>
	</div><!-- #box-post -->
	
</section><!-- #box-content -->

<?php get_sidebar( "home" ); ?>
<?php get_footer(); ?>