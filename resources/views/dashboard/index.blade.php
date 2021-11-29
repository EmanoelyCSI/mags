@extends('components.layout')

@section('title', 'Página Inicial')

@section('content')

    <div class="container">
        <div id="box-lista" class="table-responsive-lg">
            <table class="table border-silver-send">
                <h1>Relatórios</h1>
                <tbody>
                    @foreach($postos as $key => $value)
                        <tr>
                            <td>Relatório Mensal - {{ $value->name}}</td>
                            <td>{{ Carbon\Carbon::parse($value->update_at)->format('d/m/Y') }}</td>

                            <td>
                                <a class="link-royal-blue  text-decoration-none" href="{{ URL::to('relatorioMensal/' . $value->id) }}">Visualizar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Botão para criar contrato -->
            <a class="btn btn-royal-blue col-3" href="{{ URL::to('') }}">Mostrar mais</a>

            </div>
        </div>
    </div>
@endsection