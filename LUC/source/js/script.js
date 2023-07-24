// default product description //

$(".products__prod-name").html($(".products__item.active").find("h3").text());
$(".products__prod-text").html($(".products__item.active").data("text"));
$(".products__currency").html($(".products__item.active").data("currency"));
$(".products__count").html($(".products__item.active").data("count"));
$(".products__geo").addClass($(".products__item.active").data("geo"));

// ----------------------------------------- //

// mask input //

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

$(document).ready(function () {
  $(".form__country").click(function () {
      if (!$(this).hasClass("active")) {
          $(this).addClass("active");

          $(".form__country__list").fadeIn("slow");
      } else {
          $(this).removeClass("active");

          $(".form__country__list").fadeOut("slow");
      }

  });

  $(".form__country__item").click(function () {
      if ($(this).parents().siblings(".form__country").hasClass("ua")) {
          $(this).parents().siblings(".form__country").removeClass("ua");
      } else if ($(this).parents().siblings(".form__country").hasClass("ru")) {
          $(this).parents().siblings(".form__country").removeClass("ru");
      } else if ($(this).parents().siblings(".form__country").hasClass("by")) {
          $(this).parents().siblings(".form__country").removeClass("by");
      } else if ($(this).parents().siblings(".form__country").hasClass("kz")) {
          $(this).parents().siblings(".form__country").removeClass("kz");
      }

      var country = $(this).data("country");

      $(this).parents().siblings(".form__country").addClass(country);

      if ($(this).parents().siblings(".form__country").hasClass("ua")) {
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
      } else if ($(this).parents().siblings(".form__country").hasClass("ru")) {
          Inputmask.extendDefinitions({
              '~': {
                  validator: "[123456789]"
              },
              'k': {
                  validator: "[1234569]"
              }
          });

          $("input[name='phone']").inputmask({
              mask: "+7 (k~9) 999-99-99",
              greedy: false,
              clearIncomplete: true,
              placeholder: "_",
              rightAlign: false,
              showMaskOnHover: false,
              showMaskOnFocus: true
          });
      } else if ($(this).parents().siblings(".form__country").hasClass("by")) {
          Inputmask.extendDefinitions({
              '~': {
                  validator: "[3459]"
              },
              'k': {
                  validator: "[234]"
              }
          });

          $("input[name='phone']").inputmask({
              mask: "+375 (k~) 999-99-99",
              greedy: false,
              clearIncomplete: true,
              placeholder: "_",
              rightAlign: false,
              showMaskOnHover: false,
              showMaskOnFocus: true
          });
      } else if ($(this).parents().siblings(".form__country").hasClass("kz")) {
          Inputmask.extendDefinitions({

              'k': {
                  validator: "[7]"
              }
          });

          $("input[name='phone']").inputmask({
              mask: "+7 (k99) 999-99-99",
              greedy: false,
              clearIncomplete: true,
              placeholder: "_",
              rightAlign: false,
              showMaskOnHover: false,
              showMaskOnFocus: true
          });
      }

      $(this).parents().siblings(".form__country").removeClass("active");

      $(".form__country__list").fadeOut("slow");
  });

  // navigation
  var timeout = -1,
      social = -1,
      enough = 'no';

  $(window).scroll(function (evt) {
    evt.preventDefault();


    if ($(".navigation__link").hasClass("active")) {
      $(".navigation__link").removeClass("active");
    }

      // ------------------------------------------

      if (screen.width > 767) {
        var timeint;

        if (pageYOffset > 0) {
          timeint = 1000;
        } else {
          timeint = 300;
        }

        $(".page-header").fadeOut("slow");

        if (timeout != -1) clearTimeout(timeout);

        timeout = setInterval(function () {
          $(".page-header").fadeIn("slow");
        }, timeint);
      }

      // promo

      if (top_element($("#promo"))) {
        $(".promo__img-container").addClass("active");
      }

      //tovar-1

      if (top_element($("#tovar-1"))) {
        $(".tovar-1__list").addClass("active");
      }

      //for

      if (top_element($("#for"))) {
        $(".for__list").addClass("active");
      }

      // programm

      if (top_element($("#programm"))) {
        $(".programm__name").addClass("active");
      }

      // section

      if (top_element($("#spiker"))) {
        $(".spiker__img-container").addClass("active");
      }


  });

  // Where am I? (on the page) //

  function top_element(element) {
    var top = element.offset().top - 200;

    if (pageYOffset > top) {
      return true;
    } else {
      return false;
    }
  }

  // Anchot script //

  $("a[href^='#']").click(function () {
    if ($(this).hasClass("navigation__link")) {
      $(".navigation__link").not(this).removeClass("active");

      $(this).addClass("active");
    }

    anchor($(this));
  });


  function anchor (element) {
    var id = element.attr("href");
    var top = $(id).offset().top;

    if (screen.width > 1023) {
      top -=160;
    } else if (screen.width > 1366) {
      top -=100;
    }

    $("body, html").animate({scrollTop: top}, 900);
  }




   //  slider //

   if (screen.width < 767) {
     $(".programm__list, .projects__list").addClass("slider");
   }

      $(".slider").slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 3000,
        swipe: true,
        arrows: false,
        dots: true,

        responsive: [
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });

      // pause at swipe

      $(".slider").on("swipe", function(event, slick){
        $(".slider").slick("slickPause");
      });

      $(".slider").on("hover", function(event, slick){
        $(".slider").slick("slickPause");
      });


      // mobile menu //

      $(".navigation__mobile, .navigation__link").click(function () {
        if ($(".navigation").hasClass("active")) {
          $(".navigation").removeClass("active");
        } else {
          $(".navigation").addClass("active");
        }
      });
});
