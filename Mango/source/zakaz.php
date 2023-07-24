<?php
session_start();

$FROM = $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);






$name = stripslashes(htmlspecialchars($_POST['name']));
$phone = stripslashes(htmlspecialchars($_POST['phone']));
$product_price = stripslashes(htmlspecialchars($_POST['s1']));
$product_id = stripslashes(htmlspecialchars($_POST['s2']));
$product_name = stripslashes(htmlspecialchars($_POST['s3']));
$email = stripslashes(htmlspecialchars($_POST['email']));
$country = 'UA';
if (stripslashes(htmlspecialchars($_POST['country']))) {
    $country = stripslashes(htmlspecialchars($_POST['country']));
}




$products_list = array(
    1 => array(
        'product_id' => $product_id,
        'price' => $product_price,
        'count' => '1'
    )
);
$products = urlencode(serialize($products_list));
$sender = urlencode(serialize($_SERVER));
$data = array(
    'key' => '5ec4e8498eb46e71a1ea72cae08677b2',
    'order_id' => number_format(round(microtime(true) * 10), 0, '.', ''),

    'country' => $country,
    'office' => '',
    'products' => $products,
    'bayer_name' => $name,
    'phone' => $phone,
    'email' => $email,
    'comment' => $product_name,

    'additional_1' => $FROM,
    'additional_2' => $user_dir,
    'sender' => $sender,
    'delivery_type' => $_POST['delivery'],
    'delivery_adress' => $_POST['delivery_adress'],
    'utm_source' => $_POST['utm_source'],
    'utm_medium' => $_POST['utm_medium'],
    'utm_term' => $_POST['utm_term'],
    'utm_content' => $_POST['utm_content'],
    'utm_campaign' => $_POST['utm_campaign']);




$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://myleads.lp-crm.biz/api/addNewOrder.html');
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$out = curl_exec($curl);
curl_close($curl);



$success_url = "http://{$FROM}form-ok.php?name=$name&phone=$phone";


$ip_mail = $_SERVER['REMOTE_ADDR'];
$source_mail = $_POST['utm_source'];
$medium_mail = $_POST['utm_medium'];
$term_mail = $_POST['utm_term'];
$content_mail = $_POST['utm_content'];
$campaign_mail = $_POST['utm_campaign'];
$agent_mail = $_SERVER ['HTTP_USER_AGENT'];
$ga = $_POST['ga'];


$subject = 'Заказ товара - ' . $FROM;
$message = "ФИО: {$name}\nКонтактный телефон: {$phone}\nID: {$product_id}\nЦена: {$product_price}\nURL: {$FROM}\nПапка: {$litt}\nIP: {$ip_mail}\nUser Agent: {$agent_mail}\nutm_source: {$source_mail}\nutm_medium: {$medium_mail}\nutm_term: {$term_mail}\nutm_content: {$content_mail}\nutm_campaign: {$campaign_mail}";
$addressat = "smolin2303@gmail.com";
mail($addressat, $subject, $message, "Content-type:text/plain;charset=utf-8\r\n");


    header('Location: ' . $success_url);
    echo '<h1 style="color:green;">Поздравляем! Ваш заказ принят!</h1>';
    exit;

?>
