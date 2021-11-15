@extends('components.layout')

@section('title', 'Bombas')

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

    {{ Form::model($bomba, array('route' => array('bomba.update', $bomba->id), 'method' => 'PUT' )) }}
 
    {{ Form::label('name', 'Nome') }}
    {{ Form::text('name', $bomba->name) }}
    <br/>
    {{ Form::label('modelo', 'Modelo') }}
    {{ Form::text('modelo', $bomba->modelo) }}
    <br/>
    {{ Form::label('posto_id', 'Posto') }}
    {{ Form::text('posto_id', $bomba->posto_id) }}
    <br/>

    {{ Form::submit('Enviar') }}
 
    {{ Form::close() }}

    @if (Session::has('message'))
        <div> {{ Session::get('message') }} </div>      
    @endif
    
    <a href="{{ URL::to('bomba/') }}">Voltar</a>

@endsection