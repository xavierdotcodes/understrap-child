<?php 
wp_reset_query();
$background_image = get_field( 'join_now_section_background_image' ); 
 ?>
<section id="joinnow-section" class="container" style="background-image:url('<?php echo get_stylesheet_directory_uri() . '/img/join-bg.png';?>');">
                <img id="goldspecks" class="peripheral-images" src="<?php echo esc_html_e(get_stylesheet_directory_uri() . '/img/goldspecs.png');?>" /> <h4 class="section-heading" >Join my newsletter and receive more English lessons for FREE</h4>
    <div class="row">
        <div class="col-6 mx-auto">

<?php 

$new_post_args = array( 'post_type' => 'subscriber', 
                        'post_status' => 'published');

$options = array( 'post_id' => 'new_post', 
                    'post_title' => false, 
                    'post_content' => false, 
                    'new_post' => $new_post_args,
                    'submit_value' => __( 'join now', 'acf' ),
                    'field_groups' => array('group_5fa6d09b86c75'), 
                    'label_placement' => 'left', 
                    'form_attributes' => array('action' => 'subscribe'),
                    'html_submit_button' => '<input type="submit" class="acf-button button rounded-pill understrap_btn text-uppercase" id="join-form-submit-button" value="%s" />',
);

acf_form( $options ); 
?>
        </div>
    </div>
</section>
