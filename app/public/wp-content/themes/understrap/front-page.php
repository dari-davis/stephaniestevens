<?php
/**
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('home');
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="wrapper p-0" id="full-width-page-wrapper">

	<div class="m-0 p-0" id="content">

		<div class="row gx-0">

			<div class="col-md-12 content-area gx-0" id="primary">

				<main class="site-main" id="main" role="main">

        <div class="col-md-8 m-auto py-5 mt-3">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla cursus elit ac facilisis interdum. Fusce ultricies, ligula sit amet placerat imperdiet, massa neque pretium quam, dapibus dignissim neque ligula eget ipsum. Cras non libero vitae justo bibendum sodales quis vel ex. Pellentesque dignissim elit nec placerat scelerisque. Curabitur nunc urna, imperdiet at auctor in, luctus non neque. Aliquam lacinia, enim vel posuere fermentum, sem sapien bibendum justo, sed laoreet sem metus et leo. In vulputate metus id viverra vestibulum. Donec sit amet dui pretium, ultricies mi eu, tristique urna.</p>
        </div>

        <div class="col-md-10 m-auto row py-5 mb-5">
          <div class="callout col-md-4">
            <div class="callout">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/coaching.png"/>
              <div class="callout__overlay p-3"><p class="callout__heading">Coaching</p></div>
            </div>
          </div>
          <div class="callout col-md-4">
            <div class="callout">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/speaking.png"/>
              <div class="callout__overlay p-3"><p class="callout__heading">Speaking</p></div>
            </div>
          </div>
          <div class="callout col-md-4">
            <div class="callout">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/events.png"/>
              <div class="callout__overlay p-3"><p class="callout__heading">Events</p></div>
            </div>
          </div>
        </div>

        <div class="testimonials py-5">
          <div class="m-auto testimonials__wrapper row col-md-8">
            <div class="testimonial col-md-6 m-auto py-3">
              <p>Stephanie affirms the woman in me that I did not see.</p>
            </div>
            <div class="testimonial col-md-6 m-auto py-3">
              <p>I highly recommend coaching by Stephanie – sooner rather than later, and then as often as you can.”</p>
            </div>
          </div>
        </div>

        <div class="cta px-5 py-4">
          <div class="col-12 row gx-0">
            <div class="d-flex col-md-6 align-items-center">
              <h3 class="cta__heading m-0">Are you ready to take your life to the next level?</h3>
            </div>
            <div class="d-flex col-md-6 justify-content-md-end">
              <a href="#" class="button button--outline">Book A Free Consultation</a>
            </div>
          </div>
        </div>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->
<?php
get_footer();
