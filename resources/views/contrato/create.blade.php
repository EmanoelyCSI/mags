<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Contrato</title>
</head>
<body>
    
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $errors)
                    <li> {{$errors}} </li>
                @endforeach
            </ul>
        </div>
    @endif

    {{ Form::open(array('url' => '/contrato/create')) }}
 
    {{ Form::label('cnpj', 'CNPJ') }}
    {{ Form::text('cnpj', null) }}
    <br/>
    {{ Form::label('name', 'Nome') }}
    {{ Form::text('name', null) }}
    <br/>
    {{ Form::label('proprietario_id', 'Proprietário') }}
    {{ Form::text('proprietario_id', null) }}
    <br/>
    {{ Form::label('email', 'Email') }}
    {{ Form::text('email', null) }}
    <br/>
    {{ Form::label('cell', 'Celular') }}
    {{ Form::text('cell', null) }}
    <br/>
    {{ Form::label('tel', 'Telefone') }}
    {{ Form::text('tel', null) }}
    <br/>
    {{ Form::label('address', 'Endereço') }}
    {{ Form::text('address', null) }}
    <br/>

    {{ Form::submit('Enviar') }}
 
    {{ Form::close() }}

    <a href="{{ URL::to('contrato/') }}">Voltar</a>
    
</body>
</html>