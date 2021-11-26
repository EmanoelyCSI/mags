@extends('components.layout')

@section('title', 'Turnos')

@section('content')

  <!-- Contúdo Principal da Página --> 
  <div class="container">
    <h1>Turnos</h1>
        <div id="box-lista" class="table-responsive-lg">
            <table class="table border-silver-send">
                <tbody>
                    @foreach($turnos as $key => $value)
                        <tr>
                            <td>{{ $value->posto->name }}</td>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->name}}</td>
                            <td>{{ $value->horario_inicio }}</td>
                            <td>{{ $value->horario_fim }}</td>

                            <td>
                                <a class="link-royal-blue  text-decoration-none" href="{{ URL::to('turno/' . $value->id) }}">Visualizar</a>
                            </td>

                            <td>
                                <a class="link-royal-blue  text-decoration-none" href="{{ URL::to('turno/' . $value->id . '/edit') }}">Editar</a>
                            </td>

                            <td>        
                                {{ Form::open(array('url' => 'turno/' . $value->id, 'onsubmit' => 'return ConfirmDelete()')) }}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Excluir', array('class' => 'btn link-royal-blue  text-decoration-none p-0 m-0')) }}
                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Botão para criar contrato -->
            <a class="btn btn-royal-blue col-12" href="{{ URL::to('turno/create') }}">Criar Turno</a>

            </div>
        </div>
    </div>

@endsection