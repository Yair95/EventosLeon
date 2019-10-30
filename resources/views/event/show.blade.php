@extends('admin.layout')
@section('content')
    @include('provider.modal')
    <section class="content-header">
        <h1>Ver evento</h1>
    </section>

    @include('event.partials.form_show')

    <div class="box-body">
        <div class="form-group col-md-12">
        <h3>Servicios:</h3>
            <table id="services_event_table" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Servicio</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Provedor</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-12">
            <button class="btn btn-primary"

                data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i>Editar
            </button>
            <a class="btn btn-primary btn-md addNew" style="float: right;" href="{{ url('event') }}"><b>Lista de eventos</b></a>
        </div>
    </div>
@endsection

@section('adminlte_js')
    @include('event.partials.script_show')
@endsection
