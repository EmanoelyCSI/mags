@extends('components.layout')

@section('title', 'Postos')

@section('content')

    <!-- Contúdo Principal da Página --> 
    <div class="container">
        <h1>Postos</h1>
            <div id="box-lista" class="table-responsive-lg">
                <table class="table border-silver-send">
                    <tbody>
                        @foreach($posto as $key => $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->cnpj}}</td>
                                <td>{{ $value->name}}</td>
                                {{-- <td>{{ $value->contrato->name }}</td> --}}

                                <td>
                                    <a class="link-royal-blue  text-decoration-none" href="{{ URL::to('posto/' . $value->id) }}">Visualizar</a>
                                </td>

                                <td>
                                    <a class="link-royal-blue  text-decoration-none" href="{{ URL::to('posto/' . $value->id . '/edit') }}">Editar</a>
                                </td>

                                <td>
                                    <a class="btn btn-royal-blue col-12" href="{{ URL::to('postoQuantidade/'. $value->id) }}">Adicionar estoque</a>
                                </td>

                                <td>        
                                    {{ Form::open(array('url' => 'posto/' . $value->id, 'onsubmit' => 'return ConfirmDelete()')) }}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit('Excluir', array('class' => 'btn link-royal-blue  text-decoration-none p-0 m-0')) }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Botão para criar contrato -->
                <a class="btn btn-royal-blue col-12" href="{{ URL::to('posto/create') }}">Criar Posto</a>

                </div>
            </div>
        </div>
@endsection