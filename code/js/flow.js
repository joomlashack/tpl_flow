jQuery(function() {

    jQuery('.go-top-button').click(function(event){
        jQuery('html, body').animate(
            {scrollTop: 0},
            900
        );
    });

});