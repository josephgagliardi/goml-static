$(document).ready(function(){

  $('.carousel-slide').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: '<a class="oval oval-left" href="#" role="button"><i class="fas fa-angle-left"></i></a>',
    nextArrow: '<a class="oval oval-right" href="#" role="button"><i class="fas fa-angle-right"></i></a>',
    arrows: true,
    responsive:[
    {
      breakpoint: 1200,
      settings: {
        arrows: false,
        dots: true
      }
    }
    ]
  });


  // card slide top
  $('.special').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    dots: true,
    nextArrow: $('.list-course-icon-arrow-special'),
    prevArrow: false,
    responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
      }
    },
    {
      breakpoint: 993,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    }
    ]
  });

  // card slide bot
  $('.feature').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: '<a class="oval oval-left" href="#" role="button"><i class="fas fa-angle-left"></i></a>',
    nextArrow: '<a class="oval oval-right" href="#" role="button"><i class="fas fa-angle-right"></i></a>',
    arrows: true,
    adaptiveHeight: true,
    responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: true,
        arrows: false
      }
    },
    {
      breakpoint: 993,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: true,
        arrows: false
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false
      }
    }
    ]
  });
    
      // Related programs
  $('.related').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: '<a class="oval oval-left" href="#" role="button"><i class="fas fa-angle-left"></i></a>',
    nextArrow: '<a class="oval oval-right" href="#" role="button"><i class="fas fa-angle-right"></i></a>',
    arrows: true,
    adaptiveHeight: true,
    responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: true,
        arrows: false
      }
    },
    {
      breakpoint: 993,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: true,
        arrows: false
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false
      }
    }
    ]
  });
    
      $('.blog').slick({
    // centerMode: true,
    // centerPadding: '0px',
    slidesToShow: 2,
    slidesToScroll: 1,
    // autoplay: true,
    autoplaySpeed: 2000,
    dots: true,

    // variableWidth: true,
    nextArrow: $('.list-course-icon-arrow-recent-blog'),
    speed: 300,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          arrows: false,
          centerMode: true,
          dots: false,
          variableWidth: false,
          centerPadding: '0px',
          slidesToShow: 2,
          slidesToScroll: 1,

        }
      },
      {
        breakpoint: 993,
        settings: {
          arrows: false,
          centerMode: true,
          dots: false,
          variableWidth: false,
          centerPadding: '0px',
          slidesToShow: 1,
          slidesToScroll: 1,

        }
      }
    ]
  });


});
