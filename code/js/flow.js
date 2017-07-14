jQuery(function() {

    jQuery( '.toolbar-menu-toggle' ).click(function() {
        jQuery( '.wrapper-toolbar' ).slideToggle('fast');
        jQuery('.toolbar-menu').toggleClass('enable-border');
    });

    jQuery('.go-top-button').click(function(event){
        jQuery('html, body').animate(
            {scrollTop: 0},
            900
        );
    });

});