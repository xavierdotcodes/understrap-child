<?php
/**
 * Partial template for content in page.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class( "container" ); ?> id="homepage-about">
    <div class="row">
        <div class="col-md-6">
            <?php the_content(); ?>
        </div>
        <div class="col-md-6">
            <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
        </div>
    </div>

</article><!-- #post-## -->
