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
              <a class="tabs__link active" href="search.php">все</a>
            </li>
            <li class="tabs__item">
              <a class="tabs__link" href="search-1.php">публикации</a>
            </li>
            <li class="tabs__item">
              <a class="tabs__link" href="#">сериал</a>
            </li>
          </ul>
        </div>
      </section>

      <section class="results">
        <div class="results__wrapper">
          <ul class="results__list">
            <li class="results__item">
              <div class="results__left">
                <a class="results__link" href="#">
                  <h3 class="results__title">
                    Последствия динамики современного климата Севера для многолетнемерзлых пород
                  </h3>
                </a>
                <p class="results__text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis...
                </p>
              </div>

              <p class="results__type">
                публикации
              </p>
            </li>
            <li class="results__item">
              <div class="results__left">
                <a class="results__link" href="#">
                  <h3 class="results__title">
                    Последствия динамики современного климата Севера для многолетнемерзлых пород
                  </h3>
                </a>
                <p class="results__text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis...
                </p>
              </div>

              <p class="results__type">
                сериал
              </p>
            </li>
          </ul>
        </div>
      </section>
    </main>

<?php
  include("footer.php");
 ?>
