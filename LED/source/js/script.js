$(document).ready(function () {
  // navigation

  $(window).scroll(function (evt) {
    evt.preventDefault();

    if ($(".navigation__link").hasClass("active")) {
      $(".navigation__link").removeClass("active");
    }

    if(pageYOffset > top_element($("#s1")) && pageYOffset < top_element($("#s2"))) {
      $(".navigation__link--1").addClass("active");
    } else if(pageYOffset > top_element($("#s2")) && pageYOffset < top_element($("#s3"))) {
      $(".navigation__link--2").addClass("active");
    } else if(pageYOffset > top_element($("#s3")) && pageYOffset < top_element($("#s4"))) {
      $(".navigation__link--3").addClass("active");
    } else if(pageYOffset > top_element($("#s4")) && pageYOffset < top_element($("#s5"))) {
      $(".navigation__link--4").addClass("active");
    } else if(pageYOffset > top_element($("#s5")) && pageYOffset < top_element($("#s6"))) {
      $(".navigation__link--5").addClass("active");
    } else if(pageYOffset > top_element($("#s6")) && pageYOffset < top_element($("#s8"))) {
      $(".navigation__link--6").addClass("active");
    }
  });

  function top_element(element) {
    var top = element.offset().top - 100;

    return top;
  }

  $(".navigation__link, .button-order--1").click(function () {
    $(".navigation__link").not(this).removeClass("active");

    $(this).addClass("active");

    anchor($(this));
  });


  function anchor (element) {
    var id = element.attr("href");
    var top = $(id).offset().top;

    if (screen.width < 768) {
      top -=50;
    } else if (screen.width > 767) {
      top -=78;
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

      // GALLERY

      if (screen.width < 767) {
        $(".gallery__list").slick({
          infinite: true,
      		slidesToShow: 1,
          slidesToScroll: 1,
      		autoplay: true,
      		autoplaySpeed: 5000,
          swipe: true,
          dots: false,
          arrows: true
        });

        // pause at swipe

        $(".gallery__list").on("swipe", function(event, slick){
          $(".gallery__list").slick("slickPause");
        });
      }

      // FAQ

      $(".faq__close").click(function () {
        var text = $(this).parent().siblings(".faq__text-wrapper");

        if ($(this).hasClass("active")) {
          text.slideUp("slow");
          $(this).css({
            transition: 'transform 0.5s',
            transform: 'rotate(0deg)'
          });

          $(this).removeClass("active");
        } else {
          text.slideDown("slow");
          $(this).css({
            transition: 'transform 0.5s',
            transform: 'rotate(45deg)'
          });

          $(this).addClass("active");
        }

        if ($(".faq__close").hasClass("active")) {
          $(".faq__text-wrapper").not(text).slideUp("slow");
          $(".faq__close").not(this).css({
            transition: 'transform 0.5s',
            transform: 'rotate(0deg)'
          });

          $(".faq__close").not(this).removeClass("active");
        }
      });


      // COMMENTS

      if (screen.width < 992) {
        $(".comments__list").slick({
          responsive: [
            {
              breakpoint: 501,
      				settings: {
                infinite: true,
            		slidesToShow: 1,
                slidesToScroll: 1,
            		autoplay: true,
            		autoplaySpeed: 5000,
                swipe: true,
                dots: false,
                arrows: true
      				}
            },
      			{
      				breakpoint: 992,
      				settings: {
                infinite: true,
            		slidesToShow: 2,
                slidesToScroll: 1,
            		autoplay: true,
            		autoplaySpeed: 5000,
                swipe: true,
                dots: false,
                arrows: true
      				}
      			}
      		]
        });

        // pause at swipe

        $(".comments__list").on("swipe", function(event, slick){
          $(".comments__list").slick("slickPause");
        });
      }

      var comments_array = [$(".comments__text--1").height(), $(".comments__text--2").height(), $(".comments__text--3").height(), $(".comments__text--4").height()];

      $(".comments__text").height(67);

      $(".comments__close").click(function () {
        var height_text;

        if ($(this).hasClass("comments__close--1")) {
          height_text = comments_array[0];
        } else if ($(this).hasClass("comments__close--2")) {
          height_text = comments_array[1];
        } else if ($(this).hasClass("comments__close--3")) {
          height_text = comments_array[2];
        } else if ($(this).hasClass("comments__close--4")) {
          height_text = comments_array[3];
        }

        var text = $(this).parent().children(".comments__item-wrapper").children(".comments__text");
        var text_before = $(this).parent().children(".comments__item-wrapper").children(".comments__text").children(".comments__text--before");

        if ($(this).hasClass("active")) {
          text.css({
            height: '67px',
            transition: 'height 0.5s'
          });

          text_before.css({
            transition: 'opacity 0.3s',
            opacity: '1'
          });

          $(this).css({
            transition: 'transform 0.5s',
            transform: 'rotate(0deg)'
          });

          $(this).removeClass("active");
        } else {
          text.css({
            height: height_text + 'px',
            transition: 'height 0.5s'
          });

          text_before.css({
            transition: 'opacity 0.3s',
            opacity: '0'
          });

          $(this).css({
            transition: 'transform 0.5s',
            transform: 'rotate(45deg)'
          });

          $(this).addClass("active");
        }


        if ($(".comments__close").hasClass("active")) {
          $(".comments__text").not(text).css({
            height: '67px',
            transition: 'height 0.5s'
          });

          $(".comments__text--before").not(text_before).css({
            transition: 'opacity 0.3s',
            opacity: '1'
          });

          $(".comments__close").not(this).css({
            transition: 'transform 0.5s',
            transform: 'rotate(0deg)'
          });

          $(".comments__close").not(this).removeClass("active");
        }
      });
});
