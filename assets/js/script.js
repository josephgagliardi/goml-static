"use strict";
AOS.init({
  duration: 1000,
  once: true
})

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
    dmAnimationEffect: 'dmslidedown',
    dmCentered: false
  });
});

/*	--------------------------------------------------
   :: Nav Modal search 
-------------------------------------------------- */
jQuery(function ($) {
  var searchBody = $('body'),
    searchClose = $('.dm-search-close'),
    searchToggle = $('.droopmenu-open-search button');

  searchToggle.on('click', function (e) {
    e.preventDefault();
    searchBody.toggleClass("dm-search-open dm-body-fix");
  });

  searchClose.on('click', function (e) {
    e.preventDefault();
    searchBody.removeClass("dm-search-open");
    setTimeout(function () {
      searchBody.removeClass("dm-body-fix");
    }, 600);
  });
});


/*	--------------------------------------------------
:: Equal height
-------------------------------------------------- */
$('.col-equal').matchHeight({
  property: 'height'
});

/*	--------------------------------------------------
:: View more Component
-------------------------------------------------- */
$('#button-view').on('click', function () {
  $('.view-more').toggleClass('view-more--show');
  $(this).text(function (i, text) {
    return text === "View Less" ? "View More" : "View Less";
  })
});
