
    
    @extends('components.layout')

    @section('title', 'Cadastros')

    @section('content')
    <!-- Contúdo Principal da Página --> 
    <div class="container">
        <h1>Contratos</h1>
            <div class="table-responsive-lg">
                <table class="table border-silver-send">
                    <tbody>
                        @foreach($contratos as $key => $value)
                            <tr>
                                <td>Contrato - {{ $value->posto->name}}</td>
                                {{-- <td>{{ $value->status}}</td> --}}
    
                                <td>
                                    <a class="link-royal-blue" href="{{ URL::to('contrato/' . $value->id) }}">Visualizar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
    
                {{-- Botão para criar contrato --}}
                <a class="btn btn-royal-blue col-12" href="{{ URL::to('/register') }}">Criar Novo Contrato</a>
    
                </div>
            </div>
        </div>
    
        @endsection
