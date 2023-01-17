<?php

namespace Kyasms\PhpApi;

class kyasmsClient
{

   private $apikey;
   private $clientid;

    public function setClient($apikey, $clientid)
    {
        $this->apikey = $apikey;
        $this->clientid = $clientid;

    }


    public function sendSms($data)
    {

        $curl = curl_init();
        $url ='https://route.kyasms.net/api/v2/sms/send';

        curl_setopt_array($curl, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_HTTPHEADER => array(
            'CLIENTID: '.$this->clientid.'',
            'APIKEY: '.$this->apikey.'',
            'Content-Type: application/json'
          ),
        ));

        if($data) {
          curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        }

        $response = curl_exec($curl);

        curl_close($curl);

        return $response;
    }


     /* Get account detail*/

     public function myAccount()
     {
 
 
       $curl = curl_init();
         $url ='https://route.kyasms.net/api/v2/account/details';
 
         curl_setopt_array($curl, array(
           CURLOPT_URL => $url,
           CURLOPT_RETURNTRANSFER => true,
           CURLOPT_ENCODING => "",
           CURLOPT_MAXREDIRS => 10,
           CURLOPT_TIMEOUT => 0,
           CURLOPT_FOLLOWLOCATION => true,
           CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
           CURLOPT_CUSTOMREQUEST => 'POST',
           CURLOPT_HTTPHEADER => array(
             'CLIENTID: '.$this->clientid.'',
             'APIKEY: '.$this->apikey.'',
             'Content-Type: application/json'
           ),
         ));
 
 
         $response = curl_exec($curl);
 
         curl_close($curl);
 
         return $response;
 
     }

    

     /* get reports*/

     
     public function getReports($data)
    {

        $curl = curl_init();
        $url ='https://route.kyasms.net/api/v2/sms/reports';

        curl_setopt_array($curl, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_HTTPHEADER => array(
            'CLIENTID: '.$this->clientid.'',
            'APIKEY: '.$this->apikey.'',
            'Content-Type: application/json'
          ),
        ));

        if($data) {
          curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        }

        $response = curl_exec($curl);

        curl_close($curl);

        return $response;
    }



    /* Trace sms */


    public function traceSms($data)
    {

        $curl = curl_init();
        $url ='https://route.kyasms.net/api/v2/sms/trace';

        curl_setopt_array($curl, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_HTTPHEADER => array(
            'CLIENTID: '.$this->clientid.'',
            'APIKEY: '.$this->apikey.'',
            'Content-Type: application/json'
          ),
        ));

        if($data) {
          curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        }

        $response = curl_exec($curl);

        curl_close($curl);

        return $response;
    }

    

}
