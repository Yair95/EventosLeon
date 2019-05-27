@extends('admin.layout')

@section('content')
    <section class="content-header">
        <h1>Eventos<small>Agregar Evento</small></h1>
    </section>

    <form action="{{url('event')}}" method="post">
        {{csrf_field()}}
        @include('event.form')
        <div class="form-group col-md-12">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
@endsection

@section('adminlte_js')
    @include('event.partials.script_create')
@stop
