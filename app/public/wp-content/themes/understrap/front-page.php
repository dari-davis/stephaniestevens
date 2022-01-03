<?php
/**
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="wrapper p-0" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?> p-0" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

          <div class="jumbotron">
            <div class="container">
              <div class="col-md-8">
                <h1 class="display-4">Hello, world!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <p class="lead">
                  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </p>
              </div>
            </div>
          </div>

          <div class="container py-md-4">
            <?php
            while ( have_posts() ) {
              the_post();
              get_template_part( 'loop-templates/content', 'page' );

              // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) {
                comments_template();
              }
            }
            ?>
          </div>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
