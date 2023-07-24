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
                <a class="button active" href="settings.php">
                  Settings
                </a>
              </li>
            </ul>
          </nav>

          <div class="customer__content">
            <div class="settings">
              <div class="settings__fields">
                <input class="settings__input" type="password" id="password" name="password" placeholder="Password" required>
                <label class="visually-hidden" for="password">Password</label>

                <input class="settings__input" type="password" id="repeatPass" name="repeatPass" placeholder="Repeat password" required>
                <label class="visually-hidden" for="repeatPass">Repeat password</label>

                <input class="settings__input" type="email" id="email" name="email" placeholder="E-mail" required>
                <label class="visually-hidden" for="email">E-mail</label>
              </div>

              <p class="settings__add-wrapper">
                <button class="settings__add button" type="button" name="addSocial">Connect Social Media +</button>
              </p>

              <button class="settings__button button button-yellow" type="button" name="save">Save</button>
              <button class="settings__button button button-yellow" type="button" name="edit">Edit</button>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
  include("footer.php");
 ?>
