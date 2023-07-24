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
    } else if(pageYOffset > top_element($("#s6")) && pageYOffset < top_element($(".page-footer"))) {
      $(".navigation__link--6").addClass("active");
    }

    if (pageYOffset > top_element($(".advantages__item--1")) && pageYOffset < top_element($(".advantages__item--2"))) {
      left_l($(".advantages__item--1"));
    } else if(pageYOffset > top_element($(".advantages__item--2")) && pageYOffset < top_element($(".advantages__item--3"))) {
      right_l($(".advantages__item--2"));
    } else if (pageYOffset > top_element($(".advantages__item--3")) && pageYOffset < top_element($(".advantages__item--4"))) {
      left_l($(".advantages__item--3"));
    } else if(pageYOffset > top_element($(".advantages__item--4")) && pageYOffset < top_element($(".advantages__item--5"))) {
      right_l($(".advantages__item--4"));
    } else if (pageYOffset > top_element($(".advantages__item--5")) && pageYOffset < top_element($(".advantages__item--6"))) {
      left_l($(".advantages__item--5"));
    } else if(pageYOffset > top_element($(".advantages__item--6")) && pageYOffset < top_element($(".advantages__item--7"))) {
      right_l($(".advantages__item--6"));
    } else if (pageYOffset > top_element($(".advantages__item--7")) && pageYOffset < top_element($("#s2"))) {
      left_l($(".advantages__item--7"));
    }
  });

  function left_l (element) {
    element.children(".img-wrapper").children(".image-item").css("transform-origin", "left");

    setTimeout(function () {
      element.children(".img-wrapper").children(".image-item").css({
        transform: 'rotate3d(0, 1, 0, 0deg)'
      });

      element.children(".inline-svg-icon--l").css("stroke-dashoffset", "0");
    }, 300);

    if (screen.width > 991) {
      element.children(".advantages__bg").css({
        left: '5%'
      });
    } else {
      element.children(".advantages__bg").css({
        left: '0%'
      });
    }

    element.children(".advantages__text").css({
      opacity: '1'
    });
  }

  function right_l (element) {
    element.children(".img-wrapper").children(".image-item").css("transform-origin", "right");

    setTimeout(function () {
      element.children(".img-wrapper").children(".image-item").css({
        transform: 'rotate3d(0, 1, 0, 0deg)'
      });

      element.children(".inline-svg-icon--l").css("stroke-dashoffset", "0");
    }, 300);

    if (screen.width > 991) {
      element.children(".advantages__bg").css({
        right: '5%'
      });
    } else {
      element.children(".advantages__bg").css({
        right: '0%'
      });
    }

    element.children(".advantages__text").css({
      opacity: '1'
    });
  }

  function top_element(element) {
    var top = element.offset().top - 200;

    return top;
  }

  $(".navigation__link, .button-buy--promo, .button-buy--complectation").click(function () {
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
      top -=50;
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

      $(".svg-wrapper--play").click(function () {
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


      // IMG-mask fancybox

      $('[data-fancybox]').fancybox({
	       mobile : {
             clickSlide : "close",
             toolbar: false,
             arrows: false
	        },

          loop: true
      });

      // reviews

      $(".slider").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 7000,
        swipe: true,
        dots: false,
        arrows: true
      });

      // pause at swipe

      $(".slider").on("swipe", function(event, slick){
        $(".slider").slick("slickPause");
      });

      // Таймер

      function get_timer() {

        //Дата для обратного отсчета

        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        var date_new  = yyyy + '-' + mm + '-' + dd + ' ' + '23' + ':' + '59';

       ////////////////////////////////////
       ////////////////////////////////////

       //Объект даты для обратного отсчета
       var date_t = new Date(date_new);
       //Объект текущей даты
       var date = new Date();
       //Вычисляем сколько миллисекунд пройдет
       //от текущей даты до даты отсчета времени
       var timer = date_t - date;

       //Проверяем не нужно ли закончить отсчет
        //если дата отсчета еще не истекла, то количество
        //миллисекунд в переменной date_t будет больше чем в переменной date
        if(date_t > date) {

        //Вычисляем сколько осталось дней до даты отсчета.
        //Для этого количество миллисекунд до даты отсчета делим
        //на количество миллисекунд в одном дне
        var day = parseInt(timer/(60*60*1000*24));
        //если полученное число меньше 10 прибавляем 0
        if(day < 10) {
        day = '0' + day;
        }
        //Приводим результат к строке
        day = day.toString();

        //Вычисляем сколько осталось часов до даты отсчета.
        //Для этого переменную timer делим на количество
        //миллисекунд в одном часе и отбрасываем дни
        var hour = parseInt(timer/(60*60*1000))%24;
        //если полученное число меньше 10 прибавляем 0
        if(hour < 10) {
        hour = '0' + hour;
        }
        //Приводим результат к строке
        hour = hour.toString();

        //Вычисляем сколько осталось минут до даты отсчета.
        //Для этого переменную timer делим на количество
        //миллисекунд в одной минуте и отбрасываем часы
        var min = parseInt(timer/(1000*60))%60;
        //если полученное число меньше 10 прибавляем 0
        if(min < 10) {
        min = '0' + min;
        }
        //Приводим результат к строке
        min = min.toString();

        //Вычисляем сколько осталось секунд до даты отсчета.
        //Для этого переменную timer делим на количество
        //миллисекунд в одной минуте и отбрасываем минуты
        var sec = parseInt(timer/1000)%60;
        //если полученное число меньше 10 прибавляем 0
        if(sec < 10) {
        sec = '0' + sec;
        }
        //Приводим результат к строке
        sec = sec.toString();
        }
        else {
        $(".clock").html("<span id='stop'>Отсчет закончен!!!</span>");
        }

        //alert(day + " : " + hour + " : " + min + " : " + sec);

        //Выводим дни
         //Проверяем какие предыдущие цифры времени должны вывестись на экран
         //Для десятков дней
         if(day[1] == 9 &&
         hour[0] == 2 &&
         hour[1] == 3 &&
         min[0] == 5 &&
         min[1] == 9 &&
         sec[0] == 5 &&
         sec[1] == 9) {
         animation($(".day0"),day[0]);
         }
         else {
         $(".day0").html(day[0]);
         }
         //Для единиц  дней
         if(hour[0] == 2 &&
         hour[1] == 3 &&
         min[0] == 5 &&
         min[1] == 9 &&
         sec[0] == 5 &&
         sec[1] == 9) {
         animation($(".day1"),day[1]);
         }
         else {
         $(".day1").html(day[1]);
         }
         //Выводим часы
         //Проверяем какие предыдущие цифры времени должны вывестись на экран
         //Для десятков часов
         if(hour[1] == 3 &&
         min[0] == 5 &&
         min[1] == 9 &&
         sec[0] == 5 &&
         sec[1] == 9) {
         animation($(".hour0"),hour[0]);
         }
         else {
         $(".hour0").html(hour[0]);
         }
         //Для единиц часов
         if(min[0] == 5 &&
         min[1] == 9 &&
         sec[0] == 5 &&
         sec[1] == 9) {
         animation($(".hour1"),hour[1]);
         }
         else {
         $(".hour1").html(hour[1]);
         }

         //Выводим минуты
         //Проверяем какие предыдущие цифры времени должны вывестись на экран
         //Для десятков минут
         if(min[1] == 9 &&
         sec[0] == 5 &&
         sec[1] == 9) {
         animation($(".min0"),min[0]);
         }
         else {
         $(".min0").html(min[0]);
         }
         //Для единиц минут
         if(sec[0] == 5 && sec[1] == 9) {
         animation($(".min1"),min[1]);
         }
         else {
         $(".min1").html(min[1]);
         }

         //Выводим секунды
         //Проверяем какие предыдущие цифры времени должны вывестись на экран
         //Для десятков секунд
         if(sec[1] == 9) {
         animation($(".sec0"),sec[0]);
         }
         //Для единиц секунд
         else {
         $(".sec0").html(sec[0]);
         }
         animation($(".sec1"),sec[1]);
         //Периодически вызываем созданную функцию,
         //интервал вызова одна секунда(1000 милли секунд)
         setTimeout(get_timer,1000);
      }

      //Функция для красивого отображения времени.
      function animation(vibor,param) {
       vibor.html(param)
       .css({'marginTop':'-20px','opacity':'0'})
       .animate({'marginTop':'0px','opacity':'1'});
      }

      //Вызываем функцию на исполнение
      get_timer();
});
