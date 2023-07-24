$(document).ready(function () {
  /* banner */

  $(".hero").slick({
    autoplay: true,
    autoplaySpeed: 5000,
    swipe: true,
    infinite: true,
    arrows: true,
    slidesToShow: 1,
    dots: true,

    responsive: [
      {
        breakpoint: 1299,

        settings: {
          arrows: false
        }
      }
    ]
  });

  /*------------*/

  fadeInOut(".page-header__button-basket", ".page-header__basket");

  /* video youtube  */

  if ($(".youtube").length > 0) {
    $(".youtube__content").each(function () {
      var youtubeID = $(this).data("id");

      $(this).children(".youtube__thumb").attr("src","https://i.ytimg.com/vi/" + youtubeID + "/hqdefault.jpg");
    });

    $(".youtube__play").click(function () {
      var youtubeID = $(this).parents().data("id");

      $(this).siblings(".youtube__iframe").css("z-index", "3");
      $(this).siblings(".youtube__iframe").attr("src","https://www.youtube.com/embed/" + youtubeID + "?autoplay=1");
    });
  }

  /* video slider */

  if ($(".video-slider").length > 0) {
    $(".video-slider").slick({
      autoplay: false,
      autoplaySpeed: 5000,
      swipe: true,
      infinite: true,
      arrows: true,
      slidesToShow: 2,
      dots: true,

      responsive: [
        {
          breakpoint: 501,

          settings: {
            slidesToShow: 1
          }
        }
      ]
    });
  }


  /* pagination */

  if ($(".pagination__list").length > 0) {
    $(".pagination__list li").last().children("a").removeAttr("href");
    $(".pagination__list li").last().children("a").addClass("active");
  }


  /* select */

  if ($(".select").length > 0) {
    $(".select").each(function () {
      var text = $(this).find(".active").children("label").text();

      $(this).children("p").html(text);

    });

    $(".select__top").click(function () {
      if (!$(this).parent().hasClass("disabled")) {
        if ($(this).siblings("ul").hasClass("opened")) {
          $(this).siblings("ul").fadeOut("slow");

          $(this).siblings("ul").removeClass("opened");

          $(".select__overlay").fadeOut("fast");
        } else {
          $(this).siblings("ul").fadeIn("slow");

          $(this).siblings("ul").addClass("opened");

          $(".select__overlay").fadeIn("fast");
        }
      }
    });

    $(".select__overlay").click(function () {
      if ($(".select__top").siblings("ul").hasClass("opened")) {
        $(".select__top").siblings("ul").fadeOut("slow");

        $(".select__top").siblings("ul").removeClass("opened");

        $(".select__overlay").fadeOut("fast");
      }
    });

    selectShow(".select label");

    $(".sort__reset").click(function () {
      $(".select").each(function () {
        $(this).find("li").removeClass("active");
        $(this).find("li").eq(0).addClass("active");

        $(this).children("p").html($(this).find("li").eq(0).children("label").text());
      });

      $(".range-green").css({
        width: '100%',
        left: 0
      });
    });
  }

  if ($(".multi").length > 0) {
    $(".multi__top").click(function () {
      if (!$(this).parent().hasClass("disabled")) {
        if ($(this).siblings("ul").hasClass("opened")) {
          $(this).siblings("ul").fadeOut("slow");

          $(this).siblings("ul").removeClass("opened");

          $(".multi__overlay").fadeOut("fast");
        } else {
          $(this).siblings("ul").fadeIn("slow");

          $(this).siblings("ul").addClass("opened");

          $(".multi__overlay").fadeIn("fast");
        }
      }
    });

    $(".multi__overlay").click(function () {
      if ($(".multi__top").siblings("ul").hasClass("opened")) {
        $(".multi__top").siblings("ul").fadeOut("slow");

        $(".multi__top").siblings("ul").removeClass("opened");

        $(".multi__overlay").fadeOut("fast");
      }
    });

    multiShow(".multi label");
  }



  /* add to favorite */

  if ($("button[name='favorite']").length > 0) {
    $("button[name='favorite']").click(function () {
      if ($(this).hasClass("active")) {
        $(this).removeClass("active");

        $(this).html("Add to favorite");
      } else {
        $(this).addClass("active");

        $(this).html("Added to favorite");
      }
    });
  }

  /* cart*/

  if ($("button[name='add-to-cart']").length > 0) {
    $("button[name='add-to-cart']").click(function () {
      if ($(this).hasClass("active")) {
        $(this).removeClass("active");

        var countCart = parseInt($(".page-header__basket-count").html());

        countCart = countCart - 1;

        if (countCart > 0) {
          $(".page-header__basket-count").html(countCart);
        } else {
          $(".page-header__basket-count").fadeOut("fast");
        }

        $(this).html("Add to cart");
      } else {
        $(this).addClass("active");

        var countCart = parseInt($(".page-header__basket-count").html());

        countCart = countCart + 1;

        $(".page-header__basket-count").html(countCart);

        if (countCart < 2) {
          $(".page-header__basket-count").fadeIn("fast");
        }

        $(this).html("Added to cart");
      }
    });
  }

  /* FAQ */

  if ($(".faq__list").length > 0) {
    $(".faq__list span").click(function () {
      if ($(this).hasClass("active")) {
        $(this).removeClass("active");

        $(this).parent().siblings("p").slideUp();

        $(this).css("transform", "rotate(0deg)");
      } else {
        $(this).addClass("active");

        $(this).parent().siblings("p").slideDown();

        $(this).css("transform", "rotate(45deg)");
      }
    });
  }


  /* address list */

  if ($(".delivery").length > 0) {
    for (var i = 0; i < $("input[name='address']").length; i++) {

      if ($("input[name='address']").eq(i).prop("checked")) {
        $("input[name='address']").eq(i).parent().addClass("active");
      }
    }

    $("input[name='address']").on("change", function () {
      if ($(this).prop("checked")) {
        $(this).parent().siblings().removeClass("active");

        $(this).parent().addClass("active");
      }
    });

    editSavePersonInfo(".delivery");

    var deleteButton = $(".delivery").children("button[name='delete']");
    var addButton = $(".customer__content").children("button[name='add']");

    deleteButton.click(function () {
      $(this).parent().css("display", "none");
    });

    addButton.click(function () {
      for (var i = 0; i < $(this).siblings(".delivery").length; i++) {
        if ($(this).siblings(".delivery").eq(i).hasClass("hidden")) {
          $(this).siblings(".delivery").eq(i).css("display", "flex");
        }
      }
    });

    $(".checkout__more, .checkout__edit").click(function () {
      $(this).css("display", "none");

      for (var i = 0; i < $(this).siblings(".delivery").length; i++) {
        if ($(this).siblings(".delivery").eq(i).hasClass("hidden")) {
          $(this).siblings(".delivery").eq(i).css("display", "flex");
        }
      }
    });
  }

  /* personal details */

  if ($(".person")) {
    editSavePersonInfo(".person");
  }

  /* communication */

  if ($(".communication")) {
    editSavePersonInfo(".communication");
  }

  /* favorite list */

  if ($(".button[name='delProd']")) {
    $(".button[name='delProd']").click(function () {
      $(this).parent().css("display", "none");
    });
  }

  /* settings */

  editSavePersonInfo(".settings");

  /* product-page slider */

  if ($(".slider").length > 0) {
    $(".slider__for").slick({
      autoplay: true,
      autoplaySpeed: 5000,
      swipe: true,
      infinite: true,
      arrows: false,
      slidesToShow: 1,
      dots: false,
      asNavFor: ".slider__nav",
      fade: true
    });

  	$(".slider__nav").slick({
  		dots: false,
  		arrows: true,
  		infinite: true,
  		autoplay: true,
  		autoplaySpeed: 5000,
  		slidesToShow: 4,
  		slidesToScroll: 1,
  		focusOnSelect: true,

      asNavFor: ".slider__for",
      prevArrow: $("button[name='slidePrev']"),
      nextArrow: $("button[name='slideNext']"),

      responsive: [
        {
          breakpoint: 992,
  				settings: {
            vertical: false,
            verticalSwiping: false,
            slidesToShow: 3,
            arrows: false
  				}
        },
  			{
  				breakpoint: 4000,
  				settings: {
            vertical: true,
            verticalSwiping: true,
  				}
  			}
  		]
    });

    // pause at swipe

    $(".slider__for").on("swipe", function(event, slick){
      $(".slider__for").slick("slickPause");
      $(".slider__nav").slick("slickPause");
    });

    // pause at click

    $(".slick-dots li button, .youtube__play").click(function () {
        $(".slider__for").slick("slickPause");
        $(".slider__nav").slick("slickPause");
    });

    /* end slider */

    if ($(".youtube").length > 0) {
      $(".youtube__content").each(function () {
        var youtubeID = $(this).data("id");

        $(this).append('<a class="slider__fancybox-video" data-fancybox="slider" href="https://www.youtube.com/watch?v=' + youtubeID + '"></a>');
      });
    }

    if (screen.width < 992) {
      $('[data-fancybox]').fancybox({
        mobile: {
          clickOutside: "close",
          clickContent : "close",
          clickSlide : "close"
        },
        toolbar: false,
        arrows: false,
        loop: true
      });
    } else {
      $(".slider__item-for").dblclick(function () {
        $('[data-fancybox]').fancybox({
            loop: true
        });
      });
    }
  }




  /* text fadeIn/fadeOut */

  if ($(".specs").length > 0) {
    var n = $(".specs__item-text").length;

    $(".specs__list-text").css("width", "calc(100% * " + n + ")");
  }

  $("input[name='text']").on("change", function () {
    var index = $(this).data("index");

    var heightItem = $(".specs__item-text").eq(index).height();
    var heightList = $(".specs__list-text").height(heightItem);

    $(".specs__list-text").css("margin-left", "calc(100% * -1 * " + index + ")");
  });

  /* anchor*/

  $("a[href^='#']").click(function () {
    anchor($(this));

    if (screen.width > 767) {
      if ($(".navigation__menu").hasClass("active")) {
        $(".page-header__site-list").slideUp("fast");

        $(".navigation__menu").removeClass("active");
      }
    }
  });

  /* sub list */

  $(".navigation__sub-button").click(function () {
    $(".navigation__sub-container").not($(this).siblings(".navigation__sub-container")).removeClass("active");

    if ($(this).siblings(".navigation__sub-container").hasClass("active")) {
      $(this).siblings(".navigation__sub-container").removeClass("active");
    } else {
      $(this).siblings(".navigation__sub-container").addClass("active");
    }
  });

  if (screen.width > 1024) {
    $(".navigation__site-item").mouseover(function () {
      $(".navigation__sub-container").removeClass("active");

      $(this).children(".navigation__sub-container").addClass("active");
    });

    $(".navigation__sub-container").mouseout(function () {
      $(this).removeClass("active");
    });
  }



  /* menu mobile */

  $(".navigation__menu").click(function () {
    if ($(this).hasClass("active")) {
      $(".page-header__site-list").slideUp("fast");

      $(this).removeClass("active");
    } else {
      $(".page-header__site-list").slideDown("fast");

      $(this).addClass("active");
    }
  });
});

