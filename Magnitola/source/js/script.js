$(document).ready(function () {

  // PLYR video slide #1

  $(".slider-for").on("afterChange", function(event, slick, currentSlide) {
    if (currentSlide == 7) {
      var player = new Plyr("#player", {
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
    }
  });

  // -----

  // SLICK slider

  $(".slider-for").slick({
		responsive: [
      {
        breakpoint: 992,
				settings: {
					dots: true,
          swipe: true,
          infinite: true,
      		arrows: false,
      		slidesToShow: 1,
      		autoplay: true,
      		autoplaySpeed: 5000
				}
      },
			{
				breakpoint: 2000,
				settings: {
          swipe: false,
					dots: false,
					asNavFor: ".slider-nav",
          infinite: true,
      		arrows: false,
      		slidesToShow: 1,
      		fade: true,
      		autoplay: true,
      		autoplaySpeed: 5000
				}
			}
		]
  });

	$(".slider-nav").slick({
		dots: false,
		arrows: false,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 5000,
		slidesToShow: 6,
		slidesToScroll: 1,
		focusOnSelect: true,
		vertical: true,
    verticalSwiping: true,
    asNavFor: ".slider-for"
  });

  // pause at swipe

  $(".slider-for").on("swipe", function(event, slick){
    $(".slider-for").slick("slickPause");
    $(".slider-nav").slick("slickPause");
  });


  // GoTo at click

  $(".icon-video").click(function () {
    $(".slider-for").slick("slickGoTo", 7);
    $(".slider-for").slick("slickPause");
    $(".slider-nav").slick("slickPause");
  });

  // pause at click

  $(".slick-dots li button").click(function () {
    $(".slider-for").slick("slickPause");
    $(".slider-nav").slick("slickPause");
  });


  // COMMENTS PAGE

  $(".comments__button").click(function () {
    $(".comments").css("display", "none");
    $(".comments-form").css("display", "flex");

    var top = $(".comments-form").offset().top - 220;

    $("body, html").animate({scrollTop: top}, 500);
  });

  // comments form


  $(".comments-form__submit").click(function () {
    if (!$("#comments-form__name").val() || !$("#comments-form__textarea-text").val()) {

      if (!$("#comments-form__name").val()) {
        var error_item = $("#comments-form__name").siblings(".comments-form__error");
        error_item.css("visibility", "visible");
        $("#comments-form__name").css("border-color", "red");
      } else {
        $("#comments-form__name").siblings(".comments-form__error").css("visibility", "hidden");
        $("#comments-form__name").css("border-color", "#ffc702");
      }

      if (!$("#comments-form__textarea-text").val()) {
        var error_item = $("#comments-form__textarea-text").siblings(".comments-form__error");
        error_item.css("visibility", "visible");
        $("#comments-form__textarea-text").css("border-color", "red");
      } else {
        $("#comments-form__textarea-text").siblings(".comments-form__error").css("visibility", "hidden");
        $("#comments-form__textarea-text").css("border-color", "#ffc702");
      }

      var top = $(".comments-form__form").offset().top - 130;

      $("body, html").animate({scrollTop: top}, 500);

    } else if ($("#comments-form__name").val() && $("#comments-form__textarea-text").val()) {

      $(".comments-form").css("display", "none");
      $(".comments-done").css("display", "block");

      if (screen.width < 992) {
        var correct = 360;
      } else {
        var correct = 100;
      }

      var top = $(".comments-done").offset().top - correct;

      $("body, html").animate({scrollTop: top}, 500);

      $(".details-image--comments").css("display", "none");
      $(".done-icon").fadeIn("slow");

      $(".comments-form__error").css("visibility", "hidden");
    }
  });

  // FOCUS & BLUR

  $("#comments-form__name").focus(function () {
    $("#comments-form__name").siblings(".comments-form__error").css("visibility", "hidden");
    $("#comments-form__name").css("border-color", "#ffc702");
  });

  $("#comments-form__name").blur(function () {
    if (!$("#comments-form__name").val()) {
      $("#comments-form__name").siblings(".comments-form__error").css("visibility", "visible");
      $("#comments-form__name").css("border-color", "red");
    }
  });

  $("#comments-form__textarea-text").focus(function () {
    $("#comments-form__textarea-text").siblings(".comments-form__error").css("visibility", "hidden");
    $("#comments-form__textarea-text").css("border-color", "#ffc702");
  });

  $("#comments-form__textarea-text").blur(function () {
    if (!$("#comments-form__textarea-text").val()) {
      $("#comments-form__textarea-text").siblings(".comments-form__error").css("visibility", "visible");
      $("#comments-form__textarea-text").css("border-color", "red");
    }
  });


  // comments count (comments__item)

  $(".count-comments-number").html(5);



  // MENU active

  var left = $(".navigation__link.active").offset().left;

  var active_midle = $(".navigation__link.active").width()/2;

  if (left > 25) {
    var scroll_left = left + active_midle - screen.width/2;

    $(".navigation__list").animate({scrollLeft: scroll_left}, 500);
  }

  // POPUP order

  $(".order-buy-button").click(function () {
    if (!$("#order-form__name").val() || !$("#order-form__phone").val()) {

      if (!$("#order-form__name").val()) {
        var error_item = $("#order-form__name").siblings(".order-form__error");
        error_item.css("visibility", "visible");

        $("#order-form__name").css("border-color", "red");
      } else {
        $("#order-form__name").siblings(".order-form__error").css("visibility", "hidden");
        $("#order-form__name").css("border-color", "#ffc702");
      }

      if (!$("#order-form__phone").val()) {
        var error_item = $("#order-form__phone").siblings(".order-form__error");
        error_item.css("visibility", "visible");

        $("#order-form__phone").css("border-color", "red");
      } else {
        $("#order-form__phone").siblings(".order-form__error").css("visibility", "hidden");
        $("#order-form__phone").css("border-color", "#ffc702");
      }

      var top = $(".order-form").offset().top - 130;

      $("body, html").animate({scrollTop: top}, 500);

    } else {

      $(".popup-order").fadeIn("slow");
    	$(".popup-overlay").fadeIn("slow");
    	$("html").addClass("overflow-hidden");
    }
  });


 // FOCUS & BLUR

  $("#order-form__name").focus(function () {
    $("#order-form__name").siblings(".order-form__error").css("visibility", "hidden");
    $("#order-form__name").css("border-color", "#ffc702");
  });

  $("#order-form__name").blur(function () {
    if (!$("#order-form__name").val()) {
      $("#order-form__name").siblings(".order-form__error").css("visibility", "visible");
      $("#order-form__name").css("border-color", "red");
    }
  });

  $("#order-form__phone").focus(function () {
    $(this).mask("+38 (999) 999-99-99");

    $("#order-form__phone").siblings(".order-form__error").css("visibility", "hidden");
    $("#order-form__phone").css("border-color", "#ffc702");
  });

  $("#order-form__phone").blur(function () {
    if (!$("#order-form__phone").val()) {
      $("#order-form__phone").siblings(".order-form__error").css("visibility", "visible");
      $("#order-form__phone").css("border-color", "red");
    }
  });


  // POPUP

  $(".popup-close").click(function () {
  	$(".popup").fadeOut("slow");
  	$(".popup-overlay").fadeOut("slow");
  	$("html").removeClass("overflow-hidden");
  });

  $(".popup-overlay").click(function () {
  	$(".popup").fadeOut("slow");
  	$(".popup-overlay").fadeOut("slow");
  	$("html").removeClass("overflow-hidden");
  });

  $(".popup-overlay--order").click(function () {
    $(".popup").fadeOut("slow");
  	$(".popup-overlay").fadeOut("slow");
  	$("html").removeClass("overflow-hidden");

    window.location.href = "/";
  });

  // LIKE


  $(".like-button").click(function () {

    if (Cookies.get("is_like") == "1") {
      $(this).removeClass("active");

      Cookies.remove("is_like");
      Cookies.set("is_like", "0");
    } else if (Cookies.get("is_like") == "0") {
      $(this).addClass("active");

      Cookies.remove("is_like");
      Cookies.set("is_like", "1");
    }
  });

  if (!Cookies.get("is_like")) {
    Cookies.set("is_like", "0");
  }

  if (Cookies.get("is_like") == "1") {
    $(".like-button").addClass("active");
  }

  $(".smile-button--1").click(function () {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
    } else if (!$(this).hasClass("active")) {
      $(this).addClass("active");

      var sad_icon = $(this).parent().siblings(".comments__item-opinion-smile").find(".smile-button--2");
      if (sad_icon.hasClass("active")) {
        sad_icon.removeClass("active");

        var sad_icon_count = sad_icon.siblings(".smile-count--2").html();

        var sad_icon_count_int = parseInt(sad_icon_count, 10) - 1;

        sad_icon.siblings(".smile-count--2").html(sad_icon_count_int);
      }


      var count_smile = $(this).siblings(".smile-count--1").html();

      var count_smile_int = parseInt(count_smile, 10) + 1;

      $(this).siblings(".smile-count--1").html(count_smile_int);
    }
  });

  $(".smile-button--2").click(function () {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
    } else if (!$(this).hasClass("active")) {
      var smile_icon = $(this).parent().siblings(".comments__item-opinion-smile").find(".smile-button--1");
      if (smile_icon.hasClass("active")) {
        smile_icon.removeClass("active");

        var smile_icon_count = smile_icon.siblings(".smile-count--1").html();

        var smile_icon_count_int = parseInt(smile_icon_count, 10) - 1;

        smile_icon.siblings(".smile-count--1").html(smile_icon_count_int);
      }

      $(this).addClass("active");

      var count_smile = $(this).siblings(".smile-count--2").html();

      var count_smile_int = parseInt(count_smile, 10) + 1;

      $(this).siblings(".smile-count--2").html(count_smile_int);
    }
  });

  // ORDER page

  var product_add = [111, 222, 333, 444];

  var url_order = window.location.toString().indexOf("order");

  if (url_order == -1) {
    Cookies.remove("total");
    Cookies.remove("single");
    Cookies.remove("product_id");
  }

  function sumPrice (first, second) {
    var first_value = first.html();
    var first_int = parseInt(first_value);

    var second_value = second.html();
    var second_int = parseInt(second_value);

    sum_price = first_int + second_int;

    return sum_price;
  };

  $(".offers__price-product--total-1").html(sumPrice($(".offers__price-product--1"), $(".offers__price-product")));
  $(".offers__price-product--total-2").html(sumPrice($(".offers__price-product--2"), $(".offers__price-product")));
  $(".offers__price-product--total-3").html(sumPrice($(".offers__price-product--3"), $(".offers__price-product")));


  // *** 1 *** complect

  $("#complect-1").click(function () {
    var total_price = $(".offers__price-product--total-1").html();

    Cookies.set("total", total_price);

    Cookies.set("product_id", product_add[0]);


    if (Cookies.get("single") != "1") {
      Cookies.set("single", "1");

      $(".order-section__item--2").css("display", "flex");
    }
  });


  // *** 2 *** complect

  $("#complect-2").click(function () {
    var total_price = $(".offers__price-product--total-2").html();

    Cookies.set("total", total_price);
    Cookies.set("product_id", product_add[1]);


    if (Cookies.get("single") != "2") {
      Cookies.set("single", "2");

      $(".order-section__item--3").css("display", "flex");
    }
  });

  // *** 3 *** complect

  $("#complect-3").click(function () {
    var total_price = $(".offers__price-product--total-3").html();

    Cookies.set("total", total_price);
    Cookies.set("product_id", product_add[2]);


    if (Cookies.get("single") != "3") {
      Cookies.set("single", "3");

      $(".order-section__item--4").css("display", "flex");
    }
  });

  if (!Cookies.get("single")) {
    Cookies.set("single", "0");
  }

  if (Cookies.get("total")) {
    $(".total-price").html(Cookies.get("total"));
  }

  if (Cookies.get("product_id")) {
    $("#prodId_add").val(Cookies.get("product_id"));
  }

  if (Cookies.get("single") == "1") {
    $(".order-section__item--2").css("display", "flex");

  } else if (Cookies.get("single") == "2") {
    $(".order-section__item--3").css("display", "flex");
  } else if (Cookies.get("single") == "3") {
    $(".order-section__item--4").css("display", "flex");
  }

  // SCROLL ARROW UP

  $(window).scroll(function (evt) {
    evt.preventDefault();

    if (screen.width >= 960) {
      if (pageYOffset > 0) {
        $(".arrow-up").fadeIn("slow");
      } else {
        $(".arrow-up").fadeOut("slow");
      }
    }
  });

  $(".arrow-up").click(function () {
    $("body, html").animate({scrollTop: 0}, 900);
  });


  // UPLOAD

  $(".svg-wrapper--add-photo").click(function () {
    $(".popup-upload").fadeIn("slow");
    $(".popup-overlay").fadeIn("slow");
    $("html").addClass("overflow-hidden");

    $(".popup-upload__slider").slick({
      infinite: false,
  		arrows: false,
  		slidesToShow: 1,
  		fade: false,
      dots: false,
  		autoplay: false,
      swipe: false
    });

    $(".popup-upload__slider").slick("slickGoTo", 0);

    if ($(".popup-upload__header-text--video").has("active")) {
      $(".popup-upload__header-text--video").removeClass("active");
    }

    $(".popup-upload__header-text--photo").addClass("active");
  });

  $(".svg-wrapper--add-video").click(function () {
    $(".popup-upload").fadeIn("slow");
    $(".popup-overlay").fadeIn("slow");

    $(".popup-upload__slider").slick({
      infinite: false,
  		arrows: false,
  		slidesToShow: 1,
  		fade: false,
      dots: false,
  		autoplay: false,
      swipe: false
    });

    $(".popup-upload__slider").slick("slickGoTo", 1);

    if ($(".popup-upload__header-text--photo").has("active")) {
      $(".popup-upload__header-text--photo").removeClass("active");
    }

    $(".popup-upload__header-text--video").addClass("active");
  });

  $(".button-ok").click(function () {
    var ggg = $("#text-image .preview-img-container");

    if (ggg.length > 0) {
      $("#text-image .preview-img-container").remove();
    }

    $(".comments__add-file-text--hidden").css("display", "none");

    $(".preview-img-container").clone().appendTo("#text-image");

    if ($("#text-image .iframe-wrapper")) {
      $("#text-image .iframe-wrapper").remove();
    }

    $(".iframe-wrapper").clone().appendTo("#text-image");

    $(".popup-upload").fadeOut("slow");
    $(".popup-overlay").fadeOut("slow");
    $("html").removeClass("overflow-hidden");
  });

  $(".popup-upload__header-text--video").click(function () {
    $(".popup-upload__slider").slick("slickGoTo", 1);

    if ($(".popup-upload__header-text--photo").has("active")) {
      $(".popup-upload__header-text--photo").removeClass("active");
    }

    $(".popup-upload__header-text--video").addClass("active");
  });

  $("#video-input").change(function () {

    var video_input = $(this).val();

    if (video_input) {
      var v = video_input.indexOf('v=');
      var video_id;


      if (v > -1) {
        video_id = video_input.split('v=')[1];

        var  ampersandPosition = video_id.indexOf('&');

        if(ampersandPosition != -1) {
          video_id = video_id.substring(0, ampersandPosition);
        }

      } else {
        video_id = video_input.split('be/')[1];


      }

      var src_iframe = "https://www.youtube.com/embed/" + video_id;

      $(".add-video").attr("src", src_iframe);
    }
  });


  $(".popup-upload__header-text--photo").click(function () {
    $(".popup-upload__slider").slick("slickGoTo", 0);

    $(".popup-upload__header-text--video").removeClass("active");
    $(this).addClass("active");
  });

  $("#upload-file").hover(function () {
    $(".popup-upload__button").css("box-shadow", "inset 0 2px 3px 0 #000000");
  });

  $("#upload-file").mouseout(function () {
    $(".popup-upload__button").css("box-shadow", "none");
  });

  $("#upload-file").change(function () {
    var files = $(this).get(0).files[0];

    previewFile(files);

    rotateDelete();
  });

  // DROPBOX UPLOAD

  var dropbox = $("#dropbox");

  dropbox.on("dragenter", function (evt) {
    dragenter(evt);
  });


  dropbox.on("dragover", function (evt) {
    dragover(evt);
  });

  dropbox.on("drop", function (evt) {
    drop(evt);

    rotateDelete();
  });
});


