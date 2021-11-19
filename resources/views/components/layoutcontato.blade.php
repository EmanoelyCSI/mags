<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href=" {{ asset('site/style.css') }} ">

    <title>@yield('title')</title>
</head>
<body>
    <!-- Topo da página -->
    <header class="container-fluid bg-royal-blue">
        <div class="container-lg d-flex justify-content-between px-0 align-items-center">
            <div class="d-flex my-4">
                <img class="col-3" src="{{ asset('/site/imgs/logo.png')}}" alt="Logo Mags">
            </div>
            
            <div class="d-flex my-4">
                <a class="btn text-magnolia fs-5" href="{{ URL::to('/contato') }}">Contato</a>
            </div>
        </div>
    </header>

    @yield('content')

    
    <!-- Rodapé -->
    <footer class="container-fluid p-2">
        <hr class="text-blue-gray">
        <h6 class="text-center text-royal-blue text-opacity-75">Todos os direitos reservados</h6>
    </footer>





@if (Session::has('message'))
   <div> {{ Session::get('message') }} </div>      
@endif

<script>
   function ConfirmDelete() {
       return confirm('Tem certeza que deseja excluir este registro?');
   }
</script>

<script src="{{ asset('site/jquery.js')}}"></script>
<script src="{{ asset('site/bootstrap.js')}}"></script>

</body>
</html>