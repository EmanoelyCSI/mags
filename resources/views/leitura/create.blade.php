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

    <div id="conteudo" class="container p-0">
        <div id="box-form" class="p-4">
            <h3 class="bg-royal-blue text-magnolia fw-normal rounded p-2">Lançar Leituras</h3>
            {{ Form::open(array('url' => '/leitura/create')) }}
                <div id="box" class="">
                    {{ Form::label('name', 'Nome', ['class' => 'form-label'] ) }}
                    {{ Form::text('name', null,  ['class' => 'form-control'] ) }}

                    {{ Form::label('turno_id', 'Turno',  ['class' => 'form-label'] ) }}
                    {{ Form::text('turno', null, ['class' => 'form-control'] ) }}
                </div>
           
                <div id="box" class="">
                    {{ Form::label('bomba_id', 'Bomba',  ['class' => 'form-label'] ) }}
                    {{ Form::text('bomba',null,  ['class' => 'form-control'] ) }}

                    {{ Form::label('bico_id', 'Bico',  ['class' => ''] ) }}
                    {{ Form::text('bico',null, ['class' => 'form-control'] ) }}
                </div>
         
                <div id="box" class="">
                    
                    {{ Form::label('leitura', 'Leitura', ['class' => 'form-label'] ) }}
                    {{ Form::text('leitura', null, ['class' => 'form-control'] ) }}

                    {{ Form::submit('Enviar', ['class' => 'btn btn-royal-blue']  ) }}
                </div>

        
            {{ Form::close() }}
        </div>
    </div>  
    <a href="{{ URL::to('leitura/') }}">Voltar</a>
@endsection