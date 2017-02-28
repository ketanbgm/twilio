<?php
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require __DIR__ . '/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC47c05015525fa56f86504760f4155000';
$token = '5432764c190a0a8e543f1295305d818f';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+917026741136',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '863.588.7799',
        // the body of the text message you'd like to send
        'body' => "Hey Rupesh! ketan here testing twilio!"
    )
);