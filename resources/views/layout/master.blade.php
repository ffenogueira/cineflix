<!-- Stored in resources/views/layout/master.blade.php -->
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

        <!-- Or for RTL support -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />


        <!-- Select2 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />

        <!-- Connection Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        
        <!-- Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

        <title> @yield('title','CINEFLIX') </title>
        <link rel="icon" href="#">
        <style>
            body{
            color:white;
            background-color:rgb(20, 20, 20);
            
            }
            .container-fluid{
            --bs-gutter-x: 0 rem !important;
            }
            
            .title-icon{
                font-family: 'Poppins', sans-serif !important;
            }
           .card-body{
            color:black;
           }
           
        </style>
    </head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="col-2">
  <a style="color:#b30000; margin-left:80px" class="navbar-brand" href="{{url('home')}}">CINEFLIX</a>
</div>
  <div class="collapse navbar-collapse col-6" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      
      
    </ul>
        </div>
    <div class="col-3" >    
    <ul  class="navbar-nav">
  <li class="nav-item">
        <a class="nav-link" href="{{url('cadastrar')}}">Cadastrar Filme</a>
      </li>
</ul>
</div>
</nav>
         <!-- /navbar teste -->    

        @section('sidebar')

        @show

    <div class="container-fluid">
    @yield('container-fluid')
           
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="	https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script>

        const base_url = "{{url('/')}}/";
        const api_url = "{{env('api_url')}}";

        // Small using Bootstrap 5 classes
        $('.select2-class').select2({
            theme: "bootstrap-5",
            placeholder: 'Selecione uma opção',
            "language": {
                "noResults": function(){
                    return "Sem resultados";
                }
            }
        });

        $('.table-datatable').DataTable({
            language:{
                url:"//cdn.datatables.net/plug-ins/1.12.1/i18n/pt-BR.json"
            }
        });
        </script>
        @stack('footer-scripts')


    </body>
   
   
</html>