// UPLOAD FILE FUNCTION

var k = 1;

function previewFile(files) {
  var lll = $("#preview-container .preview-img-container");

  if (lll.length < 7) {
    var preview_img_container = $('<div></div>').attr({
      'class': 'preview-img-container ' + 'preview-img-container--' + k
    });

    preview_img_container.appendTo('#preview-container');


    var preview = $('<img />').attr({
      'class': 'preview-img ' + 'preview-img--' + k ,
      'width': 100
    });

    preview.appendTo('.' + 'preview-img-container--' + k);

    var file    = files;
    var reader  = new FileReader();

    if (file) {
      reader.readAsDataURL(file);
    } else {
      preview.attr("src", "");
    }

    reader.onloadend = function () {
      preview.attr("src", reader.result);
    }

    var rotate_container = $('<div></div>').attr({
      'class': 'rotate-container ' + 'rotate-container--' + k
    }).appendTo('.' + 'preview-img-container--' + k);

    var rotate_right = $('<button></button>').attr({
      'class': 'rotate-img ' + 'rotate-img--right',
      'title': 'Поворот влево',
      'type': 'button'
    }).appendTo('.' + 'rotate-container--' + k);

    var rotate_left = $('<button></button>').attr({
      'class': 'rotate-img ' + 'rotate-img--left',
      'title': 'Поворот вправо',
      'type': 'button'
    }).appendTo('.' + 'rotate-container--' + k);

    var delete_img = $('<button></button>').attr({
      'class': 'del-img',
      'title': 'Удалить фото',
      'type': 'button'
    }).appendTo('.' + 'rotate-container--' + k);

    k++;
  } else {
    alert("Достигнуто максимальное количество загружаемых фото!");
  }
}


