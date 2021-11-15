@extends('components.layout')

@section('title', 'Postos')

@section('content')

    <table class="table no-margin">
        <thead>
            <tr>
                <th>id</th>
                <th>CNPJ</th>
                <th>Nome</th>
                <th>Contrato</th>
                <th></th>
                <th></th>

            </tr>
        </thead>
        <tbody>
 
          @foreach($posto as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->cnpj}}</td>
                <td>{{ $value->name}}</td>
                <td>{{ $value->contrato->name }}</td>

                <td>
                    <a href="{{ URL::to('posto/' . $value->id) }}">Visualizar</a>
                </td>

                <td>
                    <a href="{{ URL::to('posto/' . $value->id . '/edit') }}">Editar</a>
                </td>

                <td>        
                    {{ Form::open(array('url' => 'posto/' . $value->id, 'onsubmit' => 'return ConfirmDelete()')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}
                </td>

            </tr>
           @endforeach
 
        </tbody>
    </table>

        {{-- Botão para criar contrato --}}
        <a href="{{ URL::to('posto/create') }}"><h2>Criar</h2></a>

@endsection