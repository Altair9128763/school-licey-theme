<?php get_header(); ?>
	<div <?php post_class(); ?>>
		<?php the_post(); ?>
		<h2><?php the_title(); ?></h2>
		<p><?php the_content(); ?></p>
	</div>
<?php get_footer(); ?>