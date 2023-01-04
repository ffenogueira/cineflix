<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Exception;


class GuzzleService
{
   private $apiUrl;


   public function __construct()
   {

      $this->apiUrl = env('API_URL', 'http://127.0.0.1:8000/api/');
   }


   public function post($url, $param)
   {

      try {

         $client = new Client();
         $response = $client->request('POST', $url, 
            ['form_params' => $param,
            'connect_timeout' => 10000,
            'read_timeout' => 10000,
            'timeout' => 10000
         ]
      );

         $contents = $response->getBody();

         return json_decode($contents, true);
      } catch (Exception $e) {

         // return json_encode(array());
         return $e->getMessage() . "\n";
      }
   }

   public function get($url, $param)
   {
      try {

         $client = new Client(['base_uri' => $url,'verify' => false]);
         $response = $client->request('GET', $param);

         $contents = $response->getBody()->getContents();

         return json_decode($contents, true);

      } catch (Exception $e) {

        //  return json_encode(array());
       return "Erro: " . $e->getMessage();
    }
 }


}
