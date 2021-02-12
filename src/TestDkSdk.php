<?php

namespace Test\TestDkSdk;

class TestDkSdk
{
    private const SANDBOX_BASE_URL = 'https://collpay-dev.dev.squaredbyte.com';
    private const PRODUCTION_BASE_URL = 'localhost';

    private $baseUrl = self::PRODUCTION_BASE_URL;
    private $apiVersion = COLLPAY_V1;
    private $publicKey;

    public function __construct($publicKey, $envType = COLLPAY_ENV_PRODUCTION, $apiVersion = COLLPAY_V1) {
        $this->publicKey = $publicKey;
        if($envType == COLLPAY_ENV_SANDBOX) $this->baseUrl = self::SANDBOX_BASE_URL;
        if(!empty($apiVersion)) $this->apiVersion = $apiVersion;
    }

    public function getExchangeRate($from, $to) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => $this->baseUrl."/api/".$this->apiVersion."/exchange-rate",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "from=$from&to=$to",
          CURLOPT_HTTPHEADER => array(
            "Content-Type: application/x-www-form-urlencoded",
            "Accept: application/json",
            "Accept-Language: en",
            "x-auth: ".$this->publicKey,
          ),
        ));

        $response = json_decode(curl_exec($curl));

        curl_close($curl);

        return $response;
    }

    public function getTransaction($transactionId) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->baseUrl.'/api/'.$this->apiVersion.'/transactions/'.$transactionId,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/x-www-form-urlencoded",
                "Accept: application/json",
                "Accept-Language: en",
                "x-auth: ".$this->publicKey,
            ),
        ));

        $response = json_decode(curl_exec($curl));

        curl_close($curl);

        return $response;
    }
}
