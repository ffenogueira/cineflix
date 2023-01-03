<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filme;
use App\Categoria;

class ApiController extends Controller
{
    public function getAllFilmes() {
        $filmes = Filme::get()->toJson(JSON_PRETTY_PRINT);
        return response($filmes, 200);
      }
  
      public function createFilme(Request $request) {
        $filme = new Filme;
        $filme->titulo = $request->titulo;
        $filme->categoria_id = $request->categoria_id;
        $filme->descricao = $request->descricao;
        $filme->duracao = $request->duracao;
        $filme->avaliacao = $request->avaliacao;
        $filme->idioma_id = $request->idioma_id;
        $filme->save();
        
        return response()->json([
            "message" => "O filme foi cadastrado com sucesso !"
        ], 201);
      }
      
  
      public function getFilme($id) {
        if (Filme::where('id', $id)->exists()) {
            $filme = Filme::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($filme, 200);
          } else {
            return response()->json([
              "message" => "Filme não encontrado"
            ], 404);
          }
      }
      
  
      public function updateFilme(Request $request, $id) {
        if (Filme::where('id', $id)->exists()) {
            $filme = Filme::find($id);
            $filme->titulo = is_null($request->titulo) ? $filme->titulo : $request->titulo;
            $filme->categoria_id = is_null($request->categoria_id) ? $filme->categoria_id : $request->categoria_id;
            $filme->descricao = is_null($request->descricao) ? $filme->descricao : $request->descricao;
            $filme->duracao = is_null($request->duracao) ? $filme->duracao : $request->duracao;
            $filme->avaliacao = is_null($request->avaliacao) ? $filme->avaliacao : $request->avaliacao;
            $filme->idioma_id = is_null($request->idioma_id) ? $filme->idioma_id : $request->idioma_id;
            $filme->save();
    
            return response()->json([
                "message" => "Alteração feita com sucesso."
            ], 200);
            } else {
            return response()->json([
                "message" => "Não foi possível fazer a alteração."
            ], 404);
            
        }
      }
  
      public function deleteFilme ($id) {
        if(Filme::where('id', $id)->exists()) {
            $filme = Filme::find($id);
            $filme->delete();
    
            return response()->json([
              "message" => "Filme deletado com sucesso"
            ], 202);
          } else {
            return response()->json([
              "message" => "Filme não encontrado."
            ], 404);
          }
        }
      

      public function favoriteFilme(Request $request, $id) {
        $filme = new Favorite;
        $filme->titulo = $request->titulo;
        $filme->categoria_id = $request->categoria_id;
        $filme->descricao = $request->descricao;
        $filme->duracao = $request->duracao;
        $filme->avaliacao = $request->avaliacao;
        $filme->idioma_id = $request->idioma_id;
        $filme->save();
        
        return response()->json([
            "message" => "O filme foi adicionado aos favoritos !"
        ], 201);
      }

      public function getAllCategoria() {
        $categorias = Categoria::get()->toJson(JSON_PRETTY_PRINT);
        return response($categorias, 200);
      }
      
}
