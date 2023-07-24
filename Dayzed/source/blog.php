<?php
  $title = "Blog";
  include("header.php");
 ?>

    <main class="page-main">

      <section class="pagination pagination--blog">
        <div class="pagination__wrapper">
          <h1 class="pagination__title">Blog</h1>

          <ul class="pagination__list">
            <li>
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="blog.php">Blog</a>
            </li>
          </ul>
        </div>
      </section>

      <section class="blog blog--blog">
        <div class="blog__wrapper">
          <ul class="blog__tags">
            <li class="blog__tags-item">
              <a class="button" href="tag1.php">
                #Tag 1
              </a>
            </li>
            <li class="blog__tags-item">
              <a class="button" href="tag1.php">
                #Tag 2
              </a>
            </li>
            <li class="blog__tags-item">
              <a class="button" href="tag1.php">
                #Tag 3
              </a>
            </li>
            <li class="blog__tags-item">
              <a class="button" href="tag1.php">
                #Tag 4
              </a>
            </li>
          </ul>

          <ul class="blog__list">
            <?php $p = 1; ?>
            <?php while ($p < 10) : ?>

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

          <div class="blog__pagination">
            <ul class="blog__pagination-list">
              <li class="blog__pagination-item">
                <a href="#">1</a>
              </li>
              <li class="blog__pagination-item">
                <a href="#">2</a>
              </li>
              <li class="blog__pagination-item">
                <a href="#">3</a>
              </li>
              <li class="blog__pagination-item">
                <a href="#">25</a>
              </li>
            </ul>

            <div class="blog__pagination-button">
              <button class="button" type="button" name="prev">prev</button>
              <span>|</span>
              <button class="button" type="button" name="next">next</button>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
  include("footer.php");
 ?>
