$(function($) {

  "use strict";

  /*=========================== scroll background ===========================*/

  $(window).scroll(function(){

    var wScroll = $(this).scrollTop();

    // Activate menu
    if (wScroll >0) {
      $('.navbar').addClass('active_sc');
    }
    else {
      $('.navbar').removeClass('active_sc');
    };
        
  });

  /*=========================== close scroll background ===========================*/

  // $(".blog-carousel-mn").slick({
  //   infinite: true,
  //   dots: false,
  //   fade: true,
  //   arrows: false,
  //   slidesToShow: 3,
  //   slidesToScroll: 3,
  //   arrows: true,
  //   prevArrow:
  //     '<button class="prev-arrow"><i class="fas fa-arrow-left"></i></button>',
  //   nextArrow:
  //     '<button class="next-arrow"><i class="fas fa-arrow-right"></i></button>',



  // });


  $('.blog-carousel-mn').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    autoplaySpeed: 2000,
       arrows: true,
    // prevArrow:
    //   '<button class="prev-arrow"><i class="fas fa-arrow-left"></i></button>',
    // nextArrow:
    //   '<button class="next-arrow"><i class="fas fa-arrow-right"></i></button>',
    prevArrow: $('.prev'),
      nextArrow: $('.next'),
    responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
        }, {
          breakpoint: 640,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          }
        }, {
          breakpoint: 420,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
      }]
  });


});

