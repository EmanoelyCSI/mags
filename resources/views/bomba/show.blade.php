@extends('components.layout')

@section('title', 'Bombas')

@section('content')

        <h2>Visualizar</h2>
    <ul>
        <li>ID:                   {{ $bomba->id    }}     </li>
        <li>Nome:                 {{ $bomba->name  }}     </li>
        <li>Modelo:               {{ $bomba->modelo }}     </li>
        <li>Bico:                 {{ $bomba->bico  }}     </li>
        <li>Criação:              {{ Carbon\Carbon::parse($bomba->create_at)->format('d/m/Y H:i') }} </li>
        <li>Última modificação:   {{ Carbon\Carbon::parse($bomba->update_at)->format('d/m/Y H:i') }} </li>


    </ul>
    
    <a href="{{ URL::to('bomba/') }}">Voltar</a>

@endsection