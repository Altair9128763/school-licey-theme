<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Slab:wght@400;500;700&display=swap" rel="stylesheet">
	<?php 
		if ( is_front_page() ) {
			?>
				<title><?php bloginfo('name'); ?></title>
			<?php
		} else {
			?>
				<title><?php the_title(); ?></title>
			<?php
		}
	?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="header">
		<div class="container">
			<div class="header__inner">
				<h1 class="site-name"><a href="<?php echo esc_url( home_url('/') ); ?>" class="site-name-text"><?php bloginfo('name'); ?></a></h1>
				<?php get_search_form(); ?>
			</div>
		</div>
	</header>

	<main class="main">
		<div class="container">
			<div class="main__inner">
				<?php 
					wp_nav_menu([
						'theme_location' => 'primary',
						'container' => false,
						'items_wrap' => '<nav id="%1$s" class="%2$s">%3$s</nav>'
					]);
				?>
				<div class="main__content">
