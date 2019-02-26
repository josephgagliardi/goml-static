"use strict";
$(document).ready(function(){
  var window_width = $(window).width(),
      $textSelect  = $('#select-text'),
      $listcategories = $('.list-categories__list'),
      $linkCatagoties = $listcategories.find('a');

  $listcategories.on('click', 'a', function() {
    var text = $(this).text();
    $linkCatagoties.removeClass('active');
    $(this).addClass('active');
    $textSelect.html(text);
    if (window_width <= 768) {
      $('#btn-list-categories').trigger('click');
    }
  })
})
