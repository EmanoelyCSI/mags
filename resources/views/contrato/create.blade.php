@extends('components.layout')

@section('title', 'Contratos')

@section('content')

    <!-- Conteúdo da página --> 
    <div id="conteudo" class="container p-0 my-4">

        {{ Form::open(array('url' => '/contrato/create')) }}

        <h4 class="bg-royal-blue text-magnolia fw-normal rounded p-2">Cadastrar Contrato</h4>
        
        <div class="d-flex my-1">
            <div id="box1" class="form-floating w-50 me-1">
                {{ Form::text('name',null, ['class' => 'form-control me-1', 'id'=> 'name', 'placeholder' => 'Nome Completo']) }}
                {{ Form::label('nome do completo', null, ['for'=>'name']) }}
            </div>
            <div id="box2" class="form-floating w-50">
                {{ Form::text('cnpj',null, ['class' => 'form-control ', 'id'=> 'cnpj', 'placeholder' => 'CNPJ'] ) }}
                {{ Form::label('CNPJ', null, ['for'=>'cnpj']) }}
            </div>
        </div>

        <div id="box3" class="form-floating my-1">
            {{ Form::text('email', null, ['class' => 'form-control', 'id'=> 'email', 'placeholder' => 'E-mail'] ) }}
            {{ Form::label('email', null, ['for'=>'email']) }}
        </div>

        <div class="d-flex my-1">
            <div id="box4" class="form-floating w-50 me-1">
                {{ Form::text('cell',null, ['class' => 'form-control me-1', 'id'=> 'cell','placeholder' => 'Celular']) }}
                {{ Form::label('celular', null, ['for'=>'cell']) }}
            </div>
            <div id="box5" class="form-floating w-50">
                {{ Form::text('tel',null, ['class' => 'form-control', 'id'=> 'tel' , 'placeholder' => 'Telefone']) }}
                {{ Form::label('Telefone', null, ['for'=>'tel']) }}
            </div>
        </div>

        <div id="box4" class="form-floating my-1">
            {{ Form::text('address',null,  ['class' => 'form-control', 'id'=> 'address' , 'placeholder' => 'Endereço'] ) }}
            {{ Form::label('Endereço', null, ['for'=>'address']) }}
        </div>

        {{ Form::button('Enviar <svg class="mx-2" width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.0823 0.245C12.6854 0.599573 12.6509 1.20882 13.0055 1.60591L19.6433 9.03619L0.963817 9.03619C0.431625 9.03619 0 9.46767 0 10C0 10.5322 0.431477 10.9638 0.963817 10.9638L19.6433 10.9638L13.0056 18.3941C12.651 18.791 12.6856 19.4003 13.0824 19.755C13.4794 20.1095 14.0887 20.0753 14.4433 19.6783L21.6551 11.6053C22.0639 11.1478 22.2682 10.5741 22.2682 10.0001C22.2682 9.42633 22.0639 8.85251 21.6553 8.39485L14.4433 0.321831C14.0885 -0.0752616 13.4792 -0.109573 13.0823 0.245Z" fill="#FCF7FF"/>
            </svg>
            ', ['type' => 'submit', 'class' => 'btn btn-royal-blue float-end my-2 col-3 fs-5'] )  }}
        
            {{ Form::close() }}
    </div>
@endsection
{{-- 
    <div id="progress" class="container-fluid container-lg">
        <div class="position-relative m-4">
            <div class="progress" style="height: 1px;">
            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
            <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">2</button>
            <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</button>
        </div>
    </div> --}}
