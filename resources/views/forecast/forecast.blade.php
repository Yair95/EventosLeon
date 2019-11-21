@extends('admin.layout')
@section('content-header')
  <h1>
    Pronostico para el año 2020
    <small>Administración de Servicios</small>
  </h1>
@stop

@section('content')
<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">


      // Load Charts and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart for Sarah's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(drawSarahChart);

      // Draw the pie chart for Sarah's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(draw2019Chart);

      // Draw the pie chart for the Anthony's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(drawAnthonyChart);

      // Callback that draws the pie chart for Sarah's pizza.
       function drawSarahChart() {

        // Create the data table for Sarah's pizza.
        var data = google.visualization.arrayToDataTable([
        ['Mes', 'Demanda'],
        ['enero',     {{$enero2018}}],
        ['febrero',   {{$febrero2018}}],
        ['marzo',  {{$marzo2018}}],
        ['abril',  {{$abril2018}}],
        ['mayo',  {{$mayo2018}}],
        ['junio',  {{$junio2018}}],
        ['julio',  {{$julio2018}}],
        ['agosto',  {{$agosto2018}}],
        ['septiembre',  {{$septiembre2018}}],
        ['octubre',  {{$octubre2018}}],
        ['noviembre',  {{$noviembre2018}}],
        ['diciembre',  {{$diciembre2018}}]
      ]);

      var options = {title:'Eventos mensuales 2018',
                     width:550,
                     height:400};

        // Instantiate and draw the chart for Sarah's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('Sarah_chart_div'));
        chart.draw(data, options);
      } 

      function draw2019Chart() {

        // Create the data table for Sarah's pizza.
        var data = google.visualization.arrayToDataTable([
        ['Mes', 'Demanda'],
        ['enero',     {{$enero2019}}],
        ['febrero',   {{$febrero2019}}],
        ['marzo',  {{$marzo2019}}],
        ['abril',  {{$abril2019}}],
        ['mayo',  {{$mayo2019}}],
        ['junio',  {{$junio2019}}],
        ['julio',  {{$julio2019}}],
        ['agosto',  {{$agosto2019}}],
        ['septiembre',  {{$septiembre2019}}],
        ['octubre',  {{$octubre2019}}],
        ['noviembre',  {{$noviembre2019}}],
        ['diciembre',  {{$diciembre2019}}]
        ]);

        var options = {title:'Eventos mensuales 2019',
                    width:550,
                    height:400};

        // Instantiate and draw the chart for Sarah's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('2019_chart_div'));
        chart.draw(data, options);
    } 

      // Callback that draws the pie chart for Anthony's pizza.
      function drawAnthonyChart() {

        // Create the data table for Anthony's pizza.
        var data = google.visualization.arrayToDataTable([
        ['Mes', 'Demanda'],
        ['enero',     {{$demanda_enero2020}}],
        ['febrero',   {{$demanda_febrero2020}}],
        ['marzo',  {{$demanda_marzo2020}}],
        ['abril',  {{$demanda_abril2020}}],
        ['mayo',  {{$demanda_mayo2020}}],
        ['junio',  {{$demanda_junio2020}}],
        ['julio',  {{$demanda_julio2020}}],
        ['agosto',  {{$demanda_agosto2020}}],
        ['septiembre',  {{$demanda_septiembre2020}}],
        ['octubre',  {{$demanda_octubre2020}}],
        ['noviembre',  {{$demanda_noviembre2020}}],
        ['diciembre',  {{$demanda_diciembre2020}}]
      ]);

      var options = {title:'Demanda mensual 2020',
                     width:550,
                     height:400};

        // Instantiate and draw the chart for Anthony's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('Anthony_chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>

    <h2>Pronóstico de demanda para el año 2020</h2>

    <div class="box-body">
        <div class="form-group">
            <div class="col-md-12">
                <h3>Eventos por mes del año 2018</h3>
                <div class="col-md-6">
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

                <div class="col-md-6">
                    <table class="columns">
                        <tr>
                            <td><div id="Sarah_chart_div" style="border: 1px solid #ccc"></div></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="col-md-12">
                <h3>Eventos por mes del año 2019</h3>
                <div class="col-md-6">
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

                <div class="col-6">
                    <table class="columns">
                        <tr>
                            <td><div id="2019_chart_div" style="border: 1px solid #ccc"></div></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="form-group col-md-6">
                <h3>Pronóstico de la demanda año 2020</h3>
                <table id="events_2019" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Mes</th>
                            <th>Cantidad</th>
                        </tr>
                        <tr>
                            <td>Enero</td>
                            <td>{{ $demanda_enero2020 }}</td>
                        </tr>
                        <tr>
                            <td>Febrero</td>
                            <td>{{ $demanda_febrero2020 }}</td>
                        </tr>
                        <tr>
                            <td>Marzo</td>
                            <td>{{ $demanda_marzo2020 }}</td>
                        </tr>
                        <tr>
                            <td>Abril</td>
                            <td>{{ $demanda_abril2020 }}</td>
                        </tr>
                        <tr>
                            <td>Mayo</td>
                            <td>{{ $demanda_mayo2020 }}</td>
                        </tr>
                        <tr>
                            <td>Junio</td>
                            <td>{{ $demanda_junio2020 }}</td>
                        </tr>
                        <tr>
                            <td>Julio</td>
                            <td>{{ $demanda_julio2020 }}</td>
                        </tr>
                        <tr>
                            <td>Agosto</td>
                            <td>{{ $demanda_agosto2020 }}</td>
                        </tr>
                        <tr>
                            <td>Septiembre</td>
                            <td>{{ $demanda_septiembre2020 }}</td>
                        </tr>
                        <tr>
                            <td>Octubre</td>
                            <td>{{ $demanda_octubre2020 }}</td>
                        </tr>
                        <tr>
                            <td>Noviembre</td>
                            <td>{{ $demanda_noviembre2020 }}</td>
                        </tr>
                        <tr>
                            <td>Diciembre</td>
                            <td>{{ $demanda_diciembre2020 }}</td>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="form-group col-md-6">
                <table class="columns">
                    <tr>
                {{--  <td><div id="Sarah_chart_div" style="border: 1px solid #ccc"></div></td> --}}
                      <td><div id="Anthony_chart_div" style="border: 1px solid #ccc"></div></td>
                    </tr>
                  </table>
            </div>
        </div>
    </div>
</html>
@stop