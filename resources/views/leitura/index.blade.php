@extends('components.layout')

@section('title', 'Leituras')

@section('content')
   
    <script>
        function ConfirmDelete() {
            return confirm('Tem certeza que deseja excluir este registro?');
        }
    </script>

    <table class="table no-margin">
        <thead>
            <tr>
                <th>Posto</th>
                <th>Data</th>
                <th>Status</th>
                <th></th>
                <th></th>
               

            </tr>
        </thead>
        <tbody>
 
          @foreach($leitura as $key => $value)
            <tr>
                {{-- <td>{{ $value->posto->name }}</td> --}}
                <td>{{ $value->updated_at }}</td>
                <td></td>
                <td></td>
                <td>
                    <a href="{{ URL::to('leitura/' . $value->id) }}">Visualizar</a>
                </td>

                <td>
                    <a href="{{ URL::to('leitura/' . $value->id . '/edit') }}">Editar</a>
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
        <a href="{{ URL::to('leitura/create') }}"><h2>Criar</h2></a>

@endsection
