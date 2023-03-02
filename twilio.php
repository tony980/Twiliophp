<?php

// Load the Twilio PHP library using Composer into your php project
require __DIR__ . '/vendor/autoload.php';

// Set your Twilio account information.fetch data from twilio  website
$account_sid = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
$auth_token = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
$twilio_number = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';

// Set the recipient's phone number and the message to send
$to_number = 'xxxxxxxxxxxxxxxxxxxxxxx'; // Replace with the recipient's phone number
$message = 'Dont forget your appointment tomorrow at 2pm';

// Initialize the Twilio client
$client = new Twilio\Rest\Client($account_sid, $auth_token);

// Send the SMS message using the Twilio API
$message = $client->messages->create(
    $to_number,
    array(
        'from' => $twilio_number,
        'body' => $message
    )
);

// Output the message SID for debugging
echo 'Message SID: ' . $message->sid;