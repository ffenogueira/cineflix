<?php

namespace App\Repositories;

class IdiomaService {

    protected $path;
   // protected $guzzle;

    public function __construct(){

        $this->path = env('API_URL','http://localhost:8000/').'/api/idioma';
       // $this->guzzle = new GuzzleService;
    }

    public function GetAllIdioma(){
        $url = $this->path;
        try{
           
           $response = $url;
       
       }catch(Exception $e){

           $response = [];

       }
       return $response;
    }

   
}