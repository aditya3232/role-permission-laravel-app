<script>
    $(document).ready(function () {
        $('#table1').DataTable();
    });

</script>

<script>
    // $(document).ready(function () {
    //     $('#skck').DataTable({
    //         processing: true,
    //         serverSide: true,
    //         ajax: {
    //             url: "{{ route('admin.skck.datatable') }}",
    //             type: "POST",
    //             data: {
    //                 "_token": "{{ csrf_token() }}",
    //             },
    //         },
    //     });
    // });

    $(document).ready(function () {
        $('#skck').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "{{ route('admin.skck.datatable') }}",
                "dataType": "json",
                "type": "POST",
                "data": {
                    _token: "{{ csrf_token() }}"
                }
            },
            "columns": [{
                    "data": "id"
                },
                {
                    "data": "nama"
                },
                {
                    "data": "no_telepon"
                },
                {
                    "data": "alamat"
                },
                {
                    "data": "keperluan_skck"
                },
                {
                    "data": "created_at"
                },
                {
                    "data": "options"
                }
            ]

        });
    });

</script>
