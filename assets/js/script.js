"use strict";

// Scroll to top button //
$(window).scroll(function() {
    var height = $(window).scrollTop();
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      $("#on-top").addClass('btn-ontop--show');
  } else {
      $("#on-top").removeClass('btn-ontop--show');
  }
});

$(document).ready(function() {
    $("#on-top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});


