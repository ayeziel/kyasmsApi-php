# kyasmsApi-php

# What is it?
KYA SMS a platform for sending marketing and banking sms all over the world. With our api, send your first message today. Open an account <a href="https://kyasms.net">here</a>

# . Installation

  It is recommended to use composer to install the library.
  
  ```
  $ composer require kyasms/php-api
 ```
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

You will receive a response : 

 ```
 
 {
    "status": "ACT",
    "submit": 2,
    "fail": 0,
    "success": 2,
    "cost": 24,
    "currency": "XOF",
    "sms_part": 1,
    "senderId": "KYA SMS",
    "message": "api sms",
    "array": {
        "msgId": "2301120114271190067,2301120114271190068",
        "phones": "22961498781,22998039720"
    }
}
 
  ```
