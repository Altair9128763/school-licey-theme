<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : ?>
		<div <?php post_class(); ?>>
			<?php the_post(); ?>
			<p><?php the_time(); ?></p>
			<h2><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h2>
		</div>
	<?php endwhile; else : ?>
		<p>No posts yet.</p>
	<?php endif; ?>
<?php get_footer(); ?>