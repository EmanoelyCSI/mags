@extends('components.layout')

@section('title', 'Perfil')

@section('content')

    
    
        {{ Form::model($user, array('route' => array('dashboard.update', $user->id), 'method' => 'PUT' )) }}
    
        {{ Form::label('name', 'Nome') }}
        {{ Form::text('name', $user->name) }}
    </br>
    
        {{ Form::label('email', 'Email') }}
        {{ Form::text('email', $user->email) }}
    </br>

        {{ Form::label('cell', 'Celular') }}
            {{ Form::text('cell', $user->cell) }}
    </br>

        {{ Form::label('tel', 'Telefone') }}
            {{ Form::text('tel', $user->tel) }}
    </br>
    
        {{ Form::submit('Enviar') }}
    
        {{ Form::close() }}
        
@endsection