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

  // CATALOG

  $(".catalog__button").click(function () {
    var prod = $(this).siblings(".catalog__text").html();
    var price = $(this).siblings(".catalog__price").html().split(' ').splice(0, 1);
    var id = $(this).data('id');

    $(".popup__product").html(prod);

    $(".popup input[name*='s3']").val(prod);
    $(".popup input[name*='s1']").val(price);
    $(".popup input[name*='s2']").val(id);

    $(".popup").fadeIn("slow");
    $(".popup-overlay").fadeIn("fast");
    $("html").addClass("overflow-hidden");
  });

  $(".popup-close, .popup-overlay").click(function () {
    $(".popup").fadeOut("slow");
    $(".popup-overlay").fadeOut("fast");
    $("html").removeClass("overflow-hidden");
  });


  $(".page-header__button").click(function () {
    anchor($(this));
  });


  function anchor (element) {
    var id = element.attr("href");
    var top = $(id).offset().top;

    $("body, html").animate({scrollTop: top}, 900);
  }

  // CATALOG

  if (screen.width < 992) {
    $(".catalog__list").slick({
      infinite: true,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: true,
      dots: false,
      slidesToShow: 3,
      slidesToScroll: 1,

      responsive: [
        {
          breakpoint: 900,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 500,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  }

});
