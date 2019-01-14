<?php

namespace App\Http\Controllers;

use App\Client;
use App\data_contact;
use DB;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.index');
    }

    public function showTable()
    {
      $clients = DB::table('clients')
        ->select('clients.id','data_contacts.name','data_contacts.lastname','data_contacts.phone1',
        'clients.visits')
        ->join('data_contacts', 'data_contacts.id', '=', 'clients.data_contact_id')
        ->get();

        return Datatables::of($clients)
        ->addColumn('btn', 'client.actions')
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
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = data_contact::create($request->all());
        $client = New Client;
        $client->visits = 0;
        $client->data_contact_id = $data->id;
        $client->save();

        $clients = Client::all();
        return view('client.index',compact('clients'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
