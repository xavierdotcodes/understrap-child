<?php 
wp_reset_query(); 
$logos = get_field( 'logos' );

if( !empty( $logos ) ) : ?> 
<article id="logos-section" class="homepage-section container">
    <div class="row">
        <div class="col-10 mx-auto" id="logo-wrapper">
            <img src="<?php echo $logos; ?>" alt="Company Logos">
        </div>        
    </div>
</article>
<?php endif; ?>
