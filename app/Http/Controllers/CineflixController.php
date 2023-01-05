<?php

namespace App\Http\Controllers;

use App\Filme;
use App\Categoria;
use App\Idioma;
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

    public function index(Request $request)
    {
        $filmes = Filme::get()->toArray();
        return view('home', [
            'filmes' => $filmes
        ]);
    }


    public function create(Request $request)
    {
        try{

            $id = $request->id;
            $allCategoria = Categoria::get()->toArray();
            //$allCategoria= $this->categoria->find(); 
            $allIdioma = Idioma::get()->toArray();      
            
        }catch(Exception $e){

            $cineflix = array();
            $categoria = array();
            $idioma = array();
        
        }

        return view('cadastrar', [
            'id' => $id,
            'allCategoria' => $allCategoria,
            'allIdioma' => $allIdioma,
        ]);
               
    }

    public function store(Request $request)
    {  /*  $filme = new Filme;
        $filme->titulo = $request->titulo;
        $filme->categoria_id = $request->categoria_id;
        $filme->descricao = $request->descricao;
        $filme->duracao = $request->duracao;
        $filme->avaliacao = $request->avaliacao;
        $filme->idioma_id = $request->idioma_id;
        $filme->save();
        $filmes = Filme::get()->toArray();
        
        $response = response()->json([ "message" => "O filme foi cadastrado com sucesso !"
        ], 201);
        return view('home', [
            'response' => $response,
            'filmes' => $filmes
        ]); */

         $this->cineflixCollection->setAll($request->all());
       
            $response = $this->cineflix->save($this->cineflixCollection->toArray());

            $filmes = Filme::get()->toArray();
        

        return view('home', [
            'response' => $response
           // 'filmes' => $filmes
        ]); 
       
      }
    


    
    
}