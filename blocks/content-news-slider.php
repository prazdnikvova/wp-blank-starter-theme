<?php
	$term = get_field('category');
	$color = get_field('color');
	$term_link = get_term_link($term->term_id, 'category');
	$query = new WP_Query( [
		'tax_query' => [
			[
				'taxonomy' => 'category',
				'field'    => 'id',
				'terms'    => array( $term->term_id ),
			],
		],
		'post_type' => 'post',
		'posts_per_page' => -1
	] );
	if ( $query->have_posts() ) {
		?>
		<div class="news_slider_wrap">
			<div class="news_slider">
				<?php while( $query->have_posts() ) { $query->the_post(); ?>
					<div class="news_slide">
						<?php if( has_post_thumbnail() ) { ?>
							<div class="news_slide_image">
								<?php the_post_thumbnail( 'medium' ); ?>
								<div class="news_slide_label label <?php echo $color; ?>"><?php echo $term->name; ?></div>
							</div>
						<?php } else { ?>
							<div class="news_slide_label_static label <?php echo $color; ?>"><?php echo $term->name; ?></div>
						<?php } ?>
						<div class="news_slide_content">
							<h2><?php the_title(); ?></h2>
							<?php if (!has_post_thumbnail()) { the_excerpt(); } ?>
						</div>
						<div class="news_slide_link">
							<a href="<?php echo get_permalink(); ?>" class="btn">Read more...</a>
						</div>
						<div class="news_slide_link_padding"></div>
					</div>
				<?php } ?>
			</div>
		</div>
		<?php
	}

	wp_reset_postdata();
?>