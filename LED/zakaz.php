<?php
$name = stripslashes(htmlspecialchars($_POST['name']));
$phone = stripslashes(htmlspecialchars(preg_replace('/[^0-9]/', '', $_POST['phone'])));
$uid=stripslashes(htmlspecialchars($_POST['uid']));
$comment=stripslashes(htmlspecialchars($_POST['s3']));
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

var_dump();
?>
