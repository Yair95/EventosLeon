<?php

namespace App\Http\Controllers;

use App\forecasts;
use App\Event;
use DB;
use Illuminate\Http\Request;

class ForecastsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //2018
        $enero2018 = DB::table('events')
            ->whereMonth('date_start', '1')
            ->whereYear('date_start', '2018')
            ->get()
            ->count();
        $febrero2018 = DB::table('events')
            ->whereMonth('date_start', '2')
            ->whereYear('date_start', '2018')
            ->get()
            ->count();
        $marzo2018 = DB::table('events')
            ->whereMonth('date_start', '3')
            ->whereYear('date_start', '2018')
            ->get()
            ->count();
        $abril2018 = DB::table('events')
            ->whereMonth('date_start', '4')
            ->whereYear('date_start', '2018')
            ->get()
            ->count();
        $mayo2018 = DB::table('events')
            ->whereMonth('date_start', '5')
            ->whereYear('date_start', '2018')
            ->get()
            ->count();
        $junio2018 = DB::table('events')
            ->whereMonth('date_start', '6')
            ->whereYear('date_start', '2018')
            ->get()
            ->count();
        $julio2018 = DB::table('events')
            ->whereMonth('date_start', '7')
            ->whereYear('date_start', '2018')
            ->get()
            ->count();
        $agosto2018 = DB::table('events')
            ->whereMonth('date_start', '8')
            ->whereYear('date_start', '2018')
            ->get()
            ->count();
        $septiembre2018 = DB::table('events')
            ->whereMonth('date_start', '9')
            ->whereYear('date_start', '2018')
            ->get()
            ->count();
        $octubre2018 = DB::table('events')
            ->whereMonth('date_start', '10')
            ->whereYear('date_start', '2018')
            ->get()
            ->count();
        $noviembre2018 = DB::table('events')
            ->whereMonth('date_start', '11')
            ->whereYear('date_start', '2018')
            ->get()
            ->count();
        $diciembre2018 = DB::table('events')
            ->whereMonth('date_start', '12')
            ->whereYear('date_start', '2018')
            ->get()
            ->count();

        //2019
        $enero2019 = DB::table('events')
            ->whereMonth('date_start', '1')
            ->whereYear('date_start', '2019')
            ->get()
            ->count();
        $febrero2019 = DB::table('events')
            ->whereMonth('date_start', '2')
            ->whereYear('date_start', '2019')
            ->get()
            ->count();
        $marzo2019 = DB::table('events')
            ->whereMonth('date_start', '3')
            ->whereYear('date_start', '2019')
            ->get()
            ->count();
        $abril2019 = DB::table('events')
            ->whereMonth('date_start', '4')
            ->whereYear('date_start', '2019')
            ->get()
            ->count();
        $mayo2019 = DB::table('events')
            ->whereMonth('date_start', '5')
            ->whereYear('date_start', '2019')
            ->get()
            ->count();
        $junio2019 = DB::table('events')
            ->whereMonth('date_start', '6')
            ->whereYear('date_start', '2019')
            ->get()
            ->count();
        $julio2019 = DB::table('events')
            ->whereMonth('date_start', '7')
            ->whereYear('date_start', '2019')
            ->get()
            ->count();
        $agosto2019 = DB::table('events')
            ->whereMonth('date_start', '8')
            ->whereYear('date_start', '2019')
            ->get()
            ->count();
        $septiembre2019 = DB::table('events')
            ->whereMonth('date_start', '9')
            ->whereYear('date_start', '2019')
            ->get()
            ->count();
        $octubre2019 = DB::table('events')
            ->whereMonth('date_start', '10')
            ->whereYear('date_start', '2019')
            ->get()
            ->count();
        $noviembre2019 = DB::table('events')
            ->whereMonth('date_start', '11')
            ->whereYear('date_start', '2019')
            ->get()
            ->count();
        $diciembre2019 = DB::table('events')
            ->whereMonth('date_start', '12')
            ->whereYear('date_start', '2019')
            ->get()
            ->count();

        $total = Event::get()->count();
        $promedio = $total/24;
        $promedio_enero = ($enero2018 + $enero2019)/2;
        $promedio_febrero = ($febrero2018 + $febrero2019)/2;
        $promedio_marzo = ($marzo2018 + $marzo2019)/2;
        $promedio_abril = ($abril2018 + $abril2019)/2;
        $promedio_mayo = ($mayo2018 + $mayo2019)/2;
        $promedio_junio = ($junio2018 + $junio2019)/2;
        $promedio_julio = ($julio2018 + $julio2019)/2;
        $promedio_agosto = ($agosto2018 + $agosto2019)/2;
        $promedio_septiembre = ($septiembre2018 + $septiembre2019)/2;
        $promedio_octubre = ($octubre2018 + $octubre2019)/2;
        $promedio_noviembre = ($noviembre2018 + $noviembre2019)/2;
        $promedio_diciembre = ($diciembre2018 + $diciembre2019)/2;

        $factor_estacional_enero = $promedio_enero / $promedio;
        $factor_estacional_febrero = $promedio_febrero / $promedio;
        $factor_estacional_marzo = $promedio_marzo / $promedio;
        $factor_estacional_abril = $promedio_abril / $promedio;
        $factor_estacional_mayo = $promedio_mayo / $promedio;
        $factor_estacional_junio = $promedio_junio / $promedio;
        $factor_estacional_julio = $promedio_julio / $promedio;
        $factor_estacional_agosto = $promedio_agosto / $promedio;
        $factor_estacional_septiembre = $promedio_septiembre / $promedio;
        $factor_estacional_octubre = $promedio_octubre / $promedio;
        $factor_estacional_noviembre = $promedio_noviembre / $promedio;
        $factor_estacional_diciembre = $promedio_diciembre / $promedio;

        $venta_sin_factor_estacional_enero2018 = 0;
        $venta_sin_factor_estacional_enero2019 = 0;
        $venta_sin_factor_estacional_febrero2019 = 0;
        $venta_sin_factor_estacional_febrero2018 = 0;
        $venta_sin_factor_estacional_marzo2019 = 0;
        $venta_sin_factor_estacional_marzo2018 = 0;
        $venta_sin_factor_estacional_abril2019 = 0;
        $venta_sin_factor_estacional_abril2018 = 0;
        $venta_sin_factor_estacional_mayo2019 = 0;
        $venta_sin_factor_estacional_mayo2018 = 0;
        $venta_sin_factor_estacional_junio2019 = 0;
        $venta_sin_factor_estacional_junio2018 = 0;
        $venta_sin_factor_estacional_julio2019 = 0;
        $venta_sin_factor_estacional_julio2018 = 0;
        $venta_sin_factor_estacional_agosto2019 = 0;
        $venta_sin_factor_estacional_agosto2018 = 0;
        $venta_sin_factor_estacional_septiembre2019 = 0;
        $venta_sin_factor_estacional_septiembre2018 = 0;
        $venta_sin_factor_estacional_octubre2019 = 0;
        $venta_sin_factor_estacional_octubre2018 = 0;
        $venta_sin_factor_estacional_noviembre2019 = 0;
        $venta_sin_factor_estacional_noviembre2018 = 0;
        $venta_sin_factor_estacional_diciembre2019 = 0;
        $venta_sin_factor_estacional_diciembre2018 = 0;
        
        if($enero2018 != 0)
            $venta_sin_factor_estacional_enero2018 = $enero2018 / $factor_estacional_enero;
        if($enero2019 != 0)
            $venta_sin_factor_estacional_enero2019 = $enero2019 / $factor_estacional_enero;
        if($febrero2018 != 0)
            $venta_sin_factor_estacional_febrero2018 = $febrero2018 / $factor_estacional_febrero;
        if($febrero2019 != 0)
            $venta_sin_factor_estacional_febrero2019 = $febrero2019 / $factor_estacional_febrero;
        if($marzo2018 != 0)
            $venta_sin_factor_estacional_marzo2018 = $marzo2018 / $factor_estacional_marzo;
        if($marzo2019 != 0)
            $venta_sin_factor_estacional_marzo2019 = $marzo2019 / $factor_estacional_marzo;
        if($abril2018 != 0)
            $venta_sin_factor_estacional_abril2018 = $abril2018 / $factor_estacional_abril;
        if($abril2019 != 0)
            $venta_sin_factor_estacional_abril2019 = $abril2019 / $factor_estacional_abril;
        if($mayo2018 != 0)
            $venta_sin_factor_estacional_mayo2018 = $mayo2018 / $factor_estacional_mayo;
        if($mayo2019 != 0)
            $venta_sin_factor_estacional_mayo2019 = $mayo2019 / $factor_estacional_mayo;
        if($junio2018 != 0)
            $venta_sin_factor_estacional_junio2018 = $junio2018 / $factor_estacional_junio;
        if($junio2019 != 0)
            $venta_sin_factor_estacional_junio2019 = $junio2019 / $factor_estacional_junio;
        if($julio2018 != 0)
            $venta_sin_factor_estacional_julio2018 = $julio2018 / $factor_estacional_julio;
        if($julio2019 != 0)
            $venta_sin_factor_estacional_julio2019 = $julio2019 / $factor_estacional_julio;
        if($agosto2018 != 0)
            $venta_sin_factor_estacional_agosto2018 = $agosto2018 / $factor_estacional_agosto;
        if($agosto2019 != 0)
            $venta_sin_factor_estacional_agosto2019 = $agosto2019 / $factor_estacional_agosto;
        if($septiembre2018 != 0)
            $venta_sin_factor_estacional_septiembre2018 = $septiembre2018 / $factor_estacional_septiembre;
        if($septiembre2019 != 0)
            $venta_sin_factor_estacional_septiembre2019 = $septiembre2019 / $factor_estacional_septiembre;
        if($octubre2018 != 0)
            $venta_sin_factor_estacional_octubre2018 = $octubre2018 / $factor_estacional_octubre;
        if($octubre2019 != 0)
            $venta_sin_factor_estacional_octubre2019 = $octubre2019 / $factor_estacional_octubre;
        if($noviembre2018 != 0)
            $venta_sin_factor_estacional_noviembre2018 = $noviembre2018 / $factor_estacional_noviembre;
        if($noviembre2019 != 0)
            $venta_sin_factor_estacional_noviembre2019 = $noviembre2019 / $factor_estacional_noviembre;
        if($diciembre2018 != 0)
            $venta_sin_factor_estacional_diciembre2018 = $diciembre2018 / $factor_estacional_diciembre;
        if($diciembre2019 != 0)
            $venta_sin_factor_estacional_diciembre2019 = $diciembre2019 / $factor_estacional_diciembre;
        
        $total_x = 300;
        
        $total_y = $venta_sin_factor_estacional_enero2018 + $venta_sin_factor_estacional_enero2019 + $venta_sin_factor_estacional_febrero2018 +
        $venta_sin_factor_estacional_febrero2019 + $venta_sin_factor_estacional_marzo2018 + $venta_sin_factor_estacional_marzo2019 + $venta_sin_factor_estacional_abril2018 +
        $venta_sin_factor_estacional_abril2019 + $venta_sin_factor_estacional_mayo2018 + $venta_sin_factor_estacional_mayo2019 + $venta_sin_factor_estacional_junio2018 +
        $venta_sin_factor_estacional_junio2019 + $venta_sin_factor_estacional_julio2018 + $venta_sin_factor_estacional_julio2019 + $venta_sin_factor_estacional_agosto2018 +
        $venta_sin_factor_estacional_agosto2019 + $venta_sin_factor_estacional_septiembre2018 + $venta_sin_factor_estacional_septiembre2019 + $venta_sin_factor_estacional_octubre2018 + 
        $venta_sin_factor_estacional_octubre2019 + $venta_sin_factor_estacional_noviembre2018 + $venta_sin_factor_estacional_noviembre2019 + $venta_sin_factor_estacional_diciembre2018 +
        $venta_sin_factor_estacional_diciembre2019; 
         
        $promedio_x = $total_x / 24;
        $promedio_y = $total_y / 24;
        
        $total_xy = 0;
        $xy = $venta_sin_factor_estacional_enero2018 * 1;
        $total_xy += $xy;
        $xy = $venta_sin_factor_estacional_febrero2018 * 2;
        $total_xy += $xy;
        $xy = $venta_sin_factor_estacional_marzo2018 * 3;
        $total_xy += $xy;
        $xy = $venta_sin_factor_estacional_abril2018 * 4;
        $total_xy += $xy;
        $xy = $venta_sin_factor_estacional_mayo2018 * 5;
        $total_xy += $xy;
        $xy = $venta_sin_factor_estacional_junio2018 * 6;
        $total_xy += $xy;
        $xy = $venta_sin_factor_estacional_julio2018 * 7;
        $total_xy += $xy;
        $xy = $venta_sin_factor_estacional_agosto2018 * 8;
        $total_xy += $xy;
        $xy = $venta_sin_factor_estacional_septiembre2018 * 9;
        $total_xy += $xy;
        $xy = $venta_sin_factor_estacional_octubre2018 * 10;
        $total_xy += $xy;
        $xy = $venta_sin_factor_estacional_noviembre2018 * 11;
        $total_xy += $xy;
        $xy = $venta_sin_factor_estacional_diciembre2018 * 12;
        $total_xy += $xy;
        $xy = $venta_sin_factor_estacional_enero2019 * 13;
        $total_xy += $xy;
        $xy = $venta_sin_factor_estacional_febrero2019 * 14;
        $total_xy += $xy;
        $xy = $venta_sin_factor_estacional_marzo2019 * 15;
        $total_xy += $xy;
        $xy = $venta_sin_factor_estacional_abril2019 * 16;
        $total_xy += $xy;
        $xy = $venta_sin_factor_estacional_mayo2019 * 17;
        $total_xy += $xy;
        $xy = $venta_sin_factor_estacional_junio2019 * 18;
        $total_xy += $xy;
        $xy = $venta_sin_factor_estacional_julio2019 * 19;
        $total_xy += $xy;
        $xy = $venta_sin_factor_estacional_agosto2019 * 20;
        $total_xy += $xy;
        $xy = $venta_sin_factor_estacional_septiembre2019 * 21;
        $total_xy += $xy;
        $xy = $venta_sin_factor_estacional_octubre2019 * 22;
        $total_xy += $xy;
        $xy = $venta_sin_factor_estacional_noviembre2019 * 23;
        $total_xy += $xy;
        $xy = $venta_sin_factor_estacional_diciembre2019 * 24;
        $total_xy += $xy;

        $total_x2 = 0;
        $x2_enero2018 = 1*1;
        $total_x2 += $x2_enero2018;
        $x2_febrero2018 = 2*2;
        $total_x2 += $x2_febrero2018;
        $x2_marzo2018 = 3*3;
        $total_x2 += $x2_marzo2018;
        $x2_abril2018 = 4*4;
        $total_x2 += $x2_abril2018;
        $x2_mayo2018 = 5*5;
        $total_x2 += $x2_mayo2018;
        $x2_junio2018 = 6*6;
        $total_x2 += $x2_junio2018;
        $x2_julio2018 = 7*7;
        $total_x2 += $x2_julio2018;
        $x2_agosto2018 = 8*8;
        $total_x2 += $x2_agosto2018;
        $x2_septiembre2018 = 9*9;
        $total_x2 += $x2_septiembre2018;
        $x2_octubre2018 = 10*10;
        $total_x2 += $x2_octubre2018;
        $x2_noviembre2018 = 11*11;
        $total_x2 += $x2_noviembre2018;
        $x2_diciembre2018 = 12*12;
        $total_x2 += $x2_diciembre2018;
        $x2_enero2019 = 13*13;
        $total_x2 += $x2_enero2019;
        $x2_febrero2019 = 14*14;
        $total_x2 += $x2_febrero2019;
        $x2_marzo2019 = 15*15;
        $total_x2 += $x2_marzo2019;
        $x2_abril2019 = 16*16;
        $total_x2 += $x2_abril2019;
        $x2_mayo2019 = 17*17;
        $total_x2 += $x2_mayo2019;
        $x2_junio2019 = 18*18;
        $total_x2 += $x2_junio2019;
        $x2_julio2019 = 19*19;
        $total_x2 += $x2_julio2019;
        $x2_agosto2019 = 20*20;
        $total_x2 += $x2_agosto2019;
        $x2_septiembre2019 = 21*21;
        $total_x2 += $x2_septiembre2019;
        $x2_octubre2019 = 22*22;
        $total_x2 += $x2_octubre2019;
        $x2_noviembre2019 = 23*23;
        $total_x2 += $x2_noviembre2019;
        $x2_diciembre2019 = 24*24;
        $total_x2 += $x2_diciembre2019;
        
        $a = (($total_y * $total_x2) - ($total_x * $total_xy)) / ((24 * $total_x2)-$total_x*$total_x);

        $b = ((24*$total_xy)-($total_x*$total_y))/(24*$total_x2-($total_x*$total_x));
        
        //Pronostico 2020:
        $pronostico_enero2020 = $a + $b * 25;
        $pronostico_febrero2020 = $a + $b * 26;
        $pronostico_marzo2020 = $a + $b * 27;
        $pronostico_abril2020 = $a + $b * 28;
        $pronostico_mayo2020 = $a + $b * 29;
        $pronostico_junio2020 = $a + $b * 30;
        $pronostico_julio2020 = $a + $b * 31;
        $pronostico_agosto2020 = $a + $b * 32;
        $pronostico_septiembre2020 = $a + $b * 33;
        $pronostico_octubre2020 = $a + $b * 34;
        $pronostico_noviembre2020 = $a + $b * 35;
        $pronostico_diciembre2020 = $a + $b * 36;

        $demanda_enero2020 = $pronostico_enero2020 * $factor_estacional_enero;
        $demanda_febrero2020 = $pronostico_febrero2020 * $factor_estacional_febrero;
        $demanda_marzo2020 = $pronostico_marzo2020 * $factor_estacional_marzo;
        $demanda_abril2020 = $pronostico_abril2020 * $factor_estacional_abril;
        $demanda_mayo2020 = $pronostico_mayo2020 * $factor_estacional_mayo;
        $demanda_junio2020 = $pronostico_junio2020 * $factor_estacional_junio;
        $demanda_julio2020 = $pronostico_julio2020 * $factor_estacional_julio;
        $demanda_agosto2020 = $pronostico_agosto2020 * $factor_estacional_agosto;
        $demanda_septiembre2020 = $pronostico_septiembre2020 * $factor_estacional_septiembre;
        $demanda_octubre2020 = $pronostico_octubre2020 * $factor_estacional_octubre;
        $demanda_noviembre2020 = $pronostico_noviembre2020 * $factor_estacional_noviembre;
        $demanda_diciembre2020 = $pronostico_diciembre2020 * $factor_estacional_diciembre;
        //dd($demanda_noviembre2020);

        return view('forecast.forecast')->with('enero2018',$enero2018)->with('enero2019',$enero2019)->with('demanda_enero2020',$demanda_enero2020)
        ->with('febrero2018',$febrero2018)->with('febrero2019',$febrero2019)->with('demanda_febrero2020',$demanda_febrero2020)
        ->with('marzo2018',$marzo2018)->with('marzo2019',$marzo2019)->with('demanda_marzo2020',$demanda_marzo2020)
        ->with('abril2018',$abril2018)->with('abril2019',$abril2019)->with('demanda_abril2020',$demanda_abril2020)
        ->with('mayo2018',$mayo2018)->with('mayo2019',$mayo2019)->with('demanda_diciembre2020',$demanda_diciembre2020)
        ->with('junio2018',$junio2018)->with('junio2019',$junio2019)->with('demanda_mayo2020',$demanda_mayo2020)
        ->with('julio2018',$julio2018)->with('julio2019',$julio2019)->with('demanda_junio2020',$demanda_junio2020)
        ->with('agosto2018',$agosto2018)->with('agosto2019',$agosto2019)->with('demanda_julio2020',$demanda_julio2020)
        ->with('septiembre2018',$septiembre2018)->with('septiembre2019',$septiembre2019)->with('demanda_agosto2020',$demanda_agosto2020)
        ->with('octubre2018',$octubre2018)->with('octubre2019',$octubre2019)->with('demanda_septiembre2020',$demanda_septiembre2020)
        ->with('noviembre2018',$noviembre2018)->with('noviembre2019',$noviembre2019)->with('demanda_octubre2020',$demanda_octubre2020)
        ->with('diciembre2018',$diciembre2018)->with('diciembre2019',$diciembre2019)->with('demanda_noviembre2020',$demanda_noviembre2020);
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
     * @param  \App\forecasts  $forecasts
     * @return \Illuminate\Http\Response
     */
    public function show(forecasts $forecasts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\forecasts  $forecasts
     * @return \Illuminate\Http\Response
     */
    public function edit(forecasts $forecasts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\forecasts  $forecasts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, forecasts $forecasts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\forecasts  $forecasts
     * @return \Illuminate\Http\Response
     */
    public function destroy(forecasts $forecasts)
    {
        //
    }
}
