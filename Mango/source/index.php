<?php
    //*********************** Главная страница *************************
    session_start();
    $period_cookie = 2592000; // 30 дней (2592000 секунд)

    if($_GET){
    setcookie("utm_source",$_GET['utm_source'],time()+$period_cookie);
    setcookie("utm_medium",$_GET['utm_medium'],time()+$period_cookie);
    setcookie("utm_term",$_GET['utm_term'],time()+$period_cookie);
    setcookie("utm_content",$_GET['utm_content'],time()+$period_cookie);
    setcookie("utm_campaign",$_GET['utm_campaign'],time()+$period_cookie);
    }

    if(!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
    }
    $_SESSION['utms']['utm_source'] = $_GET['utm_source'] ? $_GET['utm_source'] : $_COOKIE['utm_source'];
    $_SESSION['utms']['utm_medium'] = $_GET['utm_medium'] ? $_GET['utm_medium'] : $_COOKIE['utm_medium'];
    $_SESSION['utms']['utm_term'] = $_GET['utm_term'] ? $_GET['utm_term'] : $_COOKIE['utm_term'];
    $_SESSION['utms']['utm_content'] = $_GET['utm_content'] ? $_GET['utm_content'] : $_COOKIE['utm_content'];
    $_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'] ? $_GET['utm_campaign'] : $_COOKIE['utm_campaign'];

    // параметры запроса
    $data = array(
        'key' => '5ec4e8498eb46e71a1ea72cae08677b2', //Ваш секретный токен
        'product_id' => '12' // ID товара (45,46,47) можно несколько через запятую
    );

    // запрос
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://myleads.lp-crm.biz/api/getProduct.html');
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    $out = curl_exec($curl);
    curl_close($curl);


    //$out – ответ сервера в формате JSON

    // price product

    $product_id = 12;

    $product_name = 'Пюре из спелых плодов манго';

    $sale = 58;

    $price_new = (int) json_decode($out)->data->price;

    $price_old = round($price_new*100/(100-$sale));

    $currency = 'грн';

    $ga = '';

    $marga = 0;

    //-------------------
