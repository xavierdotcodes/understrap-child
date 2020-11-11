<?php
/**
 * Template Name: Homepage Template
 *
 * Template for displaying full length home/landing page for englishwithlucy.com trial project.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

acf_form_head();
get_header();
$container = get_theme_mod( 'understrap_container_type' );

?>

    <div class="wrapper py-0" id="full-width-page-wrapper">

        <div class="<?php echo esc_attr( $container ); ?> p-0" id="content">

            <div class="row">

                <div class="col-12 content-area" id="primary">

                    <main class="site-main" id="main" role="main">

<?php
    get_template_part( 'global-templates/hero' );
    get_template_part( 'homepage-templates/section', 'join' ); 
    get_template_part( 'homepage-templates/section', 'logos' );
    get_template_part( 'homepage-templates/section', 'about' );
    get_template_part( 'homepage-templates/section', 'resources' );
    get_template_part( 'homepage-templates/section', 'lessons' ); 
    get_template_part( 'homepage-templates/section', 'connect' );
?>


                    </main><!-- #main -->		

                </div><!-- #primary -->

            </div><!-- .row end -->

        </div><!-- #content -->

    </div><!-- #full-width-page-wrapper -->

<?php get_footer();  ?>
