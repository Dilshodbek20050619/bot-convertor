<?php

//require "current.php";
//$currency=new Currency();
//$currencies=$currency->getCurrencies();
//
//require "currency-convertor.php";
$uri=parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

if($uri=='/weather'){
    require 'src/Weather.php';
}
elseif ($uri=='/currency') {
    require 'currency-convertor.php';

}
elseif ($uri=='/telegram') {
    require 'bot.php';
}
else {
    echo '404 Not Found';
}