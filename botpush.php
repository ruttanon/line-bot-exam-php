<?php



require "vendor/autoload.php";

$access_token = 'UaUGz2oDGI96FAk8odyaTNCXM7ZDecXEJjLBqendbaMcKiFH7er0iKuk23ezHwzGt87h8b7Cx84FaI7JB9QamNAx3QNuU1eqS+hH4m9JINkRrjz+xeuzFyLQ/XLilXj5Xthr9ffZ4ROTOJoZ3cKG/wdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'ff1e448c4e03e3fcb62d2c640d752d4b';

$pushID = 'U0db35d51bb2a485d81474589f2f69a39';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







