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
        <div class="row py-3 mx-auto">

          <footer class="site-footer d-md-flex" id="colophon">

            <div class="col-md-6 text-center text-md-start">
              <div class="footer__social">
                <p>Follow @yourcoachstephanie</p>
                <a class="mx-1" target="_blank" href="https://instagram.com/yourcoachstephanie"><img class="footer__social-image" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/instagram.png"/></a>
                <a class="mx-1" target="_blank" href="https://facebook.com/yourcoachstephanie"><img class="footer__social-image" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/facebook.png"/></a>
                <a class="mx-1" target="_blank" href="https://twitter.com/yourcoachstephanie"><img class="footer__social-image" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/twitter.png"/></a>
                <a class="mx-1" target="_blank" href="#"><img class="footer__social-image" src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/youtube.png"/></a>
              </div>
            </div>

            <div class="col-md-6 text-center text-md-end mt-5 mt-md-0">
              <div class="site-info d-flex flex-column align-items-center align-items-md-end">
              <div class="footer__logo mb-3"><img src="/wp-content/uploads/2022/01/Asset-4.png"/></div>
              <div class="small">&copy; 2022 - Stephanie Stevens Enterprise. All Rights Reserved</div>
            </div>

            </div><!-- .site-info -->

          </footer><!-- #colophon -->

        </div><!--col end -->
      </div>

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

