<?php
// Get the PHP helper library from twilio.com/docs/php/install
require __DIR__ . '/Twilio/autoload.php';
use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = 'AC47c05015525fa56f86504760f4155000';
$token = '5432764c190a0a8e543f1295305d818f';
$client = new Client($sid, $token);

$call = $client->calls->create(
    "863.588.7799", "+917795282023",
    array("url" => "http://demo.twilio.com/docs/voice.xml")
);

echo $call->sid;