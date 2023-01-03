<?php

namespace App\Repositories;

class CategoriaService {

    protected $path;
   // protected $guzzle;

    public function __construct(){

        $this->path = env('API_URL','http://127.0.0.1:8000').'/api/categoria';
       // $this->guzzle = new GuzzleService;
    }


    public function GetAllCategoria(){
        $url = $this->path;
        try{
           
           $response = $url;
       
       }catch(Exception $e){

           $response = [];

       }
       return $response;
    }

   
}