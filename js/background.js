/**
 * Created by click on 11.04.16.
 */
/*KIND OF background in JS -
 $('body').css('background-image', 'url("http://picsfab.com/download/image/17116/1920x1080_0-117-1920-1200_bruklinskij-most.jpg")');*/

//------------------------------------------------------------------------------------START OF BACKGROUND
"use strict";
(function() {

    var win = $(window);

    win.resize(function() {

        var win_w = win.width(),
            win_h = win.height(),
            $bg    = $("#bg");

        // Load narrowest background image based on
        // viewport width, but never load anything narrower
        // that what's already loaded if anything.
        var available = [
            720, 768, 1024, 1080, 1280, 1366,
            1400, 1680, 1920,
            2560, 3840, 4860
        ];

        var current = $bg.attr('src').match(/([0-9]+)/) ? RegExp.$1 : null;

        if (!current || ((current < win_w) && (current < available[available.length - 1]))) {

            var chosen = available[available.length - 1];

            for (var i=0; i<available.length; i++) {
                if (available[i] >= win_w) {
                    chosen = available[i];
                    break;
                }
            }

            // Set the new image
            $bg.attr('src', '/img/bg' + chosen + '.jpg');

            // for testing...
            // console.log('Chosen background: ' + chosen);

        }

        // Determine whether width or height should be 100%
        if ((win_w / win_h) < ($bg.width() / $bg.height())) {
            $bg.css({height: '100%', width: 'auto'});
        } else {
            $bg.css({width: '100%', height: 'auto'});
        }

    }).resize();

})(jQuery);


/*$(window).load(function() {

 var theWindow        = $(window),
 $bg              = $("#bg"),
 aspectRatio      = $bg.width() / $bg.height();

 function resizeBg() {

 if ( (theWindow.width() / theWindow.height()) < aspectRatio ) {
 $bg
 .removeClass()
 .addClass('bgheight');
 } else {
 $bg
 .removeClass()
 .addClass('bgwidth');
 }

 }

 theWindow.resize(resizeBg).trigger("resize");

 });*/

//-------------------------------------------------------------------------------THIS IS END OF BACKGROUND