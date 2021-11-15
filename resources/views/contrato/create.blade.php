@extends('components.layout')

@section('title', 'Contratos')

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

    <a href="{{ URL::to('contrato/') }}">Voltar</a>


    <div id="form-contrato-create" class="container-fluid container-lg">

    {{ Form::open(array('url' => '/contrato/create')) }}

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Nome Completo" aria-label="Nome" aria-describedby="basic-addon1">
            <div id="basic-addon3" aria-describedby="basic-addon3" class="form-control">
                {{ Form::label('cnpj', 'CNPJ') }}
                {{ Form::text('cnpj', null) }}
            </div>

            {{-- <input type="text" class="form-control" placeholder="CNPJ" id="basic-addon3" aria-describedby="basic-addon3"> --}}
        </div>

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Celular" aria-label="cell">
            <input type="text" class="form-control" placeholder="Telefone" aria-label="tel">
        </div>
        
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Email" aria-label="email" aria-describedby="basic-addon2">
            <span class="input-group-text" id="basic-addon2">@exemplo.com</span>
        </div>
        
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Endereço" aria-label="Endereço">
        </div>
        
    </div>

    <!-- {{ Form::label('cnpj', 'CNPJ') }}
    {{ Form::text('cnpj', null) }}
    <br/>
    {{ Form::label('name', 'Nome') }}
    {{ Form::text('name', null) }}
    <br/>
    {{ Form::label('proprietario_id', 'Proprietário') }}
    {{ Form::text('proprietario_id', null) }}
    <br/>
    {{ Form::label('email', 'Email') }}
    {{ Form::text('email', null) }}
    <br/>
    {{ Form::label('cell', 'Celular') }}
    {{ Form::text('cell', null) }}
    <br/>
    {{ Form::label('tel', 'Telefone') }}
    {{ Form::text('tel', null) }}
    <br/>
    {{ Form::label('address', 'Endereço') }}
    {{ Form::text('address', null) }}
    <br/> 

    {{ Form::submit('Enviar') }} -->
 
    {{ Form::close() }}

    <div id="progress" class="container-fluid container-lg">
        <div class="position-relative m-4">
            <div class="progress" style="height: 1px;">
            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
            <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">2</button>
            <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</button>
        </div>
    </div>

@endsection