<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
  
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
              <a class="btn btn- col-12" href="{{ URL::to('/register') }}">Criar Novo Contrato</a>
        



             
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>
