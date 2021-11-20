@extends('components.layout')

@section('title', 'Bombas')

@section('content')
     <!-- Contúdo Principal da Página --> 
     <div class="container">
        <h1>Bombas</h1>
            <div id="box-lista" class="table-responsive-lg">
                <table class="table border-silver-send">
                    <tbody>
                        @foreach($bomba as $key => $value)
                            <tr>
                                <td>{{ $value->name}}</td>
                                {{-- <td>{{ $value->status}}</td> --}}
    
                                <td>
                                    <a class="link-royal-blue  text-decoration-none" href="{{ URL::to('bomba/' . $value->id) }}">Visualizar</a>
                                </td>

                                <td>
                                    <a class="link-royal-blue  text-decoration-none" href="{{ URL::to('bomba/' . $value->id . '/edit') }}">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
    
                <!-- Botão para criar contrato -->
                <a class="btn btn-royal-blue col-12" href="{{ URL::to('/bomba/create') }}">Criar Nova Bomba</a>
    
                </div>
            </div>
        </div>
              {{-- <td>        
                    {{ Form::open(array('url' => 'leitura/' . $value->id, 'onsubmit' => 'return ConfirmDelete()')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}
                </td> --}}
@endsection