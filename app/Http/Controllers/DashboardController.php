<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Leitura;
use App\Models\Posto;
use DB;
use Carbon\Carbon;




class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->profile == 'gerente') {
            $leituras = Leitura::orderBy('updated_at', 'ASC')->get();
            $postos   = Posto::orderBy('updated_at', 'ASC')->get();
            return view('leitura.index', ['leitura' => $leituras, 'postos' => $postos]);
        }

        $leituras = Leitura::orderBy('updated_at', 'ASC')->get();
        $postos   = Posto::orderBy('updated_at', 'ASC')->get();
        return view('dashboard.index', ['leitura' => $leituras, 'postos' => $postos]);

    }


    public function relatorioMensal()
    {
        $ultimoMes     = Carbon::today()->subDays(30)->format('d-m-Y');
        $gnvDoMes      = Posto::where('updated_at','>', $ultimoMes)->count();
        $gnvPerdido    = Posto::where('updated_at','>', $ultimoMes)->count();
        $totalPostos   = Posto::count();

        $totalPostos = Posto::select(DB::raw('COUNT(postos.id) as postos'), DB::raw('SUM(quantidade) as quantidade'))->get();
        //contar quantos postos e somar o total de quantidade 
        //select count(postos.id), sum(quantidade) from postos; 


        //contar a quantidade de postos,turno e leituras e depois agrupar pelo id do posto
        /*select postos.id, count(turnos.id), count(leituras.id) from postos 
        inner join turnos on turnos.posto_id = postos.id
        inner join leituras on leituras.turno_id = turnos.id
        GROUP BY postos.id;
        */


        //contar postos e filtrar pelo mês
        //select count(postos.id) from postos where postos.created_at < '2021-11';


        // dd($totalPostos);
        return view('dashboard.relatorioMensal', ['totalPostos' => $totalPostos]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
