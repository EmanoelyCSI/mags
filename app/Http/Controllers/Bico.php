<?php

namespace App\Http\Controllers;

use App\Models\Bico;
use Illuminate\Http\Request;

class BombaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Listar todos as Bombas
        $bicos= Bico::orderBy('id', 'ASC')->get();
        //dd($bicos);
        return view('bico.index', ['bico' => $bicos]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Criar Bico
        return view('bico.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Armazenar Bicos

        $bico = new Bico;
        $bico->name     =      $request->name;
        $bico->bomba_id =      $request->bomba_id;
        $bico->save();
 
        return redirect()->route('bico.index')->with('message', 'Bico criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posto  $posto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         //Visualizar Bicos
         $bico = Bico::findOrFail($id);
         // dd($bico);
         return view('bico.show', ['bico' => $bico]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posto  $posto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Editar Bico
        $bico = Bico::findOrFail($id);
        return view('bico.edit', ['bico' => $bico]);
    
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
       // Armazenar Bicos

    $bico = Bico::findOrFail($id);
    $bico->name     =      $request->name;
    $bico->bomba_id =      $request->bomba_id;
    $bico->save();

    return redirect()->route('bico.index')->with('message', 'Bico editado com sucesso!');

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
