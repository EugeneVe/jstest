/**
 * Created by click on 05.05.16.
 */
/*______________________________________________SCROLLUP FOR PAGE START______________________________________________*/
$(function() {
    "use strict";
    $(window).scroll(function() {
        if($(this).scrollTop() != 0) {
            $('#scrollup').fadeIn();
        } else {
            $('#scrollup').fadeOut();
        }
    });
    $('#scrollup').click(function() {
        $('body,html').animate({scrollTop:0},400);
    });
});
/*_________________________________________SCROLLUP FOR PAGE END___________________________________________________*/
