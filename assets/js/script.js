"use strict";
new WOW().init();

/*	--------------------------------------------------
:: Enable bootstrap popovers
-------------------------------------------------- */
$('[data-toggle="popover"]').popover()

/*	--------------------------------------------------
:: Scroll to top button 
-------------------------------------------------- */
$(window).scroll(function () {
    var height = $(window).scrollTop();
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        $("#on-top").addClass('btn-ontop--show');
    } else {
        $("#on-top").removeClass('btn-ontop--show');
    }
});

$(document).ready(function () {
    $("#on-top").click(function (event) {
        event.preventDefault();
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
        return false;
    });
});

/*	--------------------------------------------------
:: Nav
-------------------------------------------------- */

jQuery(function ($) {
    $('.droopmenu-navbar').droopmenu({
        dmArrow: false,
        dmArrowDirection: 'dmarrowdown',
        dmSticky: true, // Make menu sticky becomes fixed on scrolling to top of page: true or false - Default is false
        dmCentered: true
    });
});

/*	--------------------------------------------------
:: Equal height
-------------------------------------------------- */
 $('.col-equal').matchHeight({
        property: 'height'
    });

