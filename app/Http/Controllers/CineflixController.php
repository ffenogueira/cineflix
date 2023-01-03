<?php

namespace App\Http\Controllers;

use App\Filme;
use Illuminate\Http\Request;
use App\Repositories\CineflixService;
use App\Repositories\CategoriaService;
use App\Repositories\IdiomaService;
use App\Repositories\Collections\CineflixCollection;
use App\Repositories\Collections\CategoriaCollection;
use App\Repositories\Collections\IdiomaCollection;
use Exception;




class CineflixController extends Controller
{
    //
    private $cineflix;
    private $cineflixCollection;
    private $categoria;
    private $categoriaCollection;
    private $idioma;
    private $idiomaCollection;

    public function __construct()
    {
        
        $this->cineflix = new CineflixService();
        $this->cineflixCollection = new CineflixCollection();
        $this->categoria = new CategoriaService();
        $this->categoriaCollection = new CategoriaCollection();
        $this->idioma = new IdiomaService();
        $this->idiomaCollection = new IdiomaCollection();

    }

 
    public function create(Request $request)
    {
        try{

            $id = $request->id;
            $AllCategoria= $this->categoria->GetAllCategoria(); 
            $AllIdioma = $this->idioma->GetAllIdioma();      
            
        }catch(Exception $e){

            $cineflix = array();
            $categoria = array();
            $idioma = array();
        
        }

        return view('cadastrar', [
            'AllCategoria' => $AllCategoria,
            'AllIdioma' => $AllIdioma,
        ]);
               
    }


    
    
}