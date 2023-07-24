<?php
  $title = "Главная";

  include("header.php");
 ?>
 <!--<div class="preloader" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

   <svg class="preloader__logo" width="312" height="36" viewBox="0 0 312 36" fill="none" xmlns="http://www.w3.org/2000/svg">
     <path class="preloader__rNot" d="M76.4414 4V31.2062H108.781V25.5706H85.8321V20.1294H106.433V14.4938H85.8321V9.63557H108.194V4H76.4414Z" fill="black"/>
     <path class="preloader__r3" d="M63.4855 31.2062V22.8982H71.9593C76.7359 22.8982 80.5682 21.8012 83.2631 19.9489C85.9745 18.0852 87.5491 15.4252 87.5491 12.5117C87.5491 9.54274 86.0244 6.88862 83.2944 5.04631C80.6039 3.23061 76.7692 2.20281 71.9593 2.20281H52.2976H50.5004V4V31.2062V33.0034H52.2976H61.6883H63.4855V31.2062ZM63.4855 13.6683V11.4328H71.3724C72.7329 11.4328 73.6292 11.6731 74.1185 11.9532C74.5262 12.1865 74.564 12.371 74.564 12.5505C74.564 12.7301 74.5262 12.9145 74.1185 13.1478C73.6292 13.428 72.7329 13.6683 71.3724 13.6683H63.4855Z" fill="black" stroke="#FFEFE7" stroke-width="3.59438"/>
     <path class="preloader__r2" d="M39.3356 31.2062V22.8982H47.8094C52.586 22.8982 56.4183 21.8012 59.1132 19.9489C61.8246 18.0852 63.3992 15.4252 63.3992 12.5117C63.3992 9.54274 61.8745 6.88862 59.1445 5.04631C56.454 3.23061 52.6193 2.20281 47.8094 2.20281H28.1477H26.3505V4V31.2062V33.0034H28.1477H37.5384H39.3356V31.2062ZM39.3356 13.6683V11.4328H47.2225C48.583 11.4328 49.4793 11.6731 49.9686 11.9532C50.3763 12.1865 50.4141 12.371 50.4141 12.5505C50.4141 12.7301 50.3763 12.9145 49.9686 13.1478C49.4793 13.428 48.583 13.6683 47.2225 13.6683H39.3356Z" fill="black" stroke="#FFEFE7" stroke-width="3.59438"/>
     <path class="preloader__r1" d="M15.1871 31.2062V22.8982H23.661C28.4376 22.8982 32.2699 21.8012 34.9648 19.9489C37.6762 18.0852 39.2508 15.4252 39.2508 12.5117C39.2508 9.54274 37.726 6.88862 34.9961 5.04631C32.3056 3.23061 28.4708 2.20281 23.661 2.20281H3.99927H2.20208V4V31.2062V33.0034H3.99927H13.39H15.1871V31.2062ZM15.1871 13.6683V11.4328H23.0741C24.4346 11.4328 25.3308 11.6731 25.8202 11.9532C26.2278 12.1865 26.2657 12.371 26.2657 12.5505C26.2657 12.7301 26.2278 12.9145 25.8202 13.1478C25.3308 13.428 24.4346 13.6683 23.0741 13.6683H15.1871Z" fill="black" stroke="#FFEFE7" stroke-width="3.59438"/>
     <path class="preloader__rNot" d="M109.929 31.2062H120.2L123.369 25.5706H142.268L145.437 31.2062H155.709L139.568 4H126.069L109.929 31.2062ZM126.539 19.9351L132.819 8.81938L139.099 19.9351H126.539Z" fill="black"/>
     <path class="preloader__rNot" d="M157.201 31.2062H166.591V20.7124L181.03 31.2062H193.942L173.693 16.9812L192.944 4H180.795L166.591 13.6388V4H157.201V31.2062Z" fill="black"/>
     <path class="preloader__rNot" d="M224.758 36H233.268V25.9259H228.279V4H218.888V25.9259H204.392V4H195.001V31.2062H224.758V36Z" fill="black"/>
     <path class="preloader__rNot" d="M264.291 13.7572V31.2062H273.682V4H264.291L245.052 21.4461V4H235.662V31.2062H245.052L264.291 13.7572Z" fill="black"/>
     <path class="preloader__rNot" d="M276.851 31.2062H287.063L299.623 20.9067H302.558V31.2062H311.948V4H291.406C283.131 4 277.614 7.45907 277.614 12.3562C277.614 17.7197 283.835 20.5958 289 20.9067L276.851 30.5843V31.2062ZM291.7 15.2711C288.413 15.2711 286.711 14.0274 286.711 12.3562C286.711 10.685 288.354 9.63557 291.7 9.63557H302.558V15.2711H291.7Z" fill="black"/>
   </svg>
 </div> -->
 <div id="container"></div>

    <main class="page-main page-main--index">
      <canvas id="noise" class="noise"></canvas>


      <h1 class="visually-hidden"></h1>
      <section class="promo">
        <div class="promo__wrapper">
          <ul class="promo__list">
            <li class="promo__item promo__item--first">
              <div class="widget wow fadeIn" data-index="1">
                <div class="widget__content">
                  <h3 class="widget__title">Глобальная температура</h3>

                  <div class="widget__parameters">
                    <p class="widget__text">
                      <span class="widget__measure">°C</span>
                      <span class="widget__details">с 1880 года</span>
                    </p>
                    <p class="widget__count">
                      12,85
                    </p>
                  </div>
                </div>

                <div class="widget__icon">
                  <svg class="widget__svg wow rotate" width="54" height="54" aria-label="Круг">
                    <use xlink:href="#icon-arrow-circle"></use>
                  </svg>
                  <svg class="widget__svg" width="54" height="54" aria-label="Стрелка">
                    <use xlink:href="#icon-arrow-top"></use>
                  </svg>
                </div>

              </div>
            </li>
            <li class="promo__item promo__item--second">
              <div class="widget widget--reverse wow fadeIn" data-index="2">
                <div class="widget__content">
                  <h3 class="widget__title widget__title--reverse">Арктический лед</h3>

                  <div class="widget__parameters widget__parameters--reverse">
                    <p class="widget__text widget__text--reverse">
                      <span class="widget__measure">%</span>
                      <span class="widget__details">за десятилетие</span>
                    </p>
                    <p class="widget__count widget__count--reverse">
                      12,85
                    </p>
                  </div>
                </div>

                <div class="widget__icon widget__icon--ice">
                  <svg class="widget__svg widget__svg--reverse wow rotate" width="54" height="54" aria-label="Круг">
                    <use xlink:href="#icon-arrow-circle"></use>
                  </svg>
                  <svg class="widget__svg" width="54" height="54" aria-label="Стрелка">
                    <use xlink:href="#icon-arrow-top"></use>
                  </svg>
                </div>
              </div>
            </li>
            <li class="promo__item promo__item--center">
              <h4 class="brackets brackets--promo">{<span>климатический кризис</span>}</h4>

              <h2 class="promo__title">
                <span class="promo__title-row wow fadeInLeft">
                  Реален
                </span>
                <span class="promo__title-row promo__title-row--center wow fadeInRight">
                  Рукотворен
                </span>
                <span class="promo__title-row wow fadeInLeft">
                  Решаем
                </span>
              </h2>
            </li>
            <li class="promo__item promo__item--bottom">
              <div class="widget wow fadeIn" data-index="3">
                <div class="widget__content">
                  <h3 class="widget__title">Углекислый газ</h3>

                  <div class="widget__parameters">
                    <p class="widget__text">
                      <span class="widget__measure">частей</span>
                      <span class="widget__details">на миллион</span>
                    </p>
                    <p class="widget__count">
                      12,85
                    </p>
                  </div>
                </div>

                <div class="widget__icon">
                  <svg class="widget__svg wow rotate" width="54" height="54" aria-label="Круг">
                    <use xlink:href="#icon-arrow-circle"></use>
                  </svg>
                  <svg class="widget__svg" width="54" height="54" aria-label="Стрелка">
                    <use xlink:href="#icon-arrow-top"></use>
                  </svg>
                </div>
              </div>
            </li>
          </ul>

          <div class="promo__bottom">
            <div class="promo__created">
              <h4 class="promo__created-title">Дело рук</h4>

              <a class="promo__created-link" href="https://greenpeace.ru">
                <svg class="promo__created-svg" width="114.01" height="18.05" aria-label="Greenpeace">
                  <use xlink:href="#icon-greenpeace"></use>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="widget__wrapper swiper-container">
          <ul class="widget__list swiper-wrapper">
            <li class="widget__item swiper-slide">
              <div class="widget widget--reverse" data-index="1">
                <div class="widget__content">
                  <h3 class="widget__title widget__title--reverse">Глобальная температура</h3>

                  <div class="widget__parameters widget__parameters--reverse">
                    <p class="widget__text widget__text--mobile">
                      <span class="widget__measure">°C</span>
                      <span class="widget__details">с 1880 года</span>
                    </p>
                    <p class="widget__count widget__count--reverse">
                      12,85
                    </p>
                  </div>
                </div>

                <div class="widget__icon widget__icon--reverse">
                  <svg class="widget__svg wow rotate" width="54" height="54" aria-label="Круг">
                    <use xlink:href="#icon-arrow-circle"></use>
                  </svg>
                  <svg class="widget__svg" width="54" height="54" aria-label="Стрелка">
                    <use xlink:href="#icon-arrow-top"></use>
                  </svg>
                </div>
              </div>
            </li>
            <li class="widget__item swiper-slide">
              <div class="widget widget--reverse" data-index="2">
                <div class="widget__content">
                  <h3 class="widget__title widget__title--reverse">Арктический лед</h3>

                  <div class="widget__parameters widget__parameters--reverse">
                    <p class="widget__text  widget__text--mobile">
                      <span class="widget__measure">%</span>
                      <span class="widget__details">за десятилетие</span>
                    </p>
                    <p class="widget__count widget__count--reverse">
                      12,85
                    </p>
                  </div>
                </div>

                <div class="widget__icon widget__icon--ice">
                  <svg class="widget__svg widget__svg--reverse wow rotate" width="54" height="54" aria-label="Стрелка">
                    <use xlink:href="#icon-arrow-circle"></use>
                  </svg>
                  <svg class="widget__svg" width="54" height="54" aria-label="Стрелка">
                    <use xlink:href="#icon-arrow-top"></use>
                  </svg>
                </div>
              </div>
            </li>
            <li class="widget__item swiper-slide">
              <div class="widget widget--reverse" data-index="3">
                <div class="widget__content">
                  <h3 class="widget__title widget__title--reverse">Углекислый газ</h3>

                  <div class="widget__parameters widget__parameters--reverse">
                    <p class="widget__text widget__text--mobile">
                      <span class="widget__measure">частей</span>
                      <span class="widget__details">на миллион</span>
                    </p>
                    <p class="widget__count widget__count--reverse">
                      12,85
                    </p>
                  </div>
                </div>

                <div class="widget__icon widget__icon--reverse">
                  <svg class="widget__svg wow rotate" width="54" height="54" aria-label="Круг">
                    <use xlink:href="#icon-arrow-circle"></use>
                  </svg>
                  <svg class="widget__svg" width="54" height="54" aria-label="Стрелка">
                    <use xlink:href="#icon-arrow-top"></use>
                  </svg>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <section class="about">
        <h2 class="visually-hidden">О нас</h2>

        <div class="about__wrapper">
          <p class="about__text">
            Первое российское медиа о климатическом   <a class="about__link about__link--ellipse" href="#">кризисе,</a>   его причинах и способах решения.
            Какой будет ваша РРРЕАКЦИЯ? ☞ <a class="about__link" href="#">Читайте</a> статьи, <a class="about__link" href="#">смотрите</a> веб-сериал, ✹ <a class="about__link" href="#">узнайте</a>, как изменилась температура планеты со дня вашего рождения.
          </p>

          <svg class="about__icon wow rotate" width="192" height="192" aria-label="Circle">
            <use xlink:href="#icon-circle"></use>
          </svg>
        </div>
      </section>

      <section class="line">
        <div class="line__wrapper">
          <div class="line__container line__container--top" id="marquee-2">
            <picture class="line__image">
              <source srcset="img/post-new-1.webp" type="image/webp">

              <img width="1103" height="660" src="img/post-new-1.jpg" alt="">
            </picture>

            <p class="line__inner line__inner--center">
              <a class="line__link line__link--center" href="zelenyj-kurs-dlya-rossii.php">Зеленый курс для России</a>
            </p>

            <picture class="line__image">
              <source srcset="img/post-new-4.webp" type="image/webp">

              <img width="1103" height="660" src="img/post-new-4.jpg" alt="">
            </picture>

            <p class="line__inner line__inner--center">
              <a class="line__link line__link--center" href="rrreakciya-s-varvaroj-shmykovoj-intervyu.php">РРРЕАКЦИЯ с Варварой Шмыковой. Интервью</a>
            </p>

            <picture class="line__image">
              <source srcset="img/post-new-2.webp" type="image/webp">

              <img width="1103" height="660" src="img/post-new-2.jpg" alt="">
            </picture>

            <p class="line__inner line__inner--center">
              <a class="line__link line__link--center" href="kratkaya-istoriya-klimaticheskogo-krizisa.php">Краткая история климатического кризиса</a>
            </p>
            <picture class="line__image">
              <source srcset="img/post-new-3.webp" type="image/webp">

              <img width="1103" height="660" src="img/post-new-3.jpg" alt="">
            </picture>

            <p class="line__inner line__inner--center">
              <a class="line__link line__link--center" href="povliyaet-li-koronavirusnyj-krizis-na-klimaticheskij.php">Повлияет ли коронавирусный кризис на климатический?</a>
            </p>
          </div>

          <div class="line__container line__container--center" id="marquee-1">

            <picture class="line__image">
              <source srcset="img/post-new-1.webp" type="image/webp">

              <img width="1103" height="660" src="img/post-new-1.jpg" alt="">
            </picture>

            <p class="line__inner line__inner--center">
              <a class="line__link line__link--center" href="zelenyj-kurs-dlya-rossii.php">Зеленый курс для России</a>
            </p>

            <picture class="line__image">
              <source srcset="img/post-new-4.webp" type="image/webp">

              <img width="1103" height="660" src="img/post-new-4.jpg" alt="">
            </picture>

            <p class="line__inner line__inner--center">
              <a class="line__link line__link--center" href="rrreakciya-s-varvaroj-shmykovoj-intervyu.php">РРРЕАКЦИЯ с Варварой Шмыковой. Интервью</a>
            </p>

            <picture class="line__image">
              <source srcset="img/post-new-2.webp" type="image/webp">

              <img width="1103" height="660" src="img/post-new-2.jpg" alt="">
            </picture>

            <p class="line__inner line__inner--center">
              <a class="line__link line__link--center" href="kratkaya-istoriya-klimaticheskogo-krizisa.php">Краткая история климатического кризиса</a>
            </p>
            <picture class="line__image">
              <source srcset="img/post-new-3.webp" type="image/webp">

              <img width="1103" height="660" src="img/post-new-3.jpg" alt="">
            </picture>

            <p class="line__inner line__inner--center">
              <a class="line__link line__link--center" href="povliyaet-li-koronavirusnyj-krizis-na-klimaticheskij.php">Повлияет ли коронавирусный кризис на климатический?</a>
            </p>
          </div>

          <div class="line__container line__container--bottom" id="marquee-3">
            <picture class="line__image">
              <source srcset="img/post-new-1.webp" type="image/webp">

              <img width="1103" height="660" src="img/post-new-1.jpg" alt="">
            </picture>

            <p class="line__inner line__inner--center">
              <a class="line__link line__link--center" href="zelenyj-kurs-dlya-rossii.php">Зеленый курс для России</a>
            </p>

            <picture class="line__image">
              <source srcset="img/post-new-4.webp" type="image/webp">

              <img width="1103" height="660" src="img/post-new-4.jpg" alt="">
            </picture>

            <p class="line__inner line__inner--center">
              <a class="line__link line__link--center" href="rrreakciya-s-varvaroj-shmykovoj-intervyu.php">РРРЕАКЦИЯ с Варварой Шмыковой. Интервью</a>
            </p>

            <picture class="line__image">
              <source srcset="img/post-new-2.webp" type="image/webp">

              <img width="1103" height="660" src="img/post-new-2.jpg" alt="">
            </picture>

            <p class="line__inner line__inner--center">
              <a class="line__link line__link--center" href="kratkaya-istoriya-klimaticheskogo-krizisa.php">Краткая история климатического кризиса</a>
            </p>
            <picture class="line__image">
              <source srcset="img/post-new-3.webp" type="image/webp">

              <img width="1103" height="660" src="img/post-new-3.jpg" alt="">
            </picture>

            <p class="line__inner line__inner--center">
              <a class="line__link line__link--center" href="povliyaet-li-koronavirusnyj-krizis-na-klimaticheskij.php">Повлияет ли коронавирусный кризис на климатический?</a>
            </p>
          </div>
        </div>
      </section>

      <section class="manifest">
        <div class="manifest__wrapper">
          <header class="manifest__header">
            <picture class="manifest__image">
              <source srcset="img/image.webp" type="image/webp">

              <img width="600" height="425" src="img/image.jpg" alt="img">
            </picture>

            <h4 class="brackets brackets--manifest">{<span>интервью</span>}</h4>
          </header>

          <p class="manifest__text">
            Голос документального веб-сериала Greenpeace актриса Варвара Шмыкова: об осознанности, климате и почему планету нужно спасать прямо сейчас ☑
          </p>

          <p class="more">
            <a class="more__button" href="rrreakciya-s-varvaroj-shmykovoj-intervyu.php">
              <span>читать полностью</span>
              <svg class="more__icon" width="49" height="49" aria-label="Стрелка">
                <use xlink:href="#icon-arrow-right"></use>
              </svg>
            </a>
          </p>
        </div>
      </section>

      <section class="see">
        <div class="see__wrapper">
          <h4 class="brackets brackets--see">{<span>к просмотру</span>}</h4>

          <h2 class="title title--see">Сериал</h2>

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

      <section class="posts">
        <div class="posts__wrapper">
          <header class="posts__header">
            <h4 class="brackets brackets--posts">{<span>публикации</span>}</h4>
            <h2 class="title title--posts">Статьи</h2>

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
                <a class="posts__link" href="zelenyj-kurs-dlya-rossii.php">
                  <picture class="posts__image">
                    <source srcset="img/post-new-1.webp" type="image/webp">

                    <img width="1103" height="660" src="img/post-new-1.jpg" alt="">
                  </picture>
                </a>

                <p class="hashtag">
                  <span class="hashtag__item">#спасипланету</span>
                </p>

                <a class="posts__link" href="zelenyj-kurs-dlya-rossii.php">
                  <h3 class="posts__item-title">Зеленый курс для России</h3>
                </a>

                <p class="posts__text">
                  «Зелёный курс для России» — это краудсорсинговая платформа, созданная Greenpeace в партнёрстве с Российским социально-экологическим союзом (РСоЭС) и Climate Action Network (CAN). С её помощью мы сформулируем предложения по выходу из экономического и климатического кризиса совместно с общественными движениями, социально и экологически ответственным бизнесом, ведущими экспертами в области экономики и охраны окружающей среды.
                </p>
              </li>
              <li class="posts__item swiper-slide">
                <a class="posts__link" href="povliyaet-li-koronavirusnyj-krizis-na-klimaticheskij.php">
                  <picture class="posts__image">
                    <source srcset="img/post-new-3.webp" type="image/webp">

                    <img width="1103" height="660" src="img/post-new-3.jpg" alt="">
                  </picture>
                </a>

                <p class="hashtag">
                  <span class="hashtag__item">#спасипланету</span>
                </p>

                <a class="posts__link" href="povliyaet-li-koronavirusnyj-krizis-na-klimaticheskij.php">
                  <h3 class="posts__item-title">Повлияет ли коронавирусный кризис на климатический?</h3>
                </a>

                <p class="posts__text">
                  Может ли Россия извлечь экологическую и экономическую выгоду из пандемии коронавируса
                </p>
              </li>
              <li class="posts__item swiper-slide">
                <a class="posts__link" href="kratkaya-istoriya-klimaticheskogo-krizisa.php">
                  <picture class="posts__image">
                    <source srcset="img/post-new-2.webp" type="image/webp">

                    <img width="1103" height="660" src="img/post-new-2.jpg" alt="">
                  </picture>
                </a>

                <p class="hashtag">
                  <span class="hashtag__item">#спасипланету</span>
                </p>

                <a class="posts__link" href="kratkaya-istoriya-klimaticheskogo-krizisa.php">
                  <h3 class="posts__item-title">Краткая история климатического кризиса</h3>
                </a>

                <p class="posts__text">
                  Ежедневно мы слышим об изменении климата. История изучения вопроса насчитывает не один век, но только в последние 30 лет международные организации и государства начали осознавать тяжесть проблемы и переходить к действиям. Greenpeace восстанавливает хронологию событий.
                </p>
              </li>
              <li class="posts__item swiper-slide">
                <a class="posts__link" href="rrreakciya-s-varvaroj-shmykovoj-intervyu.php">
                  <picture class="posts__image">
                    <source srcset="img/post-new-4.webp" type="image/webp">

                    <img width="1103" height="660" src="img/post-new-4.jpg" alt="">
                  </picture>
                </a>

                <p class="hashtag">
                  <span class="hashtag__item">#спасипланету</span>
                </p>

                <a class="posts__link" href="rrreakciya-s-varvaroj-shmykovoj-intervyu.php">
                  <h3 class="posts__item-title">РРРЕАКЦИЯ с Варварой Шмыковой. Интервью</h3>
                </a>

                <p class="posts__text">
                  Голос документального веб-сериала Greenpeace актриса Варвара Шмыкова: об осознанности, климатическом кризисе и почему планету нужно спасать прямо сейчас.
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
      <!--
      <section class="calc">
        <div class="calc__wrapper">
          <h2 class="title title--calc">Углероднный калькулятор</h2>

          <p class="calc__text">
            Калькулятор предназначен для примерного расчета вашего углеродного следа. Точные цифры могут отличаться в зависимости от региона, времени года и прочих условий.
          </p>

          <p class="more more--calc">
            <a class="more__button" href="#">
              <span>старт</span>
              <svg class="more__icon" width="49" height="49" aria-label="Стрелка">
                <use xlink:href="#icon-arrow-right"></use>
              </svg>
            </a>
          </p>
        </div>
      </section>
      -->
    </main>

    <section class="popup popup--1">
      <div class="popup__wrapper">
        <header class="popup__header">
          <button class="close close--popup" type="button" name="close">
            <svg class="close__svg" width="23" height="23" aria-label="Закрыть">
              <use xlink:href="#icon-cross"></use>
            </svg>
          </button>
        </header>

        <div class="popup__left">
          <h2 class="popup__title">
            Direct measurements: 2005-present
          </h2>

          <p class="popup__sub-title">
            Data source: Monthly measurements (average seasonal cycle removed). Credit: NOAA
          </p>

          <div class="popup__widget">
            <picture class="popup__picture">
              <source srcset="img/widget-1.webp" type="image/webp">
              <img width="528" height="286" src="img/widget-1.jpg" alt="widget">
            </picture>

            <p class="popup__widget-text">
              <span>{Get Data: ftp}</span>
              <span>{snapshot: png}</span>
            </p>
          </div>

          <p class="popup__text">
            Carbon dioxide (CO2) is an important heat-trapping (greenhouse) gas, which is released through human activities such as deforestation and burning fossil fuels, as well as natural processes such as respiration and volcanic eruptions. The above graph shows CO2 levels measured at Mauna Loa Observatory, Hawaii, in recent years, with average seasonal cycle removed.
          </p>
        </div>

        <div class="popup__right">
          <h2 class="popup__title">
            Time series: 2002-2016
          </h2>

          <p class="popup__sub-title">
            Data source: Atmospheric Infrared Sounder (AIRS). Credit: NASA
          </p>

          <div class="popup__widget">
            <picture class="popup__picture">
              <source srcset="img/widget-2.webp" type="image/webp">
              <img width="527" height="335" src="img/widget-2.jpg" alt="widget">
            </picture>
          </div>

          <p class="popup__text">
            The time series shows global distribution and variation of the concentration      of mid-tropospheric carbon dioxide in parts per million (ppm). The overall color of the map shifts toward the red with advancing time due to the annual increase of CO2.
          </p>
        </div>
      </div>
    </section>

    <section class="popup popup--2">
      <div class="popup__wrapper">
        <header class="popup__header">
          <button class="close close--popup" type="button" name="close">
            <svg class="close__svg" width="23" height="23" aria-label="Закрыть">
              <use xlink:href="#icon-cross"></use>
            </svg>
          </button>
        </header>

        <div class="popup__left">
          <h2 class="popup__title">
            Direct measurements: 2005-present
          </h2>

          <p class="popup__sub-title">
            Data source: Monthly measurements (average seasonal cycle removed). Credit: NOAA
          </p>

          <div class="popup__widget">
            <picture class="popup__picture">
              <source srcset="img/widget-1.webp" type="image/webp">
              <img width="528" height="286" src="img/widget-1.jpg" alt="widget">
            </picture>

            <p class="popup__widget-text">
              <span>{Get Data: ftp}</span>
              <span>{snapshot: png}</span>
            </p>
          </div>

          <p class="popup__text">
            Carbon dioxide (CO2) is an important heat-trapping (greenhouse) gas, which is released through human activities such as deforestation and burning fossil fuels, as well as natural processes such as respiration and volcanic eruptions. The above graph shows CO2 levels measured at Mauna Loa Observatory, Hawaii, in recent years, with average seasonal cycle removed.
          </p>
        </div>

        <div class="popup__right">
          <h2 class="popup__title">
            Time series: 2002-2016
          </h2>

          <p class="popup__sub-title">
            Data source: Atmospheric Infrared Sounder (AIRS). Credit: NASA
          </p>

          <div class="popup__widget">
            <picture class="popup__picture">
              <source srcset="img/widget-2.webp" type="image/webp">
              <img width="527" height="335" src="img/widget-2.jpg" alt="widget">
            </picture>
          </div>

          <p class="popup__text">
            The time series shows global distribution and variation of the concentration      of mid-tropospheric carbon dioxide in parts per million (ppm). The overall color of the map shifts toward the red with advancing time due to the annual increase of CO2.
          </p>
        </div>
      </div>
    </section>

    <section class="popup popup--3">
      <div class="popup__wrapper">
        <header class="popup__header">
          <button class="close close--popup" type="button" name="close">
            <svg class="close__svg" width="23" height="23" aria-label="Закрыть">
              <use xlink:href="#icon-cross"></use>
            </svg>
          </button>
        </header>

        <div class="popup__left">
          <h2 class="popup__title">
            Direct measurements: 2005-present
          </h2>

          <p class="popup__sub-title">
            Data source: Monthly measurements (average seasonal cycle removed). Credit: NOAA
          </p>

          <div class="popup__widget">
            <picture class="popup__picture">
              <source srcset="img/widget-1.webp" type="image/webp">
              <img width="528" height="286" src="img/widget-1.jpg" alt="widget">
            </picture>

            <p class="popup__widget-text">
              <span>{Get Data: ftp}</span>
              <span>{snapshot: png}</span>
            </p>
          </div>

          <p class="popup__text">
            Carbon dioxide (CO2) is an important heat-trapping (greenhouse) gas, which is released through human activities such as deforestation and burning fossil fuels, as well as natural processes such as respiration and volcanic eruptions. The above graph shows CO2 levels measured at Mauna Loa Observatory, Hawaii, in recent years, with average seasonal cycle removed.
          </p>
        </div>

        <div class="popup__right">
          <h2 class="popup__title">
            Time series: 2002-2016
          </h2>

          <p class="popup__sub-title">
            Data source: Atmospheric Infrared Sounder (AIRS). Credit: NASA
          </p>

          <div class="popup__widget">
            <picture class="popup__picture">
              <source srcset="img/widget-2.webp" type="image/webp">
              <img width="527" height="335" src="img/widget-2.jpg" alt="widget">
            </picture>
          </div>

          <p class="popup__text">
            The time series shows global distribution and variation of the concentration      of mid-tropospheric carbon dioxide in parts per million (ppm). The overall color of the map shifts toward the red with advancing time due to the annual increase of CO2.
          </p>
        </div>
      </div>
    </section>


<?php
  include("footer.php");
 ?>
