<?php

require_once "/var/www/TurboApiClient.php";

$email1= $email;

// creation of the email to be sent
$email = new Email();
$email->setFrom("mail@bitjini.com");
$email->setToList($email1);
//$email->setCcList("mary.davies@domain.com, mary.smith@domain.com");
//$email->setBccList("maria.campbell@domain.com, don.smith@domain.com");	
$email->setSubject("subject");
$email->setContent("content");
$email->setHtmlContent("Your token is : ".$token);
$email->addCustomHeader('X-FirstHeader', "value");
$email->addCustomHeader('X-SecondHeader', "value");
$email->addCustomHeader('X-Header-to-be-removed', 'value');
$email->removeCustomHeader('X-Header-to-be-removed');

// creation of a client that connects with turbo-smtp APIs
$turboApiClient = new TurboApiClient("girish@bitjini.com", "Wa7mS3us");

// email sending
$response = $turboApiClient->sendEmail($email);

// display of the operations outcome
//var_dump($response);

?>