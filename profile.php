<?php


$access_token = 'UaUGz2oDGI96FAk8odyaTNCXM7ZDecXEJjLBqendbaMcKiFH7er0iKuk23ezHwzGt87h8b7Cx84FaI7JB9QamNAx3QNuU1eqS+hH4m9JINkRrjz+xeuzFyLQ/XLilXj5Xthr9ffZ4ROTOJoZ3cKG/wdB04t89/1O/w1cDnyilFU=';

$userId = 'U0db35d51bb2a485d81474589f2f69a39';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

