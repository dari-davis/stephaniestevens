<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<nav id="main-nav" class="navbar navbar-expand-lg p-0" aria-labelledby="main-nav-label">

	<h2 id="main-nav-label" class="screen-reader-text">
		<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
	</h2>


	<div class="<?php echo esc_attr( $container ); ?> px-lg-5 py-3 py-lg-4">

		<!-- Stephanie Stevens -->
		<?php if ( ! has_custom_logo() ): ?>
			<?php if ( is_front_page() && is_home() ) : ?>

				<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

			<?php else : ?>

				<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

			<?php endif; ?>
		<?php else: ?>
			<?php if (is_front_page()): ?>
				<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><img class="logo mt-2" src="<?= get_stylesheet_directory_uri(); ?>/src/img/logo-white.svg" alt="Your Coach Stephanie"></a>
			<?php else: ?>
				<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><img class="logo" src="<?= get_stylesheet_directory_uri(); ?>/src/img/logo-red.svg" alt="Your Coach Stephanie"></a>
			<?php endif; ?>
		<?php endif; ?>
		<!-- end custom logo -->

		<div class="navigation-menu">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
		<?php if (is_front_page()): ?>
			<img class="navigation-menu__icon" src="<?= get_stylesheet_directory_uri(); ?>/src/img/menu-icon.svg" alt="Menu">
		<?php else: ?>
			<img class="navigation-menu__icon" src="<?= get_stylesheet_directory_uri(); ?>/src/img/menu-icon-red.svg" alt="Menu">
		<?php endif; ?>
		</button>

		<!-- The WordPress Menu goes here -->
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'container_class' => 'collapse navbar-collapse py-3 py-lg-0',
				'container_id'    => 'navbarNavDropdown',
				'menu_class'      => 'navbar-nav px-4 px-lg-0',
				'fallback_cb'     => '',
				'menu_id'         => 'main-menu',
				'depth'           => 2,
				'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
			)
		);
		?>
		</div>

	</div><!-- .container(-fluid) -->

</nav><!-- .site-navigation -->
