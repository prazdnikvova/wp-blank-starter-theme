<?php get_header(); ?>


<?php single_term_title(); ?>
<div class="archive-meta"><?php if ( '' != the_archive_description() ) { echo esc_html( the_archive_description() ); } ?></div>


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

	<?php if ( comments_open() ) { echo '<span class="meta-sep">|</span> <span class="comments-link"><a href="' . esc_url( get_comments_link() ) . '">' . sprintf( esc_html__( 'Comments', 'blankslate' ) ) . '</a></span>'; } ?>
<?php endwhile; endif; ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>