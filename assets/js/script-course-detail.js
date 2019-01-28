"use strict";
$(document).ready(function(){

	$('.carousel-slide').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: '<a class="arrow arrow--left" href="#" role="button"><span class="icon-custom icon-slide flaticon-left-arrow"></span></a>',
    nextArrow: '<a class="arrow arrow--right" href="#" role="button"><span class="icon-custom icon-slide flaticon-right-arrow"></span></a>',
    responsive:[
    {
      breakpoint: 769,
      settings: {
        dots: true,
        arrows: false,
      }
    }
    ]
  });
