<section class="body_menu-home">
	<?php
		$to_loop = array();
		$i = '';
		$c = '1';
	?>
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
							<?php echo $category->name; ?>'
						<div class="hover-cat"></div>
					</div>
					
					<?php $c++; ?>
					
					<?php	
						$child_args = array( 'child_of' => $cat_ID, );
						
						// Pega as categorias Filhas
						$child_categories = get_categories( $child_args );
					?>
						<!-- Guarda no array $to_loop o ID das categorias Filhas-->
					<?php foreach( $child_categories as $child_category ) : ?>		
						<?php $to_loop[$i] .= $child_category->parent; ?>
						<?php $i++; ?>
					<?php endforeach; ?>
				</li>
					
	<?php endforeach; ?>
				
		</ul>

			<!-- HTML impresso para as categorias Filhas -->	
			<?php foreach( $to_loop as $to ) : ?>		
				<?php $categories = get_categories( "hide_empty=0&parent=$to" );
		        echo '<ul id="child-'. $to .'" class="sub-category-hide">';
		        foreach ( $categories as $cat ) {
					echo '<li><a href="' . get_category_link( $cat->term_id ) . '" >' . $cat->name . '</a></li>';
		        }
		        echo '</ul>'; ?>
			<?php endforeach; ?>

	</nav><!-- .nav-menu-home -->

</section><!-- .body_menu-home -->