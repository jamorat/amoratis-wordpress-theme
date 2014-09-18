$("#amo_main_search").keypress(function(event) {
    if (event.which == 13) {
        event.preventDefault();
        $("#searchform").submit();
    }
});

$( document ).ready(function() {
    //alert("j");
    //$( "p" ).text( "The DOM is now loaded and can be manipulated." );
    $('img').each(function(){ 
        $(this).removeAttr('width')
        $(this).removeAttr('height');
        setMaxWidth();
    });

    $('*[id^="attachment"]').each(function(){ 
        $(this).removeAttr('width')
        $(this).removeAttr('height');
    });

    function setMaxWidth() {
    $( "img" ).css( "maxWidth", ( $( window ).width() * 0.7 | 0 ) + "px" );
    $('*[class^="wp-image"]').css( "maxWidth", "100%");
    $('*[id^="attachment"]').css( "maxWidth", "100%");
    }



  });