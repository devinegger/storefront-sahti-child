( function( $ ) {

    // search shower
    $('a.search-icon-button').click(function(event) {
        event.preventDefault();
        $(".site-search").slideToggle( "slow", function() {
        });
    });
    
    
    $('[data-toggle="popover"]').popover({
    container: 'body'
  });   

    
} )( jQuery );