<?php

require('vendor/autoload.php');
use shuchow\WordPressXMLRPCParser\Parser;


$callBack = function($payload) {
   var_dump($payload);
};

if($_SERVER['REQUEST_METHOD'] == "POST" && $_SERVER['HTTP_USER_AGENT'] == 'IFTTT production') {
    $parser = new Parser();
    $payload = $parser->parsePayload();
    call_user_func($callBack, $payload);
}