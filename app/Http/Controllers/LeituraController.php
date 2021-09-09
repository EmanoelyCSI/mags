<?php

namespace App\Http\Controllers;

use App\Models\Leitura;
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
        // Listar todos as Leituras
        $leituras= Leitura::orderBy('updated_at', 'ASC')->get();
        //dd($postos);
        return view('leitura.index', ['leitura' => $leituras]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Criar posto
        return view('leitura.create');

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
            'bomba.required' => 'O campo Bomba é obrigatório!',
            'bico.required' => 'O campo Bico é obrigatório!',
            'turno.required' => 'O campo Turno é obrigatório!', 
            'leitura.required' => 'O campo Leitura é obrigatório!', 
            'leitura.min' => 'O campo Leitura precisa ter no mínimo :min caracteres!', 
        ];
 
        $validateData = $request->validate([
            'bomba' =>  'required', //o campo não pode ser vazio
            'bico' =>  'required', //o campo não pode ser vazio 
            'turno' =>  'required', //o campo não pode ser vazio  
            'leitura' =>  'required|min:6' //o campo não pode ser vazio e deve ter no mínimo 6 caracteres  
         ], $message);

        $leitura = new Leitura;
        // $leitura->name =       $request->name;
        $leitura->bomba =      $request->bomba;
        $leitura->bico =       $request->bico;
        $leitura->turno =      $request->turno;
        $leitura->leitura =    $request->leitura;
        $leitura->save();
 
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
        return view('leitura.edit', ['leitura' => $leitura]);
    
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
        'bomba.required' => 'O campo Bomba é obrigatório!',
        'bico.required' => 'O campo Bico é obrigatório!',
        'turno.required' => 'O campo Turno é obrigatório!', 
        'leitura.required' => 'O campo Leitura é obrigatório!', 
        'leitura.min' => 'O campo Leitura precisa ter no mínimo :min caracteres!', 
    ];

    $validateData = $request->validate([
        'bomba' =>  'required', //o campo não pode ser vazio
        'bico' =>  'required', //o campo não pode ser vazio 
        'turno' =>  'required', //o campo não pode ser vazio  
        'leitura' =>  'required|min:6' //o campo não pode ser vazio e deve ter no mínimo 6 caracteres  
     ], $message);

    $leitura = Leitura::findOrFail($id);
    $leitura->bomba =      $request->bomba;
    $leitura->bico =       $request->bico;
    $leitura->turno =      $request->turno;
    $leitura->leitura =    $request->leitura;
    $leitura->save();

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
