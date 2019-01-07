<?php

require "vendor/autoload.php";

// Old Chanel 05/01/62
//$access_token = 'ahbj8DK/OxNGHqr9fwgt4pNzw2TNhNIBtmbvEBw0ILtArrE0S78BE+FVulEvtk3y62bz7QkbT+J0f5MJRlC6yMRv4IQyMyTRQLEBV8s+UI/sdJ5YiKkhLB/mmgU8JhoIByJcUoH06CYb3hUotv6BFwdB04t89/1O/w1cDnyilFU=';

// Old Chanel 05/01/62
//$channelSecret = 'd0271fd54d3126540bdb2d831101ccd3';

$access_token = '4uSfwkeFBaSmEoRdsABiJlL5l8jHYcYU/p+6pGwly6szAcQNzB/GtUOnKtnpC4shzdJ+c8A30qTS3sF576t0pJR16Qv/o6LeLJgRVBxdS3c6a/A+FTwqWqWKMsLRNPWjwo8v1KOQCJqH0fHFwgDgYwdB04t89/1O/w1cDnyilFU=
';

$channelSecret = 'be71673fa018908c8928cb5a187a1714';

$pushID = 'Ue8397db755c9256de543ed18d01dff28'; // my ID line

$pushID = $_GET['pushID'];
$ans_text = "บัญชีของท่านได้รับการยืนยันเรียบร้อยแล้ว";


$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder(' '.$ans_text);
$response = $bot->pushMessage($pushID, $textMessageBuilder);


echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







