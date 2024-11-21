<?php
require "bot/Bot.php";

require "current.php";


$bot = new Bot();

$currency = new Currency();



$update = json_decode(file_get_contents("php://input"));

$from_id = $update->message->from->id;
$text = $update->message->text;

if ($text == '/start') {
    $bot->makeRequest('sendMessage', [
        'chat_id' => $from_id,
        'text' => "ASSALOMU ALAYKUM!.Botimizga hush kelibsiz:"
    ]);
}

if ($text == '/currency') {
    $currencies = $currency->getCurrencies();
    $currencies_list = "";

    foreach ($currencies as $currency => $rate) {
        $currencies_list .= "1 " . $currency . " : " . $rate . " UZS" . "\n";
    }
    $bot->makeRequest('sendMessage', [
        'chat_id' => $from_id,
        'text' => $currencies_list,
    ]);
}
if ($text == '/weather') {

    $bot->makeRequest('sendMessage', [
        'chat_id' => $from_id,
        'text' => 'Ob havo malumotlari',
    ]);
}
