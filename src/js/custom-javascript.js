jQuery(document).ready(function($){

    $( 'form#acf-form' ).on( 'submit', function(e){
            e.preventDefault();

            var $form = $(this);

            $.post( ajaxurl, $form.serialize(), function(data){
                //clear form

                //display result in popper tooltip
                if(!data.error){

                }else{
                    console.log(data.error_message);
                }
            });
    });


});
