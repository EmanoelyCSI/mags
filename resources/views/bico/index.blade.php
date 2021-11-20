@extends('components.layout')

@section('title', 'Bicos')

@section('content')

    <!-- Contúdo Principal da Página --> 
    <div class="container">
        <h1>Bicos</h1>
            <div id="box-lista" class="table-responsive-lg">
                <table class="table border-silver-send">
                    <tbody>
                        @foreach($bico as $key => $value)
                            <tr>
                                <td>{{ $value->name}}</td>
                                {{-- <td>{{ $value->status}}</td> --}}
    
                                <td>
                                    <a class="link-royal-blue  text-decoration-none" href="{{ URL::to('bico/' . $value->id) }}">Visualizar</a>
                                </td>

                                <td>
                                    <a class="link-royal-blue  text-decoration-none" href="{{ URL::to('bico/' . $value->id . '/edit') }}">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
    
                <!-- Botão para criar contrato -->
                <a class="btn btn-royal-blue col-12" href="{{ URL::to('/bico/create') }}">Criar Novo Bico</a>
    
                </div>
            </div>
        </div>

    
@endsection