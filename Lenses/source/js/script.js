$(document).ready(function () {
  // navigation

  $(window).scroll(function (evt) {
    evt.preventDefault();

    // Indicator of load page

    myFunction();

    //-----------------------



    if ($(".navigation__link").hasClass("active")) {
      $(".navigation__link").removeClass("active");
    }
    if (screen.width > 767) {

      // menu height  & background

      if (pageYOffset > 0) {
        $(".page-navigation").css({
          background: "rgba(255, 255, 255, 1)",
          padding: "10px 0"
        });
      } else {
        $(".page-navigation").css({
          background: "rgba(255, 255, 255, 0)",
          padding: "38px 0 32px 0"
        });
      }

      // ------------------------------------------


      if(pageYOffset > top_element($("#s1")) && pageYOffset < top_element($("#s2"))) {
        $(".promo__left").addClass("show_left");
        underline($(".navigation__link--1"));
      } else if(pageYOffset > top_element($("#s2")) && pageYOffset < top_element($("#s3"))) {
        $(".promo__left").removeClass("show_left");
        underline($(".navigation__link--2"));
      } else if(pageYOffset > top_element($("#s3")) && pageYOffset < top_element($("#s4"))) {
        $(".banner__left").addClass("show_left");
      } else if(pageYOffset > top_element($("#s4")) && pageYOffset < top_element($("#s5"))) {
        $(".order__right--1").addClass("show_right");
        $(".banner__left").removeClass("show_left");
      } else if(pageYOffset > top_element($("#s5")) && pageYOffset < top_element($("#s6"))) {
        $(".eyes__item").addClass("blur_eyes");
        $(".order__right").removeClass("show_right");
      } else if(pageYOffset > top_element($("#s6")) && pageYOffset < top_element($("#s7"))) {
        underline($(".navigation__link--3"));
        if (screen.width > 991) {
          $(".advices__list--1").addClass("show_left");
        } else {
          $(".advices__list--1").addClass("show_right");
        }
        $(".advices__list--2").addClass("show_right");
        $(".eyes__item").removeClass("blur_eyes");
      } else if(pageYOffset > top_element($("#s7")) && pageYOffset < top_element($("#s8"))) {
        underline($(".navigation__link--4"));
        $(".characteristic__right").addClass("show_right");

        if (screen.width > 991) {
          $(".advices__list--1").removeClass("show_left");
        } else {
          $(".advices__list--1").removeClass("show_right");
        }
        $(".advices__list--2").removeClass("show_right");
      } else if(pageYOffset > top_element($("#s8")) && pageYOffset < top_element($("#s9"))) {
         underline($(".navigation__link--5"));

         if (screen.width > 991) {
           $(".reviews__list").addClass("show_top");
         }
         $(".characteristic__right").removeClass("show_right");
      } else if(pageYOffset > top_element($("#s9")) && pageYOffset < top_element($("#s10"))) {
        underline($(".navigation__link--6"));

        $(".reviews__list").removeClass("show_top");
      } else if(pageYOffset > top_element($("#s10")) && pageYOffset < top_element($(".page-footer"))) {
        $(".order__right--2").addClass("show_right");
      } else if(pageYOffset > top_element($(".page-footer"))) {
        $(".order__right--2").removeClass("show_right");
      }
    }

  });

  /* Scroll Indicator */

  function myFunction() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("top-line").style.width = scrolled + "%";
  }

  underline($(".navigation__link--1"));

  $(".navigation__link").click(function() {
    underline($(this));
  });

  function underline(element) {
    var width_UL = element.width();

    $(".navigation__underline").width(width_UL);

    var number = element.parent().index();
    var left_space = 0;

    for (var i = 0; i < number; i++) {

      left_space = left_space + element.parent().siblings().eq(i).innerWidth();
    }

    left_space = left_space + (element.innerWidth() - width_UL)/2;

    if (screen.width > 767) {
      $(".navigation__underline").css("left", left_space);
    }
  }


  function top_element(element) {
    var top = element.offset().top - 200;

    return top;
  }

  $(".navigation__link, .navigation__link--order, .gallery__button, .logo").click(function () {
    $(".navigation__link").not(this).removeClass("active");

    $(this).addClass("active");

    anchor($(this));
  });


  function anchor (element) {
    var id = element.attr("href");
    var top = $(id).offset().top;

    if (screen.width < 768) {
      top -=60;
    } else if (screen.width > 767) {
      top -=70;
    }

    $("body, html").animate({scrollTop: top}, 900);
  }


  // mask

  $("input[name='name']").on("keypress", function (e) {
      return (/[A-Za-zА-Яа-яЁё\s]/.test(String.fromCharCode(e.charCode)));
  });

  Inputmask.extendDefinitions({
    '~': {
              validator: "[1245679]"
          }

  });

  $("input[name='phone']").inputmask({
          mask: "+38 (0~9) 999-99-99",
          greedy: false,
          clearIncomplete: true,
          placeholder: "_",
          rightAlign: false,
          showMaskOnHover: false,
          showMaskOnFocus: true
      });
  $("input[name='phone']").on("keydown", function (e) {

          if (e.keyCode == 37 || e.keyCode == 38 || e.keyCode == 39 || e.keyCode == 40) {
              e.preventDefault();
              return false;
          }

      });

      // MENU close/open (mobile)

      if (screen.width < 768) {
        var k = 1;

        $(".button-menu").click(function () {

        if (k == 1) {
          $(this).addClass("active");

          $(".button-menu__line").addClass("active");

          $(".navigation-list-wrapper").fadeIn("slow");

          k = 2;
        } else if (k == 2) {
          $(this).removeClass("active");

          $(".button-menu__line").removeClass("active");

          $(".navigation-list-wrapper").fadeOut("slow");

          k = 1;
        }
      });


        $(".navigation__link").click(function () {
          $(".button-menu").removeClass("active");

          $(".button-menu__line").removeClass("active");

          $(".navigation-list-wrapper").fadeOut("slow");

          k = 1;
        });
      }


      // PLYR

      var player = new Plyr("#plyr", {
        controls: [
          'play-large', // The large play button in the center
          'play', // Play/pause playback
          'progress', // The progress bar and scrubber for playback and buffering
          'current-time', // The current time of playback
          'duration', // The full duration of the media
          'mute', // Toggle mute
          'volume', // Volume control
          'settings', // Settings menu
          'fullscreen' // Toggle fullscreen
        ]
      });

      player.forward(0);

      // POPUP

      $(".promo__video-svg").click(function () {
        $(".popup-video").fadeIn("slow");
        $(".popup-overlay").fadeIn("slow");

        $("html").addClass("overflow-hidden");
      });

      $(".popup-overlay").click(function () {
        $(".popup-video").fadeOut("slow");
        $(".popup-overlay").fadeOut("slow");

        player.pause();

        $("html").removeClass("overflow-hidden");
      });

      $(".popup-close").click(function () {
        $(".popup-video").fadeOut("slow");
        $(".popup-overlay").fadeOut("slow");

        player.pause();

        $("html").removeClass("overflow-hidden");
      });


      // reviews

      if (screen.width < 992) {
        if ($(".reviews__item").hasClass("reviews__item--hidden")) {
          $(".reviews__item").removeClass("reviews__item--hidden");
        }

        $(".reviews__list").eq(1).addClass("reviews__item--hidden");
      }

      $(".reviews__more").click(function() {
        if ($(this).hasClass("active")) {
          $(this).removeClass("active");
          $(".reviews__item--hidden").hide("slow");
          $(this).html("Показать еще");
        } else {
          $(this).addClass("active");
          $(".reviews__item--hidden").show("slow");
          $(this).html("Скрыть");
        }
      });

      // gallery swipe desktop

      if (screen.width > 991) {
      	$(".gallery__list, .gallery__item").swipe( {
              swipe:function(event, direction, distance, duration, fingerCount, fingerData) {

      					if (direction == "left") {
                  var left_element = $(".gallery__wrapper").scrollLeft() + distance;
                  $(".gallery__wrapper").animate({scrollLeft: left_element}, 150);

      					} else if (direction == "right") {
                  var right_element = $(".gallery__wrapper").scrollLeft() - distance;
                  $(".gallery__wrapper").animate({scrollLeft: right_element}, 150);
      					}
              },
              threshold:0,
              fingers:'all'
            });
      }


      // цвет линз

      $('.button-order.data').click(function(){
    		$('.price_field_s3').val('Цвет линз: ' + $(this).data('color'));
    	});
});
