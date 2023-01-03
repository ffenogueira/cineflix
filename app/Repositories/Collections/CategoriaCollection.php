<?php

namespace App\Repositories\Collections;
use Exception;

class CategoriaCollection {

    private $categoria_id;
    private $nome;
    
       


    public function __construct(){
        
    }

    
    public function setCategoriaId($categoria_id = null){
        $this->categoria_id = $categoria_id;
    }

    public function getCategoriaId(){
        return $this->categoria_id;
    }

    public function setNome($nome = null){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

   
    public function setAll($data = array()){

        try{ $this->setCategoriaId($data["categoria_id"]); }catch(Exception $e){ }

        try{ $this->setNome($data["nome"]); }catch(Exception $e){ }
    }
        
    public function toArray(){

        $dados = array(
                        "categoria_id"      => $this->categoria_id,
                        "nome"       => $this->nome,
                    );

    return $dados;
    }

    public function toObjectArray(){

        $dados = array(
            "categoria_id"      => $this->categoria_id,
            "nome"       => $this->nome,
                    );

        return (object) $dados;

    }

}