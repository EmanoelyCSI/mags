<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ asset('site/style.css') }} ">

    <title>Home</title>
</head>
<body>

    <header class="bg-royal-blue">
        <div class="d-flex bd-highlight">

            <div class="p-2 w-100 bd-highlight">
                <figure class="figure">
                    <img src="/views/imgs/logo.png" class="figure-img img-fluid loat-start" alt="Logo-Mags">
                </figure>

            </div>

            <div class="p-2 flex-shrink-1 bd-highlight">
                <a class="btn text-magnolia" href="{{ URL::to('/contato') }}">Contato</a>
            </div>
        </div>
    </header>

    <div id="box-user" class="container-fuid d-flex p-2 bg-teste">
        <div class="float-end">
            <img src="resources\views\icons\002-do-utilizador.svg" alt="...">
        </div>
    </div>

    <div class="container-fuid">

    </div>
   


        <h1>Contratos</h1>


    <div class="container">
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
