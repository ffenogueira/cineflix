
@extends('layout.master')
@section('title', 'CINEFLIX - Cadastro')

 
@section('sidebar')
@parent 
    <!-- SIDE BAR -->
@stop
@section('container-fluid')

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
                        <select style="width:100%;" class="select2-class" name="categoria_id" id="categoria_id">
                        <option value=""> </option>
                        @foreach (@$allCategoria as $categoria) 
                                        <option value="{{ @$categoria['categoria_id'] }}">{{ @$categoria['nome'] }}</option>
                                    @endforeach
                                   
                      
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
                        <select style="width:100%;" class="select2-class" name="idioma_id" id="idioma_id">
                        <option value=""></option>
                        @foreach (@$allIdioma as $idioma) 
                                        <option value="{{ @$idioma['idioma_id'] }}">{{ @$idioma['nome'] }}</option>
                                    @endforeach
                      
                        </select>
                    </div>   
                </div>
                
                

                <div class="row">
                <div class="col-md-12">
                        <label class="form-label">Descrição</label>
                        <textarea class="form-control" id="descricao" rows="3" name="descricao" placeholder="">{{ @$dados['descricao'] }}</textarea>
                </div>  
                </div> 
                
                <div class="row">

                    <div class="col-4 offset-md-2">
                        <div class="d-grid gap-2 mt-5">

                                    <a class="btn btn-outline-danger" id="cancelar" href="{{url('home')}}">Cancelar</a>
                                
                        </div>
                    </div>  

                    <div class="col-4">
                        <div class="d-grid gap-2 mt-5">
                                <button  type="submit" class="btn btn-outline-success">Cadastrar</button>
                        </div>
                    </div>  
                </div>

                </form>
    
</div>


@stop

