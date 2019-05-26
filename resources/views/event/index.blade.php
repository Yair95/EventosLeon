@extends('admin.layout')

@section('adminlte_css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <meta name="csrf-token" = content="{{ csrf_token() }}">
@stop

@section('content-header')
  <h1>
    Eventos
    <small>Administración de Eventos</small>
  </h1>
@stop

@section('content')
      <h2>Lista de Eventos</h2>


        <a href="{{ url('event/create') }}" class="btn btn-success"
        style="Position:Absolute; left:93%; top:13%;">
          <i class="fas fa-plus-square"></i> Agregar</a>


      <div class="box-body">
          <table id="events_table" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th width="10px">Id</th>
                  <th>Cliente</th>
                  <th>Costo</th>
                  <th>Fecha de inicio</th>
                  <th>Fecha de fin</th>
                  <th>Status</th>
                  <th width="120px">Acciones</th>
              </tr>
          </thead>
      </table>
      </div>

@stop

@section('adminlte_js')
@stop
