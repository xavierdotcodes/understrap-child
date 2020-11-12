<?php 
//get field values
wp_reset_query();

$youtube_url = "http://www.youtube.com/";
$twitter_url = "http://www.twitter.com/";
$instagram_url = "http://www.instagram.com/";
$linkedin_url = "http://www.linkedin.com/";
$facebook_url = "http://www.facebook.com/"; 


$youtube_icon = get_field( 'youtube_icon' );
$linkedin_icon = get_field( 'linkedin_icon' );
$facebook_icon = get_field( 'facebook_icon' );
$twitter_icon = get_field( 'twitter_icon' );
$instagram_icon = get_field( 'instagram_icon' );

$instagram = get_field( 'instagram' );
$twitter = get_field( 'twitter' );
$linkedin = get_field( 'linkedin' );
$facebook = get_field( 'facebook' );
$youtube = get_field( 'youtube' );


$icon_count = 0; 

if( !empty( $instagram ) ) $icon_count++;
if( !empty( $twitter ) ) $icon_count++;
if( !empty( $linkedin ) ) $icon_count++;
if( !empty( $facebook ) ) $icon_count++;
if( !empty( $youtube ) ) $icon_count++;

$background_image = get_field( 'get_connected_section_background_image' );

 if( !$icon_count == 0 ) :  ?>

    <article id="get-connected-section" class="container py-5" style="background-image:url('<?php echo $background_image; ?>');">
        <h2 class="section-heading">Get Connected</h2> 
        <div class="mx-auto row col-<?php echo  $icon_count; ?>">
        <?php if( !empty( $instagram ) ) : ?>
            <!-- instagram --> 
           <a class="mx-auto" href="http://www.instagram.com/<?php echo $instagram; ?>"> <i class="fab fa-instagram fa-3x"></i></a>
        <?php endif; ?>

        <?php if ( !empty( $twitter ) ) : ?>
            <!-- twitter --> 
                <a class="mx-auto" href="http://www.twitter.com/<?php echo $twitter; ?>"> <i class="fab fa-twitter fa-3x"></i> </a>
        <?php endif; ?>

        <?php if( !empty( $linkedin ) ) : ?>
            <!-- LinkedIn --> 
                <a class="mx-auto" href="http://www.linkedin.com/in/<?php echo $linkedin; ?>"> <i class="fab fa-linkedin-in fa-3x"></i></a> 
        <?php endif; ?>

        <?php if( !empty( $youtube ) ) :?>
            <!-- youtube --> 
                <a class="mx-auto" href="http://www.youtube.com/<?php echo $youtube;?>"> <i class="fab fa-youtube fa-3x"></i> </a>  
        <?php endif; ?>

        <?php if( !empty( $facebook ) ) : ?>
            <!-- Facebook --> 
                <a class="mx-auto" href="http://www.facebook.com/<?php echo $facebook; ?>"> <i class="fab fa-facebook fa-3x"></i> </a>
        <?php endif; ?>
                   </div> 
    </article>
<?php endif;?>
