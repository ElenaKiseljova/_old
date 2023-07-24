<?
session_start();
$site = $_SERVER['SERVER_NAME'];
$cookie = md5($_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);

?>
<!DOCTYPE html>
<html lang="ru">
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
  fbq('track', 'Lead');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2414718042189465&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
    <meta charset="utf-8">
    <title>Поздравляем! Ваш заказ принят!</title>
    <style type="text/css">
        body {
            line-height: 1;
            height: 100%;
            font-family: Arial;
            font-size: 15px;
            color: #313e47;
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;

            background-repeat: no-repeat;
            background-size: cover;
        }

        h2 {
            margin: 0;
            padding: 0;
            font-size: 36px;
            line-height: 44px;
            color: #313e47;
            text-align: center;
            font-weight: bold;
        }

        a {
            color: #69B9FF;
        }

        .list_info li span {
            width: 150px;
            display: inline-block;
            font-weight: bold;
            font-style: normal;
        }

        .list_info {
            text-align: left;
            display: inline-block;
            list-style: none;
            margin-top: -10px;
            margin-bottom: -11px;
        }

        .list_info li {
            margin: 11px 0px;
        }

        .fail {
            margin: 10px 0 20px 0px;
            text-align: center;
        }

        .email {
            position: relative;
            text-align: center;
            margin-top: 20px;
        }

        .email input {
            height: 30px;
            width: 200px;
            font-size: 14px;
            padding-right: 10px;
            padding-left: 10px;
            outline: none;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            border: 1px solid #B6B6B6;
            margin-bottom: 10px;
        }

        .block_success {
            max-width: 960px;
            padding: 170px 30px 70px 30px;
            margin: -50px auto;
        }

        .success {
            text-align: center;
        }

        .mail_block label {
            line-height: 30px;
            font-size: 20px;
        }

        .block_success .button {
            display: inline-block;
            outline: none;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            font: 28px Arial, Helvetica, sans-serif;
            padding: 10px 0px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, .3);
            -webkit-border-radius: .5em;
            -moz-border-radius: .5em;
            border-radius: .5em;
            -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
            -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
            box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
            color: #d9eef7;
            border: solid 1px #0076a3;
            background: #0095cd;
            background: -webkit-linear-gradient(#00adee, #0078a5);
            background: -o-linear-gradient(#00adee, #0078a5);
            background: linear-gradient(#00adee, #0078a5);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00adee', endColorstr='#0078a5');
            width: 200px !important;
        }

        .block_success .button:hover {
            text-decoration: none;
            color: #d9eef7;
            background: #007ead;
            background: -webkit-linear-gradient(#0095cc, #00678e);
            background: -o-linear-gradient(#0095cc, #00678e);
            background: linear-gradient(#0095cc, #00678e);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0095cc', endColorstr='#00678e');
        }

        .success1 {
            padding-top: 20px;
            text-align: center;
        }
    </style>


    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap&subset=cyrillic" rel="stylesheet">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">

    <style>
        body {
            margin: 0;
        }

        .formok-container {

            width: 100vw;
            height: 100vh;
            background-image: url('img/bg.png');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            font-family: 'Roboto';
            color: white;

            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }

        .formok-container h2 {
            font-size: 48px;
            line-height: 53px;
            margin-top: 0;
            margin-bottom: 0;
            color: white;
            text-align: left;
            text-transform: uppercase;
        }

        .formok-container h3 {
          margin-top: 20px;
          margin-bottom: 20px;
        }

        .formok-container p {
            font-size: 14px;
            margin: 15px 0;
        }

        .formok-container p:not(:nth-of-type(0)) {
            margin: 5px 0;
        }

        .formok-container .contacts .phones span {
            margin-right: 20px;
            font-size: 16px;
        }

        .formok-container .contacts h6 {
            font-size: 18px;
            margin: 20px 0;
        }

        .formok-container .contacts p {
            font-size: 13px;
        }

        .formok-container .contacts .social {
            margin-top: 30px;
            display: flex;
        }

        .formok-container .contacts .social a:first-child img {
            margin-left: -3px;
            margin-bottom: -1px;
        }

        .formok-container .contacts .social a {
            text-decoration: none;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: black;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
            margin-right: 15px;

        }

        .formok-container .contacts .social a img {
            max-width: 95%;
            max-height: 95%;
        }

        .formok-container .contacts .social {
            font-weight: 400;
            font-size: 14px;
        }

        .thank-wrapper{
            display: flex;
            justify-content: space-around;
            width: 100%;
        }
    </style>
</head>
<body>


<!--<div class="block_success">
    <h2 style="text-transform: uppercase;color: #CD0000;">Поздравляем! Ваш заказ принят!</h2>
    <p class="success">
        В ближайшее время с вами свяжется оператор для подтверждения заказа. Пожалуйста, включите Ваш контактный
        телефон.
    </p>

    <h3 class="success" style="margin-bottom:30px;">
        Пожалуйста, проверьте правильность введенной Вами информации.
    </h3>
    <div class="success">
        <ul class="list_info">
            <li><span>Ваше Имя:  </span><span id="client"><?/*= $_GET['name'] */?></span></li>
            <li><span>Ваш Телефон: </span><span id="tel">+<?/*= $_GET['phone'] */?></span></li>
        </ul>
        <br/><span id="submit"></span>
    </div>
    <p class="fail success" style="margin-top:30px;">Если вы ошиблись при заполнении формы, то, пожалуйста, <a
                href="javascript: history.back(-1);" style="color:#2067d8;">заполните заявку еще раз</a></p>
    <p style="text-align: center;">
        Если же все верно, то можете закрыть эту вкладку
    </p>


</div>-->


<div class="formok-container">
    <div class="thank-wrapper">
        <div class="thank-text">
            <h2>Поздравляем!</h2>
            <h2>Ваш заказ принят!</h2>

            <p>
                В ближайшее время с вами свяжется оператор для подтверждения заказа.
            </p>
            <h3>
                Просьба, держите включенным Ваш контактный телефон!
            </h3>

            <p>
                Пожалуйста, проверьте правильность введенной Вами информации!
            </p>

            <p>
                Имя: <?= $_GET['name'] ?>
            </p>

            <p>Телефон: + <?= $_GET['phone'] ?></p>

            <p>Если Вы ошиблись при заполнении формы, можете заполнить заявку еще раз.</p>
        </div>

        <div class="contacts">
            <p class="phones">
                <span>+38 093 047 30 34</span>
                <span>+38 066 802 29 69</span>
            </p>

            <h6>Будьте в курсе наших акций, <br>
                скидок и подарочных сертификатов</h6>
            <span class="social">Подписывайтесь на телеграм канал <br> и инстаграм аккаунт</span>

            <div class="social">
                <a target="_blank" href="https://t.me/mango_gastroshop">
                    <img src="img/telegram.png" alt="">
                </a>

                <a target="_blank" href="https://www.instagram.com/mango_gastroshop/">
                    <img src="img/insta.png" alt="">
                </a>
            </div>
        </div>
    </div>
</div>





</body>
</html>
