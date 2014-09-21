

jQuery( document ).ready(function() {

    jQuery("#amo_main_search").keypress(function(event) {
    if (event.which == 13) {
        event.preventDefault();
        jQuery("#searchform").submit();
    }
});

    
    jQuery('img').each(function(){ 
        jQuery(this).removeAttr('width')
        jQuery(this).removeAttr('height');
        setMaxWidth();
    });

    jQuery('*[id^="attachment"]').each(function(){ 
        jQuery(this).removeAttr('width')
        jQuery(this).removeAttr('height');
    });

    function setMaxWidth() {
    jQuery( "img" ).css( "maxWidth", ( jQuery( window ).width() * 0.7 | 0 ) + "px" );
    jQuery('*[class^="wp-image"]').css( "maxWidth", "100%");
    jQuery('*[id^="attachment"]').css( "maxWidth", "100%");
    }



  });