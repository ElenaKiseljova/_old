
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
      <h1 class="visually-hidden">Карточка блоггера</h1>

      <?php
        $i = 1;
        $step = 80;
       ?>
      <section class="bloger">
        <h2 class="visually-hidden">Главная информация</h2>
        <div class="bloger__wrapper">
          <div class="bloger__left">
            <p class="bloger__status
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
            <picture class="bloger__picture picture">
              <source srcset="img/bloger-<?= $i ?>.webp" type="image/webp">

              <img width="142" height="142" src="img/bloger-<?= $i ?>.png" alt="Аватар блогера">
            </picture>
          </div>
          <div class="bloger__right">
            <div class="bloger__right-top">
              <div class="bloger__right-info">
                <h4 class="bloger__name">Alya</h4>
                <p class="bloger__subname">
                  <span class="bloger__city">Белгород-Днестровский</span>
                  <span class="bloger__age">27 лет</span>
                </p>



                <div class="bloger__wrapper-thems">
                  <h5 class="bloger__title">Тематики:</h5>
                  <ul class="bloger__thems">
                    <li class="bloger__thems-item">Beauty-blog</li>
                    <li class="bloger__thems-item">Дети</li>
                    <li class="bloger__thems-item">Юмор</li>
                  </ul>
                </div>
              </div>
              <!-- Длина окружности с радиусом 50px 314.159265359 -->

              <svg class="bloger__chart" width="100px" height="100px" viewBox="0 0 120 120">
                <circle class="bloger__chart-hole" cx="60" cy="60" r="50" fill="#fff"></circle>
                <circle class="bloger__chart-segment" data-percent="<?= $step ?>" cx="60" cy="60" r="50" fill="transparent" stroke="#ffe500"></circle>
                <circle class="bloger__chart-segment" data-percent="<?= (100 - $step) ?>" cx="60" cy="60" r="50" fill="transparent" stroke="#b3b0af"></circle>
                <g class="bloger__chart-text">
                  <text class="bloger__chart-number" x="50%" y="50%">
                    <?= $step ?>%
                  </text>
                  <text class="bloger__chart-label" x="50%" y="50%">
                    Рейтинг
                  </text>
                </g>
              </svg>
            </div>
            <div class="bloger__right-middle">
              <ul class="bloger__stat">
                <li class="bloger__count">
                  <p class="bloger__number">100 225</p>
                  <h5 class="bloger__text">Подписчиков</h5>
                </li>
                <li class="bloger__count">
                  <p class="bloger__number">205</p>
                  <h5 class="bloger__text">Публикаций</h5>
                </li>
                <li class="bloger__count">
                  <p class="bloger__number">35%</p>
                  <h5 class="bloger__text">ER</h5>
                </li>
                <li class="bloger__count">
                  <p class="bloger__number">1000 &#8372;</p>
                  <h5 class="bloger__text">Среднее кол-во лайков</h5>
                </li>
                <li class="bloger__count">
                  <p class="bloger__number">10 222</p>
                  <h5 class="bloger__text">Среднее кол-во комментариев</h5>
                </li>
              </ul>
            </div>
            <div class="bloger__right-bottom">
              <button class="bloger__favorite button" type="button" name="favorite"><span>В избранные</span></button>

              <a class="bloger__collaborate button" href="#services">Начать сотрудничество</a>
            </div>
          </div>
        </div>
      </section>

      <section class="inform">
        <h2 class="visually-hidden">Принципы блогера</h2>


        <ul class="inform__wrapper">
          <li class="inform__item">
            <h3 class="inform__title"><span>Подробнее о блогере</span></h3>

            <p class="inform__text">
              20000 підписників в інстаграм. Ласкаво прошу: https://instagram.com/mamaglazova.cooperation?igshid=6dn3fstl6n2w. Тут еще может быть описание, тут еще может быть подробное описание деятельности
            </p>
          </li>
          <li class="inform__item">
            <h3 class="inform__title"><span>Не рекламирую:</span></h3>

            <p class="inform__text">
              Заробіток на дому, кальяны та тютюнові вироби, гадалок та ворожок, лікарів, сторінки менше 5000 підписників, Iнтернет магазини без відгуків, и дальше текст может быть, может не быть
            </p>
          </li>
        </ul>
      </section>

      <section class="analytics">
        <div class="analytics__wrapper">
          <h2 class="analytics__title">Аналитика аудитории</h2>

          <ul class="analytics__list">
            <li class="analytics__item">
              <!-- Проценты сегментов прописаны в дата-атрибутах -->

              <div class="analytics__chart-wrapper">
                <svg class="analytics__chart" width="138px" height="138px" viewBox="0 0 180 180">
                  <circle class="analytics__hole" cx="90" cy="90" r="69" fill="#fff"></circle>
                  <circle class="analytics__segment" data-percent="40" cx="90" cy="90" r="69" fill="transparent" stroke="#ffe500"></circle>
                  <circle class="analytics__segment" data-percent="12" cx="90" cy="90" r="69" fill="transparent" stroke="#69ddca"></circle>
                  <circle class="analytics__segment" data-percent="30" cx="90" cy="90" r="69" fill="transparent" stroke="#ff0099"></circle>
                  <circle class="analytics__segment" data-percent="11" cx="90" cy="90" r="69" fill="transparent" stroke="#00d2ff"></circle>
                  <circle class="analytics__segment" data-percent="4" cx="90" cy="90" r="69" fill="transparent" stroke="#11b79c"></circle>
                  <circle class="analytics__segment" data-percent="1" cx="90" cy="90" r="69" fill="transparent" stroke="#ff64c1"></circle>
                  <circle class="analytics__segment" data-percent="2" cx="90" cy="90" r="69" fill="transparent" stroke="#b1b1b1"></circle>
                </svg>
              </div>

              <div class="analytics__description">
                <h3 class="analytics__caption">Страны</h3>

                <ul class="analytics__description-list">
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">Украина</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">США</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">Германия</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">Польша</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">Чехия</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">Грузия</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">Другие</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                </ul>
              </div>
            </li>

            <li class="analytics__item">
              <!-- Проценты сегментов прописаны в дата-атрибутах -->

              <div class="analytics__chart-wrapper">
                <svg class="analytics__chart" width="138px" height="138px" viewBox="0 0 180 180">
                  <circle class="analytics__hole" cx="90" cy="90" r="69" fill="#fff"></circle>
                  <circle class="analytics__segment" data-percent="77" cx="90" cy="90" r="69" fill="transparent" stroke="#ffe500"></circle>
                  <circle class="analytics__segment" data-percent="4" cx="90" cy="90" r="69" fill="transparent" stroke="#69ddca"></circle>
                  <circle class="analytics__segment" data-percent="3" cx="90" cy="90" r="69" fill="transparent" stroke="#ff0099"></circle>
                  <circle class="analytics__segment" data-percent="3" cx="90" cy="90" r="69" fill="transparent" stroke="#00d2ff"></circle>
                  <circle class="analytics__segment" data-percent="3" cx="90" cy="90" r="69" fill="transparent" stroke="#11b79c"></circle>
                  <circle class="analytics__segment" data-percent="2" cx="90" cy="90" r="69" fill="transparent" stroke="#ff64c1"></circle>
                  <circle class="analytics__segment" data-percent="8" cx="90" cy="90" r="69" fill="transparent" stroke="#b1b1b1"></circle>
                </svg>
              </div>

              <div class="analytics__description">
                <h3 class="analytics__caption">Города</h3>

                <ul class="analytics__description-list">
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">Днепр</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">Киев</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">Кривой Рог</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">Новомосковск</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">Днепродзержинск</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">Москва</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">Другие</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                </ul>
              </div>
            </li>

            <li class="analytics__item">
              <!-- Проценты сегментов прописаны в дата-атрибутах -->

              <div class="analytics__chart-wrapper">
                <svg class="analytics__chart" width="138px" height="138px" viewBox="0 0 180 180">
                  <circle class="analytics__hole" cx="90" cy="90" r="69" fill="#fff"></circle>
                  <circle class="analytics__segment" data-percent="45" cx="90" cy="90" r="69" fill="transparent" stroke="#ffe500"></circle>
                  <circle class="analytics__segment" data-percent="55" cx="90" cy="90" r="69" fill="transparent" stroke="#69ddca"></circle>
                </svg>
              </div>

              <div class="analytics__description">
                <h3 class="analytics__caption">Пол</h3>

                <ul class="analytics__description-list">
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">Мужчины</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">Женщины</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                </ul>
              </div>
            </li>

            <li class="analytics__item">
              <!-- Проценты сегментов прописаны в дата-атрибутах -->

              <div class="analytics__chart-wrapper">
                <svg class="analytics__chart" width="138px" height="138px" viewBox="0 0 180 180">
                  <circle class="analytics__hole" cx="90" cy="90" r="69" fill="#fff"></circle>
                  <circle class="analytics__segment" data-percent="93" cx="90" cy="90" r="69" fill="transparent" stroke="#ffe500"></circle>
                  <circle class="analytics__segment" data-percent="2" cx="90" cy="90" r="69" fill="transparent" stroke="#69ddca"></circle>
                  <circle class="analytics__segment" data-percent="1" cx="90" cy="90" r="69" fill="transparent" stroke="#ff0099"></circle>
                  <circle class="analytics__segment" data-percent="2" cx="90" cy="90" r="69" fill="transparent" stroke="#00d2ff"></circle>
                  <circle class="analytics__segment" data-percent="1" cx="90" cy="90" r="69" fill="transparent" stroke="#11b79c"></circle>
                  <circle class="analytics__segment" data-percent="1" cx="90" cy="90" r="69" fill="transparent" stroke="#ff64c1"></circle>
                </svg>
              </div>

              <div class="analytics__description">
                <h3 class="analytics__caption">Возраст (мужчины)</h3>

                <ul class="analytics__description-list">
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">18-24</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">25-34</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">35-44</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">45-54</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">55-64</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">65+</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                </ul>
              </div>
            </li>

            <li class="analytics__item">
              <!-- Проценты сегментов прописаны в дата-атрибутах -->

              <div class="analytics__chart-wrapper">
                <svg class="analytics__chart" width="138px" height="138px" viewBox="0 0 180 180">
                  <circle class="analytics__hole" cx="90" cy="90" r="69" fill="#fff"></circle>
                  <circle class="analytics__segment" data-percent="50" cx="90" cy="90" r="69" fill="transparent" stroke="#ffe500"></circle>
                  <circle class="analytics__segment" data-percent="21" cx="90" cy="90" r="69" fill="transparent" stroke="#69ddca"></circle>
                  <circle class="analytics__segment" data-percent="12" cx="90" cy="90" r="69" fill="transparent" stroke="#ff0099"></circle>
                  <circle class="analytics__segment" data-percent="8" cx="90" cy="90" r="69" fill="transparent" stroke="#00d2ff"></circle>
                  <circle class="analytics__segment" data-percent="1" cx="90" cy="90" r="69" fill="transparent" stroke="#11b79c"></circle>
                  <circle class="analytics__segment" data-percent="8" cx="90" cy="90" r="69" fill="transparent" stroke="#ff64c1"></circle>
                </svg>
              </div>

              <div class="analytics__description">
                <h3 class="analytics__caption">Возраст (женщины)</h3>

                <ul class="analytics__description-list">
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">18-24</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">25-34</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">35-44</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">45-54</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">55-64</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">65+</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                </ul>
              </div>
            </li>

            <li class="analytics__item">
              <!-- Проценты сегментов прописаны в дата-атрибутах -->

              <div class="analytics__chart-wrapper">
                <svg class="analytics__chart" width="138px" height="138px" viewBox="0 0 180 180">
                  <circle class="analytics__hole" cx="90" cy="90" r="69" fill="#fff"></circle>
                  <circle class="analytics__segment" data-percent="70" cx="90" cy="90" r="69" fill="transparent" stroke="#ffe500"></circle>
                  <circle class="analytics__segment" data-percent="20" cx="90" cy="90" r="69" fill="transparent" stroke="#69ddca"></circle>
                  <circle class="analytics__segment" data-percent="6" cx="90" cy="90" r="69" fill="transparent" stroke="#ff0099"></circle>
                  <circle class="analytics__segment" data-percent="2" cx="90" cy="90" r="69" fill="transparent" stroke="#00d2ff"></circle>
                  <circle class="analytics__segment" data-percent="1" cx="90" cy="90" r="69" fill="transparent" stroke="#11b79c"></circle>
                  <circle class="analytics__segment" data-percent="1" cx="90" cy="90" r="69" fill="transparent" stroke="#ff64c1"></circle>
                </svg>
              </div>

              <div class="analytics__description">
                <h3 class="analytics__caption">Общий возраст</h3>

                <ul class="analytics__description-list">
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">18-24</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">25-34</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">35-44</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">45-54</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">55-64</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                  <li class="analytics__description-item">
                    <span class="analytics__name-percent">65+</span>
                    <span class="anlitics__description-percent"></span>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <section class="services" id="services">
        <div class="services__wrapper">
          <h2 class="services__title">Услуги блогера</h2>

          <?php
            $services_list = array(
              0 => array(
                'name' => '1 stories',
                'price' => '30'
              ),
              1 => array(
                'name' => 'Фото-пост',
                'price' => '40'
              ),
              2 => array(
                'name' => 'Пост + stories',
                'price' => '50'
              ),
              3 => array(
                'name' => '3 stories',
                'price' => '70'
              ),
              4 => array(
                'name' => 'Видео-пост',
                'price' => '100'
              ),
              5 => array(
                'name' => 'Скрин профиля',
                'price' => '60'
              ),
              6 => array(
                'name' => 'Распаковка',
                'price' => '70'
              ),
              7 => array(
                'name' => 'Giveaway',
                'price' => '20'
              ),
              8 => array(
                'name' => 'Реклама личного аккаунта',
                'price' => '100'
              ),
            );
          ?>
          <ul class="services__list">
            <?php foreach ($services_list as $service): ?>
              <li class="services__item">
                <h3 class="services__name"><?= $service['name'] ?></h3>
                <p class="services__price"><?= $service['price'] ?>$</p>

                <button class="services__order button" type="button" name="order">Заказать услугу</button>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </section>

      <section class="posts">
        <div class="posts__wrapper">
          <h2 class="posts__title">Последние публикации</h2>

          <ul class="posts__list">
            <?php $y = 1; ?>
            <?php while ($y < 10) : ?>

              <li class="posts__item">
                <picture class="posts__picture picture">
                  <source srcset="img/post-<?= rand(1, 3); ?>.webp" type="image/webp">

                  <img width="220" height="216" src="img/post-<?= rand(1, 3); ?>.png" alt="Post">
                </picture>

                <ul class="posts__information">
                  <li class="posts__info-item">
                    <span><?= rand(50, 200); ?></span>
                  </li>
                  <li class="posts__info-item">
                    <span><?= rand(10, 100); ?></span>
                  </li>
                  <li class="posts__info-item">
                    <time><?= rand(1, 28); ?>.0<?= rand(1, 5); ?>.2020</time>
                  </li>
                </ul>
              </li>

              <?php $y++; ?>
            <?php endwhile; ?>
          </ul>
        </div>
      </section>

      <section class="reviews">
        <div class="reviews__wrapper">
          <h2 class="reviews__title">Отзывы о работе блогера</h2>

          <header class="reviews__header">
            <div class="reviews__left">
              <h3 class="reviews__percent">
                <span class="rating-bloger">80</span>%
              </h3>

              <p class="reviews__percent-sub">
                Положительных отзывов
              </p>

              <p class="reviews__count-wrapper">
                Всего отзывов: <span class="reviews__count">27</span>
              </p>
            </div>
            <div class="reviews__right">
              <ul class="reviews__rating-list">
                <li class="reviews__rating-item">
                  <h4 class="reviews__rating-caption">
                    Результативность:
                    <span>70</span>%
                  </h4>
                  <p class="reviews__rating-line">
                    <span></span>
                  </p>
                </li>
                <li class="reviews__rating-item">
                  <h4 class="reviews__rating-caption">
                    Пунктуальность:
                    <span>80</span>%
                  </h4>
                  <p class="reviews__rating-line">
                    <span></span>
                  </p>
                </li>
                <li class="reviews__rating-item">
                  <h4 class="reviews__rating-caption">
                    Соответствие ТЗ:
                    <span>100</span>%
                  </h4>
                  <p class="reviews__rating-line">
                    <span></span>
                  </p>
                </li>
              </ul>
            </div>
          </header>

          <ul class="reviews__list">
            <?php $k = 1; ?>
            <?php while ($k < 7) : ?>

              <li class="reviews__item">
                <div class="reviews__left">
                  <h3 class="reviews__name">Ярослава Иванова</h3>
                  <p class="reviews__status">Рекламодатель</p>
                  <p class="reviews__stars" data-star="<?= rand(1, 5); ?>">
                    <span class="reviews__star"></span>
                    <span class="reviews__star"></span>
                    <span class="reviews__star"></span>
                    <span class="reviews__star"></span>
                    <span class="reviews__star"></span>

                    <span class="reviews__stars-title">Хорошо</span>
                  </p>

                </div>
                <div class="reviews__right">
                  <h4 class="reviews__description">
                    Отзыв по услуге: Реклама личного аккаунта

                    <time>12.05.20</time>
                  </h4>

                  <p class="reviews__text">
                    Спасибо за работу, приятно сотрудничать, буду работать только с вами! Приятно сотрудничать, буду работать только с вами! Текста может быть больше
                  </p>
                </div>
              </li>

            <?php $k++; ?>
            <?php endwhile; ?>
          </ul>

          <button class="reviews__more button" type="button" name="order">Показать все отзывы</button>
        </div>
      </section>
    </main>

    <!-- form -->

    <section class="modal">
      <h2 class="modal__title">Отправить предложение по проекту</h2>

      <form class="modal__form" action="#" method="post">
        <textarea class="modal__message" name="message"></textarea>

        <p class="modal__text">
          Нажмите кнопку, чтобы отправить предложэение этому блогеру
        </p>

        <button class="modal__submit button" type="submit" name="modal-submit">Отправить предложение</button>
      </form>
    </section>

    <div class="overlay"></div>

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
