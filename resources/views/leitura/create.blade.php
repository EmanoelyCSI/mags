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

    <div id="conteudo" class="d-flex justify-content-center p-0">
        <div id="box-form" class="d-flex w-25 p-4 border border-2 rounded-3 border-silver-send flex-column">
            {{ Form::open(array('url' => '/leitura/create')) }}
        
            {{-- {{ Form::label('name', 'Nome') }} --}}
            {{-- {{ Form::text('name', null) }} --}}
            <br/>
            {{ Form::label('bomba_id', 'Bomba',  ['class' => 'form-label'] ) }}
            {{ Form::text('bomba',null,  ['class' => 'form-control'] ) }}
            <br/>

            {{ Form::label('bico_id', 'Bico',  ['class' => ''] ) }}
            {{ Form::text('bico',null, ['class' => 'form-control'] ) }}
            <br/>

            {{ Form::label('turno_id', 'Turno',  ['class' => 'form-label'] ) }}
            {{ Form::text('turno', null, ['class' => 'form-control'] ) }}
            <br/>

            {{ Form::label('leitura', 'Leitura', ['class' => 'form-label'] ) }}
            {{ Form::text('leitura', null, ['class' => 'form-control'] ) }}
            <br/>

            {{ Form::submit('Enviar', ['class' => 'btn btn-navy-blue']  ) }}
        
            {{ Form::close() }}
        </div>
    </div>  
    <a href="{{ URL::to('leitura/') }}">Voltar</a>
@endsection