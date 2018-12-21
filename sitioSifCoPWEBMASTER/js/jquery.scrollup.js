/*
https://jsfiddle.net/brilliancedisplay/9fe77anq/
*/
$(document).ready(function () { 
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    }); 
});