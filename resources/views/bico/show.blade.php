@extends('components.layout')

@section('title', 'Bicos')

@section('content')

        <h2>Visualizar</h2>
    <ul>
        <li>ID:                   {{ $bico->id    }}        </li>
        <li>Nome:                 {{ $bico->name  }}        </li>
        <li>Bomba-Nome:           {{ $bico->bomba->name}}   </li>
        <li>Bomba-Modelo:         {{ $bico->bomba->modelo}} </li>
        <li>Bomba-ID:             {{ $bico->bomba->id}}     </li>
        <li>Criação:              {{ Carbon\Carbon::parse($bico->create_at)->format('d/m/Y H:i') }} </li>
        <li>Última modificação:   {{ Carbon\Carbon::parse($bico->update_at)->format('d/m/Y H:i') }} </li>


    </ul>
    
    <a href="{{ URL::to('bico/') }}">Voltar</a>

@endsection