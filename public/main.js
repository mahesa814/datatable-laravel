$(document).ready(function () {
    $('#myTable').DataTable({
        ordering: true,
        serverSide: true,
        proccessing: true,
        ajx: {
            'url': $('#table-url').val()
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', width: '10px', orderable: false, searchable: false},
            {data: 'name', name: 'name'},
            {data: 'image', name: 'image'},
            {data: 'opsi', name: 'opsi', orderable: false, searchable: false},
        ],
        columsDefs: []
    });
});
