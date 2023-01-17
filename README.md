# kyasmsApi-php

# What is it?
KYA SMS a platform for sending marketing and banking sms all over the world. With our api, send your first message today.

# . Installation

  It is recommended to use composer to install the library.
  
 > <sup>$ composer require kyasms/php-api</sup>
 
 You can also use any other PSR-4 compliant autoloader.
 
 # . Send sms
 
 ```php
require_once __DIR__ . '/vendor/autoload.php';

use Kyasms\PhpApi\kyasmsClient;

$kyasms = new kyasmsClient();

// set apikey and clientid
$kyasms->setClient('APIKEY', 'CLIENTID');

// Set sms data

$smsData = array(
          'from' => 'KYA SMS',
          'to' =>'22966413718,22998039720', 
          'type' => 0,
           'message' => 'api sms'                         
           );
           
           $response = $kyasms->sendSms($smsData);
           echo $response;
           
```
