<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
wp_reset_query();
$site_info = get_field( 'site_info' ); 
?>


<footer class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">
<?php get_template_part( 'sidebar-templates/footer', 'full' ); ?>

		<div class="d-flex flex-row offset-1">

			<div class="col-12">

				<div class="site-footer" id="colophon">

					<p class="site-info">&copy;<?php echo $site_info; ?></p><!-- .site-info -->

				</div><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</footer><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

