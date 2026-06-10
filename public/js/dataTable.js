$(document).ready(function () {

    var table = $('#tablaEmpleados').DataTable({
        pageLength: 30,
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
        }, {
            targets: 8,
            render: function(data, type, row) {
                if (type === 'display' && data.includes('|')) {
                    var parts = data.split('|');
                    return '<span title="' + parts[1] + '">' + parts[0] + '</span>';
                }
                return data;
            }
        }],
        ordering:true,
        order: [[0, 'desc']],
        select: true
    });

    function cargarDatos() {
        var compania = $('#filtroCompania').val();
        var obra = $('#filtroObra').val();

        $.ajax({
            url: '../../controllers/empleadoController.php',
            type: 'GET',
            data: {
                action: 'getFiltered',
                compania: compania,
                obra: obra
            },
            dataType: 'json',
            success: function(data) {
                table.clear().rows.add(data).draw();
                actualizarNumeros();
            }
        });
    }

    function actualizarNumeros() {
        let pageInfo = table.page.info();
        table.column(0, {
            page: 'current'
        }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + pageInfo.start;
        });
    }

    $('#busqueda').on('keyup', function () {
        table.search(this.value).draw();
    });

    $('#filtroCompania').on('change', function () {
        cargarDatos();
    });

    $('#filtroObra').on('change', function () {
        cargarDatos();
    });

    table.on('order.dt search.dt draw.dt', function () {
        actualizarNumeros();
    });

    actualizarNumeros();

});

/********************************************************************************************** */
$(document).ready(function() {

                var table = $('#tablaContratos').DataTable({
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
