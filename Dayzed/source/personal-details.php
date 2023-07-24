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
              <a href="personal-details.php">Personal details</a>
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
                <a class="button active" href="personal-details.php">
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
            <div class="person">
              <div class="person__fields">
                <input class="person__input" type="text" id="firstname" name="firstname" placeholder="First name" required>
                <label class="visually-hidden" for="firstname">First name</label>

                <input class="person__input" type="text" id="lastname" name="lastname" placeholder="Last name" required>
                <label class="visually-hidden" for="lastname">Last name</label>

                <input class="person__input" type="text" id="birth" name="birth" placeholder="Date of Birth" required>
                <label class="visually-hidden" for="birth">Date of Birth</label>

                <input class="person__input" type="tel" id="phone" name="phone" placeholder="Phone number" required>
                <label class="visually-hidden" for="phone">Phone number</label>

                <div class="person__multi multi">
                  <p class="person__multi-top multi__top"><span>Pets: </span><span class="multi__checked"></span> </p>
                  <ul class="person__multi-list multi__list">
                    <?php $z = 1 ?>

                    <?php while ($z < 5) : ?>
                    <li class="person__multi-item multi__item">
                      <label for="pets-<?= $z ?>">cat <?= $z ?></label>
                      <input class="visually-hidden" type="checkbox" name="pets" value="<?= $z ?>" id="pets-<?= $z ?>">
                    </li>
                    <?php $z++; ?>
                    <?php endwhile; ?>
                  </ul>
                </div>
                <span class="multi__overlay"></span>
              </div>

              <button class="person__button button button-yellow" type="button" name="save">Save</button>
              <button class="person__button button button-yellow" type="button" name="edit">Edit</button>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
  include("footer.php");
 ?>
