<?php
  $title = "Skincare";
  include("header.php");
 ?>

    <main class="page-main">
      <section class="banner">
        <div class="banner__wrapper">
          <picture class="picture">
            <source srcset="img/banner--skincare.webp" type="image/webp">
            <img width="1139" height="209" src="img/banner--skincare.jpg" alt="img">
          </picture>
        </div>
      </section>

      <section class="pagination">
        <div class="pagination__wrapper">
          <h1 class="pagination__title">Skincare</h1>

          <ul class="pagination__list">
            <li>
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="skincare.php">Skincare</a>
            </li>
          </ul>
        </div>
      </section>

      <section class="categories categories--skincare">
        <h2 class="visually-hidden">List of Skincare</h2>
        <div class="categories__wrapper">
          <p class="categories__description categories__description--skincare">
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
          </p>

          <div class="sort">
            <form class="sort__form" action="#" method="get">
              <fieldset class="sort__item">
                <legend class="sort__title">Sort by</legend>

                <div class="select">
                  <p class="select__top"></p>
                  <ul class="select__list">
                    <li class="select__item active">
                      <label for="option-1">Low to high</label>
                      <input class="visually-hidden" type="radio" name="low-or-high" value="1" id="option-1" checked>
                    </li>
                    <li class="select__item">
                      <label for="option-2">High to low</label>
                      <input class="visually-hidden" type="radio" name="low-or-high" value="2" id="option-2">
                    </li>
                  </ul>
                </div>
                <span class="select__overlay"></span>
              </fieldset>
              <fieldset class="sort__item">
                <legend class="sort__title">Price range</legend>

                <div class="range-slider range-slider--sorts">
                  <input class="range-input" value="0" min="0" max="300" step="1" type="range">
                  <input class="range-input" value="300" min="0" max="300" step="1" type="range">
                  <span class="range-green range-green--sorts"></span>

                  <label class="visually-hidden" for="price-min">Min price</label>
                  <input class="range-number range-min range-number--sorts" id="price-min" type="number" name="price-min" min="0" max="300" value="0">

                  <label class="visually-hidden" for="price-max">Max price</label>
                  <input class="range-number range-max range-number--sorts" id="price-max" type="number" name="price-max" min="0" max="300" value="300">
                </div>
              </fieldset>
              <fieldset class="sort__item">
                <legend class="sort__title">Brand</legend>

                <div class="select">
                  <p class="select__top"></p>
                  <ul class="select__list">
                    <li class="select__item active">
                      <label for="brand-1">Paso</label>
                      <input class="visually-hidden" type="radio" name="brand" value="1" id="brand-1" checked>
                    </li>
                    <li class="select__item">
                      <label for="brand-2">Fourfive</label>
                      <input class="visually-hidden" type="radio" name="brand" value="2" id="brand-2">
                    </li>
                    <li class="select__item">
                      <label for="brand-3">Cubid</label>
                      <input class="visually-hidden" type="radio" name="brand" value="3" id="brand-3">
                    </li>
                    <li class="select__item">
                      <label for="brand-4">Body and Mine Botanicals</label>
                      <input class="visually-hidden" type="radio" name="brand" value="4" id="brand-4">
                    </li>
                    <li class="select__item">
                      <label for="brand-5">Swiss Extract</label>
                      <input class="visually-hidden" type="radio" name="brand" value="5" id="brand-5">
                    </li>
                    <li class="select__item">
                      <label for="brand-6">CBDfx</label>
                      <input class="visually-hidden" type="radio" name="brand" value="6" id="brand-6">
                    </li>
                    <li class="select__item">
                      <label for="brand-7">Boy Smells</label>
                      <input class="visually-hidden" type="radio" name="brand" value="7" id="brand-7">
                    </li>
                    <li class="select__item">
                      <label for="brand-8">Happease</label>
                      <input class="visually-hidden" type="radio" name="brand" value="8" id="brand-8">
                    </li>
                  </ul>
                </div>
                <span class="select__overlay"></span>
              </fieldset>
              <button class="sort__reset button" type="reset" name="button">Reset setings</button>
            </form>
          </div>

          <ul class="skincare products-list">
            <?php $i = 1; ?>
            <?php while ($i < 12) : ?>

              <li class="skincare__item products-list__item">
                <a class="skincare__link products-list__link button" href="/product-<?= $i ?>.php">
                  <picture class="skincare__picture products-list__picture picture">
                    <source srcset="img/product-<?= $i ?>.webp" type="image/webp">

                    <img width="281" height="188" src="img/product-<?= $i ?>.png" alt="img">
                  </picture>

                  <h3 class="skincare__title products-list__title">CBD CHARCOAL FACE MASK BROAD SPECTRUM</h3>

                  <p class="skincare__rating products-list__rating rating">
                    <svg viewBox="0 -10 511.98685 511" xmlns="http://www.w3.org/2000/svg">
                      <path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"/>
                    </svg>

                    <span>4.7</span>
                  </p>
                </a>

                <p class="skincare__price products-list__price ">
                  <span>6.99</span>$
                </p>

                <button class="skincare__cart products-list__cart button button-yellow" type="button" name="add-to-cart" data-product="<?= $i ?>">Add to cart</button>
              </li>
            <?php $i++; ?>
            <?php endwhile; ?>
          </ul>
        </div>
      </section>

    </main>

<?php
  include("footer.php");
 ?>
