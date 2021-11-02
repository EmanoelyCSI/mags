<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">    <link rel="stylesheet" href=" {{ asset('site/style.css') }} ">

    <title>Cadastros</title>
</head>
<body>

    <header class="bg-royal-blue">
        <div class="d-flex bd-highlight">

            <div class="p-2 w-100 bd-highlight">
                    <img src="/imgs/logo.png" alt="Logo Mags">
            </div>

            <div class="p-2 flex-shrink-1 bd-highlight">
                <a class="btn text-magnolia" href="{{ URL::to('/contato') }}">Contato</a>
            </div>
        </div>
    </header>
    <!-- Container Usuário --> 
    <div id="container-user" class="container-fluid d-flex p-2 ">

        <div id="box-user"  class="container-fluid d-flex mx-2 flex-row-reverse">
            
            <div class=" bg-magnolia mx-2 my-2">
                <svg id="Capa_1" enable-background="new 0 0 512 512" height="50" viewBox="0 0 512 512" width="50" xmlns="http://www.w3.org/2000/svg"><g><path d="m50 256c0 113.588 92.411 205.999 206 205.999s205.999-92.411 205.999-205.999-92.411-205.999-205.999-205.999-206 92.411-206 205.999zm92.429 147.193c3.558-39.587 35.676-74.014 80.219-85.683 10.154 4.701 21.447 7.343 33.352 7.343s23.198-2.643 33.352-7.343c44.544 11.668 76.661 46.096 80.219 85.683-31.44 24.314-70.842 38.806-113.571 38.806s-82.131-14.492-113.571-38.806zm113.571-98.34c-32.905 0-59.675-26.769-59.675-59.675s26.77-59.676 59.675-59.676 59.675 26.771 59.675 59.676-26.77 59.675-59.675 59.675zm185.999-48.853c0 51.336-20.906 97.88-54.651 131.568-4.152-18.435-13.287-35.643-26.993-50.555-13.345-14.518-30.652-26.109-49.984-33.672 15.555-14.55 25.304-35.234 25.304-58.163 0-43.934-35.742-79.676-79.675-79.676s-79.675 35.742-79.675 79.676c0 22.929 9.749 43.613 25.304 58.163-19.332 7.563-36.639 19.154-49.984 33.672-13.707 14.912-22.842 32.12-26.993 50.555-33.745-33.688-54.652-80.232-54.652-131.568 0-102.561 83.439-185.999 186-185.999s185.999 83.438 185.999 185.999z"/><path d="m302.819 4.273c-5.431-1.006-10.647 2.585-11.651 8.016s2.585 10.646 8.016 11.65c111.725 20.655 192.816 118.25 192.816 232.061 0 130.131-105.869 236-236 236s-236-105.869-236-236c0-113.811 81.091-211.406 192.817-232.06 5.431-1.004 9.02-6.22 8.016-11.65-1.004-5.432-6.219-9.026-11.651-8.016-121.208 22.406-209.182 128.272-209.182 251.726 0 68.38 26.628 132.667 74.981 181.02 48.352 48.351 112.639 74.98 181.019 74.98s132.667-26.629 181.019-74.98c48.353-48.353 74.981-112.64 74.981-181.02 0-123.454-87.974-229.32-209.181-251.727z"/><circle cx="256" cy="10" r="10"/></g></svg>
            </div>
            
            <div id="txt-user">
                <h4 class="text-end" >MAGS</h4>
                <h6>Administrador</h6>
            </div>

        </div>

    </div>

<!-- Menu de Navegação--> 
    <div class="container-fluid p-2">
        <ul class="nav nav-tabs col-10 m-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ URL::to('/dashboard') }}">Planilhas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('/contrato') }}">Cadastros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('/estoque') }}">Estoque</a>
            </li>
          </ul>
        </div>

           
 <!-- Contúdo Principal da Página --> 
    <div class="container">
        <h1>Contratos</h1>
            <div class="table-responsive-lg">
                <table class="table">
                    <tbody>
                        @foreach($contratos as $key => $value)
                            <tr>
                                <td>Contrato - {{ $value->posto->name}}</td>
                                {{-- <td>{{ $value->status}}</td> --}}

                                <td>
                                    <a href="{{ URL::to('contrato/' . $value->id) }}">Visualizar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- Botão para criar contrato --}}
                <a class="btn btn-royal-blue col-12" href="{{ URL::to('/register') }}">Criar Novo Contrato</a>

                </div>
            </div>
        </div>

    <!-- Rodapé -->
    <footer class="container-fluid fixed-bottom p-2">
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
