@extends('components.layout')

@section('title', 'Turnos')

@section('content')

    <table class="table no-margin">
        <thead>
            <tr>
                <th>ID</th>
                <th>Posto</th>
                <th>Nome</th>
                <th>Inicio do Turno</th>
                <th>Fim do Turno</th>
                <th></th>
                <th></th>

            </tr>
        </thead>
        <tbody>
 
          @foreach($turnos as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->postos->name }}</td>
                <td>{{ $value->name }}</td>
                {{-- <td>{{ $value->horario_inicio }}</td>
                <td>{{ $value->horario_fim }}</td> --}}
                
                <td></td>
                <td>
                    <a href="{{ URL::to('turno/' . $value->id) }}">Visualizar</a>
                </td>

                <td>
                    <a href="{{ URL::to('turno/' . $value->id . '/edit') }}">Editar</a>
                </td>

                <td>        
                    {{ Form::open(array('url' => 'turno/' . $value->id, 'onsubmit' => 'return ConfirmDelete()')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}
                </td>

            </tr>
           @endforeach
 
        </tbody>
    </table>

        {{-- Botão para criar contrato --}}
        <a href="{{ URL::to('turno/create') }}"><h2>Criar</h2></a>

@endsection