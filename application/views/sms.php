<?php
 
include "C:/wamp/www/twilio-php-master/Services/Twilio.php";
 
// set your AccountSid and AuthToken from www.twilio.com/user/account
$AccountSid = "ACa6846885206cb0041afeef5d0405ba25";
$AuthToken = "b41ecb043ce77678cac28c828e6d056e";
 
$client = new Services_Twilio($AccountSid, $AuthToken);
 
$message = $client->account->messages->create(array(
    "From" => "7028002480",
    "To" => "+918792213479",
    "Body" => "Test message!",
));
 
// Display a confirmation message on the screen
echo "Sent message {$message->sid}";

?>