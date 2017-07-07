jQuery(function() {

    jQuery( '.toolbar-menu-toggle' ).click(function() {
        jQuery( '.wrapper-toolbar' ).slideToggle('slow');
    });

    jQuery('.go-top-button').click(function(event){
        jQuery('html, body').animate(
            {scrollTop: 0},
            900
        );
    });

});