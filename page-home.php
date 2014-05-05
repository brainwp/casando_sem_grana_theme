<?php
	/*
	Template Name: Home
	*/
?>

<?php get_header(); ?>

<section id="body_slides">
<?php echo do_shortcode ('[pointelleslider id="2"]') ?>
</section><!-- #body_slides -->

<div class="see-all"><a href="<?php echo home_url(); ?>/blog">Ver Todos os Posts</a></div>

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
				'orderby'                  => 'name',
				'order'                    => 'ASC',
				'hide_empty'               => 0,
				'hierarchical'             => 1,
				'include'                  => '2,3,4,5',
				'number'                   => '5',
				'taxonomy'                 => 'category',
				'pad_counts'               => false );

				$categories = get_categories( $args );
				foreach( $categories as $category ) :
				$cat_ID = $category->term_id; // Get ID the category.
			?>
				<li data-category="<?php echo $cat_ID; ?>" class="active-toggle">
						<div class="ring">
							<span class="img-cat parent-item-<?php echo $cat_ID; ?>"></span>
								<?php echo $category->name; ?>
							<div class="hover-cat"></div>
						</div>

						<?php	
							//$child_args = array( 'child_of' => $cat_ID, 'hide_empty' => 0, );
							//$child_categories = get_categories( $child_args );
							//var_dump($child_categories);
						?>
				</li>

				<?php endforeach; ?>
		</ul>

		<!-- START | Toggle SubCategorias -->
		<?php
			$child_categories = get_categories('&child_of=2&hide_empty'); // List subcategories of category '2' (even the ones with no posts in them)
			echo '<ul id="child-2" class="sub-category-hide">';
			foreach ($child_categories as $subcategory) {
			  echo sprintf('<li><a href="%s">%s</a></li>', get_category_link($subcategory->term_id), apply_filters('get_term', $subcategory->name));
			}
			echo '</ul>';
		?>

		<?php
			$child_categories = get_categories('&child_of=3&hide_empty'); // List subcategories of category '3' (even the ones with no posts in them)
			echo '<ul  id="child-3" class="sub-category-hide">';
			foreach ($child_categories as $subcategory) {
			  echo sprintf('<li><a href="%s">%s</a></li>', get_category_link($subcategory->term_id), apply_filters('get_term', $subcategory->name));
			}
			echo '</ul>';
		?>

		<?php
			$child_categories = get_categories('&child_of=4&hide_empty'); // List subcategories of category '4' (even the ones with no posts in them)
			echo '<ul  id="child-4" class="sub-category-hide">';
			foreach ($child_categories as $subcategory) {
			  echo sprintf('<li><a href="%s">%s</a></li>', get_category_link($subcategory->term_id), apply_filters('get_term', $subcategory->name));
			}
			echo '</ul>';
		?>

		<?php
			$child_categories = get_categories('&child_of=5&hide_empty'); // List subcategories of category '5' (even the ones with no posts in them)
			echo '<ul  id="child-5" class="sub-category-hide">';
			foreach ($child_categories as $subcategory) {
			  echo sprintf('<li><a href="%s">%s</a></li>', get_category_link($subcategory->term_id), apply_filters('get_term', $subcategory->name));
			}
			echo '</ul>';
		?>
		<!-- AND | Toggle SubCategorias -->
				
	</nav><!-- .nav-menu-home -->

</section><!-- .body_menu-home -->

<section id="box-content">
	<div class="anuncio">
		<a href="<?php echo of_get_option('anuncio_link'); ?>" target="_blank">
			<img src="<?php echo of_get_option('anuncio_img'); ?>" alt="Anúncio Casando sem Grana">
		</a>
	</div><!-- .anuncio -->

	<?php if ( of_get_option( 'exibir_destaques_checkbox' ) ) {
		get_template_part( 'content', 'home-destaques');
	} else {
		get_template_part( 'content', 'home-posts' );
	} ?>
	
</section><!-- #box-content -->

<?php get_sidebar( "home" ); ?>
<?php get_footer(); ?>
