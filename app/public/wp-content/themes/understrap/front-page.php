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

					<div class="row mb-md-5 gx-0 mx-0">
						<div class="col-md-6 m-lg-auto fade-in-right delay-5000">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/happy.jpg" />
						</div>
						<div class="col-md-6 mx-auto my-5 px-4 px-md-5 d-flex flex-column justify-content-center align-items-start fade-in-left delay-5000">
							<h4 class="mb-4">Are You Ready To Take Your Life To The Next Level?</h4>
							<p class="mb-5">Do you look at your life and think, <em>"There must be more than this!"</em>? Have you been caught in a constant cycle of start-and-stop when it comes to your dreams and goals? Are you looking for something new in your life? For more than 30 years, I've helped men and women level-up on life and accomplish their goals, with the help of my <a href="solutions#coaching">coaching programs</a> and strategies. I'd love to help you on your jouney to the next level of your life!</p>
                            <a href="booking" class="d-block button button--alt">Get Started</a>
						</div>
					</div>

					<div class="col-md-7 m-auto mt-2 px-4 section fade-in-left delay-2000">
						<p>Stephanie Stevens makes it her mission to help men and women to discover their purpose, develop their power and pursue their dreams. She believes that once you discover your purpose, wise up and rise up in confidence, you can then be empowered to leave your thumbprint on earth and have create lasting impact.</p>
					</div>

					<div class="col-md-10 m-auto row py-md-5 mb-3 move-in-up delay-2000">
						<div class="callout col-md-3 mb-4 mb-md-0">
							<div class="callout">
								<a href="solutions#coaching">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/1-1coaching.jpg" />
									<div class="callout__overlay d-flex flex-column">
										<p class="callout__heading px-3 py-2">1:1 Coaching</p>
									</div>
								</a>
							</div>
						</div>
						<div class="callout col-md-3 mb-4 mb-md-0">
							<div class="callout">
								<a href="solutions#group-coaching">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/group-coaching.jpg" />
									<div class="callout__overlay d-flex flex-column">
										<p class="callout__heading px-3 py-2">Group Coaching</p>
									</div>
								</a>
							</div>
						</div>
						<div class="callout col-md-3 mb-4 mb-md-0">
							<div class="callout">
                            <a href="events#speaking">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/speaking.png" />
								<div class="callout__overlay d-flex flex-column">
									<p class="callout__heading px-3 py-2">Speaking</p>
								</div>
                            </a>
							</div>
						</div>
						<div class="callout col-md-3 mb-4 mb-md-0">
							<div class="callout">
                            <a href="events#events">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/events.jpg" />
								<div class="callout__overlay d-flex flex-column">
									<p class="callout__heading px-3 py-2">Events</p>
								</div>
                            </a>
							</div>
						</div>
					</div>

					<div class="testimonials section">
						<div class="m-auto testimonials__wrapper">
							<div class="testimonial text-center py-3">
								<p class="col-md-8 col-lg-6 m-auto py-5">"I highly recommend coaching by Stephanie – sooner rather
									than later, and then as often as you can.”</p>
									<p class="testimonial__name">Robyn H.</p>
							</div>
							<div class="testimonial text-center py-3">
								<p class="col-md-8 col-lg-6 m-auto py-5">
									"Stephanie Stevens will push you towards greatness. She has encouraged me to pursue the things that I am good at and also the things that scare me the most. Her coaching has given me the confidence to face my fears."
								</p>
								<p class="testimonial__name">Dara A.</p>
							</div>
							<div class="testimonial text-center py-3">
								<p class="col-md-8 col-lg-6 m-auto py-5">"Stephanie affirms the woman in me that I did not see!"
								</p>
								<p class="testimonial__name">Ayanna A.</p>
							</div>
						</div>
					</div>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<script>
	jQuery('.testimonials__wrapper').slick({
		autoplay: true,
		pauseOnHover: false,
		arrows: false,
		dots: true,
		adaptiveHeight: true,
		slidesToShow: 1,
		autoplaySpeed: 4000,

	});

</script>
<?php
get_footer();
