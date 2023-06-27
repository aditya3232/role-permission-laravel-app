<script>
    $(document).ready(function () {
        $('#table1').DataTable();
    });

</script>

<script>
    $(document).ready(function () {
        $('#skck').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.skck.datatable') }}",
                dataType: "json",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}"
                }
            },
            columns: [{
                    data: null,
                    "sortable": false,
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: "id"
                },
                {
                    data: "nama"
                },
                {
                    data: "no_telepon"
                },
                {
                    data: "alamat"
                },
                {
                    data: "keperluan_skck"
                },
                {
                    data: "created_at"
                },
                {
                    data: "options"
                }
            ],
            order: [
                [0, 'desc']
            ]

        });
    });

</script>

<script>
    $(document).ready(function () {
        $('#permissions').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.permissions.datatable') }}",
                dataType: "json",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}"
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // Do something here
                    console.log(Error);
                }
            },
            columns: [{
                    data: null,
                    "sortable": false,
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: "name"
                },
                {
                    data: "options",
                    "sortable": false,
                }
            ],
            order: [
                [0, 'desc']
            ]

        });
    });

</script>

<script>
    $(document).ready(function () {
        $('#roles').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.roles.datatable') }}",
                dataType: "json",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}"
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // Do something here
                    console.log(Error);
                }
            },
            columns: [{
                    data: null,
                    "sortable": false,
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: "name"
                },
                {
                    data: "options",
                    "sortable": false,
                }
            ],
            order: [
                [0, 'desc']
            ]

        });
    });

</script>

<script>
    $(document).ready(function () {
        $('#users').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.users.datatable') }}",
                dataType: "json",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}"
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // Do something here
                    console.log(Error);
                }
            },
            columns: [{
                    data: null,
                    "sortable": false,
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: "name"
                },
                {
                    data: "email"
                },
                {
                    data: "role"
                },
                {
                    data: "options",
                    "sortable": false,
                }
            ],
            order: [
                [0, 'desc']
            ]

        });
    });

</script>

<script>
    $(document).ready(function () {
        $('#form_sidik_jari').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.formsidikjari.datatable') }}",
                dataType: "json",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}"
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // Do something here
                    console.log(Error);
                }
            },
            columns: [{
                    data: null,
                    "sortable": false,
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: "nama"
                },
                {
                    data: "nik"
                },
                {
                    data: "alamat_saat_ini"
                },
                {
                    data: "no_telp"
                },
                {
                    data: "email"
                },
                {
                    data: "options",
                    "sortable": false,
                }
            ],
            order: [
                [5, 'desc'] // Id column (index 5) in descending order
            ]

        });
    });

</script>
