
"use strict";
document.onkeydown = function(evt) {
    evt = evt || window.event;
    if (evt.keyCode == 37) {
        window.open("http://urlgalleries.net");
    }
};