@extends('components.layout')

@section('title', 'Postos')

@section('content')

        <h2>Visualizar</h2>
    <ul>
        <li>ID:                   {{ $posto->id }}                  </li>
        <li>CNPJ:                 {{ $posto->cnpj }}                </li>
        <li>Nome:                 {{ $posto->name }}                </li>
        <li>Contrato - CNPJ:      {{ $posto->contrato->cnpj }}      </li>
        <li>Contrato - Nome:      {{ $posto->contrato->name }}      </li>
        <li>Contrato - ID:        {{ $posto->contrato->id }}        </li>
        <li>Email:                {{ $posto->email }}               </li>
        <li>Celular:              {{ $posto->cell }}                </li>
        <li>Telefone:             {{ $posto->tel }}                 </li>
        <li>Endereço:             {{ $posto->address }}             </li>
        
        <li>Bomba:
        @foreach ($posto->bomba as $value)
            {{ $value->name }}

            <li>- Bico:
            @foreach ($value->bico as $value2 )
                {{ $value2->name }}
            @endforeach
            </li>
        @endforeach
        </li>


        {{-- <li>Bomba - Modelo:       {{ $posto->bomba->modelo}}        </li>
        <li>Bomba - ID:           {{ $posto->bomba->id}}            </li> --}}
        {{-- <li>Bico:                 {{ $posto->bico}}                 </li> --}}
        {{-- <li>Quantidade de Turnos: {{ $posto->turno  }}              </li> --}}
        <li>Ciclo do Turno:       {{ $posto->cicloTurno }}          </li>
        <li>Criação:              {{ Carbon\Carbon::parse($posto->create_at)->format('d/m/Y H:i') }} </li>
        <li>Última modificação:   {{ Carbon\Carbon::parse($posto->update_at)->format('d/m/Y H:i') }} </li>
    </ul>
    
    <a href="{{ URL::to('posto/') }}">Voltar</a>

@endsection