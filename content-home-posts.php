<?php
	if ( of_get_option( 'qtd_posts' ) ) {
		$qtd_posts = of_get_option( 'qtd_posts' );
	} else {
		$qtd_posts = '2';
	}

	$temp = $wp_query;
 	$wp_query= null;
  	$wp_query = new WP_Query('posts_per_page= ' . $qtd_posts . ' &order=DESC&paged=' . $paged); 
	while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

	<div id="box-post">
		<figure>
			<div id="th-post">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'post_destaque' ); ?>
				</a>
			</div>
		</figure>

		<h1 id="title-post">
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h1>

		<figcaption>
			<div class="exerpt-home-destaque">
				<?php the_excerpt(); ?>
			</div><!-- .exerpt-home-destaque -->
		</figcaption>

		<a href="<?php the_permalink(); ?>" class="more-info">Leia Mais</a>
	</div><!-- #box-post -->

<?php endwhile; ?>

<?php if(function_exists('wp_navi')) { ?>
<?php wp_navi(); ?>   
<?php } else { ?>      
<div class="navigation"><p><?php posts_nav_link('&#8734;','&laquo;&laquo; Previous Posts','Older Posts &raquo;&raquo;'); ?></p></div>
<?php } ?> 

	<?php $wp_query = null; $wp_query = $temp; ?>

<?php wp_reset_postdata(); ?>