	<!-- Post Destaque 1 -->
	<div id="box-post">
		<?php $post_destaque_1 = get_post( of_get_option( 'post_destaque_1' ) ); ?>

		<figure>
			<div id="th-post">
				<a href="<?php echo get_permalink( $post_destaque_1 ); ?>">
					<?php echo get_the_post_thumbnail(  $post_destaque_1, 'post_destaque' ); ?>
				</a>
			</div>
		</figure>

		<h1 id="title-post">
			<a href="<?php echo get_permalink( $post_destaque_1 ); ?>">
				<?php echo $post_destaque_1->post_title; ?>
			</a>
		</h1>

		<figcaption>
			<div class="exerpt-home-destaque">
				<?php
					$qtd_destaque = of_get_option( 'qtd_destaque' );
					if ( empty ( $qtd_destaque ) ) {
						$qtd_destaque = 50;
					}
					$quantas = 10; echo wp_trim_words( $post_destaque_1->post_content, $qtd_destaque );
				?>
				<?php // echo apply_filters( 'the_content', $post_destaque->post_content ); ?>
			</div><!-- .exerpt-home-destaque -->
		</figcaption>

		<a href="<?php echo get_permalink( $id_post_destaque ); ?>" class="more-info">Leia Mais</a>
	</div><!-- #box-post -->

	<!-- Post Destaque 2 -->
	<div id="box-post">

		<?php $post_destaque_2 = get_post( of_get_option( 'post_destaque_2' ) ); ?>

		<figure>
			<div id="th-post">
				<a href="<?php echo get_permalink( $post_destaque_2 ); ?>">
					<?php echo get_the_post_thumbnail( $post_destaque_2, 'post_destaque' ); ?>
				</a>
			</div>
		</figure>

		<h1 id="title-post">
			<a href="<?php echo get_permalink( $post_destaque_2 ); ?>">
				<?php echo $post_destaque_2->post_title; ?>
			</a>
		</h1>

		<figcaption>
			<div class="exerpt-home-destaque">
				<?php
					$qtd_destaque = of_get_option( 'qtd_destaque' );
					if ( empty ( $qtd_destaque ) ) {
						$qtd_destaque = 50;
					}
					$quantas = 10; echo wp_trim_words( $post_destaque_2->post_content, $qtd_destaque );
				?>
				<?php // echo apply_filters( 'the_content', $post_destaque->post_content ); ?>
			</div><!-- .exerpt-home-destaque -->
		</figcaption>

		<a href="<?php echo get_permalink( $id_post_destaque ); ?>" class="more-info">Leia Mais</a>
	</div><!-- #box-post -->