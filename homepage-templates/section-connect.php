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


if( $icon_count > 2 ){
    $columns = "col-md-4"; 
    $offset = "col-md-offset-4";
}else{
    $columns = "col-md-2"; 
    $offset = "col-md-offset-5";
}

$background_image = get_field( 'background_image' );

 if( !$icon_count == 0 ) :  ?>

    <article id="get-connected-section" class="container" style="background-image:url('<?php echo $background_image; ?>'); background-size:cover; background-repeat:no-repeat;">
        <h2 class="section-heading">Get Connected</h2> 

        <div class="icons <?php echo $columns . " " . $offset; ?> row">
        <?php if( !empty( $instagram ) ) : ?>
            <!-- instagram --> 
            <div id="instagram-icon" class="social-icon">
               <a href="<?php sprintf('http://www.instagram.com/%1$s', $instagram); ?>"> <i class="fab fa-instagram"></i></a>
            </div>
        <?php endif; ?>

        <?php if ( !empty( $twitter ) ) : ?>
            <!-- twitter --> 
            <div id="twitter-icon" class="social-icon"> 
                <a href="<?php sprintf('%1$s%2$s', $twitter_url, $twitter); ?>"> <i class="fab fa-twitter"></i> </a>
            </div> 
        <?php endif; ?>

        <?php if( !empty( $linkedin ) ) : ?>
            <!-- LinkedIn --> 
            <div id="linkedin-icon" class="social-icon">
                <a href="<?php sprintf( '%1$s%2$s', $linkedin_url, $linkedin ); ?>"> <i class="fab fa-linkedin-in"></i></a> 
            </div>
        <?php endif; ?>

        <?php if( !empty( $youtube ) ) :?>
            <!-- youtube --> 
            <div id="youtube-icon" class="social-icon">
                <a href="<?php sprintf( '%1$s%2$s', $youtube_url, $youtube ); ?>"> <i class="fab fa-youtube"></i> </a>  
            </div>
        <?php endif; ?>

        <?php if( !empty( $facebook ) ) : ?>
            <!-- Facebook --> 
            <div id="facebook_icon" class="social-icon"> 
                <a href="<?php sprintf( '%1$s%2$s', $facebook_url, $facebook  );  ?>"> <i class="fab fa-facebook"></i> </a>
            </div> 
        <?php endif; ?>
                    
        </div> <!-- .icons --> 
    </article>
<?php endif;?>
