<?php

namespace App\Http\Controllers;

use App\Models\Leitura;
use App\Models\Turno;
use App\Models\Posto;
use App\Models\Bico;
use App\Models\Bomba;


use Illuminate\Http\Request;

class LeituraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $leituras = Leitura::orderBy('updated_at', 'ASC')->get();
        return view('leitura.index', ['leitura' => $leituras]);

        /*$leitura = Leitura::findOrFail(1);
        dd($leitura->bico->bomba->posto->contrato->proprietario->email);  //Testando relacionamento laravel
        */
 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Criar posto
        $bombas  = Bomba::pluck('name', 'id');
        $bicos   = Bico::pluck('name', 'id');
        $turnos  = Turno::pluck('name', 'id');
        return view('leitura.create', ['bombas' => $bombas, 'bicos' =>$bicos, 'turnos' => $turnos ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

       
    {
        // Armazenar Leituras
        $message = [
            // 'bomba_id.required' => 'O campo Bomba é obrigatório!',
            'bico_id.required'  => 'O campo Bico é obrigatório!',
            'turno_id.required' => 'O campo Turno é obrigatório!', 
            'leitura.required'  => 'O campo Leitura é obrigatório!', 
            'leitura.min'       => 'O campo Leitura precisa ter no mínimo :min caracteres!', 
        ];
 
        $validateData = $request->validate([
            // 'bomba_id'  =>  'required', //o campo não pode ser vazio
            'bico_id'   =>  'required', //o campo não pode ser vazio 
            'turno_id'  =>  'required', //o campo não pode ser vazio  
            'leitura'   =>  'required|min:4' //o campo não pode ser vazio e deve ter no mínimo 6 caracteres  
         ], $message); 
        
        $leitura = new Leitura;
        // $leitura->name   =  $request->name;
        // $leitura->bomba_id  =  $request->bomba_id;
        $leitura->bico_id   =  $request->bico_id;
        $leitura->turno_id  =  $request->turno_id;
        $leitura->leitura   =  $request->leitura;
        $leitura->save();

        $posto = Posto::findOrFail($leitura->bico->bomba->posto->id);
        $posto->quantidade = $posto->quantidade - $leitura->leitura;
        $posto->save();
        
        return redirect()->route('leitura.index')->with('message', 'Leitura criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posto  $posto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         //Visualizar Leituras
         $leitura = Leitura::findOrFail($id);
         // dd($posto);
         return view('leitura.show', ['leitura' => $leitura]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posto  $posto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Editar Leitura
        $leitura = Leitura::findOrFail($id);
        
        $bombas  = Bomba::pluck('name', 'id');
        $bicos   = Bico::pluck('name', 'id');
        $turnos  = Turno::pluck('name', 'id');
        return view('leitura.edit', ['bombas' => $bombas, 'bicos' =>$bicos, 'turnos' => $turnos ]);

    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posto  $posto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // Armazenar Leituras
       $message = [
        'bomba_id.required' => 'O campo Bomba é obrigatório!',
        'bico_id.required'  => 'O campo Bico é obrigatório!',
        'turno_id.required' => 'O campo Turno é obrigatório!', 
        'leitura.required'  => 'O campo Leitura é obrigatório!', 
        'leitura.min'       => 'O campo Leitura precisa ter no mínimo :min caracteres!', 
    ];

    $validateData = $request->validate([
        'bomba_id'  =>  'required', //o campo não pode ser vazio
        'bico_id'   =>  'required', //o campo não pode ser vazio 
        'turno_id'  =>  'required', //o campo não pode ser vazio  
        'leitura'   =>  'required|min:4' //o campo não pode ser vazio e deve ter no mínimo 6 caracteres  
     ], $message);

    $leitura = Leitura::findOrFail($id);
    $leitura->bomba_id  =   $request->bomba_id;
    $leitura->bico_id   =   $request->bico_id;
    $leitura->turno_id  =   $request->turno_id;
    $leitura->leitura   =   $request->leitura;
    $leitura->save();

    $posto = Posto::findOrFail($leitura->bico->bomba->posto->id);
    $posto->quantidade = $posto->quantidade - $leitura->leitura;
    $posto->save();

    return redirect()->route('leitura.index')->with('message', 'Leitura editada com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posto  $posto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
