@extends('components.layout')

@section('title','Bicos')

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

    {{ Form::open(array('url' => '/bico/create')) }}
 
    {{ Form::label('name', 'Nome') }}
    {{ Form::text('name', null) }}
    <br/>
    {{ Form::label('bomba_id', 'Bomba') }}
    {{ Form::select('bomba_id', $bombas) }}

    {{-- Mudar de null para bomba_id --}}
    
    <br/>
 

    {{ Form::submit('Enviar') }}
 
    {{ Form::close() }}

    <a href="{{ URL::to('bico/') }}">Voltar</a>
    
@endsection