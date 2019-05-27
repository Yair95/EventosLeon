<script>
    $("#serv").click(function (e) {
        e.preventDefault();
        chargeTable();
    });

    function chargeTable()
    {
        table = $('#event_services_create_table').DataTable({
            "bDestroy": true,
            stateSave: true,
            "ordering": false,
            "processing": true,
            "serverSide": true,
            "ajax": {
                type: "get",
                url: "{{route('event.showTableESC')}}",
                data: {
                    service_id: $('#service_id').val()
                }
            },
            "columns": [
                {data: 'service_name'},
                {data: 'description'},
                {data: 'cost'},
                {data: 'provider_name'},
                {data: 'btn'}
            ],
        });
    }
</script>
