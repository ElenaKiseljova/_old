<?php
  $title = "Guest checkout";
  include("header.php");
 ?>

    <main class="page-main">
      <section class="pagination pagination--cart">
        <div class="pagination__wrapper">
          <h1 class="pagination__title">Guest checkout</h1>

          <ul class="pagination__list">
            <li>
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="checkout-guest.php">Guest checkout</a>
            </li>
          </ul>
        </div>
      </section>

      <section class="checkout">
        <div class="checkout__wrapper">
          <form class="checkout__form" action="#" method="post">
            <fieldset class="checkout__fields">
              <h2 class="checkout__title">Shipping</h2>

              <div class="checkout__inputs">
                <input class="checkout__input" type="text" id="fullname" name="fullname" placeholder="Full name" required>
                <label class="visually-hidden" for="fullname">Full name</label>

                <input class="checkout__input" type="text" id="county" name="county" placeholder="County" required>
                <label class="visually-hidden" for="county">County</label>

                <div class="checkout__select select">
                  <p class="checkout__select-top select__top"></p>
                  <ul class="checkout__select-list select__list">
                    <?php $z = 1 ?>

                    <?php while ($z < 11) : ?>
                    <li class="checkout__select-item select__item <?php if ($z === 1) echo "active"; ?>">
                      <label for="country-<?= $z ?>">Country: <?= $z ?></label>
                      <input class="visually-hidden" type="radio" name="country" value="<?= $z ?>" id="country-<?= $z ?>" <?php if ($z === 1) echo "checked"; ?> required>
                    </li>
                    <?php $z++; ?>
                    <?php endwhile; ?>
                  </ul>
                </div>
                <span class="select__overlay"></span>

                <input class="checkout__input" type="text" id="city" name="city" placeholder="City" required>
                <label class="visually-hidden" for="city">City</label>

                <input class="checkout__input" type="text" id="address" name="address" placeholder="Address" required>
                <label class="visually-hidden" for="address">Address</label>

                <input class="checkout__input" type="text" id="postalcode" name="postalcode" placeholder="Postal code" required>
                <label class="visually-hidden" for="postalcode">Postal code</label>

                <input class="checkout__input" type="tel" id="phone" name="fullname" placeholder="Phone" required>
                <label class="visually-hidden" for="phone">Phone</label>

                <input class="checkout__input" type="email" id="email" name="email" placeholder="Email" required>
                <label class="visually-hidden" for="email">Email</label>
              </div>

              <h2 class="checkout__title">Consent to</h2>

              <ul class="checkout__consent">
                <li class="checkout__consent-item">
                  <input class="visually-hidden" type="checkbox" id="privacy" name="consent" value="1" required>
                  <label class="checkout__consent-title" for="privacy">Privacy polici</label>
                </li>
                <li class="checkout__consent-item">
                  <input class="visually-hidden" type="checkbox" id="terms" name="consent" value="2" required>
                  <label class="checkout__consent-title" for="terms">Terms & conditions</label>
                </li>
                <li class="checkout__consent-item">
                  <input class="visually-hidden" type="checkbox" id="account" name="consent" value="3" required>
                  <label class="checkout__consent-title" for="account">Сreate an account</label>
                </li>
              </ul>

              <button class="checkout__fields-button button button-yellow" type="submit" name="order">Proceed to checkout</button>
            </fieldset>
            <fieldset class="checkout__fields">
              <h2 class="checkout__title">In your cart</h2>

              <ul class="checkout__info">
                <li class="checkout__info-item">
                  <h3 class="checkout__info-title">Subtotal</h3>
                  <p class="checkout__info-text"><span>120,44</span>$</p>
                </li>
                <li class="checkout__info-item">
                  <label class="visually-hidden" for="promocod">Promotional code</label>
                  <input class="checkout__info-input" type="text" name="promocod" placeholder="Promotional code" id="promocod">
                </li>
                <li class="checkout__info-item">
                  <h3 class="checkout__info-title">Estimated Shipping Charge</h3>
                  <p class="checkout__info-text"><span></span>Free Delivery</p>
                </li>
                <li class="checkout__info-item">
                  <h3 class="checkout__info-title">Total</h3>
                  <p class="checkout__info-text"><span>120,44</span>$</p>
                </li>
              </ul>

              <ul class="checkout__cart">
                <?php $k = 1; ?>
                <?php while ($k < 6) : ?>

                <li class="checkout__cart-item">
                  <h4 class="checkout__cart-title">Cannabis Tea – Loose Leaf – 10 Cups/15g Full Spectrum</h4>
                  <p class="checkout__cart-code">Product Code: #T - 40BMB</p>
                  <p class="checkout__cart-shipping">Shipping: free</p>
                  <p class="checkout__cart-qty">Qty: 1  7.99$</p>
                  <p class="checkout__cart-total">Total: 7.99$</p>
                </li>

                <?php $k++; ?>
                <?php endwhile; ?>
              </ul>
            </fieldset>
          </form>
        </div>
      </section>
    </main>

<?php
  include("footer.php");
 ?>
