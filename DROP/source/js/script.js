/* default product description */

$(".products__prod-name").html($(".products__item.active").find("h3").text());
$(".products__prod-text").html($(".products__item.active").data("text"));
$(".products__currency").html($(".products__item.active").data("currency"));
$(".products__count").html($(".products__item.active").data("count"));
$(".products__geo").addClass($(".products__item.active").data("geo"));

/* ----------------------------------------- */

$(document).ready(function () {
  // navigation
  var timeout = -1,
      social = -1,
      enough = 'no';

  $(".popup__hide").click(function () {
    enough = 'yes';

    $(".popup").fadeOut("slow");
    $(".overlay").fadeOut("slow");
    $("html").css("overflow", "visible");
  });

  $(window).scroll(function (evt) {
    evt.preventDefault();

    // Indicator of load page

    myFunction();

    //-----------------------



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

      // popup social

      if (social != -1) clearTimeout(social);

      if (enough != 'yes') {
        social = setInterval(function () {
          $(".popup--social").fadeIn("slow");
          $(".overlay").fadeIn("slow");
          $("html").css("overflow", "hidden");
        }, 20000);
      }

      //-------------------------------------

      if (top_element($("#steps"))) {
        // steps of delivery section. Slowly show blocks

        $(".steps__item").each(function () {
          $(this).addClass("active");
        });
      }

      if (top_element($("#digit"))) {
        /* digit section */

        if (!$("#digit").hasClass("active")) {
          var time = 2;

          $(".digit__list").each(function () {
            $(".digit__count").each(function () {
              var i = 1,
                  n = 1,
                  num = $(this).data("digit");

              if (num < 1000) {
                n = 2;
              } else if (num > 1000 && num < 10000) {
                n = 10;
              } else if (num > 10000 && num < 50000) {
                n = 15;
              } else if (num > 50000 && num < 100000) {
                n = 100;
              }

              var step = 1000 * time/num,
                  that = $(this);

              var int = setInterval(function () {
                if (i <= num) {
                  that.html(i);
                } else {
                  clearInterval(int);
                }

                if ((i + n) > num && (i + n - num) < 100) {
                  n = 1;
                }

                i+=n;
              }, step);
            });
          });
        }

        $("#digit").addClass("active");
      }
  });

  /* Scroll Indicator */

  function myFunction() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("top-line").style.width = scrolled + "%";
  }

  /* Where am I? (on the page) */

  function top_element(element) {
    var top = element.offset().top - 200;

    if (pageYOffset > top) {
      return true;
    } else {
      return false;
    }
  }

  /* Anchot script */

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


    /* mask input */

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

   /*  pluses section slider */

      $(".slider").slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 3000,
        swipe: true,
        dots: false,
        arrows: true,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        responsive: [
          {
            breakpoint: 1024,
            settings: {
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


    /* products section slider */

      $("#top").slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 3000,
        swipe: true,
        dots: false,
        arrows: true,
        prevArrow: $('.prev--top'),
        nextArrow: $('.next--top'),
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1
            }
          }
        ]
      });

      // pause at swipe

      $("#top").on("swipe", function(event, slick){
        $("#top").slick("slickPause");
      });

      $("#top, .products__description").on("hover", function(event, slick){
        $("#top").slick("slickPause");
      });



      $(".products__item").hover(function () {
        $(".products__item").not(this).removeClass("active");

        $(this).addClass("active");

        $(".products__prod-name").html($(this).find("h3").text());
        $(".products__prod-text").html($(this).data("text"));
        $(".products__currency").html($(this).data("currency"));
        $(".products__count").html($(this).data("count"));

        if ($(".products__geo").hasClass("ua")) {
          $(".products__geo").removeClass("ua");
        } else if ($(".products__geo").hasClass("ru")) {
          $(".products__geo").removeClass("ru");
        } else if ($(".products__geo").hasClass("by")) {
          $(".products__geo").removeClass("by");
        } else if ($(".products__geo").hasClass("kz")) {
          $(".products__geo").removeClass("kz");
        }

        $(".products__geo").addClass($(this).data("geo"));
      });



      /* motivation section */

      $("#video").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 5000,
        swipe: true,
        dots: false,
        arrows: true,
        prevArrow: $('.prev--motivation'),
        nextArrow: $('.next--motivation'),

        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });

      // pause at swipe

      $("#video").on("swipe", function(event, slick){
        $("#video").slick("slickPause");
      });

      /* reviews section */

      $("#review").slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 7000,
        swipe: true,
        dots: false,
        arrows: true,
        prevArrow: $('.prev--reviews'),
        nextArrow: $('.next--reviews'),
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 1
            }
          }
        ]
      });

      // pause at swipe

      $("#review").on("swipe", function(event, slick){
        $("#review").slick("slickPause");
      });

      if (screen.width > 1023) {
        var maxHight = 0;

        $(".reviews__text").each(function () {
          if ($(this).height() > maxHight) maxHight = $(this).height();
        });

        $(".reviews__text").height(maxHight + 5);
      }

      /* popup windows */

      // POPUP open

      var form;
      var url = window.location.href;
      var ua = url.indexOf('-ua');
      console.log(ua);

      $("button[name='login'], button[name='registration']").click(function () {
        if ($(".popup--user").hasClass("restore")) {
          $(".popup--user").removeClass("restore");
          $(".popup--restore").removeClass("active");
        }

        $(".popup--social").css({
          opacity: 0
        });

        $(".popup__navigation").removeClass("active");

        if ($(this).attr("name") === "registration") {
          $(".popup--user").removeClass("autorisation");

          form = "registration";

          $(".popup__navigation[name='registration']").addClass("active");

          if (ua > -1) {
            $(".popup__submit").html("Зареєструватися");
          } else {
            $(".popup__submit").html("Зарегистрироваться");
          }

        } else {
          $(".popup--user").removeClass("registration");

          form = "autorisation";

          $(".popup__navigation[name='login']").addClass("active");

          if (ua > -1) {
            $(".popup__submit").html("Увійти");
          } else {
            $(".popup__submit").html("Войти");
          }

        }

        $(".popup--user").addClass(form);

        $(".popup--user, .popup--restore").fadeIn("slow");
        $(".overlay").fadeIn("slow");
        $("html").css("overflow", "hidden");
      });

      $(".popup__forgot").click(function () {
        $(".popup--user").addClass("restore");
        $(".popup--restore").addClass("active");
      });

      // POPUP close

      $(document).keyup(function(evt) {
        $(".popup--social").css({
          opacity: 1
        });

         if (evt.keyCode === 27) { // escape key maps to keycode `27`
           $(".popup").fadeOut("slow");
           $(".overlay").fadeOut("slow");
           $("html").css("overflow", "visible");
        }
      });

      $(".popup__close, .overlay").click(function () {
        $(".popup--social").css({
          opacity: 1
        });

      	$(".popup").fadeOut("slow");
      	$(".overlay").fadeOut("slow");
      	$("html").css("overflow", "visible");
      });


      /* mobile menu */

      $(".navigation__mobile, .navigation__link").click(function () {
        if ($(".navigation").hasClass("active")) {
          $(".navigation").removeClass("active");
        } else {
          $(".navigation").addClass("active");
        }
      });


      $("#video").on("afterChange", function(event, slick, currentSlide) {
        if ($("iframe").length > 0) {
          for (var i = 0; i < $("iframe").length; i++) {
            $("iframe")[i].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
          }
        }
      });
});
