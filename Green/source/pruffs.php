<?php
  $title = "Сборник пруфов";

  include("header.php");
 ?>

    <main class="page-main page-main--pruff">
      <canvas id="noise" class="noise"></canvas>

      <section class="pruff">
        <div class="pruff__wrapper">
          <h4 class="brackets brackets--pruff">{<span>статьи</span>}</h4>

          <div class="pruff__title">
            <p class="pruff__title-item">Сборник</p>
            <p class="pruff__title-item">Пруфов</p>
          </div>

          <ul class="pruff__list">
            <li class="pruff__item">
              <button class="pruff__button" type="button" name="pruff">
                <svg class="pruff__icon" width="49" height="49" aria-label="Стрелка">
                  <use xlink:href="#icon-ru"></use>
                </svg>
              </button>
              <div class="pruff__content">
                <h3 class="pruff__item-title">
                  Что россии делать с климатическим кризисом?
                </h3>

                <p class="pruff__text">
                  О срочных мерах по реализации климатически дружественной политики в разных сферах российской экономики
                </p>
              </div>
            </li>
            <li class="pruff__item">
              <button class="pruff__button" type="button" name="pruff">
                <svg class="pruff__icon" width="49" height="49" aria-label="Стрелка">
                  <use xlink:href="#icon-ru"></use>
                </svg>
              </button>
              <div class="pruff__content">
                <h3 class="pruff__item-title">
                  Энерргитическая революция
                </h3>

                <p class="pruff__text">
                  Сокращенная версия доклада 2009 года  “Перспективы формирования систем энергитической безопасности России”
                </p>
              </div>
            </li>
            <li class="pruff__item">
              <button class="pruff__button" type="button" name="pruff">
                <svg class="pruff__icon" width="49" height="49" aria-label="Стрелка">
                  <use xlink:href="#icon-en"></use>
                </svg>
              </button>
              <div class="pruff__content">
                <h3 class="pruff__item-title">
                  Энергитическая революция
                </h3>

                <p class="pruff__text">
                  Расширенная версия 2015 года “Сценарии перехода к устойчивой энергетике на основе возлбновляемых источников энергии”
                </p>
              </div>
            </li>
            <li class="pruff__item">
              <button class="pruff__button" type="button" name="pruff">
                <svg class="pruff__icon" width="49" height="49" aria-label="Стрелка">
                  <use xlink:href="#icon-ru"></use>
                </svg>
              </button>
              <div class="pruff__content">
                <h3 class="pruff__item-title">
                  Разработка сценария низкоуглеродного транспорта в Москве
                </h3>

                <p class="pruff__text">
                  Меры,которые позволят значительно снизить выбросы парниковых газов и вредных веществ от автотранспорта к 2030 году
                </p>
              </div>
            </li>
            <li class="pruff__item">
              <button class="pruff__button" type="button" name="pruff">
                <svg class="pruff__icon" width="49" height="49" aria-label="Стрелка">
                  <use xlink:href="#icon-en"></use>
                </svg>
              </button>
              <div class="pruff__content">
                <h3 class="pruff__item-title">
                  2028: конец пути для двигателей внутреннего сгорания
                </h3>

                <p class="pruff__text">
                  Насколько быстро Европа должна отказаться от бензиновых и дизельных автомобилей, чтобы выполнить климатические обязательства
                </p>
              </div>
            </li>
            <li class="pruff__item">
              <button class="pruff__button" type="button" name="pruff">
                <svg class="pruff__icon" width="49" height="49" aria-label="Стрелка">
                  <use xlink:href="#icon-ru"></use>
                </svg>
              </button>
              <div class="pruff__content">
                <h3 class="pruff__item-title">
                  Меры по продвижению электромобилей
                </h3>

                <p class="pruff__text">
                  Оценка эффективности мер, которые предпринемаются в разных странах дляболее быстрой декорбонизации транспорта
                </p>
              </div>
            </li>
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
