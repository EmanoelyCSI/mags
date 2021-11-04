<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ asset('site/style.css') }} ">
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

    <div class="position-relative m-4">
        <div class="progress" style="height: 1px;">
          <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
        <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">2</button>
        <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</button>
      </div>
    
</body>
</html>