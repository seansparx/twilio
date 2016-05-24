<?php

require "vendor/Services/Twilio.php";

$AccountSid = ""; // Your Account SID from www.twilio.com/console
$AuthToken = "";   // Your Auth Token from www.twilio.com/console

$client = new Services_Twilio($AccountSid, $AuthToken);

try {
    $message = $client->account->messages->create(array(
        "From" => "+19096108398", // From a valid Twilio number
        "To" => "+919899773053", // Text this number
        "Body" => "Hello from Twilio",
    ));
    
    echo $message->sid;
    
} catch (Services_Twilio_RestException $e) {
    echo $e->getMessage();
}
