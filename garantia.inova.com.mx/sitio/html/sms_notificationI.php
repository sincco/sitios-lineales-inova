<?php
phpinfo() ;
    // Include the PHP TwilioRest library
    require "twilio.php";
     
    // Twilio REST API version
    $ApiVersion = "2010-04-01";
 
    // Set our AccountSid and AuthToken
    $AccountSid = "ACab28583e662dcbf859ad7c0bf28d79b3";
    $AuthToken = "454323a547b60b63f55faa44849959cc";
 
    // Instantiate a new Twilio Rest Client
    $client = new TwilioRestClient($AccountSid, $AuthToken);
 
    // make an associative array of server admins
    $people = array(
        "7863038438"=>"Gabriel",
    );
 
    // Iterate over all our server admins
    foreach ($people as $number => $name) {
 
        // Send a new outgoinging SMS by POST'ing to the SMS resource */
        // YYY-YYY-YYYY must be a Twilio validated phone number
        $response = $client->request("/$ApiVersion/Accounts/$AccountSid/SMS/Messages",
            "POST", array(
            "To" => $number,
            "From" => "415-599-2671",
            "Body" => "This is just a test from direksys sms notifications"
        ));
        if($response->IsError)
            echo "Error: {$response->ErrorMessage}";
        else
            echo "Sent message to $name";
    }
 
?>