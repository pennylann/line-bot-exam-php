<?php



require "vendor/autoload.php";

$access_token = '7XMaXDHofSBfzKnkOMhB9RAKjHjF7wBv5LegUHVjUnhCvWulAIWoEgWgwqxyV0UMHVM/AgMU65e4Ewwv69kgkuFTs5zxki/B+LFLrw+lCFcJusmzN5KVP3vAxl4HRdrEbaxP2X6g+IzxdjpAqA2kkgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '375ac4d588032b2dee155dd780830fb5';

$pushID = 'Uf285d0abf3fcd3cd0e03a6fda514cd13';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







