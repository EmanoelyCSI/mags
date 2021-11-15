@extends('components.layoutcontato')

@section('title', 'Contato')

@section('content')

<div id="conteudo" class="container-lg space-bettheww">
    <h1 class="text-center m-2">Contatos</h1>
    <div id="form" class="container my-3">
            {{ Form::open(array('url' => '/concluirPedido')) }}
        
                <div  class="form-group">
                    {{ Form::label('nome', 'Digite seu nome:') }}
                    {{ Form::text('nome', null , ['class' => 'form-control', 'id'=> 'nome', 'placeholder' => 'Ex: Leandro Correia'] ) }}
                </div>
                <div  class="form-group">
                    {{ Form::label('CEP', 'CEP:') }}
                    {{ Form::text('CEP', null , ['class' => 'form-control', 'id'=> 'CEP'] ) }}
                </div>
                <div  class="form-group">
                    {{ Form::label('rua', 'Rua:') }}
                    {{ Form::text('rua', null , ['class' => 'form-control', 'id'=> 'rua', 'readonly' => true , 'placeholder' => 'Ex: Rua do alfaiate'] ) }}
                </div>

                <div class="form-group">
                    {{ Form::label('bairro', 'Bairro') }}
                    {{ Form::text('bairro', null , ['class' => 'form-control', 'id'=> 'bairro', 'readonly' => true , 'placeholder' => 'Ex: Barra da Tijuca'] ) }}
                </div>

                <div class="form-group">
                    {{ Form::label('Numero', 'Número:') }}
                    {{ Form::text('numero', null , ['class' => 'form-control', 'id'=> 'numero' , 'placeholder' => 'Ex: 07'] ) }}
                </div>
                <div class="form-group">
                    {{ Form::label('complemento_observacao', 'Complemento:') }}
                    {{ Form::text('complemento_observacao', null , ['class' => 'form-control', 'id'=> 'complemento_observacao' , 'placeholder' => 'Ex: Ao lado da sorveteria Kiboom'] ) }}
                </div>

                <div class="form-group">
                    {{ Form::label('telefone', 'Telefone:') }}
                    {{ Form::text('telefone', null , ['class' => 'form-control', 'id'=> 'telefone' , 'placeholder' => 'Ex: (21)97634-0934'] ) }}
                </div>

                <div class="form-group">
                    {{ Form::label('observacao', 'Digite uma observação:') }}
                    {{ Form::textarea('observacao', null , ['class' => 'form-control', 'id'=> 'observacao', 'style' =>'height: 100px', 'placeholder' => 'Ex: Pouco chocolate'] ) }}
                </div>
                <div class="form-group">
                    {{ Form::submit('Enviar' , ['class' => 'btn btn-royal-blue mt-3']) }}
                    {{ Form::close()  }}
                </div>
        </div>

        <div id="contact" class="d-flex">

        </div>
    </div>

@endsection
