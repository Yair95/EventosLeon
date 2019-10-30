<script>
//DATATABLE
var table=null;
table = $('#events_table').DataTable({
    "processing": true,
    "serverSide": true,
    "ajax": "{{route('event.showTableE')}}",
    "columns": [
        {data: 'client_name'},
        {data: 'total'},
        {data: 'date_start'},
        {data: 'date_end'},
        {data: 'status'},
        {data: 'btn'}
    ],
    "language": {
  "info": "_TOTAL_ registros",
  "search": "Buscar",
  "paginate": {
    "next": "Siguiente",
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
}
});

//EDIT
$('#edit').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id = button.data('id')
    var client_id = button.data('client_id')
    var total = button.data('total')
    var additional_hour = button.data('additional_hour')
    var additional_people = button.data('additional_people')
    var date_start = button.data('date_start')
    var date_end = button.data('date_end')
    var discount = button.data('discount')
    var status = button.data('status')
    var people = button.data('people')
    var modal = $(this)
    modal.find('.modal-body #id').val(id);
    modal.find('.modal-body #client_id').val(client_id);
    modal.find('.modal-body #total').val(total);
    modal.find('.modal-body #additional_hour').val(additional_hour);
    modal.find('.modal-body #additional_people').val(additional_people);
    modal.find('.modal-body #date_start').val(date_start);
    modal.find('.modal-body #date_start').val(date_start);
    modal.find('.modal-body #date_end').val(date_end);
    modal.find('.modal-body #discount').val(discount);
    modal.find('.modal-body #status').val(status);
    modal.find('.modal-body #people').val(people);
});

//DELETE
$('body').delegate('.status-event','click',function(){
        event_id = $(this).attr('event_id');
        console.log(event_id);
        var csrf_token=$('meta[name="csrf-token"]').attr('content');
        swal({
            title: "Estás seguro?",
            text: "Se eliminará el evento",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
          if (willDelete) {
            $.ajax({
                url: "{{url('/event')}}" + '/' + event_id,
                headers: {'X-CSRF-TOKEN': csrf_token},
                type: 'DELETE',
                dataType: 'json',
                data: {id: event_id}
            }).done(function(data){
              table.ajax.reload();
              sAlert(data.title, data.text, data.icon);
            });
          }
        });
    });


//SWETALERT
@if (Session::has('message'))
        sAlert(
        "{{ Session::get('message.title') }}",
        "{{ Session::get('message.text') }}",
        "{{ Session::get('message.icon') }}"
    );
@endif

function sAlert(title, text, icon)
{
  swal({
    title: title,
    text: text,
    icon: icon,
    button: "Continue",
    timer: 3000
  });
}
</script>