/* anchor*/

function anchor (element) {
  var id = element.attr("href");
  var top = $(id).offset().top - 90;

  $("body, html").animate({scrollTop: top}, 900);
}

/* save edit info of input */

function editSavePersonInfo (parent) {
  var editButton = $(parent).children("button[name='edit']");
  var saveButton = $(parent).children("button[name='save']");

  editButton.click(function () {
    $(this).siblings("div").children("input").removeAttr("disabled");
    $(this).siblings("div").children(".select").removeClass("disabled");
  });

  saveButton.click(function () {
    $(this).siblings("div").children("input").attr("disabled", "disabled");
    $(this).siblings("div").children(".select").addClass("disabled");
  });
}

/* filters list */

function selectShow(element) {
  $(element).click(function () {
    var text = $(this).text();

    $(this).parent().siblings("li").not($(this)).removeClass("active");

    if (!$(this).hasClass("active")) {
      $(this).parent().addClass("active");
    }

    $(this).parent().parent().siblings("p").html(text);

    $(this).parent().parent().removeClass("opened")

    $(this).parent().parent().fadeOut("slow");

    $(".select__overlay").fadeOut("fast");
  });
}

/* multiselect */

function multiShow(element) {
  $(element).click(function () {
    var textLabel = $(this).text();

    if ($(this).parent().siblings().hasClass("active")) {
      textLabel = ', ' + textLabel;
    }

    if (!$(this).parent().hasClass("active")) {
      $(this).parent().addClass("active");

      var textTop = $(this).parent().parent().siblings(".person__multi-top").find(".multi__checked").html();

      $(this).parent().parent().siblings(".person__multi-top").find(".multi__checked").html(textTop + textLabel);
    } else {
      $(this).parent().removeClass("active");

      var newTextLabel = '';

      $(".multi__item.active").each(function (index) {
        var split;

        if (index == '0') {
          split = '';
        } else {
          split = ', ';
        }
        newTextLabel = newTextLabel + split + $(this).children("label").text();
      });

      $(this).parent().parent().siblings(".person__multi-top").find(".multi__checked").html(newTextLabel);
    }

    $(this).parent().parent().removeClass("opened")

    $(this).parent().parent().fadeOut("slow");

    $(".multi__overlay").fadeOut("fast");
  });
}

/* click event and fadeIn/fadeOut some element */

function fadeInOut (button, element) {
  $(button).click(function () {
    if ($(button).hasClass("active")) {
      $(element).fadeOut("slow");

      $(button).removeClass("active");
    } else {
      $(element).fadeIn("slow");

      $(button).addClass("active");
    }
  });

  $("main, footer").click(function() {
    if ($(button).hasClass("active")) {
      $(element).fadeOut("slow");

      $(button).removeClass("active");
    }

    if ($(".navigation__menu").hasClass("active")) {
      $(".page-header__site-list").slideUp("fast");

      $(".navigation__menu").removeClass("active");
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
