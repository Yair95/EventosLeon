<script>

//DELETE
$('body').delegate('.status-user','click',function(){
        user_id = $(this).attr('user_id');
        var csrf_token=$('meta[name="csrf-token"]').attr('content');
        swal({
            title: "Estás seguro?",
            text: "Se eliminará el usuario",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
          if (willDelete) {
            $.ajax({
                url: "{{url('/user')}}" + '/' + user_id,
                headers: {'X-CSRF-TOKEN': csrf_token},
                type: 'DELETE',
                dataType: 'json',
                data: {id: user_id}
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