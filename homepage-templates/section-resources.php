<?php 
wp_reset_query(); 

$args = array(
    'post_type' => 'resource', 
    'limit' => '3', 
);
$resources = new WP_Query($args); 

 ?>
 <article class="container pt-5" id="resources-section" style="background-image:url('<?php echo get_stylesheet_directory_uri() . '/img/resources-bg.jpg';?>');">
    <div class="peripheral-image-container">
        <img id="splash-mid-left" class="peripheral-images" src="<?php echo get_stylesheet_directory_uri() . '/img/splash-mid-left.png'; ?>" alt="" />
        <img id="splash-mid-right" class="peripheral-images" src="<?php echo get_stylesheet_directory_uri() . '/img/splash-mid-right.png'; ?>" alt="" />
    </div>

    <h2 class="section-heading">Resources</h2>
        <div class="row">
            <div class="col-10 card-deck mx-auto">

<?php 
//Wordpress Loop
if( $resources->have_posts() ) :
    while( $resources->have_posts() ) :
        $resources->the_post();
?>

        <div class="resource card w-25 col-4 text-center"  id="resource-<?php the_ID(); ?>">
            <img class="card-img-top pt-3" src="<?php echo get_the_post_thumbnail_url(); ?>" /> 
            <div class="card-body">
                <h5 class="card-title"><?PHP  ?></h5>
                <?php the_content();  ?>
                <a class="col-12 understrap_btn rounded-pill text-uppercase" style="color:white;">learn more</a>
        
            </div>
        </div><!-- .card -->

<?php
    endwhile;
endif;
?>

        </dvi> <!--card-deck --> 
    </div><!-- .row -->
</article> <!-- .container --> 

