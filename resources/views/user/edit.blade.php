@extends('components.layout')

@section('title', 'Usuários')

@section('content')

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $errors)
                        <li> {{$errors}} </li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        {{ Form::model($user, array('route' => array('user.update', $user->id), 'method' => 'PUT' )) }}
    
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

@endsections