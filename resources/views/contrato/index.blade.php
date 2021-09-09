<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listando Contratos</title>
</head>
<body>
   

    <table class="table no-margin">
        <thead>
            <tr>
                <th>id</th>
                <th>CNPJ</th>
                <th>Nome</th>
                <th></th>

            </tr>
        </thead>
        <tbody>
 
          @foreach($contratos as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->cnpj}}</td>
                <td>{{ $value->name}}</td>
                <td>
                    <a href="{{ URL::to('contrato/' . $value->id) }}">Visualizar</a>
                </td>
            </tr>
           @endforeach
 
        </tbody>
    </table>

        {{-- Botão para criar contrato --}}
        <a href="{{ URL::to('contrato/create') }}"><h2>Criar</h2></a>

        @if (Session::has('message'))
            <div> {{ Session::get('message') }} </div>      
        @endif

    <tbody>
 
     

      </tbody>

</body>
</html>
