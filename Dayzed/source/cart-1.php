<?php
  $title = "My cart";
  include("header.php");
 ?>

    <main class="page-main">
      <section class="pagination pagination--cart">
        <div class="pagination__wrapper">
          <h1 class="pagination__title">My cart</h1>

          <ul class="pagination__list">
            <li>
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="cart-1.php">My cart</a>
            </li>
          </ul>
        </div>
      </section>

      <section class="cart">
        <div class="cart__wrapper">
          <div class="basket basket--cart">
            <ul class="basket__list">
              <li class="basket__item">
                <div class="basket__left">
                  <a class="button" href="/">
                    <picture class="basket__picture picture">
                      <source srcset="img/basket-1.webp" type="image/webp">

                      <img width="68" height="90" src="img/basket-1.png" alt="img">
                    </picture>
                  </a>

                  <div class="basket__text">
                    <h3 class="basket__title">
                      CBD GUMMY BEARS 40MG (8CT POUCH) FULL SPECTRUM
                    </h3>

                    <p class="basket__code">
                      Product Code: #G - 40FX
                    </p>
                  </div>
                </div>


                <div class="basket__right">
                  <p class="count-product count-product--basket">
                    <button class="count-product__minus count-product__minus--basket button" type="button" name="minus">-</button>
                    <span class="count-product__count count-product__count--basket">1</span>
                    <button class="count-product__plus count-product__plus--basket button" type="button" name="plus">+</button>
                  </p>

                  <p class="basket__price-wrapper">Total: <span class="basket__price">17.98</span>$</p>
                </div>
              </li>
              <li class="basket__item">
                <div class="basket__left">
                  <a class="button" href="/">
                    <picture class="basket__picture picture">
                      <source srcset="img/basket-2.webp" type="image/webp">

                      <img width="68" height="90" src="img/basket-2.png" alt="img">
                    </picture>
                  </a>

                  <div class="basket__text">
                    <h3 class="basket__title">
                      CBD GUMMY BEARS 40MG (8CT POUCH) FULL SPECTRUM
                    </h3>

                    <p class="basket__code">
                      Product Code: #G - 40FX
                    </p>
                  </div>
                </div>


                <div class="basket__right">
                  <p class="count-product count-product--basket">
                    <button class="count-product__minus count-product__minus--basket button" type="button" name="minus">-</button>
                    <span class="count-product__count count-product__count--basket">1</span>
                    <button class="count-product__plus count-product__plus--basket button" type="button" name="plus">+</button>
                  </p>

                  <p class="basket__price-wrapper">Total: <span class="basket__price">17.98</span>$</p>
                </div>
              </li>
            </ul>
            <div class="basket__bottom">
              <ul class="basket__delivery">
                <li class="basket__delivery-item">
                  <input class="visually-hidden" id="del-1" type="radio" name="delivery" value="1" checked>
                  <label for="del-1">Normal Delivery 3.50$</label>
                </li>
                <li class="basket__delivery-item">
                  <input class="visually-hidden" id="del-2" type="radio" name="delivery" value="2">
                  <label for="del-2">Faster Delivery 6.50$ for next day</label>
                </li>
                <li class="basket__delivery-item">
                  <input class="visually-hidden" id="del-3" type="radio" name="delivery" value="3">
                  <label for="del-3">Free delivery</label>
                </li>
              </ul>
              <ul class="basket__total-list">
                <li class="basket__total-item">
                  <p><span>Sub Total</span></p>
                  <p><span class="basket__sub-total">26.97</span>$</p>
                </li>
                <li class="basket__total-item">
                  <p><span>Shipping charge</span></p>
                  <p><span class="basket__shipping">3.50</span>$</p>
                </li>
                <li class="basket__total-item">
                  <p><span>Total</span></p>
                  <p><span class="basket__total">30.47</span>$</p>
                </li>
              </ul>

              <p class="basket__button-wrapper basket__button-wrapper--promocod">
                <label class="visually-hidden" for="promocod">Promotional code</label>
                <input class="basket__promocod" type="text" name="promocod" value="" placeholder="Promotional code" id="promocod">
              </p>

              <p class="basket__button-wrapper">
                <a class="basket__link button-yellow button" href="signup.php">Create account</a>
                <a class="basket__link button-yellow button" href="checkout-guest.php">Guest checkout</a>
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
  include("footer.php");
 ?>
