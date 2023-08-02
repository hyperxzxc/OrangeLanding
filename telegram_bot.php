<?php
ini_set("allow_url_fopen", true);
$token = "";
$chat_id = "";

$textMessage = "Сообщение";
$textMessage = urlencode($textMessage);

$urlQuery = "https://api.telegram.org/bot". $token ."/sendMessage?chat_id=". $chat_id ."&text=" . $textMessage;

$result = file_get_contents($urlQuery);

?>


