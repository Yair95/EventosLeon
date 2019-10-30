<script>
table = $('#services_event_table').DataTable({
    "bDestroy": true,
    stateSave: true,
    "ordering": false,
    "processing": true,
    "serverSide": true,
    "ajax": {
        type: "get",
        url: "{{route('event.showTableESS')}}",
        data: {
            event_id: {{ $event->id }}
        }
    },
    "columns": [
        {data: 'service_name'},
        {data: 'description'},
        {data: 'cost'},
        {data: 'provider_name'}
    ],
});
</script>
