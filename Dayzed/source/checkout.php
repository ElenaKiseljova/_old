<?php
  $title = "Checkout";
  include("header.php");
 ?>

    <main class="page-main">
      <section class="pagination pagination--cart">
        <div class="pagination__wrapper">
          <h1 class="pagination__title">Checkout</h1>

          <ul class="pagination__list">
            <li>
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="checkout.php">Checkout</a>
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

                <div class="checkout__select select">
                  <p class="checkout__select-top select__top"></p>
                  <ul class="checkout__select-list select__list">
                    <?php $z = 1 ?>

                    <?php while ($z < 5) : ?>
                    <li class="checkout__select-item select__item <?php if ($z === 1) echo "active"; ?>">
                      <label for="address-<?= $z ?>">Address: <?= $z ?></label>
                      <input class="visually-hidden" type="radio" name="address" value="<?= $z ?>" id="address-<?= $z ?>" <?php if ($z === 1) echo "checked"; ?> required>
                    </li>
                    <?php $z++; ?>
                    <?php endwhile; ?>
                  </ul>
                </div>
                <span class="select__overlay"></span>

                <button class="checkout__more button" type="button" name="add-address">Add address</button>
                <button class="checkout__edit button" type="button" name="edit-address">Edit address</button>

                <div class="delivery delivery--checkout hidden">
                  <div class="delivery__fields">
                    <label class="visually-hidden" for="add<?= $g ?>-index">Index</label>
                    <input class="delivery__input delivery__input--checkout" type="text" name="index" value="" id="add<?= $g ?>-index" placeholder="Index">

                    <label class="visually-hidden" for="add<?= $g ?>-county">County</label>
                    <input class="delivery__input delivery__input--checkout" type="text" name="index" value="" id="add<?= $g ?>-county" placeholder="County">

                    <div class="delivery__select delivery__select--checkout select">
                      <p class="delivery__select-top select__top"></p>
                      <ul class="delivery__select-list select__list">
                        <li class="delivery__select-item select__item active">
                          <label for="country<?= $g ?>-1">UK</label>
                          <input class="visually-hidden" type="radio" name="country<?= $g ?>" value="1" id="country<?= $g ?>-1" checked>
                        </li>
                        <li class="delivery__select-item select__item">
                          <label for="country<?= $g ?>-2">USA</label>
                          <input class="visually-hidden" type="radio" name="country<?= $g ?>" value="2" id="country<?= $g ?>-2">
                        </li>
                      </ul>
                    </div>
                    <span class="select__overlay"></span>

                    <label class="visually-hidden" for="add<?= $g ?>-city">City</label>
                    <input class="delivery__input delivery__input--checkout" type="text" name="index" value="" id="add<?= $g ?>-city" placeholder="City">

                    <label class="visually-hidden" for="add<?= $g ?>-street">Street</label>
                    <input class="delivery__input delivery__input--checkout" type="text" name="index" value="" id="add<?= $g ?>-street" placeholder="Street">

                    <label class="visually-hidden" for="add<?= $g ?>-house">House number</label>
                    <input class="delivery__input delivery__input--checkout" type="text" name="index" value="" id="add<?= $g ?>-house" placeholder="House number">

                    <label class="visually-hidden" for="add<?= $g ?>-apartment">Apartment number</label>
                    <input class="delivery__input delivery__input--checkout" type="text" name="index" value="" id="add<?= $g ?>-apartment" placeholder="Apartment number">
                  </div>

                  <button class="delivery__button button button-yellow" type="button" name="delete">Delete</button>
                  <button class="delivery__button button button-yellow" type="button" name="save">Save</button>
                </div>

                <input class="checkout__input" type="tel" id="phone" name="fullname" placeholder="Phone" required>
                <label class="visually-hidden" for="phone">Phone</label>

                <input class="checkout__input" type="email" id="email" name="email" placeholder="Email" required>
                <label class="visually-hidden" for="email">Email</label>
              </div>

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
                <?php while ($k < 4) : ?>

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
