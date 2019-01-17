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
      <h2>Lista de clientes</h2>
      <div class="box-body">
          <table id="clients-table" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th width="10px">Id</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Teléfono 1</th>
                  <th>Visitas</th>
                  <th width="120px">Acciones</th>
              </tr>
          </thead>
      </table>
      </div>

      @include('client.modal')
@stop

@section('adminlte_js')
  <script>

  /*$(document).on('click', '.button', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this imaginary file!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax({
          type: "DELETE",
          //url: "url(/client/"+id")",
          url: "{//{route('client.destroy', id)}}"
          //data: {id:id}
        });



        swal("Poof! Your imaginary file has been deleted!", {
          icon: "success",
        });
      };
    });
});*/

  function add(id)
  {
    alert("nuevl");
    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this imaginary file!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax({
          type: "DELETE",
          //url: "url(/client/"+id")",
          //url: "{//{route('client.destroy')}}"
          //data: {id:id}
        });



        /*swal("Poof! Your imaginary file has been deleted!", {
          icon: "success",
        });*/
      };
    });
  }

  $('#edit').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var id = button.data('idclient')
      var name = button.data('nameclient')
      var lastname = button.data('lastnameclient')
      var phone1 = button.data('phone1client')
      var phone2 = button.data('phone2client')
      var email = button.data('emailclient')
      var prestige = button.data('prestigeclient')
      var comments = button.data('commentsclient')
      var data_id = button.data('iddata')
      var modal = $(this)
      modal.find('.modal-body #cli_id').val(id);
      modal.find('.modal-body #name').val(name);
      modal.find('.modal-body #lastname').val(lastname);
      modal.find('.modal-body #phone1').val(phone1);
      modal.find('.modal-body #phone2').val(phone2);
      modal.find('.modal-body #email').val(email);
      modal.find('.modal-body #prestige').val(prestige);
      modal.find('.modal-body #comments').val(comments);
      modal.find('.modal-body #data_id').val(data_id);
  });


  </script>



  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

  <script>
      $(document).ready(function() {
          $('#clients-table').DataTable({
              "processing": true,
              "serverSide": true,
              "ajax": "{{route('client.showTable')}}",
              "columns": [
                  {data: 'id'},
                  {data: 'name'},
                  {data: 'lastname'},
                  {data: 'phone1'},
                  {data: 'visits'},
                  {data: 'btn'}
              ],
              "language": {
                "info": "_TOTAL_ registros",
                "search": "Buscar",
                "paginate": {
                  "next": "Siguinte",
                  "previous": "Anterior",
                },
                "lengthMenu": 'Mostrar <select>'+
                    '<option value="10">10</option>'+
                    '<option value="30">30</option>'+
                    '<option value="-1">Todos</option>'+
                    '</select> registros',
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "emptyTable": "No hay datos",
                "zeroRecords": "No hay coincidencias",
                "infoEmpty": "",
                "infoFiltered": ""
              }/*,
              "initComplete":function(settings, json){
      console.log(json);
    }*/
          });


      });


  </script>
@stop
