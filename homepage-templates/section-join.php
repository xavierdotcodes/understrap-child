<?php 
wp_reset_query();
$background_image = get_field( 'join_now_section_background_image' ); 
 ?>
<section id="joinnow-section" class="container" style="background-image:url('<?php echo $background_image; ?> '); background-size:cover; background-repeat:no-repeat;">
    <div class="row">
        <div class="col-md-12">




<?php 

$new_post_args = array( 'post_type' => 'subscriber', 
                        'post_status' => 'published');

$options = array( 'post_id' => 'new_post', 
                    'post_title' => false, 
                    'post_content' => false, 
                    'new_post' => $new_post_args,
                    'submit_value' => __( 'JOIN NOW', 'acf' ),
                    'updated_message' => __( 'Your email has been submitted. Thank You!', 'acf' ),
                    'field_groups' => array('group_5fa6d09b86c75'), 
                    'label_placement' => 'left', 
                    'html_submit_button' => '<input type="submit" class="acf-button button rounded-pill radioflyer button-large col-md-2" id="join-form-submit-button" value="%s" />',
);

acf_form( $options ); 
?>
        </div>
    </div>
</section>
