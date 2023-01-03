<!DOCTYPE html>
<html lang="en">
    <head>
    <style>
  h3 {color:white !important;}
  p {color:white;}
</style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="navbar-top-fixed.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <title>Cineflix</title>
    </head>    
    <body style="background-color:rgb(20, 20, 20);">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="col-2">
  <a style="color:#b30000; margin-left:80px" class="navbar-brand" href="#">CINEFLIX</a>
</div>
  <div class="collapse navbar-collapse col-6" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Séries</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Filmes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Lançamentos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Meus Favoritos</a>
      </li>
    </ul>
    <ul  class="navbar-nav justify-content-end col-8">
  <li class="nav-item">
    <a class="nav-link" href="galeria.php">Galeria</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/cadastrar">Cadastrar</a>
  </li>
</ul>
</div>
</nav>
<!-- slide section -->
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

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
<div class="container mt-3">
  <h3>Filmes</h3>
  <p>The following example shows how to create a basic carousel with indicators and controls.</p>

<!-- card section -->
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{ asset('/images/avatar.jpg') }}" alt="Avatar 2">
  <div class="card-body">
    <h5 class="card-title">Avatar 2</h5>
    <p style="color:black" class="card-text">Após formar uma família, Jake Sully e Ney'tiri fazem de tudo para ficarem juntos. No entanto, eles devem sair de casa e explorar as regiões de Pandora quando uma antiga ameaça ressurge, e Jake deve travar uma guerra difícil contra os humanos.</p>
    <a href="#" class="btn btn-danger">Ver filme</a>
  </div>
</div>
</div>
<!-- end card section -->
</body>
</html>