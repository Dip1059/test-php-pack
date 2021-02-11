<?php

namespace Test\TestDkSdk;

class TestDkSdk
{


    /**
     * CollPay Payment Gateway Base URL.
     *
     * @var string
     */
    public const BASE_URL = 'https://collpay-dev.dev.squaredbyte.com/api';

    /**
     * CollPay Payment Gateway API version.
     *
     * @var string
     */
    public const VERSION = 'v1';

    /**
     * CollPay Payment Gateway API Key.
     *
     * @var string
     */
    public const API_KEY = '0810545410c0dd7822cdd7c7caa336b2';

    /**
     * POST Exchange Rate API
     * 
     * @param mixed $request
     * 
     * @return [type]
     */
    public function getExchangeRate($from, $to) {           
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => Self::BASE_URL."/".Self::VERSION."/exchange-rate",
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
            "x-auth: ".Self::API_KEY,
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        
        return $response;
    }
    

    public static function test()
    {
        return 'hello test';
    }
}
