@extends('admin.layout')

@section('adminlte_css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@stop

@section('content-header')
  <h1>
    Clintes
    <small>Administración de clientes</small>
  </h1>
@stop

@section('content')
      <h1>Lista de clientes</h1>


      <div class="box-body">

          <table id="clients-table" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Teléfono 1</th>
                  <th>Vistas</th>
                  <th>Acciones</th>
              </tr>
          </thead>
          <tbody>
            @foreach($clients as $cli)
              <tr>
                <td>{{$cli->data_contact->name}}</td>
                <td>{{$cli->data_contact->lastname}}</td>
                <td>{{$cli->data_contact->phone1}}</td>
                <td>{{$cli->visits}}</td>
                <td> <button class="btn btn-primary"><i class="fa fa-eye"></i></button>
                  <button class="btn btn-info" data-nameclient="hello" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
              </tr>
            @endforeach
          </tbody>
      </table>
      </div>


    <!-- Modal -->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Editar cliente</h4>
          </div>
          <form action="{{route('client.update','modicli')}}" method="post">
          		{{method_field('patch')}}
          		{{csrf_field()}}
    	      <div class="modal-body">
    	      		<input type="hidden" name="category_id" id="cat_id" value="">
    				@include('client.edit')
    	      </div>
    	      <div class="modal-footer">
    	        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    	        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    	      </div>
          </form>
        </div>
      </div>
    </div>
@stop

@section('adminlte_js')
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(function () {
            $("#clients-table").DataTable();
        });
    </script>
@stop
