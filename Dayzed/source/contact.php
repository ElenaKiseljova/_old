<?php
  $title = "Contact";
  include("header.php");
 ?>

    <main class="page-main">

      <section class="pagination pagination--contact">
        <div class="pagination__wrapper">
          <h1 class="pagination__title">Contact</h1>

          <ul class="pagination__list">
            <li>
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </section>

      <section class="contact">
        <div class="contact__wrapper">
          <div class="contact__left">
            <h2 class="contact__title">A friendly hello and see you soon!</h2>

            <p class="contact__text">
              17 West Park Avenue
              St. Helier Jersey JE2 3PJ
            </p>
            <p class="contact__text">
              <span>If you are a high quality CBD brand please contact us on:</span>
              <br>
              <span>sales@dayzed.com</span>
            </p>
            <p class="contact__text">
              <span>For all other enquiries</span>
              <br>
              <span>info@dayzed.com</span>
            </p>
          </div>

          <div class="contact__right">
            <div class="contact__fields">
              <input class="contact__input" type="text" id="first-name" name="first-name" placeholder="First name*" required>
              <label class="visually-hidden" for="first-name">First name*</label>

              <input class="contact__input" type="text" id="last-name" name="last-name" placeholder="Last name*" required>
              <label class="visually-hidden" for="last-name">Last name*</label>

              <input class="contact__input" type="email" id="email" name="email" placeholder="E-Mail address*" required>
              <label class="visually-hidden" for="email">E-Mail address*</label>

              <input class="contact__input" type="text" id="order-number" name="order-number" placeholder="Order number" required>
              <label class="visually-hidden" for="order-number">Order number</label>

              <textarea class="contact__message" name="message" placeholder="Message"></textarea>
            </div>

            <p class="contact__mandatory">
              * Mandatory fields
            </p>

            <button class="contact__submit button button-yellow" type="submit" name="button">
              TRANSMISSION
              <svg class="contact__arrow" width="19px" height="19px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.49 31.49">
                <path d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
                  C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
                  c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
              </svg>
            </button>
          </div>

        </div>
      </section>
    </main>

<?php
  include("footer.php");
 ?>
