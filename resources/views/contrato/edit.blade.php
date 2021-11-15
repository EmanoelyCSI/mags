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

    {{ Form::model($contrato, array('route' => array('contrato.update', $contrato->id), 'method' => 'PUT' )) }}
 
    {{ Form::label('cnpj', 'CNPJ') }}
    {{ Form::text('cnpj', $contrato->cnpj) }}
    <br/>
    {{ Form::label('name', 'Nome') }}
    {{ Form::text('name',  $contrato->name) }}
    <br/>
    {{ Form::label('proprietario_id', 'Proprietário') }}
    {{ Form::text('proprietario_id', $contrato->proprietario_id) }}
    <br/>
    {{ Form::label('email', 'Email') }}
    {{ Form::text('email',  $contrato->email) }}
    <br/>
    {{ Form::label('cell', 'Celular') }}
    {{ Form::text('cell', $contrato->cell) }}
    <br/>
    {{ Form::label('tel', 'Telefone') }}
    {{ Form::text('tel',  $contrato->tel) }}
    <br/>
    {{ Form::label('address', 'Endereço') }}
    {{ Form::text('address',  $contrato->address) }}
    <br/>
    {{ Form::submit('Enviar') }}
 
    {{ Form::close() }}

    @if (Session::has('message'))
        <div> {{ Session::get('message') }} </div>      
    @endif
    
    <a href="{{ URL::to('contrato/') }}">Voltar</a>

     <!-- Button trigger modal -->
     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
        </div>
    </div>
   

@endsection