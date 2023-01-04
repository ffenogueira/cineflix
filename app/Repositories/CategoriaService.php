<?php

namespace App\Repositories;
use App\Repositories\GuzzleService;
use Exception;

class CategoriaService {

    protected $path;
    protected $guzzle;

    public function __construct(){

        $this->path = env('API_URL','http://127.0.0.1:8000').'/api/categoria';
        $this->guzzle = new GuzzleService;
    }


    public function find($data = array())
    {
        $url = $this->path.'/categoria';
        return $this->guzzle->post($url, $data);
    }

   
}