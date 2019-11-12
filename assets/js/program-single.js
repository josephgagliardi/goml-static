"use strict";

/*	--------------------------------------------------
:: Sticky sidebar options
-------------------------------------------------- */

var sidebar = new StickySidebar('#menu-left', {
  containerSelector: '.sticky__wrapper',
  innerWrapperSelector: '.list-link',
  resizeSensor: true,
  topSpacing: 70,
  bottomSpacing: 20,
  minWidth: 991
});

/*	--------------------------------------------------
:: Enables Scroll to action to anchor tags
-------------------------------------------------- */

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
