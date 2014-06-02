<section class="body_menu-home">
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
				<li data-category="<?php echo $cat_ID; ?>" class="active-toggle">
					<div class="ring">
						<span class="img-cat parent-item-<?php echo $cat_ID; ?> parent-image-<?php echo $c; ?>"></span>
							<span class="name-category"><?php echo $category->name; ?></span>
						<div class="hover-cat"></div>
					</div>
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
				echo '<div class="esconder"></div>';
		        foreach ( $cats as $cat ) {
					echo '<li><a href="' . get_category_link( $cat->term_id ) . '" >' . $cat->name . '</a></li>';
		        }
		        echo '</ul>';
			
			} ?>

	</nav><!-- .nav-menu-home -->

</section><!-- .body_menu-home -->