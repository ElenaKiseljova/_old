<?php
$product_id = 2789;
$price_new = 690; // цена за 30 масок
$product_name = 'Медицинские маски - 30 шт';

$currency = 'грн';

if (!isset($_COOKIE['left'])) {
  $left = (int) rand(10, 28);

  $expired = time() + 3600*24;

  setcookie('left', $left, $expired, '/');
} else {
  $left = $_COOKIE['left'];
}


// Список преимуществ

$advantages = array(
  '0' => 'Маски трёхслойные с плотность 40 г/м2 в каждом слое. Очень проста в применении',
  '1' => 'Маски имеют высокую защиту от бактерий и инфекций, передаваемых воздушно-капельным путём',
  '2' => 'Маски проходят жёсткий контроль качества и тестируются на способность фильтрации воздуха'
);

// Список продуктов

$products_list = array(
  '0' => array(
    'id' => 2805,
    'price' => '199',
    'title' => 'Респиратор UVEX 2110 silv-air с клапаном степень защиты FFP1'
  ),
  '1' => array(
    'id' => 2802,
    'price' => '119',
    'title' => 'Респиратор 3м с клапаном степень защиты FFP1'
  ),
  '2' => array(
    'id' => 2806,
    'price' => '109',
    'title' => 'Респиратор FFP1 с клапаном выдоха VENITEX'
  ),
  '3' => array(
    'id' => 2811,
    'price' => '100',
    'title' => 'Антисептик для рук универсальный 100 мл.'
  ),
  '4' => array(
    'id' => 2768,
    'price' => '250',
    'title' => 'Универсальная защитная многоразовая маска Pitta (чёрная)'
  ),
  '5' => array(
    'id' => 2812,
    'price' => '350',
    'title' => 'Антисептик Септоплюс-ультра 1 литр'
  )
);
 ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/adv-1.png" type="image/png">

    <link rel="stylesheet" href="plugins/plugins.css">
    <link rel="stylesheet" href="css/style.min.css">

    <title>Медицинские маски - 30 шт</title>
  </head>
  <body>
    <svg style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <symbol id="icon-bag" viewBox="0 0 105 104">
    <circle cx="52.5126" cy="51.7875" r="51.7875" fill="#9D6FFF"/>
    <path d="M44.1514 46.384V33.511C44.1514 31.5799 45.7313 30 47.6624 30H58.0886C60.0197 30 61.5996 31.5805 61.5996 33.511V46.384M44.1514 46.384C45.5381 46.384 46.6622 47.5081 46.6622 48.8948C46.6622 50.2814 45.5381 51.4055 44.1514 51.4055C42.7647 51.4055 41.6406 50.2814 41.6406 48.8948C41.6406 47.5081 42.7647 46.384 44.1514 46.384ZM61.5996 46.384C62.9863 46.384 64.1104 47.5081 64.1104 48.8948C64.1104 50.2814 62.9863 51.4055 61.5996 51.4055C60.2129 51.4055 59.0888 50.2814 59.0888 48.8948C59.0888 47.5135 60.2043 46.393 61.5835 46.3842L61.5996 46.384ZM67.9833 38.2975L72.0261 74.3652H33.7251L37.7679 38.2975H67.9833Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </symbol>
    <symbol id="icon-car" viewBox="0 0 104 104">
    <circle cx="51.9377" cy="52.2123" r="51.7875" fill="#9D6FFF"/>
    <path d="M38.577 33H63.6073V53.6894M53.9931 56.1738H17.1501M53.9931 47.9062H23.9904M53.9931 39.6388H30.6206M63.6073 38.8006H74.3817C76.9827 39.0192 78.8226 40.3162 80.0979 42.413L84.6586 52.8902V63.2721C84.7153 65.0241 84.0368 65.8353 82.7116 65.8196H75.1907M75.1907 65.8196C75.1907 68.749 72.8159 71.1239 69.8865 71.1239C66.9569 71.1239 64.5821 68.749 64.5821 65.8196M75.1907 65.8196C75.1907 64.3338 74.5797 62.991 73.5954 62.0279C72.6389 61.092 71.3303 60.515 69.8865 60.515C66.9569 60.515 64.5821 62.8901 64.5821 65.8196M64.5821 65.8196H43.1992M43.1992 65.8196C43.1992 68.749 40.8242 71.1239 37.8948 71.1239C34.9654 71.1239 32.5904 68.749 32.5904 65.8196M43.1992 65.8196C43.1992 62.8901 40.8242 60.515 37.8948 60.515C34.9654 60.515 32.5904 62.8901 32.5904 65.8196M32.5904 65.8196H21.8355" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </symbol>
    <symbol id="icon-list" viewBox="0 0 104 104">
    <circle cx="51.7875" cy="51.7875" r="51.7875" fill="#9D6FFF"/>
    <path d="M40.2703 36.9444H61.7297M40.2703 42.9668H52.0452M40.2703 48.9891H57.0182M40.2703 55.0112H61.7297M40.2703 61.0335H52.0452M40.2703 67.0556H57.0182M45.7765 30H37.3058C35.4875 30 34 31.5113 34 33.3587V70.6413C34 72.4887 35.4875 74 37.3058 74H64.6942C66.5125 74 68 72.4887 68 70.6413V33.3587C68 31.5113 66.5125 30 64.6942 30H45.7765Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </symbol>
    <symbol id="icon-phone" viewBox="0 0 105 104">
    <circle cx="52.3626" cy="51.7875" r="51.7875" fill="#9D6FFF"/>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M38.5751 32.3198C38.5751 30.4938 40.0689 29 41.8949 29H63.449C65.275 29 66.7688 30.4938 66.7688 32.3198V70.0454C66.7688 71.8714 65.275 73.3652 63.449 73.3652H41.8949C40.0689 73.3652 38.5751 71.8714 38.5751 70.0454V32.3198ZM52.6688 62.737C51.1448 62.737 49.9094 63.9725 49.9094 65.4965C49.9094 67.0205 51.1448 68.256 52.6688 68.256C54.1928 68.256 55.4283 67.0205 55.4283 65.4965C55.4283 63.9725 54.1928 62.737 52.6688 62.737Z" stroke="white" stroke-width="2"/>
    </symbol>
    </svg>

    <header class="page-header">
      <picture class="page-header__picture picture">
        <source type="image/webp" media="(min-width: 150px)" srcset="img/header-bg.webp">

        <img src="img/header-bg.png" alt="Фон">
      </picture>

      <div class="page-header__wrapper">
        <h2 class="page-header__title">Защитите себя и своих близких от гриппа и прочих вирусов</h2>
        <p class="page-header__text">Трехслойные медицинские маски с быстрой доставкой на любое отделение Новой Почты в Украине</p>
        <p class="page-header__price">30 шт в упаковке по цене <?= $price_new ?> грн*</p>
        <p class="page-header__left">* Осталось <?= $left ?> упаковок</p>

        <a class="page-header__button button-order button" href="#order">Оформить заказ</a>
      </div>
    </header>

    <main class="page-main">
      <h1 class="visually-hidden">Сайт по продаже Медицинских масок</h1>

      <section class="advantages" id="s1">
        <div class="advantages__wrapper">

          <h2 class="advantages__title title">Почему клиенты покупают наши маски?</h2>

          <ul class="advantages__list">
            <?php $index = 1; ?>
            <?php foreach ($advantages as $item): ?>
              <li class="advantages__item">
                <picture class="advantages__picture picture">
                  <source type="image/webp" media="(min-width: 150px)" srcset="img/adv-<?= $index ?>.webp">

                  <img src="img/adv-<?= $index ?>.png" alt="Преимущество">
                </picture>
                <p class="advantages__text"><?= $item ?></p>
              </li>
            <?php $index++; ?>
            <?php endforeach; ?>

          </ul>
        </div>
      </section>

      <section class="catalog" id="s2">
        <div class="catalog__wrapper">

          <h2 class="catalog__title title">Каталог</h2>

          <ul class="catalog__list">
            <?php $i = 1; ?>
            <?php foreach ($products_list as $item): ?>
              <li class="catalog__item">
                <picture class="catalog__picture picture">
                  <source type="image/webp" media="(min-width: 150px)" srcset="img/prod-<?= $i ?>.webp">

                  <img src="img/prod-<?= $i ?>.png" alt="<?= $item['title'] ?>">
                </picture>

                <p class="catalog__text"><?= $item['title'] ?></p>

                <p class="catalog__price"><?= $item['price'] . ' ' . $currency; ?></p>

                <button class="catalog__button button-order button" type="button" name="popup" data-id="<?= $item['id'] ?>">Заказать</button>
              </li>
            <?php $i++; ?>
            <?php endforeach; ?>

          </ul>
        </div>
      </section>

      <section class="delivery" id="s3">
        <div class="delivery__wrapper">

          <h2 class="delivery__title title">Как оформить заказ?</h2>

          <ul class="delivery__list">
            <li class="delivery__item">
              <svg class="delivery__svg">
                <use xlink:href="#icon-list"></use>
              </svg>
              <h3 class="delivery__item-title">ЗАЯВКА</h3>
              <p class="delivery__item-text">Выбираете товар и оставляете заявку на сайте</p>
            </li>
            <li class="delivery__item">
              <svg class="delivery__svg">
                <use xlink:href="#icon-phone"></use>
              </svg>
              <h3 class="delivery__item-title">ЗВОНОК</h3>
              <p class="delivery__item-text">Наш менеджер перезвонит Вам для подтверждения заказа</p>
            </li>
            <li class="delivery__item">
              <svg class="delivery__svg">
                <use xlink:href="#icon-car"></use>
              </svg>
              <h3 class="delivery__item-title">ДОСТАВКА</h3>
              <p class="delivery__item-text">Мы отправляем Ваш заказ в течение 1-3 дней</p>
            </li>
            <li class="delivery__item">
              <svg class="delivery__svg">
                <use xlink:href="#icon-bag"></use>
              </svg>
              <h3 class="delivery__item-title">ПОЛУЧЕНИЕ</h3>
              <p class="delivery__item-text">Оплачиваете заказ по факту получения на руки</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="order" id="order">
        <picture class="order__picture picture">
          <source type="image/webp" media="(min-width: 150px)" srcset="img/order-bg.webp">

          <img src="img/order-bg.png" alt="Фон">
        </picture>

        <div class="order__wrapper">
            <h2 class="order__title title">Медицинские маски - 30 шт в упаковке за <?= $price_new ?> <?= $currency ?>*</h2>

            <p class="order__text">
              *Осталось <?= $left ?> упаковок
            </p>

            <form class="order__form form" action="zakaz.php" method="post">
              <label class="visually-hidden" for="name-1">Введите Ваше имя:</label>
              <input class="order__input form__input" type="text" name="name" value="" id="name-1" required placeholder="Имя">
              <label class="visually-hidden" for="phone-1">Введите Ваш номер телефона:</label>
              <input class="order__input form__input" type="tel" name="phone" value="" id="phone-1" required placeholder="Телефон">

              <input type="hidden" name="s1" class="price_field_s1" value="<?= $price_new ?>"/>
              <input type="hidden" name="s2" class="price_field_s2" value="<?= $product_id ?>"/>
              <input type="hidden" name="s3" class="price_field_s3" value="<?= $product_name?>"/>
              <input type="hidden" name="utm_source" value="<?= $_GET['utm_source'] ?>"/>
              <input type="hidden" name="utm_medium" value="<?= $_GET['utm_medium'] ?>"/>
              <input type="hidden" name="utm_term" value="<?= $_GET['utm_term'] ?>"/>
              <input type="hidden" name="utm_content" value="<?= $_GET['utm_content'] ?>"/>
              <input type="hidden" name="utm_campaign" value="<?= $_GET['utm_campaign'] ?>"/>
              <input type="hidden" name="server_name" value="<?= $_SERVER['SERVER_NAME'] ?>"/>
              <input type="hidden" name="php_self" value="<?= $_SERVER['PHP_SELF'] ?>"/>
              <input type="hidden" name="ga" value="<?= $ga ?>"/>
              <input type="hidden" name="uid" value="<?= $uid ?>">

              <button class="order__submit button button-order" type="submit" name="button">Оформить заказ</button>
            </form>
        </div>
      </section>
    </main>

    <footer class="page-footer">
      <div class="page-footer__wrapper">
        <p class="page-footer__text">Официальное представительство в Украине ООО "Логос"</p>
        <p class="page-footer__text">Украина, Днепропетровская область, г. Кривой Рог, пл. Горького, 10, офис 9</p>
        <a class="page-footer__text page-footer__text--privacy" href="politics.html">Политика конфиденциальности</a>
      </div>
    </footer>

    <section class="popup">
      <h2 class="visually-hidden">Всплывающее окно с формой заказа</h2>

      <p class="popup__text">Вы выбрали:</p>

      <h3 class="popup__product"></h3>

      <p class="popup__text">Для завершения заказа, заполните форму ниже. Наш консультант свяжется с вами в течение 15 минут</p>

      <form class="popup__form form" action="zakaz.php" method="post">
        <label class="visually-hidden" for="name-2">Введите Ваше имя:</label>
        <input class="popup__input form__input" type="text" name="name" value="" id="name-2" required placeholder="Имя">
        <label class="visually-hidden" for="phone-2">Введите Ваш номер телефона:</label>
        <input class="popup__input form__input" type="tel" name="phone" value="" id="phone-2" required placeholder="Телефон">

        <input type="hidden" name="s1" class="price_field_s1" value=""/>
        <input type="hidden" name="s2" class="price_field_s2" value=""/>
        <input type="hidden" name="s3" class="price_field_s3" value=""/>
        <input type="hidden" name="utm_source" value="<?= $_GET['utm_source'] ?>"/>
        <input type="hidden" name="utm_medium" value="<?= $_GET['utm_medium'] ?>"/>
        <input type="hidden" name="utm_term" value="<?= $_GET['utm_term'] ?>"/>
        <input type="hidden" name="utm_content" value="<?= $_GET['utm_content'] ?>"/>
        <input type="hidden" name="utm_campaign" value="<?= $_GET['utm_campaign'] ?>"/>
        <input type="hidden" name="server_name" value="<?= $_SERVER['SERVER_NAME'] ?>"/>
        <input type="hidden" name="php_self" value="<?= $_SERVER['PHP_SELF'] ?>"/>
        <input type="hidden" name="ga" value="<?= $ga ?>"/>
        <input type="hidden" name="uid" value="<?= $uid ?>">

        <button class="popup__submit button button-order" type="submit" name="button">Оформить заказ</button>
      </form>

      <button class="button popup-close"><span class="visually-hidden">Закрыть</span></button>
    </section>
    <div class="popup-overlay"></div>


    <!-- Optional JavaScript -->
    <script src="plugins/plugins.js"></script>

    <script defer src="js/script.min.js"></script>
  </body>
</html>