?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '2414718042189465');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=2414718042189465&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,800,800i&display=swap&subset=cyrillic" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link media="none" onload="if(media!='all') media='all'" rel="stylesheet" href="add/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link media="none" onload="if(media!='all') media='all'" type="text/css" rel="stylesheet" href="add/slick/slick.css"/>
		<link media="none" onload="if(media!='all') media='all'" type="text/css" rel="stylesheet" href="add/slick/slick-theme.css"/>

    <link media="none" onload="if(media!='all') media='all'" rel="stylesheet" href="css/style.min.css">

    <link rel="icon" href="img/favicon.ico" type="image/x-icon">

    <title>Пюре из плодов манго</title>
  </head>
  <body>
    <div class="page-container">
      <!-- HEADER section -->

      <header class="page-header">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
              <div class="header__wrapper">

                <!-- section 1 -->
                <div class="img-wrapper img-bg img-bg--1">
                  <picture class="image-item image-item--bg image-item--bg-1">
                    <!-- WEBP -->
                    <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/3.webp">
                    <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/3.webp">
                    <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/3.webp">

                    <source media="(min-width: 992px)" srcset="img/shake/3.png">
                    <source media="(min-width: 768px)" srcset="img/shake/3.png">
                    <source media="(min-width: 240px)" srcset="img/shake/3.png">


                    <img src="img/shake/3.png" alt="Манго фон">
                  </picture>
                </div>
                <div class="img-wrapper img-bg img-bg--2">
                  <picture class="image-item image-item--bg image-item--bg-2">
                    <!-- WEBP -->
                    <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/2.webp">
                    <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/2.webp">
                    <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/2.webp">

                    <source media="(min-width: 992px)" srcset="img/shake/2.png">
                    <source media="(min-width: 768px)" srcset="img/shake/2.png">
                    <source media="(min-width: 240px)" srcset="img/shake/2.png">


                    <img src="img/shake/2.png" alt="Манго фон">
                  </picture>
                </div>
                <div class="img-wrapper img-bg img-bg--3">
                  <picture class="image-item image-item--bg image-item--bg-3">
                    <!-- WEBP -->
                    <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/6.webp">
                    <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/6.webp">
                    <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/6.webp">

                    <source media="(min-width: 992px)" srcset="img/shake/6.png">
                    <source media="(min-width: 768px)" srcset="img/shake/6.png">
                    <source media="(min-width: 240px)" srcset="img/shake/6.png">


                    <img src="img/shake/6.png" alt="Манго фон">
                  </picture>
                </div>
                <div class="img-wrapper img-bg img-bg--4">
                  <picture class="image-item image-item--bg image-item--bg-4">
                    <!-- WEBP -->
                    <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/1.webp">
                    <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/1.webp">
                    <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/1.webp">

                    <source media="(min-width: 992px)" srcset="img/shake/1.png">
                    <source media="(min-width: 768px)" srcset="img/shake/1.png">
                    <source media="(min-width: 240px)" srcset="img/shake/1.png">


                    <img src="img/shake/1.png" alt="Манго фон">
                  </picture>
                </div>

                <!-- section 1-tab -->
                <div class="img-wrapper img-bg img-bg--1-1">
                  <picture class="image-item image-item--bg image-item--bg-1-1">
                    <!-- WEBP -->
                    <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/4.webp">
                    <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/4.webp">
                    <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/4.webp">

                    <source media="(min-width: 992px)" srcset="img/shake/4.png">
                    <source media="(min-width: 768px)" srcset="img/shake/4.png">
                    <source media="(min-width: 240px)" srcset="img/shake/4.png">


                    <img src="img/shake/4.png" alt="Манго фон">
                  </picture>
                </div>

                <!-- section 1-mob -->

                <div class="img-wrapper img-bg img-bg--1-2">
                  <picture class="image-item image-item--bg image-item--bg-1-2">
                    <!-- WEBP -->
                    <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/3.webp">
                    <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/3.webp">
                    <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/3.webp">

                    <source media="(min-width: 992px)" srcset="img/shake/3.png">
                    <source media="(min-width: 768px)" srcset="img/shake/3.png">
                    <source media="(min-width: 240px)" srcset="img/shake/3.png">


                    <img src="img/shake/3.png" alt="Манго фон">
                  </picture>
                </div>
                <div class="header__description">
                  <div class="header__title">
                    <div class="header__text header__text--1">
                      <img class="header__svg header__svg--1" src="img/rect-1.svg" alt="Фон">

                      <p class="header__p header__p--1">Пюре из плодов</p>

                    </div>
                    <div class="header__text header__text--2">
                      <img class="header__svg header__svg--2" src="img/rect-2.svg" alt="Фон">

                      <p class="header__p header__p--2">Манго</p>
                    </div>
                    <div class="header__text header__text--3">
                      <p class="header__p header__p--3">Без сахара</p>
                    </div>
                    <div class="header__text header__text--4">
                      <img class="header__svg header__svg--3" src="img/rect-3.svg" alt="Фон">

                      <p class="header__p header__p--4">3.1kg</p>
                    </div>
                  </div>

                  <div class="header__bottom">
                    <div class="header__price">
                      <div class="header__text header__text--price-new">
                        <img class="header__svg header__svg--4" src="img/rect-4.svg" alt="Фон">
                        <p class="header__p header__p--5"><?= $price_new ?><?= $currency ?></p>
                      </div>
                      <p class="header__text header__text--price-old"><?= $price_old ?><?= $currency ?></p>
                    </div>
                    <div class="header__text header__text--5">
                      <p class="header__text--5-line header__text--5-line-1"><span>Экономичное</span> пюре для </p>
                      <p class="header__text--5-line header__text--5-line-2">приготовления коктейлей, </p>
                      <p class="header__text--5-line header__text--5-line-3">лимонадов, соусов и </p>
                      <p class="header__text--5-line header__text--5-line-4">простых десертов</p>

                      <div class="svg-wrapper svg-wrapper--header">
                        <svg class="arrows arrows--header" width="99" height="35" viewBox="0 0 99 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2 9.58792C35.1605 -7.873 79.3639 6.83784 95.7056 33M95.7056 33L97 14.2429M95.7056 33L77.0968 30.2357" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <main class="page-main">
        <h1 class="visually-hidden">Сайт по продаже пюре из плодов манго</h1>

        <section class="advantages">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <h2 class="visually-hidden">Блок с преимуществами нашего товара</h2>

                <ul class="advantages__list">
                  <li class="advantages__item advantages__item--1">
                    <div class="svg-wrapper svg-wrapper--advantages">
                      <svg width="46" height="50" viewBox="0 0 46 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.43482 48.7825C6.2225 49.3784 5.6105 49.6833 5.06095 49.4477C4.52389 49.226 4.24911 48.5469 4.46144 47.9371L4.49891 47.8124C7.24666 39.7744 10.0069 31.7363 16.7014 26.5532C15.5024 26.8442 14.3408 27.1491 13.1918 27.4817C9.54477 28.5211 5.88527 29.7684 1.38896 31.4037C1.12668 31.5007 0.839411 31.473 0.577126 31.3344C0.0525567 31.0296 -0.147279 30.3228 0.115005 29.7546C3.33736 22.8114 7.28412 19.6377 11.693 18.8894C13.2417 18.626 14.8529 18.6815 16.4891 18.9725C13.0419 16.9491 10.6688 16.5611 4.57385 15.5771L1.11419 15.0089C0.789452 14.9535 0.502188 14.7318 0.339821 14.3992C0.0650464 13.8309 0.252393 13.1242 0.764473 12.8193C8.28331 8.32906 13.7039 7.87172 17.7505 10.0891C21.6349 12.2233 24.1203 16.769 25.8689 22.548C31.4018 23.7399 35.7733 25.8048 38.0839 29.4635C40.5194 33.3162 40.6068 38.7765 37.297 46.5374C37.0472 47.1195 36.4102 47.3689 35.8857 47.1056C35.6109 46.9532 35.4235 46.7037 35.3361 46.4127C33.5875 40.5643 32.5634 37.3214 31.1271 34.4526C30.7774 33.732 30.3902 33.0391 29.953 32.3184C31.1895 36.0602 31.5267 39.8714 29.1537 43.5994C28.5667 44.5002 27.8797 45.3594 27.1054 46.1494C26.3435 46.9393 25.5192 47.6738 24.6449 48.3806C24.4575 48.533 24.2202 48.6162 23.9704 48.6023C23.3959 48.5746 22.9463 48.0203 22.9713 47.3828L23.7082 29.6021C21.51 31.5423 19.8488 34.0646 18.5249 36.9195C16.8263 40.5643 15.6648 44.7773 14.6031 49.129C14.4532 49.7526 13.8787 50.1268 13.3167 49.9605C12.7421 49.7942 12.4174 49.1428 12.5673 48.5192C13.6539 44.0428 14.8654 39.6774 16.639 35.8524C18.375 32.1244 20.6482 28.9092 23.833 26.6086L23.9205 25.1812C13.1293 29.1725 9.79457 38.9151 6.4598 48.6716L6.43482 48.7825ZM44.2663 6.91547C44.8283 6.77689 45.3904 7.17879 45.5153 7.81629C45.6277 8.43993 45.2655 9.06357 44.7034 9.20215C43.6168 9.45161 42.6176 9.83965 41.6934 10.3386C40.7567 10.8513 39.8949 11.4888 39.0955 12.2095C38.6959 12.5698 38.1338 12.5421 37.7466 12.1956C36.9473 11.475 36.0855 10.8513 35.1613 10.3524L35.0738 10.297C34.1746 9.81194 33.2004 9.45161 32.1512 9.20215C31.5892 9.06357 31.2145 8.43993 31.3394 7.81629C31.4643 7.17879 32.0263 6.77689 32.5884 6.91547C33.7999 7.19265 34.9364 7.63612 35.9981 8.20433L36.0855 8.24591C36.8973 8.68938 37.6842 9.21601 38.4211 9.81194C39.1705 9.21601 39.9448 8.68938 40.7692 8.24591C41.8558 7.64998 43.0298 7.20651 44.2663 6.91547ZM40.944 26.0404C40.5568 26.5255 39.8824 26.5532 39.4577 26.1097C39.0331 25.6801 38.9956 24.9317 39.3953 24.4605C40.382 23.2687 41.1813 21.869 41.7184 20.3168L41.7434 20.2752C42.2429 18.8062 42.5302 17.2125 42.5302 15.5356C42.5302 15.0782 42.5052 14.6486 42.4678 14.2606V14.219C42.4303 13.8171 42.3803 13.4013 42.3054 12.9856C42.193 12.3481 42.5677 11.7383 43.1422 11.6136C43.7043 11.4888 44.2663 11.9046 44.3787 12.5282C44.4536 12.9856 44.5286 13.4845 44.566 13.9834V14.025C44.616 14.5516 44.641 15.0505 44.641 15.5356C44.641 17.4896 44.3038 19.3744 43.7043 21.1067L43.6918 21.176C43.0548 22.9915 42.118 24.6407 40.944 26.0404ZM39.6451 3.65869C40.0947 4.07445 40.1572 4.80896 39.7825 5.30787C39.4078 5.79292 38.7458 5.86222 38.2962 5.44646C37.247 4.46249 36.0355 3.67255 34.7116 3.14592C33.4502 2.63315 32.0763 2.35597 30.64 2.35597C28.7415 2.35597 26.943 2.84103 25.3443 3.72798C23.6957 4.64265 22.2593 5.97308 21.1478 7.59455C20.798 8.10732 20.1361 8.21819 19.674 7.83015C19.2118 7.42824 19.1119 6.69374 19.4616 6.18096C20.7606 4.26847 22.4592 2.70244 24.4076 1.62146C26.281 0.582064 28.4043 0 30.64 0C32.3136 0 33.9373 0.332608 35.436 0.942389C36.9848 1.56603 38.4086 2.49456 39.6451 3.65869ZM25.8814 28.0638L25.1819 44.9298L25.669 44.4447C26.331 43.7518 26.9305 43.0173 27.4176 42.2551C30.2153 37.8757 28.0796 32.8728 25.8814 28.0638ZM36.3603 30.8078C34.7241 28.2301 31.7141 26.5393 27.8548 25.4307C30.2403 28.632 31.7391 30.8632 32.9756 33.3162C34.237 35.8524 35.1737 38.5548 36.4602 42.7401C38.2962 37.3491 38.0589 33.5103 36.3603 30.8078ZM22.9713 20.6217C21.4725 16.6858 19.5241 13.6785 16.8138 12.1956C13.9162 10.6019 10.0444 10.7127 4.78617 13.235L4.88609 13.2489C13.9911 14.7318 15.1527 14.9258 22.9713 20.6217ZM21.5599 23.0608C18.1752 21.5225 14.9528 20.7187 12.0053 21.2176C8.83285 21.7442 5.89776 23.8508 3.33736 28.244C6.69711 27.0521 9.65718 26.082 12.6672 25.2228C15.4899 24.419 18.3251 23.726 21.5599 23.0608Z" fill="black"/>
                      </svg>
                    </div>
                    <p class="advantages__text advantages__text--1">Выгодная цена</p>
                  </li>

                  <li class="advantages__item advantages__item--2">
                    <div class="svg-wrapper svg-wrapper--advantages">
                      <svg width="33" height="50" viewBox="0 0 33 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.978 0H24.1649C24.8447 0 25.4732 0.288714 25.9221 0.748031L25.9477 0.774278C26.3838 1.2336 26.666 1.86352 26.666 2.54593V9.68504C26.666 10.3806 26.3838 11.0236 25.9221 11.4829L25.8964 11.5092C25.6912 11.7192 25.4603 11.8898 25.191 12.0079C25.486 15.0525 26.8584 15.3806 28.141 15.6693C30.2061 16.1417 32.1429 16.5879 32.1429 20.9711V44.1207C32.1429 45.7349 31.4887 47.2047 30.4498 48.2677L30.3856 48.3333C29.3467 49.3701 27.9358 50 26.3838 50H16.0971H16.0714H16.0458H5.74621C4.20705 50 2.79615 49.3701 1.75721 48.3333L1.68025 48.2677C0.641318 47.2047 0 45.7349 0 44.1207V20.9711C0 16.5879 1.93678 16.1417 4.00182 15.6693C5.28446 15.3806 6.65688 15.0525 6.95189 12.0079C6.66971 11.8766 6.42601 11.706 6.22078 11.4961L6.19513 11.4567C5.75904 10.9974 5.47686 10.3675 5.47686 9.68504V2.54593C5.47686 1.85039 5.75904 1.20735 6.20796 0.748031L6.23361 0.721785C6.69536 0.275591 7.2982 0 7.978 0ZM11.1718 35.4199L11.1333 35.3806L11.0948 35.3412L11.082 35.3281L7.93952 32.0997C6.70819 30.8136 6.07969 29.1207 6.07969 27.4278C6.07969 25.7087 6.72101 23.9895 8.00365 22.6772C9.27346 21.3648 10.9665 20.7218 12.6468 20.7218C14.327 20.7218 16.0073 21.3648 17.2899 22.6772L20.4067 25.8661L20.4196 25.8793L20.4452 25.9055L23.5492 29.0945C24.8318 30.3937 25.4732 32.126 25.4732 33.8451C25.4732 35.5643 24.8318 37.2835 23.562 38.5827C22.2794 39.895 20.5991 40.5512 18.9061 40.5512C17.2258 40.5512 15.5455 39.895 14.2629 38.5958L11.1974 35.4462L11.1718 35.4199ZM11.9029 33.0315L18.1108 26.6667L15.7508 24.252C14.8914 23.3727 13.7755 22.9396 12.6468 22.9396C11.5181 22.9396 10.3894 23.3727 9.54281 24.252C8.68345 25.1181 8.26018 26.273 8.26018 27.4278C8.26018 28.5564 8.67062 29.685 9.47868 30.5512L11.9029 33.0315ZM19.65 28.2415L13.442 34.6063L15.8021 37.021C16.6614 37.8871 17.7902 38.3333 18.9061 38.3333C20.0348 38.3333 21.1635 37.8871 22.0229 37.021C22.8694 36.1549 23.3055 35 23.3055 33.8451C23.3055 32.6903 22.8694 31.5354 22.0229 30.6693L19.65 28.2415ZM16.0458 47.7822H16.0714H16.0971H26.3838C27.3458 47.7822 28.218 47.3885 28.8721 46.7585L28.9106 46.706C29.5648 46.0367 29.9624 45.1181 29.9624 44.1207V20.9711C29.9624 18.3596 28.8465 18.0971 27.6665 17.8346C25.6142 17.3622 23.4338 16.8504 23.0361 12.2441H9.10672C8.69627 16.8504 6.51579 17.3622 4.4764 17.8346C3.28355 18.0971 2.16765 18.3596 2.16765 20.9711V44.1207C2.16765 45.1181 2.5781 46.0367 3.21942 46.706L3.27072 46.7585C3.91204 47.3885 4.79706 47.7822 5.74621 47.7822H16.0458ZM21.1891 3.83202C21.1891 3.22835 21.6765 2.72966 22.2794 2.72966C22.8822 2.72966 23.3696 3.22835 23.3696 3.83202V8.39895C23.3696 9.01575 22.8822 9.51444 22.2794 9.51444C21.6765 9.51444 21.1891 9.01575 21.1891 8.39895V3.83202ZM18.0852 3.83202C18.0852 3.22835 18.5726 2.72966 19.1754 2.72966C19.7782 2.72966 20.2656 3.22835 20.2656 3.83202V8.39895C20.2656 9.01575 19.7782 9.51444 19.1754 9.51444C18.5726 9.51444 18.0852 9.01575 18.0852 8.39895V3.83202ZM14.9812 3.83202C14.9812 3.22835 15.4686 2.72966 16.0714 2.72966C16.6743 2.72966 17.1617 3.22835 17.1617 3.83202V8.39895C17.1617 9.01575 16.6743 9.51444 16.0714 9.51444C15.4686 9.51444 14.9812 9.01575 14.9812 8.39895V3.83202ZM11.8772 3.83202C11.8772 3.22835 12.3646 2.72966 12.9675 2.72966C13.5575 2.72966 14.0449 3.22835 14.0449 3.83202V8.39895C14.0449 9.01575 13.5575 9.51444 12.9675 9.51444C12.3646 9.51444 11.8772 9.01575 11.8772 8.39895V3.83202ZM8.77323 3.83202C8.77323 3.22835 9.26063 2.72966 9.86347 2.72966C10.4535 2.72966 10.9409 3.22835 10.9409 3.83202V8.39895C10.9409 9.01575 10.4535 9.51444 9.86347 9.51444C9.26063 9.51444 8.77323 9.01575 8.77323 8.39895V3.83202ZM24.1649 2.21785H7.978C7.88821 2.21785 7.81125 2.25722 7.74712 2.30971C7.69582 2.37533 7.65734 2.45407 7.65734 2.54593V9.68504C7.65734 9.7769 7.69582 9.85564 7.74712 9.92126C7.81125 9.97375 7.88821 10.0131 7.978 10.0131H24.1649C24.2546 10.0131 24.3316 9.97375 24.3957 9.92126C24.447 9.85564 24.4855 9.7769 24.4855 9.68504V2.54593C24.4855 2.45407 24.447 2.37533 24.3957 2.30971C24.3316 2.25722 24.2546 2.21785 24.1649 2.21785Z" fill="black"/>
                      </svg>
                    </div>
                    <p class="advantages__text advantages__text--2">Витамины круглый год</p>
                  </li>

                  <li class="advantages__item advantages__item--3">
                    <div class="svg-wrapper svg-wrapper--advantages">
                      <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M49.8671 26.858C49.1895 33.4027 46.1733 39.2124 41.6955 43.3722C37.2708 47.4903 31.4111 50 25.0066 50C18.5889 50 12.7425 47.4903 8.30454 43.3722C3.84002 39.2124 0.810524 33.4027 0.132873 26.858L0 25.5685H3.69386C3.95961 24.071 4.66383 22.726 5.66038 21.7138C6.73665 20.6184 8.1451 19.8835 9.69971 19.6894C9.96545 18.4692 10.5767 17.3877 11.4138 16.5557C12.49 15.4881 13.9383 14.8364 15.5328 14.8364C16.2503 14.8364 16.9546 14.975 17.6056 15.2246C17.9378 15.3494 18.2567 15.5019 18.549 15.6961C19.0407 15.2108 19.612 14.8087 20.2099 14.4897C21.1268 14.0322 22.1366 13.7687 23.2129 13.7687C24.1828 13.7687 25.1129 13.9906 25.95 14.3649C26.5878 14.67 27.1858 15.0582 27.704 15.5297L27.9298 15.4742C28.2753 15.4049 28.6075 15.3771 28.9264 15.3771C29.3914 15.3771 29.8565 15.4326 30.2817 15.5713L38.5198 0L40.4863 1.12313L32.2615 16.6944L32.3678 16.7915C32.6734 16.5835 32.9923 16.4171 33.3245 16.2784C34.0154 15.9872 34.7595 15.8209 35.5434 15.8209C36.5267 15.8209 37.4701 16.0843 38.2939 16.528L43.3165 7.62618L45.2564 8.81864L40.0611 18.0116C40.5129 18.5663 40.8716 19.2041 41.1241 19.9113H41.2171C42.5857 19.9113 43.8214 20.4936 44.725 21.4365C45.6152 22.3655 46.1733 23.6689 46.1733 25.0971L46.16 25.5685H50L49.8671 26.858ZM5.99256 25.5685H43.8879C43.9144 25.416 43.9277 25.2634 43.9277 25.0971C43.9277 24.3067 43.6221 23.5996 43.1305 23.0865C42.6389 22.5735 41.9612 22.2684 41.2171 22.2684L40.8849 22.2823L40.566 22.3378L39.3835 22.6567L39.1842 21.3949C39.038 20.4798 38.5729 19.6617 37.9219 19.0793C37.2841 18.5108 36.447 18.178 35.5434 18.178C35.0518 18.178 34.5868 18.2751 34.1616 18.4415C33.7231 18.6217 33.3245 18.8991 32.979 19.2457L32.009 20.2024L31.2782 19.0377C31.0258 18.6356 30.667 18.3028 30.2551 18.0671C29.8698 17.8453 29.418 17.7205 28.9264 17.7205C28.7271 17.7205 28.5411 17.7343 28.3683 17.7759C28.1956 17.8175 28.0096 17.873 27.8501 17.9423L27.1193 18.2612L26.5878 17.6511C26.1626 17.1797 25.6311 16.7776 25.0598 16.5141C24.5017 16.2646 23.8772 16.1259 23.2129 16.1259C22.4953 16.1259 21.8044 16.2923 21.1932 16.5973C20.5687 16.9301 20.0106 17.3877 19.5854 17.9562L18.8679 18.9268L17.9644 18.1226C17.6455 17.8314 17.2602 17.5957 16.835 17.4293C16.4364 17.2768 15.9979 17.1936 15.5328 17.1936C14.5363 17.1936 13.6195 17.5957 12.9551 18.2612C12.2907 18.9268 11.8522 19.8558 11.7991 20.8819L11.7459 22.0189L10.4969 21.9911C9.22137 21.9911 8.06537 22.518 7.22828 23.3777C6.64364 23.9739 6.21844 24.7227 5.99256 25.5685ZM42.9843 27.9118H5.79325H4.70369H2.53787C3.40154 33.3195 6.03242 38.117 9.80601 41.6251C13.832 45.3688 19.1602 47.6428 25.0066 47.6428C30.8398 47.6428 36.1812 45.3688 40.2073 41.6251C43.9809 38.117 46.6117 33.3195 47.4621 27.9118H44.7117H42.9843Z" fill="black"/>
                      </svg>
                    </div>
                    <p class="advantages__text advantages__text--3">Вкусно и быстро</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>

        <section class="timer-form" id="s1">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <h2 class="visually-hidden">Блок с таймером и формой для заказа товара</h2>

                <div class="timer-form__wrapper">
                  <!-- section 2 -->

                  <div class="img-wrapper img-bg img-bg--5">
                    <picture class="image-item image-item--bg image-item--bg-5">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/4.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/4.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/4.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/4.png">
                      <source media="(min-width: 768px)" srcset="img/shake/4.png">
                      <source media="(min-width: 240px)" srcset="img/shake/4.png">


                      <img src="img/shake/4.png" alt="Манго фон">
                    </picture>
                  </div>
                  <div class="img-wrapper img-bg img-bg--6">
                    <picture class="image-item image-item--bg image-item--bg-6">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/7.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/7.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/7.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/7.png">
                      <source media="(min-width: 768px)" srcset="img/shake/7.png">
                      <source media="(min-width: 240px)" srcset="img/shake/7.png">


                      <img src="img/shake/7.png" alt="Манго фон">
                    </picture>
                  </div>
                  <div class="img-wrapper img-bg img-bg--7">
                    <picture class="image-item image-item--bg image-item--bg-7">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/5.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/5.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/5.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/5.png">
                      <source media="(min-width: 768px)" srcset="img/shake/5.png">
                      <source media="(min-width: 240px)" srcset="img/shake/5.png">


                      <img src="img/shake/5.png" alt="Манго фон">
                    </picture>
                  </div>
                  <div class="img-wrapper img-bg img-bg--8">
                    <picture class="image-item image-item--bg image-item--bg-8">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/6.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/6.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/6.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/6.png">
                      <source media="(min-width: 768px)" srcset="img/shake/6.png">
                      <source media="(min-width: 240px)" srcset="img/shake/6.png">


                      <img src="img/shake/6.png" alt="Манго фон">
                    </picture>
                  </div>

                  <!-- section 2-tab -->

                  <div class="img-wrapper img-bg img-bg--8-1">
                    <picture class="image-item image-item--bg image-item--bg-8-1">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/6.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/6.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/6.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/6.png">
                      <source media="(min-width: 768px)" srcset="img/shake/6.png">
                      <source media="(min-width: 240px)" srcset="img/shake/6.png">


                      <img src="img/shake/6.png" alt="Манго фон">
                    </picture>
                  </div>
                  <div class="timer-form__left">
                    <h3 class="timer-form__title">Время акции ограничено</h3>

                    <p class="timer-form__text">Успейте приобрести манговое пюре TOTAPURI по акционной цене:</p>
                    <div class="clock clock--1">
                       <div class="column days">
                         <div class="timer days1"></div>
                         <div class="timer timer-background">|</div>
                         <div class="text">Дней</div>
                       </div>

                       <div class="column hours">
                         <div class="timer hours1"></div>
                         <div class="timer timer-background">|</div>
                         <div class="text">Часов</div>
                       </div>

                       <div class="column minutes">
                         <div class="timer minutes1"></div>
                         <div class="timer timer-background">|</div>
                         <div class="text">Минут</div>
                       </div>

                       <div class="column seconds">
                         <div class="timer seconds1"></div>
                         <div class="timer timer-background">|</div>
                         <div class="text">Секунд</div>
                       </div>
                    </div>
                  </div>

                  <div class="timer-form__right">
                    <div class="img-wrapper img-wrapper--img-2">
                      <picture class="image-item image-item--img-2">
                        <!-- WEBP -->
                        <source type="image/webp" media="(min-width: 992px)" srcset="img/img-2.webp">
                        <source type="image/webp" media="(min-width: 768px)" srcset="img/img-2.webp">
                        <source type="image/webp" media="(min-width: 240px)" srcset="img/img-2.webp">

                        <source media="(min-width: 992px)" srcset="img/img-2.png">
                        <source media="(min-width: 768px)" srcset="img/img-2.png">
                        <source media="(min-width: 240px)" srcset="img/img2.png">


                        <img src="img/img-2.png" alt="Банка с пюре из плодов манго">
                      </picture>
                    </div>

                    <div class="header__price header__price--timer-form">
                      <div class="header__text header__text--price-new header__text--price-new--timer-form">
                        <img class="header__svg header__svg--5" src="img/rect-5.svg" alt="Фон">
                        <p class="header__p header__p--5 header__p--timer-form"><?= $price_new ?><?= $currency ?></p>
                      </div>
                      <p class="header__text header__text--price-old header__text--price-old--timer-form"><?= $price_old ?><?= $currency ?></p>
                    </div>

                    <div class="form-wrapper">
                      <form class="form form--1" action="/zakaz.php" method="post">
                        <div class="input-wrapper">
                          <input class="form__input form__name" id="form__name-1" type="text" name="name" placeholder="Имя" required>
                          <input class="form__input form__phone" id="form__phone-1" type="tel" name="phone" placeholder="Телефон" title="Для ввода доступны символы 0-9" required>
                        </div>

                        <input class="prodId__1" name="prodId" type="hidden" value="<?= $product_id ?>">
                        <input class="prodPrice__1" name="prodPrice" type="hidden" value="<?= $price_new ?>">

                        <input type="hidden" name="s1" class="price_field_s1" value="<?= $price_new ?>">
                        <input type="hidden" name="s2" class="price_field_s2" value="<?= $product_id ?>">
                        <input type="hidden" name="s3" class="price_field_s3" value="<?= $product_name ?>">
                        <input type="hidden" name="uid" value="<?= $uid ?>">
                        <input type="hidden" name="utm_source" value="<?= $_GET['utm_source'] ?>">
                        <input type="hidden" name="utm_medium"  value="<?= $_GET['utm_medium'] ?>">
                        <input type="hidden" name="utm_term"  value="<?= $_GET['utm_term'] ?>">
                        <input type="hidden" name="utm_content"  value="<?= $_GET['utm_content'] ?>">
                        <input type="hidden" name="utm_campaign" value="<?= $_GET['utm_campaign'] ?>">
                        <input type="hidden" name="server_name" value="<?= $_SERVER['SERVER_NAME'] ?>">
                        <input type="hidden" name="php_self" value="<?= $_SERVER['PHP_SELF'] ?>">
                        <input type="hidden" name="ga" value="<?= $ga?>"/>

                        <div class="button-wrapper button-wrapper--1">
                          <button class="button button-submit button-submit--1" type="submit">Заказать</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="slider-section">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <h2 class="visually-hidden">Блок с отзывами в Instagram покупателей</h2>

                <div class="slider slider-1">
                  <div class="slider__item slider__item--1">
                    <div class="img-wrapper img-wrapper--slider">
                      <picture class="image-item image-item--slider">
                        <!-- WEBP -->
                        <source type="image/webp" media="(min-width: 992px)" srcset="img/slide-1.webp">
                        <source type="image/webp" media="(min-width: 768px)" srcset="img/slide-tab-1.webp">
                        <source type="image/webp" media="(min-width: 240px)" srcset="img/slide-tab-1.webp">

                        <source media="(min-width: 992px)" srcset="img/slide-1.jpg">
                        <source media="(min-width: 768px)" srcset="img/slide-tab-1.jpg">
                        <source media="(min-width: 240px)" srcset="img/slide-tab-1.jpg">


                        <img src="img/slide-tab-1.jpg" alt="Отзыв">
                      </picture>
                    </div>
                  </div>
                  <div class="slider__item slider__item--2">
                    <div class="img-wrapper img-wrapper--slider">
                      <picture class="image-item image-item--slider">
                        <!-- WEBP -->
                        <source type="image/webp" media="(min-width: 992px)" srcset="img/slide-2.webp">
                        <source type="image/webp" media="(min-width: 768px)" srcset="img/slide-tab-2.webp">
                        <source type="image/webp" media="(min-width: 240px)" srcset="img/slide-tab-2.webp">

                        <source media="(min-width: 992px)" srcset="img/slide-2.jpg">
                        <source media="(min-width: 768px)" srcset="img/slide-tab-2.jpg">
                        <source media="(min-width: 240px)" srcset="img/slide-tab-2.jpg">


                        <img src="img/slide-tab-2.jpg" alt="Отзыв">
                      </picture>
                    </div>
                  </div>

                  <div class="slider__item slider__item--3">
                    <div class="img-wrapper img-wrapper--slider">
                      <picture class="image-item image-item--slider">
                        <!-- WEBP -->
                        <source type="image/webp" media="(min-width: 992px)" srcset="img/slide-3.webp">
                        <source type="image/webp" media="(min-width: 768px)" srcset="img/slide-tab-3.webp">
                        <source type="image/webp" media="(min-width: 240px)" srcset="img/slide-tab-3.webp">

                        <source media="(min-width: 992px)" srcset="img/slide-3.jpg">
                        <source media="(min-width: 768px)" srcset="img/slide-tab-3.jpg">
                        <source media="(min-width: 240px)" srcset="img/slide-tab-3.jpg">


                        <img src="img/slide-tab-3.jpg" alt="Отзыв">
                      </picture>
                    </div>
                  </div>

                  <div class="slider__item slider__item--4">
                    <div class="img-wrapper img-wrapper--slider">
                      <picture class="image-item image-item--slider">
                        <!-- WEBP -->
                        <source type="image/webp" media="(min-width: 992px)" srcset="img/slide-4.webp">
                        <source type="image/webp" media="(min-width: 768px)" srcset="img/slide-tab-4.webp">
                        <source type="image/webp" media="(min-width: 240px)" srcset="img/slide-tab-4.webp">

                        <source media="(min-width: 992px)" srcset="img/slide-4.jpg">
                        <source media="(min-width: 768px)" srcset="img/slide-tab-4.jpg">
                        <source media="(min-width: 240px)" srcset="img/slide-tab-4.jpg">


                        <img src="img/slide-tab-4.jpg" alt="Отзыв">
                      </picture>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="characteristic">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <h2 class="visually-hidden">Блок с характеристиками продукта</h2>

                <div class="characteristic__wrapper">
                  <!-- section 3 -->

                  <div class="img-wrapper img-bg img-bg--9">
                    <picture class="image-item image-item--bg image-item--bg-9">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/9.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/9.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/9.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/9.png">
                      <source media="(min-width: 768px)" srcset="img/shake/9.png">
                      <source media="(min-width: 240px)" srcset="img/shake/9.png">


                      <img src="img/shake/9.png" alt="Манго фон">
                    </picture>
                  </div>
                  <div class="img-wrapper img-bg img-bg--10">
                    <picture class="image-item image-item--bg image-item--bg-10">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/3.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/3.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/3.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/3.png">
                      <source media="(min-width: 768px)" srcset="img/shake/3.png">
                      <source media="(min-width: 240px)" srcset="img/shake/3.png">


                      <img src="img/shake/3.png" alt="Манго фон">
                    </picture>
                  </div>
                  <div class="img-wrapper img-bg img-bg--11">
                    <picture class="image-item image-item--bg image-item--bg-11">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/6.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/6.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/6.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/6.png">
                      <source media="(min-width: 768px)" srcset="img/shake/6.png">
                      <source media="(min-width: 240px)" srcset="img/shake/6.png">


                      <img src="img/shake/6.png" alt="Манго фон">
                    </picture>
                  </div>
                  <div class="img-wrapper img-bg img-bg--12">
                    <picture class="image-item image-item--bg image-item--bg-12">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/4.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/4.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/4.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/4.png">
                      <source media="(min-width: 768px)" srcset="img/shake/4.png">
                      <source media="(min-width: 240px)" srcset="img/shake/4.png">


                      <img src="img/shake/4.png" alt="Манго фон">
                    </picture>
                  </div>

                  <div class="img-wrapper img-bg img-bg--13">
                    <picture class="image-item image-item--bg image-item--bg-13">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/11.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/11.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/11.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/11.png">
                      <source media="(min-width: 768px)" srcset="img/shake/11.png">
                      <source media="(min-width: 240px)" srcset="img/shake/11.png">


                      <img src="img/shake/11.png" alt="Манго фон">
                    </picture>
                  </div>
                  <div class="img-wrapper img-bg img-bg--14">
                    <picture class="image-item image-item--bg image-item--bg-14">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/10.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/10.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/10.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/10.png">
                      <source media="(min-width: 768px)" srcset="img/shake/10.png">
                      <source media="(min-width: 240px)" srcset="img/shake/10.png">


                      <img src="img/shake/10.png" alt="Манго фон">
                    </picture>
                  </div>
                  <div class="img-wrapper img-bg img-bg--15">
                    <picture class="image-item image-item--bg image-item--bg-15">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/7.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/7.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/7.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/7.png">
                      <source media="(min-width: 768px)" srcset="img/shake/7.png">
                      <source media="(min-width: 240px)" srcset="img/shake/7.png">


                      <img src="img/shake/7.png" alt="Манго фон">
                    </picture>
                  </div>
                  <div class="img-wrapper img-bg img-bg--16">
                    <picture class="image-item image-item--bg image-item--bg-16">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/5.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/5.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/5.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/5.png">
                      <source media="(min-width: 768px)" srcset="img/shake/5.png">
                      <source media="(min-width: 240px)" srcset="img/shake/5.png">


                      <img src="img/shake/5.png" alt="Манго фон">
                    </picture>
                  </div>
                  <div class="img-wrapper img-bg img-bg--17">
                    <picture class="image-item image-item--bg image-item--bg-17">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/1.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/1.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/1.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/1.png">
                      <source media="(min-width: 768px)" srcset="img/shake/1.png">
                      <source media="(min-width: 240px)" srcset="img/shake/1.png">


                      <img src="img/shake/1.png" alt="Манго фон">
                    </picture>
                  </div>

                  <!-- section 3-tab -->

                  <div class="img-wrapper img-bg img-bg--11-1">
                    <picture class="image-item image-item--bg image-item--bg-11-1">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/8.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/8.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/8.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/8.png">
                      <source media="(min-width: 768px)" srcset="img/shake/8.png">
                      <source media="(min-width: 240px)" srcset="img/shake/8.png">


                      <img src="img/shake/8.png" alt="Манго фон">
                    </picture>
                  </div>

                  <h3 class="characteristic__title">Пюре из спелых плодов Манго</h3>

                  <div class="characteristic__wrapper--list">
                    <ul class="characteristic__list">
                      <li class="characteristic__item">
                        <div class="characteristic__text-wrapper">
                          <p class="characteristic__text">
                            <b>Состав: </b>
                          </p>
                          <p class="characteristic__text">Пюре Кесар манго (87%),</p>
                          <p class="characteristic__text">Пюре Нилам манго (12.85%),</p>
                          <p class="characteristic__text">Лимонная кислота, полученная из сырых плодов манго (0.15%).</p>
                        </div>
                      </li>
                      <li class="characteristic__item">
                        <p class="characteristic__text">
                          <b>Масса нетто: </b>3100 г
                        </p>
                      </li>
                      <li class="characteristic__item">
                        <p class="characteristic__text">
                          <b>Габариты: </b>16,5 x 16,5 x 19,5 cм
                        </p>
                      </li>
                      <li class="characteristic__item">
                        <p class="characteristic__text">
                          <b>Белки: </b>1.97 г
                        </p>
                      </li>
                      <li class="characteristic__item">
                        <p class="characteristic__text">
                          <b>Углеводы: </b>24.63
                        </p>
                      </li>
                      <li class="characteristic__item">
                        <p class="characteristic__text">
                          <b>Жиры: </b>0 г
                        </p>
                      </li>
                      <li class="characteristic__item">
                        <p class="characteristic__text">
                          <b>Калорийность: </b>118.85 ккал
                        </p>
                      </li>
                      <li class="characteristic__item">
                        <p class="characteristic__text">
                          <b>Однородное</b>
                        </p>
                      </li>
                    </ul>

                    <ul class="characteristic__storage-list">
                      <li class="characteristic__storage-item characteristic__storage-item--1">
                        <h4 class="characteristic__storage-title characteristic__storage-title--1">Хранения пюре:</h4>

                        <p class="characteristic__storage-text characteristic__storage-text--1">Необходимо использовать пластиковый пищевой контейнер с плотно закрывающейся крышкой.</p>
                      </li>
                      <li class="characteristic__storage-item characteristic__storage-item--2">
                        <h4 class="characteristic__storage-title characteristic__storage-title--2">Для использования в течение одной-двух недель</h4>

                        <p class="characteristic__storage-text characteristic__storage-text--2">Хранить пюре лучше всего при температуре от 0 до 8 градусов Цельсия</p>
                      </li>
                      <li class="characteristic__storage-item characteristic__storage-item--3">
                        <h4 class="characteristic__storage-title characteristic__storage-title--3">Для использования в течении месяца</h4>

                        <p class="characteristic__storage-text characteristic__storage-text--3">Хранить в холодильнике с низкой влажностью при температуре 2-4 градуса Цельсия</p>
                      </li>
                      <li class="characteristic__storage-item characteristic__storage-item--4">
                        <h4 class="characteristic__storage-title characteristic__storage-title--4">Для использования в течение шести месяцев</h4>

                        <p class="characteristic__storage-text characteristic__storage-text--4">Хранить в морозильной камере и поддерживать температуру около -20 градусов Цельсия. По необходимости разморозить пюре до комнатной температуры</p>
                      </li>

                      <li class="characteristic__storage-item characteristic__storage-item--5">
                        <p class="characteristic__storage-text characteristic__storage-text--5">
                          Кесар манго – известное, как Королева манго, из Джунагадх, штат Гуджарат. “Кесар” манго было создано путем скрещивания сорта Альфонсо с местными сортами манго в Гуджарате. Этот сорт сохраняет многие характерные особенности Альфонсо, такие, как яркий аромат, оранжевая мякоть, кремовая текстура, но при этом легче поддается культивации а, следовательно, является более дешевым по сравнению с Альфонсо. Сорт Кесар имеет схожее применение: из него можно готовить многочисленные десерты – сорбеты, торты, макаронс, чизкейки и разнообразные напитки – соки, коктейли и т.д.
                        </p>
                      </li>
                    </ul>
                  </div>

                  <div class="img-wrapper img-wrapper--characteristic">
                    <picture class="image-item image-item--slider">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/img-3.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/img-3.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/img-3.webp">

                      <source media="(min-width: 992px)" srcset="img/img-3.png">
                      <source media="(min-width: 768px)" srcset="img/img-3.png">
                      <source media="(min-width: 240px)" srcset="img/img-3.png">


                      <img src="img/img-3.png" alt="Отзыв">
                    </picture>
                  </div>

                  <div class="button-wrapper button-wrapper--characteristic">
                    <a class="button button-submit button-order" href="#s2">Заказать</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="recipe">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <h2 class="visually-hidden">Блок с рецептами из продукта</h2>

                <div class="recipe__wrapper">

                  <!-- section 4 -->

                  <div class="img-wrapper img-bg img-bg--18">
                    <picture class="image-item image-item--bg image-item--bg-18">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/8.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/8.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/8.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/8.png">
                      <source media="(min-width: 768px)" srcset="img/shake/8.png">
                      <source media="(min-width: 240px)" srcset="img/shake/8.png">


                      <img src="img/shake/8.png" alt="Манго фон">
                    </picture>
                  </div>
                  <div class="img-wrapper img-bg img-bg--19">
                    <picture class="image-item image-item--bg image-item--bg-19">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/7.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/7.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/7.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/7.png">
                      <source media="(min-width: 768px)" srcset="img/shake/7.png">
                      <source media="(min-width: 240px)" srcset="img/shake/7.png">


                      <img src="img/shake/7.png" alt="Манго фон">
                    </picture>
                  </div>
                  <div class="img-wrapper img-bg img-bg--20">
                    <picture class="image-item image-item--bg image-item--bg-20">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/2.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/2.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/2.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/2.png">
                      <source media="(min-width: 768px)" srcset="img/shake/2.png">
                      <source media="(min-width: 240px)" srcset="img/shake/2.png">


                      <img src="img/shake/2.png" alt="Манго фон">
                    </picture>
                  </div>
                  <div class="img-wrapper img-bg img-bg--21">
                    <picture class="image-item image-item--bg image-item--bg-21">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/5.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/5.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/5.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/5.png">
                      <source media="(min-width: 768px)" srcset="img/shake/5.png">
                      <source media="(min-width: 240px)" srcset="img/shake/5.png">


                      <img src="img/shake/5.png" alt="Манго фон">
                    </picture>
                  </div>
                  <div class="img-wrapper img-bg img-bg--22">
                    <picture class="image-item image-item--bg image-item--bg-22">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/10.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/10.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/10.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/10.png">
                      <source media="(min-width: 768px)" srcset="img/shake/10.png">
                      <source media="(min-width: 240px)" srcset="img/shake/10.png">


                      <img src="img/shake/10.png" alt="Манго фон">
                    </picture>
                  </div>

                  <!-- section 4-mob -->

                  <div class="img-wrapper img-bg img-bg--22-1">
                    <picture class="image-item image-item--bg image-item--bg-22-1">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/6.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/6.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/6.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/6.png">
                      <source media="(min-width: 768px)" srcset="img/shake/6.png">
                      <source media="(min-width: 240px)" srcset="img/shake/6.png">


                      <img src="img/shake/6.png" alt="Манго фон">
                    </picture>
                  </div>
                  <h3 class="recipe__title">Рецепты из  мангового пюре</h3>

                  <ul class="recipe__list">
                    <li class="recipe__item recipe__item--1">
                      <div class="img-wrapper img-wrapper--recipe">
                        <picture class="image-item image-item--recipe">
                          <!-- WEBP -->
                          <source type="image/webp" media="(min-width: 992px)" srcset="img/r_1.webp">
                          <source type="image/webp" media="(min-width: 768px)" srcset="img/r_1.webp">
                          <source type="image/webp" media="(min-width: 240px)" srcset="img/r_1.webp">

                          <source media="(min-width: 992px)" srcset="img/r_1.png">
                          <source media="(min-width: 768px)" srcset="img/r_1.png">
                          <source media="(min-width: 240px)" srcset="img/r_1.png">


                          <img src="img/r_1.png" alt="Рецепт">
                        </picture>

                        <div class="recipe__item__mask"></div>
                      </div>

                      <h4 class="recipe__item-title">Мороженое из манго</h4>
                    </li>

                    <li class="recipe__item recipe__item--2">
                      <div class="img-wrapper img-wrapper--recipe">
                        <picture class="image-item image-item--recipe">
                          <!-- WEBP -->
                          <source type="image/webp" media="(min-width: 992px)" srcset="img/r_2.webp">
                          <source type="image/webp" media="(min-width: 768px)" srcset="img/r_2.webp">
                          <source type="image/webp" media="(min-width: 240px)" srcset="img/r_2.webp">

                          <source media="(min-width: 992px)" srcset="img/r_2.png">
                          <source media="(min-width: 768px)" srcset="img/r_2.png">
                          <source media="(min-width: 240px)" srcset="img/r_2.png">


                          <img src="img/r_2.png" alt="Рецепт">
                        </picture>

                        <div class="recipe__item__mask"></div>
                      </div>

                      <h4 class="recipe__item-title">Пряный ласси</h4>
                    </li>

                    <li class="recipe__item recipe__item--3">
                      <div class="img-wrapper img-wrapper--recipe">
                        <picture class="image-item image-item--recipe">
                          <!-- WEBP -->
                          <source type="image/webp" media="(min-width: 992px)" srcset="img/r_3.webp">
                          <source type="image/webp" media="(min-width: 768px)" srcset="img/r_3.webp">
                          <source type="image/webp" media="(min-width: 240px)" srcset="img/r_3.webp">

                          <source media="(min-width: 992px)" srcset="img/r_3.png">
                          <source media="(min-width: 768px)" srcset="img/r_3.png">
                          <source media="(min-width: 240px)" srcset="img/r_3.png">


                          <img src="img/r_3.png" alt="Рецепт">
                        </picture>

                        <div class="recipe__item__mask"></div>
                      </div>

                      <h4 class="recipe__item-title">Сырно-манговый соус</h4>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="comments">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <h2 class="visually-hidden">Блок с отзывами о товаре</h2>

                <div class="comments__wrapper">
                  <h3 class="comments__title">Отзывы</h3>

                  <div class="slider slider-2">
                    <div class="slider__item slider__item--1">
                      <div class="img-wrapper img-wrapper--comments">
                        <picture class="image-item image-item--comments">
                          <!-- WEBP -->
                          <source type="image/webp" media="(min-width: 992px)" srcset="img/comment-1.webp">
                          <source type="image/webp" media="(min-width: 768px)" srcset="img/comment-1.webp">
                          <source type="image/webp" media="(min-width: 240px)" srcset="img/comment-1.webp">

                          <source media="(min-width: 992px)" srcset="img/comment-1.png">
                          <source media="(min-width: 768px)" srcset="img/comment-1.png">
                          <source media="(min-width: 240px)" srcset="img/comment-1.png">


                          <img src="img/comment-1.png" alt="Аватар покупателя">
                        </picture>
                      </div>
                    </div>
                    <div class="slider__item slider__item--2">
                      <div class="img-wrapper img-wrapper--comments">
                        <picture class="image-item image-item--comments">
                          <!-- WEBP -->
                          <source type="image/webp" media="(min-width: 992px)" srcset="img/comment-2.webp">
                          <source type="image/webp" media="(min-width: 768px)" srcset="img/comment-2.webp">
                          <source type="image/webp" media="(min-width: 240px)" srcset="img/comment-2.webp">

                          <source media="(min-width: 992px)" srcset="img/comment-2.png">
                          <source media="(min-width: 768px)" srcset="img/comment-2.png">
                          <source media="(min-width: 240px)" srcset="img/comment-2.png">


                          <img src="img/comment-2.png" alt="Аватар покупателя">
                        </picture>
                      </div>
                    </div>
                    <div class="slider__item slider__item--3">
                      <div class="img-wrapper img-wrapper--comments">
                        <picture class="image-item image-item--comments">
                          <!-- WEBP -->
                          <source type="image/webp" media="(min-width: 992px)" srcset="img/comment-3.webp">
                          <source type="image/webp" media="(min-width: 768px)" srcset="img/comment-3.webp">
                          <source type="image/webp" media="(min-width: 240px)" srcset="img/comment-3.webp">

                          <source media="(min-width: 992px)" srcset="img/comment-3.png">
                          <source media="(min-width: 768px)" srcset="img/comment-3.png">
                          <source media="(min-width: 240px)" srcset="img/comment-3.png">


                          <img src="img/comment-3.png" alt="Аватар покупателя">
                        </picture>
                      </div>
                    </div>
                    <div class="slider__item slider__item--4">
                      <div class="img-wrapper img-wrapper--comments">
                        <picture class="image-item image-item--comments">
                          <!-- WEBP -->
                          <source type="image/webp" media="(min-width: 992px)" srcset="img/comment-4.webp">
                          <source type="image/webp" media="(min-width: 768px)" srcset="img/comment-4.webp">
                          <source type="image/webp" media="(min-width: 240px)" srcset="img/comment-4.webp">

                          <source media="(min-width: 992px)" srcset="img/comment-4.png">
                          <source media="(min-width: 768px)" srcset="img/comment-4.png">
                          <source media="(min-width: 240px)" srcset="img/comment-4.png">


                          <img src="img/comment-4.png" alt="Аватар покупателя">
                        </picture>
                      </div>
                    </div>
                    <div class="slider__item slider__item--5">
                      <div class="img-wrapper img-wrapper--comments">
                        <picture class="image-item image-item--comments">
                          <!-- WEBP -->
                          <source type="image/webp" media="(min-width: 992px)" srcset="img/comment-5.webp">
                          <source type="image/webp" media="(min-width: 768px)" srcset="img/comment-5.webp">
                          <source type="image/webp" media="(min-width: 240px)" srcset="img/comment-5.webp">

                          <source media="(min-width: 992px)" srcset="img/comment-5.png">
                          <source media="(min-width: 768px)" srcset="img/comment-5.png">
                          <source media="(min-width: 240px)" srcset="img/comment-5.png">


                          <img src="img/comment-5.png" alt="Аватар покупателя">
                        </picture>
                      </div>
                    </div>
                    <div class="slider__item slider__item--6">
                      <div class="img-wrapper img-wrapper--comments">
                        <picture class="image-item image-item--comments">
                          <!-- WEBP -->
                          <source type="image/webp" media="(min-width: 992px)" srcset="img/comment-6.webp">
                          <source type="image/webp" media="(min-width: 768px)" srcset="img/comment-6.webp">
                          <source type="image/webp" media="(min-width: 240px)" srcset="img/comment-6.webp">

                          <source media="(min-width: 992px)" srcset="img/comment-6.png">
                          <source media="(min-width: 768px)" srcset="img/comment-6.png">
                          <source media="(min-width: 240px)" srcset="img/comment-6.png">


                          <img src="img/comment-6.png" alt="Аватар покупателя">
                        </picture>
                      </div>
                    </div>
                  </div>

                  <div class="slider slider-3">
                    <div class="slider__item slider__item--1">
                      <div class="comments__item-wrapper">
                        <h4 class="comments__item-title">Прохоров Николай</h4>
                        <p class="comments__item-age">41 год</p>
                        <p class="comments__item-text">Я пюре здесь покупаю уже давно и качество всегда остается неизменно высоким, что не может не радовать. Жена добавляет данное пюре в десерт, в блины, даже коктейли готовит. В фруктовый салат тоже можно. С мороженым вкусно очень. После вскрытия нужно переложить в пластиковый контейнер. Скажу так, очень вкусно, покупать стоит.</p>
                      </div>
                    </div>
                    <div class="slider__item slider__item--2">
                      <div class="comments__item-wrapper">
                        <h4 class="comments__item-title">Егорова Екатерина</h4>
                        <p class="comments__item-age">26 лет</p>
                        <p class="comments__item-text">Вкус обалденный, густой, сочный. Настоящее пюре из манго. Банку растягивала и ела с мороженным, блинчиками и т. д. Я ела пюре других фирм и знаю, что они не такого качества. Здесь все натуральное, нет химии и т.д. Теперь я постоянно покупаю его себе здесь и кайфую. Я очень люблю манго и привозные мне не нравятся, а ездить в Тайланд часто не получается))  Вот я и нашла себе отличную замену. </p>
                      </div>
                    </div>
                    <div class="slider__item slider__item--3">
                      <div class="comments__item-wrapper">
                        <h4 class="comments__item-title">Кравчук Марина</h4>
                        <p class="comments__item-age">24 года</p>
                        <p class="comments__item-text">Я страдаю зимой от недостатка солнца и сезонных фруктов. За что обожаю манго, так за то, что в нём есть и солнце, и бесподобный вкус, и запах тропиков (в лучшем смысле слова). Только манго, просто манго, прекрасный, низкокалорийный манго. Таким пюре можно спокойно обжираться на ночь, не испытывая угрызений совести и не коря себя за слабохарактерность. Супер)</p>
                      </div>
                    </div>
                    <div class="slider__item slider__item--4">
                      <div class="comments__item-wrapper">
                        <h4 class="comments__item-title">Шевцова Ирина</h4>
                        <p class="comments__item-age">44 года</p>
                        <p class="comments__item-text">Самым оптимальным вариантом будет просто стрескать пюре, но в большой семье этот номер не прокатит. А потому имеется масса вариантов, как потянуть манговое удовольствие. С манговым пюре много рецептов.  Даже избитые и привычные десерты начинают играть по новому от пары ложек мангового пюре. Особенно хорошо оно в тандеме с бисквитом и кремом из взбитых сливок. Конечно же всем рекомендую!</p>
                      </div>
                    </div>
                    <div class="slider__item slider__item--5">
                      <div class="comments__item-wrapper">
                        <h4 class="comments__item-title">Никифоров Егор</h4>
                        <p class="comments__item-age">23 года</p>
                        <p class="comments__item-text">На такую банку явно ушло много плодов, а если прикинуть, сколько у нас такие плоды стоят (это не зеленый манго с волокнами и жесткий), так выходит вообще выгодно покупать это пюре. Мы в последнее время делаем десерты не заморочливые: в пиалку пюре, потом нарезать полукольцами банан (клубнику, яблоки, груши), присыпаем хрустящей гранолой или просто оставляем так – получается супер.</p>
                      </div>
                    </div>
                    <div class="slider__item slider__item--6">
                      <div class="comments__item-wrapper">
                        <h4 class="comments__item-title">Иван Иванов</h4>
                        <p class="comments__item-age">35 лет</p>
                        <p class="comments__item-text">Вкусно. Рекомендую</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="timer-form" id="s2">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <h2 class="visually-hidden">Блок с таймером и формой для заказа товара</h2>

                <div class="timer-form__wrapper">
                  <!-- section 5 -->

                  <div class="img-wrapper img-bg img-bg--23">
                    <picture class="image-item image-item--bg image-item--bg-23">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/9.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/9.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/9.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/9.png">
                      <source media="(min-width: 768px)" srcset="img/shake/9.png">
                      <source media="(min-width: 240px)" srcset="img/shake/9.png">


                      <img src="img/shake/9.png" alt="Манго фон">
                    </picture>
                  </div>

                  <!-- section 5-tab -->

                  <div class="img-wrapper img-bg img-bg--23-1">
                    <picture class="image-item image-item--bg image-item--bg-23-1">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/5.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/5.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/5.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/5.png">
                      <source media="(min-width: 768px)" srcset="img/shake/5.png">
                      <source media="(min-width: 240px)" srcset="img/shake/5.png">


                      <img src="img/shake/5.png" alt="Манго фон">
                    </picture>
                  </div>


                  <!-- section 5-mob -->

                  <div class="img-wrapper img-bg img-bg--23-2">
                    <picture class="image-item image-item--bg image-item--bg-23-2">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/7.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/7.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/7.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/7.png">
                      <source media="(min-width: 768px)" srcset="img/shake/7.png">
                      <source media="(min-width: 240px)" srcset="img/shake/7.png">


                      <img src="img/shake/7.png" alt="Манго фон">
                    </picture>
                  </div>
                  <div class="img-wrapper img-bg img-bg--23-3">
                    <picture class="image-item image-item--bg image-item--bg-23-3">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/2.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/2.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/2.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/2.png">
                      <source media="(min-width: 768px)" srcset="img/shake/2.png">
                      <source media="(min-width: 240px)" srcset="img/shake/2.png">


                      <img src="img/shake/2.png" alt="Манго фон">
                    </picture>
                  </div>

                  <div class="timer-form__left">
                    <h3 class="timer-form__title">Время акции ограничено</h3>

                    <p class="timer-form__text">Успейте приобрести манговое пюре TOTAPURI по акционной цене:</p>
                    <div class="clock clock--1">
                       <div class="column days">
                         <div class="timer days1"></div>
                         <div class="timer timer-background">|</div>
                         <div class="text">Дней</div>
                       </div>

                       <div class="column hours">
                         <div class="timer hours1"></div>
                         <div class="timer timer-background">|</div>
                         <div class="text">Часов</div>
                       </div>

                       <div class="column minutes">
                         <div class="timer minutes1"></div>
                         <div class="timer timer-background">|</div>
                         <div class="text">Минут</div>
                       </div>

                       <div class="column seconds">
                         <div class="timer seconds1"></div>
                         <div class="timer timer-background">|</div>
                         <div class="text">Секунд</div>
                       </div>
                    </div>
                  </div>

                  <div class="timer-form__right">
                    <div class="img-wrapper img-wrapper--img-2">
                      <picture class="image-item image-item--img-2">
                        <!-- WEBP -->
                        <source type="image/webp" media="(min-width: 992px)" srcset="img/img-2.webp">
                        <source type="image/webp" media="(min-width: 768px)" srcset="img/img-2.webp">
                        <source type="image/webp" media="(min-width: 240px)" srcset="img/img-2.webp">

                        <source media="(min-width: 992px)" srcset="img/img-2.png">
                        <source media="(min-width: 768px)" srcset="img/img-2.png">
                        <source media="(min-width: 240px)" srcset="img/img2.png">


                        <img src="img/img-2.png" alt="Банка с пюре из плодов манго">
                      </picture>
                    </div>

                    <div class="header__price header__price--timer-form">
                      <div class="header__text header__text--price-new header__text--price-new--timer-form">
                        <img class="header__svg header__svg--5" src="img/rect-5.svg" alt="Фон">
                        <p class="header__p header__p--5 header__p--timer-form"><?= $price_new ?><?= $currency ?></p>
                      </div>
                      <p class="header__text header__text--price-old header__text--price-old--timer-form"><?= $price_old ?><?= $currency ?></p>
                    </div>

                    <div class="form-wrapper">
                      <form class="form form--1" action="/zakaz.php" method="post">
                        <div class="input-wrapper">
                          <input class="form__input form__name" id="form__name-1" type="text" name="name" placeholder="Имя" required>
                          <input class="form__input form__phone" id="form__phone-1" type="tel" name="phone" placeholder="Телефон" title="Для ввода доступны символы 0-9" required>
                        </div>

                        <input class="prodId__1" name="prodId" type="hidden" value="<?= $product_id ?>">
                        <input class="prodPrice__1" name="prodPrice" type="hidden" value="<?= $price_new ?>">

                        <input type="hidden" name="s1" class="price_field_s1" value="<?= $price_new ?>">
                        <input type="hidden" name="s2" class="price_field_s2" value="<?= $product_id ?>">
                        <input type="hidden" name="s3" class="price_field_s3" value="<?= $product_name ?>">
                        <input type="hidden" name="uid" value="<?= $uid ?>">
                        <input type="hidden" name="utm_source" value="<?= $_GET['utm_source'] ?>">
                        <input type="hidden" name="utm_medium"  value="<?= $_GET['utm_medium'] ?>">
                        <input type="hidden" name="utm_term"  value="<?= $_GET['utm_term'] ?>">
                        <input type="hidden" name="utm_content"  value="<?= $_GET['utm_content'] ?>">
                        <input type="hidden" name="utm_campaign" value="<?= $_GET['utm_campaign'] ?>">
                        <input type="hidden" name="server_name" value="<?= $_SERVER['SERVER_NAME'] ?>">
                        <input type="hidden" name="php_self" value="<?= $_SERVER['PHP_SELF'] ?>">
                        <input type="hidden" name="ga" value="<?= $ga?>"/>

                        <div class="button-wrapper button-wrapper--1">
                          <button class="button button-submit button-submit--1" type="submit">Заказать</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="contacts">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <h2 class="visually-hidden">Блок с контактами</h2>

                <div class="contacts__wrapper">
                  <!-- section 6 -->

                  <div class="img-wrapper img-bg img-bg--24">
                    <picture class="image-item image-item--bg image-item--bg-24">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/4.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/4.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/4.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/4.png">
                      <source media="(min-width: 768px)" srcset="img/shake/4.png">
                      <source media="(min-width: 240px)" srcset="img/shake/4.png">


                      <img src="img/shake/4.png" alt="Манго фон">
                    </picture>
                  </div>
                  <div class="img-wrapper img-bg img-bg--25">
                    <picture class="image-item image-item--bg image-item--bg-25">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/6.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/6.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/6.png">
                      <source media="(min-width: 768px)" srcset="img/shake/6.png">
                      <source media="(min-width: 240px)" srcset="img/shake/6.png">


                      <img src="img/shake/6.png" alt="Манго фон">
                    </picture>
                  </div>

                  <!-- section 6-tab -->

                  <div class="img-wrapper img-bg img-bg--25-1">
                    <picture class="image-item image-item--bg image-item--bg-25-1">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/9.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/9.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/9.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/9.png">
                      <source media="(min-width: 768px)" srcset="img/shake/9.png">
                      <source media="(min-width: 240px)" srcset="img/shake/9.png">


                      <img src="img/shake/9.png" alt="Манго фон">
                    </picture>
                  </div>

                  <!-- section 6-mob -->

                  <div class="img-wrapper img-bg img-bg--24-1">
                    <picture class="image-item image-item--bg image-item--bg-24-1">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/4.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/4.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/4.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/4.png">
                      <source media="(min-width: 768px)" srcset="img/shake/4.png">
                      <source media="(min-width: 240px)" srcset="img/shake/4.png">


                      <img src="img/shake/4.png" alt="Манго фон">
                    </picture>
                  </div>
                  <div class="img-wrapper img-bg img-bg--24-2">
                    <picture class="image-item image-item--bg image-item--bg-24-2">
                      <!-- WEBP -->
                      <source type="image/webp" media="(min-width: 992px)" srcset="img/shake/1.webp">
                      <source type="image/webp" media="(min-width: 768px)" srcset="img/shake/1.webp">
                      <source type="image/webp" media="(min-width: 240px)" srcset="img/shake/1.webp">

                      <source media="(min-width: 992px)" srcset="img/shake/1.png">
                      <source media="(min-width: 768px)" srcset="img/shake/1.png">
                      <source media="(min-width: 240px)" srcset="img/shake/1.png">


                      <img src="img/shake/1.png" alt="Манго фон">
                    </picture>
                  </div>

                  <h3 class="contacts__title">График работы: <span class="contacts__title--white">Пн-Вс с 08:00 до 21:00</span></h3>

                  <ul class="contacts__list">
                    <li class="contacts__item contacts__item--1">
                      <p class="contacts__item-number contacts__item-number--1">1</p>
                      <p class="contacts__item-text contacts__item-text--1">Оставьте заявку на нашем сайте</p>
                    </li>
                    <li class="contacts__item contacts__item--2">
                      <p class="contacts__item-number contacts__item-number--2">2</p>
                      <p class="contacts__item-text contacts__item-text--2">С вами свяжется менеджер для уточнения деталей заказа</p>
                    </li>
                    <li class="contacts__item contacts__item--3">
                      <p class="contacts__item-number contacts__item-number--3">3</p>
                      <p class="contacts__item-text contacts__item-text--3">Мы отправим товар, а Вы оплатите его при получении</p>
                    </li>
                  </ul>

                  <div class="button-wrapper button-wrapper--4">
                    <a class="button button-submit button-order" href="#s2">Заказать</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>

      <footer class="page-footer">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="footer-container">
                <p class="copiright-text">Официальное представительство в Украине ООО "Логос"</p>
                <p class="copiright-text">Украина, Днепропетровская область, г. Кривой Рог, пл. Горького, 10, офис 9</p>
                <p class="copiright-text copiright-text--privacy">
                  <a class="privacy" href="politics.html">Политика конфиденциальности</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <!-- modal recipe -->

      <section class="popup popup-recipe popup-recipe--1">
        <div class="popup-close__wrapper">
          <button class="button popup-close" type="button"><span class="visually-hidden">Закрыть</span></button>
        </div>
        <div class="popup__wrapper">
          <div class="popup__left">
            <div class="img-wrapper img-popup img-popup--1">
              <picture class="image-item image-item--popup">
                <!-- WEBP -->
                <source type="image/webp" media="(min-width: 992px)" srcset="img/r_1.webp">
                <source type="image/webp" media="(min-width: 768px)" srcset="img/r_1.webp">
                <source type="image/webp" media="(min-width: 240px)" srcset="img/r_1.webp">

                <source media="(min-width: 992px)" srcset="img/r_1.png">
                <source media="(min-width: 768px)" srcset="img/r_1.png">
                <source media="(min-width: 240px)" srcset="img/r_1.png">


                <img src="img/r_1.png" alt="Рецепт">
              </picture>
            </div>
          </div>
          <div class="popup__right">
            <h2 class="popup__title popup-recipe__title">Мороженое из манго</h2>
            <p class="popup__text popup__text--bold">На две порции пряного ласси потребуется:</p>
            <ul class="popup__list">
              <li class="popup__item popup__item--1">
                <p class="popup__text popup__text--ingredients popup__text--1">350 г пюре Тотапури манго</p>
              </li>
              <li class="popup__item popup__item--2">
                <p class="popup__text popup__text--ingredients popup__text--2">30 г меда</p>
              </li>
              <li class="popup__item popup__item--3">
                <p class="popup__text popup__text--ingredients popup__text--3">Сок и цедра одного лайма</p>
              </li>
              <li class="popup__item popup__item--4">
                <p class="popup__text popup__text--ingredients popup__text--4">Свежая мята</p>
              </li>
              <li class="popup__item popup__item--5">
                <p class="popup__text popup__text--ingredients popup__text--5">250 г (1 стакан) натурального йогурта</p>
              </li>
              <li class="popup__item popup__item--6">
                <p class="popup__text popup__text--ingredients popup__text--6">Темный шоколад хорошего качества для украшения</p>
              </li>
            </ul>

            <p class="popup__text popup__text--description">
              Смешайте пюре манго, мед, мяту, сок лайма и щепотку цедры с йогуртом в блендере. Взбейте. Получившуюся воздушную смесь переместите в мелкую тару и оставьте в холодильнике на несколько часов. Разложите в креманки и подавайте, предварительно посыпав тертым шоколадом.
            </p>
          </div>
        </div>
      </section>

      <section class="popup popup-recipe popup-recipe--2">
        <div class="popup-close__wrapper">
          <button class="button popup-close" type="button"><span class="visually-hidden">Закрыть</span></button>
        </div>
        <div class="popup__wrapper">
          <div class="popup__left">
            <div class="img-wrapper img-popup img-popup--2">
              <picture class="image-item image-item--popup">
                <!-- WEBP -->
                <source type="image/webp" media="(min-width: 992px)" srcset="img/r_2.webp">
                <source type="image/webp" media="(min-width: 768px)" srcset="img/r_2.webp">
                <source type="image/webp" media="(min-width: 240px)" srcset="img/r_2.webp">

                <source media="(min-width: 992px)" srcset="img/r_2.png">
                <source media="(min-width: 768px)" srcset="img/r_2.png">
                <source media="(min-width: 240px)" srcset="img/r_2.png">


                <img src="img/r_2.png" alt="Рецепт">
              </picture>
            </div>
          </div>
          <div class="popup__right">
            <h2 class="popup__title popup-recipe__title">Пряный ласси</h2>
            <p class="popup__text popup__text--bold">На две порции пряного ласси потребуется:</p>
            <ul class="popup__list">
              <li class="popup__item popup__item--1">
                <p class="popup__text popup__text--ingredients popup__text--1">3 стручка - кардамона</p>
              </li>
              <li class="popup__item popup__item--2">
                <p class="popup__text popup__text--ingredients popup__text--2">Молотый имбирь, мускатный орех, корица и красный жгучий перец - по вкусу</p>
              </li>
              <li class="popup__item popup__item--3">
                <p class="popup__text popup__text--ingredients popup__text--3">100 гр - холодного пюре Альфонсо-манго</p>
              </li>
              <li class="popup__item popup__item--4">
                <p class="popup__text popup__text--ingredients popup__text--4">200 мл - йогурта</p>
              </li>
              <li class="popup__item popup__item--5">
                <p class="popup__text popup__text--ingredients popup__text--5">100 мл - молока</p>
              </li>
            </ul>

            <p class="popup__text popup__text--description">
              Кардамон с щепоткой имбиря, мускатного ореха, корицы и перца растереть в ступке. В чаше блендера взбить молоко, йогурт, манговое пюре и просеянные через сито пряности. Разлить по стаканам, немедленно выпить, при необходимости тут же повторить.
            </p>
          </div>
        </div>
      </section>

      <section class="popup popup-recipe popup-recipe--3">
        <div class="popup-close__wrapper">
          <button class="button popup-close" type="button"><span class="visually-hidden">Закрыть</span></button>
        </div>
        <div class="popup__wrapper">
          <div class="popup__left">
            <div class="img-wrapper img-popup img-popup--3">
              <picture class="image-item image-item--popup">
                <!-- WEBP -->
                <source type="image/webp" media="(min-width: 992px)" srcset="img/r_3.webp">
                <source type="image/webp" media="(min-width: 768px)" srcset="img/r_3.webp">
                <source type="image/webp" media="(min-width: 240px)" srcset="img/r_3.webp">

                <source media="(min-width: 992px)" srcset="img/r_3.png">
                <source media="(min-width: 768px)" srcset="img/r_3.png">
                <source media="(min-width: 240px)" srcset="img/r_3.png">


                <img src="img/r_3.png" alt="Рецепт">
              </picture>
            </div>
          </div>
          <div class="popup__right">
            <h2 class="popup__title popup-recipe__title">Печеные овощи с сырно-манговым соусом</h2>
            <p class="popup__text popup__text--bold">Для приготовления сырного соуса потребуется:</p>
            <ul class="popup__list">
              <li class="popup__item popup__item--1">
                <p class="popup__text popup__text--ingredients popup__text--1">50 гр пюре Альфонсо-манго</p>
              </li>
              <li class="popup__item popup__item--2">
                <p class="popup__text popup__text--ingredients popup__text--2">3 большие кислые сливы</p>
              </li>
              <li class="popup__item popup__item--3">
                <p class="popup__text popup__text--ingredients popup__text--3">50 гр сыра монтаньела или горгонзола</p>
              </li>
            </ul>

            <p class="popup__text popup__text--description">
              Самые свежие дары сада и огорода: морковь, картошку, красные и зелёные перцы вымыть. Картофель порезать продолговатыми деревенскими ломтиками, сложить овощи в форму для запекания, добавить для аромата веточку розмарина и головку чеснока и отправить в духовку на 40 минут. Пюре манго, сливы без косточек и 30 гр сыра взбить в блендере. Оставшиеся 20 гр сыра размять вилкой, добавить в соус и перемешать. Соусом поливать запечённые овощи и макать в него сладкую морковку!
            </p>
          </div>
        </div>
      </section>

      <div class="popup-overlay"></div>

      <div class="arrow-up"></div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script defer src="add/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script defer src="add/slick/slick.min.js"></script>

    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.4/moment-timezone-with-data.js"></script>

    <script defer src="js/timer.min.js"></script>
    <script defer src="js/jquery.maskedinput.min.js"></script>

    <script defer src="js/script.min.js"></script>
  </body>
</html>
