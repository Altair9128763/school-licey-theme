<?php get_header(); ?>
	<h2 class="front-page__ctime"><?php echo date_i18n('j F, l, H:i'); ?></h2>
	<?php
		$query = new WP_Query( [
			'post_type' => 'post',
			'orderby' => 'date',
			'posts_per_page' => 2
		] );

		while ( $query->have_posts() ) {
			$query->the_post();

			?>
				<div <?php post_class(); ?>>
					<span class="front-page__time"><?php echo get_the_date('j.n, H:i'); ?></span>
					<span class="front-page__wrap"><a href="<?php echo esc_url(get_permalink()); ?>" class="front-page-title"><?php the_title(); ?></a></span>
				</div>
			<?php
		}
	?>
<?php get_footer(); ?>