<?php
  $title = "Collections";
  include("header.php");
 ?>

    <main class="page-main">

      <section class="pagination pagination--collections">
        <div class="pagination__wrapper">
          <h1 class="pagination__title">Collections</h1>

          <ul class="pagination__list">
            <li>
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="collections.php">Collections</a>
            </li>
          </ul>
        </div>
      </section>

      <section class="categories">
        <h2 class="visually-hidden">List of Collections</h2>
        <div class="categories__wrapper">
          <ul class="categories__list">
            <li class="categories__item stock">
              <a class="categories__link" href="category-1.php">
                <picture class="categories__picture picture">
                  <source srcset="img/cat-1.webp" type="image/webp">
                  <img width="143" height="190" src="img/cat-1.png" alt="img">
                </picture>

                <h3 class="categories__title">Skincare</h3>
              </a>
              <p class="categories__stock"><span>Best Price</span></p>
            </li>
            <li class="categories__item stock">
              <a class="categories__link" href="category-2.php">
                <picture class="categories__picture picture">
                  <source srcset="img/cat-2.webp" type="image/webp">
                  <img width="67" height="129" src="img/cat-2.png" alt="img">
                </picture>

                <h3 class="categories__title">Vaping</h3>
              </a>
              <p class="categories__stock">-10%</p>
            </li>
            <li class="categories__item">
              <a class="categories__link" href="category-3.php">
                <picture class="categories__picture picture">
                  <source srcset="img/cat-3.webp" type="image/webp">
                  <img width="163" height="163" src="img/cat-3.png" alt="img">
                </picture>

                <h3 class="categories__title">Oils</h3>
              </a>
              <p class="categories__stock"></p>
            </li>
            <li class="categories__item">
              <a class="categories__link" href="category-4.php">
                <picture class="categories__picture picture">
                  <source srcset="img/cat-4.webp" type="image/webp">
                  <img width="187" height="187" src="img/cat-4.png" alt="img">
                </picture>

                <h3 class="categories__title">Edibles</h3>
              </a>
              <p class="categories__stock"></p>
            </li>
            <li class="categories__item stock">
              <a class="categories__link" href="category-5.php">
                <picture class="categories__picture picture">
                  <source srcset="img/cat-5.webp" type="image/webp">
                  <img width="169" height="151" src="img/cat-5.png" alt="img">
                </picture>

                <h3 class="categories__title">Lifestyle</h3>
              </a>
              <p class="categories__stock"><span>Free <small>Shipping</small></span></p>
            </li>
            <li class="categories__item">
              <a class="categories__link" href="category-6.php">
                <picture class="categories__picture picture">
                  <source srcset="img/cat-6.webp" type="image/webp">
                  <img width="189" height="189" src="img/cat-6.png" alt="img">
                </picture>

                <h3 class="categories__title">Fitness</h3>
              </a>
              <p class="categories__stock"></p>
            </li>
            <li class="categories__item stock">
              <a class="categories__link" href="category-7.php">
                <picture class="categories__picture picture">
                  <source srcset="img/cat-7.webp" type="image/webp">
                  <img width="203" height="181" src="img/cat-7.png" alt="img">
                </picture>

                <h3 class="categories__title">Bundles</h3>
              </a>
              <p class="categories__stock">-5%</p>
            </li>
            <li class="categories__item">
              <a class="categories__link" href="category-8.php">
                <picture class="categories__picture picture">
                  <source srcset="img/cat-8.webp" type="image/webp">
                  <img width="173" height="231" src="img/cat-8.png" alt="img">
                </picture>

                <h3 class="categories__title">Wellness</h3>
              </a>
              <p class="categories__stock"></p>
            </li>
          </ul>
        </div>
      </section>

    </main>

<?php
  include("footer.php");
 ?>
