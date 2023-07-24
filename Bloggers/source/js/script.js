$(document).ready(function () {
  /* modal */

  $(".services__order").click(function () {
    $(".modal").fadeIn("slow");
    $(".overlay").fadeIn("slow");
    $("html").css("overflow", "hidden");
  });

  $(document).keyup(function(evt) {
     if (evt.keyCode === 27) { // escape key maps to keycode `27`
       $(".modal").fadeOut("slow");
       $(".overlay").fadeOut("slow");
       $("html").css("overflow", "visible");
    }
  });

  $(".overlay").click(function () {
    $(".modal").fadeOut("slow");
    $(".overlay").fadeOut("slow");
    $("html").css("overflow", "visible");
  });

  /* anchor*/

  $("a[href^='#']").click(function () {
    anchor($(this));
  });

  function anchor (element) {
    var id = element.attr("href");
    var top = $(id).offset().top - 90;

    $("body, html").animate({scrollTop: top}, 900);
  }

  /* menu change color  */

  $(window).scroll(function () {
    if (pageYOffset > 0) {
      $(".page-header").addClass("active");
    } else {
      $(".page-header").removeClass("active");
    }

  });

  /* filter button */

  $(".filters__title").click(function () {
    if ($(this).parent().hasClass("active")) {
      $(this).parent().removeClass("active");

      $(this).siblings(".filters__item").slideUp("slow");
    } else {
      $(this).parent().addClass("active");

      $(this).siblings(".filters__item").slideDown("slow");
    }

  });

  /* catalog sorting */

  $(".catalog__sort-button").click(function () {
    $(".catalog__sort-button").parent().not($(this).parent()).removeClass("active");

    if ($(".catalog__sort-button").not($(this)).hasClass("up")) {
      $(".catalog__sort-button").not($(this)).removeClass("up");
    } else if ($(".catalog__sort-button").not($(this)).hasClass("down")) {
      $(".catalog__sort-button").not($(this)).removeClass("down");
    }

    if ($(this).parent().hasClass("active") && $(this).hasClass("down")) {
      $(this).removeClass("down");
      $(this).addClass("up")
    } else if ($(this).parent().hasClass("active") && $(this).hasClass("up")) {
      $(this).removeClass("up");
      $(this).addClass("down")
    } else {
      $(this).parent().addClass("active");

      if ($(this).parent().index() > 0) {
        $(this).addClass("down")
      }
    }
  });

  /* status online/offline*/

  OnOff(".catalog__bloger-status");

  OnOff(".bloger__status");

  /* add favorite */

  favBloger(".catalog__bloger-favorite"); //search bloger

  favBloger(".bloger__favorite"); //bloger


  /* pagination */

  var lastPage = $(".catalog__pagination-item").length - 2;

  if ($(".catalog__pagination-item").eq(1).hasClass("active")) {
    $(".catalog__pagination-item").eq(0).css("visibility", "hidden");
  } else if ($(".catalog__pagination-item").eq(lastPage).hasClass("active")) {
    $(".catalog__pagination-item").eq(++lastPage).css("visibility", "hidden");
  }

  /* city  */
  cityList(".filters__list--city-blogers", ".filters__list--checked-blogers", ".filters__city-blogers", "input[name='city-blogers']");

  /* city audience */

  cityList(".filters__list--city-audience", ".filters__list--checked-audience", ".filters__city-audience", "input[name='city-audience']");

  /* chart */

  chart(45, 15, ".chart-segment");

  chart(50, 20, ".bloger__chart-segment");

  chart(69, 37, ".analytics__segment", ".anlitics__description-percent");


  /* полосы рейтинга блогера */

  $(".reviews__rating-line").each(function (index) {
    var greenLine = $(this).children("span");
    var greenCount = parseInt($(this).siblings(".reviews__rating-caption").children("span").html());

        greenLine.css("width", greenCount + '%');
  });

  /* показать все комментарии */

  if ($(".reviews__item").length > 5) {
    $(".reviews__more").css("display", "block");
  }

  var heightReviewsList = 0;

  $(".reviews__item").each(function (index) {
    var add = $(this).height() + 15;
    if (index < 6) {
      heightReviewsList = heightReviewsList + add;
    }
  });

  $(".reviews__list").css("max-height", heightReviewsList);

  $(".reviews__more").click(function () {
    $(".reviews__list").css("max-height", "none");

    $(this).css("display", "none");
  });

  /* stars rating */

  var starPercent = 0;

  $(".reviews__stars").each(function () {
    var starDataCount = $(this).data("star");

    starPercent = starPercent + starDataCount*100/5;

    if (starDataCount === 5) {
      $(this).children(".reviews__stars-title").text('Отлично');
    } else if (starDataCount === 4) {
      $(this).children(".reviews__stars-title").text('Хорошо');
    } else if (starDataCount === 3) {
      $(this).children(".reviews__stars-title").text('Нормально');
    } else if (starDataCount === 2) {
      $(this).children(".reviews__stars-title").text('Плохо');
    } else if (starDataCount === 1) {
      $(this).children(".reviews__stars-title").text('Очень плохо');
    }

    for (var i = 0; i < starDataCount; i++) {
      $(this).children(".reviews__star").eq(i).css("background-image", "url(../img/star-pink.png)");
    }
  });

  var ratingBloger = Math.round(starPercent/$(".reviews__stars").length);


  /* рейтинг в шапке комментариев */

  $(".rating-bloger").text(ratingBloger);

  $(".bloger__chart-number").text(ratingBloger + '%');
});

