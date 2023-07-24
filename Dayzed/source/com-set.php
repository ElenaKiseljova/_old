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
              <a href="com-set.php">Communication settings</a>
            </li>
          </ul>
        </div>
      </section>

      <section class="customer">
        <div class="customer__wrapper">
          <nav class="customer__navigation">
            <ul class="customer__list">
              <li class="customer__item">
                <a class="button" href="prev-orders.php">
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
                <a class="button active" href="com-set.php">
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
            <div class="communication">
              <div class="communication__fields">
                <input class="communication__input" type="tel" id="phone" name="phone" placeholder="Phone number" required>
                <label class="visually-hidden" for="phone">Telephone</label>

                <input class="communication__input" type="email" id="email" name="email" placeholder="E-mail" required>
                <label class="visually-hidden" for="email">E-mail</label>

                <input class="communication__input" type="text" id="facebook" name="facebook" placeholder="Facebook" required>
                <label class="visually-hidden" for="facebook">Facebook</label>

                <input class="communication__input" type="text" id="instagram" name="instagram" placeholder="Instagram" required>
                <label class="visually-hidden" for="instagram">Instagram</label>
              </div>

              <p class="communication__news">
                <input class="visually-hidden" id="newsletter" type="checkbox" name="newsletter">
                <label for="newsletter">I agree to receive the newsletter</label>
              </p>

              <button class="communication__button button button-yellow" type="button" name="save">Save</button>
              <button class="communication__button button button-yellow" type="button" name="edit">Edit</button>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
  include("footer.php");
 ?>
