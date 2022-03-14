<?php get_header(); ?>
<div class="container page-color <?php the_field('color'); ?>">
	<div class="row">
		<div class="col">
			<?php the_content(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
