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


    {{ Form::open(array('url' => '/leitura/create')) }}
 
    {{-- {{ Form::label('name', 'Nome') }} --}}
    {{-- {{ Form::text('name', null) }} --}}
    <br/>
    {{ Form::label('bomba_id', 'Bomba') }}
    {{ Form::select('bomba',$leitura->bomba) }}
    <br/>

    {{ Form::label('bico_id', 'Bico') }}
    {{ Form::text('bico',null ) }}
    <br/>

    {{ Form::label('turno_id', 'Turno') }}
    {{ Form::text('turno', null ) }}
    <br/>

    {{ Form::label('leitura', 'Leitura') }}
    {{ Form::text('leitura', null ) }}
    <br/>

    {{ Form::submit('Enviar') }}
 
    {{ Form::close() }}

    <a href="{{ URL::to('leitura/') }}">Voltar</a>
    
@endsection