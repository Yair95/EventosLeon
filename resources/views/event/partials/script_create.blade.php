<script>
    $("#serv").click(function (e) {
        e.preventDefault();
        chargeTable();
    });

    var sub_total = document.getElementById("subtotal");
    sub_total.addEventListener("click", function() {
        getTotal();
    });
    sub_total.addEventListener("change", function() {
        getTotal();
    });

    var disc = document.getElementById("discount");
    disc.addEventListener("click", function() {
        getTotal();
    });
    disc.addEventListener("change", function() {
        getTotal();
    });

    function getTotal()
    {
        discount = $('#discount').val();
        subtotal = $('#subtotal').val();
        total = subtotal - discount;
        $('#total').val(total);
    }

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
            "footerCallback": function ( row, data, start, end, display ) {
                var api = this.api(), data;

                // Remove the formatting to get integer data for summation
                var intVal = function ( i ) {
                    return typeof i === 'string' ?
                        i.replace(/[\$,]/g, '')*1 :
                        typeof i === 'number' ?
                            i : 0;
                };

                // Total over all pages
                total = api
                    .column( 5 )
                    .data()
                    .reduce( function (a, b) {
                        return intVal(a) + intVal(b);
                }, 0 );

                subtotal = $('#total').val();
                $('#total').val(total + subtotal);
            }
        });
    }
</script>
