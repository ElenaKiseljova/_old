<?php
  $title = "Tag 1";
  include("header.php");
 ?>

    <main class="page-main">
      <section class="banner">
        <div class="banner__wrapper">
          <picture class="picture">
            <source srcset="img/banner--tag.webp" type="image/webp">
            <img width="1139" height="209" src="img/banner--tag.jpg" alt="img">
          </picture>
        </div>
      </section>

      <section class="pagination pagination--blog">
        <div class="pagination__wrapper">
          <h1 class="pagination__title">Tag 1</h1>

          <ul class="pagination__list">
            <li>
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="tag1.php">Tag 1</a>
            </li>
          </ul>
        </div>
      </section>

      <section class="blog blog--tag">
        <div class="blog__wrapper">
          <ul class="blog__list">
            <?php $p = 1; ?>
            <?php while ($p < 5) : ?>

              <li class="blog__item">
                <a class="blog__link button" href="/blog-6.php">
                  <picture class="blog__picture picture">
                    <source srcset="img/blog-img-<?= $p ?>.webp" type="image/webp">

                    <img width="360" height="183" src="img/blog-img-<?= $p ?>.jpg" alt="img">
                  </picture>
                </a>
                <div class="blog__mobile">
                  <ul class="tags tags--blog-item">
                    <li class="tags__item">
                      <a href="#">
                        products
                      </a>
                    </li>
                    <li class="tags__item">
                      <a href="#">
                        products
                      </a>
                    </li>
                  </ul>
                  <a class="blog__link button" href="/blog-6.php">
                    <h3 class="blog__item-title">Blog article title</h3>
                  </a>

                  <p class="blog__text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                  </p>
                </div>
              </li>
            <?php $p++; ?>
            <?php endwhile; ?>
          </ul>
        </div>
      </section>
    </main>

<?php
  include("footer.php");
 ?>
