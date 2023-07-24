<?php
  $title = "Сериал";

  include("header.php");
 ?>

    <main class="page-main page-main--series">
      <canvas id="noise" class="noise"></canvas>

      <section class="breadcrumbs">
        <div class="breadcrumbs__wrapper">
          <ul class="breadcrumbs__list">
            <li class="breadcrumbs__item">
              <a class="breadcrumbs__link" href="/">
                <span>Главная</span>
              </a>
            </li>
            <li class="breadcrumbs__item">
              <a class="breadcrumbs__link" href="#">
                <span>Сериал</span>
              </a>
            </li>
          </ul>
        </div>
      </section>

      <section class="top top--series">
        <div class="top__wrapper top__wrapper--series">
          <h4 class="brackets brackets--series">{<span>к просмотру</span>}</h4>

          <h1 class="top__title top__title--series">
            <span> Значимость этих</span>
            <span>проблем  очевидна</span>
          </h1>
        </div>
      </section>
      <section class="see see--series">
        <div class="see__wrapper">
          <div class="see__video">
            <a class="see__link active" href="serie.php">
              <video class="see__preview" width="1136" height="558" autoplay loop muted playsinline src="video/preview-0.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                Тег video не поддерживается вашим браузером.
              </video>
            </a>

            <!--<iframe class="see__iframe" width="1136" height="558" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->

            <a class="see__play active" href="serie.php">
              <svg class="see__play-icon" width="99" height="99" aria-label="Play">
                <use xlink:href="#icon-play"></use>
              </svg>
            </a>
            <!--
            <div class="see__tabs-wrapper">
              <ul class="see__tabs">
                <li class="see__tabs-item active" data-link="serie.php">
                  <h3 class="see__tabs-title">Серия 1</h3>
                  <p class="see__tabs-duration">01:10:03</p>
                </li>
                <li class="see__tabs-item" data-link="serie.php">
                  <h3 class="see__tabs-title">Серия 2</h3>
                  <p class="see__tabs-duration">01:10:03</p>
                </li>
                <li class="see__tabs-item" data-link="serie.php">
                  <h3 class="see__tabs-title">Серия 3</h3>
                  <p class="see__tabs-duration">01:10:03</p>
                </li>
                <li class="see__tabs-item" data-link="serie.php">
                  <h3 class="see__tabs-title">Серия 4</h3>
                  <p class="see__tabs-duration">01:10:03</p>
                </li>
                <li class="see__tabs-item" data-link="serie.php">
                  <h3 class="see__tabs-title">Серия 5</h3>
                  <p class="see__tabs-duration">01:10:03</p>
                </li>
              </ul>
            </div>
            -->
          </div>
          <!--
          <p class="more more--video">
            <a class="more__button" href="series.php">
              <span>все серии</span>
              <svg class="more__icon" width="49" height="49" aria-label="Стрелка">
                <use xlink:href="#icon-arrow-right"></use>
              </svg>
            </a>
          </p>

          -->
        </div>
      </section>


      <section class="about about--series">
        <div class="about__wrapper">
          <div class="about__text about__text--series">
            <p class="about__center">
              Greenpeace России представляют первое онлайн-медиа о климатическом <a class="about__link about__link--ellipse" href="#">кризисе.</a>
              Мы исследуем ☞ текущие изменение климата в формате трех “Р” эта <a class="about__link about__link--rect" href="#">проблема</a> — реальная, рукотворная, решаемая ☇ . А значит мы в силах ее изменить. Станьте частью перемен вместе с нами!
            </p>

            <p class="about__left">
              Душа моя озарена неземной радостью, как эти чудесные весенние утра, которыми я наслаждаюсь от всего сердца.
              Я совсем один и блаженствую в здешнем краю, словно созданном для таких, как я. Я так счастлив, мой друг, так упоен ощущением покоя, что искусство мое страдает от этого.
              Ни одного штриха не мог бы я сделать, а никогда не был таким большим художником, как в эти минуты.
            </p>
          </div>
        </div>
      </section>

      <section class="series">
        <div class="series__wrapper">
          <ul class="series__list">
            <?php $i = 1; ?>
            <?php while ($i < 9) : ?>
            <li class="series__item">
              <a class="series__link" href="serie.php">
                <picture class="series__image">
                  <source srcset="img/item-<?= rand(6, 8); ?>.webp" type="image/webp">

                  <img width="488" height="310" src="img/item-<?= rand(6, 8); ?>.jpg" alt="img">
                </picture>
              </a>

              <a class="series__link" href="serie.php">
                <h3 class="series__item-title">Что россии делать с климатическим кризисом?</h3>
              </a>
              <p class="series__text">
                О срочных мерах по реализации климатически дружественной политики в разных сферах российской экономики
              </p>
            </li>

            <?php $i++; ?>
            <?php endwhile; ?>
          </ul>
        </div>
      </section>

      <section class="posts posts--pruffs">
        <div class="posts__wrapper">
          <header class="posts__header">
            <h4 class="brackets brackets--posts">{<span>статьи</span>}</h4>
            <h2 class="title title--posts">Публикации</h2>

            <div class="slider-tabs">
              <button class="slider-tabs__arrow slider-tabs__prev swiper-button-prev" type="button" name="next">
                <span class="visually-hidden">Предыдущий слайд</span>
                <svg class="slider-tabs__prev" width="24" height="30" aria-label="Previous button">
                  <use xlink:href="#icon-left"></use>
                </svg>
              </button>
              <button class="slider-tabs__arrow slider-tabs__next swiper-button-next" type="button" name="next">
                <span class="visually-hidden">Следующий слайд</span>
                <svg class="slider-tabs__next" width="24" height="30" aria-label="Next button">
                  <use xlink:href="#icon-right"></use>
                </svg>
              </button>
            </div>
          </header>

          <div class="posts__slider swiper-container">
            <ul class="posts__list swiper-wrapper">
              <li class="posts__item swiper-slide">
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
              <li class="posts__item swiper-slide">
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
              <li class="posts__item swiper-slide">
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
            </ul>
          </div>

          <p class="more more--posts">
            <a class="more__button" href="#">
              <span>все статьи</span>
              <svg class="more__icon" width="49" height="49" aria-label="Стрелка">
                <use xlink:href="#icon-arrow-right"></use>
              </svg>
            </a>
          </p>
        </div>
      </section>
    </main>

<?php
  include("footer.php");
 ?>
