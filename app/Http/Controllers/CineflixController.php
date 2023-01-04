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
        return view('home');
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
    {    
        //dd($request->all());  
        $this->cineflixCollection->setAll($request->all());
        //dd($this->movimentacaoCollection);
        
            $response = $this->cineflix->save($this->cineflixCollection->toArray());
           // dd($response);
        

        
        $cineflix = $this->cineflix->find(null);
       



        return view('cadastrar', [
            'cineflix' => $cineflix

        ]);
    }


    
    
}