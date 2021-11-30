<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Leitura;
use App\Models\Posto;
use DB;
use Carbon\Carbon;
use App\Models\Turno;





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


    public function relatorioMensal($id)
    {
        $ultimoMes     = Carbon::today()->subDays(30)->format('d-m-Y');
        $gnvDoMes      = Posto::where('updated_at','>', $ultimoMes)->count();
        $gnvPerdido    = Posto::where('updated_at','>', $ultimoMes)->count();
        $totalPostos   = Posto::count();

        $postos     = Posto::findOrFail($id);
        $turnos     = Turno::findOrFail($id);
        $leituras   = Leitura::findOrFail($id);

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

        return view('dashboard.relatorioMensal', ['totalPostos' => $totalPostos, 'postos' => $postos, 'turnos' => $turnos, 'leituras' => $leituras]);
    }

    public function estoque()
    {
        $ultimoMes   = Carbon::today()->subMonth(30)->format('d-m-Y');
        $totalPostos = Posto::select(DB::raw('COUNT(postos.id) as postos'), DB::raw('SUM(quantidade) as quantidade'))->get();
        
        $dt = Carbon::today()->month;
        $subDt1 = Carbon::today()->subMonths(1)->locale('pt_br')->month;
        $subDt2 = Carbon::today()->subMonths(2)->locale('pt_br')->month;
        $subDt3 = Carbon::today()->subMonths(3)->locale('pt_br')->month;
        $subDt4 = Carbon::today()->subMonths(4)->locale('pt_br')->month;
        $subDt5 = Carbon::today()->subMonths(5)->locale('pt_br')->month;

        // dd($subDt2 );
        return view('dashboard.estoque', 
        ['totalPostos' => $totalPostos, 'ultimoMes' => $ultimoMes, 'dt' => $dt, 'subDt1' => $subDt1, 'subDt2' => $subDt2,'subDt3' => $subDt3,'subDt4' => $subDt4, 'subDt5' => $subDt5]);
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
