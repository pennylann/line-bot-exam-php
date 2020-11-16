<?php



require "vendor/autoload.php";

$access_token = 'SYT+PpoedpdYn8LBouagrMuwtSHPySsgkZ3af6Tj12ovvEODdkMETwuH9B9XpBeuhTh7VVjMug81fSbGHPvUhxe7lP8XfCJfOzcGh1cc2PLmX0Jn+l9eVg+OZCSU3jGRDcf5nGBYn63ClTY/xM+ndgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '738a5639268074dc6a7b74c8bf02396f';

$pushID = 'Uf285d0abf3fcd3cd0e03a6fda514cd13';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







