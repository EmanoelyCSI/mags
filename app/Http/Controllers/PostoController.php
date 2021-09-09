<?php

namespace App\Http\Controllers;

use App\Models\Posto;
use Illuminate\Http\Request;

class PostoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Listar todos os postos
        $postos= Posto::orderBy('cnpj', 'ASC')->get();
        //dd($postos);
        return view('posto.index', ['posto' => $postos]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Criar posto
        return view('posto.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Armazenar Postos
        $message = [
            'cnpj.required' => 'O campo CNPJ é obrigatório!',
            'cnpj.min' => 'O campo CNPJ precisa ter no mínimo :min caracteres!',
            'name.required' => 'O campo nome é obrigatório!',
            'name.min' => 'O campo nome precisa ter no mínimo :min caracteres!',
            'email.required' => 'O campo Email é obrigatório!', 
            'cell.required' => 'O campo Celular é obrigatório!', 
            'cell.min' => 'O campo Celular precisa ter no mínimo :min caracteres!', 
        ];
 
        $validateData = $request->validate([
            'cnpj'      => 'required|min:14', // o mínimo de 14 caracteres e o campo não pode ser vazio
            'name' =>  'required|min:10', //o campo não pode ser vazio e ter o mínimo de 10 caracteres para criar o nome 
            'email' =>  'required', //o campo não pode ser vazio 
            'cell' =>  'required|min:9', //o campo não pode ser vazio
            'bomba' =>  'required', //o campo não pode ser vazio
            'bico' =>  'required', //o campo não pode ser vazio 
            'turno' =>  'required', //o campo não pode ser vazio  
            'cicloTurno' =>  'required' //o campo não pode ser vazio  
         ], $message);

        $posto = new Posto;
        $posto->cnpj =    $request->cnpj;
        $posto->name =    $request->name;
        $posto->email =   $request->email;
        $posto->cell =    $request->cell;
        $posto->tel =     $request->tel;
        $posto->address = $request->address;
        $posto->bomba =      $request->bomba;
        $posto->bico =       $request->bico;
        $posto->turno =      $request->turno;
        $posto->cicloTurno = $request->cicloTurno;
        $posto->save();
 
        return redirect()->route('posto.index')->with('message', 'Posto criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posto  $posto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         //Visualizar Postos
         $posto = Posto::findOrFail($id);
         // dd($posto);
         return view('posto.show', ['posto' => $posto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posto  $posto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Editar Posto
        $posto = Posto::findOrFail($id);
        return view('posto.edit', ['posto' => $posto]);
    
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
        //
        $message = [
            'cnpj.required' => 'O campo CNPJ é obrigatório!',
            'cnpj.min' => 'O campo CNPJ precisa ter no mínimo :min caracteres!',
            'name.required' => 'O campo nome é obrigatório!',
            'name.min' => 'O campo nome precisa ter no mínimo :min caracteres!',
            'email.required' => 'O campo Email é obrigatório!', 
            'cell.required' => 'O campo Celular é obrigatório!', 
            'cell.min' => 'O campo Celular precisa ter no mínimo :min caracteres!',
            'bomba.required' => 'O campo Bomba é obrigatório!',
            'bico.required' => 'O campo Bico é obrigatório!',
            'turno.required' => 'O campo Turno é obrigatório!',
            'cicloTurno.required' => 'O campo Ciclo do Turno é obrigatório!', 
        ];
 
        $validateData = $request->validate([
            'cnpj'      => 'required|min:14', // o mínimo de 14 caracteres e o campo não pode ser vazio
            'name' =>  'required|min:10', //o campo não pode ser vazio e ter o mínimo de 10 caracteres para criar o nome 
            'email' =>  'required', //o campo não pode ser vazio 
            'cell' =>  'required|min:9', //o campo não pode ser vazio e ter o mínimo de 9 caracteres
            'bomba' =>  'required', //o campo não pode ser vazio
            'bico' =>  'required', //o campo não pode ser vazio 
            'turno' =>  'required', //o campo não pode ser vazio  
            'cicloTurno' =>  'required' //o campo não pode ser vazio  
         ], $message);

        $posto = Posto::findOrFail($id);
        $posto->cnpj =       $request->cnpj;
        $posto->name =       $request->name;
        $posto->email =      $request->email;
        $posto->cell =       $request->cell;
        $posto->tel =        $request->tel;
        $posto->address =    $request->address;
        $posto->bomba =      $request->bomba;
        $posto->bico =       $request->bico;
        $posto->turno =      $request->turno;
        $posto->cicloTurno = $request->cicloTurno;
        $posto->save();
 
        return redirect()->route('posto.index')->with('message', 'Posto editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posto  $posto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Deletar Posto
        // dd('DESTROY');
        $posto = Posto::findOrFail($id);
        $posto->delete();
   
        return redirect()->route('posto.index')->with('message', 'Posto excluído com sucesso!');
    }
}
