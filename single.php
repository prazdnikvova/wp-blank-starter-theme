<?php get_header(); ?>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php the_ID(); ?>

	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

	<?php the_content(); ?>

	<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
	<?php endif; ?>
	<?php the_author_posts_link(); ?>

	<?php esc_html_e( 'Categories: ', 'blank' ); ?><?php the_category( ', ' ); ?>
	<?php the_tags(); ?>

	<?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>


<?php $args = array(
'prev_text' => '<span class="meta-nav">&larr;</span> %title',
'next_text' => '%title <span class="meta-nav">&rarr;</span>'
);
the_post_navigation( $args ); ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>