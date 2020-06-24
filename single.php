<?php get_header(); ?>
	<div <?php post_class(); ?>>
		<?php the_post(); ?>
		<div class="post__date-time">
			<p><?php the_date(); ?></p>
			<p><?php the_time(); ?></p>
		</div>
		<h2><?php the_title(); ?></h2>
		<div><?php the_content(); ?></div>
	</div>
<?php get_footer(); ?>