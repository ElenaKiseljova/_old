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

?>

<?php
//***************** Страница с завершением заказа ******************
session_start();

// формируем массив с товарами в заказе (если товар один - оставляйте только первый элемент массива)
$products_list = array(
    0 => array(
            'product_id' => $_REQUEST['product_id'],    //код товара (из каталога CRM)
            'price'      => $_REQUEST['product_price'], //цена товара 1
            'count'      => '1',                     //количество товара 1
            // если есть смежные товары, тогда количество общего товара игнорируется
            'subs'       => array(
                                0  => array(
                                        'sub_id' => $_REQUEST['product_id'],
                                        'count'  => '1'
                                        ),
                                1  => array(
                                        'sub_id' => $_REQUEST['product_id'],
                                        'count'  => '1'
                                        )
            )
    ),
    1 => array(
            'product_id' => $_REQUEST['product_id'],    //код товара 2 (из каталога CRM)
            'price'      => $_REQUEST['product_price'], //цена товара 2
            'count'      => '1',                     //количество товара 2
            // если есть смежные товары, тогда количество общего товара игнорируется
            'subs'       => array(
                                0  => array(
                                        'sub_id' => $_REQUEST['product_id'],
                                        'count'  => '1'
                                        ),
                                1  => array(
                                        'sub_id' => $_REQUEST['product_id'],
                                        'count'  => '1'
                                        )
            )
        )
);
$products = urlencode(serialize($products_list));
$sender = urlencode(serialize($_SERVER));
// параметры запроса
$data = array(
    'key'             => '098f6bcd4621d373cade4e832627b4f6', //Ваш секретный токен
    'order_id'        => number_format(round(microtime(true)*10),0,'.',''), //идентификатор (код) заказа (*автоматически*)
    'country'         => 'UA',                         // Географическое направление заказа
    'office'          => '1',                          // Офис (id в CRM)
    'products'        => $products,                    // массив с товарами в заказе
    'bayer_name'      => $_REQUEST['name'],            // покупатель (Ф.И.О)
    'phone'           => $_REQUEST['phone'],           // телефон
    'email'           => $_REQUEST['email'],           // электронка
    'comment'         => $_REQUEST['product_name'],    // комментарий
    'delivery'        => $_REQUEST['delivery'],        // способ доставки (id в CRM)
    'delivery_adress' => $_REQUEST['delivery_adress'], // адрес доставки
    'payment'         => '',                           // вариант оплаты (id в CRM)
    'sender'          => $sender,
    'utm_source'      => $_SESSION['utms']['utm_source'],  // utm_source
    'utm_medium'      => $_SESSION['utms']['utm_medium'],  // utm_medium
    'utm_term'        => $_SESSION['utms']['utm_term'],    // utm_term
    'utm_content'     => $_SESSION['utms']['utm_content'], // utm_content
    'utm_campaign'    => $_SESSION['utms']['utm_campaign'],// utm_campaign
    'additional_1'    => '',                               // Дополнительное поле 1
    'additional_2'    => '',                               // Дополнительное поле 2
    'additional_3'    => '',                               // Дополнительное поле 3
    'additional_4'    => ''                                // Дополнительное поле 4
);

// запрос
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://admin.lp-crm.biz/api/addNewOrder.html');
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$out = curl_exec($curl);
curl_close($curl);
//$out – ответ сервера в формате JSON

?>


<?php
$price_currency = "грн";

$discount = 60;

// SECTION 1

$price_new_1 = 1549;
$price_old_1 = round(($price_new_1*100)/$discount);

// SECTION 2
$price_new_2 = 1479;
$price_old_2 = round(($price_new_2*100)/$discount);

// SECTION 7

$price_new_3 = 1249;
$price_old_3 = round(($price_new_3*100)/$discount);


// SECTION 9
$price_new_complect_1 = 1349;
$price_old_complect_1 = round(($price_new_complect_1*100)/$discount);

$price_new_complect_2 = 999;
$price_old_complect_2 = round(($price_new_complect_2*100)/$discount);

$price_new_complect_3 = 599;
$price_old_complect_3 = round(($price_new_complect_3*100)/$discount);
 ?>
