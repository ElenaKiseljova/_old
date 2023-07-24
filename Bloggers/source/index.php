<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">

    <link rel="stylesheet" href="css/style.min.css">

    <title>Поиск блогера</title>
  </head>
  <body>
    <!-- header -->
    <header class="page-header">
      <div class="page-header__wrapper">
        <a class="page-header__logo-link button" href="/">
          <picture class="page-header__picture picture">
            <source srcset="img/logo-h.webp" type="image/webp">

              <img width="207" height="28" src="img/logo-h.png" alt="Логотип">
          </picture>
        </a>

        <button class="page-header__menu button" type="button" name="menu"><span class="visually-hidden">Меню</span></button>

        <nav class="page-header__navigation">
          <ul class="page-header__site-list">
            <li class="page-header__site-item">
              <a class="button" href="https://www.bloggermall.com.ua/">Главная</a>
            </li>
            <li class="page-header__site-item">
              <a class="button" href="">База знаний</a> <!-- https://www.bloggermall.com.ua/baza_znaniy/ -->
              <ul class="page-header__sub-list">
                <li class="page-header__sub-item">
                  <a class="button" href="https://www.bloggermall.com.ua/blogeram/">Блогерам</a>
                </li>
                <li class="page-header__sub-item">
                  <a class="button" href="https://www.bloggermall.com.ua/reklamodatelyam/">Рекламодателям</a>
                </li>
                <li class="page-header__sub-item">
                  <a class="button" href="https://www.bloggermall.com.ua/good-choice/">Верное решение</a>
                </li>
                <li class="page-header__sub-item">
                  <a class="button" href="https://www.bloggermall.com.ua/kak-effektivno-rabotat-s-blogerami/">Как эффективно работать с блогерами</a>
                </li>
              </ul>
            </li>
            <li class="page-header__site-item active">
              <a class="button" href="https://www.bloggermall.com.ua/search-bloggers/">Блогеры</a>
            </li>
            <li class="page-header__site-item">
              <a class="button" href="https://www.bloggermall.com.ua/my-account/">Учетная запись</a>
            </li>
          </ul>
          <ul class="page-header__user-list">
            <li class="page-header__user-item">
              <button class="page-header__login button" type="button" name="login">Войти</button>
            </li>
            <li class="page-header__user-item">
              <a class="page-header__registration button" href="https://www.bloggermall.com.ua/authentication/?step=1">Регистрация</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- end header -->

    <main class="page-main">
      <h1 class="visually-hidden">Поиск блоггеров</h1>
      <section class="top">
        <h2 class="top__title"><span>Блогеры</span></h2>

        <ul class="top__breadcrumbs">
          <li class="top__breadcrumbs-item">
            <a href="/">Home</a>
          </li>
          <li class="top__breadcrumbs-item active">
            <a>Блогеры</a>
          </li>
        </ul>
      </section>

      <article class="catalog">
        <h2 class="visually-hidden">База блогеров</h2>

        <div class="catalog__wrapper">
          <aside class="catalog__filters filters">
            <h3 class="visually-hidden">Блок фильтров</h3>

            <form class="filters__form" action="#" method="get">
              <fieldset class="filters__section">
                <legend class="filters__title">Коэффициент вовлечености (ER), %</legend>

                <div class="filters__item">
                  <div class="range-slider">
                    <input class="range-input" value="0" min="0" max="100" step="1" type="range">
                    <input class="range-input" value="100" min="0" max="100" step="1" type="range">
                    <span class="range-green"></span>

                    <label class="range-label" for="min-ER">
                      От
                    </label>
                    <label class="range-label" for="max-ER">
                      До
                    </label>

                    <input class="range-number range-min" id="min-ER" type="number" name="min-ER" min="0" max="100" value="0">
                    <input class="range-number range-max" id="max-ER" type="number" name="max-ER" min="0" max="100" value="100">
                  </div>
                </div>
              </fieldset>
              <fieldset class="filters__section">
                <legend class="filters__title">Стоимость, &#8372;</legend>

                <div class="filters__item">
                  <ul class="filters__list">
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="radio" name="type-price" value="stories" id="stories" checked>
                      <label class="filters__list-label" for="stories">Цена за 1 stories</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="radio" name="type-price" value="photo-post" id="photo-post">
                      <label class="filters__list-label" for="photo-post">Цена за фото-пост</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="radio" name="type-price" value="post-and-stories" id="post-and-stories">
                      <label class="filters__list-label" for="post-and-stories">Цена за пост + stories</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="radio" name="type-price" value="3-stories" id="3-stories">
                      <label class="filters__list-label" for="3-stories">Цена за 3 stories</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="radio" name="type-price" value="video-post" id="video-post">
                      <label class="filters__list-label" for="video-post">Цена за видео-пост</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="radio" name="type-price" value="screen-profile" id="screen-profile">
                      <label class="filters__list-label" for="screen-profile">Цена за скрин профиля</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="radio" name="type-price" value="unpack" id="unpack">
                      <label class="filters__list-label" for="unpack">Цена за распаковку</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="radio" name="type-price" value="giveaway" id="giveaway">
                      <label class="filters__list-label" for="giveaway">Цена за Giveaway</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="radio" name="type-price" value="advertisement" id="advertisement">
                      <label class="filters__list-label" for="advertisement">Цена за рекламу личного аккаунта</label>
                    </li>
                  </ul>
                  <div class="range-slider">
                    <input class="range-input" value="0" min="0" max="30000" step="1" type="range">
                    <input class="range-input" value="30000" min="0" max="30000" step="1" type="range">
                    <span class="range-green"></span>

                    <label class="range-label" for="min-price">
                      От
                    </label>
                    <label class="range-label" for="max-price">
                      До
                    </label>

                    <input class="range-number range-min" id="min-price" type="number" name="min-price" min="0" max="30000" value="0">
                    <input class="range-number range-max" id="max-price" type="number" name="max-price" min="0" max="30000" value="30000">
                  </div>
                </div>
              </fieldset>

              <fieldset class="filters__section">
                <legend class="filters__title">Количество подписчиков</legend>

                <div class="filters__item">
                  <ul class="filters__list">
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="radio" name="count-followers" value="less-than-5k" id="less-than-5k" checked>
                      <label class="filters__list-label" for="less-than-5k">До 5 тыс.</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="radio" name="count-followers" value="5k-20k" id="5k-20k">
                      <label class="filters__list-label" for="5k-20k">5 тыс. - 20 тыс.</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="radio" name="count-followers" value="20k-100k" id="20k-100k">
                      <label class="filters__list-label" for="20k-100k">20 тыс. - 100 тыс.</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="radio" name="count-followers" value="100k-500k" id="100k-500k">
                      <label class="filters__list-label" for="100k-500k">100 тыс. - 500 тыс.</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="radio" name="count-followers" value="500k-1mln" id="500k-1mln">
                      <label class="filters__list-label" for="500k-1mln">500 тыс. - 1 млн.</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="radio" name="count-followers" value="more-than-1mln" id="more-than-1mln">
                      <label class="filters__list-label" for="more-than-1mln">Более 1 млн.</label>
                    </li>
                  </ul>
                </div>
              </fieldset>

              <fieldset class="filters__section">
                <legend class="filters__title">Город блогера</legend>

                <div class="filters__item">
                  <div class="filters__city-wrapper">
                    <input class="filters__city filters__city-blogers" type="text" name="city-of-blogers" placeholder="Начните вводить название...">

                    <ul class="filters__list filters__list--city filters__list--city-blogers">
                      <?php $n = 1 ?>
                      <?php while ($n < 15) : ?>
                      <li class="filters__list-item">
                        <input class="visually-hidden" type="checkbox" name="city-blogers" value="<?= $n ?>-city-blogers" id="<?= $n ?>-city-blogers">
                        <label class="filters__list-label" for="<?= $n ?>-city-blogers">Кривой Рог</label>
                      </li>
                    <?php $n++; ?>
                    <?php endwhile; ?>
                    </ul>
                    <ul class="filters__list filters__list--checked filters__list--checked-blogers">
                    </ul>
                  </div>
                </div>
              </fieldset>

              <fieldset class="filters__section">
                <legend class="filters__title">Тематика</legend>

                <div class="filters__item">
                  <ul class="filters__list filters__list--thems">
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="checkbox" name="thems-item" value="Beaty" id="Beaty" checked>
                      <label class="filters__list-label" for="Beaty">Beaty-блог</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="checkbox" name="thems-item" value="Fashion" id="Fashion">
                      <label class="filters__list-label" for="Fashion">Fashion-блог</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="checkbox" name="thems-item" value="Food" id="Food">
                      <label class="filters__list-label" for="Food">Food-блог (еда, рецепты, рестораны)</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="checkbox" name="thems-item" value="health" id="health">
                      <label class="filters__list-label" for="health">Здоровье</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="checkbox" name="thems-item" value="kids" id="kids">
                      <label class="filters__list-label" for="kids">Дети</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="checkbox" name="thems-item" value="travel" id="travel">
                      <label class="filters__list-label" for="travel">Тревел-блог</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="checkbox" name="thems-item" value="creation" id="creation">
                      <label class="filters__list-label" for="creation">Творчество</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="checkbox" name="thems-item" value="sport" id="sport">
                      <label class="filters__list-label" for="sport">Спорт</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="checkbox" name="thems-item" value="design" id="design">
                      <label class="filters__list-label" for="design">Дизайн</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="checkbox" name="thems-item" value="politics" id="politics">
                      <label class="filters__list-label" for="politics">Политика</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="checkbox" name="thems-item" value="animals" id="animals">
                      <label class="filters__list-label" for="animals">Животные</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="checkbox" name="thems-item" value="technology" id="technology">
                      <label class="filters__list-label" for="technology">Техника</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="checkbox" name="thems-item" value="IT" id="IT">
                      <label class="filters__list-label" for="IT">IT и digital</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="checkbox" name="thems-item" value="home" id="home">
                      <label class="filters__list-label" for="home">Дом/ремонт</label>
                    </li>
                  </ul>
                </div>
              </fieldset>

              <fieldset class="filters__section">
                <legend class="filters__title">Целевая аудитория</legend>

                <div class="filters__item">
                  <h4 class="filters__audience">Возраст</h4>

                  <ul class="filters__list">
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="checkbox" name="age" value="18-less-24" id="18-less-24" checked>
                      <label class="filters__list-label" for="18-less-24">18-24</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="checkbox" name="age" value="25-less-34" id="25-less-34">
                      <label class="filters__list-label" for="25-less-34">25-34</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="checkbox" name="age" value="35-less-44" id="35-less-44">
                      <label class="filters__list-label" for="35-less-44">35-44</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="checkbox" name="age" value="45-less-54" id="45-less-54">
                      <label class="filters__list-label" for="45-less-54">45-54</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="checkbox" name="age" value="55-less-65" id="55-less-65">
                      <label class="filters__list-label" for="55-less-65">55-64</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="checkbox" name="age" value="more-than-65" id="more-than-65">
                      <label class="filters__list-label" for="more-than-65">65+</label>
                    </li>
                  </ul>

                  <h4 class="filters__audience">Пол</h4>

                  <ul class="filters__list">
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="checkbox" name="gender" value="male" id="male" checked>
                      <label class="filters__list-label" for="male">Мужчины</label>
                    </li>
                    <li class="filters__list-item">
                      <input class="visually-hidden" type="checkbox" name="gender" value="female" id="female">
                      <label class="filters__list-label" for="female">Женщины</label>
                    </li>
                  </ul>

                  <h4 class="filters__audience">Город с наибольшим количеством аудитории</h4>

                  <div class="filters__city-wrapper">
                    <input class="filters__city filters__city-audience" type="text" name="city-of-audience" placeholder="Начните вводить название...">

                    <ul class="filters__list filters__list--city filters__list--city-audience">
                      <?php $n = 1 ?>
                      <?php while ($n < 15) : ?>
                      <li class="filters__list-item">
                        <input class="visually-hidden" type="checkbox" name="city-audience" value="<?= $n ?>-city-audience" id="<?= $n ?>-city-audience">
                        <label class="filters__list-label" for="<?= $n ?>-city-audience">Кривой Рог</label>
                      </li>
                    <?php $n++; ?>
                    <?php endwhile; ?>
                    </ul>
                    <ul class="filters__list filters__list--checked filters__list--checked-audience">
                    </ul>
                  </div>
                </div>
              </fieldset>

              <p class="filters__end">
                Нажмите кнопку "Применить фильтр", чтобы применить последние изменения, внесенные вами
              </p>

              <button class="catalog__filters-submit filters-submit button" type="submit" name="filters">Применить фильтры</button>
            </form>
          </aside>

          <section class="catalog__list">
            <h3 class="visually-hidden">Список блогеров</h3>

            <header class="catalog__sort">
              <h4 class="catalog__sort-title">Сортировка:</h4>

              <ul class="catalog__sort-list">
                <li class="catalog__sort-item active">
                  <button class="catalog__sort-button button" type="button" name="default">По умолчанию</button>
                </li>
                <li class="catalog__sort-item">
                  <button class="catalog__sort-button button" type="button" name="follow">По количеству подписчиков</button>
                </li>
                <li class="catalog__sort-item">
                  <button class="catalog__sort-button button" type="button" name="audit">По количеству аудитории</button>
                </li>
                <li class="catalog__sort-item">
                  <button class="catalog__sort-button button" type="button" name="ER">По ER</button>
                </li>
                <li class="catalog__sort-item">
                  <button class="catalog__sort-button button" type="button" name="price">По цене</button>
                </li>
              </ul>
            </header>


            <?php
              /* Рейтинг блогеров */

              $rating = array(80, 50, 30, 25, 19, 90, 99, 60);

              /* счетчик для аватаров блогеров */

              $i = 1;
            ?>
            <ul class="catalog__bloger-list">
              <?php foreach ($rating as $step): ?>
                <li class="catalog__bloger-item">
                  <div class="catalog__bloger-left">
                    <p class="catalog__bloger-status
                      <?php
                        if (rand(0, 1)) {
                          echo "online";
                        } else {
                          echo "offline";
                        }
                      ?>">
                      <span>Online</span>
                      <span>Offline</span>
                    </p>
                    <picture class="catalog__bloger-picture picture">
                      <source srcset="img/bloger-<?= $i ?>.webp" type="image/webp">

                      <img width="142" height="142" src="img/bloger-<?= $i ?>.png" alt="Аватар блогера">
                    </picture>

                    <button class="catalog__bloger-favorite button" type="button" name="favorite"><span>В избранные</span></button>
                  </div>
                  <div class="catalog__bloger-center">
                    <h4 class="catalog__bloger-name">Alya</h4>
                    <p class="catalog__bloger-subname">
                      <span class="catalog__bloger-city">Белгород-Днестровский</span>
                      <span class="catalog__bloger-age">27 лет</span>
                    </p>

                    <ul class="catalog__bloger-stat">
                      <li class="catalog__bloger-count">
                        <p class="catalog__bloger-number">100 225</p>
                        <h5 class="catalog__bloger-text">Подписчиков</h5>
                      </li>
                      <li class="catalog__bloger-count">
                        <p class="catalog__bloger-number">35%</p>
                        <h5 class="catalog__bloger-text">ER</h5>
                      </li>
                      <li class="catalog__bloger-count">
                        <p class="catalog__bloger-number">1000 &#8372;</p>
                        <h5 class="catalog__bloger-text">Пост</h5>
                      </li>
                      <li class="catalog__bloger-count">
                        <p class="catalog__bloger-number">1000 &#8372;</p>
                        <h5 class="catalog__bloger-text">Stories</h5>
                      </li>
                      <li class="catalog__bloger-count">
                        <p class="catalog__bloger-number">1000 &#8372;</p>
                        <h5 class="catalog__bloger-text">Пост + Stories</h5>
                      </li>
                    </ul>

                    <div class="catalog__bloger-wrapper">
                      <h5 class="catalog__bloger-title">Тематики:</h5>
                      <ul class="catalog__bloger-thems">
                        <li class="catalog__thems-item">Beauty-blog</li>
                        <li class="catalog__thems-item">Дети</li>
                        <li class="catalog__thems-item">Юмор</li>
                      </ul>
                    </div>
                  </div>
                  <div class="catalog__bloger-right">
                    <p class="catalog__reviews"><span>Отзывов: 286</span></p>

                    <!-- Длина окружности с радиусом 45px 282.743338823 -->

                    <svg class="catalog__chart" width="90px" height="90px" viewBox="0 0 110 110">
                      <circle class="chart-hole" cx="55" cy="55" r="45" fill="#fff"></circle>
                      <circle class="chart-segment" data-percent="<?= $step ?>" cx="55" cy="55" r="45" fill="transparent" stroke="#ffe500"></circle>
                      <circle class="chart-segment" data-percent="<?= (100 - $step) ?>" cx="55" cy="55" r="45" fill="transparent" stroke="#b3b0af"></circle>
                      <g class="chart-text">
                        <text class="catalog__chart-number" x="50%" y="50%">
                          <?= $step ?>%
                        </text>
                        <text class="catalog__chart-label" x="50%" y="50%">
                          Рейтинг
                        </text>
                      </g>
                    </svg>

                    <a class="catalog__more button" href="/freelancer-<?= $i ?>.php">Подробнее</a>
                  </div>
                </li>
              <?php $i++; ?>
              <?php endforeach; ?>
            </ul>

            <ul class="catalog__pagination-list">
              <li class="catalog__pagination-item">
                <a class="catalog__pagination-link button" href="#">
                  <span class="visually-hidden">Назад</span>
                </a>
              </li>

              <?php $pages = 5; $index = 1; ?>

              <?php while ($index < $pages): ?>
                <li class="catalog__pagination-item <?php if ($index == 2) echo 'active' ?>">
                  <a class="catalog__pagination-link button" href="#">
                    <?= $index ?>
                  </a>
                </li>
              <?php $index++; ?>
              <?php endwhile; ?>

              <li class="catalog__pagination-item">
                <a class="catalog__pagination-link button" href="#">
                  <span class="visually-hidden">Вперёд</span>
                </a>
              </li>
            </ul>
          </section>
        </div>
      </article>
    </main>

    <!-- footer -->

    <footer class="page-footer">
      <div class="page-footer__wrapper">
        <div class="page-footer__left">
          <a class="page-footer__logo-link button" href="/">
            <picture class="page-footer__picture picture">
              <source srcset="img/logo-f.webp" type="image/webp">

                <img width="218" height="28" src="img/logo-f.png" alt="Логотип">
            </picture>
          </a>

          <p class="page-footer__text">
            BlogerMall  — платформа, объединяющая блогеров и рекламодателей
          </p>

          <div class="page-footer__pay">
            <picture class="page-footer__picture picture">
              <source srcset="img/visa.webp" type="image/webp">

                <img width="111" height="37" src="img/visa.png" alt="Логотип карты виза">
            </picture>
            <picture class="page-footer__picture picture">
              <source srcset="img/fondy.webp" type="image/webp">

                <img width="142" height="35" src="img/fondy.png" alt="Логотип fondy">
            </picture>
          </div>
        </div>
        <div class="page-footer__right">
          <nav class="page-footer__navigation">
            <h3 class="page-footer__title">Навигация</h3>

            <ul class="page-footer__site-list">
              <li class="page-footer__site-item">
                <a class="button" href="https://www.bloggermall.com.ua/baza_znaniy/">База знаний</a>
              </li>
              <li class="page-footer__site-item">
                <a class="button" href="https://www.bloggermall.com.ua/blogeram/">Блогерам</a>
              </li>
              <li class="page-footer__site-item">
                <a class="button" href="https://www.bloggermall.com.ua/reklamodatelyam/">Рекламодателям</a>
              </li>
              <li class="page-footer__site-item">
                <a class="button" href="https://www.bloggermall.com.ua/good-choice/">Верное решение</a>
              </li>
              <li class="page-footer__site-item">
                <a class="button" href="https://www.bloggermall.com.ua/kak-effektivno-rabotat-s-blogerami/">Как работать с блогерами?</a>
              </li>
            </ul>
          </nav>

          <div class="page-footer__collaborate">
            <h3 class="page-footer__title">Работа с нами</h3>

            <ul class="page-footer__user-list">
              <li class="page-footer__user-item">
                <a class="page-footer__registration button" href="https://www.bloggermall.com.ua/authentication/?step=1">Регистрация</a>
              </li>
              <li class="page-footer__user-item">
                <button class="page-footer__login button" type="button" name="login">Авторизация</button>
              </li>
              <li class="page-footer__user-item">
                <a class="page-footer__registration button" href="#">Поиск блогера</a>
              </li>
            </ul>

            <div class="page-footer__social">
              <a class="page-footer__social-link button" href="#" target="_blank">
                <picture class="page-footer__picture picture">
                  <source srcset="img/insta.webp" type="image/webp">

                    <img width="24" height="24" src="img/insta.png" alt="Инстаграм">
                </picture>
              </a>
              <a class="page-footer__social-link button" href="#" target="_blank">
                <picture class="page-footer__picture picture">
                  <source srcset="img/fb.webp" type="image/webp">

                    <img width="12" height="24" src="img/fb.png" alt="Фейсбук">
                </picture>
              </a>
            </div>
          </div>
        </div>
        <div class="page-footer__copyright">
          <p>Copyright © 2020 The Bloggermall. ФЛП Штылык Богдан Александрович</p>
          <p>All Right Reserved</p>
        </div>
      </div>
    </footer>

    <!-- end footer -->

    <!-- Optional JavaScript -->
    <script src="plugins/jquery-3.4.1.min.js"></script>

    <script defer src="js/script.min.js"></script>
  </body>
</html>
