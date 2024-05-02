<?php

/* https://api.telegram.org/bot6039232957:AAHAosVExlUrJAJG8HJTO_vhy3MtdcB5u4c/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "6039232957:AAHAosVExlUrJAJG8HJTO_vhy3MtdcB5u4c";
$chat_id = "900532794";
// $arr = array(
//   'Имя пользователя: ' => $name,
//   'Телефон: ' => $phone,
//   'Email' => $email
// );

// foreach($arr as $key => $value) {
//   $txt .= "<b>".$key."</b> ".$value."%0A";
// };
$txt ="Привет меня зовут Антон, и я диктор канала мастеская настроения!";

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

if ($sendToTelegram) {

} else {
    echo "Error";
}
