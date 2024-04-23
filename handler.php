<?php
$user_phone = htmlspecialchars($_POST["userphone"]);

$token = "6599053044:AAEUb7NcL4tCckBbKNIYzqFmaRvESdAlSqU";
$chat_id = "-4168367118";

$formData = array(
  "Телефон клиента: " => $user_phone
);

foreach($formData as $key => $value) {
  $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if ($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
}