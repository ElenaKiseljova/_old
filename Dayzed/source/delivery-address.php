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
              <a href="delivery-address.php">Delivery addresses</a>
            </li>
          </ul>
        </div>
      </section>

      <section class="customer customer--address">
        <div class="customer__wrapper">
          <nav class="customer__navigation">
            <ul class="customer__list">
              <li class="customer__item">
                <a class="button" href="prev-orders.php">
                  Previous orders
                </a>
              </li>
              <li class="customer__item">
                <a class="button active" href="delivery-address.php">
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
            <?php $g = 1; ?>
            <?php while ($g < 3) : ?>
            <div class="delivery">
              <input class="visually-hidden" type="radio" name="address" id="address-<?= $g ?>" <?php if ($g === 1) echo "checked"; ?>>
              <label for="address-<?= $g ?>">Addresses <?= $g ?></label>

              <div class="delivery__fields">
                <label class="visually-hidden" for="add<?= $g ?>-index">Index</label>
                <input class="delivery__input" type="text" name="index" value="1894756" id="add<?= $g ?>-index" placeholder="Index" disabled>

                <label class="visually-hidden" for="add<?= $g ?>-county">County</label>
                <input class="delivery__input" type="text" name="index" value="Green garden" id="add<?= $g ?>-county" placeholder="County" disabled>

                <div class="delivery__select select disabled">
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
                <input class="delivery__input" type="text" name="index" value="London" id="add<?= $g ?>-city" placeholder="City" disabled>

                <label class="visually-hidden" for="add<?= $g ?>-street">Street</label>
                <input class="delivery__input" type="text" name="index" value="Baker street" id="add<?= $g ?>-street" placeholder="Street" disabled>

                <label class="visually-hidden" for="add<?= $g ?>-house">House number</label>
                <input class="delivery__input" type="text" name="index" value="15" id="add<?= $g ?>-house" placeholder="House number" disabled>

                <label class="visually-hidden" for="add<?= $g ?>-apartment">Apartment number</label>
                <input class="delivery__input" type="text" name="index" value="9" id="add<?= $g ?>-apartment" placeholder="Apartment number" disabled>
              </div>

              <button class="delivery__button button button-yellow" type="button" name="edit">Edit</button>
              <button class="delivery__button button button-yellow" type="button" name="delete">Delete</button>
              <button class="delivery__button button button-yellow" type="button" name="save">Save</button>
            </div>
            <?php $g++; ?>
            <?php endwhile; ?>

            <div class="delivery hidden">
              <input class="visually-hidden" type="radio" name="address" id="address-<?= $g ?>">
              <label for="address-<?= $g ?>">Addresses <?= $g ?></label>

              <div class="delivery__fields">
                <label class="visually-hidden" for="add<?= $g ?>-index">Index</label>
                <input class="delivery__input" type="text" name="index" value="" id="add<?= $g ?>-index" placeholder="Index">

                <label class="visually-hidden" for="add<?= $g ?>-county">County</label>
                <input class="delivery__input" type="text" name="index" value="" id="add<?= $g ?>-county" placeholder="County">

                <div class="delivery__select select">
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
                <input class="delivery__input" type="text" name="index" value="" id="add<?= $g ?>-city" placeholder="City">

                <label class="visually-hidden" for="add<?= $g ?>-street">Street</label>
                <input class="delivery__input" type="text" name="index" value="" id="add<?= $g ?>-street" placeholder="Street">

                <label class="visually-hidden" for="add<?= $g ?>-house">House number</label>
                <input class="delivery__input" type="text" name="index" value="" id="add<?= $g ?>-house" placeholder="House number">

                <label class="visually-hidden" for="add<?= $g ?>-apartment">Apartment number</label>
                <input class="delivery__input" type="text" name="index" value="" id="add<?= $g ?>-apartment" placeholder="Apartment number">
              </div>

              <button class="delivery__button button button-yellow" type="button" name="edit">Edit</button>
              <button class="delivery__button button button-yellow" type="button" name="delete">Delete</button>
              <button class="delivery__button button button-yellow" type="button" name="save">Save</button>
            </div>

            <button class="delivery__add button" type="button" name="add">+ Add address</button>
          </div>
        </div>
      </section>
    </main>

<?php
  include("footer.php");
 ?>
