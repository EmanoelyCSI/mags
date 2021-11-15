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

    {{ Form::open(array('url' => '/bomba/create')) }}
 
    {{ Form::label('name', 'Nome') }}
    {{ Form::text('name', null) }}
    <br/>
    {{ Form::label('modelo', 'Modelo') }}
    {{ Form::text('modelo', null) }}
    <br/>
    {{ Form::label('posto_id', 'Posto') }}
    {{ Form::text('posto_id', null) }}
    <br/>
    {{-- Mudar para posto_id --}}

    {{ Form::submit('Enviar') }}
 
    {{ Form::close() }}

    <a href="{{ URL::to('bomba/') }}">Voltar</a>
    
@endsection