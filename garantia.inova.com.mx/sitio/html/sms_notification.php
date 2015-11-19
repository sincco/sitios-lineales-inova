<?php
    require("nsAdmBase.php");
    require("functions.php");
 
     //verify that cellphone and id_customers match
     $cellphone=load_name('sl_customers','ID_customers',$in['id_customers'],'cellphone');
    //  if ($cellphone!=$in['recipient'])
    //  {
    // 	 echo "Error: Cellphone does not match $cellphone!=$in[recipient] for $in[id_customers]";
    // 	 return;
    // }
    // 	echo "Finish $cellphone!=$in[recipient] for $in[id_customers]";
    // 	return;
    // Include the PHP TwilioRest library
    require "twilio.php";
     
    // Twilio REST API version
    $ApiVersion = $in['twilio_apiversion'];
 
    // Set our AccountSid and AuthToken
    $AccountSid = $in['twilio_accountsid'];
    $AuthToken = $in['twilio_authtoken'];
 
    // Instantiate a new Twilio Rest Client
    $client = new TwilioRestClient($AccountSid, $AuthToken);
 
    // make an associative array of server admins
//     $people = array(
//         "7863038438"=>"Gabriel",
//     );
 
    // Iterate over all our server admins
//     foreach ($people as $number => $name) {
 
        // Send a new outgoinging SMS by POST'ing to the SMS resource */
        // YYY-YYY-YYYY must be a Twilio validated phone number
        $response = $client->request("/$ApiVersion/Accounts/$AccountSid/SMS/Messages",
            "POST", array(
            "To" => $in['recipient'],
            "From" => $in['twilio_from'],
            "Body" => $in['message']
        ));
        if($response->IsError)
            echo "Error: {$response->ErrorMessage}";
        else
            echo "1";
//     }
 
?>