
@extends('layout.master')
@section('title', 'CINEFLIX - Cadastro')

 
@section('sidebar')
@parent 
    <!-- SIDE BAR -->
@stop
@section('content')

<style type="text/css">
#cancelar:hover{
    color:white;
}
#cancelar{
    color:#6c757d;
    text-decoration:none;
}
</style>
<div class="container">
<div>
    <p class="h2 mt-5 mb-5 "><span class="material-icons">movie</span><span class="title-icon"> CADASTRAR FILME</span></p>
</div>

<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div> 

    <!--- form cadastro -->

  <form  method="post" action="{{ route('cineflix.store') }}" name="form-cadastro">   
            @csrf
            @method('POST') 

           <!-- <input type="hidden" name="id" value="{{ @$cineflix['id'] }}"> -->
            
           <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 mb-3">
                        <label class="form-label">Titulo do Filme</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" placeholder=""  value="{{ @$dados['titulo'] }}">
                    </div>
                    <div id="coluna" class="col-md-6 col-sm-6 col-xs-12 mb-3">
                        <label  class="form-label">Categoria</label>
                        <select style="width:100%;" class="select2-class" name="categoria" id="categoria">
                        
                      
                        </select>
                    </div>  
                    </div>

                    <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12 mb-3">
                        <label class="form-label">Duracao</label>
                        <input type="number" class="form-control" name="duracao" id="duracao" placeholder=""  value="{{ @$dados['duracao'] }}">
                    </div>  
                    
                    <div class="col-md-3 col-sm-3 col-xs-12 mb-3">
                        <label class="form-label">Avaliação</label>
                        <input type="number" class="form-control" name="avaliacao" id="avaliacao" placeholder=""  value="{{ @$dados['avaliacao'] }}">
                    </div>    
                    
                    <div id="idioma" class="col-md-6 col-sm-6 col-xs-12 mb-3">
                        <label  class="form-label">Idioma</label>
                        <select style="width:100%;" class="select2-class" name="idioma" id="idioma">
                        
                      
                        </select>
                    </div>   
                </div>
                
                

                <div class="row">
            
                        <label class="form-label">Descrição</label>
                        <textarea class="form-control" id="descricao" rows="3" name="descricao" placeholder="">{{ @$dados['descricao'] }}</textarea>
                </div>  
                
                <div class="row">

                    <div class="col-4 offset-md-2">
                        <div class="d-grid gap-2 mt-5">
                                <button type="button" class="btn btn-outline-danger">
                                    <a id="cancelar" href="/home">Cancelar</a>
                                </button>
                        </div>
                    </div>  

                    <div class="col-4">
                        <div class="d-grid gap-2 mt-5">
                                <button  type="submit" class="btn btn-outline-secondary">Cadastrar</button>
                        </div>
                    </div>  
                </div>

                </form>
    
</div>


@stop

