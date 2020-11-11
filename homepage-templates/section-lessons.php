<article id="lessons-section" class="container pt-3 pb-5">
    <h2 class="section-heading">Lessons</h2>
        <div class="row">
            <div class="col-10 card-deck mx-auto">
    <?php 

    $args = array(
        'post_type' => 'lesson',
        'limit' => '3'
);


$lessons = new WP_Query( $args ); 

if ( $lessons->have_posts() ) :
    while ( $lessons->have_posts() ) : 
        $lessons->the_post(); 
?>
        <div class="lesson card w-25 text-left col-4 p-0 border-0" id="lesson-<?php the_ID(); ?>">
            <img class="card-img-top pb-3" src="<?php the_post_thumbnail_url();  ?>" /> 
            <div class="card-body p-0">
                <?php the_excerpt(); ?>
            </div>
        </div>
<?php
    endwhile;
else:
    esc_html_e( 'No lessons to list' ); 
endif;
?>
        </div><!-- .card-deck --> 
    </div><!-- .row --> 
</article>
