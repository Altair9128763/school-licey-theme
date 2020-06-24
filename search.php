<?php get_header(); ?>
	<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();

				if ( 'post' === get_post_type() ) {
					?>
						<div <?php post_class(); ?>>
							<h2><?php the_title(); ?></h2>
							<p><?php the_permalink(); ?></p>
						</div>
					<?php
				}
			}
		} else {
			?>
				<p>No search result.</p>
			<?php
		}
		
		wp_reset_postdata();
	?>
<?php get_footer(); ?>