@extends('components.layout')

@section('title', 'Leituras')

@section('content')
   
<div id="conteudo" class="container p-0">

    <div id="box-lista" class="table-responsive-lg">
        <table class="table border-silver-send">
            <thead>
                <tr class="fs-5">
                    <th class="fw-normal">Posto</th>
                    <th class="fw-normal">Data</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
    
            @foreach($leitura as $key => $value)
                <tr>
                    {{-- <td>{{ $value->posto->name }}</td> --}}
                    <td>{{ $value->updated_at }}</td>
                    <td></td>

                    <td>
                        <a class="text-royal-blue text-decoration-none" href="{{ URL::to('leitura/' . $value->id) }}">Visualizar</a>
                    </td>

                   <!-- <td>
                        <a href="{{ URL::to('leitura/' . $value->id . '/edit') }}">Editar</a>
                    </td>
                    -->
                </tr>
            @endforeach
    
            </tbody>
        </table>

        <dix id="box-btn" class="d-flex w-25 justify-content-between">
            <a class="btn btn-md text-royal-blue" href="{{ URL::to('#') }}">Mostrar mais</a>
            <!-- Botão para gerar relatório -->
            <a class="btn btn-royal-blue btn-md text-magnolia" href="{{ URL::to('leitura/create') }}">Gerar Relatório</a>
        </dix>
    </div>
</div>
     
      

@endsection
