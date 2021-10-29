<?php

namespace App\Http\Controllers;

use App\Models\Contrato;
use App\Models\Posto;
use App\Models\Bomba;
use App\Models\Bico;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        /*
        De contrato estou chegando em bomba
        De bomba estou chegando em bico
        De bico estou chegando em leitura
        Mas não consigo chegar direto
        */

        $contrato = Contrato::findorFail(1);


        // dd($contratos->posto->bomba->bico->leitura);

        // dd($contrato->posto->bomba->name);
        //dd($contrato->posto->bomba->bico->leitura->leitura);
        //dd($contrato->posto->bomba);

        //funciona
        // $bomba = Bomba::findOrFail(1);
        // dd($bomba->bico);

        // //funciona
        // $bico = Bico::findOrFail(1);
        // dd($bico->leitura);


        /*
        //funciona
        foreach ($contrato->posto->bomba as $key => $value) {
            //dd($value->bico);
            foreach ($value->bico as $key => $value) {
                //echo($value->name);
                foreach ($value->leitura as $key => $value) {
                    echo($value->leitura . '<br>');
                }
            }
        }
        */


        // Listar contratos
        // $contratos = Contrato::orderBy('cnpj', 'ASC')->get();
        // return view('contrato.index', ['contratos' => $contratos]);
        //dd('teste');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Criar Contratos
        return view('contrato.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Armazenar Contratos
        $message = [
            'cnpj.required'            => 'O campo CNPJ é obrigatório!',
            'cnpj.min'                 => 'O campo CNPJ precisa ter no mínimo :min caracteres!',
            'name.required'            => 'O campo nome é obrigatório!',
            'name.min'                 => 'O campo nome precisa ter no mínimo :min caracteres!',
            'proprietario_id.required' => 'O campo Proprietário é obrigatório!',
            'email.required'           => 'O campo Email é obrigatório!', 
            'cell.required'            => 'O campo Celular é obrigatório!', 
            'cell.min'                 => 'O campo Celular precisa ter no mínimo :min caracteres!', 
        ];
 
        $validateData = $request->validate([
            'cnpj'            =>  'required|min:14', // o mínimo de 14 caracteres e o campo não pode ser vazio
            'name'            =>  'required|min:10', // o campo não pode ser vazio e ter o mínimo de 10 caracteres para criar o nome 
            'proprietario_id' =>  'required',        // o campo não pode ser vazio 
            'email'           =>  'required', 
            'cell'            =>  'required|min:9', 
         ], $message);

        $contrato = new Contrato;
        $contrato->cnpj             =  $request->cnpj;
        $contrato->name             =  $request->name;
        // $contrato->proprietario_id  =  $request->proprietario_id;
        $contrato->email            =  $request->email;
        $contrato->cell             =  $request->cell;
        $contrato->tel              =  $request->tel;
        $contrato->address          =  $request->address;
        $contrato->save();
 
        return redirect()->route('contrato.index')->with('message', 'Contrato criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Visualizar Contratos
        $contrato = Contrato::findOrFail($id);
        //  dd($contrato->posto_id);
        return view('contrato.show', ['contrato' => $contrato]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Editar Contrato
        $contrato = Contrato::findOrFail($id);
        return view('contrato.edit', ['contrato' => $contrato]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $message = [
            'cnpj.required'             => 'O campo CNPJ é obrigatório!',
            'cnpj.min'                  => 'O campo CNPJ precisa ter no mínimo :min caracteres!',
            'name.required'             => 'O campo nome é obrigatório!',
            'name.min'                  => 'O campo nome precisa ter no mínimo :min caracteres!',
            'proprietario_id.required'  => 'O campo Proprietário é obrigatório!',
            'email.required'            => 'O campo Email é obrigatório!', 
            'cell.required'             => 'O campo Celular é obrigatório!', 
            'cell.min'                  => 'O campo Celular precisa ter no mínimo :min caracteres!', 
        ];
 
        $validateData = $request->validate([
            'cnpj'                => 'required|min:14',   // o mínimo de 14 caracteres e o campo não pode ser vazio
            'name'                =>  'required|min:10',  // o campo não pode ser vazio e ter o mínimo de 10 caracteres para criar o nome 
            'proprietario_id'     =>  'required',         // o campo não pode ser vazio 
            'email'               =>  'required',             
            'cell'                =>  'required|min:9',        
         ], $message);

         $contrato = Contrato::findOrFail($id);
         $contrato->cnpj            =    $request->cnpj;
         $contrato->name            =    $request->name;
         $contrato->proprietario_id =    $request->proprietario_id;
         $contrato->email           =    $request->email;
         $contrato->cell            =    $request->cell;
         $contrato->tel             =    $request->tel;
         $contrato->address         =    $request->address;
         $contrato->save();
  
         return redirect()->route('contrato.index')->with('message', 'Contrato editado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Deletar contrato
        // dd('DESTROY');
    
 
        return redirect()->route('contrato.index')->with('message', 'Contrato excluído com sucesso!');
    }
}
