@extends('components.layout')

@section('title', 'Perfil')

@section('content')
    
    <h2>Visualizar</h2>
<ul>
    <li>ID:                   {{ $user->id }}        </li>
    <li>Nome:                 {{ $user->name }}      </li>
    <li>Email:                {{ $user->email }}     </li>
    <li>Celular:              {{ $user->cell }}      </li>
    <li>Tel:                  {{ $user->tel }}       </li>
    <li>Criação:              {{ Carbon\Carbon::parse($user->create_at)->format('d/m/Y H:i') }} </li>
    <li>Última modificação:   {{ Carbon\Carbon::parse($user->update_at)->format('d/m/Y H:i') }} </li>
</ul>
 
@endsection
