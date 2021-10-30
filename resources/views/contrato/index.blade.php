<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ asset('site/style.css') }} ">

    <title>Home</title>
</head>
<body class="bg-magnolia">
  
    <div class="container">

        <header>
            <figure class="figure">
                <img src="imgs/logo.png" class="figure-img img-fluid rounded" alt="Logo-Mags">
            </figure>
    
            <div class="contact">
                <a class="btn col-2 float-lg-end" href="{{ URL::to('/contato') }}">Contato</a>
            </div>
       </header>


        <div class="table-responsive-lg">
            <table class="table">
                <thead class="table table-sm">
                    <tr>
                        <th>Contratos</th>
                        <th></th>
                    </tr>
                </thead>
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
