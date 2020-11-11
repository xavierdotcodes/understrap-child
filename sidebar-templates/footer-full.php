<?php
/**
 * Sidebar setup for footer full
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
wp_reset_query();
$contact_email = get_field( 'contact_e-mail' );
$contact_phone = get_field( 'contact_phone' );
$site_summary = get_field( 'site_summary' );

?>

            <div class="d-flex flex-row col-10 offset-1" id="footer-full">

                    <div class="col-4 p-0">
                        <h6 id="footer-blog-title"><?php echo get_bloginfo( 'name' ); ?></h6>
                        <p id="footer-site-summary">
                            <?php echo $site_summary; ?>
                        </p>
                    </div>

<?php if( is_active_sidebar( 'footer-menu-widget-area' ) ) :  ?>

                    <div id="footer-menu" class="col-3">
                        <?php dynamic_sidebar( 'footer-menu-widget-area' ); ?>
                    </div>
<?php endif; ?>

<?php if( is_active_sidebar( 'footer' ) ) :  ?>
    <?php dynamic_sidebar( 'footer' ); ?>
<?php endif; ?>

                    <div id="footer-contact" class="col-2 ml-auto text-left">
<h6>Contact Us</h6>
<?php if( !empty( $contact_email ) ) : ?>
                        <p><i class="far fa-envelope"></i> <?php echo $contact_email;  ?></p>
<?php endif;  ?>

<?php if( !empty( $contact_phone ) ) : ?>
                        <p><i class="fa fa-phone-volume"></i> <?php echo $contact_phone;  ?></p>
<?php endif;  ?>
                        
                    </div>


			</div>
