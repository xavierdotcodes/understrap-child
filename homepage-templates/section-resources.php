<?php 
wp_reset_query(); 
$resources_background_image = get_field( 'resources_section_background_image' );

$args = array(
    'post_type' => 'resource', 
    'limit' => '3', 
);
$resources = new WP_Query($args); 

 ?>
 <article class="container homepage-section" id="resources-section" style="background-image:url('<?php echo $resources_background_image;  ?>'); background-size:cover; background-repeat:no-repeat;">

    <h2 class="section-heading">Resources</h2>
    <div class="row">

<?php 
//Wordpress Loop
if( $resources->have_posts() ) :
    while( $resources->have_posts() ) :
        $resources->the_post();
?>

    <article class="resource col-md-4" id="resource-<?php the_ID(); ?>">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" /> 
        <?php the_content();  ?>
        <button class="radioflyer rounded-pill learn-more-button">Learn More</button>
    </article>

<?php
    endwhile;
endif;
?>

    </div><!-- .row -->
</article> <!-- .container --> 

