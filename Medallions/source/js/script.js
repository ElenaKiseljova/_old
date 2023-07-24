if (screen.width < 768) {
  $(".svg-bg").remove();
}

$(document).ready(function () {
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

  // GALLERY

  $(".gallery__item").click(function(evt) {
    $(this).addClass("center");

    if ($(this).hasClass("tl")) {
      $(".gallery__item.center").not($(this)).addClass("tl");
    } else if ($(this).hasClass("tr")) {
      $(".gallery__item.center").not($(this)).addClass("tr");
    } else if ($(this).hasClass("br")) {
      $(".gallery__item.center").not($(this)).addClass("br");
    } else if ($(this).hasClass("bl")) {
      $(".gallery__item.center").not($(this)).addClass("bl");
    }

    $(".gallery__item.center").not($(this)).removeClass("center");

    if ($(this).hasClass("tl")) {
      $(this).removeClass("tl");
    } else if ($(this).hasClass("tr")) {
      $(this).removeClass("tr");
    } else if ($(this).hasClass("br")) {
      $(this).removeClass("br");
    } else if ($(this).hasClass("bl")) {
      $(this).removeClass("bl");
    }
  });

  // CATALOG

  $(".catalog__color-item").click(function () {
    $("input[name='s3']").val($(this).data("color"));

    $(".catalog__picture").css("opacity", "0");

    if ($(this).index() == 0) {
      $(".catalog__picture").eq(0).css("opacity", "1");
    } else if ($(this).index() == 1) {
      $(".catalog__picture").eq(1).css("opacity", "1");
    } else if ($(this).index() == 2) {
      $(".catalog__picture").eq(2).css("opacity", "1");
    }
  });

  // FAQ

  $(".faq__close").click(function () {
    var text = $(this).parent().siblings(".faq__text-wrapper");

    if ($(this).hasClass("active")) {
      text.slideUp("slow");
      $(this).css("background-color", "#96CDC8");
      $(this).children("em").css({
        transition: 'transform 0.5s',
        transform: 'rotate(0deg)'
      });

      $(this).removeClass("active");
    } else {
      text.slideDown("slow");
      $(this).css("background-color", "#FFE1ED");
      $(this).children("em").css({
        transition: 'transform 0.5s',
        transform: 'rotate(45deg)'
      });

      $(this).addClass("active");
    }

    if ($(".faq__close").hasClass("active")) {
      $(".faq__text-wrapper").not(text).slideUp("slow");
      $(".faq__close").not(this).css("background-color", "#96CDC8");
      $(".faq__close").not(this).children("em").css({
        transition: 'transform 0.5s',
        transform: 'rotate(0deg)'
      });

      $(".faq__close").not(this).removeClass("active");
    }
  });

  // left/right animation

  if (screen.width < 1250) {
    $(".promo__svg-bg--3").remove();
  }

  if (screen.width > 767) {
    $("section").eq(0).find(".l-move").css("animation-name", "show_left");
    $("section").eq(0).find(".r-move").css("animation-name", "show_right");

    $("section").eq(0).find(".dash").css("animation-name", "dash");
  }

  $(window).scroll(function (evt) {
    evt.preventDefault();

    if ($(".navigation__link").hasClass("active")) {
      $(".navigation__link").removeClass("active");
    }

    if (pageYOffset > $(".page-header").offset().top - 250 && pageYOffset < $("section").eq(1).offset().top - 250) {
      if (screen.width > 767) {
        $("section").eq(0).find(".l-move").css("animation-name", "show_left");
        $("section").eq(0).find(".r-move").css("animation-name", "show_right");

        $("section").eq(0).find(".dash").css("animation-name", "dash");
      }

      $(".navigation__link").eq(0).addClass("active");
    } else if (pageYOffset > $("section").eq(1).offset().top - 250 && pageYOffset < $("section").eq(2).offset().top - 250) {
      if (screen.width > 767) {
        $("section").eq(1).find(".l-move").css("animation-name", "show_left");
        $("section").eq(1).find(".r-move").css("animation-name", "show_right");
        $("section").eq(1).find(".dash").css("animation-name", "dash");

        $("section").eq(0).find(".l-move").css("animation-name", "none");
        $("section").eq(0).find(".r-move").css("animation-name", "none");
        $("section").eq(0).find(".dash").css("animation-name", "none");
      }

      $(".navigation__link").eq(1).addClass("active");
    } else if (pageYOffset > $("section").eq(2).offset().top - 250 && pageYOffset < $("section").eq(3).offset().top - 250) {
      if (screen.width > 767) {
        $("section").eq(1).find(".l-move").css("animation-name", "none");
        $("section").eq(1).find(".r-move").css("animation-name", "none");
        $("section").eq(1).find(".dash").css("animation-name", "none");
      }

      $(".navigation__link").eq(2).addClass("active");
    } else if (pageYOffset > $("section").eq(3).offset().top - 250 && pageYOffset < $("section").eq(4).offset().top - 250) {
      if (screen.width > 767) {
        $("section").eq(3).find(".l-move").css("animation-name", "show_left");
        $("section").eq(3).find(".r-move").css("animation-name", "show_right");
        $("section").eq(3).find(".dash").css("animation-name", "dash");
      }
    } else if (pageYOffset > $("section").eq(4).offset().top - 250 && pageYOffset < $("section").eq(5).offset().top - 250) {
      if (screen.width > 767) {
        $("section").eq(3).find(".l-move").css("animation-name", "none");
        $("section").eq(3).find(".r-move").css("animation-name", "none");
        $("section").eq(3).find(".dash").css("animation-name", "none");
      }
    } else if (pageYOffset > $("section").eq(5).offset().top - 250 && pageYOffset < $("section").eq(6).offset().top - 250) {
      if (screen.width > 767) {
        $("section").eq(5).find(".l-move").css("animation-name", "show_left");
        $("section").eq(5).find(".r-move").css("animation-name", "show_right");
        $("section").eq(5).find(".dash").css("animation-name", "dash");
      }

      $(".navigation__link").eq(3).addClass("active");
    } else if (pageYOffset > $("section").eq(6).offset().top - 250 && pageYOffset < $("section").eq(7).offset().top - 250) {
      if (screen.width > 767) {
        $("section").eq(6).find(".l-move").css("animation-name", "show_left");
        $("section").eq(6).find(".r-move").css("animation-name", "show_right");
        $("section").eq(6).find(".dash").css("animation-name", "dash");

        $("section").eq(5).find(".l-move").css("animation-name", "none");
        $("section").eq(5).find(".r-move").css("animation-name", "none");
        $("section").eq(5).find(".dash").css("animation-name", "none");
      }

      $(".navigation__link").eq(4).addClass("active");
    } else if (pageYOffset > $("section").eq(7).offset().top - 250 && pageYOffset < $("section").eq(8).offset().top - 250) {
      if (screen.width > 767) {
        $("section").eq(6).find(".l-move").css("animation-name", "none");
        $("section").eq(6).find(".r-move").css("animation-name", "none");
        $("section").eq(6).find(".dash").css("animation-name", "none");
      }

      $(".navigation__link").eq(5).addClass("active");
    } else if (pageYOffset > $("section").eq(8).offset().top - 250 && pageYOffset < $("section").eq(9).offset().top - 250) {
      if (screen.width > 767) {
        $("section").eq(8).find(".l-move").css("animation-name", "show_left");
        $("section").eq(8).find(".r-move").css("animation-name", "show_right");
        $("section").eq(8).find(".dash").css("animation-name", "dash");
      }

      $(".navigation__link").eq(6).addClass("active");
    } else if (pageYOffset > $("section").eq(9).offset().top - 250 && pageYOffset < ($("section").eq(9).offset().top + 300)) {
      if (screen.width > 767) {
        $("section").eq(9).find(".l-move").css("animation-name", "show_left");
        $("section").eq(9).find(".r-move").css("animation-name", "show_right");
        $("section").eq(9).find(".dash").css("animation-name", "dash");

        $("section").eq(8).find(".l-move").css("animation-name", "none");
        $("section").eq(8).find(".r-move").css("animation-name", "none");
        $("section").eq(8).find(".dash").css("animation-name", "none");
      }
    } else if (pageYOffset > ($("section").eq(9).offset().top + 300)) {
      if (screen.width > 767) {
        $("section").eq(9).find(".l-move").css("animation-name", "none");
        $("section").eq(9).find(".r-move").css("animation-name", "none");
        $("section").eq(9).find(".dash").css("animation-name", "none");
      }
    }
  });

  $(".navigation__link, a[class*='button-order']").click(function () {
    $(".navigation__link").not(this).removeClass("active");

    anchor($(this));

    $(this).addClass("active");
  });


  function anchor (element) {
    var id = element.attr("href");
    var top = $(id).offset().top;

    if (screen.width < 768) {
      top -=70;
    } else if (screen.width > 767) {
      top -=78;
    }

    $("body, html").animate({scrollTop: top}, 900);
  }

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

  // reviews



  if (screen.width < 1250) {
    var leftt = 320;

    if (screen.width >= 375) {
      leftt = 140;
    }

    if (screen.width < 375) {
      leftt = 130;
    }

    $(".arrows__item--prev").click(function() {
      $(".arrows__item").removeClass("active");

      $(this).addClass("active");

      $(".reviews__list-wrapper").animate({left: leftt + "px"}, 1000);
    });

    $(".arrows__item--next").click(function() {
      $(".arrows__item").removeClass("active");

      $(this).addClass("active");

      $(".reviews__list-wrapper").animate({left: "-" + leftt + "px"}, 1000);
    });

    $(".reviews__list-wrapper").swipe( {
          swipe:function(event, direction, distance, duration, fingerCount, fingerData) {

            if (direction == "left") {
              $(".arrows__item").removeClass("active");

              $(".arrows__item--next").addClass("active");

              $(".reviews__list-wrapper").animate({left: "-" + leftt + "px"}, 1000);
            } else if (direction == "right") {
              $(".arrows__item").removeClass("active");

              $(".arrows__item--prev").addClass("active");

              $(".reviews__list-wrapper").animate({left: leftt + "px"}, 1000);
            } else if (direction == "up") {
              $("body, html").animate({scrollTop: (pageYOffset + distance)}, 300);
            } else if (direction == "down") {
              $("body, html").animate({scrollTop: (pageYOffset - distance)}, 300);
            }
          },
          threshold:0,
          fingers:'all'
        });
  }
});
