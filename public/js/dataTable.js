$(document).ready(function () {

    var table = $('#tablaEmpleados').DataTable({
        pageLength: 15,
        searching: true,
        scrollX: false,
        autoWidth: false,
        dom: 'tip',
        ordering: false,
        language: {
            info: "",
            zeroRecords: "No se encontraron resultados",
            infoEmpty: "",
            paginate: {
                previous: "<<",
                next: ">>"
            }
        },
        info: false,
        columnDefs: [{
            orderable: false,
            targets: 0
        }],
        order: [
            [1, 'asc']
        ],
        select: true
    });

    $('#busqueda').on('keyup', function () {
        table.search(this.value).draw();

    });

    $('#filtroCompania').on('change', function () {
        var valor = $(this).val();

        table.column(1).search(valor).draw();
    });


    table.on('order.dt search.dt draw.dt', function () {
        let pageInfo = table.page.info();

        table.column(0, {
            page: 'current'
        }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + pageInfo.start;
        });
    }).draw();




});

