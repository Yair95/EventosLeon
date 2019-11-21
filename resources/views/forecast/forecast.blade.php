@extends('admin.layout')
@section('content-header')
  <h1>
    Pronostico para el año 2020
    <small>Administración de Servicios</small>
  </h1>
@stop

@section('content')
    <h2>Pronóstico de demanda para el año 2020</h2>

    <div class="box-body">
        <div class="form-group">
            <div class="form-group col-md-6">
                <h3>Eventos por mes del año 2018</h3>
                <table id="events_2018" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Mes</th>
                            <th>Cantidad</th>
                        </tr>
                        <tr>
                            <td>Enero</td>
                            <td>{{ $enero2018 }}</td>
                        </tr>
                        <tr>
                            <td>Febrero</td>
                            <td>{{ $febrero2018 }}</td>
                        </tr>
                        <tr>
                            <td>Marzo</td>
                            <td>{{ $marzo2018 }}</td>
                        </tr>
                        <tr>
                            <td>Abril</td>
                            <td>{{ $abril2018 }}</td>
                        </tr>
                        <tr>
                            <td>Mayo</td>
                            <td>{{ $mayo2018 }}</td>
                        </tr>
                        <tr>
                            <td>Junio</td>
                            <td>{{ $junio2018 }}</td>
                        </tr>
                        <tr>
                            <td>Julio</td>
                            <td>{{ $julio2018 }}</td>
                        </tr>
                        <tr>
                            <td>Agosto</td>
                            <td>{{ $agosto2018 }}</td>
                        </tr>
                        <tr>
                            <td>Septiembre</td>
                            <td>{{ $septiembre2018 }}</td>
                        </tr>
                        <tr>
                            <td>Octubre</td>
                            <td>{{ $octubre2018 }}</td>
                        </tr>
                        <tr>
                            <td>Noviembre</td>
                            <td>{{ $noviembre2018 }}</td>
                        </tr>
                        <tr>
                            <td>Diciembre</td>
                            <td>{{ $diciembre2018 }}</td>
                        </tr>
                    </thead>
                </table>
            </div>
            
            <div class="form-group col-md-6">
                <h3>Eventos por mes del año 2019</h3>
                <table id="events_2019" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Mes</th>
                            <th>Cantidad</th>
                        </tr>
                        <tr>
                            <td>Enero</td>
                            <td>{{ $enero2019 }}</td>
                        </tr>
                        <tr>
                            <td>Febrero</td>
                            <td>{{ $febrero2019 }}</td>
                        </tr>
                        <tr>
                            <td>Marzo</td>
                            <td>{{ $marzo2019 }}</td>
                        </tr>
                        <tr>
                            <td>Abril</td>
                            <td>{{ $abril2019 }}</td>
                        </tr>
                        <tr>
                            <td>Mayo</td>
                            <td>{{ $mayo2019 }}</td>
                        </tr>
                        <tr>
                            <td>Junio</td>
                            <td>{{ $junio2019 }}</td>
                        </tr>
                        <tr>
                            <td>Julio</td>
                            <td>{{ $julio2019 }}</td>
                        </tr>
                        <tr>
                            <td>Agosto</td>
                            <td>{{ $agosto2019 }}</td>
                        </tr>
                        <tr>
                            <td>Septiembre</td>
                            <td>{{ $septiembre2019 }}</td>
                        </tr>
                        <tr>
                            <td>Octubre</td>
                            <td>{{ $octubre2019 }}</td>
                        </tr>
                        <tr>
                            <td>Noviembre</td>
                            <td>{{ $noviembre2019 }}</td>
                        </tr>
                        <tr>
                            <td>Diciembre</td>
                            <td>{{ $diciembre2019 }}</td>
                        </tr>
                    </thead>
                </table>
            </div>

            <div class="form-group col-md-6">
                    <h3>A través del método de regresión líenal y con los datos obtenidos de los respectivos años, se pronostica la siguiente demanda para el año 2020</h3>
                    <table id="events_2019" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Mes</th>
                                <th>Cantidad</th>
                            </tr>
                            <tr>
                                <td>Enero</td>
                                <td>{{ $enero2019 }}</td>
                            </tr>
                            <tr>
                                <td>Febrero</td>
                                <td>{{ $febrero2019 }}</td>
                            </tr>
                            <tr>
                                <td>Marzo</td>
                                <td>{{ $marzo2019 }}</td>
                            </tr>
                            <tr>
                                <td>Abril</td>
                                <td>{{ $abril2019 }}</td>
                            </tr>
                            <tr>
                                <td>Mayo</td>
                                <td>{{ $mayo2019 }}</td>
                            </tr>
                            <tr>
                                <td>Junio</td>
                                <td>{{ $junio2019 }}</td>
                            </tr>
                            <tr>
                                <td>Julio</td>
                                <td>{{ $julio2019 }}</td>
                            </tr>
                            <tr>
                                <td>Agosto</td>
                                <td>{{ $agosto2019 }}</td>
                            </tr>
                            <tr>
                                <td>Septiembre</td>
                                <td>{{ $septiembre2019 }}</td>
                            </tr>
                            <tr>
                                <td>Octubre</td>
                                <td>{{ $octubre2019 }}</td>
                            </tr>
                            <tr>
                                <td>Noviembre</td>
                                <td>{{ $noviembre2019 }}</td>
                            </tr>
                            <tr>
                                <td>Diciembre</td>
                                <td>{{ $diciembre2019 }}</td>
                            </tr>
                        </thead>
                    </table>
                </div>
        
        </div>
    </div>
@stop

@section('adminlte_js')
  @//include('service.partials.script')
@stop
