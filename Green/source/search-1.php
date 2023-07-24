<?php
  $title = "Поиск по сайту";

  include("header.php");
 ?>

    <main class="page-main page-main--search">
      <canvas id="noise" class="noise"></canvas>

      <section class="top top--search">
        <div class="top__wrapper top__wrapper--search">
          <h4 class="brackets brackets--top">{<span>поиск</span>}</h4>

          <h1 class="top__title top__title--search">Климата Севера</h1>

          <ul class="tabs">
            <li class="tabs__item">
              <a class="tabs__link" href="search.php#">все</a>
            </li>
            <li class="tabs__item">
              <a class="tabs__link active" href="search-1.php">публикации</a>
            </li>
            <li class="tabs__item">
              <a class="tabs__link" href="#">сериал</a>
            </li>
          </ul>
        </div>
      </section>

      <section class="posts posts--search">
        <div class="posts__wrapper">
          <ul class="posts__list posts__list--search">
            <li class="posts__item posts__item--search">
              <a class="posts__link" href="publication.php">
                <picture class="posts__image">
                  <source srcset="img/item.webp" type="image/webp">

                  <img width="488" height="310" src="img/item.jpg" alt="img">
                </picture>
              </a>

              <p class="hashtag">
                <span class="hashtag__item">#спасипланету</span>
                <span class="hashtag__item">#спасипланету-2</span>
              </p>
              <a class="posts__link" href="publication.php">
                <h3 class="posts__item-title">Последствия динамики современного климата Севера для многолетнемерзлых пород</h3>
              </a>
              <p class="posts__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis...
              </p>
            </li>
            <li class="posts__item posts__item--search">
              <a class="posts__link" href="publication.php">
                <picture class="posts__image">
                  <source srcset="img/item-1.webp" type="image/webp">

                  <img width="488" height="310" src="img/item-1.jpg" alt="img">
                </picture>
              </a>

              <p class="hashtag">
                <span class="hashtag__item">#спасипланету</span>
                <span class="hashtag__item">#спасипланету-2</span>
              </p>
              <a class="posts__link" href="publication.php">
                <h3 class="posts__item-title">Последствия динамики современного климата Севера для многолетнемерзлых пород</h3>
              </a>
              <p class="posts__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis...
              </p>
            </li>
          </ul>
        </div>
      </section>
    </main>

<?php
  include("footer.php");
 ?>
