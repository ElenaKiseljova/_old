/* remove top widgets from promo */

if (screen.width < 768) {
  if ($(".promo__item").length > 0) {
    $(".promo__item").not(".promo__item--center").remove();
  }

  $(".support__item").text("Поддержать проект");
}

if (screen.width < 1024) {
  var widthVideo = $(".see__video").width();

  $(".see__video").css({"height": widthVideo/1.777777777778});
}


/* preloader */

if ($(".preloader").length > 0) {
  /*setTimeout(function () {
    $("html").css("overflow-y", "auto");
    $(".preloader").fadeOut("slow");
  }, 3000);*/
  $("html").css("overflow-y", "auto");
} else {
  $("html").css("overflow-y", "auto");
}

$(document).ready(function () {


  /* twenty */

  if ($(".twenty").length > 0) {
    var twentySlider = new Swiper ('.twenty__container', {
      // Optional parameters
      loop: true,
      slidesPerView: 1,
      spaceBetween: 0,
      allowTouchMove: false,
      navigation: {
        nextEl: '.twenty__next',
        prevEl: '.twenty__prev',
      },
    });

    $(".twenty").each(function () {
      $(this).twentytwenty();
    });

    $(".twenty__more").click(function () {
      $(this).css("display", "none");
      $(this).siblings("span").css("display", "inline");
    });
  }


  /* faq */

  $(".faq__button").click(function () {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");

      $(this).siblings(".faq__content").children(".faq__text").slideUp("slow");
    } else {
      $(this).addClass("active");

      $(this).siblings(".faq__content").children(".faq__text").slideDown("slow");
    }
  });

  /* widgets */

  $(".close--popup, .popup__overlay").click(function () {
    $(".popup__overlay").fadeOut("fast");
    $(".popup").fadeOut("slow");

    $("html").css({"overflow-y": "auto"});
  });

  $(".widget").click(function () {
    var index = $(this).data("index");

    $('.popup--' + index).fadeIn("slow");

    $(".popup__overlay").fadeIn("fast");
    $("html").css("overflow-y", "hidden");
  });

  if (screen.width < 768) {
    if ($(".widget__wrapper").length > 0) {
      var widgetswiper = new Swiper ('.widget__wrapper', {
        // Optional parameters
        loop: true,
        slidesPerView: 1,
        spaceBetween: 41,

        autoplay: {
          delay: 5000,
        }
      });
    }
  }

  /* menu sub */

  if (screen.width > 1023) {
    $(".navigation__link").mouseover(function () {
      $(".sub").removeClass("active");

      $(this).siblings(".sub").addClass("active");
    });

    $(".sub__item").mouseover(function () {
      $(this).parents(".sub").addClass("active");
    });

    $(".sub").mouseout(function () {
      $(this).removeClass("active");
    });
  } else {
    $(".navigation__link--sub").click(function () {
      if ($(this).hasClass("active")) {
        $(this).removeClass("active");

        if (screen.width > 919) {
          $(this).siblings(".sub").fadeOut("slow");
        } else {
          $(this).siblings(".sub").slideUp("slow");
        }
      } else {
        $(this).addClass("active");

        if (screen.width > 919) {
          $(this).siblings(".sub").fadeIn("slow");
        } else {
          $(this).siblings(".sub").slideDown("slow");
        }
      }
    });
  }


  hideSub(".sub", ".navigation__link--sub");

  /* menu mobile */

  $(".navigation__menu--page-header").click(function () {
    if ($(this).hasClass("active")) {
      $(".navigation__list--page-header").fadeOut("fast");
      $(".search").fadeOut("slow");
      $(".popup__overlay").css("background-color", "background-color: rgba(0, 0, 0, 0.1)");
      $(".popup__overlay").fadeOut("slow");

      $(this).removeClass("active");
    } else {
      $(".navigation__list--page-header").fadeIn("fast");
      $(".search").fadeIn("slow");
      $(".popup__overlay").fadeIn("slow");
      $(".popup__overlay").css("background-color", "rgba(255, 239, 231, 0.8)");


      $(this).addClass("active");
    }
  });

  hideSub(".navigation__list--page-header", ".navigation__menu--page-header");

  /* marquee */

  if ($(".line").length > 0) {
    window.addEventListener('load', function () {
      $(".line").addClass("active");

      marquee("#marquee-1", "20s", "reverse");

      marquee("#marquee-2", "40s", "normal");

      marquee("#marquee-3", "30s", "normal");
    });

    $(".line").hover(function () {

    });
  }


  /****----------------****/

  $(window).scroll(function () {
      if (pageYOffset > 0) {
        $(".promo__created").css({"opacity": "0", "transition": "all 0.5s"});
        $(".page-header").css("background-color", "rgba(255, 239, 231, 1)");
        $(".support").css({"bottom": "140px", "transition": "all 0.5s"});

        if ($("#container").length > 0) {
          var opacityShar = 0.8 - (pageYOffset/$(".see").offset().top)/4;

          $("#container").css({
            "opacity": opacityShar
          });

          var widthVideo = $(".see__video").width();
          var heightVideo = $(".see__video").offset().top + (widthVideo/1.777777777778);

          if (pageYOffset > ($(".see__video").offset().top - 500)) {
            if (screen.width > 1136) {

              if (pageYOffset < heightVideo) {
                var procent;

                procent = heightVideo/pageYOffset;

                if (!$(".see__video").hasClass("zoomed")) {
                  widthVideo = widthVideo*procent;

                  if (widthVideo < screen.width) {
                    widthVideo = widthVideo;
                  } else {
                    widthVideo = screen.width;
                  }
                } else {
                  widthVideo = widthVideo/procent;

                  if (widthVideo > 1136) {
                    widthVideo = widthVideo;
                  } else {
                    widthVideo = 1136;
                  }

                  if (pageYOffset < ($(".see__video").offset().top - 480)) {
                    $(".see__video").removeClass("zoomed");
                  }
                }

                $(".see__video").css({"transition": "all 1.5s linear", "width": widthVideo, "height": widthVideo/1.777777777778});
              } else if (pageYOffset > (heightVideo - 90)) {
                $(".see__video").addClass("zoomed");
              }
            }
          }

          if (pageYOffset > $(".see").offset().top) {
            var top = $(".see").offset().top;

            $("#container").css({
              "position": "absolute",
              "top": top
            });
          } else if (pageYOffset < $(".see").offset().top) {
            if (screen.width > 767) {
              $("#container").css({
                "position": "fixed",
                "top": "50%"
              });
            } else {
              $("#container").css({
                "position": "fixed",
                "top": "80px"
              });
            }
          }
        }

      } else {
        $(".promo__created").css({"opacity": "1", "transition": "all 0.5s"});
        $(".page-header").css("background-color", "rgba(255, 239, 231, 0)");
        $(".support").css({"bottom": "23.43px", "transition": "all 0.5s"});
      }
  });

  /* search */

  $(".tabs__link").click(function () {
    $(".tabs__link").not($(this)).removeClass("active");

    $(this).addClass("active");
  });

  $(".search__button").click(function () {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");

      $(".search__form").fadeOut("slow");
    } else {
      $(this).addClass("active");

      $(".search__form").fadeIn("slow");
    }
  });

  $(".close--search").click(function () {
    $(".search__form").fadeOut("slow");

    $(".search__button").removeClass("active");
  });

  hideSub(".search__form", ".search__button");

  /* breadcrumbs */

  if ($(".breadcrumbs__item").length > 0) {
    $(".breadcrumbs__item").last().find("a").removeAttr("href");
  }

  /* ----------------- */


  $(".see__play--serie").click(function () {
    $(this).removeClass("active");

    $(".see__preview--serie").removeClass("active");

    var id = $(this).data("vk");

    $(".see__iframe").attr("src", id + '&autoplay=1& muted = 0');

    $(".see__iframe").addClass("active");
  });

  $(".see__tabs-item").click(function () {
    $(".see__play").attr("href", $(this).data("link"));

    $(".see__link").attr("href", $(this).data("link"));

    $(".see__preview").attr("src", "video/preview-" + $(this).index() + ".mp4");

    $(".see__tabs-item").not($(this)).removeClass("active");
    $(this).addClass("active");
  });

  /* swiper initial */

  var mySwiper = new Swiper ('.posts__slider', {
    // Optional parameters
    loop: true,

    slidesPerView: 1,
    spaceBetween: 18,

    autoplay: {
      delay: 5000,
    },

    // Navigation arrows
    navigation: {
      nextEl: '.slider-tabs__next',
      prevEl: '.slider-tabs__prev',
    },

    breakpoints: {
      // when window width is >= 320px
      768: {
        slidesPerView: 2,
        spaceBetween: 50
      },

      1500: {
        slidesPerView: 2,
        spaceBetween: 128
      }
    }
  });

  function hideSub (element, button) {
    $("main, footer").click(function () {
      if ($(button).hasClass("active")) {
        $(button).removeClass("active");

        $(element).fadeOut("slow");
      }
    });
  }

  function marquee (container, speed, direction) {
    var marquee = $(container);
        var width = 0;

        marquee.children().each(function () {
          width = width + $(this).width();
        });

        if (width < screen.width) {
          width = '100vw';
        }

        marquee.wrapInner("<div class='small'>");
        marquee.children(".small").css({"padding": "0", "margin": "0", "overflow": "hidden", "width": width, "display": "flex", "justify-content":"flex-start", "align-items":"center", "position": "relative", "top": "0", "left": "0"});
        marquee.children(".small").wrapInner("<div class='small-sub'>");
        marquee.find(".small-sub").css({"padding": "0", "margin": "0", "width": "50%", "display": "flex", "flex-shrink": "0", "justify-content":"flex-start", "align-items":"center"});
        marquee.children(".small").append(marquee.find(".small-sub").clone());
        marquee.children(".small").wrapInner("<div class='big'>");
        marquee.find(".big").css({"animation-direction": direction, "animation-duration": speed, "padding": "0", "margin": "0", "width": "200%", "flex-shrink": "0", "display": "flex", "justify-content":"flex-start", "align-items":"center"});

        marquee.find(".big").addClass("animate");
  }
});
/*
$(window).on('load', function () {


  new WOW().init();
});*/
