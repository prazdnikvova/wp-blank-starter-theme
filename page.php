<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_ID(); ?>

<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

<?php the_content(); ?>

<?php if ( has_post_thumbnail() ) : ?>
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
<?php endif; ?>

<?php endwhile; endif; ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>