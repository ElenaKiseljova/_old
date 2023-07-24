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
            <ul class="orders">
              <?php $k = 1; ?>
              <?php while ($k < 4) : ?>

                <li class="orders__item">
                  <header class="orders__header">
                    <h2 class="orders__title">
                      Order
                      <span>4/05/2019</span>
                    </h2>
                    <p class="orders__price">
                      <span>175</span>
                      $
                    </p>
                  </header>

                  <div class="orders__info">
                    <h3 class="orders__item-title">
                      # 654684351
                    </h3>

                    <p class="orders__item-text">
                      ORGANIC COLD PRESSED HEMP SEED OIL
                    </p>
                    <p class="orders__item-text">
                      CALM CBD HEMP OIL 500MG
                    </p>
                    <p class="orders__item-text">
                      THC FREE BROAD SPECTRUM HEMP OIL
                    </p>
                  </div>

                  <a class="orders__repeat button button-yellow" href="4052019.php">Repeat order</a>
                </li>

              <?php $k++; ?>
              <?php endwhile; ?>
            </ul>
          </div>
        </div>
      </section>
    </main>

<?php
  include("footer.php");
 ?>