/* фунуция построения svg-диаграмм */

function chart (r, strW, circle, textPercent) {
  var lengthCircle = r*2*Math.PI;
  var dashoffset = lengthCircle*25/100; // stroke-dashoffset для первого элемента
  var allSectors = 0; // смещение каждого сектора, начиная со 2-го
  var allSegments = 0; // общая длина окружности, занятая всеми предыдущими элементами

  $(circle).each(function (index) {
    var percent = $(this).data("percent"); // дата-атрибута элемента получение значения дата-атрибута элемента

    if ($(textPercent)) {
      var parentPercent = $(textPercent).parent().eq(index);

      parentPercent.children(textPercent).text(percent + ' %');
    }

    var lengthSegment = lengthCircle*percent/100; // вычисление р-ра сегмента исходя из дата-атрибута элемента

    var offsetSegment = lengthCircle*(100 - percent)/100;

    $(this).css("stroke-width", strW);
    $(this).css("stroke-dasharray", lengthSegment + ' ' + offsetSegment);
    $(this).css("stroke-dashoffset", dashoffset+allSectors);

    allSegments = allSegments + lengthSegment;
    allSectors = lengthCircle - allSegments;
  });
}

/* status bloger online/offline */

function OnOff (element) {
  $(element).click(function () {
      if ($(this).hasClass("active")) {
        $(this).removeClass("active");
      } else {
        $(this).addClass("active");
      }
  });
}

/* add favorite */

function favBloger (element) {
  $(element).click(function () {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");

      $(this).children("span").text("В избранные");
    } else {
      $(this).addClass("active");

      $(this).children("span").text("Сохранено");
    }
  });
}

/* check city */

function cityList (element, cloneElement, hideList, inputName) {
  $(hideList).focus(function () {
    $(element).fadeIn("slow");
  });

  $(hideList).blur(function () {
    $(element).fadeOut("slow");
  });


  $(element).find(inputName).click(function () {
    if($(this).hasClass("checked")) {
      $(this).prop("checked", false);

      $(this).removeClass("checked");

      var inputId = $(this).attr("id");

      $(cloneElement).find(".filters__list-item").each(function () {
        if ($(this).children("label").attr("for") === inputId) {
          $(this).remove();
        }
      });

      if ($(cloneElement).find(".filters__list-item").length < 1) {
        $(cloneElement).removeClass("active");
      }
    } else {
      $(this).prop("checked", true);

      $(this).addClass("checked");

      $(cloneElement).addClass("active");

      $(this).parent().clone().appendTo($(cloneElement));

      $(cloneElement).find(".filters__list-item").each(function () {
        $(this).children("input").remove();
      });
    }
  });
}

