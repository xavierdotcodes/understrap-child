<?php 

$container = get_theme_mod( 'understrap_container_type' );
wp_reset_query();

?>

    <div id="wrapper-footer" class="wrapper">
        <div class="<?php echo esc_attr( $container ) ?>">
            <div class="row">
                <div class="col-md-12">
                    <footer id="colophon" class="site-footer">
                        <div class="site-info">
                        <p>&copy;<?php echo the_field( 'siteinfo' ); ?></p>
                        </div>
                    </footer>
                </div><!--col-md-12-->
            </div><!-- row --> 
