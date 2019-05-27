<?php

namespace App\Http\Controllers;

use App\Event;
use App\Client;
use App\Service;
use App\TemporaryEventService;
use Illuminate\Http\Request;
use DB;
use Yajra\DataTables\DataTables;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('event.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::select('*')->get();
        $services = Service::select('*')->get();
        return view('event.create')->with('clients', $clients)->with('services', $services);
    }

    public function showTableESC(Request $request)
    {
        //Tabla temporal para events - servies??
        dd($request);
        $data = TemporaryEventService::create($request->all());
        /*$temporary_service = New TemporaryEventService;
        $temporary_product->price_id = $price_id;
        $temporary_product->capture_id = $request->capture_id;
        $temporary_product->quantity = $request->quantity;
        $temporary_product->total = $request->total;
        $temporary_product->extra = $request->extra;
        $temporary_product->save();*/
        /*$toTable = DB::table('temporary_event_services')
            ->select(
                'temporary_capture_products.id as temporary_id', 'temporary_capture_products.quantity', 'temporary_capture_products.extra', 'temporary_capture_products.total',
                'prices.id as price_id', 'prices.price', 'prices.unity',
                'products.id as product_id', 'products.concept'
            )
            ->where('temporary_capture_products.capture_id', '=', $request->capture_id)
            ->join('prices', 'prices.id', '=', 'temporary_capture_products.price_id')
            ->join('products', 'products.id', '=', 'prices.product_id')
            ->get();

        return Datatables::of($toTable)
            ->addColumn('btn', 'capture.partials.buttons_product')
            ->rawColumns(['btn'])
            ->make(true);*/
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
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
