
@extends('layout.master')
@section('title', 'CINEFLIX - Home')

 
@section('sidebar')
@parent 
    <!-- SIDE BAR -->
@stop
@section('container-fluid')


<body>

<!-- slide section -->
<!-- Carousel -->
<div id="demo" style="padding-left: 0 !important;" data-bs-ride="carousel"  >

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('/images/craft.jpg') }}"  alt="As Aventuras de Tintin" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/images/inter.jpeg') }}"  alt="Mortal Kombat" class="d-block" style="width:100%">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<!-- end slide section -->

<section id="filmes" class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h3 class="mb-3">Filmes</h3>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                 
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                            @foreach (@$filmes as $f)
                            <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="{{ asset('/images/avatar.jpg') }}">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ @$f['titulo'] }}</h4>
                                            <p class="card-text">{{ @$f['descricao'] }}</p>

                                        </div>

                                    </div>
                        </div>
                        @endforeach
                    
</section>
</body>

   
    
</div>


@stop





