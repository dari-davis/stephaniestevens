<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="footer wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="p-0">
				<div class="row py-5 mx-auto">

					<footer class="site-footer d-md-flex" id="colophon">

						<div class="col-md-8 text-center text-md-start">
							<div class="footer__social">
								<a class="mx-1" target="_blank" href="https://instagram.com/yourcoachstephanie"><img
										class="footer__social-image"
										src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/instagram.svg" /></a>
								<a class="mx-1" target="_blank" href="https://facebook.com/yourcoachstephanie"><img
										class="footer__social-image"
										src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/facebook.svg" /></a>
								<a class="mx-1" target="_blank" href="https://twitter.com/yourcoachstephanie"><img
										class="footer__social-image"
										src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/twitter.svg" /></a>
								<a class="mx-1" target="_blank" href="#"><img class="footer__social-image"
										src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/youtube.svg" /></a>
							</div>

              				<div class="footer__logo mt-5">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/logo-white.svg" />
							</div>

              				<div class="site-info mt-5">
								<div class="small">&copy; 2022 - Stephanie Stevens Enterprise. All Rights Reserved</div>
							</div>
						</div>

						<div class="col-md-4 text-center text-md-end mt-5 mt-md-0">
							<ul class="footer__menu d-flex flex-column align-items-start px-0">
								<li class="footer__menu-item"><a class="footer__menu-link" href="about">About</a></li>
								<li class="footer__menu-item"><a class="footer__menu-link" href="solutions">Solutions</a></li>
								<li class="footer__menu-item"><a class="footer__menu-link" href="testimonials">Testimonials</a></li>
								<li class="footer__menu-item"><a class="footer__menu-link" href="contact">Contact</a></li>
								<li class="footer__menu-item"><a class="footer__menu-link" href="booking">Booking</a></li>
								<!-- <li class="footer__menu-item"><a class="footer__menu-link" href="privacy-policy">Privacy Policy</a></li> -->
							</ul>
						</div>

					</footer><!-- #colophon -->

				</div>
				<!--col end -->
			</div>

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
