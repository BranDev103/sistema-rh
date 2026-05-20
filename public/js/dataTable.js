/**
 * Archivo JavaScript para inicializar DataTables en las tablas de empleados, contratos y bajas
 * y para agregar funcionalidades de búsqueda y filtrado por compañía en la tabla de empleados.
 * También se encarga de numerar las filas de manera dinámica en función de la paginación y el ordenamiento.
 */
$(document).ready(function () {

    var table = $('#tablaEmpleados').DataTable({
        pageLength: 20, // Número de filas por página
        searching: true,
        scrollX: false,
        autoWidth: false,
        dom: 'tip',
        language: {
            info: "",
            zeroRecords: "No se encontraron resultados",
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
        ordering:true,
        order: [[0, 'desc']],
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

/********************************************************************************************** */
$(document).ready(function() {

                var table = $('#tablaContratos').DataTable({
                    pageLength: 20,
                    searching: true,
                    scrollX: false,
                    autoWidth: false,
                    order:[[4,"desc"]],
                    dom: 'tip',
                    language: {
                        info: "",
                        zeroRecords: "No se encontraron resultados",
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
                    select: true
                });

                $('#busqueda').on('keyup', function() {
                    table.search(this.value).draw();

                });

                table.on('order.dt search.dt draw.dt', function() {
                    let pageInfo = table.page.info();

                    table.column(0, {
                        page: 'current'
                    }).nodes().each(function(cell, i) {
                        cell.innerHTML = i + 1 + pageInfo.start;
                    });
                }).draw();

            });

/***************************************************************************************************/

$(document).ready(function() {

                var table = $('#tablaBajas').DataTable({
                    pageLength: 15,
                    searching: true,
                    scrollX: false,
                    autoWidth: false,
                    order:[[4,"desc"]],
                    dom: 'tip',
                    language: {
                        info: "",
                        zeroRecords: "No se encontraron resultados",
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
                    select: true
                });

                $('#busqueda').on('keyup', function() {
                    table.search(this.value).draw();

                });

                table.on('order.dt search.dt draw.dt', function() {
                    let pageInfo = table.page.info();

                    table.column(0, {
                        page: 'current'
                    }).nodes().each(function(cell, i) {
                        cell.innerHTML = i + 1 + pageInfo.start;
                    });
                }).draw();

            });