// DRAG & DROP FUNCTION

function dragenter(evt) {
  evt.stopPropagation();
  evt.preventDefault();

  $(".dropbox").css("border-color", "#2898ff");
}

function dragover(evt) {
  evt.stopPropagation();
  evt.preventDefault();
}

function drop(evt) {
  evt.stopPropagation();
  evt.preventDefault();

  var dt = evt.originalEvent.dataTransfer;

  var files = dt.files[0];

  var amount = dt.files.length;

  if (amount == 1) {
    previewFile(files);
  } else {
    alert("Для загрузки необходимо выбрать один файл!");
  }
}


// UPLOADED FILE ROTATE & DELETE

function rotateDelete () {
  var deg_i = 90;

  $(".rotate-img--right").click(function () {

    var image = $(this).parent().siblings('.preview-img');

    image.css({transform: "rotate(" + deg_i + "deg)"});

    deg_i +=90;
  });

  $(".rotate-img--left").click(function () {

    var image = $(this).parent().siblings('.preview-img');

    image.css({transform: "rotate(" + "-" + deg_i + "deg)"});

    deg_i +=90;
  });

  $(".del-img").click(function () {

    var rotate_container = $(this).parent();
    var image_container = rotate_container.parent();

    image_container.fadeOut("small");
  });
}
