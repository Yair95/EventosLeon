<?php

namespace App\Http\Controllers;

use DB;
use App\Service;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('service.index');
    }

    public function showTableS()
    {
        $services = DB::table('services')
            ->select( 'services.*')
            // ->join('services.data_contact_id')
            ->get();

        return Datatables::of($services)
            ->addColumn('btn', 'service.partials.buttons')
            ->rawColumns(['btn'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$data = data_contact::create($request->all());
        //Sigo trabajando en esto
        $service = New Service;
        $service->service_name = $request->service_name;
        $service->description = $request->description;
        $service->cost = $request->cost;
        $service->provider_name = $request->provider_name;
        $service->save();

        $msg = [
            'title' => 'Creado!',
            'text' => 'Servicio creado exitosamente.',
            'icon' => 'success'
        ];

        return redirect('service')->with('message', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('service.show')->with('service', $service);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
      $service = service::findOrFail($request->id);
      $service->service->update($request->all());
      $msg = [
          'title' => 'Modificado!',
          'text' => 'Servicio modificado exitosamente.',
          'icon' => 'success'
      ];

    return redirect('service')->with('message', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
