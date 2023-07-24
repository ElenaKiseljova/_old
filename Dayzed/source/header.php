<?php

function pageName($title, $menuItem) {
  if ($title  === $menuItem) {
    echo " active";
  }
}

 ?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <link rel="shortcut icon" href="img/favicon.svg" type="image/svg">

    <link rel="stylesheet" href="plugins/slick.min.css">
    <link rel="stylesheet" href="plugins/fancybox.min.css">

    <link rel="stylesheet" href="css/style.min.css">

    <title><?= $title ?></title>
  </head>
  <body>
    <!-- header -->
    <header class="page-header">
      <div class="page-header__wrapper">
        <a class="page-header__logo-link button" href="/">
          <img width="116" height="32" src="img/logo.svg" alt="Логотип">
        </a>



        <nav class="page-header__navigation navigation">
          <button class="page-header__menu navigation__menu button" type="button" name="menu"><span class="visually-hidden">Menu</span></button>

          <ul class="page-header__site-list navigation__site-list">
            <li class="page-header__site-item navigation__site-item">
              <a class="button<?php pageName($title, 'Dayzed story'); ?>" href="story.php">Dayzed story</a>
            </li>
            <li class="page-header__site-item navigation__site-item">
              <a class="button<?php pageName($title, 'Categories'); ?>" href="categories.php">Categories</a>

              <span class="navigation__sub-button"></span>
              <div class="navigation__sub-container">
                <ul class="navigation__sub">
                  <?php $g = 1; ?>
                  <?php while ($g < 21) : ?>

                    <li class="navigation__sub-item">
                      <a class="button" href="#">
                        Categories <?= $g ?>
                      </a>
                    </li>

                  <?php $g++; ?>
                <?php endwhile; ?>
                </ul>
              </div>
            </li>
            <li class="page-header__site-item navigation__site-item">
              <a class="button<?php pageName($title, 'Brands'); ?>" href="brands.php">Brands</a>

              <span class="navigation__sub-button"></span>
              <div class="navigation__sub-container">
                <ul class="navigation__sub">
                  <?php $g = 1; ?>
                  <?php while ($g < 21) : ?>

                    <li class="navigation__sub-item">
                      <a class="button" href="#">
                        Brand <?= $g ?>
                      </a>
                    </li>

                  <?php $g++; ?>
                <?php endwhile; ?>
                </ul>
              </div>
            </li>
            <li class="page-header__site-item navigation__site-item">
              <a class="button<?php pageName($title, 'Bundles'); ?>" href="bundles.php">Bundles</a>
            </li>
            <li class="page-header__site-item navigation__site-item">
              <a class="button<?php pageName($title, 'Blog'); ?>" href="blog.php">Blog</a>
            </li>
            <li class="page-header__site-item navigation__site-item">
              <a class="button<?php pageName($title, 'Contact'); ?>" href="contact.php">Contact</a>
            </li>
          </ul>
        </nav>

        <ul class="page-header__user-list">
          <li class="page-header__user-item">
            <a class="page-header__login button" href="/login.php">
              <span class="visually-hidden">Log In</span>
              <svg height="27px" viewBox="0 -10 490.66667 490" width="27px" xmlns="http://www.w3.org/2000/svg"><path d="m325.332031 251h-309.332031c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h309.332031c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m240 336.332031c-4.097656 0-8.191406-1.554687-11.308594-4.691406-6.25-6.25-6.25-16.382813 0-22.636719l74.027344-74.023437-74.027344-74.027344c-6.25-6.25-6.25-16.386719 0-22.636719 6.253906-6.25 16.386719-6.25 22.636719 0l85.332031 85.335938c6.25 6.25 6.25 16.382812 0 22.632812l-85.332031 85.332032c-3.136719 3.160156-7.230469 4.714843-11.328125 4.714843zm0 0"/><path d="m256 469.667969c-97.089844 0-182.804688-58.410157-218.410156-148.824219-3.242188-8.191406.808594-17.492188 9.023437-20.734375 8.191407-3.199219 17.515625.789063 20.757813 9.046875 30.742187 78.058594 104.789062 128.511719 188.628906 128.511719 111.742188 0 202.667969-90.925781 202.667969-202.667969s-90.925781-202.667969-202.667969-202.667969c-83.839844 0-157.886719 50.453125-188.628906 128.511719-3.265625 8.257812-12.566406 12.246094-20.757813 9.046875-8.214843-3.242187-12.265625-12.542969-9.023437-20.734375 35.605468-90.414062 121.320312-148.824219 218.410156-148.824219 129.386719 0 234.667969 105.28125 234.667969 234.667969s-105.28125 234.667969-234.667969 234.667969zm0 0"/></svg>
            </a>
          </li>
          <li class="page-header__user-item">
            <button class="page-header__button-basket button <?php if ($title === 'Home') echo "active"; ?>" type="button">
              <span class="visually-hidden">Basket</span>
              <span class="page-header__basket-count">3</span>

              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 512 512">
                <g>
                  <g>
                    <path d="M473.043,164.174h-26.541c-0.203-0.226-0.393-0.459-0.61-0.675L301.197,18.803c-6.519-6.52-17.091-6.52-23.611,0
                      s-6.52,17.091,0,23.611l121.759,121.759H112.654L234.414,42.414c6.52-6.52,6.52-17.091,0-23.611c-6.519-6.52-17.091-6.52-23.611,0
                      L66.107,163.499c-0.217,0.217-0.407,0.45-0.61,0.675H38.957C17.476,164.174,0,181.65,0,203.13v22.261
                      c0,20.461,15.855,37.287,35.924,38.84l32,192.003c4.043,24.251,24.82,41.853,49.406,41.853H399.56
                      c24.765,0,46.081-18.488,49.584-43.004l27.268-190.88c19.91-1.714,35.587-18.467,35.587-38.812V203.13
                      C512,181.65,494.524,164.174,473.043,164.174z M478.609,225.391c0,3.069-2.497,5.565-5.565,5.565c-5.126,0-159.642,0-166.956,0
                      c-9.22,0-16.696,7.475-16.696,16.696c0,9.22,7.475,16.696,16.696,16.696h136.576L416.09,450.362
                      c-1.168,8.172-8.273,14.334-16.529,14.334H117.33c-8.195,0-15.121-5.867-16.469-13.951L69.796,264.348h136.117
                      c9.22,0,16.696-7.475,16.696-16.696c0-9.22-7.475-16.696-16.696-16.696c-7.325,0-161.852,0-166.956,0
                      c-3.069,0-5.565-2.497-5.565-5.565V203.13c0-3.069,2.497-5.565,5.565-5.565h434.087c3.069,0,5.565,2.497,5.565,5.565V225.391z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M155.826,297.739c-9.22,0-16.696,7.475-16.696,16.696v100.174c0,9.22,7.475,16.696,16.696,16.696
                      s16.696-7.475,16.696-16.696V314.434C172.522,305.214,165.047,297.739,155.826,297.739z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M256,297.739c-9.22,0-16.696,7.475-16.696,16.696v100.174c0,9.22,7.475,16.696,16.696,16.696
                      c9.22,0,16.696-7.475,16.696-16.696V314.434C272.696,305.214,265.22,297.739,256,297.739z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M356.174,297.739c-9.22,0-16.696,7.475-16.696,16.696v100.174c0,9.22,7.475,16.696,16.696,16.696
                      c9.22,0,16.696-7.475,16.696-16.696V314.434C372.87,305.214,365.394,297.739,356.174,297.739z"/>
                  </g>
                </g>
              </svg>
            </button>
            <div class="page-header__basket basket">
              <ul class="basket__list">
                <li class="basket__item">
                  <a class="basket__left button" href="/">
                    <picture class="basket__picture picture">
                      <source srcset="img/basket-1.webp" type="image/webp">

                      <img width="68" height="90" src="img/basket-1.png" alt="CBD CHARCOAL FACE MASK BROAD SPECTRUM">
                    </picture>

                    <h3 class="basket__title">
                      CBD CHARCOAL FACE MASK BROAD SPECTRUM
                    </h3>
                  </a>

                  <div class="basket__right">
                    <p class="basket__right-text"><span class="basket__count">1</span></p>
                    <p class="basket__right-text"><span class="basket__price">7.5</span>$</p>
                  </div>
                </li>
                <li class="basket__item">
                  <a class="basket__left button" href="/">
                    <picture class="basket__picture picture">
                      <source srcset="img/basket-2.webp" type="image/webp">

                      <img width="63" height="84" src="img/basket-2.png" alt="CBD CHARCOAL FACE MASK BROAD SPECTRUM">
                    </picture>

                    <h3 class="basket__title">
                      CBD CHARCOAL FACE MASK BROAD SPECTRUM
                    </h3>
                  </a>

                  <div class="basket__right">
                    <p class="basket__right-text"><span class="basket__count">1</span></p>
                    <p class="basket__right-text"><span class="basket__price">4.5</span>$</p>
                  </div>
                </li>
                <li class="basket__item">
                  <a class="basket__left button" href="/">
                    <picture class="basket__picture picture">
                      <source srcset="img/basket-3.webp" type="image/webp">

                      <img width="47" height="61" src="img/basket-3.png" alt="CBD CHARCOAL FACE MASK BROAD SPECTRUM">
                    </picture>

                    <h3 class="basket__title">
                      CBD CHARCOAL FACE MASK BROAD SPECTRUM
                    </h3>
                  </a>

                  <div class="basket__right">
                    <p class="basket__right-text"><span class="basket__count">1</span></p>
                    <p class="basket__right-text"><span class="basket__price">10.5</span>$</p>
                  </div>
                </li>
              </ul>
              <div class="basket__bottom">
                <div class="basket__total-wrapper">
                  <p><span>Total:</span></p>
                  <p><span class="basket__total">25.5</span>$</p>
                </div>
                <a class="basket__link button-yellow button" href="cart-1.php">Cart</a>
                <a class="basket__link button-yellow button" href="checkout.php">Checkout</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </header>

    <!-- end header -->
