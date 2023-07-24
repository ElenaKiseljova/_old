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

      <section class="user user--payment">
        <div class="user__wrapper">
          <h1>Payment passed successfully</h1>
        </div>
      </section>
    </main>

<?php
  include("footer.php");
 ?>
