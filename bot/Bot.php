<?php
require "vendor/autoload.php";
use Guzzlehttp\Client;
//
class Bot{
    const API_URL = 'https://api.telegram.org/bot';
    private $token='7901547662:AAF8OQy17IMT6S3NNU0xqS7i02ibUL45frQ';

    public $clint;

    public function makeRequest($method,$data=[]){
        $this->client=new Client(
            [
                'base_uri'=>self::API_URL.$this->token.'/',
                'timeout'=>2.0,
            ]
        );
        $request=$this->client->request('POST',$method,['json'=>$data]);

        return json_decode($request->getBody()->getContents());

    }
}


//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//
//require 'src/Bot.php';
//require 'src/Currency.php';
//
//$bot = new Bot();
//$currency = new Currency();
//
//$update = json_decode(file_get_contents('php://input'));
//
//$text = $update->message->text;
//$from_id = $update->message->from->id;
//
//if ($text == '/start') {
//    $response = $bot->makeRequest('sendMessage', [
//        'chat_id' => $from_id,
//        'text' => "Hello World! <a href='https://core.telegram.org/bots/api#message'> dcndsjcjsd<a>",
//        'parse_mode' => 'html'
//    ]);
//
//    if (!$response->ok) {
//        $bot->makeRequest('sendMessage', [
//            'chat_id' => $from_id,
//            'text' => json_encode($response),
//        ]);
//    }
//}
//if ($text == '/currency') {
//    $currencies = $currency->getCurrencies();
//
//    $currency_list = "";
//    foreach ($currencies as $currency => $rate) {
//        $currency_list .= $currency . ": " . $rate . "\n";
//    }
//    $bot->makeRequest('sendMessage', [
//        'chat_id' => $from_id,
//        'text' => $currency_list,
//    ]);
//}


