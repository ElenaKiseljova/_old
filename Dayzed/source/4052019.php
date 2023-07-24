<?php
  $title = "Customer account page";
  include("header.php");
 ?>

    <main class="page-main">

      <section class="pagination pagination--customer">
        <div class="pagination__wrapper">
          <h1 class="pagination__title">Customer account page</h1>

          <ul class="pagination__list">
            <li>
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="prev-orders.php">Customer account page</a>
            </li>
            <li>
              <a href="prev-orders.php">Previous orders</a>
            </li>
            <li>
              <a href="4052019.php">Order 4/05/2019</a>
            </li>
          </ul>
        </div>
      </section>

      <section class="customer">
        <div class="customer__wrapper">
          <nav class="customer__navigation">
            <ul class="customer__list">
              <li class="customer__item">
                <a class="button active" href="prev-orders.php">
                  Previous orders
                </a>
              </li>
              <li class="customer__item">
                <a class="button" href="delivery-address.php">
                  Delivery addresses
                </a>
              </li>
              <li class="customer__item">
                <a class="button" href="personal-details.php">
                  Personal details
                </a>
              </li>
              <li class="customer__item">
                <a class="button" href="com-set.php">
                  Communication settings
                </a>
              </li>
              <li class="customer__item">
                <a class="button" href="fav-prod.php">
                  Favourite products and topics
                </a>
              </li>
              <li class="customer__item">
                <a class="button" href="settings.php">
                  Settings
                </a>
              </li>
            </ul>
          </nav>

          <div class="customer__content">
            <div class="orders-page">
              <header class="orders-page__header">
                  <h2 class="orders-page__title">
                    Order
                    <span>4/05/2019</span>
                  </h2>
                  <p class="orders-page__price">
                    <span>20.97</span>
                    $
                  </p>
              </header>

              <div class="orders-page__products">
                <h3 class="orders-page__item-text">
                  # 654684351
                </h3>

                <ul class="orders-page__products-list products-list">
                  <?php $i = 1; ?>
                  <?php while ($i < 4) : ?>

                    <li class="orders-page__products-item products-list__item">
                      <a class="products-list__link button" href="/product-<?= $i ?>.php">
                        <picture class="orders-page__products-picture products-list__picture picture">
                          <source srcset="img/product-<?= $i ?>.webp" type="image/webp">

                          <img width="281" height="188" src="img/product-<?= $i ?>.png" alt="img">
                        </picture>

                        <h3 class="orders-page__products-title products-list__title">CBD CHARCOAL FACE MASK BROAD SPECTRUM</h3>

                        <p class="orders-page__products-rating products-list__rating rating">
                          <svg viewBox="0 -10 511.98685 511" xmlns="http://www.w3.org/2000/svg">
                            <path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"/>
                          </svg>

                          <span>4.7</span>
                        </p>
                      </a>

                      <p class="orders-page__products-price products-list__price">
                        <span>6.99</span>$
                      </p>
                    </li>
                  <?php $i++; ?>
                  <?php endwhile; ?>
                </ul>
              </div>

              <div class="orders-page__address">
                  <h3 class="orders-page__address-title">Address</h3>

                  <p class="orders-page__address-text">
                    <span>1894756, </span>
                    <span>Green garden, </span>
                    <span>UK, </span>
                    <span>London, </span>
                    <span>Baker street, </span>
                    <span>15, </span>
                    <span>9</span>
                  </p>
              </div>
              <a class="orders-page__repeat button button-yellow" href="cart-2.php">Repeat order</a>

            </div>
          </div>
        </div>
      </section>
    </main>

<?php
  include("footer.php");
 ?>
