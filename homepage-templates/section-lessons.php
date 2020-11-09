<article id="lessons-section" class="container">
    <h2 class="section-heading">Lessons</h2>
    <div class="row">
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
    <article class="lesson-item col-md-4" id="lesson-<?php the_ID(); ?>">
        <?php echo get_the_post_thumbnail(); ?> 
        <?php the_excerpt(); ?>
    </article>
<?php
    endwhile;
else:
    esc_html_e( 'No lessons to list' ); 
endif;
?>
    </div>
</article>
