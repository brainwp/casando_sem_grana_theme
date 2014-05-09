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

	<div id="boxes" class="boxes-internal boxes-home boxes-single">
		<a id="box-1" href="<?php echo $link_box_1; ?>" target="_blank">	
			<article id="box-1" class="box box-internal">
				<img src="<?php echo $icone_box_1; ?>" alt="<?php echo $title_box_1; ?>" />
				<h3 class="title"><?php echo $title_box_1; ?></h3>
			</article>
		</a>
		<a href="<?php echo $link_box_2; ?>" target="_blank">	
			<article id="box-2" class="box box-internal">
				<span class="img-bullet">
					<img src="<?php echo $icone_box_2; ?>" alt="<?php echo $title_box_2; ?>" />
				</span>
				<h3 class="title"><?php echo $title_box_2; ?></h3>
		</article>
	</a>
	<a href="<?php echo $link_box_3; ?>" target="_blank">	
		<article id="box-3" class="box box-internal">
			<span class="img-bullet">
				<img src="<?php echo $icone_box_3; ?>" alt="<?php echo $title_box_3; ?>" />
			</span>
			<h3 class="title"><?php echo $title_box_3; ?></h3>
		</article>
	</a>
	<a href="<?php echo $link_box_4; ?>" target="_blank">	
		<article id="box-4" class="box box-internal">
		<span class="img-bullet">
			<img src="<?php echo $icone_box_4; ?>" alt="<?php echo $title_box_4; ?>" />
		</span>
		<h3 class="title"><?php echo $title_box_4; ?></h3>
		</article>
	</a>
</div><!-- #boxes -->

<section class="body_menu-home body_menu-list">	
	<?php
		$cat1 = of_get_option( 'cat_1' );
		$cat2 = of_get_option( 'cat_2' );
		$cat3 = of_get_option( 'cat_3' );
		$cat4 = of_get_option( 'cat_4' );
		$cat5 = of_get_option( 'cat_5' );

		$the_ids = array('0' => $cat1, '1' => $cat2, '2' => $cat3, '3' => $cat4, '4' => $cat5 );

		$i = 0;
		$c = 1;
	?>
	<nav class="nav-menu-toogle">
		<ul>
			<?php foreach ( $the_ids as $the_id ) { ?>

			<?php
				$args = array(
					'hide_empty' => 0,
					'include' => $the_id,
					'taxonomy' => 'category'
				);

				// Pega as categorias Pai
				$categories = get_categories( $args );

				//Loop nas categorias Pai				
				foreach( $categories as $category ) :
				// Guarda o ID das categorias Pai
				$cat_ID = $category->term_id;
			?>


				<!-- HTML impresso pelo loop acima -->	
				<li data-category="<?php echo $cat_ID; ?>" class="active-toggle father-category">
					<span class="name-category"><?php echo $category->name; ?></span>
					<?php $c++; ?>
				</li>
					
	<?php endforeach; ?>

	<?php } ?>
				
		</ul>

			<!-- HTML impresso para as categorias Filhas -->
			<?php foreach ( $the_ids as $item ) { ?>

				<?php
				$args_f = array(
					'orderby' => 'ID',
					'order' => 'ASC',
					'hide_empty' => 0,
					'parent' => $item,
					'taxonomy'	=> 'category'
				);
				$cats = get_categories( $args_f );

				echo '<ul id="child-' . $item . '" class="sub-category-hide">';
		        foreach ( $cats as $cat ) {
					echo '<li><a href="' . get_category_link( $cat->term_id ) . '" >' . $cat->name . '</a></li>';
		        }
		        echo '</ul>';
			
			} ?>

	</nav><!-- .nav-menu-home -->

</section><!-- .body_menu-home -->
	
	<div class="clear"><!-- <hr> --></div>