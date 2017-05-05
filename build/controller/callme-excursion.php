<?php
$to = "goldentriangle@bk.ru, dic-mac@mail.ru";
$subject = "Заявка на экскурсию";

$message .= "Имя клиента: " . $_POST['name'] . "
Телефон: " . $_POST['phone'];


$message .= "
User Agent : ".$_SERVER['HTTP_USER_AGENT']."
IP : ".$_SERVER['REMOTE_ADDR'];

$headers = 'From: shop@daripodushki.ru' . "\r\n" .
    'Reply-To: shop@daripodushki.ru' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
?>
