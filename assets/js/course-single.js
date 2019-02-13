"use strict";
function checkWindownSize() {
  var window_width = $(window).width();

  if (window_width <= 993) {
    $('#menu-left').unstick();
  }
}
$(document).ready(function(){
  $('#menu-left').sticky({topSpacing:70, bottomSpacing: 1500});

  $('.course-detail__view-more').on('click', function(e) {
    var item = $(this).attr('data-item'),
        detail_item = $('#course-detail-' + item),
        paragraph_item = $('#paragraph-' + item);

    e.preventDefault();

    detail_item.removeClass('course-detail--hide');
    paragraph_item.removeClass('paragrap-content--hide');
    $(this).addClass('hiden');

  })

  $('#cs-button-view').on('click', function() {
    $('.list-syllabus').toggleClass('list-syllabus--show');
    $(this).text(function(i, text){
      return text === "view less" ? "view more" : "view less";
    })
  });

  $(window).on('resize load', function() {
    checkWindownSize();
  });
});

(function($) {
  $("a[href*=\\#]:not([href=\\#])").click(function() 
  {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) 
    {
      
      var target = $(this.hash),
      headerHeight = $(".droopmenu-navbar").height() + 30; // Get fixed header height
            
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              
      if (target.length) 
      {
        $('html,body').animate({
          scrollTop: target.offset().top - headerHeight
        }, 500);
        return false;
      }
    }
  });
})(jQuery);
