<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

	<?php printf( esc_html__( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?>

	<?php while ( have_posts() ) : the_post(); ?>
	
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
	<?php endwhile; ?>

<?php else : ?>

	<?php esc_html_e( 'Nothing Found', 'blankslate' ); ?>

	<div class="entry-content">
	<p><?php esc_html_e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></p>
	<?php get_search_form(); ?>

<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>