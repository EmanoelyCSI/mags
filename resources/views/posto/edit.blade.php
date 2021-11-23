@extends('components.layout')

@section('title', 'Postos')

@section('content')
    
    <div id="conteudo" class="container p-0 my-4">

        
        <h4 class="bg-royal-blue text-magnolia fw-normal rounded p-2">Atualizar Posto</h4>
        

        {{ Form::model($posto, array('route' => array('posto.update', $posto->id), 'method' => 'PUT' )) }}

        <div id="box1" class="d-flex my-1 ">

            {{ Form::label('cnpj', 'CNPJ') }}
            {{ Form::text('cnpj', $posto->cnpj, ['class' => 'form-control me-1', 'id'=> 'cnpj', 'placeholder' => 'CNPJ']) }}
            
            {{ Form::label('name', 'Nome') }}
            {{ Form::text('name',  $posto->name, ['class' => 'form-control me-1', 'id'=> 'cnpj', 'placeholder' => 'CNPJ']) }}
        </div>

        <div id="box2" class="d-flex my-1">
            {{ Form::label('email', 'Email') }}
            {{ Form::text('email',  $posto->email, ['class' => 'form-control', 'id'=> 'email', 'placeholder' => 'Ex: marcos.silva_contato@gmail.com']) }}
        </div>

        <div id="box3" class="d-flex my-1">
            {{ Form::label('cell', 'Celular') }}
            {{ Form::text('cell', $posto->cell, ['class' => 'form-control me-1', 'id'=> 'cel','placeholder' => 'Ex:2198745-8272']) }}
            
            {{ Form::label('tel', 'Telefone') }}
            {{ Form::text('tel',  $posto->tel, ['class' => 'form-control', 'id'=> 'tel' , 'placeholder' => 'Ex: 212545-8875']) }}
            
            
        <div id="box4" class="d-flex my-1">
            {{ Form::label('address', 'Endereço') }}
            {{ Form::text('address',  $posto->address, ['class' => 'form-control', 'id'=> 'address' , 'placeholder' => 'Ex: R. Maia de Lacerda, 36']) }}
        </div>

        <div id="box5" class="d-flex my-1">
            {{ Form::label('contrato_id', 'Contrato') }}
            {{ Form::select('contrato_id', $contratos, $posto->contrato->id) }}

            {{-- echo Form::select('size', ['L' => 'Large', 'S' => 'Small'], 'S'); --}}

            {{-- {{ Form::select('contrato_id', $contratos, $posto->contrato->id, ['class' => 'form-control', 'id'=> 'contrato-name' , 'placeholder' => 'Selecione o Contrato']) }} --}}


            {{ Form::label('gerente_id', 'Gerente') }}
            {{-- {{ Form::select('gerente_id', $posto->gerente_id, ['class' => 'form-control', 'id'=> 'gerente-name' , 'placeholder' => 'Selecione o Gerente']) }} --}}
            {{ Form::select('gerente_id', $users, $posto->gerente_id) }}
        </div>

        {{ Form::submit('Enviar',) }} <!-- 'class' => 'btn btn-royal-blue float-end my-2 col-3 fs-5' -->
        {{ Form::close() }}

        @if (Session::has('message'))
            <div> {{ Session::get('message') }} </div>      
        @endif
    </div>

    <a href="{{ URL::to('posto/') }}">Voltar</a>

@endsection


