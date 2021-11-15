@extends('components.layout')

@section('title', 'Leituras')

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

    {{ Form::model($leitura, array('route' => array('leitura.update', $leitura->id), 'method' => 'PUT' )) }}
 
    {{-- {{ Form::label('name', 'Nome') }} --}}
    {{-- {{ Form::text('name', $leitura->name) }} --}}
    <br/>
    {{ Form::label('bomba_id', 'Bomba') }}
    {{ Form::select('bomba', $leitura->bomba) }}

    <br/>
    {{ Form::label('bico_id', 'Bico') }}
    {{ Form::select('bico',$leitura->bico) }}
    <br/>
    {{ Form::label('turno_id', 'Turno') }}
    {{ Form::select('turno', $leitura->turno) }}
    <br/>
    {{ Form::label('leitura', 'Leitura') }}
    {{ Form::text('leitura',  null) }}
    <br/>

    {{ Form::submit('Enviar') }}
 
    {{ Form::close() }}

    @if (Session::has('message'))
        <div> {{ Session::get('message') }} </div>      
    @endif
    
    <a href="{{ URL::to('leitura/') }}">Voltar</a>

@endsection