/* Range */

function getVals() {
  // Get slider values
  var parent = this.parentNode;
  var slides = parent.getElementsByClassName("range-input");

    var slide1 = parseFloat( slides[0].value );
    var slide2 = parseFloat( slides[1].value );

    var maxRange = parseFloat( slides[0].max );

  // Neither slider will clip the other, so make sure we determine which is larger
  if( slide1 > slide2 ){ var tmp = slide2; slide2 = slide1; slide1 = tmp; }

  var green = parent.getElementsByClassName("range-green")[0];
      green.style.width = ((slide2*100/maxRange) - (slide1*100/maxRange))  + '%';
      green.style.left = (slide1*100/maxRange)  + '%';

      //console.log(slide1, slide2);

  var displayMin = parent.getElementsByClassName("range-min")[0];
  var displayMax = parent.getElementsByClassName("range-max")[0];

      displayMin.value = slide1;
      displayMax.value = slide2;
  }

function changeRange() {
    var parent = this.parentNode;

    var displayMin = parent.getElementsByClassName("range-min")[0];
    var displayMax = parent.getElementsByClassName("range-max")[0];

    var maxRange = parseFloat( displayMin.max );

      var slide1 = parseFloat( displayMin.value );
      var slide2 = parseFloat( displayMax.value );

      var slides = parent.getElementsByClassName("range-input");

      if( slide1 <= slide2 && slide1 <= maxRange && slide2 <= maxRange) {
        displayMin.style.backgroundColor = 'rgba(255, 0, 153, 0)';
        displayMax.style.backgroundColor = 'rgba(255, 0, 153, 0)';

        displayMin.style.borderColor = '#d6d6d6';
        displayMax.style.borderColor = '#d6d6d6';

        displayMin.addEventListener("focus", function () {
          displayMin.style.borderColor = '#74dfce';
        });

        displayMax.addEventListener("focus", function () {
          displayMax.style.borderColor = '#74dfce';
        });

        displayMin.addEventListener("blur", function () {
          displayMin.style.borderColor = '#d6d6d6';
        });

        displayMax.addEventListener("blur", function () {
          displayMax.style.borderColor = '#d6d6d6';
        });

        slides[0].value = slide1;
        slides[1].value = slide2;

        var green = parent.getElementsByClassName("range-green")[0];
            green.style.width = ((slide2*100/maxRange) - (slide1*100/maxRange))  + '%';
            green.style.left = (slide1*100/maxRange)  + '%';
      } else {
        displayMin.style.backgroundColor = 'rgba(255, 0, 153, 0.2)';
        displayMax.style.backgroundColor = 'rgba(255, 0, 153, 0.2)';

        displayMin.style.borderColor = 'rgba(255, 0, 153, 1)';
        displayMax.style.borderColor = 'rgba(255, 0, 153, 1)';
      }


  }

window.onload = function() {

  // Initialize Sliders
  var sliderSections = document.getElementsByClassName("range-slider");
      for( var x = 0; x < sliderSections.length; x++ ){
        var sliders = sliderSections[x].getElementsByTagName("input");
        for( var y = 0; y < sliders.length; y++ ){
          if( sliders[y].type ==="range" ){
            sliders[y].oninput = getVals;
            // Manually trigger event first time to display values
            sliders[y].oninput();
          } else if ( sliders[y].type ==="number" ) {
            sliders[y].oninput = changeRange;
            // Manually trigger event first time to display values
            sliders[y].oninput();
          }
        }
      }
    }
