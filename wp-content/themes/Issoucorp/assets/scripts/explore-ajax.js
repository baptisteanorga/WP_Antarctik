jQuery.post(
    ajaxurl,
    {
        'action': 'mon_action',
        'param': 'ajax est là'
    },
    function(response){
            console.log(response);
        }
);

/*** 
(function($) {
	$(document).on( 'click', '.titleToClick', function( event ) {
		event.preventDefault();
        console.log('yo');
        $("p").append('<?php the_sub_field('text_content'); ?>'); 
	})
})(jQuery);

*/