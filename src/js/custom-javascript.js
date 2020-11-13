jQuery(document).ready(function($){

    $( 'form#acf-form' ).on( 'submit', function(e){
            e.preventDefault();

            var $form = $(this);

            $.post( ajaxurl, $form.serialize(), function( data){
                //clear form

                if(!data.error){
                 alert('Thanks for subscribing');
                }else{
                    console.log(data.error_message);
                }

            });
    });


});
