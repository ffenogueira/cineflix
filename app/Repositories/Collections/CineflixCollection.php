<?php

namespace App\Repositories\Collections;
use Exception;

class CineflixCollection {

    private $id;
    private $titulo;
    private $categoria_id;  
    private $descricao;   
    private $duracao;     
    private $avaliacao;        
    private $idioma_id;    
       


    public function __construct(){
        
    }

    
    public function setId($id = null){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setTitulo($titulo = null){
        $this->titulo = $titulo;
    }

    public function getTitulo(){
        return $this->titulo;
    }


    public function setCategoriaId($categoria_id = null){
        $this->categoria_id = $categoria_id;
    }


    public function getCategoriaId(){
        return $this->categoria_id;
    }

    public function setDescriacao($descricao = null){
        $this->descricao = $descricao;
    }

    public function getDescricao($descricao = null){
       return $this->descricao = $descricao;
    }

    public function setDuracao($duracao = null){
        $this->duracao = $duracao;
    }

    public function getDuracao(){
       return $this->duracao;
    }

    public function setAvaliacao($avaliacao = null){
        $this->avaliacao = $avaliacao;
    }

    public function getAvaliacao(){
       return $this->avaliacao;
    }

    public function setIdiomaId($idioma_id = null){
        $this->idioma_id = $idioma_id;
    }

    public function getIdiomaId(){
       return $this->idioma_id;
    }

   
    public function setAll($data = array()){

        try{ $this->setId($data["id"]); }catch(Exception $e){ }

        try{ $this->setTitulo($data["titulo"]); }catch(Exception $e){ }
        
        try{ $this->setCategoriaId($data["categoria_id"]); }catch(Exception $e){ }
    
        try{ $this->setDescricao($data["descricao"]); }catch(Exception $e){ }
        
        try{ $this->setDuracao($data["duracao"]); }catch(Exception $e){ }
            
        try{ $this->setAvaliacao($data["avaliacao"]); }catch(Exception $e){ }
       
        try{ $this->setIdiomaId($data["idioma_id"]);}catch(Exception $e){ }
    }
        
    public function toArray(){

        $dados = array(
                        "id"             => $this->id,
                        "titulo"      => $this->titulo,
                        "categoria_id"      => $this->categoria_id,
                        "descricao"       => $this->descricao,
                        "duracao"       => $this->duracao,
                        "avaliacao"  => $this->avaliacao,
                        "idioma_id"          => $this->idioma_id,
                    );

    return $dados;
    }

    public function toObjectArray(){

        $dados = array(
            "id"             => $this->id,
            "titulo"      => $this->titulo,
            "categoria_id"      => $this->categoria_id,
            "descricao"       => $this->descricao,
            "duracao"       => $this->duracao,
            "avaliacao"  => $this->avaliacao,
            "idioma_id"          => $this->idioma_id,
                    );

        return (object) $dados;

    }

}