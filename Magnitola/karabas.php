//------------- главная --------------------

<?php
session_start();
if (!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'];


$sale = 50;
$product_id = 977;
$product_name = '';
$currency = 'грн';
$marga = 0;
$ga = '';
$price_old = floor(($price_new/(100-$sale))*100);


?>

//--------------------------- в ХЕД -------------------------------------

<?
include '/' . implode('/', array_slice(explode('/', $_SERVER['DOCUMENT_ROOT']), 1, -1)) . '/shop/header.php';

if($landing_price) {
    $price_new = $landing_price;
} else {
  $price_new = 529;
}

$price_old = floor(($price_new / (100 - $sale)) * 100); // расчет скидки;

?>


//------------------- form-ok -----------------


<?php
//*********************** Страница с завершением заказа ***********************
include '/' . implode('/', array_slice(explode('/', $_SERVER['DOCUMENT_ROOT']), 1, -1)) . '/shop/form-ok.php';
?>



//---------------------------------------------- order --------


<?php
$name = stripslashes(htmlspecialchars($_POST['name']));
$phone = stripslashes(htmlspecialchars(preg_replace('/[^0-9]/', '', $_POST['phone'])));
$uid=stripslashes(htmlspecialchars($_POST['uid']));
$comment=stripslashes(htmlspecialchars($_POST['comment']));
$country=stripslashes(htmlspecialchars($_POST['country']));
if(empty($phone)){
    echo '<h1 style="color:red;">Пожалуйста заполните все поля</h1>';
    echo '<meta http-equiv="refresh" content="2; url=http://'.$_SERVER['SERVER_NAME'].'">';
}
else{
    $subject = 'Заказ товара - '.$_SERVER['SERVER_NAME'].''; // заголовок письма
    $addressat = "testbabos@gmail.com"; // Ваш Электронный адрес
    $success_url = './form-ok.php?bayer_name='.$name.'&phone='.$phone.'&uid='.$uid.'&country='.$country.'&comment='.$comment.'&time='.date('Y-m-d H:i:s',time()).'';
    $message = "ФИО: {$name}\nКонтактный телефон: {$phone}\n Поток {$uid}";
    $verify = mail($addressat,$subject,$message,"Content-type:text/plain;charset=utf-8\r\n");
    if ($verify == 'true'){
        header('Location: '.$success_url);
        echo '<h1 style="color:green;">Поздравляем! Ваш заказ принят!</h1>';
        exit;
    }
    else
    {
        echo '<h1 style="color:red;">Произошла ошибка!</h1>';
    }
}
?>


//----------------------

<form class="m1-form" action="zakaz.php" method="post" >
<div><input type="text"class="name" name="name" placeholder="Введите Ф.И.О" required></div>
<div><input type="text" class="phone" name="phone" placeholder="Введите телефон" required></div>
    <input type="hidden" name="s1" class="price_field_s1" value="<?= $price_new ?>" />
    <input type="hidden" name="s2" class="price_field_s2" value="<?= $product_id ?>" />
    <input type="hidden" name="s3" class="price_field_s3" value="<?= $product_name ?>" />
    <input type="hidden" name="utm_source" value="<?= $_GET['utm_source'] ?>" />
    <input type="hidden" name="utm_medium"  value="<?= $_GET['utm_medium'] ?>" />
    <input type="hidden" name="utm_term"  value="<?= $_GET['utm_term'] ?>" />
    <input type="hidden" name="utm_content"  value="<?= $_GET['utm_content'] ?>" />
    <input type="hidden" name="utm_campaign" value="<?= $_GET['utm_campaign'] ?>" />
    <input type="hidden" name="server_name" value="<?= $_SERVER['SERVER_NAME'] ?>" />
    <input type="hidden" name="php_self" value="<?= $_SERVER['PHP_SELF'] ?>" />
    <input type="hidden" name="ga" value="<?=$ga?>"/>
    <input type="hidden" name="uid" value="<?=$uid?>"/>
<div><button class="button-m">Заказать</button></div>
</form>

//-------------------------
