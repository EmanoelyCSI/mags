@extends('components.layout')

@section('title', 'Bicos')

@section('content')

    <table class="table no-margin">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Bomba</th>
                <th></th>

            </tr>
        </thead>
        <tbody>
 
          @foreach($bico as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                {{-- <td>{{ $value->bomba->name }}</td> --}}
                <td></td>
                <td>
                    <a href="{{ URL::to('bico/' . $value->id) }}">Visualizar</a>
                </td>

                <td>
                    <a href="{{ URL::to('bico/' . $value->id . '/edit') }}">Editar</a>
                </td>

                {{-- <td>        
                    {{ Form::open(array('url' => 'leitura/' . $value->id, 'onsubmit' => 'return ConfirmDelete()')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}
                </td> --}}

            </tr>
           @endforeach
 
        </tbody>
    </table>

        {{-- Botão para criar contrato --}}
        <a href="{{ URL::to('bico/create') }}"><h2>Criar</h2></a>
        
@endsection