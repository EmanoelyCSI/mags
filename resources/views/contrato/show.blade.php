<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visualizar</title>
</head>
<body>
    
        <h2>Visualizar</h2>
    <ul>
        <li>ID:                   {{ $contrato->id }}        </li>
        <li>CNPJ:                 {{ $contrato->cnpj }}      </li>
        <li>Nome:                 {{ $contrato->name }}      </li>
        <li>Email:                {{ $contrato->email }}     </li>
        <li>Celular:              {{ $contrato->cell }}      </li>
        <li>Telefone:             {{ $contrato->tel }}       </li>
        <li>Endereço:             {{ $contrato->address }}   </li>
        <li>Criação:              {{ Carbon\Carbon::parse($contrato->create_at)->format('d/m/Y H:i') }} </li>
        <li>Última modificação:   {{ Carbon\Carbon::parse($contrato->update_at)->format('d/m/Y H:i') }} </li>
    </ul>
    
    <a href="{{ URL::to('contrato/') }}">Voltar</a>
</body>
</html>


                        {{-- <td>
                            <a href="{{ URL::to('contrato/' . $value->id . '/edit') }}">Editar</a>
                        </td> --}}
        
                        {{-- <td>        
                            {{ Form::open(array('url' => 'contrato/' . $value->id, 'onsubmit' => 'return ConfirmDelete()')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
                            {{ Form::close() }}
                        </td> --}}