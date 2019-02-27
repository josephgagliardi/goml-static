"use strict";

$(document).ready(function () {
    $('#cs-button-view').on('click', function () {
        $('.list-syllabus').toggleClass('list-syllabus--show');
        $(this).text(function (i, text) {
            return text === "view less" ? "view more" : "view less";
        })
    });

});

var sidebar = new StickySidebar('#menu-left', {
    containerSelector: '.sticky__wrapper',
    innerWrapperSelector: '.list-link',
    topSpacing: 70,
    bottomSpacing: 70,
    minWidth: 768
});

(function ($) {
    $("a[href*=\\#]:not([href=\\#])").click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') ||
            location.hostname == this.hostname) {

            var target = $(this.hash),
                headerHeight = $(".droopmenu-navbar").height() + 30; // Get fixed header height

            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - headerHeight
                }, 500);
                return false;
            }
        }
    });
})(jQuery);
