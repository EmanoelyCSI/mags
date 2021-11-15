@extends('components.layout')

@section('title', 'Usuários')

@section('content')

    <table class="table no-margin">
        <thead>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th></th>
                <th></th>
                <th></th>

            </tr>
        </thead>
        <tbody>
 
          @foreach($users as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>

                <td>
                    <a href="{{ URL::to('user/' . $value->id) }}">Visualizar</a>
                </td>

                <td>
                    <a href="{{ URL::to('user/' . $value->id . '/edit') }}">Editar</a>
                </td>

                <td>                                 
                    {{ Form::open(array('url' => 'user/' . $value->id, 'onsubmit' => 'return ConfirmDelete()')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}
                </td>


            </tr>
           @endforeach
 
        </tbody>
    </table>

@endsection