<section class="body_menu-home">
	<?php
		$to_loop = array();
		$i = 0;
		$c = 1;
	?>
	<nav class="nav-menu-toogle">
		<ul>
			<?php
				$id_cats = of_get_option( 'id_cats' );
				$args = array(
				'orderby'                  => 'ID',
				'order'                    => 'ASC',
				'hide_empty'               => 0,
				'include'                  => $id_cats,
				'taxonomy'                 => 'category'
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
				
		</ul>
			<!-- HTML impresso para as categorias Filhas -->
			<?php $array_id = explode(',', $id_cats); ?>

			<?php foreach ( $array_id as $item ) { ?>

				<?php
				$args_f = array(
					'orderby'                  => 'ID',
					'order'                    => 'ASC',
					'hide_empty'               => 0,
					'parent'                  => $item,
					'taxonomy'                 => 'category'
				);
				$cats = get_categories( $args_f );

				echo '<ul id="child-'.$item.'" class="sub-category-hide">';
		        foreach ( $cats as $cat ) {
					echo '<li><a href="' . get_category_link( $cat->term_id ) . '" >' . $cat->name . '</a></li>';
		        }
		        echo '</ul>';
			
			} ?>

	</nav><!-- .nav-menu-home -->

</section><!-- .body_menu-home -->