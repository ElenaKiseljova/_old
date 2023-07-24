$(document).ready(function () {

  // BUY button

  $(".button-order").click(function () {
    anchor($(this));
  });

  function anchor (element) {
    var id = element.attr("href");

    var top = $(id).offset().top - 50;

    $("body, html").animate({scrollTop: top}, 900);
  }


  // MENU scrol & SCROLL ARROW UP

  $(window).scroll(function (evt) {
    evt.preventDefault();

    if (pageYOffset < 150) {
      $(".arrow-up").fadeOut("fast");

      clearTimeout($.data(window, 'scrollTimer'));
    } else {
      $(".arrow-up").fadeIn("fast");

      $.data(window, 'scrollTimer', setTimeout(function() {
          $(".arrow-up").fadeOut("fast");
      }, 2000));
    }
  });

  // ARROW to TOP

  $(".arrow-up").click(function () {
    $("body, html").animate({scrollTop: 0}, 900);
  });

  // SLIDER

  $(".slider-1").slick({
		responsive: [
			{
				breakpoint: 2000,
				settings: {
          autoplay: true,
          autoplaySpeed: 5000,
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false
				}
			}
		]
  });



  // slider nav/for

  $(".slider-2").slick({
    responsive: [
      {
         breakpoint: 785,
         settings: {
           autoplay: true,
           autoplaySpeed: 5000,
           infinite: true,
           slidesToShow: 3,
           slidesToScroll: 1,
           asNavFor: '.slider-3',
           dots: false,
           centerMode: true,
           focusOnSelect: true
         }
       },
      {
          breakpoint: 2000,
          settings: {
            autoplay: true,
            autoplaySpeed: 5000,
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '.slider-3',
            dots: false,
            centerMode: true,
            focusOnSelect: true
          }
        }
    ]
  });

  $(".slider-3").slick({
		responsive: [
			{
				breakpoint: 2000,
				settings: {
          autoplay: true,
          autoplaySpeed: 5000,
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          fade: true,
          asNavFor: '.slider-2',
          dots: false
				}
			}
		]
  });


  // pause slider

  $(".slider-1, .slider-2, .slider-3").on("swipe", function() {
    $(".slider-1, .slider-2, .slider-3").slick("slickPause");
  });

  $(".slider-1 .slick-slide, .slider-2 .slick-slide, .slider-3 .slick-slide").on("click", function() {
    $(".slider-1, .slider-2, .slider-3").slick("slickPause");
  });


  $("#form__phone-1, #form__phone-2").focus(function () {

    // PHONE mask

    $(this).mask("+38 (999) 999-99-99");
  });

  // POPUP open

  $(".recipe__item--1").click(function () {
    $(".popup-recipe--1").fadeIn("slow");
    $(".popup-overlay").fadeIn("slow");
    $("html").addClass("overflow-hidden");
  });

  $(".recipe__item--2").click(function () {
    $(".popup-recipe--2").fadeIn("slow");
    $(".popup-overlay").fadeIn("slow");
    $("html").addClass("overflow-hidden");
  });

  $(".recipe__item--3").click(function () {
    $(".popup-recipe--3").fadeIn("slow");
    $(".popup-overlay").fadeIn("slow");
    $("html").addClass("overflow-hidden");
  });

  // POPUP close

  $(document).keyup(function(evt) {
     if (evt.keyCode === 27) { // escape key maps to keycode `27`
       $(".popup").fadeOut("slow");
       $(".popup-overlay").fadeOut("slow");
       $("html").removeClass("overflow-hidden");
    }
  });

  $(".popup-close, .popup-overlay").click(function () {
  	$(".popup").fadeOut("slow");
  	$(".popup-overlay").fadeOut("slow");
  	$("html").removeClass("overflow-hidden");
  });
});
