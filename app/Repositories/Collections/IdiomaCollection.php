<?php

namespace App\Repositories\Collections;
use Exception;

class IdiomaCollection {

    private $idioma_id;
    private $nome;
    
       


    public function __construct(){
        
    }

    
    public function setIdiomaId($idioma_id = null){
        $this->idioma_id = $idioma_id;
    }

    public function getIdiomaId(){
        return $this->idioma_id;
    }

    public function setNome($nome = null){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

   
    public function setAll($data = array()){

        try{ $this->setIdiomaId($data["idioma_id"]); }catch(Exception $e){ }

        try{ $this->setNome($data["nome"]); }catch(Exception $e){ }
    }
        
    public function toArray(){

        $dados = array(
                        "idioma_id"      => $this->idioma_id,
                        "nome"       => $this->nome,
                    );

    return $dados;
    }

    public function toObjectArray(){

        $dados = array(
            "idioma_id"      => $this->idioma_id,
            "nome"       => $this->nome,
                    );

        return (object) $dados;

    }

}