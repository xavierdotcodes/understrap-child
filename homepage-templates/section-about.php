<?php
/**
 * Partial template for content in page.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class( "container py-3" ); ?> id="about-section">
    <div class="row">
        <div class="col-6">
            <?php the_content(); ?>
        </div><!-- .col-6 --> 
        <div class="col-6">
            <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
        </div> <!-- .col-6 --> 
    </div><!-- .row -->
</article><!-- #post-## -->
