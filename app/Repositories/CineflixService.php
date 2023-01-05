<?php

namespace App\Repositories;

class CineflixService {

    protected $path;
    protected $guzzle;

    public function __construct(){

        $this->path = env('API_URL','http://127.0.0.1:8000').'/filmes';
        $this->guzzle = new GuzzleService;
    }

    public function save($data = array()){
        $url = $this->path;
        return $this->guzzle->post($url,$data);   
    }

    public function find($data = array()){
        $url = $this->path;
        $resp = $this->post($url,$data); 
       // dd($resp);
        return $resp['data'];    
    }

    public function getById($id){
        $data['id'] = $id;
        $url = $this->path.'/getById';
        $resp = $this->post($url, $data);
        return $resp['data'];
    }

    public function update($data = array()){
        $url = $this->path.'/update';
        return $this->post($url, $data);
    }

    public function delete($id){
        $data['id'] = $id;
        $url = $this->path.'/delete';
        return $this->post($url, $data);
    }
    public function searchByName($nome)
    {
        $data['nome'] = $nome;
        $url = $this->path . '/search/nome';

        try{
            
            $response = $this->guzzle->post($url, $data);
            $response = $response['data'];   
        
        }catch(Exception $e){

            $response = [];

        }

        return $response;
    }

    public function searchByRg($rg)
    {
        $data['rg'] = $rg;
        $url = $this->path . '/search/rg';
        try{
            
            $response = $this->guzzle->post($url, $data);  
            //dd($response);
            $response = $response['data'];   
        
        }catch(Exception $e){

            $response = [$e->getMessage()];

        }

        return $response;
    }

    public function movimentacao($data = array()){
        $url = $this->path.'/movimentacao';
        return $this->guzzle->post($url, $data);
    }

    public function ato($data = array()){
        $url = $this->path.'/ato';
        return $this->guzzle->post($url, $data);
    }

    public function historico($data = array()){
        $url = $this->path.'/getAllWithPerson';
        return $this->guzzle->post($url, $data);
    }

    public function lote($data = array()){
        $url = $this->path.'/lots';
        return $this->guzzle->post($url, $data);
    }
}