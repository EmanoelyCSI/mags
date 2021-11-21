@extends('components.layout')

@section('title', 'Leituras')

@section('content')
   
  <!-- Contúdo Principal da Página --> 
  <div class="container">
    <h1>Leitura</h1>
        <div id="box-lista" class="table-responsive-lg">
            <table class="table border-silver-send">

                </thead>
                <tbody>
                    @foreach($leitura as $key => $value)
                        <tr>
                            <td>{{ $value->leitura}}</td>
                            {{-- <td>{{ $value->status}}</td> --}}

                            <td>
                                <a class="link-royal-blue  text-decoration-none" href="{{ URL::to('leitura/' . $value->id) }}">Visualizar</a>
                            </td>

                            <td>
                                <a class="link-royal-blue  text-decoration-none" href="{{ URL::to('leitura/' . $value->id . '/edit') }}">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Botão para criar contrato -->
            <a class="btn btn-royal-blue col-12" href="{{ URL::to('/leitura/create') }}">Nova leitura</a>

            </div>
        </div>
    </div>

@endsection
